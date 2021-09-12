#!/bin/bash

#ABCD-movename
# code to define moves order
#A : 0 is normal attack, 1 is special attack, 2 is super, 3 is throw 
#B : 0 is ground attack, 1 is jumping attack
#C : button. 1=jab, 2=strong, 3=fierce, 4=short, 5=forward, 6=roundhouse
#D : ground state. 1=stand, 2=far, 3=close, 4=crouch, 5=command attack 

for directory in $(echo */);
do
    A="0"
    B="0"
    C="0"
    D="0"

    [[ $directory =~ .*super.* ]] && A=2
    [[ $directory =~ .*jump.* ]] && B=1
    [[ $directory =~ .*jab.* ]] && C=1
    [[ $directory =~ .*strong.* ]] && C=2
    [[ $directory =~ .*fierce.* ]] && C=3
    [[ $directory =~ .*short.* ]] && C=4
    [[ $directory =~ .*forward.* ]] && C=5
    [[ $directory =~ .*roundhouse.* ]] && C=6
    [[ $directory =~ .*stand.* ]] && D=1
    [[ $directory =~ .*far.* ]] && D=2
    [[ $directory =~ .*close.* ]] && D=3
    [[ $directory =~ .*crouch.* ]] && D=4
    [[ $directory =~ .*throw.* ]] && A=3
    
    if [[ $A != "0" ]] || [[ $B != "0" ]] || [[ $C != "0" ]] || [[ $D != "0" ]];
    then
	directory_name=$directory
	if [[ $directory =~ [0-9][0-9][0-9][0-9]-.* ]]; then
	    directory_name=$( echo $directory | cut -d "-" -f 2 )
	fi
	
       [[ $directory != $A$B$C$D-$directory_name ]] && mv -v $directory $A$B$C$D-$directory_name
    fi
    
done	
