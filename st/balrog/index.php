<?php
require("../../util.php");

$character = new Character('Balrog');

addStandardMovesets($character);

$character->addMoveset(
  'Dashing Straight Punch', SPECIAL, movesetImages("./special-1/*.jpg"), '17,18,19', STANDING | CROUCHING, 'Pushback (HP Knockdown)',
  array(BF, PUNCH), array(array(11,8,10),array(19,8,10),array(28,8,10))
);

$character->addMoveset(
  'Dashing Uppercut', SPECIAL, movesetImages("./special-2/*.jpg"), '17,17,19', STANDING | CROUCHING, PUSHBACK,
  array(BF, KICK), array(array(11,8,6),array(19,8,6),array(27,8,6))
);

$character->addMoveset(
  'Dashing Ground Straight', SPECIAL, movesetImages("./special-3/*.jpg"), '17,18,19', CROUCHING, KNOCKDOWN,
  array(BDF, PUNCH), array(array(11,8,4),array(20,9,4),array(29,12,4))
);

$character->addMoveset(
  'Dashing Ground Uppercut', SPECIAL, movesetImages("./special-4/*.jpg"), '17,18,19', STANDING | CROUCHING, KNOCKDOWN,
  array(BDF, KICK), array(array(8,6,7),array(16,7,6),array(24,8,6))
);

$character->addMoveset(
  'Buffalo Headbutt (Bull Charge)', SPECIAL, movesetImages( "./special-6/*.jpg",CLEARDIV, "./special-7/*.jpg"), '12,12,14', STANDING | CROUCHING, KNOCKDOWN,
  array(DU, PUNCH), array(array(11,11,16,SKIP,5),array(13,9,15,SKIP,5),array(15,11,16,SKIP,5))
);

$character->addMoveset(
  'Turnaround Punch', SPECIAL, movesetImages("./special-5/*.jpg"), "17,24,28,33,37,44,50,58", STANDING | CROUCHING, PUSHBACK,
  array('Tap', PPP, ' or ', KKK , ' for at least 2 seconds, then release'), array(array(27,12,10))
);

$character->addMoveset(
  'Super', SUPER, movesetImages("./super/*.jpg"), "11+11+11+11+11", STANDING | CROUCHING, 'Last hit Knockdown',
  array(LEFT,RIGHT,LEFT,RIGHT,' + ', PUNCH,'/',KICK), array(array(1,SKIP,17,SKIP,5,8,13,16,5,16,5,16,10,12,13),
array(1,SKIP,17,SKIP,7,8,12,15,6,15,6,15,10,12,13))
);

$character->movesets["close-lp"]->chainCancel = true;
$character->movesets["close-lp"]->specialCancel = true;
$character->movesets["close-lp"]->superCancel = true;
$character->movesets["close-mp"]->superCancel = true;
$character->movesets["far-lp"]->chainCancel = true;
$character->movesets["far-lp"]->specialCancel = true;
$character->movesets["far-lp"]->superCancel = true;
$character->movesets["crouch-lp"]->chainCancel = true;
$character->movesets["crouch-lp"]->specialCancel = true;
$character->movesets["crouch-lp"]->superCancel = true;
$character->movesets["crouch-mp"]->specialCancel = true;
$character->movesets["crouch-mp"]->superCancel = true;
$character->movesets["crouch-hp"]->superCancel = true;

$character->movesets["close-lk"]->specialCancel = true;
$character->movesets["close-lk"]->superCancel = true;
$character->movesets["close-mk"]->specialCancel = true;
$character->movesets["close-mk"]->superCancel = true;
$character->movesets["far-lk"]->specialCancel = true;
$character->movesets["far-lk"]->superCancel = true;
$character->movesets["far-mk"]->superCancel = true;
$character->movesets["crouch-lk"]->specialCancel = true;
$character->movesets["crouch-lk"]->superCancel = true;
$character->movesets["crouch-mk"]->superCancel = true;

$character->movesets["close-lp"]->frames  = array(4,4,5);
$character->movesets["close-mp"]->frames  = array(6,4,7);
$character->movesets["close-hp"]->frames  = array(9,6,15);
$character->movesets["close-lk"]->frames  = array(4,4,5);
$character->movesets["close-mk"]->frames  = array(5,4,7);
$character->movesets["close-hk"]->frames  = array(7,6,15);
$character->movesets["far-lp"]->frames    = array(4,4,5);
$character->movesets["far-mp"]->frames    = array(7,4,7);
$character->movesets["far-hp"]->frames    = array(9,6,15);
$character->movesets["far-lk"]->frames    = array(4,4,5);
$character->movesets["far-mk"]->frames    = array(6,4,7);
$character->movesets["far-hk"]->frames    = array(9,6,15);
$character->movesets["crouch-lp"]->frames = array(3,4,5);
$character->movesets["crouch-mp"]->frames = array(5,4,8);
$character->movesets["crouch-hp"]->frames = array(6,2,SKIP,4,18);
$character->movesets["crouch-lk"]->frames = array(3,4,5);
$character->movesets["crouch-mk"]->frames = array(6,6,5);
$character->movesets["crouch-hk"]->frames = array(9,11,14);
$character->movesets["up-lp"]->frames     = array(2,24);
$character->movesets["up-mp"]->frames     = array(6,14,24);
$character->movesets["up-hp"]->frames     = array(8,10,27);
$character->movesets["jump-lp"]->frames   = array(2,32,10);
$character->movesets["jump-mp"]->frames   = array(4,14,26);
$character->movesets["jump-hp"]->frames   = array(8,11,25);
$character->movesets["up-lk"]->frames     = array(3,30,10);
$character->movesets["up-mk"]->frames     = array(4,15,24);
$character->movesets["up-hk"]->frames     = array(9,12,22);
$character->movesets["jump-lk"]->frames   = array(2,32,9);
$character->movesets["jump-mk"]->frames   = array(4,14,25);
$character->movesets["jump-hk"]->frames   = array(9,12,22);

$character->movesets["close-lp"]->attack  = 3;
$character->movesets["close-mp"]->attack  = 15;
$character->movesets["close-hp"]->attack  = 18;
$character->movesets["far-lp"]->attack    = 3;
$character->movesets["far-mp"]->attack    = 15;
$character->movesets["far-hp"]->attack    = 18;
$character->movesets["crouch-lp"]->attack = 3;
$character->movesets["crouch-mp"]->attack = 15;
$character->movesets["crouch-hp"]->attack = 18;
$character->movesets["up-lp"]->attack     = 10;
$character->movesets["up-mp"]->attack     = 14;
$character->movesets["up-hp"]->attack     = 17;
$character->movesets["jump-lp"]->attack   = 10;
$character->movesets["jump-mp"]->attack   = 14;
$character->movesets["jump-hp"]->attack   = 17;
$character->movesets["close-lk"]->attack  = 3;
$character->movesets["close-mk"]->attack  = 16;
$character->movesets["close-hk"]->attack  = 19;
$character->movesets["far-lk"]->attack    = 3;
$character->movesets["far-mk"]->attack    = 15;
$character->movesets["far-hk"]->attack    = 19;
$character->movesets["crouch-lk"]->attack = 3;
$character->movesets["crouch-mk"]->attack = 15;
$character->movesets["crouch-hk"]->attack = 19;
$character->movesets["up-lk"]->attack     = 10;
$character->movesets["up-mk"]->attack     = 14;
$character->movesets["up-hk"]->attack     = 17;
$character->movesets["jump-lk"]->attack   = 10;
$character->movesets["jump-mk"]->attack   = 14;
$character->movesets["jump-hk"]->attack   = 17;

$character->movesets["throw-1"]->attack  = '20 + 3*n';
$character->movesets["throw-1"]->input  = array(LEFT . "/" . RIGHT . " + " . MP . "/" . HP);
$character->movesets["crouch-lk"]->block = STANDING | CROUCHING;
htmlHeader($character);
$character->toHTML();
htmlFooter();
?>
