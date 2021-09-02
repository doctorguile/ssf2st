const fs = require('fs')

fs.readdirSync('./').forEach(folder => {
    document.getElementById('attack-list').innerHTML = 
    `
    <table cellspacing="0" cellpadding="0" width="100%">
    <tr class='movename'>
      <td class='movename'>Test réussi
      Kick&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../images/qcb.png'
      border="0"><img src='../../images/kick.gif' border="0"></td>
      <td class='back-to-top' align="right">
        <a href='#top'>Back to top</a>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table>
          <tr>
            <td>
              <div style='padding-top:3px'><img id='special51crjpg'
              class='movesetimg hoverbox' style='float:left' src=
              './special-5/1_cr.jpg'><img id='special52crjpg'
              class='movesetimg hoverbox' style='float:left' src=
              './special-5/2_cr.jpg'><img id='special53crjpg'
              class='movesetimg hoverbox' style='float:left' src=
              './special-5/3_cr.jpg'><img id='special54crjpg'
              class='movesetimg hoverbox' style='float:left' src=
              './special-5/4_cr.jpg'></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    `
})