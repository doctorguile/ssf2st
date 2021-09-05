#!/bin/bash

for file in $(ls *_*.png);
do
    splitted_file=$(echo $file | cut -d '.' -f 1 | tr "_" " ")
    for s in $splitted_file;
	     do
		 cp $file $s.png
    done
    rm $file
done
    
