#!/bin/bash

sed '/  <footer>/q' index.html > top.html
sed -n '/  <\/footer>/, $p' index.html > bottom.html

echo "" > footer.html
echo '    <div class="back-to-top">
      <a href=#top lang="en" >Back to top ↑</a>
      <a href=#top lang="fr" >Haut de page ↑</a>
      <a href=#top lang="es" >Back to top ↑</a>
      <a href=#top lang="jp" >トップへ戻る ↑</a>
    </div>
    <div class="charlist">

      <h2 lang="en" >Characters:</h2>
      <h2 lang="fr" >Personnages:</h2>
      <h2 lang="es" >Characters:</h2>
      <h2 lang="jp" >キャラクター:</h2>
      
      <ul>
        <li lang="en" ><a href="../../st/ryu/index.html" lang="en" >Ryu</a> <a href="../../old-chars/ryu/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/ryu/index.html?lang=fr" lang="fr" >Ryu</a> <a href="../../old-chars/ryu/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/ryu/index.html?lang=es" lang="es" >Ryu</a> <a href="../../old-chars/ryu/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/ryu/index.html?lang=jp" lang="jp" >リュウ</a> <a href="../../old-chars/ryu/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/ken/index.html" lang="en" >Ken</a> <a href="../../old-chars/ken/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/ken/index.html?lang=fr" lang="fr" >Ken</a> <a href="../../old-chars/ken/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/ken/index.html?lang=es" lang="es" >Ken</a> <a href="../../old-chars/ken/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/ken/index.html?lang=jp" lang="jp" >ケン</a> <a href="../../old-chars/ken/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/ehonda/index.html" lang="en" >E. Honda</a> <a href="../../old-chars/ehonda/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/ehonda/index.html?lang=fr" lang="fr" >E. Honda</a> <a href="../../old-chars/ehonda/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/ehonda/index.html?lang=es" lang="es" >E. Honda</a> <a href="../../old-chars/ehonda/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/ehonda/index.html?lang=jp" lang="jp" >本田</a> <a href="../../old-chars/ehonda/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/chunli/index.html" lang="en" >Chun-Li</a> <a href="../../old-chars/chunli/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/chunli/index.html?lang=fr" lang="fr" >Chun-Li</a> <a href="../../old-chars/chunli/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/chunli/index.html?lang=es" lang="es" >Chun-Li</a> <a href="../../old-chars/chunli/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/chunli/index.html?lang=jp" lang="jp" >春麗</a> <a href="../../old-chars/chunli/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/blanka/index.html" lang="en" >Blanka</a> <a href="../../old-chars/blanka/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/blanka/index.html?lang=fr" lang="fr" >Blanka</a> <a href="../../old-chars/blanka/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/blanka/index.html?lang=es" lang="es" >Blanka</a> <a href="../../old-chars/blanka/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/blanka/index.html?lang=jp" lang="jp" >ブランカ</a> <a href="../../old-chars/blanka/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/zangief/index.html" lang="en" >Zangief</a> <a href="../../old-chars/zangief/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/zangief/index.html?lang=fr" lang="fr" >Zangief</a> <a href="../../old-chars/zangief/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/zangief/index.html?lang=es" lang="es" >Zangief</a> <a href="../../old-chars/zangief/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/zangief/index.html?lang=jp" lang="jp" >ザンギエフ</a> <a href="../../old-chars/zangief/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/guile/index.html" lang="en" >Guile</a> <a href="../../old-chars/guile/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/guile/index.html?lang=fr" lang="fr" >Guile</a> <a href="../../old-chars/guile/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/guile/index.html?lang=es" lang="es" >Guile</a> <a href="../../old-chars/guile/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/guile/index.html?lang=jp" lang="jp" >ガイル</a> <a href="../../old-chars/guile/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/dhalsim/index.html" lang="en" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/dhalsim/index.html?lang=fr" lang="fr" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/dhalsim/index.html?lang=es" lang="es" >Dhalsim</a> <a href="../../old-chars/dhalsim/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/dhalsim/index.html?lang=jp" lang="jp" >ダルシム</a> <a href="../../old-chars/dhalsim/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/thawk/index.html" lang="en" >T. Hawk</a> <a href="../../old-chars/thawk/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/thawk/index.html?lang=fr" lang="fr" >T. Hawk</a> <a href="../../old-chars/thawk/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/thawk/index.html?lang=es" lang="es" >T. Hawk</a> <a href="../../old-chars/thawk/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/thawk/index.html?lang=jp" lang="jp" >ホーク</a> <a href="../../old-chars/thawk/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/cammy/index.html" lang="en" >Cammy</a> <a href="../../old-chars/cammy/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/cammy/index.html?lang=fr" lang="fr" >Cammy</a> <a href="../../old-chars/cammy/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/cammy/index.html?lang=es" lang="es" >Cammy</a> <a href="../../old-chars/cammy/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/cammy/index.html?lang=jp" lang="jp" >キャミィ</a> <a href="../../old-chars/cammy/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/feilong/index.html" lang="en" >Fei Long</a> <a href="../../old-chars/feilong/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/feilong/index.html?lang=fr" lang="fr" >Fei Long</a> <a href="../../old-chars/feilong/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/feilong/index.html?lang=es" lang="es" >Fei Long</a> <a href="../../old-chars/feilong/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/feilong/index.html?lang=jp" lang="jp" >フェイロン</a> <a href="../../old-chars/feilong/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/deejay/index.html" lang="en" >Dee Jay</a> <a href="../../old-chars/deejay/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/deejay/index.html?lang=fr" lang="fr" >Dee Jay</a> <a href="../../old-chars/deejay/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/deejay/index.html?lang=es" lang="es" >Dee Jay</a> <a href="../../old-chars/deejay/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/deejay/index.html?lang=jp" lang="jp" >ディージェイ</a> <a href="../../old-chars/deejay/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/balrog/index.html" lang="en" >Boxer</a> <a href="../../old-chars/balrog/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/balrog/index.html?lang=fr" lang="fr" >Boxer</a> <a href="../../old-chars/balrog/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/balrog/index.html?lang=es" lang="es" >Boxer</a> <a href="../../old-chars/balrog/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/balrog/index.html?lang=jp" lang="jp" >バイソン</a> <a href="../../old-chars/balrog/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/vega/index.html" lang="en" >Claw</a> <a href="../../old-chars/vega/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/vega/index.html?lang=fr" lang="fr" >Griffe</a> <a href="../../old-chars/vega/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/vega/index.html?lang=es" lang="es" >Claw</a> <a href="../../old-chars/vega/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/vega/index.html?lang=jp" lang="jp" >バルログ</a> <a href="../../old-chars/vega/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/sagat/index.html" lang="en" >Sagat</a> <a href="../../old-chars/sagat/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/sagat/index.html?lang=fr" lang="fr" >Sagat</a> <a href="../../old-chars/sagat/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/sagat/index.html?lang=es" lang="es" >Sagat</a> <a href="../../old-chars/sagat/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/sagat/index.html?lang=jp" lang="jp" >サガット</a> <a href="../../old-chars/sagat/index.html" lang="jp" >（S）</a></li>
        <li lang="en" ><a href="../../st/mbison/index.html" lang="en" >Dictator</a> <a href="../../old-chars/mbison/index.html" lang="en" >(old)</a></li>
        <li lang="fr" ><a href="../../st/mbison/index.html?lang=fr" lang="fr" >Dictateur</a> <a href="../../old-chars/mbison/index.html" lang="fr" >(old)</a></li>
        <li lang="es" ><a href="../../st/mbison/index.html?lang=es" lang="es" >Dictator</a> <a href="../../old-chars/mbison/index.html" lang="es" >(old)</a></li>
        <li lang="jp" ><a href="../../st/mbison/index.html?lang=jp" lang="jp" >ベガ</a> <a href="../../old-chars/mbison/index.html" lang="jp" >（S）</a></li>
      </ul>
    </div>
' >> footer.html

cat top.html footer.html bottom.html > index.html
rm top.html bottom.html footer.html
