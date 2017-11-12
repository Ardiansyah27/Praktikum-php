<title></title>
</head>

<body>

<?php
class kendaraan{
	function doa1() 
	{
		$bus=array("HINO AK8<br>","MERCEDES-BENZ 1626L<br>","SCANIA K360IB");
     echo"Mesin Bus :<br>";
	 $d=0;
while($d<3){
	echo"$bus[$d]";
	$d++;}
		
	}
	function doa2()
	{
			$mobil=array("apansa ","senia ","kuda ","singo melet ");
	echo"nama mobil<br>";
	$e=0;
	while($e<4){
		echo"$mobil[$e]";
		$e++;
	}

	
	}
	
}
 
$a=90909;
$fungsibaru = new kendaraan();
if($a==1)
{
	$fungsibaru->doa1();
}
else if ($a==2)
{
	$fungsibaru->doa2();
}
else
{
	echo "Maaf di daftar tidak tersedia";
}
?>

</body>
</html>