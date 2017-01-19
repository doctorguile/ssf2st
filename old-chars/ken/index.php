<?php
require("../../util.php");

$character = new Character('Ken', LEFT . LEFT . LEFT . RIGHT);

addStandardMovesets($character);

$character->addMoveset(
  'Hadouken (fireball)', SPECIAL, movesetImages("./special-2/*.jpg"), "11, 12, 14", STANDING | CROUCHING, PUSHBACK,
  array(QCF, PUNCH), array(13,39)
);

$character->addMoveset(
  'Shoryuken (Uppercut)', SPECIAL, movesetImages("./special-1/*.jpg"), "22, 20+8, 3+20+8", STANDING | CROUCHING, 'Last Hit Knockdown',
  array(DP, PUNCH), array(
array(2,4,SKIP,14,16,SKIP,3),
array(2,4,SKIP,22,24,SKIP,3),
array(0,2,SKIP,2,SKIP,26,31,SKIP,3))
);

$character->addMoveset(
  'Hurricane Kick', SPECIAL, movesetImages("./special-3/*.jpg"), "8*7, 8*9, 8*11", STANDING | CROUCHING, PUSHBACK,
  array(QCB,KICK),
  array(
array(1,3,7,2,1,2,2,2,1,2,2,2,1,2,14,SKIP,0),
array(1,3,7,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,14,SKIP,0),
array(1,3,7,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,14,SKIP,0))
);

$character->addMoveset(
  'Air Hurricane Kick', SPECIAL, movesetImages("./special-4/*.jpg"), "8*6, 8*8, 8*10", STANDING | CROUCHING, PUSHBACK,
  array(QCB,KICK),
  array(
array(0,2,1,2,2,2,1,2,2,2,1,2,UNTIL_LAND,SKIP,7),
array(0,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,UNTIL_LAND,SKIP,7),
array(0,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,UNTIL_LAND,SKIP,7))
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-hp"]->specialCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-mp"]->specialCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-hp"]->specialCancel = true;
$character->movesets["up-lp"]->specialCancel = true;
$character->movesets["up-mp"]->specialCancel = true;
$character->movesets["up-hp"]->specialCancel = true;
$character->movesets["jump-lp"]->specialCancel = true;
$character->movesets["jump-mp"]->specialCancel = true;
$character->movesets["jump-hp"]->specialCancel = true;

$character->movesets["close-lk"]->chainCancel = true;
$character->movesets["crouch-lk"]->chainCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["crouch-hk"]->specialCancel = true;
$character->movesets["up-lk"]->specialCancel = true;
$character->movesets["up-hk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(3,4,5);   
$character->movesets["close-mp"]->frames  = array(4,2,17);  
$character->movesets["close-hp"]->frames  = array(4,2,SKIP,6,23);
$character->movesets["close-lk"]->frames  = array(6,6,4);   
$character->movesets["close-mk"]->frames  = array(4,6,8);   
$character->movesets["close-hk"]->frames  = array(8,8,SKIP,4,11);
$character->movesets["far-lp"]->frames    = array(3,4,4);   
$character->movesets["far-mp"]->frames    = array(4,4,6);   
$character->movesets["far-hp"]->frames    = array(6,6,22);  
$character->movesets["far-lk"]->frames    = array(7,8,5);   
$character->movesets["far-mk"]->frames    = array(12,12,7); 
$character->movesets["far-hk"]->frames    = array(3,4,SKIP,8,17);
$character->movesets["crouch-lp"]->frames = array(3,4,4);   
$character->movesets["crouch-mp"]->frames = array(4,4,7);   
$character->movesets["crouch-hp"]->frames = array(4,3,SKIP,8,23);
$character->movesets["crouch-lk"]->frames = array(3,4,5);   
$character->movesets["crouch-mk"]->frames = array(4,6,9);   
$character->movesets["crouch-hk"]->frames = array(4,6,25);  
$character->movesets["up-lp"]->frames     = array(2,42);    
$character->movesets["up-mp"]->frames     = array(4,20,20); 
$character->movesets["up-hp"]->frames     = array(4,20,20); 
$character->movesets["up-lk"]->frames     = array(3,40,1);  
$character->movesets["up-mk"]->frames     = array(5,13,26); 
$character->movesets["up-hk"]->frames     = array(2,4,SKIP,4,34);
$character->movesets["jump-lp"]->frames   = array(2,41);    
$character->movesets["jump-mp"]->frames   = array(4,8,31);  
$character->movesets["jump-hp"]->frames   = array(4,8,31);  
$character->movesets["jump-lk"]->frames   = array(5,38);    
$character->movesets["jump-mk"]->frames   = array(5,13,25); 
$character->movesets["jump-hk"]->frames   = array(5,7,31);  

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 15;
$character->movesets["close-hp"]->attack  = 17;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 17;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 14;
$character->movesets["crouch-hp"]->attack = 17;
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
$character->movesets["far-hk"]->attack    = 16;
$character->movesets["crouch-lk"]->attack = 3;
$character->movesets["crouch-mk"]->attack = 14;
$character->movesets["crouch-hk"]->attack = 16;
$character->movesets["up-lk"]->attack     = 9;
$character->movesets["up-mk"]->attack     = 14;
$character->movesets["up-hk"]->attack     = 16;
$character->movesets["jump-lk"]->attack   = 8;
$character->movesets["jump-mk"]->attack   = 16;
$character->movesets["jump-hk"]->attack   = 16;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", MK, "/", HK);

$character->movesets["close-lk"]->block = CROUCHING;
$character->movesets["far-lk"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
