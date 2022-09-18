

<script src="jquery-3.3.1.min.js"></script>
<script>
    $(function() {
    var i=0;
    affiche();

    function affiche() {
      i++;
      if (i==1) precedent = '#img5'
           else precedent = '#img' + (i-1);
      var actuel = '#img' + i;
      $(precedent).fadeOut(2000);
      $(actuel).fadeIn(2000);
      if (i==5) i=0;          
    }

    setInterval(affiche, 2000);
  });
</script>
<style type="text/css">
  img { position:absolute;margin-bottom:1em;    margin-left:1em;   }
  </style>
  
 <img src="image/r5.jpg" id="img5" width="40%"  height="40%" alt="Un bateau sur la seine" align="top"  />
 <img src="image/r1.jpg" id="img4" width="40%" height="40%"  />
<img src="image/r2.jpg" id="img3" width="40%" height="40%"  />
<img src="image/r3.jpg" id="img2"  width="40%"  height="40%"/ >
<img src="image/r4.jpg" id="img1"  width="40%"  height="40%"/><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<center></b></font>
<tbody><tr><td><p style="text-align: left;"><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">Flotte&nbsp; au&nbsp; resrant&nbsp; un&nbsp; réel&nbsp; parfum de&nbsp; fraîcheur. </span><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">Tout&nbsp; en&nbsp; respectant</span></p><p style="text-align: left;"><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">le &nbsp; style&nbsp; traditionnel&nbsp; chaoui, </span><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;"> Le&nbsp; chef&nbsp; vous&nbsp; séduira&nbsp; avec&nbsp; une&nbsp; cuisine </span></p><p style="text-align: left;"><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">gourmande</span><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">&nbsp;mettant en valeur les légumes,</span><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;">&nbsp;poissons et viandes</span><span style="font-size: small; color: rgb(255, 255, 255); font-family: arial,helvetica,sans-serif;"> de saison.</span></p></td></tr></tbody></table><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p> </center>

