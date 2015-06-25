<?php
	include '../../procesos/base.php';
	require_once '../../phpexcel/PHPExcel-1.7.7/Classes/PHPExcel/IOFactory.php';
	conectarse();

	$lista = array();
	$cont_prod = 0;
	$data=1;
	$consulta = pg_query("select max(id_plan_cuentas)+1 from plan_cuentas;");
	while ($row = pg_fetch_row($consulta)) {
	    $cont_prod = $row[0];
	}

	$extension = explode(".", $_FILES["cargar_plan"]["name"]);

	$extension = end($extension);
	$type = $_FILES["cargar_plan"]["type"];
	$tmp_name = $_FILES["cargar_plan"]["tmp_name"];
	$size = $_FILES["cargar_plan"]["size"];
	$nombre = basename($_FILES["cargar_plan"]["name"], "." . $extension);

	$nombreTemp = "PCGE2011" . '.' . $extension;
	if(move_uploaded_file($_FILES["cargar_plan"]["tmp_name"], "plan/" . $nombreTemp)){
		$data = 1;
	}else{
		$data = 0;
	}
	if($data==1){	
		//cargamos el cargar_plan que deseamos leer
		$objPHPExcel = PHPExcel_IOFactory::load('plan/'.$nombreTemp);
		$objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		$contt=0;
		$cont = 0;
		foreach ($objHoja as $iIndice=>$objCelda) {						
			if($cont>=1){
				if($objCelda['A'] != ''){
					$lista[] = $objCelda['A'];
	    			$lista[] = $objCelda['B'];
	    			$lista[] = $objCelda['C'];
					$consulta = pg_query("select id_plan_cuentas from plan_cuentas where codigo_plan='".$objCelda['A']."'");
			    	while ($row = pg_fetch_row($consulta)) {
				        $contt++;
		    		}
		    		if ($contt == 0) {	 	    				    			
		    			if(pg_query("insert into plan_cuentas values('$cont_prod','".$objCelda['A']."','".$objCelda['B']."','".$objCelda['C']."','".$objCelda['D']."')")){
							$lista[] = '0';	    				
		    			}else{
		    				$lista[] = '2';
		    			}	        	
		    		} else {	        	
		    			$lista[] = '1';
		    		}													
				}				
	    	}
	    	$cont++;
		}	
	}	
	echo $lista = json_encode($lista);
	
?>
