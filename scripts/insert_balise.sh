#!/bin/bash

sed '/  <\/footer>/q' index.html > top.html
sed -n '/<\/body>/, $p' index.html > bottom.html


echo "" > scripts.html

echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>" >> scripts.html
echo "   <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js\"></script>" >> scripts.html
echo "   <script src=\"../../atkIndex.js\"></script>" >> scripts.html
echo "   <script src=\"../../dragndrop.js\"></script>" >> scripts.html

cat top.html scripts.html bottom.html > index.html
rm top.html bottom.html scripts.html
