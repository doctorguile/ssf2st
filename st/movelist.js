const fs = require('fs');

const moveList = fs.readdirSync('__dirname');
console.log(moveList);
moveList.forEach(move => {
  console.log(move);
  document.getElementById('attack-list').innerHTML = 
  `
  <a name='${move}' id="${move}"></a>
  <table cellspacing="0" cellpadding="0" width="100%">
    <tr class='movename'>
      <td class='movename'>${move}</td>
      <td class='back-to-top' align="right">
        <a href='#top'>Back to top</a>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table>
          <tr>
            <td>
              <div style='padding-top:3px'><img id=
              'crouching1crjpg' class='movesetimg hoverbox' style=
              'float:left' src='./crouching/1_cr.jpg'><img id=
              'crouching2crjpg' class='movesetimg hoverbox' style=
              'float:left' src='./crouching/2_cr.jpg'><img id=
              'crouching3crjpg' class='movesetimg hoverbox' style=
              'float:left' src='./crouching/3_cr.jpg'></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  `
})