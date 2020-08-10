<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form action="regcheck.php" method="post">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm password"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>User Type</td>
                    <td><input type="text" name="user"></td>
                    <td><input type="text" name="admin"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="register" name="register" value="Register"></td>
					<td><input type="login" name="login" value="Login"></td>
				</tr>
				<tr>
                    <td>User Type [User/Admin]
                    <br>
                    <div>
                        <input type="radio" name="user" value="userradio" />User<br />
                        <input type="radio" name="user" value="adminradio" />Admin<br />
                    </div>
                    <hr>
                    </td>
                </tr>
				<?php
                        if(isset($_POST['uregister'])){
                            // $myfile = fopen("summertest.txt", "a") or die("Unable to open file!");;
                            $userID = $_POST['id'];
                            $userName = $_POST['name'];
                            $userEmail = $_POST['email']; 
                            $userPassword = $_POST['password'];
                            $userStatus = $_POST['user'];
                            echo $userStatus;

                            if($userStatus == 'userradio') {
                                $userStates = 'User';
                            } else {
                                $userStates = 'Admin';
                            }
                            // if( $_POST["userrad"].checked == true) {
                                
                            // }

                                // Testing DB Connection

                            $connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini_project'); 
                            if($connection-> connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 

                            $sql = "INSERT INTO registration_info(ID,NAME,EMAIL,Password,Type) VALUES ('".$userID."','".$userName."', '".$userEmail."', '".$userPassword."', '".$userStates."')";
                            if($connection->query($sql) === TRUE) {
                                echo "Registration Completed!";
                            } else {
                                echo "ERROR: " . $sql . "<br>" . $conn->error;
                            }
			</table>
		</fieldset>
	</form>
</body>
</html>