<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>funtioner</title>
</head>
<?php 
include 'magi.php'
?>


<li 
  <?php 
  	$i_ran_function= hent_menu(2, $con);
  	foreach($i_ran_function as $bi)
  		{
  			if ($_GET['page'] == $bi['kategori_id'])
				{
					echo 'class="active" ';
				} 
	?>
>
    <a href="index.php?page=
        <?php echo $bi['kategori_id']; ?>">
        <?php echo $bi['kategori_navn']; ?>
    </a>
</li>
            <?php }?>

<body>
<?php 

//$id = id();

//echo $id;

$tal = vis_array();
foreach($tal as $number)
{
	echo $number . "<br/>";
}
//$variable = lav_tal();
//echo $variable;
?>

</body>
</html>

