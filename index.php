<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Website Cost Calculator</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Your Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1>Welcome to Your WebCost calculator</h1>
    <p>The duration will depend on the number of weppages/files included in your website. but first let's check the following</p>
    <br><br><br><br>
    <div class="row">
      <div  class="col-md-4 col-sm-12">


      </div>
      <div  class="col-md-4 col-sm-12">
        <form action="index.php" method="POST">
            <center>
            
            <label>How many pages does your website have?</label>
            <select class="form-control" name="page" style='text-align:center;'>
               <option value='1'  >1 page</option>
              <?php
                for ($i=2; $i <= 50 ; $i++) { 
                  echo "<option value='$i'  ";
                  if(isset($_POST["page"]) &&  $_POST["page"]== $i){
                    echo " selected ";
                  }  

                  echo "> $i pages</option>";
                }
              ?>
            </select>
            <br> 

            <label>What type of website is this?</label>
            <select class="form-control" name="type" style='text-align:center;'>
               <option value='1' <?php if(isset($_POST["type"]) &&  $_POST["type"]=="1"){echo " selected ";} ?>>Personal</option>
               <option value='1.25' <?php if(isset($_POST["type"]) &&  $_POST["type"]=="1.25"){echo " selected ";} ?>>Simple Inventory system / Record-keeping</option>
               <option value='1.5' <?php if(isset($_POST["type"]) &&  $_POST["type"]=="1.5"){echo " selected ";} ?>>e-commerce</option>
               <option value='2' <?php if(isset($_POST["type"]) &&  $_POST["type"]=="2"){echo " selected ";} ?> >A lot of computation, display, info, & etc. / Complicated</option>
            </select><br>

            <label>How fast do you want it to be finished?</label>
            <select class="form-control" name="duration" style='text-align:center;'>
               <option value='1' <?php if(isset($_POST["duration"]) &&  $_POST["duration"]=="1"){echo " selected ";} ?>>Just take your time. I can wait.</option>
               <option value='1.5' <?php if(isset($_POST["duration"]) &&  $_POST["duration"]=="1.5"){echo " selected ";} ?>>I want it finish ASAP.</option>
               <option value='2' <?php if(isset($_POST["duration"]) &&  $_POST["duration"]=="2"){echo " selected ";} ?>>Hire other people. I want it finish ASAP.</option>
             
            </select><br>


            <label>How big is the database? </label>
            <select class="form-control" name="database" style='text-align:center;'>
               <option value='0' <?php if(isset($_POST["database"]) &&  $_POST["database"]=="0"){echo " selected ";} ?>>None. No record-keeping capability.</option>
               <option value='3500' <?php if(isset($_POST["database"]) &&  $_POST["database"]=="3500"){echo " selected ";} ?>>Small database size. Only few records</option>
               <option value='4750' <?php if(isset($_POST["database"]) &&  $_POST["database"]=="4750"){echo " selected ";} ?>>Just the right size. </option>
               <option value='5250' <?php if(isset($_POST["database"]) &&  $_POST["database"]=="5250"){echo " selected ";} ?>>Large size. </option>
            </select><br>

             

           

            <label>Are we going to design the website?</label>
            <select class="form-control" name="design" style='text-align:center;'>
              <option value='7500' <?php if(isset($_POST["design"]) &&  $_POST["design"]=="7500"){echo " selected ";} ?>>Yes, I want a professional web designer. </option>
              <option value='1500' <?php if(isset($_POST["design"]) &&  $_POST["design"]=="1500"){echo " selected ";} ?>>Yes, but I want a free web design. (not recommended)</option>
              <option value='0' <?php if(isset($_POST["design"]) &&  $_POST["design"]=="0"){echo " selected ";} ?>>No, I'm going to provide the whole web design.</option>
            </select>
            <br>

            <label>Is mobile-responsive?</label>
            <select class="form-control" name="responsive" style='text-align:center;'>
              <option value='2500' <?php if(isset($_POST["responsive"]) &&  $_POST["responsive"]=="2500"){echo " selected ";} ?>>Yes, I want a mobile-friendly web app</option>
              <option value='0' <?php if(isset($_POST["responsive"]) &&  $_POST["responsive"]=="0"){echo " selected ";} ?>>No. I'll be using laptop/Pc only.</option>
            </select>
           <br>

            

            <label>Are we going to deploy the website to the internet?</label>
            <select class="form-control" name="deploy" style='text-align:center;'>
              <option value='YES' <?php if(isset($_POST["deploy"]) &&  $_POST["deploy"]=="YES"){echo " selected ";} ?>>Yes, I want it to include in the package. </option>
              <option value='MYSELF' <?php if(isset($_POST["deploy"]) &&  $_POST["deploy"]=="MYSELF"){echo " selected ";} ?>>No, I'm just going to to deploy it myself</option>
              <option value='SOMEONE' <?php if(isset($_POST["deploy"]) &&  $_POST["deploy"]=="SOMEONE"){echo " selected ";} ?>>No, I'm just going to copy the files and have someone deploy the website.</option>
            </select>
            <br>
            




            

            <br><br>
            <button class="btn btn-outline-dark" type="submit" name="submit">Check estimated value</button>
            <br><br><br><br>
            
            
              <?php
                if(isset($_POST['submit'])){
                  $ratePerPage = 850;
                  $cost = $_POST['page'] * $ratePerPage;

                  $cost =  $cost * $_POST['type'];
                  $cost =  $cost * $_POST['duration'];
                  $cost =  $cost + $_POST['database'];
                  $cost =  $cost + $_POST['design'];
                  $cost =  $cost + $_POST['responsive'];
                  
                  if ( $_POST['deploy'] == "YES"){
                    $cost += 4500; 
                  } 


                  echo "<p>The rough estimate of the website with this kind of specification is </p>";
                  echo "<h1>PHP " . number_format($cost) . "</h1>";
                  echo "<small> for a clearer and much better estimate of your website, contact me at itsnelsonvargas@gmail.com</small>";
                }



              ?>
              <br><br><br><br>

            
            </center>
        </form>

      </div>
      <div  class="col-md-4 col-sm-12">


      </div>

    </div>
  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
