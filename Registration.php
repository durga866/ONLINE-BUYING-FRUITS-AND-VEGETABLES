<?php     //start php tag
//include connect.php page for database connection
include('connect.php')
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='');
{
if($_REQUEST['username']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['confirmpassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into login(username,email,password,confirmpassword) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['confirmpassword']."')";
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