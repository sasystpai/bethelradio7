<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43701034-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php

if(!isset($_get['programa'])){


 include_once('br_Controles/ControlPrincipal.php');
  $OBJConocenos = new  ControlPrincipal;
  $OBJConocenos -> PaginaProgramacion();
}

else{

  echo "hola";

}

?>