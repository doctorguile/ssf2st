#!/bin/bash

moves=$(ls *.png | cut -d '.' -f 1 | cut -d "1" -f 1 | cut -d 2 -f 1 | cut -d 3 -f 1  | cut -d 4 -f 1  | cut -d 5 -f 1  | cut -d 6 -f 1  | cut -d 7 -f 1  | cut -d 8 -f 1 | cut -d 9 -f 1 | tr " " "
" | uniq)

for move in $moves;
do
    mkdir $move
    mv $move*.png $move
done

	    
