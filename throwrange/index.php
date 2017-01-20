<style>
    div.container {
        display:inline-block;
        position: relative;
        /*width: 100%; !* for IE 6 *!*/
    }
    h3.throw {
        position: absolute;
        top: 0px;
        left: 0px;
        /*width: 100%;*/
        color: white;
        font: bold 24px/45px Helvetica, Sans-Serif;
        letter-spacing: -1px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        padding: 10px;
    }

    .throw-distance-table td, th {
        vertical-align: top;
        padding: 2px;
        border: solid 1px lightgrey;
    }

    .throw-distance-table th {
        text-align: left;
    }

    .zoom {
        display:inline-block;
        position: relative;
    }
    /* magnifying glass icon */
    .zoom:after {
        content:'';
        display:block;
        width:33px;
        height:33px;
        position:absolute;
        top:0;
        right:0;
        background:url(icon.png);
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='jquery.zoom.min.js'></script>
<script src="throw-distance.js"></script>
<?php

$distanceTable = array(
    "Point Blank" => 0,
    "feilong" => 31,
    "t-hawk" => 2,
    "balrog (hp)" => 1,
    "sagat" => 2,
    "cammy" => 1,
    "deejay, guile" => 1,
    "ryu, ken, zangief (super)" => 1,
    "vega" => 1,
    "zangief (lk suplex)" => 1,
    "chunli" => 2,
    "mbison, balrog (mp), zangief (throw|mk suplex)" => 1,
    "dhalsim" => 5,
    "blanka" => 5,
    "ehonda" => 2,
    "zangief (hk suplex)" => 2,
    "ehonda (oicho)" => 3,
    "t-hawk (360|super)" => 7,
    "zangief (360)" => 18,
);

$keys = array_keys($distanceTable);
$len = count($keys);
$expandedTable = array();
$i = 0;
foreach ($distanceTable as $k => $v) {
    if ($k != "Point Blank") {
        $j        = $i;
        $distance = 0;
        while ($j >= 0) {
            $distance += $distanceTable[$keys[$j]];
            $j--;
        }
        $expandedTable[$k] = $distance;
    }
    $i++;
}


echo "<h3>Throw range for each characters/moves</h3>";
echo "<table class='throw-distance-table'>";
echo "<tr><th>Move</th><th>Distance advantage compared to previous move (pixels / in game counter)</th></tr>";
foreach ($distanceTable as $k => $v) {
    $k = str_replace(",", "<br/>", $k);
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
echo "</table>";

echo "<p>";

echo "<table class='throw-distance-table'>";
echo "<tr><th>Attacker \ Target</th>";
foreach ($expandedTable as $k => $v) {
    $display = str_replace(",", "<br/>", $k);
    echo "<th>$display</th>";
}
echo "</tr>";

foreach ($expandedTable as $k1 => $v1) {
    $display1 = str_replace(",", "<br/>", $k1);
    echo "<tr><th>$display1</th>";
    foreach ($expandedTable as $k2 => $v2) {
        if ($k1 == $k2) {
            echo "<td>&nbsp;</td>";
        } else {
            $diff = $v1 - $v2;
            $cls  = '';
            if ($diff > 0) {
                $cls = 'style="font-weight:bold;color:white;background-color:darkseagreen"';
            } elseif ($diff < 0) {
                $cls = 'style="font-weight:bold;color:white;background-color:palevioletred"';
            }
            echo "<td $cls>$diff</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<p>";

echo "<h3>Max throw range illustrated</h3>";
echo "Click on the character names below to see the images<p>";
$characters = array("feilong", "sagat", "cammy", "deejay", "guile", "ryu", "ken", "vega", "chunli", "mbison", "balrog", "dhalsim", "blanka", "ehonda", "thawk", "zangief");
foreach ($characters as $c) {
    echo "<a href='javascript:void 0;' class='clickable'>$c</a> ";
}

echo "<p><div id='throw-distance-image-container'></div>";