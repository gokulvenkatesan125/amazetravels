
<?php include'include/header.php' 
?>
          
          
       
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Login</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">Login</a></li>
                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Login Page Start -->
      <section class="peulis-login-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="login-box">
                     <h3>Member Login</h3>
                     <form method="post" action="login.php">
                        <p>
                           <input type="email" name="email" placeholder="E-mail Address" />
                           <i class="fa fa-envelope"></i>
                        </p>
                        <p>
                           <input type="password" name="password" placeholder="Password" />
                           <i class="fa fa-lock"></i>
                        </p>
                        <p class="lost_pass">
                           <a href="#">Lost your password?</a>
                        </p>
                        <p>
                           <button name="submit" type="submit" >login</button>
                        </p>
                     </form>
                     
                     <div class="register_have">
                        <p>Don't have an account? <a href="register.php">Register</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Page End -->
       
       
      <?php include'include/footer.php'
      ?>

<!-- <-------------------------sql connection querys------------------------> 
   <?php include "admin/config/config.php";

if(isset($_POST["submit"])) {


$email=$_POST["email"];

$password=$_POST["password"];

$password=md5($password);


$query="select email,password from registration where email ='$email'";

$result=mysqli_query($conn,$query);

while($row= mysqli_fetch_array($result))
{   
  $fetched_email=$row['email'] ;
  $fetched_password= $row['password'] ;    
}
echo "fetch email".$fetched_email;
echo "fetch password".$fetched_password;

if($fetched_email==$email&&$fetched_password==$password)
{
   echo"success";
echo "<script> alert(' Login Successful '); </script>";
}
else
{
   echo "reject";
   echo "<script> alert('Sorry,password wrong or Email-id is wrong');
          
    </script>";
}
mysqli_close($con);
}
?>
