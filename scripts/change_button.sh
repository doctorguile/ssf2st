#!/bin/bash

sed '/  <\/section id="hitbox-list">/q' index.html > top.html
sed -n "/  <footer>/, \$p" index.html > bottom.html

echo "" > button_addp.html
echo "  <div id='addimagemenu'>" >> button_addp.html 
echo "    <a href=\"javascript:add1p();\">1P</a>" >> button_addp.html
echo "    <a href=\"javascript:add2p();\">2P</a>" >> button_addp.html
echo "  </div>" >> button_addp.html
echo "" >> button_addp.html

cat top.html button_addp.html bottom.html > index.html
rm top.html bottom.html button_addp.html
