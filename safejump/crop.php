<?php

function convertdir($srcdir, $dstdir) {
    $newsize = '192x224+192+0';
    $srcdir = realpath($srcdir);
    echo $srcdir;
    echo "\n";
    echo $dstdir;
    echo "\n";
//    $dstdir = dirname($srcdir) . DIRECTORY_SEPARATOR . "processed";
    if (!file_exists($dstdir)) {
        mkdir($dstdir, 0755, true);
    }
    $files = glob($srcdir . '/*.png');
    $count = count($files);
    foreach($files as $file) {
        $label = --$count;
        //$dstfile = $dstdir . '/' . basename($file);
        $dstfile = $dstdir . '/' . sprintf("%04.d", $count) . ".png";
        $textX = 192 + 55;
        $textY = 25;
//        $cmd = "convert $file -fill red -pointsize 36 -draw \"text $textX,$textY '$label'\" miff:- | convert - -crop $newsize $dstfile";
        $cmd = "convert $file -fill red -pointsize 36 -draw \"text $textX,$textY '$label'\" -crop $newsize $dstfile";
        //$cmd = "convert $file -fill red -pointsize 36 -draw \"text $textX,$textY '$label'\" $dstfile";
        //$cmd = "convert $file -crop $newsize $dstfile";
        //  -background black
        //miff:-
        echo $cmd;
        echo "\n";
        shell_exec($cmd);
    }
}
$dirs = explode("\n", <<<'EOF'
guile/srk
guile/rh
feilong/srk
feilong/rh
deejay/srk
deejay/rh
honda/srk
honda/rh
vega/srk
vega/rh
thawk/srk
thawk/rh
chunli/srk
chunli/rh
zangief/srk
zangief/rh
oken/srk
oken/rh
mbison/srk
mbison/rh
sagat/srk
sagat/rh
balrog/srk
balrog/rh
blanka/srk
blanka/rh
cammy/srk
cammy/rh
dhalsim/srk
dhalsim/rh
EOF
);


foreach($dirs as $dir) {
    $srcdir = "ssf2st/st-safejump/" . $dir;
    $dstdir = "ssf2st/safejump/" . $dir;
    convertdir($srcdir,$dstdir);
}

