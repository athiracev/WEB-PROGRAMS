
<html>
<body>
<?php
$name="";
$email="";
$phone="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$valid = true;

if(empty($name))
{
echo "<script>alert('please enter valid name')</script>";
$valid = false;
}
if(empty($email))
{
echo "<script>alert('please enter valid email')</script>";
$valid = false;
}
if(empty($phone))
{
echo "<script>alert('please enter valid phone number')</script>";
$valid = false;
}
if(valid)
{
$name = "";
$email = "";
$phone = "";
echo "<script>alert('submission sucessfully')</script>";
}
}
?>

<h1>	registration form</h1>
<form method="post" action="#">
Name:<input type="text"  name="name" value="<?php echo $name ?>">
Name:<input type="email"  name="email" value="<?php echo $email ?>">
Name:<input type="number"  name="phone" value="<?php echo $phone ?>">
<input type="submit">
</form>
</body>
</html>