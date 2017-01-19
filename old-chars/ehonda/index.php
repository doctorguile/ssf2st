<?php
require("../../util.php");

$character = new Character('E.Honda', UP . UP . UP . DOWN);

addStandardMovesets($character);

$character->addMoveset(
  'Knee Bash', UNIQUE, movesetImages("./unique-2/*.jpg"), '15+10', STANDING | CROUCHING, PUSHBACK,
  array(BACK,'/',FORWARD,' + ', MK), array(10,3,SKIP,3,7)
);

$character->addMoveset(
  'Belly Flop', UNIQUE, movesetImages("./unique-1/*.jpg"), 15, STANDING, PUSHBACK,
  array(DOWN, MK), array(7,35)
);

$character->addMoveset(
  'Hundred Hand Slap', SPECIAL, movesetImages("./special-1/*.jpg"), "15+15+14, 16+16+15, 17+17+16", '3rd & 6th hit must be blocked Crouching', PUSHBACK,
  array(PUNCH, '*5'), array(array(3,4,SKIP,4,SKIP,4,SKIP,4,SKIP,4,SKIP,4),
array(4,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2,SKIP,2),
array(6,1,SKIP,1,SKIP,1,SKIP,1,SKIP,1,SKIP,1)
)
);

$character->addMoveset(
  'Headbutt', SPECIAL, movesetImages("./special-2/*.jpg"), "17, 18, 19", STANDING | CROUCHING, KNOCKDOWN,
  array(BF, PUNCH), array(
array(13,3,SKIP,3,SKIP,22,12,SKIP,12),
array(9,SKIP,2,2,SKIP,53,12,SKIP,12),
array(5,SKIP,1,1,SKIP,53,12,SKIP,12))
);

$character->addMoveset(
  'Butt Slam', SPECIAL, movesetImages("./special-3/*.jpg"), "15, 17, 19", STANDING | CROUCHING, KNOCKDOWN,
  array(DU,PUNCH),
  array(
array(21,9,13,10,4),
array(19,9,13,12,4),
array(18,11,13,15,6))
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(5,4,3);              
$character->movesets["close-mp"]->frames  = array(5,2,SKIP,4,5);       
$character->movesets["close-hp"]->frames  = array(7,3,SKIP,4,18);      
$character->movesets["close-lk"]->frames  = array(4,3,4);              
$character->movesets["close-mk"]->frames  = array(7,5,8);              
$character->movesets["close-hk"]->frames  = array(8,3,SKIP,5,18);      
$character->movesets["far-lp"]->frames    = array(5,4,3);              
$character->movesets["far-mp"]->frames    = array(7,4,5);              
$character->movesets["far-hp"]->frames    = array(7,3,SKIP,4,18);      
$character->movesets["far-lk"]->frames    = array(10,4,7);             
$character->movesets["far-mk"]->frames    = array(10,4,12);            
$character->movesets["far-hk"]->frames    = array(10,6,19);            
$character->movesets["crouch-lp"]->frames = array(5,8,5);              
$character->movesets["crouch-mp"]->frames = array(7,8,13);             
$character->movesets["crouch-hp"]->frames = array(6,4,30);             
$character->movesets["crouch-lk"]->frames = array(10,3,9);             
$character->movesets["crouch-mk"]->frames = array(7,3,SKIP,6,12);      
$character->movesets["crouch-hk"]->frames = array(8,6,4,8,8);
$character->movesets["up-lp"]->frames     = array(8,30,5);             
$character->movesets["up-mp"]->frames     = array(7,4,SKIP,12,20);     
$character->movesets["up-hp"]->frames     = array(7,6,30);             
$character->movesets["up-lk"]->frames     = array(7,30,6);             
$character->movesets["up-mk"]->frames     = array(7,12,24);            
$character->movesets["up-hk"]->frames     = array(7,6,30);             
$character->movesets["jump-lp"]->frames   = array(8,30,4);             
$character->movesets["jump-mp"]->frames   = array(7,4,SKIP,12,19);     
$character->movesets["jump-hp"]->frames   = array(7,8,27);             
$character->movesets["jump-lk"]->frames   = array(7,35);               
$character->movesets["jump-mk"]->frames   = array(7,12,23);            
$character->movesets["jump-hk"]->frames   = array(7,10,25);            

$character->movesets["close-lp"]->attack  = 12;
$character->movesets["close-mp"]->attack  = 15;
$character->movesets["close-hp"]->attack  = 18;
$character->movesets["far-lp"]->attack    = 12;
$character->movesets["far-mp"]->attack    = 15;
$character->movesets["far-hp"]->attack    = 18;
$character->movesets["crouch-lp"]->attack = 12;
$character->movesets["crouch-mp"]->attack = 15;
$character->movesets["crouch-hp"]->attack = '11+11';
$character->movesets["up-lp"]->attack     = 12;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 19;
$character->movesets["jump-lp"]->attack   = 10;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 18;

$character->movesets["close-lk"]->attack  = 11;
$character->movesets["close-mk"]->attack  = 14;
$character->movesets["close-hk"]->attack  = '4+18';
$character->movesets["far-lk"]->attack    = 11;
$character->movesets["far-mk"]->attack    = '4+15';
$character->movesets["far-hk"]->attack    = '4+18';
$character->movesets["crouch-lk"]->attack = 11;
$character->movesets["crouch-mk"]->attack = 14;
$character->movesets["crouch-hk"]->attack = 20;
$character->movesets["up-lk"]->attack     = 10;
$character->movesets["up-mk"]->attack     = 14;
$character->movesets["up-hk"]->attack     = 18;
$character->movesets["jump-lk"]->attack   = 10;
$character->movesets["jump-mk"]->attack   = 14;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = '17+3*n';
$character->movesets["throw-3"]->attack  = '17+3*n';
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", HP);
$character->movesets["throw-3"]->input  = array(LEFT,"/", RIGHT, " + ", HK);

$character->movesets["far-lk"]->block = CROUCHING;
$character->movesets["far-mk"]->block = CROUCHING;
$character->movesets["far-hk"]->block = CROUCHING;
$character->movesets["far-hk"]->hit = KNOCKDOWN;
$character->movesets["crouch-hp"]->block = CROUCHING;
$character->movesets["crouch-hp"]->hit = KNOCKDOWN;

$character->movesets["close-lk"]->block = CROUCHING;
$character->movesets["close-mk"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
