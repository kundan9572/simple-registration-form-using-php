<?php  
//include connect.php page for database connection
Include('connect.php')
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['phone']==''|| $_REQUEST['birthdate']=='' || $_REQUEST['age']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(name,email,phone,birthdate,age) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['phone']."', '".$_REQUEST['birthdate']."', '".$_REQUEST['age']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}
?>
