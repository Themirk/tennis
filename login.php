<?php
include('settings.php');
var_dump($db);
$cardNumber = $_POST['cardNumber'];
$cf = $_POST['cf'];



$sql = "SELECT * FROM users";

$res = mysqli_query($conn, $sql);

if(!$res)
{
    echo "no";
    die();
}
$righe = mysqli_num_rows($res);
if(mysqli_num_rows($res)>0)
{
    $row = mysqli_fetch_assoc($res);

		if(
			$cardNumber == 1234 && $cf == 'admin')
		{
			?>
			<script type="text/javascript">
                //reindirizzato a back office by Mirko
                //opterei per una pagina intermedia, ovvero login - backoffice - calendario
			window.location.href='prenotazioneAdmin.php';
			</script>
			<?php
		}
		else{		
?>
			<script type="text/javascript">
                //reindirizzato a calendario + form by Mirko
			window.location.href='prenotazioneForm.php';
			</script>
			<?php
		}
mysqli_close($conn);
}


