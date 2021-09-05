#!/bin/bash

for file_to_split in $(find . -name "*&*.png");
do
    if [[ $file_to_split =~ ([\.a-zA-Z\/])*\/[a-zA-Z]+([0-9]+\&[0-9]+)*.png ]];
    then
	files=$(echo $file_to_split | cut -d "." -f 2)
	files=$(echo "$files" | tr "&" " " | sed -E "s/[0-9]+/ &/g")
	base=$(echo $files | cut -d " " -f 1)
	files=$(echo $files | cut -d " " -f 2-)
	for f in $files;
	do
	    echo "cp "$file_to_split ./$base$f".png" >> ./splitted.txt
	    cp $file_to_split ./$base$f".png"
	done
    else
	echo "X " $file_to_split >> ./regexp_said_no.txt
    fi
        
done    
