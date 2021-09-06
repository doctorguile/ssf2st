#!/bin/bash

sed '/<section id="hitbox-list">/q' index.html > top.html
sed -n '/<\/section id="hitbox-list">/, $p' index.html > bottom.html

echo "" > table.html

for move in $(echo */ | tr -d "/"); do
    
    move_no_underscore=$(echo $move | tr '_' ' ')

    echo "
     <div id=\"$move\" class=\"move\">
       <div class=\"heading\">
         <h2>$move_no_underscore</h2>
         <a href=\"#top\">Back to top</a>
       </div>
     <div class=\"screenshots\">" >> table.html

    for image in $(find $move -name "*.png" | sort -V); do
	image_id=$(basename $image | cut -d "." -f 1)
	echo "<img id=\"$image_id\" alt=\"$move\" class=\"movesetimg hoverbox\" src=\"./$image\">" >> table.html
    done
    
    echo "</div>
    </div>" >> table.html
done

cat top.html table.html bottom.html > index.html
rm top.html bottom.html table.html
