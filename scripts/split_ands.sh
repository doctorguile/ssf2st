#!/bin/bash

files=$(echo *\&*)

mkdir -p unsplitted.bk

for file in $files;
do
    file_no_extension=$(echo $file | cut -d '.' -f 1)
    
    base=$(echo $file_no_extension \
	       | cut -d 1 -f1 \
	       | cut -d 2 -f1 \
	       | cut -d 3 -f1 \
	       | cut -d 4 -f1 \
	       | cut -d 5 -f1 \
	       | cut -d 6 -f1 \
	       | cut -d 7 -f1 \
	       | cut -d 8 -f1 \
	       | cut -d 9 -f1 \
	       | cut -d 0 -f1 \
	       | cut -d '&' -f1)
    
    if [[ $file_no_extension =~ [a-zA-Z]$ ]]; then
        tail=$(echo $file_no_extension \
		   | rev \
		   | cut -f 1 -d 1 \
		   | cut -f 1 -d 2 \
		   | cut -f 1 -d 3 \
		   | cut -f 1 -d 4 \
		   | cut -f 1 -d 5 \
		   | cut -f 1 -d 6 \
		   | cut -f 1 -d 7 \
		   | cut -f 1 -d 8 \
		   | cut -f 1 -d 9 \
		   | cut -f 1 -d 0 \
		   | rev);
	
	base=${base}_$tail
    fi

    for nums in $(echo $file_no_extension | tr '\&' ' ' | sed "s/[a-z]//g")
    do
	if [[ "$file" =~ .*\.png ]]; then
	    cp $file ${base}_$nums.png
	elif  [[ "$file" =~ .*\.gif ]]; then
	    cp $file ${base}_$nums.gif
	fi
    done

    mv $file unsplitted.bk

done

    
