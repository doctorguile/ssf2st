<?php
require("../../util.php");

$character = new Character('Vega');

addStandardMovesets($character);

$character->addMoveset(
  'Backflip (long)', SPECIAL, movesetImages("./special-1/*.jpg"), "&nbsp;", null, null,
  array(PPP), array(54,SKIP,9)
);

$character->addMoveset(
  'Backflip (short)', SPECIAL, movesetImages("./special-2/*.jpg"), "&nbsp;", null, null,
  array(KKK), array(30,SKIP,9)
);


$character->addMoveset(
  'Flip Kick', SPECIAL, movesetImages("./special-5/*.jpg"), "12, 12, 12+8", STANDING | CROUCHING, KNOCKDOWN,
  array(DOWNBACK, FORWARD, KICK), array(
  array(5,11,18,SKIP,5),
array(5,6,SKIP,5,18,SKIP,7),
array(5,6,SKIP,5,18,SKIP,9))
);


$character->addMoveset(
  'Claw Roll', SPECIAL, movesetImages("./special-3/*.jpg",CLEARDIV,"./special-4/*.jpg"), "3+3+21(13), 3+3+21(13), 3+3+22(14)", STANDING | CROUCHING, PUSHBACK,
  array(BF, PUNCH), array(array(10,4,6,3,4,8,5),
array(10,4,6,1,2,4,6,3,4,8,5),
array(10,4,6,1,2,4,6,1,2,4,6,3,4,8,5))
);

$character->addMoveset(
  'Aerial Claw Slice (Sky High Claw)', SPECIAL, movesetImages("./special-9/*.jpg"), "19(10), 20(10), 21(10)", STANDING | CROUCHING, PUSHBACK,
  array(DU, PUNCH), array(array(0,33,21,SKIP,12),array(0,33,13,SKIP,12),array(0,33,7,SKIP,12))
);

$character->addMoveset(
  'Wall Dive', SPECIAL, movesetImages("./special-6/*.jpg"), '&nbsp;', NULL, NULL,
  array(DU, KICK)
);

$character->addMoveset(
  'Flying Barcelona Attack', SPECIAL, movesetImages("./special-7/*.jpg"), "19(14), 19(14), 20(15)", STANDING, KNOCKDOWN,
  array('After wall Dive', PUNCH), array(3,6,UNTIL_LAND,SKIP,13)
);

$character->addMoveset(
  'Izuna Drop', SPECIAL, movesetImages("./special-8/*.jpg"), "24", NULL, NULL,
  array('After wall Dive', LEFT, '/', RIGHT, ' + ', MP, '/', HP)
);


$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "14+14+21", NULL, KNOCKDOWN,
  array(DOWNLEFT,DOWNRIGHT,DOWNLEFT,UPRIGHT,KICK, '&nbsp;&nbsp; fly next to opponent', PUNCH)
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-mk"]->superCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["far-mk"]->superCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["crouch-mk"]->superCancel = true;

$character->movesets["close-lp"]->frames  = array(5,4,5);  
$character->movesets["close-mp"]->frames  = array(6,4,9);  
$character->movesets["close-hp"]->frames  = array(7,6,10); 
$character->movesets["close-lk"]->frames  = array(5,4,5);  
$character->movesets["close-mk"]->frames  = array(6,6,9);  
$character->movesets["close-hk"]->frames  = array(7,6,10); 
$character->movesets["far-lp"]->frames    = array(5,4,5);  
$character->movesets["far-mp"]->frames    = array(8,6,10); 
$character->movesets["far-hp"]->frames    = array(12,6,13);
$character->movesets["far-lk"]->frames    = array(5,4,5);  
$character->movesets["far-mk"]->frames    = array(6,6,10); 
$character->movesets["far-hk"]->frames    = array(9,8,12); 
$character->movesets["crouch-lp"]->frames = array(4,4,6);  
$character->movesets["crouch-mp"]->frames = array(4,4,11); 
$character->movesets["crouch-hp"]->frames = array(9,8,14); 
$character->movesets["crouch-lk"]->frames = array(5,4,6);  
$character->movesets["crouch-mk"]->frames = array(5,4,8);  
$character->movesets["crouch-hk"]->frames = array(8,17,15);
$character->movesets["up-lp"]->frames     = array(1,30,5); 
$character->movesets["up-mp"]->frames     = array(3,14,19);
$character->movesets["up-hp"]->frames     = array(5,10,21);
$character->movesets["up-lk"]->frames     = array(2,20,14);
$character->movesets["up-mk"]->frames     = array(2,10,24);
$character->movesets["up-hk"]->frames     = array(5,10,21);
$character->movesets["jump-lp"]->frames   = array(5,10,20);
$character->movesets["jump-mp"]->frames   = array(5,10,20);
$character->movesets["jump-hp"]->frames   = array(6,10,19);
$character->movesets["jump-lk"]->frames   = array(2,20,13);
$character->movesets["jump-mk"]->frames   = array(3,10,22);
$character->movesets["jump-hk"]->frames   = array(5,12,18);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 12;
$character->movesets["close-hp"]->attack  = 15;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 12;
$character->movesets["far-hp"]->attack    = 15;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 11;
$character->movesets["crouch-hp"]->attack = 16;
$character->movesets["up-lp"]->attack     = 3;
$character->movesets["up-mp"]->attack     = 12;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 3;
$character->movesets["jump-mp"]->attack   = 12;
$character->movesets["jump-hp"]->attack   = 16;
                                            
$character->movesets["close-lk"]->attack  = 3;
$character->movesets["close-mk"]->attack  = 12;
$character->movesets["close-hk"]->attack  = 15;
$character->movesets["far-lk"]->attack    = 3;
$character->movesets["far-mk"]->attack    = 12;
$character->movesets["far-hk"]->attack    = 15;
$character->movesets["crouch-lk"]->attack = 8;
$character->movesets["crouch-mk"]->attack = 10;
$character->movesets["crouch-hk"]->attack = 12;
$character->movesets["up-lk"]->attack     = 9;
$character->movesets["up-mk"]->attack     = 11;
$character->movesets["up-hk"]->attack     = 16;
$character->movesets["jump-lk"]->attack   = 8;
$character->movesets["jump-mk"]->attack   = 10;
$character->movesets["jump-hk"]->attack   = 16;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);

$character->movesets["airthrow-1"]->attack  = 22;
$character->movesets["airthrow-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
