
			function validateForm()
			{
			var x=document.forms["form-entrada"]["categoria"].value;
			//var y=document.forms["form-entrada"]["audio"].value;
			
			if (x==null || x=="")
			  {
			  alert("Debe elegir una categoria");
			  return false;
			  }

			  else{
			  	
				// if (y==null || y=="")
				  // {
				  // alert("Debe subir un audio");
				  // return false;
				  // }
			  }


			  ////////////////////////7

			  	selec=form-entrada.categoria.selectedIndex 
				if (form-entrada.categoria.options[selec].value=="0"){ 
				alert ("Debe elegir una categoría") 
				return false 
				} 
				return true 

			  //////////////////////////

			}

			function _validar(form){
				   if (form.categoria.options[form.categoria.selectedIndex].value == "0")
					    {
					    alert("Por favor, seleccione una opción válida");
					    //form.categoria.focus(); //return true;
					    return false
					    }
					//form.submit();
								}

			function __validar(form){

				selec=form.categoria.selectedIndex 
				if (form.categoria.options[selec].value=="0"){ 
				alert ("Debe elegir una categoría") 
				return false 
				} 
				//return true 

			}	

			function _validar(form)

			{
			    if (form.categoria.options[form.categoria.selectedIndex].value == "0")
			    {
			    alert("Por favor, seleccione una opción válida");
			    form.categoria.focus();
			    return false 
			    }
			    //return true;
			//form.submit();

			}

			function validar(){ 
			var frm = document.forms['form-entrada']['categoria'].selectedIndex 
			if (frm == "0")
				{ alert("Seleccione una categoría") 
		} 
			else{ document.form-entrada.submit(); }


		}

			function validar_seccion(){ 
			var frm = document.forms['form-entrada']['seccion'].selectedIndex 
			if (frm == "0")
				{ alert("Seleccione la sección de esta nueva categoría") 
		} 
			else{ document.form-entrada.submit(); }


		}