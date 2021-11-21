#!/bin/bash

sed '/  <footer>/q' index.html > top.html
sed -n '/  <\/footer>/, $p' index.html > bottom.html

echo "" > footer.html
echo '    <div class="back-to-top">
      <a href=#top style="display: none;" lang="en" >Back to top ↑</a>
      <a href=#top style="display: none;" lang="alt" >Back to top ↑</a>
      <a href=#top style="display: none;" lang="fr" >Haut de page ↑</a>
      <a href=#top style="display: none;" lang="es" >Back to top ↑</a>
      <a href=#top style="display: none;" lang="jp" >トップへ戻る ↑</a>
    </div>
    <div class="charlist">

      <h2 style="display: none;" lang="en" >Characters:</h2>
      <h2 style="display: none;" lang="alt" >Characters:</h2>
      <h2 style="display: none;" lang="fr" >Personnages:</h2>
      <h2 style="display: none;" lang="es" >Characters:</h2>
      <h2 style="display: none;" lang="jp" >キャラクター:</h2>
      
      <ul>
        <li style="display: none;" lang="en" ><a href="../../st/ryu/index.html" style="display: none;" lang="en" >Ryu</a> <a href="../../old-chars/ryu/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/ryu/index.html?lang=alt" style="display: none;" lang="alt" >Ryu</a> <a href="../../old-chars/ryu/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/ryu/index.html?lang=fr" style="display: none;" lang="fr" >Ryu</a> <a href="../../old-chars/ryu/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/ryu/index.html?lang=es" style="display: none;" lang="es" >Ryu</a> <a href="../../old-chars/ryu/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/ryu/index.html?lang=jp" style="display: none;" lang="jp" >リュウ</a> <a href="../../old-chars/ryu/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/ken/index.html" style="display: none;" lang="en" >Ken</a> <a href="../../old-chars/ken/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/ken/index.html?lang=alt" style="display: none;" lang="alt" >Ken</a> <a href="../../old-chars/ken/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/ken/index.html?lang=fr" style="display: none;" lang="fr" >Ken</a> <a href="../../old-chars/ken/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/ken/index.html?lang=es" style="display: none;" lang="es" >Ken</a> <a href="../../old-chars/ken/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/ken/index.html?lang=jp" style="display: none;" lang="jp" >ケン</a> <a href="../../old-chars/ken/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/ehonda/index.html" style="display: none;" lang="en" >E. Honda</a> <a href="../../old-chars/ehonda/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/ehonda/index.html?lang=alt" style="display: none;" lang="alt" >E. Honda</a> <a href="../../old-chars/ehonda/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/ehonda/index.html?lang=fr" style="display: none;" lang="fr" >E. Honda</a> <a href="../../old-chars/ehonda/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/ehonda/index.html?lang=es" style="display: none;" lang="es" >E. Honda</a> <a href="../../old-chars/ehonda/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/ehonda/index.html?lang=jp" style="display: none;" lang="jp" >本田</a> <a href="../../old-chars/ehonda/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/chunli/index.html" style="display: none;" lang="en" >Chun-Li</a> <a href="../../old-chars/chunli/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/chunli/index.html?lang=alt" style="display: none;" lang="alt" >Chun-Li</a> <a href="../../old-chars/chunli/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/chunli/index.html?lang=fr" style="display: none;" lang="fr" >Chun-Li</a> <a href="../../old-chars/chunli/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/chunli/index.html?lang=es" style="display: none;" lang="es" >Chun-Li</a> <a href="../../old-chars/chunli/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/chunli/index.html?lang=jp" style="display: none;" lang="jp" >春麗</a> <a href="../../old-chars/chunli/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/blanka/index.html" style="display: none;" lang="en" >Blanka</a> <a href="../../old-chars/blanka/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/blanka/index.html?lang=alt" style="display: none;" lang="alt" >Blanka</a> <a href="../../old-chars/blanka/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/blanka/index.html?lang=fr" style="display: none;" lang="fr" >Blanka</a> <a href="../../old-chars/blanka/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/blanka/index.html?lang=es" style="display: none;" lang="es" >Blanka</a> <a href="../../old-chars/blanka/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/blanka/index.html?lang=jp" style="display: none;" lang="jp" >ブランカ</a> <a href="../../old-chars/blanka/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/zangief/index.html" style="display: none;" lang="en" >Zangief</a> <a href="../../old-chars/zangief/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/zangief/index.html?lang=alt" style="display: none;" lang="alt" >Zangief</a> <a href="../../old-chars/zangief/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/zangief/index.html?lang=fr" style="display: none;" lang="fr" >Zangief</a> <a href="../../old-chars/zangief/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/zangief/index.html?lang=es" style="display: none;" lang="es" >Zangief</a> <a href="../../old-chars/zangief/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/zangief/index.html?lang=jp" style="display: none;" lang="jp" >ザンギエフ</a> <a href="../../old-chars/zangief/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/guile/index.html" style="display: none;" lang="en" >Guile</a> <a href="../../old-chars/guile/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/guile/index.html?lang=alt" style="display: none;" lang="alt" >Guile</a> <a href="../../old-chars/guile/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/guile/index.html?lang=fr" style="display: none;" lang="fr" >Guile</a> <a href="../../old-chars/guile/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/guile/index.html?lang=es" style="display: none;" lang="es" >Guile</a> <a href="../../old-chars/guile/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/guile/index.html?lang=jp" style="display: none;" lang="jp" >ガイル</a> <a href="../../old-chars/guile/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/dhalsim/index.html" style="display: none;" lang="en" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/dhalsim/index.html?lang=alt" style="display: none;" lang="alt" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/dhalsim/index.html?lang=fr" style="display: none;" lang="fr" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/dhalsim/index.html?lang=es" style="display: none;" lang="es" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/dhalsim/index.html?lang=jp" style="display: none;" lang="jp" >ダルシム</a> <a href="../../old-chars/dhalsim/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/thawk/index.html" style="display: none;" lang="en" >T. Hawk</a> <a href="../../old-chars/thawk/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/thawk/index.html?lang=alt" style="display: none;" lang="alt" >T. Hawk</a> <a href="../../old-chars/thawk/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/thawk/index.html?lang=fr" style="display: none;" lang="fr" >T. Hawk</a> <a href="../../old-chars/thawk/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/thawk/index.html?lang=es" style="display: none;" lang="es" >T. Hawk</a> <a href="../../old-chars/thawk/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/thawk/index.html?lang=jp" style="display: none;" lang="jp" >ホーク</a> <a href="../../old-chars/thawk/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/cammy/index.html" style="display: none;" lang="en" >Cammy</a> <a href="../../old-chars/cammy/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/cammy/index.html?lang=alt" style="display: none;" lang="alt" >Cammy</a> <a href="../../old-chars/cammy/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/cammy/index.html?lang=fr" style="display: none;" lang="fr" >Cammy</a> <a href="../../old-chars/cammy/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/cammy/index.html?lang=es" style="display: none;" lang="es" >Cammy</a> <a href="../../old-chars/cammy/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/cammy/index.html?lang=jp" style="display: none;" lang="jp" >キャミィ</a> <a href="../../old-chars/cammy/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/feilong/index.html" style="display: none;" lang="en" >Fei Long</a> <a href="../../old-chars/feilong/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/feilong/index.html?lang=alt" style="display: none;" lang="alt" >Fei Long</a> <a href="../../old-chars/feilong/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/feilong/index.html?lang=fr" style="display: none;" lang="fr" >Fei Long</a> <a href="../../old-chars/feilong/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/feilong/index.html?lang=es" style="display: none;" lang="es" >Fei Long</a> <a href="../../old-chars/feilong/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/feilong/index.html?lang=jp" style="display: none;" lang="jp" >フェイロン</a> <a href="../../old-chars/feilong/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/deejay/index.html" style="display: none;" lang="en" >Dee Jay</a> <a href="../../old-chars/deejay/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/deejay/index.html?lang=alt" style="display: none;" lang="alt" >Dee Jay</a> <a href="../../old-chars/deejay/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/deejay/index.html?lang=fr" style="display: none;" lang="fr" >Dee Jay</a> <a href="../../old-chars/deejay/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/deejay/index.html?lang=es" style="display: none;" lang="es" >Dee Jay</a> <a href="../../old-chars/deejay/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/deejay/index.html?lang=jp" style="display: none;" lang="jp" >ディージェイ</a> <a href="../../old-chars/deejay/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/balrog/index.html" style="display: none;" lang="en" >Boxer</a> <a/ href="../../old-chars/balrog/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/balrog/index.html?lang=alt" style="display: none;" lang="alt" >Boxer</a> <a href="../../old-chars/balrog/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/balrog/index.html?lang=fr" style="display: none;" lang="fr" >Boxer</a> <a href="../../old-chars/balrog/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/balrog/index.html?lang=es" style="display: none;" lang="es" >Boxer</a> <a href="../../old-chars/balrog/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/balrog/index.html?lang=jp" style="display: none;" lang="jp" >バイソン</a> <a href="../../old-chars/balrog/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/vega/index.html" style="display: none;" lang="en" >Claw</a> <a href="../../old-chars/vega/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/vega/index.html?lang=alt" style="display: none;" lang="alt" >Claw</a> <a href="../../old-chars/vega/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/vega/index.html?lang=fr" style="display: none;" lang="fr" >Claw</a> <a href="../../old-chars/vega/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/vega/index.html?lang=es" style="display: none;" lang="es" >Claw</a> <a href="../../old-chars/vega/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/vega/index.html?lang=jp" style="display: none;" lang="jp" >バルログ</a> <a href="../../old-chars/vega/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/sagat/index.html" style="display: none;" lang="en" >Sagat</a> <a href="../../old-chars/sagat/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/sagat/index.html?lang=alt" style="display: none;" lang="alt" >Sagat</a> <a href="../../old-chars/sagat/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/sagat/index.html?lang=fr" style="display: none;" lang="fr" >Sagat</a> <a href="../../old-chars/sagat/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/sagat/index.html?lang=es" style="display: none;" lang="es" >Sagat</a> <a href="../../old-chars/sagat/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/sagat/index.html?lang=jp" style="display: none;" lang="jp" >サガット</a> <a href="../../old-chars/sagat/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
        <li style="display: none;" lang="en" ><a href="../../st/mbison/index.html" style="display: none;" lang="en" >Dictator</a> <a href="../../old-chars/mbison/index.html" style="display: none;" lang="en" >(old)</a></li>
	<li style="display: none;" lang="alt" ><a href="../../st/mbison/index.html?lang=alt" style="display: none;" lang="alt" >Dictator</a> <a href="../../old-chars/mbison/index.html?lang=alt" style="display: none;" lang="alt" >(old)</a></li>
        <li style="display: none;" lang="fr" ><a href="../../st/mbison/index.html?lang=fr" style="display: none;" lang="fr" >Dictateur</a> <a href="../../old-chars/mbison/index.html?lang=fr" style="display: none;" lang="fr" >(old)</a></li>
        <li style="display: none;" lang="es" ><a href="../../st/mbison/index.html?lang=es" style="display: none;" lang="es" >Dictator</a> <a href="../../old-chars/mbison/index.html?lang=es" style="display: none;" lang="es" >(old)</a></li>
        <li style="display: none;" lang="jp" ><a href="../../st/mbison/index.html?lang=jp" style="display: none;" lang="jp" >ベガ</a> <a href="../../old-chars/mbison/index.html?lang=jp" style="display: none;" lang="jp" >（S）</a></li>
      </ul>
    </div>
' >> footer.html

cat top.html footer.html bottom.html > index.html
rm top.html bottom.html footer.html
