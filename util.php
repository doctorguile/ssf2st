<?php

//ヒット　hit
//のけぞり　Arched herself backward
//のけそり　Injuries sled
//吹き飛びダウン　　Blown off down

function imageRefPath($file) {
    $strack = debug_backtrace();
    $initial_called_file = count($strack) ? $strack[count($strack) - 1]['file'] : __FILE__;
    $extra = dirname($initial_called_file);
    $extra = substr($extra, strlen(dirname(__FILE__)));
    $levelUp = substr_count($extra, '/');
    if ($levelUp > 0) {
    	return str_repeat('../', $levelUp) . $file;
	} else {
    	return $file;
	}
}

function image($file) {
	if (is_array($file)) {
        $file['src'] = imageRefPath($file['src']);
		$attr = '';
        foreach ($file as $k => $v) {
      		$attr .= " $k='$v'";
		}
        return "<img $attr/>";
	} else {
        $file = imageRefPath($file);
        return "<img src='$file' border=0/>";
	}
}

define("BF", image('images/bf.png'));
define("BDF", image('images/br.png'));
define("DU", image('images/du.png'));
define("QCF", image('images/qcf.png'));
define("HCF", image('images/hcf.png'));
define("QCB", image('images/qcb.png'));
define("HCB", image('images/hcb.png'));
define("DP", image('images/zright.png'));
define("RDP", image('images/zleft.png'));
define("SPD", image('images/fcb.png'));
define("KICK", image('images/kick.gif'));
define("PUNCH", image('images/punch.gif'));

define("LK", image('images/lk.png'));
define("MK", image('images/mk.png'));
define("HK", image('images/hk.png'));

define("LP", image('images/lp.png'));
define("MP", image('images/mp.png'));
define("HP", image('images/hp.png'));

//define("PPP", image('images/3p.gif'));
define("PPP", LP . MP . HP);
define("KKK", LK . MK . HK);

define("UP", image('images/up.png'));
define("DOWN", image('images/down.png'));
define("UPBACK", image('images/upleft.png'));
define("UPLEFT", image('images/upleft.png'));
define("UPRIGHT", image('images/upright.png'));
define("UPFORWARD", image('images/upright.png'));
define("DOWNBACK", image('images/downleft.png'));
define("DOWNLEFT", image('images/downleft.png'));
define("BACKDOWN", image('images/downleft.png'));
define("DOWNFORWARD", image('images/downright.png'));
define("DOWNRIGHT", image('images/downright.png'));
define("BACK", image('images/left.png'));
define("LEFT", image('images/left.png'));
define("RIGHT", image('images/right.png'));
define("FORWARD", image('images/right.png'));

define('NEUTRAL', 'neutral');
define('SPECIAL', 'special');
define('UNIQUE', 'unique');
define('NORMAL', 'normal');
define('GRAB', 'grab');
define('AIRTHROW', 'airthrow');
define('SUPER', 'super');

define('STANDING', 1);
define('CROUCHING', 2);

define('PUSHBACK', 'Push Back');
define('KNOCKDOWN', 'Knock Down');

define('UNTIL_LAND', -1);
define('SKIP', 0);

define('CLEARDIV', 'CLEARDIV');

//'balrog','blanka','cammy','chunli','deejay','dhalsim','ehonda','feilong','guile','ken','mbison','ryu','sagat','thawk','vega','zangief','akuma'
$walkspeednames = array('ryu','ww-ken','ken','ehonda','chunli','blanka','zangief','guile','dhalsim','thawk','feilong','cammy','deejay','balrog','ce-claw','hf-claw','vega','sagat','mbison','akuma');
$walkspeeds = array(
'towards' => array(48,48,51,38,64,36,40,54,32,48,64,62,48,56,72,64,66,40,64,48),
'backwards' => array(32,32,34,26,48,30,24,40,22,32,48,46,32,40,56,48,52,32,48,32));

$throwrangeindexes = array('ryu','ken','ww-ehonda','ehonda','chunli','ww-blanka','blanka','zangief','ww-guile','guile','ww-dhalsim','dhalsim','thawk','feilong','cammy','deejay','ww-balrog','balrog','ww-vega','vega','ww-sagat','sagat','ww-mbison','mbison');
$compareTargetNames = array('ryu','ken','ehonda','chunli','blanka','zangief','guile','dhalsim','thawk','feilong','cammy','deejay','balrog','vega','sagat','mbison');
$compareTargetMoves = array('ryu','ken','ehonda','ehonda oicho','chunli','blanka','zangief','zangief double-suplex lk/mk','zangief double-suplex hk','zangief running-bear lk/mk','zangief running-bear hk','zangief fab','zangief spd','guile','dhalsim','thawk','thawk-360/720','feilong','cammy','deejay','balrog-mp-throw','balrog-hp-throw','vega','sagat','mbison');
$throwranges = array(
'ryu'                        =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'ken'                        =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'ehonda'                     =>array(93,93,110,92,89,105,94,109,98,94,97,99,99,93,89,94,99,91,88,92,64,96,64,92),
'ehonda oicho'               =>array(98,98,115,97,94,110,99,114,103,99,102,104,104,98,94,99,104,96,93,97,69,101,69,97),
'ww-chunli'                  =>array(74,74,91,73,70,86,75,90,79,75,78,80,80,74,70,75,80,72,69,73,45,77,45,73),
'chunli'                     =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'blanka'                     =>array(93,93,110,92,89,105,94,109,98,94,97,99,99,93,89,94,99,91,88,92,64,96,64,92),
'ww-zangief-punch-toss'      =>array(80,80,97,79,76,92,81,96,85,81,84,86,86,80,76,81,86,78,75,79,51,83,51,79),
'ww-zangief-kick-toss'       =>array(88,88,105,87,84,100,89,104,93,89,92,94,94,88,84,89,94,86,83,87,59,91,59,87),
'ww-zangief-grab'            =>array(96,96,113,95,92,108,97,112,101,97,100,102,102,96,92,97,102,94,91,95,67,99,67,95),
'zangief'                    =>array(98,98,115,97,94,110,99,114,103,99,102,104,104,98,94,99,104,96,93,97,69,101,69,97),
'zangief double-suplex lk/mk'=>array(98,98,115,97,94,110,99,114,103,99,102,104,104,98,94,99,104,96,93,97,69,101,69,97),
'zangief double-suplex hk'   =>array(112,112,129,111,108,124,113,128,117,113,116,118,118,112,108,113,118,110,107,111,83,115,83,111),
'zangief running-bear lk/mk' =>array(102,102,119,101,98,114,103,118,107,103,106,108,108,102,98,103,108,100,97,101,73,105,73,101),
'zangief running-bear hk'    =>array(103,103,120,102,99,115,104,119,108,104,107,109,109,103,99,104,109,101,98,102,74,106,74,102),
'zangief fab'                =>array(93,93,110,92,89,105,94,109,98,94,97,99,99,93,89,94,99,91,88,92,64,96,64,92),
'zangief spd'                =>array(140,140,157,139,136,152,141,156,145,141,144,146,146,140,136,141,146,138,135,139,111,143,111,139),
'guile'                      =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'dhalsim'                    =>array(93,93,110,92,89,105,94,109,98,94,97,99,99,93,89,94,99,91,88,92,64,96,64,92),
'thawk'                      =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'thawk-360/720'              =>array(112,112,129,111,108,124,113,128,117,113,116,118,118,112,108,113,118,110,107,111,83,115,83,111),
'feilong'                    =>array(69,69,86,68,65,81,70,85,74,70,73,75,75,69,65,70,75,67,64,68,40,72,40,68),
'cammy'                      =>array(71,71,88,70,67,83,72,87,76,72,75,77,77,71,67,72,77,69,66,70,42,74,42,70),
'deejay'                     =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'balrog-mp-throw'            =>array(80,80,97,79,76,92,81,96,85,81,84,86,86,80,76,81,86,78,75,79,51,83,51,79),
'balrog-hp-throw'            =>array(70,70,87,69,66,82,71,86,75,71,74,76,76,70,66,71,76,68,65,69,41,73,41,69),
'vega'                       =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'sagat'                      =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76),
'mbison'                     =>array(81,81,98,80,77,93,82,97,86,82,85,87,87,81,77,82,87,79,76,80,52,84,52,80),
'akuma'                      =>array(77,77,94,76,73,89,78,93,82,78,81,83,83,77,73,78,83,75,72,76,48,80,48,76));

function getThrowRange($move, $target) {
    global $throwrangeindexes ;
    global $throwranges;
    $list = $throwranges[$move];
    $idx = 0;
    foreach($list as $attackerRange) {
        $targetName = $throwrangeindexes[$idx];
        if ($target == $targetName) {
            return $attackerRange;
        }
        $idx++;
    }
}

function displayThrowRanges($attacker) {
global $throwrangeindexes ;
global $compareTargetNames;
global $compareTargetMoves;
global $throwranges       ;
    if (!isset($throwranges[$attacker])) {
        return;
    }
    $list = $throwranges[$attacker];
    $idx = 0;
    $targets = array();
    foreach($list as $attackeRange) {
        $target = $throwrangeindexes[$idx];
        if ($attacker != $target && in_array($target, $compareTargetNames)) {
            foreach($compareTargetMoves as $targetMove) {
                if ($attacker != $targetMove && strpos($targetMove, $target) === 0) {
                    $defenderRange = getThrowRange($targetMove, $attacker);
                    $targets[$targetMove] = intval($attackeRange) - intval($defenderRange);
                }
            }
        }
        $idx++;
    }

    arsort($targets);
    $wins = array();
    $draws = array();
    $loses = array();
    foreach($targets as $defender => $rangeDiff) {
        if ($rangeDiff == 0) {
            $draws[] = $defender;
        } elseif ($rangeDiff > 0) {
            $wins[$defender] = $rangeDiff;
        } else {
            $loses[$defender] = $rangeDiff;
        }
    }
    asort($loses);
    echo "<table >";
    if (!empty($wins)) {
        $rows = sizeof($wins);
        echo "<tr valign=top><th>Beats</th><td>";
        echo "<table>";
        foreach($wins as $defender => $rangeDiff) {
            echo "<tr><td> $defender </td><td>$rangeDiff</td></tr>";
        }
        echo "</table>";
        echo "</td></tr>";
    }
    if (!empty($loses)) {
        echo "<tr valign=top><th>Loses to</th><td>";
        echo "<table>";
        foreach($loses as $defender => $rangeDiff) {
            echo "<tr><td> $defender </td><td>$rangeDiff</td></tr>";
        }
        echo "</table>";
        echo "</td></tr>";
    }
    if (!empty($draws)) {
        echo "<tr valign=top><th>Draws with</th><td>";
        echo implode('<br/>',$draws);
        echo "</td></tr>";
    }
    echo "</table>";
}

function movesetImages1() {
	$buf = '';
	$args = func_get_args();
	foreach($args as $arg) {
		if (strstr($arg, '*.jpg')) {
			$imgs = glob($arg);
			foreach($imgs as $filename) {
				$buf .= "<div class='hoverbox' style='float:left;position: relative'><a><img src='$filename'/>";
				$arg = array(
                    'class'=>'preview',
                    'src'=>'images/addimage.png',
                    'width'=>'98', 'height'=>'60',
                    'border'=>'0', 'usemap'=>'#Map');
				$buf .= image($arg) . "</a></div>";
			}
		} elseif ($arg == CLEARDIV) {
			$buf .= "<div style='clear:both'></div>";
		} else {
			$buf .= "<div style='float:left'>$arg</div>";
		}
	}
	return $buf;
}


function movesetImages() {
	$buf = '';
	$args = func_get_args();
	foreach($args as $arg) {
		if (strstr($arg, '*.jpg')) {
			$imgs = glob($arg);
			foreach($imgs as $filename) {
			    $id = preg_replace('/[^a-zA-Z0-9]/', '', $filename);
				$buf .= "<img id='$id' class='movesetimg hoverbox' style='float:left' src='$filename'/>";
			}
		} elseif ($arg == CLEARDIV) {
			$buf .= "<div style='clear:both'></div>";
		} else {
			$buf .= "<div style='float:left'>$arg</div>";
		}
	}
	return $buf;
}

function prettyPrint($term) {
	switch($term) {
		//case 'far':return 'Standing';
		case 'up':
		return 'Neutral Jump';
		//return 'Straight Jump';
		//case 'jump': return 'Diagonal Jump';
		case 'lp':
		//return 'Jab';
		case 'mp':
		//return 'Strong';
		case 'hp':
		//return 'Fierce';
		case 'lk':
		//return 'Short';
		case 'mk':
		//return 'Forward';
		case 'hk':
		//return 'Round House';
		return image("images/$term.png");
	}
	return ucwords($term);
}
//removeFullSizePics();
function removeFullSizePics() {
	$dir = dirname($_SERVER["SCRIPT_FILENAME"]);
	foreach (glob("./*/*/*/*.jpg") as $jpg) {
		if (strpos($jpg, '_cr.jpg') === false) {
			$jpg = $dir . "/" . $jpg;
			echo $jpg;
			echo "<br/>";
			unlink($jpg);
		}
	}
}

function addStandardMovesets($character) {
	foreach(array('standing', 'crouching') as $name) {
		$character->addMoveset(
		  ucwords($name), NEUTRAL, movesetImages("./$name/*.jpg")
		);
	}
	foreach(array('p', 'k') as $normal) {
		foreach(array('l', 'm', 'h') as $strength) {
			$move = "close-crouch-$strength".$normal;
			if (file_exists("./$move")) {
				$block = STANDING | CROUCHING;
				$hit = PUSHBACK;
				if ($normal == 'k') {
					$block = CROUCHING;
				} else {
					$block = STANDING;
				}
				$title = 'Close Crouch ' . prettyPrint($strength.$normal);
				$character->addMovesetEx($move,
				  $title, NORMAL, movesetImages("./$move/*.jpg"), 1, $block, $hit
				);
			}
		}
	}
	foreach(array('close', 'far', 'crouch', 'up', 'jump') as $distance) {
		foreach(array('p', 'k') as $normal) {
			foreach(array('l', 'm', 'h') as $strength) {
				$block = STANDING | CROUCHING;
				$hit = PUSHBACK;
				if ($distance == 'crouch' && $normal == 'k') {
					$block = CROUCHING;
					if ($strength == 'h') {
						$hit = KNOCKDOWN;
					}
				} elseif ($distance == 'up' || $distance == 'jump') {
					$block = STANDING;
				}
				
				$move = "$distance-$strength".$normal;
				$title = prettyPrint($distance) . ' ' . prettyPrint($strength.$normal);
				$character->addMovesetEx($move,
				  $title, NORMAL, movesetImages("./$move/*.jpg"), 1, $block, $hit
				);
			}
		}
	}
	for($i = 1 ; $i <= 5; $i++) {
		$move = "throw-$i";
		if (file_exists("./$move")) {
			$character->addMovesetEx($move, "Throw $i",
			  GRAB, movesetImages("./$move/*.jpg"), 1);
		}
	}
	for($i = 1 ; $i <= 2; $i++) {
		$move = "airthrow-$i";
		if (file_exists("./$move")) {
			$character->addMovesetEx($move, "Air Throw $i",
			  AIRTHROW, movesetImages("./$move/*.jpg"), 1);
		}
	}
}	

function renderFrames($frames) {
	foreach($frames as $frame) {
		if($frame === SKIP) {					
			$active = !$active;
			continue;
		} elseif ($frame == UNTIL_LAND) {
			$width = 16;
			$display = "lands";
		} elseif (is_string($frame)) {
			$width = 16;
			$display = $frame;
		} else {
			$width = $frame;
			$display = $frame;
		}
		$width *= 3;
		$prefix = $active ? 'active' : 'inactive';
		echo "<div style='width:{$width}px' class='frame $prefix-frame'>$display</div>";
		$active = !$active;
	}
	echo "<div style='clear:both'></div>";
}

class Moveset {
  public function __construct(
  $id, $name, $type, $images,
  $attack = 0, $block = 0, $hit = '',
  $input = null,
  $frames = null,
  $chainCancel = false, $specialCancel = false, $superCancel = false
  ) {
    $this->character = null;
    $this->id = $id;
    $this->name = $name;
    $this->input = $input;
    $this->type = $type;
    $this->images = $images;
    $this->attack = $attack;
    $this->block = $block;
    $this->hit = $hit;
    $this->frames = $frames;
    // Renda Canceling
    $this->chainCancel = $chainCancel;
    $this->specialCancel = $specialCancel;
    $this->superCancel = $superCancel;
  }

}

class Character {
  public function __construct($name, $old = false) {
    $this->name = $name;
    $this->old = $old;
    $this->movesets = array();
  }

  public function addMoveset($name) {
  	$args = func_get_args();
  	array_unshift($args, $name);
  	$reflection = new ReflectionClass('Moveset');
  	$this->movesets[$name] = $reflection->newInstanceArgs($args);
  	$this->movesets[$name]->character = $this;
  }
  public function addMovesetEx($id) {
  	$args = func_get_args();
  	$reflection = new ReflectionClass('Moveset');
  	$this->movesets[$id] = $reflection->newInstanceArgs($args);
  	$this->movesets[$id]->character = $this;
  }
}

function htmlFooter() {
    $arg = array(
        'id'=>'addimagemenu',
		'style'=>'display:none',
        'src'=>'images/addimage.png',
        'width'=>'98', 'height'=>'60',
        'border'=>'0', 'usemap'=>'#Map');
    $img = image($arg);

    echo <<<EOF
<map name='Map' id='Map'>
  <area shape='rect' coords='0,0,98,30' href='javascript:add1p();' />
  <area shape='rect' coords='0,30,98,60' href='javascript:add2p()' />
</map>
$img
EOF;
	echo "</body></html>";
}

function htmlHeader($character) {
	$old = $character->old ? ' Old character' : '';
	echo <<<EOF
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Super Street Fighter II Turbo -$old Hitbox Diagrams : {$character->name}</title>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
<script>
var selectedImage;

function insertImage(src) {
    if (window.parent && window.parent.frames) {
        window.parent.frames[1].insertImage(src);
    }
}

function add1p() {
    insertImage(selectedImage);
}

function add2p() {
    var imgsrc = selectedImage.replace('ssf2st', 'ssf2st/flop');
    insertImage(imgsrc);
}

function onMouseoutEvt(evt) {
    $('#addimagemenu').hide();
}

function onMouseoverEvt(evt) {
    selectedImage = this.src;
    var imgid = this.id;
    $('#addimagemenu').show();
    $('#addimagemenu').position({
      my: "center",
      at: "center",
      of: "#" + imgid
    }).show();
}

function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

if (getParameterByName('dragndrop')) {
    $(function() {
        $('.movesetimg').mouseover(onMouseoverEvt);
    });
}
</script>

<style>

.movesetimg
{
	background: #fff;
	border-color: #aaa #ccc #ddd #bbb;
	border-style: solid;
	border-width: 1px;
	color: inherit;
	padding: 2px;
	vertical-align: top;
}


.hoverbox
{
	cursor: default;
	list-style: none;
}

.hoverbox a .preview
{
	display: none;
}

.hoverbox a:hover .preview
{
	display: block;
	position: absolute;
	top: 5px;
	left: 5px;
	z-index: 1;
}

.hoverbox img
{
	background: #fff;
	border-color: #aaa #ccc #ddd #bbb;
	border-style: solid;
	border-width: 1px;
	color: inherit;
	padding: 2px;
	vertical-align: top;
}

.hoverbox .preview
{
	border-color: #000;
}


body {
	position: relative;
	font-family: sans-serif;
}

a:hover {
	color:blue;	
	text-decoration:underline;
}

a {
	color:Gray;
	text-decoration:none;
}

.move-property {
	padding: 5px;
	font-weight: bold;
	width:70px;
	text-align:center;
	margin:3px;
	float:left;
}

.active {
	background-color: #1E90FF;
	color: White;
}

.inactive {
	background-color: #708090;
	color: #A9A9A9;
}

div.attack-block-hit {
	border-style: solid;
	border-color: Black;
	border-width: medium;
	padding: 5px;
	width: 100%;
}

table.attack-block-hit  td {
	padding: 5px;
}

td.tl {
	border-left:medium solid black;
	border-top:medium solid black
}
td.tr {
	border-right:medium solid black;
	border-top:medium solid black
}
td.ml {
	border-left:medium solid black;
	border-top:medium solid black
}
td.mr {
	border-right:medium solid black;
	border-top:medium solid black
}
td.bl {
	border-left:medium solid black;
	border-top:medium solid black;
	border-bottom:medium solid black
}
td.br {
	border-right:medium solid black;
	border-top:medium solid black;
	border-bottom:medium solid black
}
tr.movename {
	background-color:pink;
	font-size:larger;
	font-weight:bold;
	padding:5px;
}

td.movename {
	font-size:larger;
	font-weight:bold;
	padding:5px;
}

td.back-to-top {
	font-size:small;
	font-weight:thin;
	padding:5px;
}

.frame {
	float:left;
	padding:5px;
	margin-top:3px;
	text-align:center;
	font-size:small;
}

.inactive-frame {
	background-color:#999;	
}
.active-frame {
	background-color:#F60;	
}

</style>
</head>
<body>
<a name='top'></a>
EOF;
}


/*
foreach(array('close', 'far', 'crouch', 'up', 'jump') as $distance) {
	foreach(array('p', 'k') as $normal) {
		foreach(array('l', 'm', 'h') as $strength) {
			$move = "$distance-$strength".$normal;
			echo '"';
			echo $move;
			echo '"';
			echo "<br/>";
		}
	}
}

//echo "<pre>";var_dump($chunli);echo "</pre>";

$char = $_REQUEST['char'];
$char = 'chunli';
$dir = dirname($_SERVER["SCRIPT_FILENAME"]);
$dir = ".";


$chars = array(
'chunli' =>
array(
	'special' => array(
		array(
			'Lightning Kick', 'kick.gif', 'x5'
		),
		array(
			'Kikoken', 'lr.png', 'punch.gif'
		),
		array(
			'Spinning Bird Kick', 'du.png', 'kick.gif'
		),
	),
	'unique' => array(
		array('Back Flip', 'right.png', 'mk.png'),
		array('Neck Breaker', 'right.png', 'hk.png'),
		array(
			'Head Stomp', 'down.png', 'kick.gif'
		),
	)
)
);

function displayDir($dir, $title) {
	$titleDisplay = false;
	foreach (glob("$dir/*.jpg") as $filename) {
		if (!$titleDisplay) {
			$titleDisplay = true;
			echo $title;
			echo '<br/>';
		}
	    echo("<img src='$filename'/>");
	}
	if ($titleDisplay) {
		echo "<hr/>";
	}
}

foreach(array('standing', 'crouching') as $type) {
	displayDir($dir . "/$char/$type", ucwords($type));
}

foreach(array('close', 'far', 'crouch', 'up', 'jump') as $distance) {
	foreach(array('p', 'k') as $normal) {
		foreach(array('l', 'm', 'h') as $strength) {
			$move = "$distance-$strength".$normal;
			$title = prettyPrint($distance) . ' ' . prettyPrint($strength.$normal);
			displayDir($dir . "/$char/$move", $title);
		}
	}
}
$specials = $chars[$char];
foreach($specials as $subdir => $list) {
	$i = 1;
	foreach($list as $move) {
		$title = $move[0] . " " ;
		$dirname = "$dir/$char/$subdir-$i/";
		//echo $dirname;
		for($j = 1; $j < sizeof($move); $j++) {
			$icon = $move[$j];
			if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/images/$icon")) {
				$title .= "<img src='/images/$icon'/>";
			} else {
				$title .= $icon;
			}
		}
		displayDir($dirname, $title);
		$i++;
	}
}

*/
//createDirs();

function printLinks() {
	$prepend = false;
	$chars = array(
	'Balrog','Blanka','Cammy','ChunLi','DeeJay','Dhalsim','EHonda','FeiLong','Guile','Ken','MBison','Ryu','Sagat','THawk','Vega','Zangief'
	);
	$dir = dirname($_SERVER["SCRIPT_FILENAME"]) . "/old-chars";
	foreach($chars as $char) {
	    if ($prepend) echo " | ";
	
		$link = strtolower($char);
		echo "<a href='$link'>$char</a>";
	    $prepend = true;
	}
}
function printImageMap() {
    //$qstr = getRawQueryString();
	$chars = array(
	'ryu','ehonda','blanka','guile','thawk','feilong','balrog','sagat','ken','chunli','zangief','dhalsim','cammy','deejay','vega','mbison'
	);
	$startx = 4;
	$boxsize = 48;
	echo '<map name="Map">';
	foreach(array(4,126) as $starty) {
		$charidx = 0;
		for ($i = 0; $i < 2; $i++) {
			for ($j = 0; $j < 8; $j++) {
				$y = $starty + ($i * $boxsize);
				$x = $startx + ($j * $boxsize);
				$xend = $x + $boxsize;
				$yend = $y + $boxsize;
				$link = ($starty == 4 ? 'st/' : 'old-chars/') . $chars[$charidx] . '/';
				//$buf = "<area shape='rect' coords='$x,$y,$xend,$yend' href='$link$qstr'>";
				$buf = "<area shape='rect' coords='$x,$y,$xend,$yend' href='$link'>";
				$charidx++;
				//echo htmlentities($buf);
				echo $buf;
				echo "\n";
			}
		}
	}
    echo '</map>';
echo <<<'FIXLINK'
<script>
    var index = window.location.href.indexOf('?');
    if(index != -1){
        var querystring = window.location.href.slice(index + 1)       
		$('area[href]').each(function() {
		   var $this = $(this);       
		   var href = $this.attr("href");
		   href += (href.indexOf('?') != -1) ? '&' : '?';
		   href += querystring;
		   $this.attr("href", href);
		});
	}
</script>
FIXLINK;

}

function mymkdir($str) {
	echo $str . '<br/>';
	mkdir($str);
}

function createDirs() {
	$chars = array(
	'Balrog','Blanka','Cammy','ChunLi','DeeJay','Dhalsim','EHonda','FeiLong','Guile','Ken','MBison','Ryu','Sagat','THawk','Vega','Zangief','Akuma'
	);
	$dir = dirname($_SERVER["SCRIPT_FILENAME"]);
	foreach($chars as $char) {
		$char = strtolower($char);
		mymkdir("$dir/$char/super");
		/*
		mymkdir("$dir/$char");
		mymkdir("$dir/$char/standing");
		mymkdir("$dir/$char/crouching");
		mymkdir("$dir/$char/airborne");
		for($i = 1 ; $i <= 6; $i++) {
			$move = "throw-$i";
			mymkdir("$dir/$char/$move");
			//echo("$dir/$char/$move<br/>");
		}
		for($i = 1 ; $i <= 2; $i++) {
			$move = "airthrow-$i";
			mymkdir("$dir/$char/$move");
		}
		foreach(array('special', 'unique') as $type) {
			for($i = 1 ; $i <= 7; $i++) {
				$move = "$type-$i";
				mymkdir("$dir/$char/$move");
			}
		}
		foreach(array('close', 'far', 'crouch', 'up', 'jump') as $distance) {
			foreach(array('p', 'k') as $normal) {
				foreach(array('l', 'm', 'h') as $strength) {
					$move = "$distance-$strength".$normal;
					mymkdir("$dir/$char/$move");
				}
			}
		}
		*/
	}
}

function findFiles($dir = '.', $pattern = '/./', $callback = 'echo'){
  $prefix = $dir . '/';
  $dir = dir($dir);
  while (false !== ($file = $dir->read())){
    if ($file === '.' || $file === '..') continue;
    $file = $prefix . $file;
    if (is_dir($file)) {
      $result = findFiles($file, $pattern,$callback);
      if ($result === false) {
      	return $result;
      }
    }
    if (preg_match($pattern, $file)){
      $result = call_user_func($callback, $file);
		//$callback($file);
      if ($result === false) {
      	return $result;
      }
    }
  }
}

function getRawQueryString() {
    $qstr = $_SERVER['QUERY_STRING'];
    if (!empty($qstr)) {
        $qstr = '?' . $qstr;
    }
    return $qstr;
}

?>
