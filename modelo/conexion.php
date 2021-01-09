<?php

$connect = new mysqli("instancia-demo4db.cyfzx2smi2wv.us-east-2.rds.amazonaws.com","admin","Anonnymous3","demo4db");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}