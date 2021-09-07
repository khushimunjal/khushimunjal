<!DOCTYPE html>
<html>
<head>
	<title>Beauty & Health</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

  
</head>
<body>
	
	<?php include 'menu.php'?>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/y1.jpeg" alt="yoga"  width="1600" height="700">
      <div class="carousel-caption">
      	<h3>Yoga</h3>
      	<p>When you listen to yourself, everything comes naturally. It comes from inside, like a kind of will to do something. Try to be sensitive. That is yoga.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/s4.jpg" alt="skincare"  width="1600" height="700">
      <div class="carousel-caption">
      	<h3>Skincare</h3>
      	<p>Natural home remedies should help you regain the missing glow from your skin. Be patient. Your skin took a while to deteriorate. Give it some time to reflect a calmer inner state.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/y2.png" alt="home remedies"  width="1600" height="700">
      <div class="carousel-caption">
      	<h3>Healthcare</h3>
      	<p>There's nothing more important than our good health - that's our principal capital asset. To enjoy the glow of good health, you must exercise.</p>
      	      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev"> 
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div>
	<div class="container-fluid">

	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/y5.jpg"  class="img-fluid" aboutimg>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<h2>Health & Beauty</h2>
		<p class="py-2"><h5>You will find alot of herbal remedies on this website to solve your problems. We will be going to instruct you to add some new acts in your life so that you can stay fit and healthy. </h5>
			<h5>The most common problems that we face in these days are hairfall ,acne and scars ,sunburn , tanning, obesity ,mild fever , cold ,etc. These problems can be solved by home remedies which is beneficial because it doesn’t have any side effects. You will see results after approximately one month if you will do these remedies regularly or very often and it will be long-lasting. </h5>
			<h5>So, basically our website will provide you these home remedies and some healthcare tips so that everyone can make their body fit and healthy and flawless skin. The objective of our website is that these easy and natural home remedies should help you regain the missing glow from your skin.</h5></p>
<a href="about.php" class="btn-btn-success"> read more </a>
</div>
</div>
</div>

</section>



 <section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Login</h2>
	</div>  

         <div class="w-50 m-auto">
         	
         		
         			<form action="user.php" class="needs-validation" method="POST">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="text">Email-ID:</label>
      <input type="valid-feedback" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
         	<div class="form-group">
      <label for="text">Mobile Number:</label>
      <input type="valid-feedback" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

                <div class="form-group">
                	<label>Comments:</label>
                	<textarea class="form-control" name="comments"></textarea>
                </div>

                <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>

                <button type="submit" name="insertdata" class="btn btn-primary">Submit</button>

         	</form>
         </div>
</section>


<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Services</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                      <img class="card-img-top" src="images/f.jpg" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Feedback</h4>
                                  <p class="card-text">Fill form to give us suggestions.</p>
                                      <a href="form.php" class="btn btn-primary">Form</a>
                             </div>
                       </div>
			     </div>
		 

	<div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                      <img class="card-img-top" src="images/call.png" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Contact</h4>
                                  <p class="card-text">Feel free to contact us.</p>
                                      <a href="contact.php" class="btn btn-primary">Call us</a>
                             </div>
                       </div>
			     </div>

	<div class="col-lg-4 col-md-4 col-12">
                  <div class="card" style="width:400px">
                      <img class="card-img-top" src="images/i.jpg" alt="Card image">
                          <div class="card-body">
                              <h4 class="card-title">Social Media</h4>
                                  <p class="card-text">Connect with us through Instagram, Facebook, Twitter or Whatsapp.</p>
                                      <a href="social.php" class="btn btn-primary">Follow us</a>
                             </div>
                       </div>
			     </div>
			 </div>
	</div>
 </section>		   



<footer>
	<p class="p-3 bg-dark text-white text-center"> ©Health & Beauty. All rights reserved.</p>
</footer>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
</body>
</html>