<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
<!--    <script src="underscore.js"></script>-->
<!--    <script src="backbone.js"></script>-->
<script src="sprintf-0.7-beta1.js"></script>
<script src="safejump.js"></script>

<h1>Safe Jump Illustrated Guide</h1>

<table>
    <tr>
        <td valign=top>
            <div id='attacker-container'>
                Attacker
                <br/>
                <?php
                $jumpframes = array(
                    41 => array('Claw'),
                    44 => array('Blanka', 'Old Sagat'),
                    46 => array('FeiLong', 'Sagat', 'T-Hawk', 'Zangief', 'Old DeeJay'),
                    48 => array('Boxer', 'DeeJay', 'Old Ken', 'Old Ryu'),
                    49 => array('Ken', 'Ryu'),
                    50 => array('Cammy', 'ChunLi', 'EHonda'),
                    51 => array('Dictator'),
                    52 => array('Guile')
                );
                $checked = true;
                foreach ($jumpframes as $sec => $names) {
                    $checked = $checked ? 'checked' : '';
                    echo "<input type='radio' name='attacker' value='$sec' $checked id='$sec-frames'>";
                    $label = "$sec frames " . implode(',&nbsp;', $names);
                    echo "<label for=$sec-frames>$label</label>";
                    echo "<br/>";
                    $checked = '';
                }
                ?>
            </div>
        </td>
        <td valign=top>
            <div id='target-container'>
                <label for='target-character'>Target</label><br/>
                <table>
                    <tr>
                        <?php
                        $characters = array('balrog', 'blanka', 'cammy', 'chunli', 'deejay', 'dhalsim', 'ehonda',
                            'feilong', 'guile', 'mbison', 'shoto', 'sagat', 'thawk', 'vega', 'zangief');
                        $checked = true;
                        $len = count($characters);
                        $half = floor($len / 2) + 1;
                        for ($i = 0; $i < $len; $i++) {
                            if ($i == $half) {
                                echo "</td>";
                            }
                            if ($i == 0 || $i == $half) {
                                echo "<td valign=top>";
                            }
                            $c = $characters[$i];
                            $checked = $checked ? 'checked' : '';
                            echo "<input type='radio' name='target-character' value='$c' $checked id='target-$c'>";
                            echo "<label for=target-$c>$c</label>";
                            echo "<br/>";
                            $checked = '';
                            if ($i == $len - 1) {
                                echo "</td>";
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div id='knockdown-container'>
                <input type='radio' name='knockdown' id='knockdown-srk' value='srk' checked>
                <label for='knockdown-srk'>Full Knockdown (Shoryuken)</label>
                <input type='radio' name='knockdown' id='knockdown-rh' value='rh'>
                <label for='knockdown-rh'>Regular Knockdown (Crouching Roundhouse)</label>
            </div>
            <div id='animation-container'>
                <div id='image-background' style='padding:5px'>
                    <img id='animation' style="border: 6px white solid">
                </div>
                <button id='left'>&lt;&lt;</button>
                <button id='animate'>Animate</button>
                <button id='jump'>Jump</button>
                <button id='right'>&gt;&gt;</button>
            </div>
        </td>
    </tr>
</table>