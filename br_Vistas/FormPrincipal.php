<?php
require_once('Pagina.php');
class FormPrincipal extends Pagina
{
	
	function MostrarFormPrincipal($entradas,$programa_actual)
	{  
          $titulo="Bethel Radio";
          $this->MostrarEncabezado($titulo);         //no cierra el head                    

          $fondo="fondo-nosotros";                   //Aqu{i se puede agregar css y script
          $this->MostrarMenu($fondo,"$programa_actual");               //Cierra el head y abre el body
          
          $this->MostrarSlider();
          $this->MostrarBotonesAcceso();
          $this->MostrarNuestrosProgramas();

          $this->MostrarNoticias($entradas);
          
          $this->MostrarRedesSociales();

	        $this->MostrarFoot();

	}//fin de function MostrarFormPrincipal


public function MostrarPaginaConocenos($programa_actual){

          $titulo="Bethel Radio: Conócenos";
          $this->MostrarEncabezado($titulo);         //no cierra el head
                                          //Aqu{i se puede agregar css y script
          //$fondo="fondo-nosotros";
          ?>
          <script type="text/javascript" src="br_includes/js/slider/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->

          <script type="text/javascript" src="br_includes/js/slider/jssor.core.js"></script>
          <script type="text/javascript" src="br_includes/js/slider/jssor.utils.js"></script>
          <script type="text/javascript" src="br_includes/js/slider/jssor.slider.js"></script>
          <script type="text/javascript" src="br_includes/js/slider/slider.js"></script>

          <link rel="stylesheet" type="text/css" href="br_includes/css/slider/slider.css">
          <?php
          $fondo="fondo-nosotros";
          $this->MostrarMenu($fondo,$programa_actual);

          $this->PhotoPortada();

          $this->MostrarFoot();

}

  function MostrarPaginaProgramacion($programa_actual){

          $titulo = "Bethel Radio: Horarios";
          $this -> MostrarEncabezado($titulo);

          $fondo="fondo-nosotros";
          $this->MostrarMenu($fondo,$programa_actual);

          $this-> MostrarProgramacionHorario();

          $this->MostrarFoot();

  }

  function MostrarPaginaFrecuencias($programa_actual){
          $titulo = "Bethel Radio: Frecuencias";
           $this -> MostrarEncabezado($titulo);

           ?>
           
           <script>
              function Departamento(str)
              {
              if (str=="")
                {
                document.getElementById("txtHint").innerHTML="";
                return;
                } 
              if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
                }
              else
                {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
              xmlhttp.onreadystatechange=function()
                {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                  {
                  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                  }
                }
              xmlhttp.open("GET","br_Controles/GetObtenerIdDepartamento.php?q="+str,true);
              xmlhttp.send();
              }
            </script>

           <?php

         
           $fondo="fondo-nosotros";
           $this->MostrarMenu($fondo,$programa_actual);

           $this->MostrarFrecuencias_Select();

           $this->MostrarFoot();


  }


    function MostrarPaginaProducciones($categoria, $programa_actual){

            $titulo = "Bethel Radio: Producciones";
            $this -> MostrarEncabezado($titulo);

            ?>
            <link rel="stylesheet" type="text/css" href="includes/dist/css/bootstrap.vertical-tabs.min.css">
            <link rel="stylesheet" type="text/css" href="includes/css/vertical.css">

            <?php


            $fondo="fondo-nosotros";
            $this->MostrarMenu($fondo,$programa_actual);

            //$this->EnEdicion();
            $this->MostrarProducciones($categoria);

            $this->MostrarFoot();
    }

    function MostrarPaginaColabora($programa_actual){

            $titulo = "Bethel Radio: Colabora";
            $this -> MostrarEncabezado($titulo);
            $fondo="fondo-nosotros";
            $this->MostrarMenu($fondo,$programa_actual);

            $this->Colabora();  

            $this->MostrarFoot();

    }

    function MostrarPaginaPeticiondeOracion($programa_actual){

            $titulo = "Bethel Radio: Petición de oración";
            $this -> MostrarEncabezado($titulo);
            $fondo="fondo-nosotros";
            $this->MostrarMenu($fondo,$programa_actual);

            $this->FormularioPeticionDeOracion();  

            $this->MostrarFoot();
    }

    function FormularioPeticionDeOracion(){

      ?>
      
<script language="JavaScript" type="text/javascript">
function contador (campo, cuentacampo, limite) { 
if (campo.value.length > limite) campo.value = campo.value.substring(0, limite); 
else cuentacampo.value = limite - campo.value.length; 
} 
</script>

      <div class="fondo-blanco">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <br>
    <br>
    <article>
      <h2 class="letra-azul neue-pro">Envíenos sus petición de oración</h2>
      
      <h3 class="letra-azul neue-pro col-md-offset-1">Complete el siguiente formulario</h3>
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <!-- ///////////////////// -->
          <form class="form-horizontal" name="form-peticiondeoracion" role="form" action="enviandopeticiondeoracion.php" method="POST">
          <br>
            <div class="well well-sm">
            <h4 class="">Datos principales</h4>
            <br/>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label bree">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required name="nombre" maxlength="80" placeholder="Escriba su nombre">
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Motivo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required name="motivo" maxlength="80" placeholder="Indique el motivo: por salud, familia, trabajo u otro">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Petición</label>
              <div class="col-sm-10">
                <textarea rows="8" class="form-control" onKeyDown="contador(this.form.peticion,this.form.remLen,500);" onKeyUp="contador(this.form.peticion,this.form.remLen,500);" required name="peticion" placeholder="Indique aquí su petición de oración"></textarea>
              </div>
            </div>

            <div class="form-group">
              <p class="col-sm-8 col-sm-offset-2  help-block pet_oracion">Tamaño máximo: 500 caracteres, le quedan</p>
              <div class="col-sm-2">
                  <input disabled="disabled" class="form-control pet" maxlength="3" size="3" name="remLen" value="500" type="text">
              </div>
            </div>

        
          <h4 class="">Datos complementarios<small> (no obligatorio)</small></h4>

          <div class="form-group">
          <h5 class="col-sm-6"><b>Desde donde nos escribe</b></h5>
              
              <div class="col-sm-10 col-md-offset-2">
                <input type="text" class="form-control" name="procedencia" maxlength="80" placeholder="Ej. Lima - Perú">
              </div>
           </div>

          <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" maxlength="60" placeholder="Indique su correo electrónico">
              </div>
           </div>

           <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Teléfono</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" name="telefono" maxlength="15" placeholder="Ej. 991026416">

              </div>
           </div>
          
            <br>

           <div class="form-group">
             <div class="col-sm-offset-9 col-sm-3">
               <button type="submit" name="enviar" class="btn btn-success">Enviar</button>
             </div>
           </div>

            </div>
          </form>
          <!-- /////////////////////-->
        </div>
        <div class="col-md-5">
        <br/>
          <img class="img-responsive img-thumbnail" src="includes/img/peticiondeoracion2.png">
        </div>
      </div>

      <br>
      <br>
      <aside>
        <a target="_blank" href="https://www.facebook.com/bethelradio"><img src="includes/img/facebook-social.png"></a>
        <a target="_blank" href="https://twitter.com/bethelradio"><img src="includes/img/twitter-social.png"></a>
      </aside>
    </article>

    <br/>
    </div>
  </div>
</div>



      <?php

    }


}//fin de class

?>


