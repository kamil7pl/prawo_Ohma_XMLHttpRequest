<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prawo Ohma</title>
</head>
<body>
	
    <?php
	if(isset($_GET['natezenie']) && isset($_GET['napiecie'])){
	$natezenie=$_GET['natezenie'];
	$napiecie=$_GET['napiecie'];
	if($natezenie!=0 && $napiecie!=0){
	$opor=$napiecie/$natezenie;
	//$jsonOpor=json_encode($opor);
	//echo $jsonOpor;
	echo $opor;
	}
	else echo "Proszę podać natężenie różne od zera (dodatnie). Tak samo dla napięcia.";
	}
	?>
</body>
</html>
