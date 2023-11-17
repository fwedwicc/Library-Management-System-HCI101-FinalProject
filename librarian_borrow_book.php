<?php
require('db.php');
	session_start();
  

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f4990c5be.js" crossorigin="anonymous"></script>
    <title>Librarian Form  I  Borrow Book</title>
</head>
<body>
<div class="main-container">
    <div class="panel-2">
        <div id="sign-out">
            <a href="librarian_borrower_s_data.php" id="efct">Back</a><i class="fa-solid fa-arrow-right-from-bracket"></i>
        </div>
        <div class="flex-container">
            <div class="content-2">
                <h1>Borrow Book</h1>
                <ul>
                    <li>Borrower's ID:    --- </li>
                    <li>First Name:   ---</li>
                    <li>Last Name:   ---</li>
                    <li>Address:   ---</li>
                    <li>Contact:   ---</li>
                    <li>Borrow Date:    ---</li>
                    <li>Due Date:    ---</li>
                </ul>
                <p>Borrowers</p>
                    <form action="" id="search-bar">
                        <input type="text" placeholder="Search" id="search-bar">
                        <button type="submit" id="search-button">
                            <i class="fa-solid fa-magnifying-glass" style="margin-right: 1.1rem;"></i>
                        </button>
                    </form>
                <br>
                <table>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Book Genre</th>
                            <th>Author</th>
                            <th>Published Date</th>
                            <th>Publisher</th>
                            <th>Quantity</th>
                            <th>Shelf Number</th>
                        </tr>
                        <tr>
                            <td></td>
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
            </div>



            <div class="content-1">
                <ul>
                    <li>Book ID:    --- </li>
                    <li>Book Name:   ---</li>
                    <li>Book Genre:   ---</li>
                    <li>Author:   ---</li>
                    <li>Publisher:   ---</li>
                    <li>Quantity:    ---</li>
                    <li>Remarks:    ---</li>
                </ul>
                <p>Books</p>
                <form action="" id="search-bar">
                    <input type="text" placeholder="Search"  id="search-bar">
                    <button type="submit" id="search-button">
                        <i class="fa-solid fa-magnifying-glass" style="margin-right: 1.1rem;"></i>
                    </button>
                </form>
                <br>
                <table>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Book Genre</th>
                            <th>Author</th>
                            <th>Published Date</th>
                            <th>Publisher</th>
                            <th>Quantity</th>
                            <th>Shelf Number</th>
                        </tr><?php
$sql="SELECT * FROM books";
$result=mysqli_query($conn, $sql);
if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    $id=$row['id'];
    $name=$row['name'];
    $genre=$row['genre'];
    $author=$row['author'];
    $published=$row['published'];
    $publisher=$row['publisher'];
    $quantity=$row['quantity'];
    $shelf=$row['shelf'];
    echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$genre.'</td><td>'.$author.'</td><td>'.$published.'</td><td>'.$publisher.'</td><td>'.$quantity.'</td><td>'.$shelf.'</td><tr>';
}
}?>
                        
                </table>        
            </div>
        </div>
        <div class="toggle-buttons">                          
            <input type="submit" name="" id="button" value="Borrow" style="margin-right: 2.5rem;">
            <input type="submit" name="" id="button" value="View reports" style="margin-right: 2.5rem;">
            <input type="submit" name="" id="button" value="Clear">
        </div>
    </div>
</div>
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
.panel-2{
    background: linear-gradient(239.37deg, #1A120B -18.46%, #3C2A21 67.09%);
    border-radius: 40px;
    width: 83rem;
    height: 630px;
    position: absolute;
    margin-left: 29rem;
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
    margin: 2.4rem 0 0 4.5rem;
    animation: content-2-load 1.4s;
    transition: 2s;
}
@keyframes content-2-load {
    0% {
        transform: translateX(-60%);
        opacity: 0%;
    }
    30% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
.content-1{
    margin-left: 8rem;
    margin-top: 5.2rem;
    animation: content-1-load 1.4s;
}
@keyframes content-1-load {
    0% {
        transform: translateX(-60%);
        opacity: 0%;
    }
    30% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
}
table, td, th {
    border: 1px solid #3C2A21;
    font-size: 12px;
    color: #1A120B;
    font-family: 'Varela Round', sans-serif;
    padding: 2px;
}
table {
    border-collapse: collapse;
    width: 119%;
    background-color: #C0C0C0;
    border-radius: 16px;
    text-align: center;
    filter: drop-shadow(-30px 30px 70px #1A120B);
}
.ttable{
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  overflow: hidden;
}
div::-webkit-scrollbar {
  width: 0;
  height: 0;
}

div::-webkit-scrollbar-thumb {
  background-color: transparent;
}
.flex-container{
    display: flex;
}
#sign-out {
    float: right;
    font-size: 13px;
    text-indent: 11px;
    cursor: pointer;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    margin: 4rem 5rem 0 0;
    animation: sign-out-load 1.4s;
}
@keyframes sign-out-load {
    0% {
        transform: translateX(-60%);
        opacity: 0%;
    }
    30% {
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
ul li {
    list-style: none;
    margin-left: -2.2rem;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    font-size: 14px;
    line-height: 1.5rem;
}
p {
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
    font-size: 18px;
    position: fixed;
    margin: 2px;
}
#search-bar input[type=text] {
    border-style: none;
    background: #D9D9D9;
    width: 19rem;
    height: 24px;
    margin-top: -2.8rem;
    padding-left: 9px;
    font-size: 12px;
    border-radius: 7px 0 0 7px;
    color: #1A120B;
    font-family: 'Varela Round', sans-serif;
    margin-left: 11.3rem;
}
#search-bar{
    margin-right: -5rem;
}
#search-button {
    border-style: none; 
    cursor: pointer; 
    margin-top: -3px; 
    float: right;
    padding: 6.7px; 
    padding-left: 1.7rem; 
    border-radius: 0 7px 7px 0px;
    color: #F0F0F0;
    background: #45301E;
    transition: 0.4s;
    height: 28px;
}
#search-button:hover {
    transition: 0.4s;
    background: #67482D;
    box-shadow: 10px 10px 20px #120C08;
}
.toggle-buttons {
    float: right;
    margin-right: 6rem;
    margin-top: 2.6rem;
    animation: toggle-buttons-load 1.4s;
}
@keyframes toggle-buttons-load {
    0% {
        transform: translateX(-60%);
        opacity: 0%;
    }
    30% {
        opacity: 0%;
    }
    100% {
        opacity: 100%;
    }
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

#sign-out {
    font-size: 13px;
    text-indent: 11px;
    cursor: pointer;
    color: #C0C0C0;
    font-family: 'Varela Round', sans-serif;
}
a {
    font-family: 'Varela Round', sans-serif;
    color: #C0C0C0;
    font-size: 13px;
    text-decoration: none;
    line-height: 2rem;
    padding: 12px;
}
</style>
</body>
</html>