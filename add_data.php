<?php 
	session_start();
	require ('db.php');
	if(isset($_POST['add_employee'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$contact=$_POST['contact'];
		$type=$_POST['type'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$confirmpass=$_POST['confirm'];
		
		$check = "SELECT * FROM accounts WHERE username ='$username'";
		$checkresult= mysqli_query($conn,$check);
		$row_count= mysqli_num_rows($checkresult);
				if($row_count >0){
					header("Location:admin_employee_s_data.php?error= Username has already been used");

				}
				elseif($password==$confirmpass){
			
					$sql ="INSERT INTO accounts(fname,lname,contact,type,username,password)VALUES('$fname','$lname','$contact','$type','$username','$password')";
					$result=mysqli_query($conn,$sql);
					if($result){
						header('Location:admin_employee_s_data.php?success=Employee has been added');
					}
				
	
			}
		
    }
	if(isset($_POST['add_book'])){
		$bname=$_POST['bname'];
		$bgenre=$_POST['bgenre'];
		$bauthor=$_POST['bauthor'];
		$bdate=$_POST['bdate'];
		$bpublisher=$_POST['bpublisher'];
		$bqty=$_POST['bqty'];
		$bshelf=$_POST['bshelf'];
		$status="available";
		$check = "SELECT * FROM books WHERE shelf ='$bshelf'";
		$checkresult= mysqli_query($conn,$check);
		$row_count= mysqli_num_rows($checkresult);
				if($row_count >0){
					header("Location:admin_book_s_data.php?error= Book has already been added");

				}
				else{
			
					$sql = "INSERT INTO books(name,genre,author,published,publisher,quantity,shelf,status) VALUES(?,?,?,?,?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssssiis", $bname, $bgenre, $bauthor, $bdate, $bpublisher, $bqty, $bshelf,$status);
$result = mysqli_stmt_execute($stmt);
if ($result) {
    header('Location: admin_book_s_data.php?success=Book has been added');
}
				
	
			}
		
    }
	//create table borrower(id int PRIMARY KEY AUTO_INCREMENT,fname varchar(100),lname varchar(100),address varchar(100),contact varchar(100),email varchar(100),gender varchar(100), age int);
	if(isset($_POST['add_borrower'])){
		$borrowers_fname=$_POST['borrowers_fname'];
		$borrowers_lname=$_POST['borrowers_lname'];
		$borrowers_address=$_POST['borrowers_address'];
		$borrowers_contact=$_POST['borrowers_contact'];
		$borrowers_email=$_POST['borrowers_email'];
		$borrowers_gender=$_POST['borrowers_gender'];
		$borrowers_age=$_POST['borrowers_age'];
		
		$check = "SELECT * FROM borrower WHERE email ='$borrowers_email'";
		$checkresult= mysqli_query($conn,$check);
		$row_count= mysqli_num_rows($checkresult);
				if($row_count >0){
					header("Location:librarian_borrower_s_data.php?error= Borrower has already been added");

				}
				else{
			
					$sql ="INSERT INTO borrower(fname,lname,address,contact,email,gender,age)VALUES('$borrowers_fname','$borrowers_lname','$borrowers_address','$borrowers_contact','$borrowers_email','$borrowers_gender','$borrowers_age')";
					$result=mysqli_query($conn,$sql);
					if($result){
						header('Location:librarian_borrower_s_data.php?success=Borrower has been added');
					}
				
	
			}
		
    }
