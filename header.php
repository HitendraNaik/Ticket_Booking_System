<!doctype html>
<html lang="en">
  <head>
    <title>Movie Ticket Booking System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.jfif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

    <!-- font-awesome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {box-sizing: border-box}

    /* Add padding to containers */
    .container {
    padding: 16px;
    }

    /* Full-width input fields */
    textarea,input[type=text],  input[type=password],input[type=tel]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    textarea,input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .registerbtn {
    background-color: maroon;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    
    }

    .registerbtn:hover {
    opacity:1;
    }

    /* Add a blue text color to links */
    a {
    color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
</style>
  
  
  
  
  
  
  </head>
   <body>
      
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: red;">
           <a class="navbar-brand" href="index.php"> <img src="images/download.jfif" width="50px"></a>
           <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
               </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown">Movie</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Comming Soon</a>
                    <a class="dropdown-item" href="#">Now Showing</a>
    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">offers</a>
    
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Book Ticket</a>
    
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
    
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
          
            <li class="nav-item">
             <!-- Button register trigger modal -->
              <a class="nav-link" data-toggle="modal" data-target="#modelId" >register</a>
            </li>
            <li class="nav-item">
             <!-- Button login trigger modal -->
              <a class="nav-link" data-toggle="modal" data-target="#modelId1">login</a>
            </li>

        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
  </nav> 
  

  
  <!-- register Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"style="background-color: red;color:white;">
          <!--<h5 class="modal-title">Register</h5>-->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="container" style="color:maroon;">
          <center>
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
          </center>

          <hr>
          
          <label for="username"><b>Username</b></label>
          <input type="text" style="border-radius:30px;" placeholder="Enter Username" name="username" id="username" required>

          <label for="Email"><b>Email</b></label>
          <input type="text" style="border-radius:30px;" placeholder="Enter email" name="email" id="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" style="border-radius:30px;" placeholder="Enter password" name="psw" id="psw"
          required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" style="border-radius:30px;" placeholder="Repeat password" name="psw-repeat" id="psw-repeat"
          required>

          <label for="number"><b>Number</b></label>
          <input type="tel" style="border-radius:30px;" placeholder="Enter number" name="number" id="number"
          required>
          <button type="submit" class="btn" style="background-color: red;color:white;">Register</button>

          <hr>
         </div>

         <div class="container signin">
              <p>Already have an Account?<a style="color:gray" data-toggle="modal" data-target="#modelId1" data-dismiss="modal" >Login in</a></p>
         </div>
    </form>





        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>-->
      </div>
    </div>
  </div> 

 
  
  <!-- login Modal -->
  <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"style="background-color: red;color:white;">
          <!--<h5 class="modal-title">Login</h5>-->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">


                 <form action="action_page.php">
                  <div class="container" style="color:maroon;">
                             <center>
                            <h1>Login</h1>
                             </center>
          <hr>
                            <label for="Email"><b>Email</b></label>
                            <input type="text" style="border-radius:30px;" placeholder="Enter email" name="email" id="email" required>
          
                            <label for="psw"><b>Password</b></label>
                           <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                           <button type="submit" class="btn"style="background-color:red;color:white;">Login</button>
        
                    
        
        
        </div>
          </form>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn" style="background-color: red;color:white;">login</button>
        </div>-->
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>