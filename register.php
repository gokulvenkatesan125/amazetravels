
   <?php include 'include/header.php' ?>    
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Register</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">Register</a></li>
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
                     <h3>Create Account!</h3>
                     <form action="register.php" method="post"  onSubmit = "return checkPassword(this)">
                        <p>
                           <input type="text" name="username" required="Pleae fill out this field" placeholder="Username" />
                           <i class="fa fa-user"></i>
                        </p>
                        <p>
                           <input type="email" name="email"   required="Pleae fill out this field" placeholder="E-mail Address" />
                           <i class="fa fa-envelope"></i>
                        </p>
                        <p>
                           <input type="password" name="password"  required="Pleae fill out this field" placeholder="Password" />
                           <i class="fa fa-lock"></i>
                        </p>
                        <p>
                           <input type="password"  required="Pleae fill out this field" name="r_password" placeholder="Repeat Password" />
                           <i class="fa fa-lock"></i>
                        </p>
                        <p class="register_action">
                           <button name="submit" type="submit" >Register</button>
                        </p>
                     </form>
                     
                     <div class="register_have">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Page End -->

       
     <?php include 'include/footer.php' ?>

<!-- <-----------------script for password validation-----------> 
 <script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password.value; 
                password2 = form.r_password.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert(" Welcome to Amaze Travel Hub!") 
                    return true; 
                } 
            } 
        </script>  


<!-- /-----sql connection---/ -->

<?php include "admin/config/config.php";

if(isset($_POST["submit"])) {


$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$password=md5($password);
echo $password;


$query="select email from registration where email ='$email'";

$result=mysqli_query($connection,$query);

$check=mysqli_num_rows($result);
echo $check;

if($check==0)
{

$sql="insert into registration (username,email,password)values('$username','$email','$password')";

}

else
{
   echo "<script> alert('Sorry,Email-id is already exist'); </script>";
}

if (mysqli_query($conn,$sql)){
   echo "recored insert successfully";
echo "<script> alert('Successfully Registered'); </script>";
}
else{
   echo "Error".$sql."<br>".mysqli_error($con);
}

mysqli_close($con);
}
?>