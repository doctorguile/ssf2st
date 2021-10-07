#/bin/bash

wget https://srk.shib.live/w/Super_Street_Fighter_2_Turbo/Ken
cat Ken | grep img | grep 'src="/images' | grep Ken | grep valign | cut -d '"' -f 14 > Ken_ref_png.txt
sed -i.bak 's$^$https://srk.shib.live$' Ken_ref_png.txt
for i in $(cat Ken_ref_png.txt); do wget $i; done
