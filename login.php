<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logcheck.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="login" name="login" value="Login"></td>
				</tr>

				<tr>
                    <td>
                        <?php
                        if(isset($_POST['login'])){
                            $connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini_project');
                            $result = mysqli_query($connection, 'select * from registration_info');
                                $flag=0;
                                while($data = mysqli_fetch_assoc($result)) {
                                    // echo $data['ID'] ;
                                    // echo $data['Password'];
                                    
                                    if($data['ID'] === $_POST['uid'] && $data['Password'] === $_POST['upassword']) {
                                        echo "Login SUCCESSFULLY DONE";
                                        $flag=1;
                                }
                            }

                                if($flag==0) {
                                    echo "Try again with correct password and id ";
                                }
                            }
                        ?>
                    </td>
                </tr>
			</table>
		</fieldset>
	</form>
</body>
</html>