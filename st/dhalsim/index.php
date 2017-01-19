<?php
require("../../util.php");

$character = new Character('Dhalsim');

addStandardMovesets($character);
/*
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

*/
$character->addMoveset(
  'Mummy', UNIQUE, movesetImages("./unique-1/*.jpg"), 12, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, HP), array(6,4,SKIP,4,SKIP,4,SKIP,4,SKIP,UTIL_LAND,7)
);

$character->addMoveset(
  'Drill', UNIQUE, movesetImages("./unique-2/*.jpg",CLEARDIV,"./unique-3/*.jpg",CLEARDIV,"./unique-4/*.jpg"), 12, STANDING | CROUCHING, PUSHBACK,
  array(DOWN, KICK), array(6,4,SKIP,4,SKIP,4,SKIP,4,SKIP,UTIL_LAND,7)
);

$character->addMoveset(
  'Yoga Fire', SPECIAL, movesetImages("./special-1/*.jpg"), "11, 11, 13", STANDING | CROUCHING, 'Knockdown (except for LP version)',
  array(QCF, PUNCH), array(13,39)
);

$character->addMoveset(
  'Yoga Flame', SPECIAL, movesetImages("./special-2/*.jpg",CLEARDIV,"./special-3/*.jpg"), "18, 20, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(HCF, PUNCH), array(array(21,51),
array(22,67),
array(24,83))
);


$character->addMoveset(
  'Yoga Blast', SPECIAL, movesetImages("./special-5/*.jpg",CLEARDIV,"./special-6/*.jpg"), "18, 20, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(HCF, KICK), array(array(15,25),
array(18,29),
array(21,35))
);

$character->addMoveset(
  'Teleport', SPECIAL, movesetImages("./special-4/*.jpg"), '&nbsp;', NULL, NULL,
  array(DP,'/',RDP, ' + ',PPP, '/', KKK),
  array(37,SKIP,26,SKIP,3)
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "11+11+11+11+11", STANDING | CROUCHING, 'Last hit Knockdown',
  array(HCF,HCF, PUNCH), array(1,SKIP,27,SKIP,7,90)
);


$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["close-hp"]->superCancel = true;
$character->movesets["far-lp"]->superCancel = true;

$character->movesets["close-crouch-lp"]->specialCancel = true;
$character->movesets["close-crouch-lp"]->superCancel = true;
$character->movesets["close-crouch-mp"]->specialCancel = true;
$character->movesets["close-crouch-mp"]->superCancel = true;
$character->movesets["close-crouch-hp"]->superCancel = true;

$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["close-mk"]->superCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["far-mk"]->superCancel = true;

$character->movesets["close-crouch-lk"]->specialCancel = true;
$character->movesets["close-crouch-lk"]->superCancel = true;
$character->movesets["close-crouch-mk"]->specialCancel = true;
$character->movesets["close-crouch-mk"]->superCancel = true;
$character->movesets["close-crouch-hk"]->specialCancel = true;
$character->movesets["close-crouch-hk"]->superCancel = true;

$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;

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
$character->movesets["close-crouch-lp"]->frames = array(3,3,6);   
$character->movesets["close-crouch-mp"]->frames = array(4,5,8);   
$character->movesets["close-crouch-hp"]->frames = array(6,8,11); 
$character->movesets["close-crouch-lk"]->frames = array(3,8,6);  
$character->movesets["close-crouch-mk"]->frames = array(2,8,6);   
$character->movesets["close-crouch-hk"]->frames = array(4,8,10); 

$character->movesets["crouch-lp"]->frames = array(9,6,10);   
$character->movesets["crouch-mp"]->frames = array(9,6,10);   
$character->movesets["crouch-hp"]->frames = array(12,6,20); 
$character->movesets["crouch-lk"]->frames = array(3,14,6);  
$character->movesets["crouch-mk"]->frames = array(8,16,6);   
$character->movesets["crouch-hk"]->frames = array(8,18,22); 

$character->movesets["up-lp"]->frames     = array(8,20,35); 
$character->movesets["up-mp"]->frames     = array(7,10,46); 
$character->movesets["up-hp"]->frames     = array(7,4,52);  
$character->movesets["up-lk"]->frames     = array(10,18,35);
$character->movesets["up-mk"]->frames     = array(10,12,41);
$character->movesets["up-hk"]->frames     = array(10,6,47); 

$character->movesets["jump-lp"]->frames   = array(7,16,40); 
$character->movesets["jump-mp"]->frames   = array(7,14,41); 
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
$character->movesets["close-crouch-lp"]->attack = 8;
$character->movesets["close-crouch-mp"]->attack = 11;
$character->movesets["close-crouch-hp"]->attack = 12;
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
$character->movesets["close-crouch-lk"]->attack = 8;
$character->movesets["close-crouch-mk"]->attack = 11;
$character->movesets["close-crouch-hk"]->attack = 13;
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

$character->movesets["far-lk"]->input = array(RIGHT, LK);
$character->movesets["close-crouch-lp"]->input = array(DOWNLEFT, LP);
$character->movesets["close-crouch-mp"]->input = array(DOWNLEFT, MP);
$character->movesets["close-crouch-hp"]->input = array(DOWNLEFT, HP);
$character->movesets["close-crouch-lk"]->input = array(DOWNLEFT, LK);
$character->movesets["close-crouch-mk"]->input = array(DOWNLEFT, MK);
$character->movesets["close-crouch-hk"]->input = array(DOWNLEFT, HK);

$character->movesets["close-lp"]->input = array(LEFT, LP);
$character->movesets["close-mp"]->input = array(LEFT, MP);
$character->movesets["close-hp"]->input = array(LEFT, HP);
//$character->movesets["close-lk"]->input = array(LEFT, LK);
$character->movesets["close-mk"]->input = array(LEFT, MK);
$character->movesets["close-hk"]->input = array(LEFT, HK);

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>