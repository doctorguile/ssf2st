<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Super Street Fighter II Turbo - Old character Hitbox Diagrams </title>
<style>
body {
	font-family: sans-serif;
}

a:hover {
	color:blue;	
	text-decoration:underline;
}

a {
	color:Gray;
	text-decoration:none;
}

.move-property {
	padding: 5px;
	font-weight: bold;
	width:70px;
	text-align:center;
	margin:3px;
	float:left;
}

.active {
	background-color: #1E90FF;
	color: White;
}

.inactive {
	background-color: #708090;
	color: #A9A9A9;
}

div.attack-block-hit {
	border-style: solid;
	border-color: Black;
	border-width: medium;
	padding: 5px;
	width: 100%;
}

table.attack-block-hit  td {
	padding: 5px;
}

td.tl {
	border-left:medium solid black;
	border-top:medium solid black
}
td.tr {
	border-right:medium solid black;
	border-top:medium solid black
}
td.ml {
	border-left:medium solid black;
	border-top:medium solid black
}
td.mr {
	border-right:medium solid black;
	border-top:medium solid black
}
td.bl {
	border-left:medium solid black;
	border-top:medium solid black;
	border-bottom:medium solid black
}
td.br {
	border-right:medium solid black;
	border-top:medium solid black;
	border-bottom:medium solid black
}
.movename {
	background-color:pink;
	font-size:larger;
	font-weight:bold;
	padding:5px;
}

.frame {
	float:left;
	padding:5px;
	text-align:center;
	font-size:small;
}

.inactive-frame {
	background-color:#999;	
}
.active-frame {
	background-color:#F60;	
}

</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
<h3><a href="https://doctorguile.github.io/ssf2st/">Character Hitbox Diagrams</a></h3>

    <img src="images/charselect.png" width="393" height="237" border="0" usemap="#Map">
    <?php
        require('util.php');
        printImageMap()
    ?>

<h3><a href="https://doctorguile.github.io/ssf2st/compare.html">Hitbox Split View Comparison</a></h3>
<h3><a href="https://doctorguile.github.io/ssf2st/theoryfighter.html">Hitbox Theory Fighter</a></h3>

<!--
      <map name="Map">
<area shape='rect' coords='4,4,52,52' href='st/ryu'>
<area shape='rect' coords='52,4,100,52' href='st/ehonda'>
<area shape='rect' coords='100,4,148,52' href='st/blanka'>
<area shape='rect' coords='148,4,196,52' href='st/guile'>
<area shape='rect' coords='196,4,244,52' href='st/thawk'>
<area shape='rect' coords='244,4,292,52' href='st/feilong'>
<area shape='rect' coords='292,4,340,52' href='st/balrog'>
<area shape='rect' coords='340,4,388,52' href='st/sagat'>
<area shape='rect' coords='4,52,52,100' href='st/ken'>
<area shape='rect' coords='52,52,100,100' href='st/chunli'>
<area shape='rect' coords='100,52,148,100' href='st/zangief'>
<area shape='rect' coords='148,52,196,100' href='st/dhalsim'>
<area shape='rect' coords='196,52,244,100' href='st/cammy'>
<area shape='rect' coords='244,52,292,100' href='st/deejay'>
<area shape='rect' coords='292,52,340,100' href='st/vega'>
<area shape='rect' coords='340,52,388,100' href='st/mbison'>
<area shape='rect' coords='4,126,52,174' href='old-chars/ryu'>
<area shape='rect' coords='52,126,100,174' href='old-chars/ehonda'>
<area shape='rect' coords='100,126,148,174' href='old-chars/blanka'>
<area shape='rect' coords='148,126,196,174' href='old-chars/guile'>
<area shape='rect' coords='196,126,244,174' href='old-chars/thawk'>
<area shape='rect' coords='244,126,292,174' href='old-chars/feilong'>
<area shape='rect' coords='292,126,340,174' href='old-chars/balrog'>
<area shape='rect' coords='340,126,388,174' href='old-chars/sagat'>
<area shape='rect' coords='4,174,52,222' href='old-chars/ken'>
<area shape='rect' coords='52,174,100,222' href='old-chars/chunli'>
<area shape='rect' coords='100,174,148,222' href='old-chars/zangief'>
<area shape='rect' coords='148,174,196,222' href='old-chars/dhalsim'>
<area shape='rect' coords='196,174,244,222' href='old-chars/cammy'>
<area shape='rect' coords='244,174,292,222' href='old-chars/deejay'>
<area shape='rect' coords='292,174,340,222' href='old-chars/vega'>
<area shape='rect' coords='340,174,388,222' href='old-chars/mbison'>
      </map>
-->      
</body>
</html>