<?php
require('db.php');
	session_start();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>
    <title>Admin Form  I  Reports</title>
</head>
<body>
    <div class="main-container">
        <div class="panel-1">
            <div class="content-1">
                <div id="img2">
                    <img src="Admin_Male_Avatar.svg" width="40%" height="40%">
                </div>
                <h1 id="admin" style="text-align: center;">Admin</h1>
                <div class="buttons">
                    <br>
                    <hr><a href="admin_employee_s_data.php" id="efct">Employee's Data</a><hr>
                    <a href="admin_book_s_data.php" id="efct">Book's Data</a><hr>
                    <a href="admin_borrower_s_data.php" id="efct">Borrower's Data</a><hr>
                    <a href="admin_reports.php" id="efct">Reports</a><hr>
                </div>
            </div>
        </div>
        <div class="panel-2">
            <div class="content-2">
                <h1>Reports</h1><br>
                <p>Admin Form's Reports</p>
                    <div id="sign-out">
                    <a href="login.php" id="sing">Sign Out</a><i class="fa-solid fa-arrow-right-from-bracket"></i> 
                    </div>
                <form action="" id="content"> 
                <table>
                    <tr>
                        <th>Borrower's Name</th>
                        <th>Book Name</th>
                        <th>Book Genre</th>
                        <th>Borrowed Date</th>
                        <th>Return Date</th>
                        <th>Due Date</th>
                        <th>Quantity</th>
                        <th>Penalty</th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>    
                </form>
            </div>
        </div>
    </div>
<?php

?>
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
    margin-left: 2.4rem;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 430px;
    height: 584px;
    z-index: 1;
    animation: panel-1-load 1.4s;
}
@keyframes panel-1-load {
    0% {
        margin-left: -30rem;
    }
}
.panel-2{
    background: linear-gradient(239.37deg, #1A120B -18.46%, #3C2A21 67.09%);
    border-radius: 40px;
    width: 910px;
    height: 584px;
    position: absolute;
    margin-left: 40rem;
    top: 50%;
    transform: translate(-50%, -50%);
    animation: panel-2-load 1.4s;
}
@keyframes panel-2-load {
    0% {
        margin-left: -14rem;
    }
}
.content-2{
    margin-left: 9rem;
    margin-top: 4rem;
    animation: content-2-load 1.4s;
}
@keyframes content-2-load {
    0% {
        transform: translateX(-30%);
        opacity: 0%;
    }
    30% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
.buttons{
    text-align: center;
    animation: buttons-load 1.4s;
}
@keyframes buttons-load {
    0% {
        margin-top: 16rem;
        opacity: 0%;
    }
    50% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
a {
    font-family: 'Varela Round', sans-serif;
    color: #C0C0C0;
    font-size: 17px;
    text-decoration: none;
    line-height: 2rem;
    padding: 12px;
}
hr {
    border: 0.2px solid rgba(255, 255, 255, 0.17);
    height: -20px;
    width: 12rem;
}
#img2 {
    text-align: center;
    margin-top: 3.5rem;
    animation: img2-load 1.4s;
}
@keyframes img2-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}

h1 {
    font-weight: 10;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    font-size: 24px;
}
#sign-out {
    float: right;
    margin-right: 6rem;
    margin-top: -6.4rem;
    font-size: 13px;
    text-indent: 11px;
    cursor: pointer;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
}
.toggle-buttons {
    float: right;
    margin-right: 6rem;
    margin-top: 2.6rem;
}
#textbox {
    background: none;
    box-sizing: border-box;
    border: 1px solid #C0C0C0;
    border-radius: 5px;
    width: 8.1rem;
    height: 28.5px;
}
input[type=text] {
    padding-left: 0.7rem;  
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;  
}
#button {
    background: #1A120B;
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.3);
    border-radius: 7px;
    border-style: none;
    font-size: 12px;
    width: 100px;
    height: 41px;
    color: #898989;
    font-family: 'Varela Round', sans-serif;
    transition: 0.4s;
}
#button:hover {
    background: #100A04;
    transition: 0.4s;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    cursor: pointer;
}
#img3{
    margin-top: 2rem;
    margin-left: -4rem;
}
#efct {
    transition: 0.3s;
}
#efct:hover {
    background-color: #3C2A21;
    padding: 16px;
    padding-left: 80px;
    padding-right: 80px;
    border-radius: 15px;
}
#admin{
    animation: admin-load 1.4s;
}
@keyframes admin-load {
    0% {
        margin-top: 20rem;
        opacity: 0%;
    }
    50% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
p{
    font-size: 15px;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
}
table, td, th {
    border: 1px solid #3C2A21;
    font-size: 12px;
    color: #1A120B;
    font-family: 'Varela Round', sans-serif;
    padding: 5px;
}
table {
    border-collapse: collapse;
    width: 90%;
    background-color: #C0C0C0;
    border-radius: 20px;
    text-align: center;
    filter: drop-shadow(-30px 30px 70px #1A120B);
}
#sing {
    transition: 0.3s;
    font-size: 14px;
}
#sing:hover {
    background-color: #3C2A21;
    padding: 16px;
    border-radius: 8px;
}
#in {
    font-size: 14px;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    float: right;
    margin-right: 5rem;
    margin-top: 0.4rem;
}
input[type=text] {
    padding-left: 0.7rem;  
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;  
}
</style>
</body>
</html>