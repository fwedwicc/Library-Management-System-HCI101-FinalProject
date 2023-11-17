
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>
    <title>Library Management System  I  Login</title>
</head>
<body>
<div class="main-container">
    <div class="panel-1">
        <div class="content-1">
        <i class="fa-solid fa-book" id="icon"></i>
            <h1 id="company" style="padding-left: 45px;">Library Management System</h1>
            <h1 id="greetings"> Welcome to LMS!</h1>
            <img src="Login_Reading_Time.svg" id="img1" width="57%" height="57%" style="margin-top: 1rem; margin-left: 9.5rem;"><br><br>
            <h1 id="acc">Login to access your account.</h1>
        </div>
    </div>
    <div class="panel-2">
        <div class="content-2">
            <form action="login_check.php" method="post" id="content" style="line-height: rem;">
                <h1 style="padding-bottom: 12px;">Log in</h1>
                <?php if (isset($_GET['error'])) { ?>
    <p style="color: red; font-size: 14px; margin-left:1rem; "><?php echo $_GET['error']; ?></p>
  <?php } ?>


                        <i class="fa-solid fa-user" style="padding-right: 7px;"></i>
                Username:<br> 
                        <input type="text" name="email" id="textbox"><br><br>
                        <i class="fa-solid fa-unlock" style="padding-right: 10px;"></i>Password:<br>
                        <input type="password" name="password" id="textbox"><br>
                    <br><br><br> 
		  <button type="submit" name="login"id="button">Login</button><br><br>
            </form>
        </div>
    </div>
</div>
</form>

<style>
body {
    background: linear-gradient(107.5deg, #ABABAB -3.09%, #E8E8E8 103.96%);
    box-shadow: -20px 100px 100px rgba(0, 0, 0, 0.25);
}    
.main-container{
    filter: drop-shadow(30px 30px 30px rgba(0, 0, 0, 0.6)) drop-shadow(-30px -30px 18px #FFFFFF);
    left: 20%;
    top: 50%;
    position: fixed;
    transform: translate(-10%, -10%); 
}
.panel-1{
    background: linear-gradient(120.15deg, #3C2A21 -18.97%, #1A120B 56.96%);
    border-radius: 40px;
    position: absolute;
    margin-left: 11.6rem;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 510px;
    height: 584px;
    z-index: 1;
    animation: panel-1-load 1.6s;
}
@keyframes panel-1-load {
    0% {
        margin-left: -12rem;
    }
}
.panel-2{
    background: linear-gradient(239.37deg, #1A120B -18.46%, #3C2A21 67.09%);
    border-radius: 40px;
    width: 580px;
    height: 584px;
    position: absolute;
    margin-left: 40rem;
    top: 50%;
    transform: translate(-50%, -50%);
    animation: panel-2-load 1.6s;
}
@keyframes panel-2-load {
    0% {
        margin-left: 50%;
    }
}
.content-1{
    margin-top: -4rem;
    margin-left: -11.5%;
    color: #F0F0F0;
    font-family: 'Varela Round', sans-serif;
    font-size: 14px;
    animation: content-1-load 1.5s;
}
@keyframes content-1-load {
    0% {
        opacity: 0%;
    }
    20% {
        opacity: 0%;
    }
    30% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
.content-2{ 
    margin-top: 45px;
    margin-left: 35%;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
    animation: content-2-load 1.4s;
}
@keyframes content-2-load {
    0% {
        transform: translateX(-80%);
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#content {
    line-height: 25px;
    margin: 82px 0 0 16px;
    animation: content-load 1.4s;
}
#textbox {
    box-sizing: border-box;
    border: 1px solid #C0C0C0;
    border-radius: 6px;
    width: 234px;
    height: 34px;
    background: none;   
}
h1 {
    margin-top: 37%;
    margin-left: 18%;
    font-size: 30px;
    font-family: 'Varela Round', sans-serif;
    font-weight: 10;
}
#button {
    margin-left: 17.1%;
    background: #1A120B;
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.3);
    border-radius: 7px;
    border-style: none;
    font-size: 12px;
    width: 100px;
    height: 41px;
    color: #898989;
    transition: 0.6s;
    font-family: 'Varela Round', sans-serif;
}
#button:hover {
    transition: 0.6s;
    background: #100A04;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    cursor: pointer;
}
#checkbox{
    margin-right: 10px; 
    margin-top: 9px;
}
#icon {
    position: fixed; 
    margin-left: 9.4rem; 
    font-size: 24px;
    animation: icon-load 1.4s;
}
@keyframes icon-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#company{
    font-family: 'Varela Round', sans-serif;
    color: #C0C0C0;
    margin-top: 8.5rem;
    margin-left: 10rem;
    font-size: 18px;
    animation: company-load 1.4s;
}
@keyframes company-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    10%{
        opacity: 0%;
    }
    20%{
        opacity: 0%;
    }
    50%{
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#greetings{
    font-size: 31px;
    margin-left: 9.5rem;
    color: #C0C0C0;
    margin-top: 4rem;
    animation: greetings-load 1.7s;
}
@keyframes greetings-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    10%{
        opacity: 0%;
    }
    20%{
        opacity: 0%;
    }
    50%{
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
#acc{
    font-size: 16px;
    margin-top: 0.1rem;
    color: #C0C0C0;
    margin-left: 9.5rem;
    animation: acc-load 2s;
}
@keyframes acc-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}

input[type=text] {
    padding-left: 0.7rem;    
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;  
}
input[type=password] {
    padding-left: 0.7rem;    
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;  
}
input[type=radio] {
  accent-color: gray;
  color: #C0C0C0;
}
input[type='checkbox'] {
    accent-color: gray;
}
#img1{
    animation: img1-load 2s;
}
@keyframes img1-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
</style>
</body>
</html>