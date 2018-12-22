<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>du har sålt dig till djävulen</title>
</head>
<body>
<?php
$user_name=$_GET['user_name'];
$user_mail=$_GET['user_mail'];
$telephone=$_GET['telephone'];
$user_message=$_GET['user_message'];
    
if(isset($_GET["user_name"]))
{
echo "välkommen htmlspecialchars($user_name) ";
}
else
{
echo "Du har inte skrivit något Namn";
}
if (isset($_GET["user_mail"]))
{
echo "htmlspecialchars($user_mail)";
}
else  
{
echo "Du har inte skivit någon E-mail";
}
    
if (isset($_GET['telephone']))
{
echo "htmlspecialchars($telephone)";
}
    
if (isset($_GET['user_message']))
{
echo "htmlspecialchars($user_message)";
}
?>
    </body>
    
        
</html>
