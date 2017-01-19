<?php
require("../../util.php");

$character = new Character('Dhalsim', DOWN . UP . UP . UP);

addStandardMovesets($character);

$character->addMoveset(
  'Close Crouch LP', UNIQUE, movesetImages("./unique-2/*.jpg"), 8, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, LP), array(3,4,5), false, true, false
);

$character->addMoveset(
  'Close Crouch MP', UNIQUE, movesetImages("./unique-3/*.jpg"), 11, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, MP), array(4,5,7), false, true, false
);

$character->addMoveset(
  'Close Crouch MK', UNIQUE, movesetImages("./unique-1/*.jpg"), 11, CROUCHING, PUSHBACK,
  array(DOWN, MK), array(2,8,5), false, true, false
);


$character->addMoveset(
  'Mummy', UNIQUE, movesetImages("./unique-5/*.jpg"), 12, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, HP), array(6,4,SKIP,4,SKIP,4,SKIP,4,SKIP,UTIL_LAND,7)
);

$character->addMoveset(
  'Drill', UNIQUE, movesetImages("./unique-4/*.jpg"), 12, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, HK), array(6,4,SKIP,4,SKIP,4,SKIP,4,SKIP,UTIL_LAND,7)
);

$character->addMoveset(
  'Yoga Fire', SPECIAL, movesetImages("./special-1/*.jpg"), "11, 11, 13", STANDING | CROUCHING, 'Knockdown (except for LP version)',
  array(QCF, PUNCH), array(13,39)
);

$character->addMoveset(
  'Yoga Flame', SPECIAL, movesetImages("./special-2/*.jpg"), "18, 20, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(HCF, PUNCH), array(array(21,51),
array(22,67),
array(24,83))
);
$character->addMoveset(
  'Teleport', SPECIAL, movesetImages("./special-3/*.jpg"), '&nbsp;', NULL, NULL,
  array(DP,'/',RDP, ' + ',PPP, '/', KKK),
  array(26,SKIP,20,SKIP,18,SKIP,3)
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(3,3,SKIP,6,5); 
$character->movesets["close-mp"]->frames  = array(3,3,SKIP,6,5); 
$character->movesets["close-hp"]->frames  = array(6,3,SKIP,8,17);
$character->movesets["close-lk"]->frames  = array(4,8,5);   
$character->movesets["close-mk"]->frames  = array(4,8,5);   
$character->movesets["close-hk"]->frames  = array(9,8,8);   
$character->movesets["far-lp"]->frames    = array(6,6,5);   
$character->movesets["far-mp"]->frames    = array(8,4,SKIP,6,9); 
$character->movesets["far-hp"]->frames    = array(8,4,SKIP,6,19);
$character->movesets["far-lk"]->frames    = array(6,8,9);   
$character->movesets["far-mk"]->frames    = array(6,8,9);   
$character->movesets["far-hk"]->frames    = array(11,6,18); 
$character->movesets["crouch-lp"]->frames = array(3,4,5);   
$character->movesets["crouch-mp"]->frames = array(4,5,7);   
$character->movesets["crouch-hp"]->frames = array(12,6,19); 
$character->movesets["crouch-lk"]->frames = array(3,14,5);  
$character->movesets["crouch-mk"]->frames = array(2,8,5);   
$character->movesets["crouch-hk"]->frames = array(8,18,21); 
$character->movesets["up-lp"]->frames     = array(9,6,9);   
$character->movesets["up-mp"]->frames     = array(9,6,9);   
$character->movesets["up-hp"]->frames     = array(12,6,19); 
$character->movesets["up-lk"]->frames     = array(3,14,5);  
$character->movesets["up-mk"]->frames     = array(8,16,5);  
$character->movesets["up-hk"]->frames     = array(8,18,21); 
$character->movesets["jump-lp"]->frames   = array(7,16,40); 
$character->movesets["jump-mp"]->frames   = array(7,10,46); 
$character->movesets["jump-hp"]->frames   = array(7,4,52);  
$character->movesets["jump-lk"]->frames   = array(10,18,35);
$character->movesets["jump-mk"]->frames   = array(10,12,41);
$character->movesets["jump-hk"]->frames   = array(10,6,47); 
                                            
$character->movesets["close-lp"]->attack  = 8;
$character->movesets["close-mp"]->attack  = 11;
$character->movesets["close-hp"]->attack  = '13+13';
$character->movesets["far-lp"]->attack    = 8;
$character->movesets["far-mp"]->attack    = 10;
$character->movesets["far-hp"]->attack    = 13;
$character->movesets["crouch-lp"]->attack = 8;
$character->movesets["crouch-mp"]->attack = 11;
$character->movesets["crouch-hp"]->attack = 13;
$character->movesets["up-lp"]->attack     = 8;
$character->movesets["up-mp"]->attack     = 12;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 8;
$character->movesets["jump-mp"]->attack   = 12;
$character->movesets["jump-hp"]->attack   = 15;

$character->movesets["close-lk"]->attack  = 8;
$character->movesets["close-mk"]->attack  = 12;
$character->movesets["close-hk"]->attack  = 13;
$character->movesets["far-lk"]->attack    = 8;
$character->movesets["far-mk"]->attack    = 10;
$character->movesets["far-hk"]->attack    = 13;
$character->movesets["crouch-lk"]->attack = 8;
$character->movesets["crouch-mk"]->attack = 10;
$character->movesets["crouch-hk"]->attack = 12;
$character->movesets["up-lk"]->attack     = 8;
$character->movesets["up-mk"]->attack     = 12;
$character->movesets["up-hk"]->attack     = 15;
$character->movesets["jump-lk"]->attack   = 8;
$character->movesets["jump-mk"]->attack   = 12;
$character->movesets["jump-hk"]->attack   = 15;

$character->movesets["throw-1"]->attack = '18 + 3*n';
$character->movesets["throw-2"]->attack = 24;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", HP);

$character->movesets["crouch-lp"]->block = CROUCHING;
$character->movesets["crouch-mp"]->block = CROUCHING;
$character->movesets["crouch-hp"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>