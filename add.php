

 <?php  
require('dbConnection.php');
include('config/header.php');


?>



	
<div class="lok">
    
    <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container-fluid">
       <a class="navbar-brand" href="#" id="color">Frenzy.com</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon" ></span>
       </button>
       <div class="collapse navbar-collapse " id="navbarSupportedContent">
         <ul class="navbar-nav  mb-2 mb-lg-0" >
           <li class="nav-item" style="margin: 5px;" >
           <button type="button" class="btn " style="color: white; background-color: rgb(247, 29, 243);" data-bs-toggle="modal" >
          <a href="index.php" style="text-decoration: none; color: white;"> Login</a>
</button>
           </li>
           <li class="nav-item"  style="margin: 5px;">
           <button type="button" class="btn " style="color: white; background-color: rgb(247, 29, 243);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
          <a href="#" style="text-decoration: none; color: white;"> Signin</a>
</button>
           </li>
        
         </ul>
        
       </div>
       
     </div>
   
   </nav>
 </div>
    <!-- navbar end -->
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo" style=""> frenzy</h1>
          <h2>Cricket</h2>
          <p>Connect with friends and the world around you on Our Cricket Club.</p>
        </div>
          <form>
            <input type="text" placeholder="Email or Phone Number" required />
            <input type="password" placeholder="Password" required>
            <button class="login" style="color: white; background-color: rgb(247, 29, 243);">Log In</button>
            <a href="#">Forgot Password ?</a>
            <hr>
            <!-- <button class="create-account" ></button> -->
            <button type="button" class="btn " style="color: white; background-color: rgb(247, 29, 243);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
            Create New Account
</button>
          </form>
      </div>
    </div>



   <!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="staticBackdrop"style="height: 500px ; margin-top: 6em;"     data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog" style="height: 100px">
  
    <div class="modal-content"  style="background-color: rgba(255, 255, 255, 0.59); height: 100px">
    
      <div class="modal-header" style="height: 100px" >
		
	

      <form action="main.php" method="POST" name="add" style="background-color: rgba(247, 29, 243, 0.536);  height: 60px;">

        <h5 class="modal-title" id="" style="height: 20px;">  <h1 class="logo" style="color: white; font-size: 45px;  text-align: center; position: relative; bottom: 30px;  font-family: Rye , serif;
      font-weight: 400;
      font-style: normal;"><img src="https://media.tenor.com/ouwwWAXjlXwAAAAi/ipl-x-cricket-x.gif" width="60px" style="position: relative; bottom: 10px; "> frenzy</h1> </h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      
      <div class="modal-body" style="  background-color: rgba(247, 29, 243, 0.536); display: flex; ">
      
        <div class="form"  style=" margin-right: 7rem;">

        
        <label for="" style="color: white">First Name</label>
        <br>
        <input type="text" name="fname" style="  border-radius: 8px; padding: 3px; border: none;">
        <br>
        <label for="" style="color: white">Email</label>
        <br>
        <input type="Email" name="email" style="  border-radius: 8px; padding: 3px; border: none;">
        <br>
        <label for="" style="color: white">Password</label>
        <br>
        <input type="Password" name="password" style="  border-radius: 8px; padding: 3px; border: none;">
        <br>
        <label for="" style="color: white">Last Name</label>
        <br>
        <input type="text" name="lname" style="  border-radius: 8px; padding: 3px; border: none;">
        
        <br>
      
      <br>

        <fieldset style="color: white; ">
  <legend>Select Your Gender</legend>

  <div class="mf" style="display: flex; margin: 9px;">
  <div>
    <input type="radio" name="gender" value="Male" id="huey"  checked />
    <label for="huey" >Male</label>
  </div>

  <div>
    <input type="radio" name="gender" value="Female"  id="dewey"   />
    <label for="dewey" >Female</label>
  </div>

  <div>
    <input type="radio" name="gender" id="louie" value="Custom"  />
    <label for="louie" >Custom</label>
  </div>
  </div>
</fieldset>
        
        <br>
        <div class="wid" style="display: flex;">
          
          <div class="age" style="color: white;"> 
        <label for="" >Age</label>
        <br>
        <input type="number" name="age" id="age" style="width: 60%; ">
        </div>
        <br>
        
        
        
         <div class="lastname" style="position: relative; left: -7px;font-size: ; color: white;">
           <label for="" >Date of Birth</label>
           <br>
           <input type="number" name="birth" id="age" style="width: 98%;">
         </div>
         </div>
         
         <br>
        
         <label for="country" style="color: white">Select Your Country</label><span style="color: red !important; display: inline; float: none;"></span>      
        
        <select id="country" name="country" class="form-control">
            <option >Pakistan</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="China">China</option>
            <option value="India">India</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
       
      </div>

      
      
      <div class="modal-footer" style="margin-top: 35em; margin-left: -3em; ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
             <button type="button"   class="btn " style=" background-color: white;" data-bs-toggle="modal" >
          <a  style="text-decoration: none; color: rgb(247, 29, 243);" >
          
<input type="submit" name="submit" id="subbtn" style="border: none;">
</button>

</form>
      </div>

    </div>
  </div>
  
</div>

<?php   




if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $birth = $_POST['birth'];
  $country = $_POST['country'];

  $q = "INSERT INTO `done`( `fname`, `email`, `password`, `lname`, `gender`, `age`, `birth`, `country`) VALUES ('$fname','$email','$password','$lname','$gender','$age','$birth','$country')";
  $result = mysqli_query($con,$q);
  if($result){
    echo "data inserted"; 
  }
  else{
    echo "data not inserted";
  }
}


?>

<!-- script for country input -->
<script>

</script>

<!-- script for country input end -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</html>
</body>
</html>
