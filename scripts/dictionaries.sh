#!/bin/bash

declare -A dic_en
declare -A dic_alt
declare -A dic_fr
declare -A dic_alt
declare -A dic_jp

# ENGLISH
dic_en[forward]="forward"
dic_en[roundhouse]="roundhouse"
dic_en[far_standing_jab]="far standing jab"
dic_en[close_standing_jab]="close standing jab"
dic_en[crouching_jab]="crouching jab"
dic_en[far_standing_strong]="far standing strong"
dic_en[close_standing_strong]="close standing strong"
dic_en[crouching_strong]="crouching strong"
dic_en[far_standing_fierce]="far standing fierce"
dic_en[close_standing_fierce]="close standing fierce"
dic_en[crouching_fierce]="crouching fierce"
dic_en[far_standing_short]="far standing short"
dic_en[close_standing_short]="close standing short"
dic_en[crouching_short]="crouching short"
dic_en[far_standing_forward]="far standing forward"
dic_en[close_standing_forward]="close standing forward"
dic_en[crouching_forward]="crouching forward"
dic_en[far_standing_roundhouse]="far standing roundhouse"
dic_en[close_standing_roundhouse]="close standing roundhouse"
dic_en[crouching_roundhouse]="crouching roundhouse"
dic_en[diagonal_jump_jab]="diagonal jump jab"
dic_en[neutral_jump_jab]="neutral jump jab"
dic_en[diagonal_jump_strong]="diagonal jump strong"
dic_en[neutral_jump_strong]="neutral jump strong"
dic_en[diagonal_jump_fierce]="diagonal jump fierce"
dic_en[neutral_jump_fierce]="neutral jump fierce"
dic_en[diagonal_jump_short]="diagonal jump short"
dic_en[neutral_jump_forward]="neutral jump forward"
dic_en[neutral_jump_short]="neutral jump short"
dic_en[diagonal_jump_forward]="diagonal jump forward"
dic_en[diagonal_jump_roundhouse]="diagonal jump roundhouse"
dic_en[neutral_jump_roundhouse]="neutral jump roundhouse"
dic_en[buffalo_headbutt_jab]="buffalo headbutt jab"
dic_en[buffalo_headbutt]="buffalo headbutt"
dic_en[buffalo_headbutt_strong]="buffalo headbutt strong"
dic_en[buffalo_headbutt_fierce]="buffalo headbutt fierce"
dic_en[straight_rush_jab_fierce]="straight rush jab fierce"
dic_en[straight_rush_strong]="straight rush strong"
dic_en[low_rush]="low rush"
dic_en[upper_rush]="upper rush"
dic_en[knockdown_rush]="knockdown rush"
dic_en[turn_around_punch]="turn around punch"
dic_en[super_first_hit_punch]="super first hit punch"
dic_en[super_punch]="super punch"
dic_en[super_first_hit_kick]="super first hit kick"
dic_en[super_kick]="super kick"
dic_en[super_last_hit]="super last hit"
dic_en[back_jump]="back jump"
dic_en[forward_jump]="forward jump"
dic_en[neutral_jump]="neutral jump"
dic_en[throw]="throw"
dic_en[headbutt]="headbutt"
dic_en[standing_fierce]="standing fierce"
dic_en[slide]="slide"
dic_en[standing_close_forward]="standing close forward"
dic_en[standing_roundhouse]="standing roundhouse"
dic_en[electric_thunder]="electric thunder"
dic_en[electric_thunder_fierce]="electruc thunder fierce"
dic_en[horizontal_roll]="horizontal roll"
dic_en[vertical_roll]="vertical roll"
dic_en[vertical_roll_knockback]="vertical roll knockback"
dic_en[backstep_roll]="backstep roll"
dic_en[hop_forward]="hop forward"
dic_en[hop_back]="hop backward"
dic_en[super]="super"
dic_en[spin_knuckle]="spin knuckle"
dic_en[spin_knuckle_jab]="spin_knuckle jab"
dic_en[spin_knuckle_strong_fierce]="spin knuckle strong fierce"
dic_en[hooligan_startup]="hooligan startup"
dic_en[hooligan_slide]="hooligan slide"
dic_en[hooligan_throw]="hooligan throw"
dic_en[hooligan_cancel]="hooligan cancel"
dic_en[cannon_spike]="cannon spike"
dic_en[spiral_arrow_short]="spiral arrow short"
dic_en[spiral_arrow_forward]="spiral arrow forward"
dic_en[spiral_arrow_roundhouse]="spiral arrow roundhouse"
dic_en[throws]="throws"
dic_en[punch_air_throw]="punch air throw"
dic_en[kairthrow]="kick air throw"
dic_en[kick_air_throw]="kick air throw"
dic_en[flip_kick]="flip kick"
dic_en[neck_breaker]="neck breaker"
dic_en[wall_jump]="wall jump"
dic_en[head_stomp]="head stomp"
dic_en[kikouken]="kikouken"
dic_en[hyakuretsu_kyaku]="hyakuretsu kyaku"
dic_en[spinning_bird_kick]="spinning bird kick"
dic_en[tenshou_kyaku_short]="tenshou kyaku short"
dic_en[tenshou_kyaku_forward]="tenshou kyaku forward"
dic_en[tenshou_kyaku_roundhouse]="tenshou kyaku roundhouse"
dic_en[aerial_spinning_bird_kick]="aerial spinning bird kick"
dic_en[air_throw]="air throw"
dic_en[knee_shot]="knee shot"
dic_en[air_slasher]="air slasher"
dic_en[air_slasher_strong]="air slasher strong"
dic_en[air_slasher_jab_strong]="air slasher jab strong"
dic_en[air_slasher_fierce]="air slasher fierce"
dic_en[machine_gun_upper]="machine gun upper"
dic_en[machine_gun_upper_mash]="machine gun upper mash"
dic_en[rolling_sobat]="rolling sobat"
dic_en[rolling_sobat_short]="rolling sobat short"
dic_en[rolling_sobat_forward_roundhouse]="rolling sobat forward roundhouse"
dic_en[jackknife_short]="jackknife short"
dic_en[jackknife_forward]="jackknife forward"
dic_en[jackknife_roundhouse]="jackknife roundhouse"
dic_en[close_crouching_jab]="close crouching jab"
dic_en[far_crouching_jab]="far crouching jab"
dic_en[close_crouching_strong]="close crouching strong"
dic_en[far_crouching_strong]="far crouching strong"
dic_en[close_crouching_fierce]="close crouching fierce"
dic_en[far_crouching_fierce]="far crouching fierce"
dic_en[close_crouching_short]="close crouching short"
dic_en[far_crouching_short]="far crouching short"
dic_en[close_crouching_forward]="close crouching forward"
dic_en[far_crouching_forward]="far crouching forward"
dic_en[close_crouching_roundhouse]="close crouching roundhouse"
dic_en[far_crouching_roundhouse]="far crouching roundhouse"
dic_en[mummy_drill]="mummy drill"
dic_en[drill_short]="drill short"
dic_en[drill_forward]="drill forward"
dic_en[drill_roundhouse]="drill roundhouse"
dic_en[yoga_fire]="yoga fire"
dic_en[yoga_flame]="yoga flame"
dic_en[yoga_blast]="yoga blast"
dic_en[yoga_teleport]="yoga teleport"
dic_en[double_knee_attack]="double knee attack"
dic_en[sweep]="sweep"
dic_en[flying_sumo_press]="flying sumo press"
dic_en[headbutt_jab]="headbutt jab"
dic_en[headbutt_strong]="headbutt strong"
dic_en[headbutt_fierce]="headbutt fierce"
dic_en[hundred_hands_slap]="hundred hands slap"
dic_en[sumo_splash_short_forward]="sumo splash short forward"
dic_en[sumo_splash_roundhouse]="sumo splash roundhouse"
dic_en[oicho]="oicho"
dic_en[hop_kick]="hop kick"
dic_en[double_kick]="double kick"
dic_en[rekka_ken]="rekka ken"
dic_en[rekku_kyaku]="rekku kyaku"
dic_en[shien_kyaku]="shien kyaku"
dic_en[airthrow]="airthrow"
dic_en[walk_backward]="walk backward"
dic_en[walk_forward]="walk forward"
dic_en[spinning_back_knuckle]="spinning back knuckle"
dic_en[standing_short]="standing short"
dic_en[knee_bazooka]="knee bazooka"
dic_en[reverse_spin_kick]="reverse spin kick"
dic_en[sonicboom]="sonicboom"
dic_en[flashkick_short]="flashkick short"
dic_en[flashkick_forward_roundhouse]="flashkick forward roundhouse"
dic_en[flashkick_strong_fierce]="flashkick forward fierce"
dic_en[flashkick_jab]="flashkick short"
dic_en[flashkick_strong_fierce]="flashkick forward fierce"
dic_en[air_throw_kick]="air throw kick"
dic_en[air_throw_punch]="air throw punch"
dic_en[hadoken]="hadoken"
dic_en[shoryuken]="shoryuken"
dic_en[shoryuken_jab]="shoryuken jab"
dic_en[shoryuken_strong]="shoryuken strong"
dic_en[shoryuken_fierce]="shoryuken fierce"
dic_en[inside_crescent]="inside crescent"
dic_en[inside_crescent_hold]="inside crescent hold"
dic_en[outside_crescent]="outside crescent"
dic_en[outside_crescent_hold]="outside crescent hold"
dic_en[knockdown_kick]="knockdown kick"
dic_en[knockdown_kick_hold]="knockdown kick hold"
dic_en[air_tatsumaki]="air tatsumaki"
dic_en[standing_jab]="standing jab"
dic_en[psycho_crusher]="psycho crusher"
dic_en[knee_press]="knee press"
dic_en[head_stomp_short]="head stomp short"
dic_en[head_stomp_bounce]="head stomp bounce"
dic_en[skull_diver_jab]="skull diver jab"
dic_en[skull_diver_strong]="skull diver strong"
dic_en[skull_diver_fierce]="skull diver fierce"
dic_en[devil_reverse]="devil reverse"
dic_en[devil_reverse_attack]="devil reverse attack"
dic_en[back_jump_]="back jump "
dic_en[neutral_jump_]="neutral jump "
dic_en[swing]="swing"
dic_en[solar_plexus]="solar plexus"
dic_en[hadoken_jab]="hadoken jab"
dic_en[hadoken_strong]="hadoken strong"
dic_en[hadoken_fierce]="hadoken fierce"
dic_en[shoryuken_strong_fierce]="shoryuken strong fierce"
dic_en[tatsumaki]="tatsumaki"
dic_en[tiger_shot_jab]="tiger shot jab"
dic_en[tiger_shot_strong]="tiger shot strong"
dic_en[tiger_shot_fierce]="tiger shot fierce"
dic_en[low_tiger_shot_short]="low tiger shot short"
dic_en[low_tiger_shot_forward]="low tiger shot forward"
dic_en[low_tiger_shot_roundhouse]="low tiger shot roundhouse"
dic_en[tiger_uppercut]="tiger uppercut"
dic_en[tiger_knee]="tiger knee"
dic_en[downward_jab]="downward jab"
dic_en[elbow_drop]="elbow drop"
dic_en[body_slam]="body slam"
dic_en[typhoon]="typhoon"
dic_en[rising_hawk]="rising hawk"
dic_en[rising_hawk_jab]="rising hawk jab"
dic_en[rising_hawk_strong_fierce]="rising hawk strong fierce"
dic_en[condor_dive]="condor dive"
dic_en[standing_jab_clawless]="standing jab clawless"
dic_en[crouching_jab_clawless]="crouching jab clawless"
dic_en[far_standing_strong_clawless]="far standing strong clawless"
dic_en[close_standing_strong_clawless]="close standing strong clawless"
dic_en[crouching_strong_clawless]="crouching strong clawless"
dic_en[far_standing_fierce_clawless]="far standing fierce clawless"
dic_en[close_standing_fierce_clawless]="close standing fierce clawless"
dic_en[crouching_fierce_clawless]="crouching fierce clawless"
dic_en[punch_back_flip]="punch back flip"
dic_en[kick_back_flip]="kick back flip"
dic_en[rolling_crystal]="rolling crystal"
dic_en[rolling_crystal_jab]="rolling crystal jab"
dic_en[rolling_crystal_strong]="rolling crystal strong"
dic_en[rolling_crystal_fierce]="rolling crystal fierce"
dic_en[rolling_crystal_clawless]="rolling crystal clawless"
dic_en[scarlet_terror]="scarlet terror"
dic_en[scarlet_terror_forward_and_clawless]="scarlet terror forward and clawless"
dic_en[flying_barcelona]="flying barcelona"
dic_en[flying_barcelona_clawless]="flying barcelona clawless"
dic_en[izuna_drop]="izuna drop"
dic_en[sky_high_claw]="sky high claw"
dic_en[such]="such"
dic_en[hop]="hop"
dic_en[double_knee_drop_short]="double knee drop short"
dic_en[double_knee_drop_forward]="double knee drop forward"
dic_en[chest_splash]="chest splash"
dic_en[spinning_piledriver]="spinning pile driver"
dic_en[atomic_suplex_short]="atomic suplex short"
dic_en[atomic_suplex_forward]="atomic suplex forward"
dic_en[atomic_suplex_roundhouse]="atomic suplex roundhouse"
dic_en[running_bear_grab]="running bear grab"
dic_en[double_lariat]="double lariat"
dic_en[quick_double_lariat]="quick double lariat"
dic_en[green_hand]="green hand"
dic_en[standing_throws]="standing throws"
dic_en[crouching_throw]="crouching throw"

# FRENCH
dic_fr[forward]="MK"
dic_fr[roundhouse]="HK"
dic_fr[far_standing_jab]="far LP"
dic_fr[close_standing_jab]="close LP"
dic_fr[crouching_jab]="bas LP"
dic_fr[far_standing_strong]="far MP"
dic_fr[close_standing_strong]="close MP"
dic_fr[crouching_strong]="bas MP"
dic_fr[far_standing_fierce]="far HP"
dic_fr[close_standing_fierce]="close HP"
dic_fr[crouching_fierce]="bas gros poing"
dic_fr[far_standing_short]="far LK"
dic_fr[close_standing_short]="close LK"
dic_fr[crouching_short]="bas LK"
dic_fr[far_standing_forward]="far MK"
dic_fr[close_standing_forward]="close MK"
dic_fr[crouching_forward]="bas MK"
dic_fr[far_standing_roundhouse]="far HK"
dic_fr[close_standing_roundhouse]="close HK"
dic_fr[crouching_roundhouse]="crouch HK"
dic_fr[diagonal_jump_jab]="saut avant LP"
dic_fr[neutral_jump_jab]="saut neutre LP"
dic_fr[diagonal_jump_strong]="saut avant MP"
dic_fr[neutral_jump_strong]="saut neutre MP"
dic_fr[diagonal_jump_fierce]="saut avant HP"
dic_fr[neutral_jump_fierce]="saut neutre HP"
dic_fr[diagonal_jump_short]="saut avant LK"
dic_fr[neutral_jump_forward]="saut neutre MK"
dic_fr[neutral_jump_short]="saut neutre LK"
dic_fr[diagonal_jump_forward]="saut avant MK"
dic_fr[diagonal_jump_roundhouse]="saut avant HK"
dic_fr[neutral_jump_roundhouse]="saut neutre HK"
dic_fr[buffalo_headbutt]="buffalo headbutt"
dic_fr[buffalo_headbutt_jab]="buffalo headbutt LP"
dic_fr[buffalo_headbutt_strong]="buffalo headbutt MP"
dic_fr[buffalo_headbutt_fierce]="buffalo headbutt HP"
dic_fr[straight_rush_jab_fierce]="dash avant LP HP"
dic_fr[straight_rush_strong]="dash upper strong"
dic_fr[low_rush]="dash low"
dic_fr[upper_rush]="dash upper"
dic_fr[knockdown_rush]="dash upper pied"
dic_fr[turn_around_punch]="turn around punch"
dic_fr[super_first_hit_punch]="super premier hit poing"
dic_fr[super_punch]="super poing"
dic_fr[super_first_hit_kick]="super premier hit pied"
dic_fr[super_kick]="super pied"
dic_fr[super_last_hit]="super dernier hit"
dic_fr[back_jump]="saut arrière"
dic_fr[forward_jump]="saut avant"
dic_fr[neutral_jump]="saut neutre"
dic_fr[throw]="choppe"
dic_fr[headbutt]="coup de boule"
dic_fr[standing_fierce]="HP"
dic_fr[slide]="glissade"
dic_fr[standing_close_forward]="close MK"
dic_fr[standing_roundhouse]="close HK"
dic_fr[electric_thunder]="électricité"
dic_fr[electric_thunder_fierce]="électricité HP"
dic_fr[horizontal_roll]="roulade horizontale"
dic_fr[vertical_roll]="roulade verticale"
dic_fr[vertical_roll_knockback]="recover de la roulade"
dic_fr[backstep_roll]="roulade pied"
dic_fr[hop_forward]="dash avant"
dic_fr[hop_back]="dash arrière"
dic_fr[super]="super"
dic_fr[spin_knuckle]="spin knuckle"
dic_fr[spin_knuckle_jab]="spin knuckle LP"
dic_fr[spin_knuckle_strong_fierce]="spin knuckle MP HP"
dic_fr[hooligan_startup]="hooligan startup"
dic_fr[hooligan_slide]="hooligan slide"
dic_fr[hooligan_throw]="hooligan chope"
dic_fr[hooligan_cancel]="hooligan cancel"
dic_fr[cannon_spike]="cannon spike"
dic_fr[spiral_arrow_short]="spiral arrow LK"
dic_fr[spiral_arrow_forward]="spiral arrow MK"
dic_fr[spiral_arrow_roundhouse]="spiral arrow HK"
dic_fr[throws]="chopes"
dic_fr[punch_air_throw]="chope aérienne poing"
dic_fr[kairthrow]="chope aérienne pied"
dic_fr[kick_air_throw]="chope aérienne pied"
dic_fr[such]="such"
dic_fr[flip_kick]="flip kick"
dic_fr[neck_breaker]="neck breaker"
dic_fr[wall_jump]="saut mural"
dic_fr[head_stomp]="head_stomp"
dic_fr[kikouken]="kikouken"
dic_fr[hyakuretsu_kyaku]="milles pieds"
dic_fr[spinning_bird_kick]="spinning bird kick"
dic_fr[tenshou_kyaku_short]="tenshou kyaku LK"
dic_fr[tenshou_kyaku_forward]="tenshou kyaku MK"
dic_fr[tenshou_kyaku_roundhouse]="tenshou kyaku HK"
dic_fr[aerial_spinning_bird_kick]="spinning bird kick aérien"
dic_fr[air_throw]="chope aérienne"
dic_fr[knee_shot]="knee shot"
dic_fr[air_slasher]="air slasher"
dic_fr[air_slasher_strong]="air slasher LP MP"
dic_fr[air_slasher_jab_strong]="air slasher LP MP"
dic_fr[air_slasher_fierce]="air slasher HP"
dic_fr[machine_gun_upper]="machine gun upper"
dic_fr[machine_gun_upper_mash]="machine gun upper martelé"
dic_fr[rolling_sobat]="rolling sobat"
dic_fr[rolling_sobat_short]="rolling sobat LK"
dic_fr[rolling_sobat_forward_roundhouse]="rolling sobat forward HK"
dic_fr[jackknife_short]="jackknife LK"
dic_fr[jackknife_forward]="jackknife MK"
dic_fr[jackknife_roundhouse]="jackknife HK"
dic_fr[close_crouching_jab]="close bas jab"
dic_fr[far_crouching_jab]="far bas jab"
dic_fr[close_crouching_strong]="close bas MP"
dic_fr[far_crouching_strong]="far bas MP"
dic_fr[close_crouching_fierce]="close bas HP"
dic_fr[far_crouching_fierce]="far bas HP"
dic_fr[close_crouching_short]="close bas LK"
dic_fr[far_crouching_short]="far bas LK"
dic_fr[close_crouching_forward]="close bas MK"
dic_fr[far_crouching_forward]="far bas MK"
dic_fr[close_crouching_roundhouse]="close bas HK"
dic_fr[far_crouching_roundhouse]="far bas HK"
dic_fr[mummy_drill]="mummy drill"
dic_fr[drill_short]="drill LK"
dic_fr[drill_forward]="drill MK"
dic_fr[drill_roundhouse]="drill HK"
dic_fr[yoga_fire]="yoga fire"
dic_fr[yoga_flame]="yoga flame"
dic_fr[yoga_blast]="yoga blast"
dic_fr[yoga_teleport]="yoga teleport"
dic_fr[double_knee_attack]="double knee attack"
dic_fr[sweep]="baleyette"
dic_fr[flying_sumo_press]="flying sumo press"
dic_fr[headbutt_jab]="headbutt LP"
dic_fr[headbutt_strong]="headbutt MP"
dic_fr[headbutt_fierce]="headbutt HP"
dic_fr[hundred_hands_slap]="milles mains"
dic_fr[sumo_splash_short_forward]="sumo splash LK MK"
dic_fr[sumo_splash_roundhouse]="sumo splash HK"
dic_fr[oicho]="oicho"
dic_fr[hop_kick]="hop kick"
dic_fr[double_kick]="double kick"
dic_fr[rekka_ken]="rekka ken"
dic_fr[rekku_kyaku]="rekku kyaku"
dic_fr[shien_kyaku]="shien kyaku"
dic_fr[airthrow]="chope aérienne"
dic_fr[walk_backward]="marche arrière"
dic_fr[walk_forward]="marche avant"
dic_fr[spinning_back_knuckle]="spinning back knuckle"
dic_fr[standing_short]="standing LK"
dic_fr[knee_bazooka]="knee bazooka"
dic_fr[reverse_spin_kick]="reverse spin kick"
dic_fr[sonicboom]="sonicboom"
dic_fr[flashkick_short]="flashkick LK"
dic_fr[flashkick_forward_roundhouse]="flashkick MK HK"
dic_fr[flashkick_jab]="flashkick LK"
dic_fr[flashkick_strong_fierce]="flashkick MK HK"
dic_fr[air_throw_kick]="air throw kick"
dic_fr[air_throw_punch]="air throw punch"
dic_fr[hadoken]="hadoken"
dic_fr[shoryuken]="shoryuken"
dic_fr[shoryuken_jab]="shoryuken LP"
dic_fr[shoryuken_strong]="shoryuken MP"
dic_fr[shoryuken_fierce]="shoryuken HP"
dic_fr[tatsumaki]="tatsumaki"
dic_fr[inside_crescent]="inside crescent"
dic_fr[inside_crescent_hold]="inside crescent maintenue"
dic_fr[outside_crescent]="outside crescent"
dic_fr[outside_crescent_hold]="outside crescent maintenue"
dic_fr[knockdown_kick]="knockdown kick"
dic_fr[knockdown_kick_hold]="knockdown kick maintenue"
dic_fr[air_tatsumaki]="tatsumaki aérien"
dic_fr[standing_jab]="standing LP"
dic_fr[psycho_crusher]="psychocrusher"
dic_fr[knee_press]="knee press"
dic_fr[head_stomp_short]="head stomp LK"
dic_fr[head_stomp_bounce]="head stomp rebond"
dic_fr[skull_diver_jab]="skull diver LP"
dic_fr[skull_diver_strong]="skull diver MP"
dic_fr[skull_diver_fierce]="skull diver HP"
dic_fr[devil_reverse]="devil reverse"
dic_fr[devil_reverse_attack]="devil reverse attack"
dic_fr[back_jump_]="saut arrière"
dic_fr[neutral_jump_]="saut neutre"
dic_fr[swing]="cass guarde"
dic_fr[solar_plexus]="solar plexus"
dic_fr[hadoken_jab]="hadoken LP"
dic_fr[hadoken_strong]="hadoken MP"
dic_fr[hadoken_fierce]="hadoken HP"
dic_fr[shoryuken_strong_fierce]="shoryuken MP HP"
dic_fr[tiger_shot_jab]="tiger shot LP"
dic_fr[tiger_shot_strong]="tiger shot MP"
dic_fr[tiger_shot_fierce]="tiger shot HP"
dic_fr[low_tiger_shot_short]="low tiger shot LK"
dic_fr[low_tiger_shot_forward]="low_tiger shot MK"
dic_fr[low_tiger_shot_roundhouse]="low tiger shot HK"
dic_fr[tiger_uppercut]="tiger uppercut"
dic_fr[tiger_knee]="tiger knee"
dic_fr[downward_jab]="avant LP"
dic_fr[elbow_drop]="elbow drop"
dic_fr[body_slam]="body slam"
dic_fr[typhoon]="typhoon"
dic_fr[rising_hawk]="rising hawk"
dic_fr[rising_hawk_jab]="rising hawk LP"
dic_fr[rising_hawk_strong_fierce]="rising hawk MP HP"
dic_fr[condor_dive]="condor dive"
dic_fr[standing_jab_clawless]="standing LP sans griffe"
dic_fr[crouching_jab_clawless]="bas LP sans griffe"
dic_fr[far_standing_strong_clawless]="far standing MP sans griffe"
dic_fr[close_standing_strong_clawless]="close standing MP sans griffe"
dic_fr[crouching_strong_clawless]="bas MP sans griffe"
dic_fr[far_standing_fierce_clawless]="far standing HP sans griffe"
dic_fr[close_standing_fierce_clawless]="close standing HP sans griffe"
dic_fr[crouching_fierce_clawless]="bas HP sans griffe"
dic_fr[punch_back_flip]="back flip poing"
dic_fr[kick_back_flip]="back flip pied"
dic_fr[rolling_crystal]="rolling crystal"
dic_fr[rolling_crystal_jab]="rolling crystal LP"
dic_fr[rolling_crystal_strong]="rolling crystal MP"
dic_fr[rolling_crystal_fierce]="rolling crystal HP"
dic_fr[rolling_crystal_clawless]="rolling crystal sans griffe"
dic_fr[scarlet_terror]="scarlet terror"
dic_fr[scarlet_terror_forward_and_clawless]="scarlet terror MK et sans griffe"
dic_fr[flying_barcelona]="flying barcelona"
dic_fr[flying_barcelona_clawless]="flying barcelona sans griffe"
dic_fr[izuna_drop]="izuna drop"
dic_fr[sky_high_claw]="superman punch"
dic_fr[hop]="hop"
dic_fr[double_knee_drop_short]="double knee drop LK"
dic_fr[double_knee_drop_forward]="double knee drop MK"
dic_fr[chest_splash]="chest splash"
dic_fr[spinning_piledriver]="spinning pile driver"
dic_fr[atomic_suplex_short]="atomic suplex LK"
dic_fr[atomic_suplex_forward]="atomic suplex MK"
dic_fr[atomic_suplex_roundhouse]="atomic suplex HK"
dic_fr[running_bear_grab]="Chope de l'ours"
dic_fr[double_lariat]="double lariat poing"
dic_fr[quick_double_lariat]="double lariat pied"
dic_fr[green_hand]="main verte"
dic_fr[standing_throws]="chope debout"
dic_fr[crouching_throw]="chope accroupie"

# SPANISH

dic_alt[forward]="MK"
dic_alt[roundhouse]="HK"
dic_alt[far_standing_jab]="far standing LP"
dic_alt[close_standing_jab]="close standing LP"
dic_alt[crouching_jab]="crouching LP"
dic_alt[far_standing_strong]="far standing MP"
dic_alt[close_standing_strong]="close standing mp"
dic_alt[crouching_strong]="crouching MP"
dic_alt[far_standing_fierce]="far standing HP"
dic_alt[close_standing_fierce]="close standing HP"
dic_alt[crouching_fierce]="crouching HP"
dic_alt[far_standing_short]="far standing LK"
dic_alt[close_standing_short]="close standing LK"
dic_alt[crouching_short]="crouching LK"
dic_alt[far_standing_forward]="far standing MK"
dic_alt[close_standing_forward]="close standing MK"
dic_alt[crouching_forward]="crouching MK"
dic_alt[far_standing_roundhouse]="far standing HK"
dic_alt[close_standing_roundhouse]="close standing HK"
dic_alt[crouching_roundhouse]="crouching HK"
dic_alt[diagonal_jump_jab]="diagonal jump LP"
dic_alt[neutral_jump_jab]="neutral jump LP"
dic_alt[diagonal_jump_strong]="diagonal jump MP"
dic_alt[neutral_jump_strong]="neutral jump MP"
dic_alt[diagonal_jump_fierce]="diagonal jump HP"
dic_alt[neutral_jump_fierce]="neutral jump HP"
dic_alt[diagonal_jump_short]="diagonal jump LK"
dic_alt[neutral_jump_forward]="neutral jump MK"
dic_alt[neutral_jump_short]="neutral jump LK"
dic_alt[diagonal_jump_forward]="diagonal jump MK"
dic_alt[diagonal_jump_roundhouse]="diagonal jump HK"
dic_alt[neutral_jump_roundhouse]="neutral jump HK"
dic_alt[buffalo_headbutt]="buffalo headbutt"
dic_alt[buffalo_headbutt_jab]="buffalo headbutt LP"
dic_alt[buffalo_headbutt_strong]="buffalo headbutt MP"
dic_alt[buffalo_headbutt_fierce]="buffalo headbutt HP"
dic_alt[straight_rush_jab_fierce]="straight rush jab HP"
dic_alt[straight_rush_strong]="straight rush MP"
dic_alt[low_rush]="low rush"
dic_alt[upper_rush]="upper rush"
dic_alt[knockdown_rush]="knockdown rush"
dic_alt[turn_around_punch]="turn around punch"
dic_alt[super_first_hit_punch]="super first hit punch"
dic_alt[super_punch]="super punch"
dic_alt[super_first_hit_kick]="super first hit kick"
dic_alt[super_kick]="super kick"
dic_alt[super_last_hit]="super last hit"
dic_alt[back_jump]="back jump"
dic_alt[forward_jump]="forward jump"
dic_alt[neutral_jump]="neutral jump"
dic_alt[throw]="throw"
dic_alt[headbutt]="headbutt"
dic_alt[standing_fierce]="standing HP"
dic_alt[slide]="slide"
dic_alt[standing_close_forward]="standing close MK"
dic_alt[standing_roundhouse]="standing HK"
dic_alt[electric_thunder]="electric thunder"
dic_alt[electric_thunder_fierce]="electruc thunder  HP"
dic_alt[horizontal_roll]="horizontal roll"
dic_alt[vertical_roll]="vertical roll"
dic_alt[vertical_roll_knockback]="vertical roll knockback"
dic_alt[backstep_roll]="backstep roll"
dic_alt[hop_forward]="hop forward"
dic_alt[hop_back]="hop backward"
dic_alt[super]="super"
dic_alt[spin_knuckle]="spin knuckle"
dic_alt[spin_knuckle_jab]="spin knuckle LP"
dic_alt[spin_knuckle_strong_fierce]="spin knuckle MP HP"
dic_alt[hooligan_startup]="hooligan startup"
dic_alt[hooligan_slide]="hooligan slide"
dic_alt[hooligan_throw]="hooligan throw"
dic_alt[hooligan_cancel]="hooligan cancel"
dic_alt[cannon_spike]="cannon spike"
dic_alt[spiral_arrow_short]="spiral arrow LK"
dic_alt[spiral_arrow_forward]="spiral arrow MK"
dic_alt[spiral_arrow_roundhouse]="spiral arrow HK"
dic_alt[throws]="throws"
dic_alt[punch_air_throw]="punch air throw"
dic_alt[kairthrow]="kick air throw"
dic_alt[kick_air_throw]="kick air throw"
dic_alt[such]="such"
dic_alt[flip_kick]="flip kick"
dic_alt[neck_breaker]="neck breaker"
dic_alt[wall_jump]="wall jump"
dic_alt[head_stomp]="head stomp"
dic_alt[kikouken]="kikouken"
dic_alt[hyakuretsu_kyaku]="hyakuretsu kyaku"
dic_alt[spinning_bird_kick]="spinning bird kick"
dic_alt[tenshou_kyaku_short]="tenshou kyaku LK"
dic_alt[tenshou_kyaku_forward]="tenshou kyaku MK"
dic_alt[tenshou_kyaku_roundhouse]="tenshou kyaku HK"
dic_alt[aerial_spinning_bird_kick]="aerial spinning bird kick"
dic_alt[air_throw]="air throw"
dic_alt[knee_shot]="knee shot"
dic_alt[air_slasher]="air slasher"
dic_alt[air_slasher_strong]="air slasher MP"
dic_alt[air_slasher_jab_strong]="air slasher LP MP"
dic_alt[air_slasher_fierce]="air slasher HP"
dic_alt[machine_gun_upper]="machine gun upper"
dic_alt[machine_gun_upper_mash]="machine gun upper mash"
dic_alt[rolling_sobat]="rolling sobat"
dic_alt[rolling_sobat_short]="rolling sobat LK"
dic_alt[rolling_sobat_forward_roundhouse]="rolling sobat MK HK"
dic_alt[jackknife_short]="jackknife LK"
dic_alt[jackknife_forward]="jackknife MK"
dic_alt[jackknife_roundhouse]="jackknife HK"
dic_alt[close_crouching_jab]="close crouching LP"
dic_alt[far_crouching_jab]="far crouching LP"
dic_alt[close_crouching_strong]="close crouching MP"
dic_alt[far_crouching_strong]="far crouching MP"
dic_alt[close_crouching_fierce]="close crouching HP"
dic_alt[far_crouching_fierce]="far crouching HP"
dic_alt[close_crouching_short]="close crouching LK"
dic_alt[far_crouching_short]="far crouching LK"
dic_alt[close_crouching_forward]="close crouching MK"
dic_alt[far_crouching_forward]="far crouching MK"
dic_alt[close_crouching_roundhouse]="close crouching HK"
dic_alt[far_crouching_roundhouse]="far crouching HK"
dic_alt[mummy_drill]="mummy drill"
dic_alt[drill_short]="drill LK"
dic_alt[drill_forward]="drill MK"
dic_alt[drill_roundhouse]="drill HK"
dic_alt[yoga_fire]="yoga fire"
dic_alt[yoga_flame]="yoga flame"
dic_alt[yoga_blast]="yoga blast"
dic_alt[yoga_teleport]="yoga teleport"
dic_alt[double_knee_attack]="double knee_attack"
dic_alt[sweep]="sweep"
dic_alt[flying_sumo_press]="flying sumo press"
dic_alt[headbutt_jab]="headbutt LP"
dic_alt[headbutt_strong]="headbutt MP"
dic_alt[headbutt_fierce]="headbutt HP"
dic_alt[hundred_hands_slap]="hundred hands slap"
dic_alt[sumo_splash_short_forward]="sumo splash LK MK"
dic_alt[sumo_splash_roundhouse]="sumo splash HK"
dic_alt[oicho]="oicho"
dic_alt[hop_kick]="hop kick"
dic_alt[double_kick]="double kick"
dic_alt[rekka_ken]="rekka ken"
dic_alt[rekku_kyaku]="rekku kyaku"
dic_alt[shien_kyaku]="shien kyaku"
dic_alt[airthrow]="airthrow"
dic_alt[walk_backward]="walk backward"
dic_alt[walk_forward]="walk forward"
dic_alt[spinning_back_knuckle]="spinning back knuckle"
dic_alt[standing_short]="standing LK"
dic_alt[knee_bazooka]="knee bazooka"
dic_alt[reverse_spin_kick]="reverse spin kick"
dic_alt[sonicboom]="sonicboom"
dic_alt[flashkick_jab]="flashkick LK"
dic_alt[flashkick_short]="flashkick LK"
dic_alt[flashkick_forward_roundhouse]="flashkick MK HK"
dic_alt[flashkick_strong_fierce]="flashkick MK HK"
dic_alt[air_throw_kick]="air throw kick"
dic_alt[air_throw_punch]="air throw punch"
dic_alt[hadoken]="hadoken"
dic_alt[shoryuken]="shoryuken"
dic_alt[shoryuken_jab]="shoryuken LP"
dic_alt[shoryuken_strong]="shoryuken MP"
dic_alt[shoryuken_fierce]="shoryuken HP"
dic_alt[tatsumaki]="tatsumaki"
dic_alt[inside_crescent]="inside crescent"
dic_alt[inside_crescent_hold]="inside crescent hold"
dic_alt[outside_crescent]="outside crescent"
dic_alt[outside_crescent_hold]="outside crescent_hold"
dic_alt[knockdown_kick]="knockdown kick"
dic_alt[knockdown_kick_hold]="knockdown kick hold"
dic_alt[air_tatsumaki]="air tatsumaki"
dic_alt[standing_jab]="standing LP"
dic_alt[psycho_crusher]="psycho crusher"
dic_alt[knee_press]="knee press"
dic_alt[head_stomp_short]="head stomp LK"
dic_alt[head_stomp_bounce]="head stomp bounce"
dic_alt[skull_diver_jab]="skull diver LP"
dic_alt[skull_diver_strong]="skull diver MP"
dic_alt[skull_diver_fierce]="skull diver HP"
dic_alt[devil_reverse]="devil reverse"
dic_alt[devil_reverse_attack]="devil reverse attack"
dic_alt[back_jump_]="back jump"
dic_alt[neutral_jump_]="neutral jump"
dic_alt[swing]="swing"
dic_alt[solar_plexus]="solar plexus"
dic_alt[hadoken_jab]="hadoken LP"
dic_alt[hadoken_strong]="hadoken MP"
dic_alt[hadoken_fierce]="hadoken HP"
dic_alt[shoryuken_strong_fierce]="shoryuken MP HP"
dic_alt[tiger_shot_jab]="tiger shot LP"
dic_alt[tiger_shot_strong]="tiger shot MP"
dic_alt[tiger_shot_fierce]="tiger shot HP"
dic_alt[low_tiger_shot_short]="low tiger shot LK"
dic_alt[low_tiger_shot_forward]="low tiger shot MK"
dic_alt[low_tiger_shot_roundhouse]="low tiger shot HK"
dic_alt[tiger_uppercut]="tiger uppercut"
dic_alt[tiger_knee]="tiger knee"
dic_alt[downward_jab]="downward LP"
dic_alt[elbow_drop]="elbow drop"
dic_alt[body_slam]="body slam"
dic_alt[typhoon]="typhoon"
dic_alt[rising_hawk]="rising hawk"
dic_alt[rising_hawk_jab]="rising hawk LP"
dic_alt[rising_hawk_strong_fierce]="rising hawk MP HP"
dic_alt[condor_dive]="condor dive"
dic_alt[standing_jab_clawless]="standing LP clawless"
dic_alt[crouching_jab_clawless]="crouching LP clawless"
dic_alt[far_standing_strong_clawless]="far standing MP clawless"
dic_alt[close_standing_strong_clawless]="close standing MP clawless"
dic_alt[crouching_strong_clawless]="crouching MP clawless"
dic_alt[far_standing_fierce_clawless]="far standing HP clawless"
dic_alt[close_standing_fierce_clawless]="close standing HP clawless"
dic_alt[crouching_fierce_clawless]="crouching HP clawless"
dic_alt[punch_back_flip]="punch back flip"
dic_alt[kick_back_flip]="kick back flip"
dic_alt[rolling_crystal]="rolling crystal"
dic_alt[rolling_crystal_jab]="rolling crystal LP"
dic_alt[rolling_crystal_strong]="rolling crystal MP"
dic_alt[rolling_crystal_fierce]="rolling crystal HP"
dic_alt[rolling_crystal_clawless]="rolling crystal clawless"
dic_alt[scarlet_terror]="scarlet terror"
dic_alt[scarlet_terror_forward_and_clawless]="scarlet terror MK and clawless"
dic_alt[flying_barcelona]="flying barcelona"
dic_alt[flying_barcelona_clawless]="flying barcelona clawless"
dic_alt[izuna_drop]="izuna drop"
dic_alt[sky_high_claw]="sky high claw"
dic_alt[hop]="hop"
dic_alt[double_knee_drop_short]="double knee drop LK"
dic_alt[double_knee_drop_forward]="double knee drop MK"
dic_alt[chest_splash]="chest splash"
dic_alt[spinning_piledriver]="spinning pile driver"
dic_alt[atomic_suplex_short]="atomic suplex LK"
dic_alt[atomic_suplex_forward]="atomic suplex MK"
dic_alt[atomic_suplex_roundhouse]="atomic suplex HK"
dic_alt[running_bear_grab]="running bear grab"
dic_alt[double_lariat]="double lariat"
dic_alt[quick_double_lariat]="quick double lariat"
dic_alt[green_hand]="green hand"
dic_alt[standing_throws]="standing throws"
dic_alt[crouching_throw]="crouching throw"

# JAPANESE

dic_jp[forward]="中Ｋ"
dic_jp[roundhouse]="大Ｋ"
dic_jp[far_standing_jab]="遠立ち小Ｐ"
dic_jp[close_standing_jab]="近立ち小Ｐ"
dic_jp[crouching_jab]="下小Ｐ"
dic_jp[far_standing_strong]="遠立ち中Ｐ"
dic_jp[close_standing_strong]="近立ち中Ｐ"
dic_jp[crouching_strong]="下中Ｐ"
dic_jp[far_standing_fierce]="遠立ち大Ｐ"
dic_jp[close_standing_fierce]="遠立ち大Ｐ"
dic_jp[crouching_fierce]="下大Ｐ"
dic_jp[far_standing_short]="遠立ち小Ｋ"
dic_jp[close_standing_short]="近立ち小Ｋ"
dic_jp[crouching_short]="下小Ｋ"
dic_jp[far_standing_forward]="遠立ち中Ｋ"
dic_jp[close_standing_forward]="近立ち中Ｋ"
dic_jp[crouching_forward]="下中Ｋ"
dic_jp[far_standing_roundhouse]="遠立ち大Ｋ"
dic_jp[close_standing_roundhouse]="近立ち大Ｋ"
dic_jp[crouching_roundhouse]="下大Ｋ"
dic_jp[diagonal_jump_jab]="斜めＪ小Ｐ"
dic_jp[neutral_jump_jab]="垂直Ｊ小Ｐ"
dic_jp[diagonal_jump_strong]="斜めＪＰ"
dic_jp[neutral_jump_strong]="垂直ＪＰ"
dic_jp[diagonal_jump_fierce]="斜めＪ大Ｐ"
dic_jp[neutral_jump_fierce]="垂直Ｊ大Ｐ"
dic_jp[diagonal_jump_short]="斜めＪ小Ｋ"
dic_jp[neutral_jump_forward]="垂直ＪＰ"
dic_jp[neutral_jump_short]="垂直Ｊ小Ｋ"
dic_jp[diagonal_jump_forward]="斜めＪＫ"
dic_jp[diagonal_jump_roundhouse]="斜めＪ大Ｋ"
dic_jp[neutral_jump_roundhouse]="垂直Ｊ大Ｋ"
dic_jp[buffalo_headbutt]="バッファローヘッドバッド"
dic_jp[buffalo_headbutt_jab]="バッファローヘッドバッド　小Ｐ"
dic_jp[buffalo_headbutt_strong]="バッファローヘッドバッド　中Ｐ"
dic_jp[buffalo_headbutt_fierce]="バッファローヘッドバッド　大Ｐ"
dic_jp[straight_rush_jab_fierce]="ダッシュストレート　小大"
dic_jp[straight_rush_strong]="ダッシュストレート　中Ｐ"
dic_jp[low_rush]="ダッシュグランドストレート"
dic_jp[upper_rush]="ダッシュアッパー"
dic_jp[knockdown_rush]="ダッシュグランドアッパー"
dic_jp[turn_around_punch]="ターンパンチ"
dic_jp[super_first_hit_punch]="最小のクレイジーバッファローのヒットＰ"
dic_jp[super_punch]="クレイジーバッファローＰ"
dic_jp[super_first_hit_kick]="最小のクレイジーバッファローのヒットＫ"
dic_jp[super_kick]="クレイジーバッファローＫ"
dic_jp[super_last_hit]="最後のクレイジーバッファローのヒット"
dic_jp[back_jump]="後Ｊ"
dic_jp[forward_jump]="前Ｊ"
dic_jp[neutral_jump]="垂直Ｊ"
dic_jp[throw]="投げ技"
dic_jp[headbutt]="ヘッドバット"
dic_jp[standing_fierce]="立ち大Ｐ"
dic_jp[slide]="スライド "
dic_jp[standing_close_forward]="近立ち中Ｋ"
dic_jp[standing_roundhouse]="立ち大Ｋ"
dic_jp[electric_thunder]="電撃"
dic_jp[electric_thunder_fierce]="電撃　大Ｐ"
dic_jp[horizontal_roll]="ローリングアタック"
dic_jp[vertical_roll]="バーチカルローリング"
dic_jp[vertical_roll_knockback]="バーチカルローリング (当たって跳ね返ったとき)"
dic_jp[backstep_roll]="バックステップローリング"
dic_jp[hop_forward]="ステップフォワード"
dic_jp[hop_back]="ステップバック"
dic_jp[super]="スーパーコンボ"
dic_jp[spin_knuckle]="アクセルスピンナックル"
dic_jp[spin_knuckle_jab]="アクセルスピンナックル　小Ｐ"
dic_jp[spin_knuckle_strong_fierce]="アクセルスピンナックル　中大Ｐ"
dic_jp[hooligan_startup]="フリーガンコンビネーション"
dic_jp[hooligan_slide]="レイザーエッジスライサー"
dic_jp[hooligan_throw]="フリーガン投げ技"
dic_jp[hooligan_cancel]="フリーガンキャンセル"
dic_jp[cannon_spike]="キャノンスパイク"
dic_jp[spiral_arrow_short]="スパイラルアロー　小Ｋ"
dic_jp[spiral_arrow_forward]="スパイラルアロー　中Ｋ"
dic_jp[spiral_arrow_roundhouse]="スパイラルアロー　大Ｋ"
dic_jp[throws]="投げ技"
dic_jp[punch_air_throw]="空中投げ技Ｐ"
dic_jp[kairthrow]="空中投げ技Ｋ"
dic_jp[kick_air_throw]="空中投げ技Ｋ"
dic_jp[such]="such"
dic_jp[flip_kick]="後方回転脚"
dic_jp[neck_breaker]="鶴蹴落"
dic_jp[wall_jump]="壁キック"
dic_jp[head_stomp]="鷹爪脚"
dic_jp[kikouken]="気功拳"
dic_jp[hyakuretsu_kyaku]="百裂キック"
dic_jp[spinning_bird_kick]="スピニングバードキック"
dic_jp[tenshou_kyaku_short]="天昇脚　小Ｋ"
dic_jp[tenshou_kyaku_forward]="天昇脚　中Ｋ"
dic_jp[tenshou_kyaku_roundhouse]="天昇脚　大Ｋ"
dic_jp[aerial_spinning_bird_kick]="空中スピニングバードキック"
dic_jp[air_throw]="空中投げ技"
dic_jp[knee_shot]="ニーショット"
dic_jp[air_slasher]="エアスラッシュ"
dic_jp[air_slasher_strong]="エアスラッシュ　中Ｐ"
dic_jp[air_slasher_jab_strong]="エアスラッシュ　小中Ｐ"
dic_jp[air_slasher_fierce]="エアスラッシュ　大Ｐ"
dic_jp[machine_gun_upper]="マシンガンアッパー"
dic_jp[machine_gun_upper_mash]="マシンガンアッパー　Ｐ連打すれば"
dic_jp[rolling_sobat]="ダブルローリングソバット"
dic_jp[rolling_sobat_short]="ダブルローリングソバット　小Ｋ"
dic_jp[rolling_sobat_forward_roundhouse]="ダブルローリングソバット　中大Ｋ"
dic_jp[jackknife_short]="ジャクナイフマキシマム　小Ｋ"
dic_jp[jackknife_forward]="ジャクナイフマキシマム　中Ｋ"
dic_jp[jackknife_roundhouse]="ジャクナイフマキシマム　大Ｋ"
dic_jp[close_crouching_jab]="短下小Ｐ"
dic_jp[far_crouching_jab]="長下小Ｐ"
dic_jp[close_crouching_strong]="短下中Ｐ"
dic_jp[far_crouching_strong]="長下中Ｐ"
dic_jp[close_crouching_fierce]="短下大Ｐ"
dic_jp[far_crouching_fierce]="長下大Ｐ"
dic_jp[close_crouching_short]="短下小Ｋ"
dic_jp[far_crouching_short]="長下小Ｋ"
dic_jp[close_crouching_forward]="短下中Ｋ"
dic_jp[far_crouching_forward]="短下中Ｋ"
dic_jp[close_crouching_roundhouse]="短下大Ｋ"
dic_jp[far_crouching_roundhouse]="長下大Ｋ"
dic_jp[mummy_drill]="ドリル頭突き"
dic_jp[drill_short]="ドリルキック　小Ｋ"
dic_jp[drill_forward]="ドリルキック　中Ｋ"
dic_jp[drill_roundhouse]="ドリルキック　大Ｋ"
dic_jp[yoga_fire]="ヨガファイヤー"
dic_jp[yoga_flame]="ヨガフレイム"
dic_jp[yoga_blast]="ヨガブラスト"
dic_jp[yoga_teleport]="ヨガテレポート"
dic_jp[double_knee_attack]="ひざ蹴り"
dic_jp[sweep]="払い蹴り"
dic_jp[flying_sumo_press]="フライングスモウプレス"
dic_jp[headbutt_jab]="頭突き　小Ｐ"
dic_jp[headbutt_strong]="頭突き　中Ｐ"
dic_jp[headbutt_fierce]="頭突き　大Ｐ"
dic_jp[hundred_hands_slap]="百裂張り手"
dic_jp[sumo_splash_short_forward]="百貫落とし　小中Ｋ"
dic_jp[sumo_splash_roundhouse]="百貫落とし　大Ｋ"
dic_jp[oicho]="大銀杏投げ"
dic_jp[hop_kick]="かかと落とし"
dic_jp[double_kick]="遠撃蹴"
dic_jp[rekka_ken]="烈火拳"
dic_jp[rekku_kyaku]="烈空脚"
dic_jp[shien_kyaku]="熾炎脚"
dic_jp[airthrow]="空中投げ技"
dic_jp[walk_backward]="後ろへ歩き"
dic_jp[walk_forward]="前へ歩き"
dic_jp[spinning_back_knuckle]="裏拳"
dic_jp[standing_short]="近立ち小Ｋ"
dic_jp[knee_bazooka]="ニーバズーカ"
dic_jp[reverse_spin_kick]="リバーススピンキック"
dic_jp[sonicboom]="ソニックブーム"
dic_jp[flashkick_short]="サマーソルト　小Ｋ"
dic_jp[flashkick_forward_roundhouse]="サマーソルト　中大Ｋ"
dic_jp[flashkick_jab]="サマーソルト　小Ｋ"
dic_jp[flashkick_strong_fierce]="サマーソルト　中大Ｋ"
dic_jp[air_throw_kick]="空中投げ技Ｋ"
dic_jp[air_throw_punch]="空中投げ技Ｐ"
dic_jp[hadoken]="波動拳"
dic_jp[shoryuken]="昇龍拳"
dic_jp[shoryuken_jab]="昇龍拳 小Ｐ"
dic_jp[shoryuken_strong]="昇龍拳　中Ｐ"
dic_jp[shoryuken_fierce]="昇龍拳　大Ｐ"
dic_jp[tatsumaki]="竜巻旋風脚"
dic_jp[inside_crescent]="鎌払い蹴り"
dic_jp[inside_crescent_hold]="Ｋを押し続ければ鉈落とし"
dic_jp[outside_crescent]="鉈落とし蹴り"
dic_jp[outside_crescent_hold]="Ｋを押し続ければ鉈落とし蹴り"
dic_jp[knockdown_kick]="大外回し蹴り"
dic_jp[knockdown_kick_hold]="Ｋを押し続ければ大外回し蹴り"
dic_jp[air_tatsumaki]="空中竜巻旋風脚"
dic_jp[standing_jab]="立ちＰ"
dic_jp[psycho_crusher]="サイコクラッシャーアッタク"
dic_jp[knee_press]="ダブルニープレス"
dic_jp[head_stomp_short]="ヘッドプレス　小Ｋ"
dic_jp[head_stomp_bounce]="ヘッドプレス　(当たって跳ね返ったとき)"
dic_jp[skull_diver_jab]="サマーソルトスカイダイバー　小Ｐ"
dic_jp[skull_diver_strong]="サマーソルトスカイダイバー中Ｐ"
dic_jp[skull_diver_fierce]="サマーソルトスカイダイバー大Ｐ"
dic_jp[devil_reverse]="デビルリバース"
dic_jp[devil_reverse_attack]="デビルリバースアッタク"
dic_jp[back_jump_]="後Ｊ"
dic_jp[neutral_jump_]="垂直Ｊ"
dic_jp[swing]="鎖骨割り"
dic_jp[solar_plexus]="鳩尾砕き"
dic_jp[hadoken_jab]="波動拳小Ｐ"
dic_jp[hadoken_strong]="波動拳中Ｐ"
dic_jp[hadoken_fierce]="波動拳大Ｐ"
dic_jp[shoryuken_strong_fierce]="昇龍拳　中大Ｐ"
dic_jp[tiger_shot_jab]="上タイガーショット　小Ｐ"
dic_jp[tiger_shot_strong]="上タイガーショット　中Ｐ"
dic_jp[tiger_shot_fierce]="上タイガーショット　大Ｐ"
dic_jp[low_tiger_shot_short]="下タイガーショット　小Ｋ"
dic_jp[low_tiger_shot_forward]="下タイガーショット　中Ｋ"
dic_jp[low_tiger_shot_roundhouse]="下タイガーショット　大Ｋ"
dic_jp[tiger_uppercut]="タイガーアッパーカット"
dic_jp[tiger_knee]="タイガーニー"
dic_jp[downward_jab]="スラストビーク"
dic_jp[elbow_drop]="ジャンプエルボー"
dic_jp[body_slam]="ボディプレス"
dic_jp[typhoon]="メキシカンタイフーン"
dic_jp[rising_hawk]="トマホーク"
dic_jp[rising_hawk_jab]="トマホーク　小Ｐ"
dic_jp[rising_hawk_strong_fierce]="トマホーク　中大Ｐ"
dic_jp[condor_dive]="コンドルダイブ"
dic_jp[standing_jab_clawless]="(爪なし）立ち小Ｐ"
dic_jp[crouching_jab_clawless]="(爪なし）下小Ｐ"
dic_jp[far_standing_strong_clawless]="(爪なし）遠立ち中Ｐ"
dic_jp[close_standing_strong_clawless]="(爪なし）近立ち中Ｐ"
dic_jp[crouching_strong_clawless]="(爪なし）下中Ｐ"
dic_jp[far_standing_fierce_clawless]="(爪なし）遠立ち大Ｐ"
dic_jp[close_standing_fierce_clawless]="(爪なし）近立ち大Ｐ"
dic_jp[crouching_fierce_clawless]="(爪なし）下大Ｐ"
dic_jp[punch_back_flip]="バックスラッシュ"
dic_jp[kick_back_flip]="ショートバックスラッシュ"
dic_jp[rolling_crystal]="ローリングクリスタル"
dic_jp[rolling_crystal_jab]="ローリングクリスタル　小Ｐ"
dic_jp[rolling_crystal_strong]="ローリングクリスタル　中Ｐ"
dic_jp[rolling_crystal_fierce]="ローリングクリスタル　大Ｐ"
dic_jp[rolling_crystal_clawless]="(爪なし）ローリングクリスタル"
dic_jp[scarlet_terror]="スカーレットテラー"
dic_jp[scarlet_terror_forward_and_clawless]="(爪なし）スカーレットテラー　中Ｋ"
dic_jp[flying_barcelona]="フライングバルセロナ"
dic_jp[flying_barcelona_clawless]="(爪なし）フライングバルセロナ"
dic_jp[izuna_drop]="イズナドロップ"
dic_jp[sky_high_claw]="スカイハイクロー"
dic_jp[hop]="ヘッドバッド"
dic_jp[double_knee_drop_short]="ダブルニードロップ小Ｋ"
dic_jp[double_knee_drop_forward]="ダブルニードロップ中Ｋ"
dic_jp[chest_splash]="ボディプレス"
dic_jp[spinning_piledriver]="スクリューパイルドライバー"
dic_jp[atomic_suplex_short]="アトミックスープレックス小Ｋ"
dic_jp[atomic_suplex_forward]="アトミックスープレックス中Ｋ"
dic_jp[atomic_suplex_roundhouse]="アトミックスープレックス大Ｋ"
dic_jp[running_bear_grab]="フライングパワーボム"
dic_jp[double_lariat]="ダブルラリアット"
dic_jp[quick_double_lariat]="クイックダブルラリアット"
dic_jp[green_hand]="バニッシングフラット"
dic_jp[standing_throws]="立ち投げ技"
dic_jp[crouching_throw]="しゃがみ投げ技"
#jump headbutt 垂直Ｊ頭突き