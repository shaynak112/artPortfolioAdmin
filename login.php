<?php

    //include 'header.php';
    //include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Admin Login</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-6'>


	
            <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                <span class="errorMessage" style="color:red"><?php if($username != ""){ echo $username; } ?></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                <span class="errorMessage" style="color:red"><?php if($password != ""){ echo $password; } ?></span>
                            </div>
                            <button type="submit" class="btn" name="login">Sign in!</button>
                        </form>
<?php

if(isset($_POST['login']))
{

    $conn = new Dbconnect;
    $db = $conn->getDb();

    $query = "SELECT * FROM users";
    $statement = $db->prepare($query);
    $statement->execute();
    $userLogins = $statement->fetchAll(PDO::FETCH_OBJ);

    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach($userLogins as $u)
    {
        if(($username=$u->username) && ($password=$u->password))
        {
            session_start();
            $_SESSION['id']=$u->id;
            $_SESSION['username']=$u->username;
            $_SESSION['role']=$u->role;

            header('Location: home.php');
        }

    }


}
			
?>
			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
