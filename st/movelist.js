import * as fs from 'fs';

const moveList = fs.readdirSync(__dirname);
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
            <td id="attack-parts">
              
            </td>
          </tr>
        </table>
      </td>
    </tr>
  `
})