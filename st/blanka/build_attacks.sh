#!/bin/bash

sed '/</ul id="attack-index">/q' index.html > top.html
sed -n '/<\/ul id="attack-index">/, $p' index.html > bottom.html

echo "" > attacks.html

for move in $(echo */ | tr -d "/"); do
    echo "<li><a href='#$move'>$move</a></li>" >> attacks.html

    for image in $(find $move -name "*.png" | sort -V); do
	image_id=$(basename $image | cut -d "." -f 1)
	echo "<img id=\"$image_id\" alt=\"$move\" class=\"movesetimg hoverbox\" src=\"./$image\">" >> attacks.html
    done
    
    echo "</div>
    </div>" >> attacks.html
done

cat top.html attacks.html bottom.html > index.html
rm top.html bottom.html attacks.html
