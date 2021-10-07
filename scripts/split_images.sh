#!/bin/bash

file_list=$(ls -al | grep '^-' | grep -E '\.png|\.gif' | grep -E ".*_.*_" | awk '{print $NF}')

mkdir -p unsplitted.bk

for file in $file_list;
do
    no_expansion=$(echo $file | cut -d '.' -f 1)
    
    no_chara_name=$(echo $no_expansion | cut -d '_' -f 1 --complement)
    
    splits=$(echo $no_chara_name | tr '_' ' ')

    for split in $splits
    do
	if [[ $split =~ ^[0-9].* ]]; then
	    split=$(echo "$file" \
		     | cut -d '&' -f 1 \
		     | cut -d "0" -f 1 \
		     | cut -d "1" -f 1 \
		     | cut -d "2" -f 1 \
		     | cut -d "3" -f 1 \
		     | cut -d "4" -f 1 \
		     | cut -d "5" -f 1 \
		     | cut -d "6" -f 1 \
		     | cut -d "7" -f 1 \
		     | cut -d "8" -f 1 \
		     | cut -d "9" -f 1)$split
	fi
	if [[ "$file" =~ .*\.png ]]; then
	    cp -v $file $split.png
	elif [[ "$file" =~ .*\.gif ]]; then
	    cp -v $file $split.gif
	fi
    done
    
   mv $file unsplitted.bk
done

