#!/bin/bash

sed '/<ul id="attack-index">/q' index.html > top.html
sed -n '/<\/ul id="attack-index">/, $p' index.html > bottom.html

echo "" > attacks.html

for move in $(echo */ | tr -d "/"); do

    if [[ $move =~ [0-9][0-9][0-9][0-9]-.* ]]; then
	move_name=$(echo $move | cut -d "-" -f 2)
    fi
    
    echo "<li><a href='#"$move"'>$move_name</a></li>" >> attacks.html
done

cat top.html attacks.html bottom.html > index.html
rm top.html bottom.html attacks.html
