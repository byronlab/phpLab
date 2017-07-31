<?php
# Clase para cargar el contenido de cada sección

class EnlacesPaginas{

	public function enlacesPaginasModel ( $linkModel ){

		if( $linkModel == "registro" ||
		    $linkModel == "ingreso" ||
		    $linkModel == "usuarios" ||
		    $linkModel == "salir"){

			$module = "views/modules/".$linkModel.".php";

		}
		else if( $linkModel == "index")
		{

			$module = "views/modules/home.php";

		}
		else if ($linkModel == "ok")
		{

			$module = "views/modules/registro.php";

		}
		else if ($linkModel == "fallo")
		{

			$module = "views/modules/ingreso.php";

		}
		else if ($linkModel == "editar")
		{

			$module = "views/modules/editar.php";

		}
		else{

			$module = "views/modules/home.php";

		}

		return $module;

	}
}
?>