#!/bin/bash

rename 's/st/stand_/' *
rename 's/cl/close_/' *
rename 's/far/far_/' *
rename 's/cr/crouch_/' *
rename 's/strng/strong/' *
rename 's/frc/fierce/' *
rename 's/frwrd/forward/' *
rename 's/rh/roundhouse/' *
rename 's/shrt/short/' *
rename 's/fb/fireball/' *
rename 's/srk/shoryuken/' *
rename 's/bj/back_jump_/' *
rename 's/fj/forward_jump_/' *
rename 's/bf/back_forward_/' *
rename 's/nj/neutral_jump_/' *
rename 's/dj/diagonal_jump_/' *

./build_attacks.sh
./build_index.sh

