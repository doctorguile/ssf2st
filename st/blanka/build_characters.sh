for move in $(echo */ | tr -d "/"); do
    echo $move
    cd $move
    x
    cd ..
done
