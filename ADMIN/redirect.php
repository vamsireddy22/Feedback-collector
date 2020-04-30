<?php
session_start();
if(isset(($_POST['send'])))
{
	session_destroy();
	echo '<script>window.location.href="../ADMIN/front.html"</script>';
}
?>