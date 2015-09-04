<?php
	if(!empty($POST['dias'])){
		$nDias = $POST['dias'];
		$kmPorDia = 8765812 * 24;
		$total = $nDias * $kmPorDia;
		header("Location: index.php?velocidad=".$total);
	}
 ?>

