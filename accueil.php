


<style type="text/css">
  img { position: absolute;  }
  
</style>

 <img src="image/5.jpg" id="img5" width="78%" height="68%"/>
<img src="image/4.jpg" id="img4" width="78%" height="68%" />
<img  src="image/3.jpg" id="img3"  width="78%" height="68%"/ >
<img  src="image/2.jpg"id="img2"  width="78%" height="68%"/>
<img src="image/1.jpg" id="img1" width="78%" height="68%"/ >
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

