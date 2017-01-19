<?php
require("../../util.php");

$character = new Character('T.Hawk' );

addStandardMovesets($character);


$character->addMoveset(
  'Down Jab', UNIQUE, movesetImages("./unique-1/*.jpg"), 4, STANDING | CROUCHING, PUSHBACK,
  array(LEFT, '/',  RIGHT, LP), array(4,4,4), false, true, false
);

$character->addMoveset(
  'Elbow Drop', UNIQUE, movesetImages("./unique-2/*.jpg"), 15, STANDING, PUSHBACK,
  array(DOWN, MP), array(5,30,6)
);

$character->addMoveset(
  'Body Slam', UNIQUE, movesetImages("./unique-3/*.jpg"), 18, STANDING, PUSHBACK,
  array(DOWN, HP), array(7,34)
);

$character->addMoveset(
  'Rising Hawk (Tomahawk Buster)', SPECIAL, movesetImages("./special-1/*.jpg",CLEARDIV,"./special-2/*.jpg"), "20,20,20+9", STANDING | CROUCHING, KNOCKDOWN,
  array(DP, PUNCH), array(array(4,5,SKIP,10,SKIP,15,22,SKIP,2), array(4,5,SKIP,10,SKIP,16,23,SKIP,4), array(4,5,SKIP,10,SKIP,18,26,SKIP,4))
);

$character->addMoveset(
  'Condor Dive', SPECIAL, movesetImages("./special-3/*.jpg"), "11,11,12", STANDING | CROUCHING, KNOCKDOWN,
  array(PPP), array(17,UNTIL_LAND,11,SKIP,10)
);

$character->addMoveset(
  'Mexican Typhoon', SPECIAL, movesetImages("./special-4/*.jpg"), "27,30,32", null, KNOCKDOWN,
  array(SPD, PUNCH), null
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "32+23", '&nbsp;', KNOCKDOWN,
  array(SPD,SPD,PUNCH)
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["up-lp"]->specialCancel = true;
$character->movesets["jump-lp"]->specialCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,4);
$character->movesets["close-mp"]->frames  = array(4,3,SKIP,6,5);
$character->movesets["close-hp"]->frames  = array(9,6,SKIP,6,9);
$character->movesets["close-lk"]->frames  = array(4,4,4);
$character->movesets["close-mk"]->frames  = array(4,8,7);
$character->movesets["close-hk"]->frames  = array(9,8,11);
$character->movesets["far-lp"]->frames    = array(4,4,4);
$character->movesets["far-mp"]->frames    = array(6,7,7);
$character->movesets["far-hp"]->frames    = array(11,8,13);
$character->movesets["far-lk"]->frames    = array(5,5,4);
$character->movesets["far-mk"]->frames    = array(9,4,7);
$character->movesets["far-hk"]->frames    = array(12,12,13);
$character->movesets["crouch-lp"]->frames = array(4,4,6);
$character->movesets["crouch-mp"]->frames = array(7,8,9);
$character->movesets["crouch-hp"]->frames = array(9,6,SKIP,11,9);
$character->movesets["crouch-lk"]->frames = array(4,4,7);
$character->movesets["crouch-mk"]->frames = array(7,6,7);
$character->movesets["crouch-hk"]->frames = array(8,7,7,8,23);
$character->movesets["up-lp"]->frames     = array(3,39);
$character->movesets["up-mp"]->frames     = array(5,14,23);
$character->movesets["up-hp"]->frames     = array(7,12,23);
$character->movesets["up-lk"]->frames     = array(5,37);
$character->movesets["up-mk"]->frames     = array(5,13,24);
$character->movesets["up-hk"]->frames     = array(7,12,23);
$character->movesets["jump-lp"]->frames   = array(3,38);
$character->movesets["jump-mp"]->frames   = array(5,14,22);
$character->movesets["jump-hp"]->frames   = array(5,2,11);
$character->movesets["jump-lk"]->frames   = array(4,37);
$character->movesets["jump-mk"]->frames   = array(5,16,20);
$character->movesets["jump-hk"]->frames   = array(6,8,27);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 15;
$character->movesets["close-hp"]->attack  = '12+12';
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 15;
$character->movesets["far-hp"]->attack    = 17;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 15;
$character->movesets["crouch-hp"]->attack = '18+12';
$character->movesets["up-lp"]->attack     = 12;
$character->movesets["up-mp"]->attack     = 15;
$character->movesets["up-hp"]->attack     = 17;
$character->movesets["jump-lp"]->attack   = 12;
$character->movesets["jump-mp"]->attack   = 15;
$character->movesets["jump-hp"]->attack   = 17;
$character->movesets["close-lk"]->attack  = 11;
$character->movesets["close-mk"]->attack  = 15;
$character->movesets["close-hk"]->attack  = 17;
$character->movesets["far-lk"]->attack    = 11;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 17;
$character->movesets["crouch-lk"]->attack = 3;
$character->movesets["crouch-mk"]->attack = 15;
$character->movesets["crouch-hk"]->attack = '17+12';
$character->movesets["up-lk"]->attack     = 12;
$character->movesets["up-mk"]->attack     = 15;
$character->movesets["up-hk"]->attack     = 17;
$character->movesets["jump-lk"]->attack   = 12;
$character->movesets["jump-mk"]->attack   = 15;
$character->movesets["jump-hk"]->attack   = 17;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = '18 + 3*n';
$character->movesets["throw-3"]->attack  = '18 + 3*n';
$character->movesets["throw-1"]->input  = array(LEFT . "/" . RIGHT . " + " . MP);
$character->movesets["throw-2"]->input  = array(LEFT . "/" . RIGHT . " + " . HP);
$character->movesets["throw-3"]->input  = array(LEFT . "/" . RIGHT . " + " . HK);

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
