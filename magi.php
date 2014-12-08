<?php 

$localhost= 'localhost';
$databasebruger ='root';
$databasepassword = '';
$databasenavn = 'iknowitdatabasetemplate';

$con=mysqli_connect($localhost,$databasebruger,$databasepassword,$databasenavn); //definerer forbindelsen 
mysqli_set_charset($con, 'utf8');

if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
}


function printr($var)
{
	
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}
	
function id()
	{ 
	$pony = $_GET['page'];
	return $pony;
	}
	
function lav_tal()
    {
    $tal = '42';
	return $tal;	
    }
	
function vis_array()
	{
		$hent_array = array(1,2,3,4,5);
		return $hent_array;	
	}
	
	
function hent_menu($var, $con)
	{
		$hent_array = array();
		$sql = "SELECT * FROM kategori WHERE kategori_admin_menu = $var";    
   		$result = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_assoc($result))
			{
				$hent_array[] = $row;
				
			}
			return $hent_array;
	}
		?>