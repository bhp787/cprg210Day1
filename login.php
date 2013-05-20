<?php
session_start;
$myUserid="bhp787";
$myPassword= md5("hallelujahBaby");
print($myPassword);

if (isset($_REQUEST['userid']))
{
    $md5Password = md5($)
}

if ($_REQUEST['userid']) == $myUserid && $md5Password == $myPassword)
{
    $_SESSION['loggedIn'] = "yes"
    
    // redirect user
}
else
{
    
}

?>

<html>
<head>
    <title>Login Page</title>
</head>

<body>
    <form>
        
        
    </form>


</body>
</html>
