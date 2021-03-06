<?php
require("../../util.php");

$character = new Character('Chun Li');

addStandardMovesets($character);

$character->addMoveset(
  'Head Stomp', UNIQUE, movesetImages("./unique-1/*.jpg"), 14, STANDING, PUSHBACK,
  array(DOWN, MK), array(3,16,26)
);

$character->addMoveset(
  'Back Flip', UNIQUE, movesetImages("./unique-2/*.jpg"), 12, STANDING | CROUCHING, PUSHBACK,
  array(DOWNFORWARD, MK), array(7,5,42)
);

$character->addMoveset(
  'Neck Breaker', UNIQUE, movesetImages("./unique-3/*.jpg"), 13, STANDING | CROUCHING, KNOCKDOWN,
  array(DOWNFORWARD, HK), array(37,14)
);

$character->addMoveset(
  'Lightning Kick', SPECIAL, movesetImages("./special-1/*.jpg"), "18*12, 19*12, 20*12", STANDING | CROUCHING, PUSHBACK,
  array(KICK, 'x5'), array(array(4,4,4,4,4,4,4,3,4), array(7,2,2,2,2,2,2,2,2,1,8), array(10,1,1,1,1,1,1,1,1,1,1,1,13))
);

$character->addMoveset(
  'Kikoken', SPECIAL, movesetImages("./special-2/*.jpg"), "11, 11, 12", STANDING | CROUCHING, PUSHBACK,
  array(BF, PUNCH), array(array(6,SKIP,43),array(6,SKIP,41),array(6,SKIP,39))
);

$character->addMoveset(
  'Up Kick', SPECIAL, movesetImages("./special-3/*.jpg",CLEARDIV,"./special-4/*.jpg"), "8*3", STANDING | CROUCHING, KNOCKDOWN,
  array(DU,KICK),
  array(
  array(6,4,2,6,6,6,37),
array(4,4,4,4,8,4,8,4,34),
array(2,2,3,5,8,4,8,4,8,4,23))
);

$character->addMoveset(
  'Spinning Bird Kick', SPECIAL, movesetImages("./special-5/*.jpg"), "8*4,8*6,8*9", STANDING | CROUCHING, PUSHBACK,
  array(BF,KICK),
  array(
  array(32,2,3,1,5,2,11,2,21),
  array(34,3,5,1,3,1,3,1,4,2,8,4,23),
  array(36,3,7,2,3,1,3,1,3,1,3,1,3,1,4,1,7,3,31))
);

$character->addMoveset(
  'Air Spinning Bird Kick', SPECIAL, movesetImages("./special-6/*.jpg"), "8*2", STANDING | CROUCHING, PUSHBACK,
  array(BF,KICK),
  array(
  array(24,3,9.2,UNTIL_LAND,SKIP,10),
  array(24,3,9.2,UNTIL_LAND,SKIP,10),
  array(21,2,6.2,UNTIL_LAND,SKIP,10))
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "8+8+8+8+8+8", STANDING | CROUCHING, 'Last hit Knockdown',
  array(LEFT,RIGHT,LEFT,RIGHT,KICK),
  array(1,SKIP,17,SKIP,9,4,9,6,6,1,1,1,1,1,1,1,14)
);

//  array(array(6,4,4,4,8,4,37),array(4,4,4,4,8,4,8,4,34),array(2,2,4,4,8,4,8,4,8,4,23))


$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->specialCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["close-hp"]->specialCancel = true;
$character->movesets["close-hp"]->superCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["far-mp"]->specialCancel = true;
$character->movesets["far-mp"]->superCancel = true;
$character->movesets["far-hp"]->superCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["close-mk"]->superCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;
$character->movesets["crouch-mk"]->specialCancel = true;
$character->movesets["crouch-mk"]->superCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,4);
$character->movesets["close-mp"]->frames  = array(5,4,4);
$character->movesets["close-hp"]->frames  = array(4,20,11);
$character->movesets["close-lk"]->frames  = array(4,5,5);
$character->movesets["close-mk"]->frames  = array(7,3,SKIP,6,8);
$character->movesets["close-hk"]->frames  = array(9,21,7);
$character->movesets["far-lp"]->frames    = array(3,2,8);
$character->movesets["far-mp"]->frames    = array(5,4,4);
$character->movesets["far-hp"]->frames    = array(6,6,18);
$character->movesets["far-lk"]->frames    = array(7,5,5);
$character->movesets["far-mk"]->frames    = array(7,5,8);
$character->movesets["far-hk"]->frames    = array(11,8,14);
$character->movesets["crouch-lp"]->frames = array(4,4,5);
$character->movesets["crouch-mp"]->frames = array(5,4,5);
$character->movesets["crouch-hp"]->frames = array(7,6,19);
$character->movesets["crouch-lk"]->frames = array(5,4,5);
$character->movesets["crouch-mk"]->frames = array(5,5,4);
$character->movesets["crouch-hk"]->frames = array(7,6,20);
$character->movesets["up-lp"]->frames     = array(8,37);
$character->movesets["up-mp"]->frames     = array(8,16,21);
$character->movesets["up-hp"]->frames     = array(8,8,29);
$character->movesets["up-lk"]->frames     = array(6,39);
$character->movesets["up-mk"]->frames     = array(6,10,29);
$character->movesets["up-hk"]->frames     = array(3,5,SKIP,4,SKIP,4,29);
$character->movesets["jump-lp"]->frames   = array(6,38);
$character->movesets["jump-mp"]->frames   = array(6,16,22);
$character->movesets["jump-hp"]->frames   = array(6,8);
$character->movesets["jump-lk"]->frames   = array(6,38);
$character->movesets["jump-mk"]->frames   = array(6,16,22);
$character->movesets["jump-hk"]->frames   = array(6,6,SKIP,4,6);

$character->movesets["close-lp"]->attack  = 11;
$character->movesets["close-mp"]->attack  = 14;
$character->movesets["close-hp"]->attack  = 15;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 14;
$character->movesets["far-hp"]->attack    = 15;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 11;
$character->movesets["crouch-hp"]->attack = 13;
$character->movesets["up-lp"]->attack     = 11;
$character->movesets["up-mp"]->attack     = 13;
$character->movesets["up-hp"]->attack     = 15;
$character->movesets["jump-lp"]->attack   = 11;
$character->movesets["jump-mp"]->attack   = 12;
$character->movesets["jump-hp"]->attack   = 15;
$character->movesets["close-lk"]->attack  = 12;
$character->movesets["close-mk"]->attack  = 15;
$character->movesets["close-hk"]->attack  = 17;
$character->movesets["far-lk"]->attack    = 12;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 17;
$character->movesets["crouch-lk"]->attack = 8;
$character->movesets["crouch-mk"]->attack = 11;
$character->movesets["crouch-hk"]->attack = 14;
$character->movesets["up-lk"]->attack     = 11;
$character->movesets["up-mk"]->attack     = 13;
$character->movesets["up-hk"]->attack     = 16;
$character->movesets["jump-lk"]->attack   = 12;
$character->movesets["jump-mk"]->attack   = 12;
$character->movesets["jump-hk"]->attack   = 15;

$character->movesets["throw-1"]->attack  = 22;
$character->movesets["airthrow-1"]->attack  = 24;
$character->movesets["throw-1"]->input  = array(LEFT,"/", RIGHT, " + ", MP, "/", HP);
$character->movesets["airthrow-1"]->input  = array(LEFT, "/", RIGHT, " + ", MP, "/", HP);

$character->movesets["up-hk"]->block = STANDING | CROUCHING;
$character->movesets["up-hk"]->hit = KNOCKDOWN;


htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
