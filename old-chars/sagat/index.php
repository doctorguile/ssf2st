<?php
require("../../util.php");

$character = new Character('Sagat', UP . DOWN . DOWN . UP);

addStandardMovesets($character);

$character->addMoveset(
  'High Tiger (fire ball)', SPECIAL, movesetImages("./special-1/*.jpg"), "11, 12, 13", STANDING | CROUCHING, PUSHBACK,
  array(QCF, PUNCH), array(11,SKIP,37)
);

$character->addMoveset(
  'Low Tiger (fire ball)', SPECIAL, movesetImages("./special-2/*.jpg"), "10, 11, 12", STANDING | CROUCHING, PUSHBACK,
  array(QCF, KICK), array(11,SKIP,37)
);

$character->addMoveset(
  'Tiger Knee', SPECIAL, movesetImages("./special-3/*.jpg"), "14+11, 15+11, 16+11", STANDING | CROUCHING, 'Last hit Knockdown',
  array(DOWN, FORWARD,UPFORWARD, KICK), array(
array(4,3,SKIP,3,SKIP,5,13,SKIP,7),
array(4,3,SKIP,3,SKIP,6,14,SKIP,7),
array(5,3,SKIP,3,SKIP,7,15,SKIP,7))
);

$character->addMoveset(
  'Tiger Uppercut', SPECIAL, movesetImages("./special-4/*.jpg"), "21, 23, 29", STANDING | CROUCHING, KNOCKDOWN,
  array(DP,PUNCH),
  array(
array(3,4,SKIP,3,SKIP,14,21,SKIP,6),
array(3,4,SKIP,3,SKIP,22,23,SKIP,6),
array(3,4,SKIP,3,SKIP,26,25,SKIP,10))
);

$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-hp"]->specialCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["close-hk"]->specialCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-mk"]->specialCancel = true;
$character->movesets["far-hk"]->specialCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,4);         
$character->movesets["close-mp"]->frames  = array(5,6,7);         
$character->movesets["close-hp"]->frames  = array(7,8,11);        
$character->movesets["close-lk"]->frames  = array(4,2,SKIP,2,7);  
$character->movesets["close-mk"]->frames  = array(4,2,SKIP,2,13); 
$character->movesets["close-hk"]->frames  = array(4,3,SKIP,3,23); 
$character->movesets["far-lp"]->frames    = array(4,4,4);         
$character->movesets["far-mp"]->frames    = array(6,4,8);         
$character->movesets["far-hp"]->frames    = array(8,6,22);        
$character->movesets["far-lk"]->frames    = array(4,2,SKIP,2,7);  
$character->movesets["far-mk"]->frames    = array(4,2,SKIP,2,13); 
$character->movesets["far-hk"]->frames    = array(4,3,SKIP,3,23); 
$character->movesets["crouch-lp"]->frames = array(5,3,5);         
$character->movesets["crouch-mp"]->frames = array(5,4,7);         
$character->movesets["crouch-hp"]->frames = array(7,6,14);        
$character->movesets["crouch-lk"]->frames = array(5,4,6);         
$character->movesets["crouch-mk"]->frames = array(5,4,8);         
$character->movesets["crouch-hk"]->frames = array(7,6,18);        
$character->movesets["up-lp"]->frames     = array(3,39);          
$character->movesets["up-mp"]->frames     = array(3,14,25);       
$character->movesets["up-hp"]->frames     = array(5,10,27);       
$character->movesets["up-lk"]->frames     = array(2,40);          
$character->movesets["up-mk"]->frames     = array(3,20,19);       
$character->movesets["up-hk"]->frames     = array(5,8,29);        
$character->movesets["jump-lp"]->frames   = array(3,20,SKIP,4,13);
$character->movesets["jump-mp"]->frames   = array(3,14,23);       
$character->movesets["jump-hp"]->frames   = array(5,8,27);        
$character->movesets["jump-lk"]->frames   = array(2,38);    
$character->movesets["jump-mk"]->frames   = array(3,20,17); 
$character->movesets["jump-hk"]->frames   = array(5,8,27);  

$character->movesets["close-lp"]->attack  = 8;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = 15;
$character->movesets["far-lp"]->attack    = 8;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 15;
$character->movesets["crouch-lp"]->attack = 8;
$character->movesets["crouch-mp"]->attack = 14;
$character->movesets["crouch-hp"]->attack = 15;
$character->movesets["up-lp"]->attack     = 8;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 8;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 15;

$character->movesets["close-lk"]->attack  = '8+8';   
$character->movesets["close-mk"]->attack  = '9+11';  
$character->movesets["close-hk"]->attack  = '10+14'; 
$character->movesets["far-lk"]->attack    = '8+8';   
$character->movesets["far-mk"]->attack    = '9+11';  
$character->movesets["far-hk"]->attack    = '10+14'; 
$character->movesets["crouch-lk"]->attack = 3;       
$character->movesets["crouch-mk"]->attack = 14;      
$character->movesets["crouch-hk"]->attack = 15;      
$character->movesets["up-lk"]->attack     = 9;       
$character->movesets["up-mk"]->attack     = 14;      
$character->movesets["up-hk"]->attack     = 15;      
$character->movesets["jump-lk"]->attack   = 9;       
$character->movesets["jump-mk"]->attack   = 14;      
$character->movesets["jump-hk"]->attack   = 15;      

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);

//TODO
$character->movesets["close-lk"]->block = '1st hit must block Crouching';

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>