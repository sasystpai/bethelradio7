<?php

class Pagina{

	function MostrarEncabezado($no_visible_elements){
?>
		<!DOCTYPE html>
		<html lang="es">
		<head>
		<meta charset="utf-8">
			<title>.: BethelRadio.fm :.</title>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- The styles -->
	<link id="bs-css" href="../br_includes/charisma-master/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
<!--plantilla charisma-->

	<link rel="stylesheet" href="../br_includes/charisma-master/css/bootstrap-responsive.css" >
	<link rel="stylesheet" href="../br_includes/charisma-master/css/charisma-app.css" >
	<link rel="stylesheet" href="../br_includes/charisma-master/css/jquery-ui-1.8.21.custom.css" >
	<link rel="stylesheet" href='../br_includes/charisma-master/css/fullcalendar.css' >
	<link rel="stylesheet" href='../br_includes/charisma-master/css/fullcalendar.print.css'  media='print'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/chosen.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/uniform.default.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/colorbox.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/jquery.cleditor.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/jquery.noty.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/noty_theme_default.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/elfinder.min.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/elfinder.theme.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/jquery.iphone.toggle.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/opa-icons.css'>
	<link rel="stylesheet" href='../br_includes/charisma-master/css/uploadify.css'>

	<link rel="shortcut icon" href="../includes/img/logo.png">
		</head>
		<body>
		
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="bethelradio" class="img-responsive" src="../includes/img/logo.png" /> <span>Bethelradio</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Cambiar Tema / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>

	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } 
			?>

	<div class="container-fluid">
		 
<?php
	}

	function MostrarPie(){

//echo "<script type='text/javascript' src='includes/charisma-master/js/jquery-ui-1.8.21.custom.min.js'></script>";

?>
		<!-- </div>/fluid-row -->
				

		<!--archivos javascript-->
<!-- jQuery 
	<script type="text/javascript" src="includes/charisma-master/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI 
	<script type="text/javascript" src="includes/charisma-master/js/jquery-ui-1.8.21.custom.min.js"></script>
	-->

	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery-ui-1.8.21.custom.min.js"><\/script>')</script>
	<!-- transition / effect library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-transition.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-transition.js"><\/script>')</script>

	<!-- alert enhancer library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-alert.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-alert.js"><\/script>')</script>

	<!-- modal / dialog library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-modal.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-modal.js"><\/script>')</script>	

	<!-- custom dropdown library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-dropdown.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-dropdown.js"><\/script>')</script>	

	<!-- scrolspy library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-scrollspy.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-scrollspy.js"><\/script>')</script>	

	<!-- library for creating tabs 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-tab.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-tab.js"><\/script>')</script>	
	
	<!-- library for advanced tooltip 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-tooltip.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-tooltip.js"><\/script>')</script>	
	
	<!-- popover effect library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-popover.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-popover.js"><\/script>')</script>	
	
	<!-- button enhancer library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-button.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-button.js"><\/script>')</script>	
	
	<!-- accordion library (optional, not used in demo) 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-collapse.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/bootstrap-collapse.js"><\/script>')</script>	
	
	<!-- carousel slideshow library (optional, not used in demo) 
	<script type="text/javascript" src="../includes/charisma-master/js/bootstrap-carousel.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="../includes/charisma-master/js/bootstrap-carousel.js"><\/script>') </script>
	<!-- autocomplete library -->
	<script type="text/javascript" src="../includes/charisma-master/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script type="text/javascript" src="../includes/charisma-master/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script type="text/javascript" src="../includes/charisma-master/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script type="text/javascript" src='../includes/charisma-master/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script type="text/javascript" src='../includes/charisma-master/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start 
	<script type="text/javascript" src="includes/charisma-master/js/excanvas.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.min.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.stack.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.resize.min.js"></script>
	-->

	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/excanvas.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.min.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.pie.min.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.stack.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.resize.min.js"><\/script>') </script>

	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="includes/charisma-master/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="includes/charisma-master/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="includes/charisma-master/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="includes/charisma-master/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="includes/charisma-master/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="includes/charisma-master/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="includes/charisma-master/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="includes/charisma-master/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin 
	<script src="includes/charisma-master/js/jquery.autogrow-textarea.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.autogrow-textarea.js"><\/script>')</script>

	<!-- multiple file upload plugin 
	<script src="includes/charisma-master/js/jquery.uploadify-3.1.min.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="../includes/charisma-master/js/jquery.uploadify-3.1.min.js"><\/script>')</script>

	<!-- history.js for cross-browser state change on ajax 
	<script src="includes/charisma-master/js/jquery.history.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="../includes/charisma-master/js/jquery.history.js"><\/script>')</script>

	<!-- application script for Charisma demo -->

	<script>window.jQuery || document.write('<script src="../includes/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	<script>window.jQuery || document.write('<script src="../includes/js/main.js"><\/script>') </script>
	
	<script>window.jQuery || document.write('<script src="../includes/charisma-master/js/charisma.js"><\/script>') </script>


		</body>
		</html>
<?php
	}
}

?>

<!--
<script type="text/javascript" src="includes/charisma-master/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-popover.js"></script>
	<!-- button enhancer library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-typeahead.js"></script>
	<!-- tour library 
	<script type="text/javascript" src="includes/charisma-master/js/bootstrap-tour.js"></script>
	<!-- library for cookie management 
	<script type="text/javascript" src="includes/charisma-master/js/jquery.cookie.js"></script>
	<!-- calander plugin 
	<script type="text/javascript" src='includes/charisma-master/js/fullcalendar.min.js'></script>
	<!-- data table plugin 
	<script type="text/javascript" src='includes/charisma-master/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start 
	<script type="text/javascript" src="includes/charisma-master/js/excanvas.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.min.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.stack.js"></script>
	<script type="text/javascript" src="includes/charisma-master/js/jquery.flot.resize.min.js"></script>
	

	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/excanvas.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.min.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.pie.min.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.stack.js"><\/script>') </script>
	<script>window.jQuery || document.write('<script src="includes/charisma-master/js/jquery.flot.resize.min.js"><\/script>') </script>

	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -
	<script src="includes/charisma-master/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler 
	<script src="includes/charisma-master/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view 
	<script src="includes/charisma-master/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library 
	<script src="includes/charisma-master/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin 
	<script src="includes/charisma-master/js/jquery.noty.js"></script>
	<!-- file manager library 
	<script src="includes/charisma-master/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin 
	<script src="includes/charisma-master/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch 
	<script src="includes/charisma-master/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin 
	<script src="includes/charisma-master/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin 
	<script src="includes/charisma-master/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax 
	<script src="includes/charisma-master/js/jquery.history.js"></script>
	<!-- application script for Charisma demo 
-->