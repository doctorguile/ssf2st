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

sed '/<section id="hitbox-list">/q' index.html > top.html
sed -n '/<\/section id="hitbox-list">/, $p' index.html > bottom.html


echo "" > table.html

for move in $(echo */ | tr -d "/"); do
    
    dic_entry=$(echo $move)
    if [[ $dic_entry =~ [0-9][0-9][0-9][0-9]-.* ]]; then
        dic_entry=$(echo $dic_entry | cut -d "-" -f 2)
	
	if [ ! -v dic_en[$dic_entry] ]; then
	    echo "[WARN] missing english translation for $dic_entry"
	fi
	if [ ! -v dic_alt[$dic_entry] ]; then
	    echo "[WARN] missing alternative translation for $dic_entry"
	fi
	if [ ! -v dic_fr[$dic_entry] ]; then
	    echo "[WARN] missing french translation for $dic_entry"
	fi
	if [ ! -v dic_es[$dic_entry] ]; then
	    echo "[WARN] missing spanish translation for $dic_entry"
	fi
	if [ ! -v dic_jp[$dic_entry] ]; then
	    echo "[WARN] missing japanese translation for $dic_entry"
	fi
	
	move_name_en=${dic_en[$dic_entry]}
	move_name_alt=${dic_alt[$dic_entry]}
	move_name_fr=${dic_fr[$dic_entry]}
    	move_name_es=${dic_es[$dic_entry]}
	move_name_jp=${dic_jp[$dic_entry]}
    fi
    move_name_en=$(echo "${move_name_en^}")
    move_name_alt=$(echo "${move_name_alt^}")
    move_name_fr=$(echo "${move_name_fr^}")
    move_name_es=$(echo "${move_name_es^}")
    move_name_jp=$(echo "${move_name_jp^}")
    echo "
     <div id=\"$move\" class=\"move\">
       <div class=\"heading\">
         <h2 style=\"display: none;\" lang=\"en\">$move_name_en</h2>
	 <h2 style=\"display: none;\" lang=\"alt\">$move_name_alt</h2>
	 <h2 style=\"display: none;\" lang=\"fr\">$move_name_fr</h2>
       	 <h2 style=\"display: none;\" lang=\"es\">$move_name_es</h2>
	 <h2 style=\"display: none;\" lang=\"jp\">$move_name_jp</h2>
       </div>
     <div class=\"screenshots\">" >> table.html

    for image in $(find $move -name "*.png" -o -name "*.gif" | sort -V); do
	image_id=$(basename $image | cut -d "." -f 1)
	echo "<img id=\"$image_id\" alt=\"$move\" class=\"movesetimg hoverbox\" src=\"./$image\">" >> table.html 
    done
    
    echo "</div>
    </div>" >> table.html
done

cat top.html table.html bottom.html > index.html
rm top.html bottom.html table.html
