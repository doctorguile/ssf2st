<?php
require("../../util.php");

$character = new Character('M.Bison');

addStandardMovesets($character);

$character->addMoveset(
  'Psycho Crusher', SPECIAL, movesetImages("./special-1/*.jpg"), "16, 17, 18", STANDING | CROUCHING, KNOCKDOWN,
  array(BF, PUNCH), array(array(18,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,2,9,SKIP,7),
array(15,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,9,SKIP,7),
array(11,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,3,SKIP,2,9,SKIP,7)
)
);

$character->addMoveset(
  'Scissor Kicks', SPECIAL, movesetImages("./special-2/*.jpg"), "13+8, 14+8, 15+8", STANDING | CROUCHING, KNOCKDOWN,
  array(BF, KICK), array(
array(3,SKIP,5,8,SKIP,10,10),
array(3,SKIP,5,8,SKIP,10,11),
array(3,SKIP,5,8,SKIP,10,12))
);

$character->addMoveset(
  'Head Stomp',
  SPECIAL, movesetImages("./special-5/*.jpg"), "12, 13, 15", STANDING | CROUCHING, 'Pushback + Knockdown',
  array(DU,KICK),
array(30,UNTIL_LAND)
);

$character->addMoveset(
  'Skull Diver (follow up after head stomp)',
  SPECIAL, movesetImages("./special-6/*.jpg"), "16, 19, 19", STANDING | CROUCHING, 'Pushback + Knockdown',
  array('airborne', PUNCH),
  array(
array(3,UNTIL_LAND,6),
array(4,24,UNTIL_LAND,SKIP,6),
array(6,14,UNTIL_LAND,SKIP,6)
)
);


$character->addMoveset(
  'Devil Reverse', SPECIAL, movesetImages("./special-3/*.jpg",CLEARDIV,"./special-4/*.jpg"), "17, 18, 20", STANDING | CROUCHING, KNOCKDOWN,
  array(DU,PUNCH, ' after airborne', PUNCH),
  array(
  array(45,'Until pre-determined height',5,SKIP,6),
array(45,'Until pre-determined height',5,SKIP,8),
array(45,'Until pre-determined height',5,SKIP,10)
)
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "12+12+12+12", STANDING | CROUCHING, 'Last hit Knockdown',
  array(LEFT,RIGHT,LEFT,RIGHT,KICK),
  array(1,SKIP,17,SKIP,9,8,SKIP,10,6,8,SKIP,8,13)
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;


$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["crouch-mk"]->superCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,4);
$character->movesets["close-mp"]->frames  = array(3,4,SKIP,4,8);
$character->movesets["close-hp"]->frames  = array(9,6,19);
$character->movesets["close-lk"]->frames  = array(3,3,0);
$character->movesets["close-mk"]->frames  = array(7,5,9);
$character->movesets["close-hk"]->frames  = array(7,6,18);
$character->movesets["far-lp"]->frames    = array(4,4,4);
$character->movesets["far-mp"]->frames    = array(3,4,SKIP,4,8);
$character->movesets["far-hp"]->frames    = array(9,6,19);
$character->movesets["far-lk"]->frames    = array(5,4,3);
$character->movesets["far-mk"]->frames    = array(7,5,9);
$character->movesets["far-hk"]->frames    = array(7,6,18);
$character->movesets["crouch-lp"]->frames = array(4,4,4);
$character->movesets["crouch-mp"]->frames = array(5,4,8);
$character->movesets["crouch-hp"]->frames = array(9,6,19);
$character->movesets["crouch-lk"]->frames = array(5,4,5);
$character->movesets["crouch-mk"]->frames = array(5,8,5);
$character->movesets["crouch-hk"]->frames = array(7,29,17);
$character->movesets["up-lp"]->frames     = array(3,45);
$character->movesets["up-mp"]->frames     = array(3,20,25);
$character->movesets["up-hp"]->frames     = array(6,10,32);
$character->movesets["up-lk"]->frames     = array(2,40,6);
$character->movesets["up-mk"]->frames     = array(3,20,25);
$character->movesets["up-hk"]->frames     = array(5,8,35);
$character->movesets["jump-lp"]->frames   = array(2,40,5);
$character->movesets["jump-mp"]->frames   = array(array(3,20,24),array(7,10));
$character->movesets["jump-hp"]->frames   = array(9,12,26);
$character->movesets["jump-lk"]->frames   = array(2,40,5);
$character->movesets["jump-mk"]->frames   = array(3,20,24);
$character->movesets["jump-hk"]->frames   = array(5,8,34);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 13;
$character->movesets["close-hp"]->attack  = 17;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 13;
$character->movesets["far-hp"]->attack    = 17;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 13;
$character->movesets["crouch-hp"]->attack = 17;
$character->movesets["up-lp"]->attack     = 8;
$character->movesets["up-mp"]->attack     = 13;
$character->movesets["up-hp"]->attack     = 17;
$character->movesets["jump-lp"]->attack   = 8;
$character->movesets["jump-mp"]->attack   = 8;
$character->movesets["jump-hp"]->attack   = 17;

$character->movesets["close-lk"]->attack  = 9;
$character->movesets["close-mk"]->attack  = 13;
$character->movesets["close-hk"]->attack  = 18;
$character->movesets["far-lk"]->attack    = 9;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 18;
$character->movesets["crouch-lk"]->attack = 9;
$character->movesets["crouch-mk"]->attack = 15;
$character->movesets["crouch-hk"]->attack = 18;
$character->movesets["up-lk"]->attack     = 8;
$character->movesets["up-mk"]->attack     = 15;
$character->movesets["up-hk"]->attack     = 18;
$character->movesets["jump-lk"]->attack   = 8;
$character->movesets["jump-mk"]->attack   = 15;
$character->movesets["jump-hk"]->attack   = 18;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);

$character->movesets["far-lk"]->block = CROUCHING;
$character->movesets["crouch-mk"]->hit = KNOCKDOWN;

htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
