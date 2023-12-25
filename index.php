<?php
$NAME=$_REQUEST['NAME'];
$PASSSWORD=$_REQUEST['PASSWORD'];

if(isset($_POST['btntest']))
{
$host="localhost";
$user = "root";
$password="";
$db="palestine";

@$conn = mysqli_connect ($host, $user, $password, $db);
$insert= "insert into form info values('$NAME,  ' $PASSWORD')" ;

if ($conn)
{
echo("<h1 style-'color:green';>  Done! </h1>");
}

else{

echo ("<h1 style='color:red';>  Failed!</h1>");

}
}

?>