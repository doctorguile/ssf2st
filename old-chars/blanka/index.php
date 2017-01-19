<?php
require("../../util.php");

$character = new Character('Blanka', RIGHT . LEFT . LEFT . LEFT);

addStandardMovesets($character);

$character->addMoveset(
  'Headbutt', UNIQUE, movesetImages("./unique-1/*.jpg"), '11+11', STANDING | CROUCHING, PUSHBACK,
  array(LEFT, '/',  RIGHT, MP), array(4,4,SKIP,3,SKIP,2,12), false, true, false
);

$character->addMoveset(
  'Blanka Ball', SPECIAL, movesetImages("./special-1/*.jpg"), '17,19,20', STANDING | CROUCHING, PUSHBACK,
  array(BF, PUNCH), array(array(SKIP,25,3),array(SKIP,25,3),array(SKIP,60,3))
);

$character->addMoveset(
  'Up Ball', SPECIAL, movesetImages("./special-2/*.jpg"), '17,17,18', STANDING | CROUCHING, PUSHBACK,
  array(DU, PUNCH), array(array(SKIP,33,3,4,SKIP,4,14,SKIP,6),array(SKIP,35,3,4,SKIP,4,16,SKIP,7),array(SKIP,24,3,4,SKIP,4,18,SKIP,8))
);

$character->addMoveset(
  'Jump back ball', SPECIAL, movesetImages("./special-3/*.jpg"), '8+8+8+17,17,17', STANDING | CROUCHING, PUSHBACK,
  array(BF, KICK), array(
  array(41,3,SKIP,4,SKIP,3,2,11,3),
array(35,3,SKIP,4,SKIP,3,2,14,3),
array(28,3,SKIP,4,SKIP,3,2,16,3))
);

$character->addMoveset(
  'Electricity', SPECIAL, movesetImages("./special-4/*.jpg"), "16,17,19", STANDING | CROUCHING, 'Electrified',
  array(PUNCH, '*5'), array(array(3,4,4,4,4,4,4,4,4,4,4,4,4,6,4,1,11),
array(5,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,4,4,1,11),
array(7,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,4,4,2,4,1,11))
);


$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["far-lp"]->specialCancel = true;

$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(5,2,8);    
$character->movesets["close-mp"]->frames  = array(3,4,2);    
$character->movesets["close-hp"]->frames  = array(7,4,3,17); 
$character->movesets["close-lk"]->frames  = array(14,4,12);  
$character->movesets["close-mk"]->frames  = array(12,2,4,12);
$character->movesets["close-hk"]->frames  = array(7,6,5,20); 
$character->movesets["far-lp"]->frames    = array(5,3,10);   
$character->movesets["far-mp"]->frames    = array(6,2,6);    
$character->movesets["far-hp"]->frames    = array(7,4,3,17); 
$character->movesets["far-lk"]->frames    = array(7,4,6);    
$character->movesets["far-mk"]->frames    = array(7,4,6);    
$character->movesets["far-hk"]->frames    = array(7,6,5,20); 
$character->movesets["crouch-lp"]->frames = array(9,3,7);    
$character->movesets["crouch-mp"]->frames = array(7,3,17);   
$character->movesets["crouch-hp"]->frames = array(9,6,17);   
$character->movesets["crouch-lk"]->frames = array(5,4,6);    
$character->movesets["crouch-mk"]->frames = array(5,4,6);    
$character->movesets["crouch-hk"]->frames = array(10,4,17);  
$character->movesets["up-lp"]->frames     = array(5,20,13);  
$character->movesets["up-mp"]->frames     = array(5,12,21);  
$character->movesets["up-hp"]->frames     = array(0,4,34);   
$character->movesets["jump-lp"]->frames   = array(5,20,13);  
$character->movesets["jump-mp"]->frames   = array(5,12,21);  
$character->movesets["jump-hp"]->frames   = array(5,6,27);   
$character->movesets["up-lk"]->frames     = array(5,20,13);  
$character->movesets["up-mk"]->frames     = array(5,12,21);  
$character->movesets["up-hk"]->frames     = array(5,6,27);   
$character->movesets["jump-lk"]->frames   = array(5,20,13);  
$character->movesets["jump-mk"]->frames   = array(5,12,21);  
$character->movesets["jump-hk"]->frames   = array(7,6,25);   

$character->movesets["close-lp"]->attack  = 9;
$character->movesets["close-mp"]->attack  = 12;
$character->movesets["close-hp"]->attack  = 16;
$character->movesets["far-lp"]->attack    = 9;
$character->movesets["far-mp"]->attack    = 12;
$character->movesets["far-hp"]->attack    = 16;
$character->movesets["crouch-lp"]->attack = 8;
$character->movesets["crouch-mp"]->attack = 12;
$character->movesets["crouch-hp"]->attack = 16;
$character->movesets["up-lp"]->attack     = 9;
$character->movesets["up-mp"]->attack     = 15;
$character->movesets["up-hp"]->attack     = 18;
$character->movesets["jump-lp"]->attack   = 9;
$character->movesets["jump-mp"]->attack   = 15;
$character->movesets["jump-hp"]->attack   = 18;
$character->movesets["close-lk"]->attack  = 9;
$character->movesets["close-mk"]->attack  = '13+13';
$character->movesets["close-hk"]->attack  = 17;
$character->movesets["far-lk"]->attack    = 9;
$character->movesets["far-mk"]->attack    = 13;
$character->movesets["far-hk"]->attack    = 17;
$character->movesets["crouch-lk"]->attack = 8;
$character->movesets["crouch-mk"]->attack = 12;
$character->movesets["crouch-hk"]->attack = 16;
$character->movesets["up-lk"]->attack     = 10;
$character->movesets["up-mk"]->attack     = 15;
$character->movesets["up-hk"]->attack     = 18;
$character->movesets["jump-lk"]->attack   = 10;
$character->movesets["jump-mk"]->attack   = 15;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["throw-1"]->attack  = '21 + 3*n';
$character->movesets["throw-1"]->input  = array(LEFT . "/" . RIGHT . " + " . HP);

$character->movesets["crouch-lp"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
