<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/myHomework.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
    <script src="javaScript/formJs.js"></script>
    <title>my Homework 1</title>
</head>
<body>

<div class="site">

    <h1 class="page-title">Everything will be better in future</h1>
    <div class="definition">
        <h2 class="contentTitle">my Homework</h2>
        <p class="contentMyText">Fahrettin Baştürk, 18243610023</p>
        <p class="contentMyText"> this is an basic form login application I did that with using JavaScript with simple html codes. </p>
        <p class="contentMyText"> This code a fully opening website page to taking accounts before taking inside of the website, with couples of error messages.</p>
        <p class="contentMyText"> With these, there is a format for username and password too, username and password's length have to between 5 and 20 with that, password at least have to be a special character and integer.</p>
    </div>
    <div class="codeSide">
<H2>Prototype:</H2>
        <div class="justifyMiddle">

        <form class="MyFrom" method="post" action="me.php" >
                <label for="username">username:</label><br>
                <input type="text" id="usernameTop" name="username" placeholder="Enter your username" /> <span id="UsernameErrorTop" class="error">  </span> <br> 
                <label for="password">password:</label> <br>
                <input type="password" id="passwordTop" name="password" placeholder="Enter your password" /> <span id="PasswordErrorTop" class="error">  </span> <br>
                <input type="submit" name="submit" value="Log me in" onclick=Stop()>
                <p id="generalErrorTop" class="error"> </p>
            </form>  
        </div>
        <br>
        </div>
        <div class="TheConclusion">
        <h3>So, The conclusion of this code is seeing and working like this:</h3> 
        </div>
        
        
        <div class="homework">
         <h2 >welcome to my website  ┬─┬ ノ( ゜-゜ノ)</h2>
         <h3 class="contentTitle">But do I know you?</h3>
        <div class="justifyMiddle">
        <form class="HomeworkForm" method="post" action="me.php" >
                <label for="username">username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" />  <span id="UsernameError" class="error"></span> <br>
                <label for="password">password:</label> <br>
                <input type="password" id="password" name="password" placeholder="Enter your password" />  <span id="PasswordError" class="error"></span> <br> 
                <input type="submit" name="submit" value="Log me in" onclick=LoginFunc()>
            </form>  
            <p id="generalError" class="error"> </p>
        </div>
        
        
        </div>
        </div>
        <div class="gitCodeAddress">
        <p>github link for this code: <a target="_blank" style="color: #ffd32a;" href="https://github.com/Ferivonus/username-and-password-php">I AM HERE</a></p>
    </div>


    <br>
    
</body>
</html>