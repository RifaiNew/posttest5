<?php
session_start();

if(isset($_POST["usernamebaru"]) && isset($_POST["passwordbaru"])  ){
	$_SESSION['usernamebaru'] = $_POST["usernamebaru"];
	$_SESSION['passwordbaru'] = $_POST["passwordbaru"];
}

if($_SESSION['usernamebaru'] == $_SESSION['username'] && $_SESSION['passwordbaru'] == $_SESSION['password']) {?>
	<script type="text/javascript">
		window.alert("Berhasil Login");
		window.location.assign("index.php");
	</script>
<?php 
}

else if($_SESSION['usernamebaru'] == "admin" && $_SESSION['passwordbaru'] == "123"){ ?>
	<script type="text/javascript">
		window.alert("Berhasil Login");
		window.location.assign("data.php");
	</script>
<?php
}

else{?>
	<script type="text/javascript">
		window.alert("Gagal Login");
		window.location.assign("login.php");
	</script>
<?php 
} 
?>


