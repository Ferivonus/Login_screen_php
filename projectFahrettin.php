<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/myHomework.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
    <script src="javaScript/javascriptCodes.js"></script>
    <title>my Homework 1</title>
</head>
<body>
    <ul class="topnav" id="myTopNavbar">
      <li><a href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a href="MyBlog.php">Blog</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Projects</a>
            <div class="dropdown-content">
                <a href="project1.php">Project 1</a>
                <a href="project2.php">Project 2</a>
                <a href="project3.php">Project 3</a>
                <a class="active" href="projectFahrettin.php">Form Homework</a>

            </div>
    </li>
    <li class="right"><a href="#about">About</a></li>
    <li class="iconTop"><a style="font-size:16px;" href="javascript:void(0);" onclick="myFunctionTop()">&#9776;</a></li>

    </ul>
    <?php
        $passwordCode = $UsernameCode = $UsernameError = $PasswordError = " ";
        $generalError = $empty = ""; 

if(isset($_POST['submit']))
{
    $UsernameCode = $_POST['username'];
    $passwordCode = $_POST['password'];
    if (($empty == $UsernameCode) || ( $empty == $passwordCode))
    {
        if($empty == $UsernameCode)
        {
            $UsernameError = "Username is required";
            

        }
        if($empty == $passwordCode)
        {
            $PasswordError = "password is required";

        }
    }
    elseif (("ferivonus" != $UsernameCode) || ("code" != $passwordCode)) 
    {
        $generalError = "You wrote wrong !!";
    }
    elseif (("ferivonus" == $UsernameCode) && ("code" == $passwordCode))
    {
        header("location: me.php"); 
        exit;
    } 
}


?>
<div class="site">

    <h1 class="page-title">Everything will be better in future</h1>
    <div class="definition">
        <h2 class="contentTitle">my Homework</h2>
        <p class="contentMyText">Fahrettin Baştürk, 18243610023</p>
        <p class="contentMyText"> this is an basic form login application I did that with using php with simple html codes. In future I will fix the problem of cookies </p>

    </div>
    <div class="codeSide">
        <div class="justifyMiddle">
        <form class="MyFrom" action="projectFahrettin.php" method="post" autocomplete="on" >
            <label for="username">Enter your username:</label><br>
            <input type="text" id="username" name="username" /> <span class="error"> <?php echo $UsernameError; ?> </span> <br> 
            <label for="password">Enter your password:</label> <br>
            <input type="password" id="password" name="password" /> <span class="error"> <?php echo $PasswordError; ?> </span> <br>
            <input  type="submit" name="submit" value="let me in">  <br> 
        </form>

        <span class="error"> <?php echo $generalError; ?> </span>
        <br>
        </div>
    </div>
    
    
    <br>
    <div class="botnav" id="myNavbar">
        <a href="#home" class="active">Home</a>
        <a href="tarotCards.php">Tarot meanings</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:16px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
</div>
    
</body>
</html>
