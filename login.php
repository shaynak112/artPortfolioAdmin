<?php
ob_start();
session_start();

    //include 'header.php';
    //include 'navMenu.php';
    include 'dbConnect.php';

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108144834-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108144834-1');
</script>



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
        if(($username==$u->username) && ($password==$u->password))
        {
            
            $_SESSION['id']=$u->id;
            $_SESSION['username']=$u->username;
            $_SESSION['role']=$u->role;
            

            header('Location: home.php');
            exit();
            ob_end_flush();
        }

    }


}
			
?>
			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
