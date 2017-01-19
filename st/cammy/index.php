<?php
require("../../util.php");

$character = new Character('Cammy');

addStandardMovesets($character);

$character->addMoveset(
  'Spiral Arrow (Cannon Drill)', SPECIAL, movesetImages("./special-7/*.jpg"), "16, 18, 8+19", STANDING | CROUCHING, KNOCKDOWN,
  array(QCF, KICK), array(array(8,6,SKIP,15,18),
array(8,6,SKIP,22,24),
array(8,6,SKIP,22,24))
);

$character->addMoveset(
  'Cannon Spike', SPECIAL, movesetImages("./special-6/*.jpg"), "20, 20, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(DP, KICK), array(array(4,3,SKIP,22,13,SKIP,5),
array(4,3,SKIP,27,18,SKIP,5),
array(4,3,SKIP,32,24,SKIP,5))
);

$character->addMoveset(
  'Spinning Knuckle', SPECIAL, movesetImages("./special-4/*.jpg", CLEARDIV,"./special-5/*.jpg"), "8+17, 9+18,10+19", STANDING | CROUCHING, 'Pushback + Knockdown',
  array(BACK, DOWNBACK, FORWARD, PUNCH),
  array(
  array(42,3,SKIP,8,7),
array(42,3,SKIP,8,7),
array(44,3,SKIP,8,7))

);

$character->addMoveset(
  'Hooligan', SPECIAL, movesetImages("./special-1/*.jpg",CLEARDIV,"./special-2/*.jpg",CLEARDIV,"./special-3/*.jpg"), 
  "17,22,22", CROUCHING, KNOCKDOWN,
  array(BACKDOWN, DOWN, DOWNFORWARD, UPFORWARD, PUNCH, "; Can be canceled with", KICK, " ; or Grab with", LEFT,'/', RIGHT, "+", KICK),
  array(
  array(55,SKIP,4,7,19),
array(47,SKIP,4,7,19),
array(48,SKIP,4,13,19))

);


$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "10+10+10+10+10", STANDING | CROUCHING, 'Last 2 hits Knockdown',
  array(DOWN, DOWNFORWARD, FORWARD, DOWN, DOWNFORWARD, KICK),
  array(1,SKIP,17,SKIP,3,6,SKIP,3,3,3,18,3,SKIP,25,18,SKIP,5)
  //array(1,SKIP,17,25,18,SKIP,5,SKIP,18,3,SKIP,3,3,3,3,6)
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
$character->movesets["far-hp"]->specialCancel = true;
$character->movesets["far-hp"]->superCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["far-mk"]->superCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["crouch-mk"]->superCancel = true;
$character->movesets["crouch-hk"]->superCancel = true;



$character->movesets["close-lp"]->frames  = array(4,4,4);       
$character->movesets["close-mp"]->frames  = array(3,2,SKIP,4,5);     
$character->movesets["close-hp"]->frames  = array(4,5,9);       
$character->movesets["close-lk"]->frames  = array(4,6,4);       
$character->movesets["close-mk"]->frames  = array(5,6,5);       
$character->movesets["close-hk"]->frames  = array(12,8,10);     
$character->movesets["far-lp"]->frames    = array(4,4,4);       
$character->movesets["far-mp"]->frames    = array(4,5,5);       
$character->movesets["far-hp"]->frames    = array(4,2,SKIP,6,7);
$character->movesets["far-lk"]->frames    = array(4,8,4);       
$character->movesets["far-mk"]->frames    = array(6,7,8);       
$character->movesets["far-hk"]->frames    = array(11,5,7);      
$character->movesets["crouch-lp"]->frames = array(4,4,5);       
$character->movesets["crouch-mp"]->frames = array(5,4,5);       
$character->movesets["crouch-hp"]->frames = array(7,8,9);       
$character->movesets["crouch-lk"]->frames = array(3,6,3);       
$character->movesets["crouch-mk"]->frames = array(4,6,7);       
$character->movesets["crouch-hk"]->frames = array(6,6,21);      
$character->movesets["up-lp"]->frames     = array(2,45);        
$character->movesets["up-mp"]->frames     = array(4,12,31);     
$character->movesets["up-hp"]->frames     = array(4,8,35);      
$character->movesets["up-lk"]->frames     = array(3,40,4);      
$character->movesets["up-mk"]->frames     = array(5,12,30);     
$character->movesets["up-hk"]->frames     = array(6,10,31);     
$character->movesets["jump-lp"]->frames   = array(2,43);        
$character->movesets["jump-mp"]->frames   = array(4,20,21);     
$character->movesets["jump-hp"]->frames   = array(4,8,33);      
$character->movesets["jump-lk"]->frames   = array(3,28,14);     
$character->movesets["jump-mk"]->frames   = array(4,10,31);     
$character->movesets["jump-hk"]->frames   = array(5,8,32);      

$character->movesets["close-lp"]->attack  = 11;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = 15;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 15;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 11;
$character->movesets["crouch-hp"]->attack = 13;
$character->movesets["up-lp"]->attack     = 11;
$character->movesets["up-mp"]->attack     = 13;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 11;
$character->movesets["jump-mp"]->attack   = 12;
$character->movesets["jump-hp"]->attack   = 15;
$character->movesets["close-lk"]->attack  = 12;
$character->movesets["close-mk"]->attack  = 15;
$character->movesets["close-hk"]->attack  = 17;
$character->movesets["far-lk"]->attack    = 12;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 17;
$character->movesets["crouch-lk"]->attack = 8;
$character->movesets["crouch-mk"]->attack = 11;
$character->movesets["crouch-hk"]->attack = 14;
$character->movesets["up-lk"]->attack     = 11;
$character->movesets["up-mk"]->attack     = 13;
$character->movesets["up-hk"]->attack     = 16;
$character->movesets["jump-lk"]->attack   = 12;
$character->movesets["jump-mk"]->attack   = 12;
$character->movesets["jump-hk"]->attack   = 15;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = 22;
$character->movesets["airthrow-1"]->attack  = 29;
$character->movesets["airthrow-2"]->attack  = 24;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", MK, "/", HK);
$character->movesets["airthrow-1"]->input  = array(LEFT, "/", RIGHT, " + ", MP, "/", HP);
$character->movesets["airthrow-2"]->input  = array(LEFT, "/", RIGHT, " + ", MK, "/", HK);

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
