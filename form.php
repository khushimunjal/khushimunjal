<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>
  <?php include 'menu.php'?>
<div class="container mt-3 ">
  <div class="jumbotron text-center">
  <h1>Feedback Form</h1>
</div>
           <section class="my-3">
  <div class="py-3">
 
  </div>
  <div class="container-fluid">

  <div class="row">
    <div class="col-lg-6 col-md-5 col-12">
      <img src="images/n2.jpg"  class="img-fluid" aboutimg>
    </div>
    <div class="col-lg-6 col-md-5 col-12">

  
  <p>How did you hear about us?</p>
  <form action="index.php" method="post">
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
      <label class="custom-control-label" for="customRadio1">Newspaper</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio2" name="example2">
      <label class="custom-control-label" for="customRadio2">Social Media</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio3" name="example3">
      <label class="custom-control-label" for="customRadio3">Friend</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio4" name="example4">
      <label class="custom-control-label" for="customRadio4">Others</label>
    </div>

    <p>How likely are you to recommend our website to a friend?</p>
  
    <label for="defaultRange">Recommendation:- </label>
    <input type="range" id="defaultRange" name="points2">

    <p>What are you hoping to accomplish by visiting our website?</p>
  
    <select name="Health" class="custom-select-sm">
      <option selected>Select</option>
      <option value="Yoga">Yoga</option>
      <option value="Skincare">Skincare</option>
      <option value="Natural remedies">Natural remedies</option>
      <option value="Others">Others</option>
    </select>

    <p>Are you having trouble finding anything?</p>
  
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio5" name="example5">
      <label class="custom-control-label" for="customRadio5">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio6" name="example6">
      <label class="custom-control-label" for="customRadio6">No</label>
    </div>

    <p>What feature/option could we add to make your experience better?</p>
 
    <form>
  <div class="input-group mb-3 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">Suggestion</span>
    </div>
    <input type="text" class="form-control">
  </div>
  <button type="submit" name="fill" class="btn btn-primary">Submit</button>
</form>
</form>
</div>
</div>
</div>
</div>
</section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
