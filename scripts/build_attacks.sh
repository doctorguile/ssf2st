#!/bin/bash

DIC_FILE="../../scripts/dictionaries.sh"
DIC_FILE_SPECIFIC="./dictionaries.sh"
if [ -f $DIC_FILE ];
then
    . $DIC_FILE
    . $DIC_FILE_SPECIFIC
else
    echo "$DIC_FILE not found"
    exit 1
fi

sed '/      <div id="attack-index">/q' index.html > top.html
sed -n '/      <\/div id="attack-index">/, $p' index.html > bottom.html

echo "" > attacks.html

echo "        <div class=\"categories\">" >> attacks.html
echo "          <div class=\"tab toggled\" id=\"tab-1\">" >> attacks.html
echo "            <p>Normals</p>" >> attacks.html
echo "          </div>" >> attacks.html
echo "          <div class=\"tab\" id=\"tab-2\">" >> attacks.html
echo "            <p>Aerials</p>" >> attacks.html
echo "          </div>" >> attacks.html
echo "          <div class=\"tab\" id=\"tab-3\">" >> attacks.html
echo "            <p>Specials</p>" >> attacks.html
echo "          </div>" >> attacks.html
echo "          <div class=\"tab\" id=\"tab-4\">" >> attacks.html
echo "            <p>Misc</p>" >> attacks.html
echo "          </div>" >> attacks.html
echo "        </div>" >> attacks.html
echo "        <div class=\"moves\">" >> attacks.html
echo "          <ul class=\"index visible\" id=\"normals\">" >> attacks.html


normals=()
aerials=()
specials=()
misc=()

for move in $(echo */ | tr -d "/"); do

    if [[ $move =~ [0-9][0-9][0-9][0-9]-.* ]]; then
        dic_entry=$(echo $move | cut -d "-" -f 2)
    else
	dic_entry=$move
    fi
        
    move_name_en=${dic_en[$dic_entry]}
    move_name_alt=${dic_alt[$dic_entry]}
    move_name_fr=${dic_fr[$dic_entry]}
    move_name_es=${dic_es[$dic_entry]}
    move_name_jp=${dic_jp[$dic_entry]}

    move_name_en=$(echo "${move_name_en^}")
    move_name_alt=$(echo "${move_name_alt^}")
    move_name_fr=$(echo "${move_name_fr^}")
    move_name_es=$(echo "${move_name_es^}")
    move_name_jp=$(echo "${move_name_jp^}")
    
    line_en=$(echo "            <li><a style=\"display: none;\" lang=\"en\" href='#"$move"'>"${move_name_en}"</a></li>" | tr " " "?")
    line_alt=$(echo "            <li><a style=\"display: none;\" lang=\"alt\" href='#"$move"'>"${move_name_en}"</a></li>" | tr " " "?")
    line_fr=$(echo "            <li><a style=\"display: none;\" lang=\"fr\" href='#"$move"'>"${move_name_fr}"</a></li>" | tr " " "?")
    line_es=$(echo "            <li><a style=\"display: none;\" lang=\"es\" href='#"$move"'>"${move_name_es}"</a></li>" | tr " " "?")
    line_jp=$(echo "            <li><a style=\"display: none;\" lang=\"jp\" href='#"$move"'>"${move_name_jp}"</a></li>" | tr " " "?")

    if [[ $move =~ 00[0-9][0-9]-.* ]]; then
	normals+=$line_en
	normals+=$line_alt
	normals+=$line_fr
	normals+=$line_es
	normals+=$line_jp
	normals+=" "
    elif [[ $move =~ 01[0-9][0-9]-.* ]]; then
	aerials+=$line_en
	aerials+=$line_alt
	aerials+=$line_fr
	aerials+=$line_es
	aerials+=$line_jp
	aerials+=" "
    elif [[ $move =~ 1[0-9][0-9][0-9]-.* ]]; then
	specials+=$line_en
	specials+=$line_alt
	specials+=$line_fr
	specials+=$line_es
	specials+=$line_jp
	specials+=" "
    else
	misc+=$line_en
	misc+=$line_alt
	misc+=$line_fr
	misc+=$line_es
	misc+=$line_jp
	misc+=" "
    fi
	      
done


for normal_line in ${normals[@]}; do
    echo $normal_line | tr "?" " ">> attacks.html
done
echo "          </ul>" >> attacks.html
echo "          <ul class=\"index\" id=\"aerials\">" >> attacks.html
for aerial_line in ${aerials[@]}; do
    echo $aerial_line | tr "?" " " >> attacks.html
done
echo "          </ul>" >> attacks.html
echo "          <ul class=\"index\" id=\"specials\">" >> attacks.html
for special_line in ${specials[@]}; do
    echo $special_line | tr "?" " " >> attacks.html
done
echo "          </ul>" >> attacks.html
echo "          <ul class=\"index\" id=\"misc\">" >> attacks.html
for misc_line in ${misc[@]}; do
    echo $misc_line | tr "?" " " >> attacks.html
done
echo "          </ul>" >> attacks.html
echo "        </div>" >> attacks.html

cat top.html attacks.html bottom.html > index.html
rm top.html bottom.html attacks.html
