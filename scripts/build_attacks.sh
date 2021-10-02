#!/bin/bash

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
	move_name=$(echo $move | cut -d "-" -f 2 | tr "_" " ")
    else
	move_name=$(echo $move | tr "_" " ")
    fi

    move_name=$(echo "${move_name^}")
    line=$(echo "            <li><a href='#"$move"'>$move_name</a></li>" | tr " " "?")

    if [[ $move =~ 00[0-9][0-9]-.* ]]; then
	normals+=$line
	normals+=" "
    elif [[ $move =~ 01[0-9][0-9]-.* ]]; then
	aerials+=$line
	aerials+=" "
    elif [[ $move =~ 1[0-9][0-9][0-9]-.* ]]; then
	specials+=$line
	specials+=" "
    else
	misc+=$line
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
