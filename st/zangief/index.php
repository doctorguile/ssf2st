<?php
require("../../util.php");

$character = new Character('Zangief');

addStandardMovesets($character);

$character->addMoveset(
  'Stomach Crunch (strong)', UNIQUE, movesetImages("./unique-2/*.jpg"), 16, STANDING, PUSHBACK,
  array(UP, MP), array(3,8,30)
);

$character->addMoveset(
  'Stomach Crunch (fierce)', UNIQUE, movesetImages("./unique-3/*.jpg"), 20, STANDING, PUSHBACK,
  array(UP, HP), array(3,6,32)
);

$character->addMoveset(
  'Splash', UNIQUE, movesetImages("./unique-6/*.jpg"), 16, STANDING, PUSHBACK,
  array(DOWN, HP), array(5,34)
);

$character->addMoveset(
  'Ground Hop', UNIQUE, movesetImages("./unique-1/*.jpg"), 16, STANDING, PUSHBACK,
  array(LEFT,'/',RIGHT,' + ', MP,'/',HP), array(array(15,23,40),array(15,25,43))
);

$character->addMoveset(
  'Knees (short)', UNIQUE, movesetImages("./unique-4/*.jpg"),10, STANDING, PUSHBACK,
  array(DOWN, LK), array(5,34)
);

$character->addMoveset(
  'Knees (forward)', UNIQUE, movesetImages("./unique-5/*.jpg"), 14, STANDING, PUSHBACK,
  array(DOWN, MK),array(7,18,14)
);

$character->addMoveset(
  'Lariat (punch)', SPECIAL, movesetImages("./special-1/*.jpg"), "10, 11, 12", STANDING | CROUCHING, KNOCKDOWN,
  array(PPP), array(0,7,5,5,5,5,5,5,5,5,5,5,3)
);

$character->addMoveset(
  'Lariat (kick)', SPECIAL, movesetImages("./special-2/*.jpg"), "10, 11, 12", STANDING | CROUCHING, KNOCKDOWN,
  array(KKK), array(0,7,5,5,5,5,5,5,6)
);

$character->addMoveset(
  'Banishing Flat (Green Hand)', SPECIAL, movesetImages("./special-4/*.jpg"), "16", STANDING | CROUCHING, PUSHBACK,
  array(FORWARD,DOWNFORWARD,DOWN,PUNCH), array(6,12,22)
);

$character->addMoveset(
  'Spinning Pile Driver', SPECIAL, movesetImages("./special-3/*.jpg"), "25, 28, 30", null, KNOCKDOWN,
  array(SPD, PUNCH), array(
array(0,5,SKIP,5,22),
array(0,5,SKIP,5,24),
array(0,5,SKIP,5,26))
);

$character->addMoveset(
  'Double Suplex', SPECIAL, movesetImages("./special-5/*.jpg"), "14+18, 14+19, 14+20", null, KNOCKDOWN,
  array('Close', SPD,KICK)
);

$character->addMoveset(
  'Running Bear Grab', SPECIAL, movesetImages("./special-6/*.jpg"), "20, 20, 20", null, KNOCKDOWN,
  array('Far', SPD,KICK),
  array(
array(10,16,SKIP,5,SKIP,5,22),
array(12,16,SKIP,5,SKIP,5,24),
array(14,16,SKIP,5,SKIP,5,26)
)
);


$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "14+14+30", '&nbsp;', KNOCKDOWN,
  array(SPD,SPD,PUNCH)
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;

$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;

$character->movesets["close-lp"]->frames  = array(1,3,SKIP,2,SKIP,2,15);       
$character->movesets["close-mp"]->frames  = array(5,3,5);               
$character->movesets["close-hp"]->frames  = array(7,6,29);              
$character->movesets["close-lk"]->frames  = array(8,8,5);               
$character->movesets["close-mk"]->frames  = array(7,4,9);               
$character->movesets["close-hk"]->frames  = array(10,6,SKIP,8,26);      
$character->movesets["far-lp"]->frames    = array(3,4,5);               
$character->movesets["far-mp"]->frames    = array(5,3,5);               
$character->movesets["far-hp"]->frames    = array(7,6,29);              
$character->movesets["far-lk"]->frames    = array(5,5,0);               
$character->movesets["far-mk"]->frames    = array(7,4,9);               
$character->movesets["far-hk"]->frames    = array(5,8,11);              
$character->movesets["crouch-lp"]->frames = array(4,5,0);               
$character->movesets["crouch-mp"]->frames = array(7,8,9);               
$character->movesets["crouch-hp"]->frames = array(7,8,23);              
$character->movesets["crouch-lk"]->frames = array(4,4,7);               
$character->movesets["crouch-mk"]->frames = array(4,6,9);               
$character->movesets["crouch-hk"]->frames = array(5,8,13);              
$character->movesets["up-lp"]->frames     = array(2,3,SKIP,8,28);       
$character->movesets["up-mp"]->frames     = array(2,3,SKIP,8,28);       
$character->movesets["up-hp"]->frames     = array(2,3,SKIP,8,28);       
$character->movesets["up-lk"]->frames     = array(3,38);                
$character->movesets["up-mk"]->frames     = array(3,16,8,SKIP,6,SKIP,8);
$character->movesets["up-hk"]->frames     = array(3,8,8,SKIP,6,SKIP,16);
$character->movesets["jump-lp"]->frames   = array(2,3,SKIP,8,26);       
$character->movesets["jump-mp"]->frames   = array(2,3,SKIP,8,26);       
$character->movesets["jump-hp"]->frames   = array(7,7,25);              
$character->movesets["jump-lk"]->frames   = array(3,16,8,SKIP,6,SKIP,6);
$character->movesets["jump-mk"]->frames   = array(3,16,8,SKIP,6,SKIP,6);
$character->movesets["jump-hk"]->frames   = array(3,8,8,SKIP,6,SKIP,14);

$character->movesets["close-lp"]->attack  = 9;
$character->movesets["close-mp"]->attack  = 15;
$character->movesets["close-hp"]->attack  = 18;
$character->movesets["far-lp"]->attack    = 11;
$character->movesets["far-mp"]->attack    = 15;
$character->movesets["far-hp"]->attack    = 18;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 15;
$character->movesets["crouch-hp"]->attack = 18;
$character->movesets["up-lp"]->attack     = 11;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 18;
$character->movesets["jump-lp"]->attack   = 11;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 18;
                                            
$character->movesets["close-lk"]->attack  = 11;
$character->movesets["close-mk"]->attack  = 15;
$character->movesets["close-hk"]->attack  = '18+3';
$character->movesets["far-lk"]->attack    = 11;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 18;
$character->movesets["crouch-lk"]->attack = 11;
$character->movesets["crouch-mk"]->attack = 15;
$character->movesets["crouch-hk"]->attack = 18;
$character->movesets["up-lk"]->attack     = 11;
$character->movesets["up-mk"]->attack     = 14;
$character->movesets["up-hk"]->attack     = 18;
$character->movesets["jump-lk"]->attack   = 11;
$character->movesets["jump-mk"]->attack   = 14;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["airthrow-1"]->attack  = 30;
$character->movesets["airthrow-2"]->attack  = 24;
$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-3"]->attack  = 22;
$character->movesets["throw-2"]->attack  = '18 + 3*n';
$character->movesets["throw-4"]->attack  = '18 + 3*n';
$character->movesets["throw-5"]->attack  = '18 + 3*n';
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP);
$character->movesets["throw-3"]->input  = array(LEFT,"/", RIGHT, " + ", MK);
$character->movesets["throw-2"]->input  = array(LEFT,"/", RIGHT, " + ", HP);
$character->movesets["throw-4"]->input  = array(LEFT,"/", RIGHT, " + ", HK);
$character->movesets["throw-5"]->input  = array(DOWN, " + ", MP,'/',HP);
$character->movesets["airthrow-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP,'/',HP);
$character->movesets["airthrow-2"]->input  = array(LEFT,"/", RIGHT, " + ", MK,'/',HK);

$character->movesets["far-lk"]->block = CROUCHING;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
