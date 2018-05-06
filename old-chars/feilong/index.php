<?php
require("../../util.php");

$character = new Character('Fei Long', LEFT . LEFT . RIGHT . RIGHT);

addStandardMovesets($character);

$character->addMoveset(
  'Overhead Kick', UNIQUE, movesetImages("./unique-1/*.jpg"), 15, STANDING, PUSHBACK,
  array(LEFT,'/',RIGHT, ' + ', MK), array(22,5,11,SKIP,5)
);

$character->addMoveset(
  'Running Kick', UNIQUE, movesetImages("./unique-2/*.jpg"), '12+12', STANDING | CROUCHING, PUSHBACK,
  array(LEFT,'/',RIGHT, ' + ', HK), array(17,3,SKIP,8,5)
);

$character->addMoveset(
  'Rekka Ken', SPECIAL, movesetImages("./special-1/*.jpg"), "10+10+14, 10+10+15, 10+10+16", STANDING | CROUCHING, 'Pushback (last hit Knockdown)',
  array(QCF, PUNCH), array(array(8,8,23),
array(8,7,21),
array(8,8,21),
array(6,8,24),
array(6,7,21),
array(6,8,21),
array(12,8,25),
array(12,7,30),
array(10,7,35))
);

$character->addMoveset(
  'Flame Kick', SPECIAL, movesetImages("./special-2/*.jpg"), "18, 18+11, 18+11", STANDING | CROUCHING, KNOCKDOWN,
  array(RDP, KICK), array(
array(6,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,4,13,SKIP,6),
array(6,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,4,17,SKIP,7),
array(6,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,1,SKIP,4,21,SKIP,8))
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-hp"]->specialCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-mp"]->specialCancel = true;
$character->movesets["far-hp"]->specialCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["far-lk"]->chainCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-mk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(3,6,4);               
$character->movesets["close-mp"]->frames  = array(4,4,5);               
$character->movesets["close-hp"]->frames  = array(4,4,10,SKIP,6);       
$character->movesets["close-lk"]->frames  = array(4,6,4);               
$character->movesets["close-mk"]->frames  = array(5,6,5);               
$character->movesets["close-hk"]->frames  = array(10,4,SKIP,6,10);      
$character->movesets["far-lp"]->frames    = array(3,6,4);               
$character->movesets["far-mp"]->frames    = array(5,6,5);               
$character->movesets["far-hp"]->frames    = array(5,10,6);              
$character->movesets["far-lk"]->frames    = array(5,13,4);              
$character->movesets["far-mk"]->frames    = array(5,10,4);              
$character->movesets["far-hk"]->frames    = array(7,8,7);               
$character->movesets["crouch-lp"]->frames = array(3,4,4);               
$character->movesets["crouch-mp"]->frames = array(5,6,8);               
$character->movesets["crouch-hp"]->frames = array(7,8,6);               
$character->movesets["crouch-lk"]->frames = array(5,4,4);               
$character->movesets["crouch-mk"]->frames = array(5,6,8);               
$character->movesets["crouch-hk"]->frames = array(7,4,19);              
$character->movesets["up-lp"]->frames     = array(3,30,11);             
$character->movesets["up-mp"]->frames     = array(3,14,27);             
$character->movesets["up-hp"]->frames     = array(3,8,33);              
$character->movesets["up-lk"]->frames     = array(3,20,21);             
$character->movesets["up-mk"]->frames     = array(3,8,33);              
$character->movesets["up-hk"]->frames     = array(5,8,31);              
$character->movesets["jump-lp"]->frames   = array(3,30,8);              
$character->movesets["jump-mp"]->frames   = array(3,14,24);             
$character->movesets["jump-hp"]->frames   = array(5,6,30);              
$character->movesets["jump-lk"]->frames   = array(3,20,18);             
$character->movesets["jump-mk"]->frames   = array(4,9,28);              
$character->movesets["jump-hk"]->frames   = array(5,2,SKIP,6,SKIP,5,23);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = 17;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 17;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 14;
$character->movesets["crouch-hp"]->attack = 17;
$character->movesets["up-lp"]->attack     = 9;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 18;
$character->movesets["jump-lp"]->attack   = 9;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 17;

$character->movesets["close-lk"]->attack  = 3;
$character->movesets["close-mk"]->attack  = 14;
$character->movesets["close-hk"]->attack  = '13+13';
$character->movesets["far-lk"]->attack    = 3;
$character->movesets["far-mk"]->attack    = 14;
$character->movesets["far-hk"]->attack    = 18;
$character->movesets["crouch-lk"]->attack = 3;
$character->movesets["crouch-mk"]->attack = 14;
$character->movesets["crouch-hk"]->attack = 18;
$character->movesets["up-lk"]->attack     = 9;
$character->movesets["up-mk"]->attack     = 15;
$character->movesets["up-hk"]->attack     = 18;
$character->movesets["jump-lk"]->attack   = 9;
$character->movesets["jump-mk"]->attack   = 15;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", MK, "/", HK);

$character->movesets["crouch-hp"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
