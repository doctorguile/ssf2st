#!/bin/bash

echo */* | tr " " "
" | cut -d "/" -f 2 | sort | uniq -d > duplicate_file.txt
    
duplicata=$(echo */* | tr " " "
" | grep -f duplicate_file.txt | head -1)

while ! [ -z $duplicata ];
do

    duplicata_dir=$(echo $duplicata | cut -d "/" -f 1)
    duplicata_file=$(echo $duplicata | cut -d "/" -f 2)
    duplicata_new_name=$(echo $duplicata_file | cut -d "." -f 1)bis.png

    rename -v "s/$duplicata_file/$duplicata_new_name/" $duplicata_dir/*

    echo */* | tr " " "
" | cut -d "/" -f 2 | sort | uniq -d > duplicate_file.txt
    
    duplicata=$(echo */* | tr " " "
" | grep -f duplicate_file.txt | head -1)

done

echo "end"
rm duplicate_file.txt
