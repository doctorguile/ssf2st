<?php

function convertdir($srcdir, $newsize)
{
    $srcdir = realpath($srcdir);
    $dstdir = "$srcdir/converted";
    if (!file_exists($dstdir)) mkdir($dstdir);
    $files = glob($srcdir . '/*.png');
    $count = count($files);
    foreach ($files as $file) {
        $label = --$count;
        //$dstfile = $dstdir . '/' . basename($file);
        $dstfile = $dstdir . '/' . sprintf("%04.d", $count) . ".png";
        $textX = 192 + 55;
        $textY = 25;
        $cmd = "convert $file -fill red -pointsize 36 -draw \"text $textX,$textY '$label'\" miff: | convert - -crop $newsize $dstfile";
        //$cmd = "convert $file -fill red -pointsize 36 -draw \"text $textX,$textY '$label'\" $dstfile";
        //$cmd = "convert $file -crop $newsize $dstfile";
        //  -background black
        //miff:-
        shell_exec($cmd);
    }
}

//echo $argv[0];
//exit();
//convertdir($argv[1],$argv[2]);
// 	php crop.php balrog/srk/ 192x224+192+0

$characters = array('balrog', 'blanka', 'cammy', 'chunli', 'deejay', 'dhalsim', 'ehonda',
    'feilong', 'guile', 'ken', 'mbison', 'ryu', 'sagat', 'thawk', 'vega', 'zangief');

$files = glob('*.png');
$count = count($files);
foreach ($files as $file) {
    echo "<img src='$file' style='display:none'/>";
}

$jumpframes = array(
    41 => array('Claw'),
    44 => array('Blanka'),
    46 => array('FeiLong', 'Sagat', 'THawk', 'Zangief'),
    48 => array('Boxer', 'DeeJay'),
    49 => array('Ken', 'Ryu'),
    50 => array('Cammy', 'ChunLi', 'EHonda'),
    51 => array('Dictator'),
    52 => array('Guile')
);
?>

<style type="text/css">
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"/>
<script>
    //$(document).ready(function(){ $('#click').click(function() { alert('click'); }); });
</script>

Safe jump with <br/>
<?php
$checked = true;
foreach ($jumpframes as $sec => $names) {
    $checked = $checked ? 'checked' : '';
    echo "<input type='radio' name='attacker' value='$sec' $checked> $sec frames ";
    echo implode('&nbsp;', $names);
    echo "<br/>";
    $checked = '';
}
?>
<p/>
Target: <select id='target-character'>
    <?php
    foreach ($characters as $c)
        echo "<option value=$c>$c</option>";
    ?>
</select>
<div id='image-background' style='padding:5px'>
    <img id='animation' style="border: 6px white solid" src='0000.png'>
</div>
<button id='left'>&lt;&lt;</button>
<button id='click'>Animate</button>
<button id='jump'>Jump</button>
<button id='right'>&gt;&gt;</button>

<script>
    (function () {
        var initializing = false, fnTest = /xyz/.test(function () {
            xyz;
        }) ? /\b_super\b/ : /.*/;
        // The base Class implementation (does nothing)
        this.Class = function () {
        };
        // Create a new Class that inherits from this class
        Class.extend = function (prop) {
            var _super = this.prototype;
            // Instantiate a base class (but only create the instance,
            // don't run the init constructor)
            initializing = true;
            var prototype = new this();
            initializing = false;
            // Copy the properties over onto the new prototype
            for (var name in prop) {
                // Check if we're overwriting an existing function
                prototype[name] = typeof prop[name] == "function" &&
                typeof _super[name] == "function" && fnTest.test(prop[name]) ?
                    (function (name, fn) {
                        return function () {
                            var tmp = this._super;

                            // Add a new ._super() method that is the same method
                            // but on the super-class
                            this._super = _super[name];

                            // The method only need to be bound temporarily, so we
                            // remove it when we're done executing
                            var ret = fn.apply(this, arguments);
                            this._super = tmp;

                            return ret;
                        };
                    })(name, prop[name]) :
                    prop[name];
            }
            // The dummy class constructor
            function Class() {
                // All construction is actually done in the init method
                if (!initializing && this.init)
                    this.init.apply(this, arguments);
            }

            // Populate our constructed prototype object
            Class.prototype = prototype;
            // Enforce the constructor to be what we expect
            Class.prototype.constructor = Class;
            // And make this class extendable
            Class.extend = arguments.callee;
            return Class;
        };
    })();


    var attackerJumpframe = 41;

    function updateAttacker() {
        var val = $("input[@name='attacker']:checked").val();
        attackerJumpframe = parseInt(val, 10);

    }

    $('input[@name="attacker"]').change(updateAttacker);

    var Animation = Class.extend({
        init: function (files) {
            this.files = [
                <?php
                $comma = false;
                foreach ($files as $file) {
                    if ($comma) {
                        echo ",";
                    } else {
                        $comma = true;
                    }
                    echo "'$file'";
                }
                ?>
            ];
            this.direction = -1;
            this.mousedown = false;
            this.idx = 0;
            var self = this;
            $('#jump').click(function () {
                self.idx = attackerJumpframe;
                self.render();
            });
            /*
             $('#left').click(function(){
             if (self.idx + 1 >= self.files.length) {
             return;
             }
             self.idx++;
             self.render();
             });
             $('#right').click(function(){
             if (self.idx - 1 < 0) {
             return;
             }
             self.idx--;
             self.render();
             });
             */
            $('#click').click(function () {
                $('button').attr("disabled", true);
                self.idx = self.files.length - 1;
                self.animate();
            });

            $('#left').mousedown($.proxy(this.fastBackward, this));
            $('#right').mousedown($.proxy(this.fastForward, this));
            $('#left').mouseup($.proxy(this.mouseup, this));
            $('#right').mouseup($.proxy(this.mouseup, this));
        },
        render: function () {
            if (this.idx < 0 || this.idx >= this.files.length) {
                return;
            }
            var color = "black";
            if (this.idx == attackerJumpframe) {
                color = "blue";
            }
            $('#animation').attr('src', this.files[this.idx]).css("border", "6px " + color + " solid");
        },
        moveFrames: function () {
            if (this.idx + this.direction < 0 || this.idx + this.direction >= this.files.length) {
                return;
            }
            this.idx += this.direction;
            this.render();
            if (this.mousedown) {
                setTimeout($.proxy(this.moveFrames, this), 100);
            }
        },
        fastBackward: function () {
            this.direction = 1;
            this.mousedown = true;
            setTimeout($.proxy(this.moveFrames, this), 100);
        },
        fastForward: function () {
            this.direction = -1;
            this.mousedown = true;
            setTimeout($.proxy(this.moveFrames, this), 100);
        },
        mouseup: function () {
            this.mousedown = false;
        },
        animate: function (idx) {
            var self = this;
            this.direction = -1;
            var delay = 100;
            if (this.idx == attackerJumpframe) {
                delay = 1000;
            }
            this.render();
            if (this.idx + this.direction < 0 || this.idx + this.direction >= this.files.length) {
                $('button').attr("disabled", false);
                return;
            }
            this.idx += this.direction;
            setTimeout($.proxy(this.animate, this), delay);
        }
    });

    new Animation();

</script>
