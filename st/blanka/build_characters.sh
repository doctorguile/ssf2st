#!/bin/bash

echo "" > table.html

for move in $(echo */ | tr -d "/"); do
    echo "  <a name=\"$move\" id=\"$move\"></a>" >> table.html
    echo '  <table cellspacing="0" cellpadding="0" width="100%">' >> table.html
    echo '    <tr class="movename">' >> table.html
    echo "      <td class=\"movename\">$move</td>" >> table.html
    echo '      <td class="back-to-top" align="right">' >> table.html
    echo '      </td>' >> table.html
    echo '    </tr>' >> table.html
    echo '    <tr>' >> table.html
    echo '      <td colspan="2">' >> table.html
    echo '        <table>' >> table.html
    echo '          <tr>' >> table.html
    echo '            <td>' >> table.html
    echo '              <div style="padding-top:3px">' >> table.html

    for image in $(find $move -name "*.png" | sort -V); do
	image_id=$(basename $image | cut -d "." -f 1)
	echo "		<img id=\"$image_id\" class=\"movesetimg hoverbox\"" >> table.html
	echo "		     style=\"float:left\" src=\"./$image\">" >> table.html
    done
    
    echo '            </td>' >> table.html
    echo '          </tr>' >> table.html
    echo '        </table>' >> table.html
    echo '      </td>' >> table.html
    echo '    </tr>' >> table.html
    echo '  </table>' >> table.html
    echo '  <br>' >> table.html
done
