<?php
require("../../util.php");

$character = new Character('Dee Jay');

addStandardMovesets($character);

$character->addMoveset(
  'Knee Shot', UNIQUE, movesetImages("./unique-1/*.jpg"), 8, STANDING, PUSHBACK,
  array(DOWN, LK), array(2,40,1)
);

$character->addMoveset(
  'Max Out (fire ball)', SPECIAL, movesetImages("./special-1/*.jpg"), "10, 11, 12", STANDING | CROUCHING, PUSHBACK,
  array(BF, PUNCH), array(8,33)
);

$character->addMoveset(
  'Dread Kick (Rolling Sobat)', SPECIAL, movesetImages("./special-2/*.jpg",CLEARDIV,"./special-3/*.jpg"), "18, 18+11, 18+11", STANDING | CROUCHING, KNOCKDOWN,
  array(BF, KICK), array(
array(14,4,SKIP,6,26),
array(11,2,SKIP,2,13,5,SKIP,10,16),
array(11,2,SKIP,2,13,5,SKIP,10,18))
);

$character->addMoveset(
  'Machine Gun Upper', SPECIAL, movesetImages("./special-4/*.jpg"), "8+8+15+8, 8+9+16+8, 8+9+17+8", STANDING | CROUCHING, 'Pushback + Knockdown',
  array(DU,PUNCH, '* mash'),
  array(
  array(4,13,SKIP,5,SKIP,4,SKIP,18,11),
array(5,13,SKIP,5,SKIP,4,SKIP,18,11),
array(6,13,SKIP,5,SKIP,4,SKIP,18,11),
array(4,7,SKIP,7,SKIP,11,SKIP,18,11),
array(5,7,SKIP,7,SKIP,11,SKIP,18,11),
array(6,7,SKIP,7,SKIP,11,SKIP,18,11)
)
);

$character->addMoveset(
  'Up Kick', SPECIAL, movesetImages("./special-5/*.jpg",CLEARDIV,"./special-6/*.jpg",CLEARDIV,"./special-7/*.jpg"), "17, 9+9, 8+8+8", STANDING | CROUCHING, KNOCKDOWN,
  array(DU,KICK),
  array(
array(6,6,26,SKIP,4),
array(5,3,10,8,20,SKIP,6),
array(4,2,4,8,6,10,22,SKIP,7)
)
);


$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "13+13+13+13", STANDING | CROUCHING, 'Last hit Knockdown',
  array(LEFT,RIGHT,LEFT,RIGHT,KICK),
  array(1,SKIP,17,SKIP,13,2,SKIP,2,15,2,SKIP,2,13,2,SKIP,2,16,10,16)
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["far-mp"]->specialCancel = true;
$character->movesets["far-mp"]->superCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["crouch-hp"]->specialCancel = true;
$character->movesets["crouch-hp"]->superCancel = true;
$character->movesets["close-lk"]->chainCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-hk"]->specialCancel = true;
$character->movesets["close-hk"]->superCancel = true;
$character->movesets["far-lk"]->chainCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["crouch-lk"]->chainCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,1);         
$character->movesets["close-mp"]->frames  = array(4,3,SKIP,5,1);  
$character->movesets["close-hp"]->frames  = array(7,4,2,5,5);     
$character->movesets["close-lk"]->frames  = array(4,4,1);         
$character->movesets["close-mk"]->frames  = array(7,6,1);         
$character->movesets["close-hk"]->frames  = array(4,4,2,6,7);     
$character->movesets["far-lp"]->frames    = array(5,4,4);         
$character->movesets["far-mp"]->frames    = array(4,3,SKIP,5,1);  
$character->movesets["far-hp"]->frames    = array(7,4,SKIP,8,5);  
$character->movesets["far-lk"]->frames    = array(5,4,3);         
$character->movesets["far-mk"]->frames    = array(7,3,SKIP,8,7);  
$character->movesets["far-hk"]->frames    = array(10,9,9);        
$character->movesets["crouch-lp"]->frames = array(3,3,1);         
$character->movesets["crouch-mp"]->frames = array(6,6,4);         
$character->movesets["crouch-hp"]->frames = array(5,3,SKIP,9,6);  
$character->movesets["crouch-lk"]->frames = array(5,4,5);         
$character->movesets["crouch-mk"]->frames = array(7,6,6);         
$character->movesets["crouch-hk"]->frames = array(9,4,SKIP,2,15); 
$character->movesets["up-lp"]->frames     = array(2,42);          
$character->movesets["up-mp"]->frames     = array(3,4,SKIP,14,23);
$character->movesets["up-hp"]->frames     = array(5,6,33);        
$character->movesets["up-lk"]->frames     = array(2,42);          
$character->movesets["up-mk"]->frames     = array(6,14,24);       
$character->movesets["up-hk"]->frames     = array(7,10,27);       
$character->movesets["jump-lp"]->frames   = array(2,41);          
$character->movesets["jump-mp"]->frames   = array(6,4,SKIP,8,25); 
$character->movesets["jump-hp"]->frames   = array(7,14,22);       
$character->movesets["jump-lk"]->frames   = array(2,41);          
$character->movesets["jump-mk"]->frames   = array(6,14,23);       
$character->movesets["jump-hk"]->frames   = array(5,8,30); 

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = '17+3';
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 13;
$character->movesets["far-hp"]->attack    = 18;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 14;
$character->movesets["crouch-hp"]->attack = 17;
$character->movesets["up-lp"]->attack     = 8;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 17;
$character->movesets["jump-lp"]->attack   = 8;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 17;

$character->movesets["close-lk"]->attack  = 3;
$character->movesets["close-mk"]->attack  = 15;
$character->movesets["close-hk"]->attack  = 18;
$character->movesets["far-lk"]->attack    = 3;
$character->movesets["far-mk"]->attack    = '14+3';
$character->movesets["far-hk"]->attack    = 18;
$character->movesets["crouch-lk"]->attack = 3;
$character->movesets["crouch-mk"]->attack = 14;
$character->movesets["crouch-hk"]->attack = 18;
$character->movesets["up-lk"]->attack     = 12;
$character->movesets["up-mk"]->attack     = 15;
$character->movesets["up-hk"]->attack     = 17;
$character->movesets["jump-lk"]->attack   = 12;
$character->movesets["jump-mk"]->attack   = 15;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-2"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", MK, "/", HK);

$character->movesets["far-lk"]->block = CROUCHING;
$character->movesets["crouch-mk"]->hit = KNOCKDOWN;
// TODO
//$character->movesets["crouch-hk"]->hit = KNOCKDOWN;


htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
