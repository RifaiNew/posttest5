<?php
session_start();

if(isset($_POST["username"]) && isset($_POST["password"])  ){
	$_SESSION['username'] = $_POST["username"];
	$_SESSION['password'] = $_POST["password"];
	$_SESSION['nohp'] = $_POST["nohp"];

?>
	<script type="text/javascript">
		window.location.assign("login.php");
	</script>

<?php
}
?>