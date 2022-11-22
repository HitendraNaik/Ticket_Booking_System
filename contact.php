<?php 
include("header.php");
?>


<section style="min-height:450px;">
<div class="container" style="color:maroon;">

<div class="col-md-12">
    <center>
            <h1>Contact Us</h1>
            <h5>Get In Touch.</h5>
            <p>we'd love to talk about how we can work together.
            Send us a message below and we'll respond as soon as possible.
            </p>
    </center>
</div>
    <div class="row" style="color:white">
        <div class="col-md-6 mt-5 mb-5 pl-5" style="border-radius:30px;background-color:maroon">
        <h2 class="mt-5 " >Contact Information</h2>
        <p class="mt-1 ">Our team will get back to you within 24 Hours
        </p>
       
    <p class="mt-5"><i class="fa fa-phone fa-2x  mt-3"></i>&nbsp;+918999956477</p>
    <p class="mt-3"><i class="fa fa-envelope  mt-3"></i>&nbsp;movieticketbookingsystem@gmail.com</p>
    <p class="mt-3"><i class="fa fa-map-marker   mt-3"></i>&nbsp;Margao,Goa</p>

    <h2 class="mt-5 " >Join us</h2>
    <div class="mb-5">
    <a href="#"  class="mt-5 " style="color:white;"><i class="fa fa-facebook-square fa-2x  mt-3"></i></a>
    <a href="#"  class="mt-5 ml-3 " style="color:white;"><i class="fa fa-twitter-square fa-2x  mt-3"></i></a>
    <a href="#"  class="mt-5 ml-3 " style="color:white;"><i class="fa fa-instagram fa-2x  mt-3"></i></a>
    <a href="#"  class="mt-5 ml-3 " style="color:white;"><i class="fa fa-linkedin-square fa-2x  mt-3"></i></a>
    </div>
    </div>
        <div class="col-md-6">

        <form method="post">
            <div class="container" style="color:maroon;">
          
          
          <label for="username"><b>Your Name</b></label>
          <input type="text" style="border-radius:30px;" placeholder="Enter name" name="name" id="username" required>

          <label for="Email"><b>Email</b></label>
          <input type="text" style="border-radius:30px;" placeholder="Enter email" name="email" id="email" required>

          <label for="number"><b>Number</b></label>
          <input type="tel" style="border-radius:30px;" placeholder="Enter number" name="number" id="number" required>

          <label for="message"><b>Message</b></label>
          <textarea name="message" id="message" rows="4" style="resize:none;width:100%;border-radius:30px;"></textarea>


          <button type="submit" class="btn" style="background-color: red;color:white;">Send Message</button>
           </div>
          </form>

         </div>
           
         </div>
         </div>

         </section>





<?php 
include("footer.php");
?>