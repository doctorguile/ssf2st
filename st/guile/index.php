<?php
require("../../util.php");

$character = new Character('Guile');

addStandardMovesets($character);

$character->addMoveset(
  'Backfist', UNIQUE, movesetImages("./unique-4/*.jpg"), 16, STANDING | CROUCHING, PUSHBACK,
  array( RIGHT, HP), array(10,5,18)
);

$character->addMoveset(
  'Bazooka Knee', UNIQUE, movesetImages("./unique-1/*.jpg"), 14, STANDING | CROUCHING, PUSHBACK,
  array(LEFT,'/',RIGHT,' + ', LK), array(6,5,14,SKIP,7)
);

$character->addMoveset(
  'Sobat Kick', UNIQUE, movesetImages("./unique-2/*.jpg"), 14, STANDING | CROUCHING, PUSHBACK,
  array(LEFT,'/',RIGHT,' + ', MK), array(10,5,13)
);

$character->addMoveset(
  'Upside down kick', UNIQUE, movesetImages("./unique-3/*.jpg"), 16, STANDING | CROUCHING, PUSHBACK,
  array(LEFT,'/',RIGHT,' + ', HK), array(16,6,16)
);


$character->addMoveset(
  'Sonic Boom', SPECIAL, movesetImages("./special-1/*.jpg"), "11, 11, 12", STANDING | CROUCHING, PUSHBACK,
  array(BF, PUNCH), array(10,20)
);

$character->addMoveset(
  'Flash Kick ', SPECIAL, movesetImages("./special-2/*.jpg"), "19, 20, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(DU, KICK), array(
array(5,4,2,1,2,SKIP,29,SKIP,5),
array(5,3,2,1,3,SKIP,36,SKIP,7),
array(5,2,2,1,4,SKIP,41,SKIP,8))
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "10+10+10+10+10+10", STANDING | CROUCHING, 'Last hit Knockdown',
  array(DOWNLEFT,DOWNRIGHT,DOWNLEFT,UPRIGHT,KICK),
  array(1,SKIP,17,SKIP,5,2,SKIP,1,1,4,15,2,SKIP,1,5,1,32,SKIP,7)
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["close-hp"]->specialCancel = true;
$character->movesets["close-hp"]->superCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["far-mp"]->specialCancel = true;
$character->movesets["far-mp"]->superCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["crouch-hp"]->superCancel = true;
$character->movesets["close-lk"]->chainCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["far-lk"]->chainCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["crouch-lk"]->chainCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,5);
$character->movesets["close-mp"]->frames  = array(4,3,12);
$character->movesets["close-hp"]->frames  = array(4,3,29);
$character->movesets["close-lk"]->frames  = array(5,4,6);
$character->movesets["close-mk"]->frames  = array(7,4,6);
$character->movesets["close-hk"]->frames  = array(9,4,19);
$character->movesets["far-lp"]->frames    = array(4,4,5);
$character->movesets["far-mp"]->frames    = array(5,2,SKIP,4,9);
$character->movesets["far-hp"]->frames    = array(7,6,10);
$character->movesets["far-lk"]->frames    = array(5,4,6);
$character->movesets["far-mk"]->frames    = array(10,5,13);
$character->movesets["far-hk"]->frames    = array(14,6,13);
$character->movesets["crouch-lp"]->frames = array(4,4,5);
$character->movesets["crouch-mp"]->frames = array(4,4,8);
$character->movesets["crouch-hp"]->frames = array(6,4,12,10);
$character->movesets["crouch-lk"]->frames = array(7,4,7);
$character->movesets["crouch-mk"]->frames = array(8,5,9);
$character->movesets["crouch-hk"]->frames = array(8,5,28,5,11);
$character->movesets["up-lp"]->frames     = array(7,40);
$character->movesets["up-mp"]->frames     = array(7,20,20);
$character->movesets["up-hp"]->frames     = array(7,8,32);
$character->movesets["up-lk"]->frames     = array(7,40);
$character->movesets["up-mk"]->frames     = array(8,5,34);
$character->movesets["up-hk"]->frames     = array(6,5,36);
$character->movesets["jump-lp"]->frames   = array(7,24,16);
$character->movesets["jump-mp"]->frames   = array(7,20,20);
$character->movesets["jump-hp"]->frames   = array(7,8,32);
$character->movesets["jump-lk"]->frames   = array(7,40);
$character->movesets["jump-mk"]->frames   = array(7,20,20);
$character->movesets["jump-hk"]->frames   = array(6,5,36);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = 15;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 15;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 13;
$character->movesets["crouch-hp"]->attack = 15;
$character->movesets["up-lp"]->attack     = 8;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 8;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 15;

$character->movesets["close-lk"]->attack  = 8;
$character->movesets["close-mk"]->attack  = 14;
$character->movesets["close-hk"]->attack  = 16;
$character->movesets["far-lk"]->attack    = 8;
$character->movesets["far-mk"]->attack    = 14;
$character->movesets["far-hk"]->attack    = 15;
$character->movesets["crouch-lk"]->attack = 9;
$character->movesets["crouch-mk"]->attack = 14;
$character->movesets["crouch-hk"]->attack = '15+15';
$character->movesets["up-lk"]->attack     = 9;
$character->movesets["up-mk"]->attack     = 14;
$character->movesets["up-hk"]->attack     = 15;
$character->movesets["jump-lk"]->attack   = 9;
$character->movesets["jump-mk"]->attack   = 14;
$character->movesets["jump-hk"]->attack   = 15;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = 22;

$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", HP);

$character->movesets["airthrow-2"]->attack  = 24;
$character->movesets["airthrow-1"]->attack  = 32;

$character->movesets["airthrow-2"]->input  = array(LEFT,"/", RIGHT, " + ", HP);
$character->movesets["airthrow-1"]->input  = array(LEFT,"/", RIGHT, " + ", HK);

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
