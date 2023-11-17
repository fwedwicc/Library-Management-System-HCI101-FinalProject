<?php
session_start();
require ('db.php');
if(isset($_POST['delete_employee'])){
    $id=$_POST['employee_id'];
    $sql="DELETE from accounts where id = '$id'";
    $result= mysqli_query($conn,$sql); 
    if(mysqli_affected_rows($conn) > 0){
        header("Location:admin_view_employee_s_data.php?success= Employee has been deleted");
        exit();
    }
    else{
        header("Location:admin_view_employee_s_data.php?error= Invalid Employee ID");
        exit();
    }
}
if(isset($_POST['delete_book'])){
    $id=$_POST['book_id'];
    
    $sql="DELETE from books where id = '$id'";
    $result= mysqli_query($conn,$sql); 
    if(mysqli_affected_rows($conn) > 0){
        header("Location:admin_view_book_s_data.php?success= Book has been deleted");
        exit();
    }
    else{
        header("Location:admin_view_book_s_data.php?error= Invalid Book ID");
        exit();
    }
}
if(isset($_POST['delete_borrower'])){
    $id=$_POST['borrower_id'];
    
    $sql="DELETE from borrower where id = '$id'";
    $result= mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) > 0) {
        header("Location: admin_borrower_s_data.php?success=Borrower has been deleted");
        exit();
    } else {
        header("Location: admin_borrower_s_data.php?error=Invalid Borrower ID" );
        exit();
    }

   
}
if(isset($_POST['lib_delete_borrower'])){
    $id=$_POST['borrower_id'];
    
    $sql="DELETE from borrower where id = '$id'";
    $result= mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) > 0){
        header("Location:librarian_view_borrower_s_data.php?success= Borrower has been deleted");
        exit();
    }
    else{
        header("Location:librarian_view_borrower_s_data.php?error= Invalid Borrower ID");
        exit();
    }
   
}

if(isset($_POST['update_employee'])){
    $id=$_POST['employee_id'];
    $check_query = "SELECT * FROM accounts WHERE id = '$id'";
    $result = mysqli_query($conn, $check_query);
            if(mysqli_num_rows($result) == 0) {
                header("Location: admin_view_employee_s_data.php?error=Invalid employee ID");
                exit();
            }
            else{
                $_SESSION['employee_id']=$id;
                header("Location:admin_update_employee_s_data.php?id=".$_SESSION['employee_id']);
                exit();
            }
}
if(isset($_POST['new_employee'])){
    $id=$_SESSION['employee_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $type=$_POST['type'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpass=$_POST['confirm'];
    $sql= "UPDATE accounts SET fname = '$fname', lname = '$lname', contact = '$contact', type = '$type',username = '$username',  password = '$password'
    WHERE id = '$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) > 0){
        header("Location:admin_employee_s_data.php?success= Employee has been Updated");
        session_destroy;
        exit();
    }
    else{
        header("Location:admin_employee_s_data.php?error= Employee has not Updated");
        
        session_destroy;
        exit();
    }
}
if(isset($_POST['update_book'])){
    $id=$_POST['book_id'];
    $check_query = "SELECT * FROM books WHERE id = '$id'";
    $result = mysqli_query($conn, $check_query);
            if(mysqli_num_rows($result) == 0) {
                header("Location: admin_view_book_s_data.php?error=Invalid Book ID");
                exit();
            }
            else{
                $_SESSION['book_id']=$id;
                header("Location:admin_update_book_s_data.php?id=".$_SESSION['book_id']);
                exit();
            }
}
if(isset($_POST['new_book'])){
    $id=$_SESSION['book_id'];
    $bname=$_POST['bname'];
    $bgenre=$_POST['bgenre'];
    $bauthor=$_POST['bauthor'];
    $bdate=$_POST['bdate'];
    $bpublisher=$_POST['bpublisher'];
    $bqty=$_POST['bqty'];
    $bshelf=$_POST['bshelf'];
    $sql= "UPDATE books SET 
      name = '$bname', 
      genre = '$bgenre', 
      author = '$bauthor', 
      published = '$bdate', 
      publisher = '$bpublisher', 
      quantity = '$bqty', 
      shelf = '$bshelf'
    WHERE 
      id = $id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) > 0){
        header("Location:admin_book_s_data.php?success= Book has been Updated");
        session_destroy;
        exit();
    }
    else{
        header("Location:admin_book_s_data.php?error= Book has not Updated"); 
        session_destroy;
        exit();
    }
}

if(isset($_POST['lib_update_borrower'])){
    $id=$_POST['borrower_id'];
    $check_query = "SELECT * FROM borrower WHERE id = '$id'";
    $result = mysqli_query($conn, $check_query);
            if(mysqli_num_rows($result) == 0) {
                header("Location: librarian_view_borrower_s_data.php?error=Invalid Borrower ID");
                exit();
            }
            else{
                $_SESSION['borrower_id']=$id;
                header("Location:librarian_update_borrower_s_data.php?id=".$_SESSION['borrower_id']);
                exit();
            }
}
if(isset($_POST['new_borrower'])){
    $id=$_SESSION['borrower_id'];
    $borrowers_fname=$_POST['borrowers_fname'];
    $borrowers_lname=$_POST['borrowers_lname'];
    $borrowers_address=$_POST['borrowers_address'];
    $borrowers_contact=$_POST['borrowers_contact'];
    $borrowers_email=$_POST['borrowers_email'];
    $borrowers_gender=$_POST['borrowers_gender'];
    $borrowers_age=$_POST['borrowers_age'];
    $sql= "UPDATE borrower
    SET 
      fname = '$borrowers_fname', 
      lname = '$borrowers_lname', 
      address = '$borrowers_address', 
      contact = '$borrowers_contact', 
      email = '$borrowers_email', 
      gender = '$borrowers_gender', 
      age = '$borrowers_age'
    WHERE 
      id = $id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) > 0){
        header("Location:librarian_borrower_s_data.php?success= Borrower has been Updated");
        session_destroy;
        exit();
    }
    else{
        header("Location:librarian_borrower_s_data.php?error= Borrower has not Updated"); 
        session_destroy;
        exit();
    }

}
