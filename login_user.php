<?php include "includes/db.php"?>
<?php include "includes/header.php";?>
<?php session_start();?>
<?php
  $error="";
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
 
    $sql="SELECT * from login where username='$name' AND password='$pass' AND role = 'user'";   
    $data=mysqli_query ($con,$sql);
       
    if(mysqli_num_rows($data)>0)    //returns the number of rows in a result set. It is generally used to check if data is present in the database or not.
    {
        $_SESSION['users']=1;
        header("location:search.php");
    }
    
   else
   {
       // echo "User is Not Valid";
       $error="invalid password and user name";
       header("location:login_user.php?error=$error");
   }
    
   }

   
    

?>



<body>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                    <form method="POST" action="" method="post" >
                       <div class="col-2">
                                <div class="input-group">
                        <label class="title"> User Login </label><br>
                    <h1 class="title" style="color:red"><?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        echo $error;
    }?> </h1><br>
                           </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                    <input class="input--style-1" type="text" name="username" placeholder="Enter username" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                         <input class="input--style-1" type="password"  name="password" placeholder="Enter the password" required="required">
                                </div>
                            </div>
                        </div>
                        
                           
                            <div class="input-group">
                 <input type="submit" value="SIGN IN" name="submit" class="btn-submit m-b-0">
                <button class="but" type="submit"><a href="index.php" style="color:white">Back to Home </a></button>
                                </div>
                       
                    </form>
                    
            </div>
    </div>
        </div>
    </div>
  
    </body>