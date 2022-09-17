<?php
//API que devuelve ciclos en formato json
$ip='localhost';
$usuario='root';
$password='';
$db_name='instituto';
$filas=array();

//conexion
//$conn=mysqli_connect($ip,$usuario,$password,$db_name);
$conn=new mysqli($ip,$usuario,$password,$db_name);
// Check connection
if($conn->connect_errno)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
  
$query= "SELECT * FROM CICLOS";
$query_execute=$conn->query($query);

        if($query_execute->num_rows)
//if ($result=mysqli_query($conn,$query))
  {
 // Fetch one and one row
 $c=0;
    while ($query_result= $query_execute->fetch_array())   {
    $filas[$c]=$query_result;
	$c++;
    }
   $ciclos= json_encode($filas); 
   print $ciclos;  
}
else{
    
}
//Si queremos crear un archivo json, sería de esta forma:

//$file = 'json/clientes.json';
//file_put_contents($file, $ikasleak);
//
//   

/*$c=0;
while($row=mysql_fetch_assoc($response)){
	$filas[$c]=$row;
	$c++;
	}
    
print json_encode($filas);*/

?>

