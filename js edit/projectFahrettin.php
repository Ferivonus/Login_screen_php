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

<div class="site">

    <h1 class="page-title">Everything will be better in future</h1>
    <div class="definition">
        <h2 class="contentTitle">my Homework</h2>
        <p class="contentMyText">Fahrettin Baştürk, 18243610023</p>
        <p class="contentMyText"> this is an basic form login application I did that with using JavaScript with simple html codes. </p>
        <p class="contentMyText"> which is for pop up application which is opening by a click. So, it's not for fully page</p>
    </div>
    <div class="codeSide">
        <div class="justifyMiddle">
        <form class="MyFrom" method="post" action="me.php" >
                <label for="username">username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" /> <span id="UsernameError" class="error">  </span> <br> 
                <label for="password">password:</label> <br>
                <input type="password" id="password" name="password" placeholder="Enter your password" /> <span id="PasswordError" class="error">  </span> <br>
                <input type="submit" name="submit" value="Log me in" onclick=LoginFunc()>
                <p id="generalError" class="error"> </p>
            </form>  
        </div>

        <span id="myError" class="error">  </span>
        <br>

    <span id="myWritingSide"></span>

        </div>
    </div>

    <script>
        //the function of checking password:
        function CheckingPassword(Password)
        {
            //adding format and number arrays with their checkers:
            var MyFormat = "<>$#!@%&^*()[]_+{}:;?|'\"\,./~-=`";
            var checkerFormat = false;
            var checkerNumber = false;
            var Numbers = "1234567890";

            //taking every char of password:
            for(let i = 0; i < Password.length; i++)
            {
                var charPassword = Password[i];
                //checking for special characters:
                for(let f=0; f < MyFormat.length ; f++)
                {
                    if(charPassword == MyFormat[f])
                    {
                        checkerFormat = true;
                    }
                }
                //checking last char of password:
                if(i+1 == Password.length)
                {
                    //checking last char with numbers:
                    for(let num =0; num < Numbers.length; num++)
                    {
                        if (charPassword == Numbers[num])
                        {
                            checkerNumber =true;
                        }
                    }
                }
            }
            if ( checkerFormat &&  checkerNumber)
                {
                    return true;
                    document.getElementById('generalError').innerHTML = "";
                }
                else {
                    return false;
                    document.getElementById('generalError').innerHTML = "Your Password is not useful for our website.";
                }
        }
        //Checking username and password on the website memory:
        function CheckingBoth(userName, Password)
        {
            //added memories on the website as username and password:
            let Website_userName = ['Ferivonus','Fahrettin'];
            let Website_Password = ['Co*de9','MyC*de8'];
            var Returner = false;
            //checking on memories with for loop:
            for (var i = 0; i < 2; i++)
            {
                if ((Website_userName[i] == userName) && (Website_Password[i] == Password)){
                    //if its true, it will break the for loop for making clear.
                    Returner =true;
                }
            }
            if(Returner==false)
            {
                //error code:
                document.getElementById('generalError').innerHTML = "I guess, you wrote wrong.";                
            }
            else{
                document.getElementById('generalError').innerHTML = "";
            }
            return Returner;
        }
        //Checking the operations of UsefulPassword and TrueAccount:
        function ChangingWebPage(UsefulPassword,TrueAccount)
        {
            if(UsefulPassword && TrueAccount )
            {
                //The website will change.
            }
            else{
                //The website will not change.
                event.preventDefault();

            }
        }

        function isSet(userName,Password){
            var controller = 2;
            var Empty="";
            
            if(userName == Empty)
            {
                
                controller --;
                //Type username Error:
                
                document.getElementById('UsernameError').innerHTML = "<br>Username is required";      
                          
            }
            else{
                document.getElementById('UsernameError').innerHTML = "";      

            }
            if(Password == Empty)
            {
                controller = controller - 1;
                document.getElementById('PasswordError').innerHTML = "<br>Password is required";                
            }
            else{
                document.getElementById('PasswordError').innerHTML = "";      

            }
            if(controller == 2){
                return true;
            }
            else {
                return false;
            }
        }
        

        function LoginFunc()
        {
            //starting with teaching to machine about the variables types:
            var userName ="", Password="";

            var UsefulPassword = true;
            var TrueAccount = false;
            var Setted = false;
             userName = document.getElementById('username').value;
            

             Password = document.getElementById('password').value;
             alert("alert message!!");
            Setted = isSet(userName, Password);
            
            if(Setted){
              //  UsefulPassword = CheckingPassword(Password);
                TrueAccount = CheckingBoth(userName, Password);
            }
            
            ChangingWebPage(UsefulPassword,TrueAccount);
        }
        





        
    </script>


    

    <br>
    
</body>
</html>