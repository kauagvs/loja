<?php  

	session_start();
	function mostrar_alerta($tipo){
		if (isset($_SESSION[$tipo])) {

?>
	<p class="alert-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
<?php 
			unset($_SESSION[$tipo]);
		}
	}
?>