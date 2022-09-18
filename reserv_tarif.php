<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

<script src="jquery-3.3.1.min.js"></script>
<script>
    $(function() {
    var i=0;
    affiche();

    function affiche() {
      i++;
      if (i==1) precedent = '#img3'
           else precedent = '#img' + (i-1);
      var actuel = '#img' + i;
      $(precedent).fadeOut(2000);
      $(actuel).fadeIn(2000);
      if (i==3) i=0;          
    }

    setInterval(affiche, 2000);
  });
</script>
<style type="text/css">
  img { position:absolute;margin-bottom:1em;    margin-left:1em;   }
  </style>
  
 <img src="image/8.jpg" id="img1"  width="30%" height="30%"  />
 <img src="image/29571088_1626744134029436_7186514794083865610_n.jpg" id="img2" width="30%" height="30%"  />
<img src="image/rese.jpg"id="img3" width="30%" height="30%"   />
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br/>
<table align="center" border=1  width="50%"bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF">
 <tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b>Type de chambre</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>Prix en DA</b></font></td></tr>

<tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b> chambre Single</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>6000.00 da/nuitée</b></font></td></tr>

<tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b> chambre Double</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>9800.00 da/nuitée</b></font></td></tr>

<tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b> chambre triple</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>15000.00 da/nuitée</b></font></td></tr>
</table>


   


