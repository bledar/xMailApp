<?php 
	if(isset($_POST['marresi'])&&isset($_POST['derguesi'])&&isset($_POST['subjekti'])&&isset($_POST['teksti'])){
		
		$marresi=$_POST['marresi'];
		$dergusi=$_POST['derguesi'];
		$subjekti=$_POST['subjekti'];
		$teksti=$_POST['teksti'];
		$kokaMSG="To :".$marresi;
		$kokaMSG.="From:".$dergusi;

		mail($marresi, $subjekti, $teksti, $kokaMSG);
		
		echo"Marresi: ".$_POST['marresi'];
		echo"Derguesi: ".$_POST['derguesi'];
		echo"Subjekti: ".$_POST['subjekti'];
		echo"Teksti: ".$_POST['teksti'];



	
	}else {

	echo "gjana kot";	
	}

?>