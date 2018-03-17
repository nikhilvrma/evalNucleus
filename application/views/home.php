<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $pageTitle; ?></title>

    <?php echo $headerFiles; ?>

  </head>

  <body style="background-image: url(<?php echo base_url('assets/images/bg.jpg'); ?>);">

    <nav class="navbar fixed-top nav-bg navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 110px;">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <img class="img-responsive" src="<?php echo base_url('assets/images/cp_logo_white.png'); ?>" style="width: 30%; margin: 10px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 10px;">
            <label style="color: white;"><b>E-Mail Address</b></label>
            <input type="text" placeholder="E-Mail Address" style="padding: 5px;">
          </li>
          <li class="nav-item" style="margin-right: 10px;">
            <label style="color: white;"><b>Password</b></label>
            <input type="password" placeholder="Password" style="padding: 5px;">
            <a style="color: white; font-size: 12px;">Forgot Password?</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="about.html" style="margin: auto; border-color: white !important; margin-top: 30px;">Sign In</a>
          </li>
        </ul>
    </div>


      </div>
    </nav>



    <div class="container" style="margin-top: 70px;">


      <?php if($message['content']!=''){?>
      <ol class="breadcrumb" style="background-color: white !important; margin-top: 20px; border: 1px solid <?=$message['color']?>;">
        <li style="color: <?=$message['color']?>;"><?=$message['content']?></li>
      </ol>
    	<?php }?>

      <div class="row">


        <div class="col-lg-12 mb-4">




            <div class="row">



              <div class="col-lg-5 mb-4 offset-md-7">
          <div class="card h-100" style="opacity: 0.9">
            <h5 class="card-header cardheader"><center>REGISTER</center></h5>

            <div class="card-body">


              <form method="post" action="<?php echo base_url('functions/register'); ?>">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="name"><b>Name</b></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="email"><b>E-Mail Address</b></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Address">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="mobile"><b>Mobile Number</b></label>
                    <input type="text" class="form-control" maxlength="10" name="mobile" id="mobile" placeholder="Mobile Number">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cpassword"><b>Confirm Password</b></label>
                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="type"><b>You are a _____?</b></label>
                    <select class="form-control" name="accountType" id="type">
                      <option value="1">Job/Internship Opportunity Seeker</option>
                      <option value="2">Employer</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10 offset-md-1">
                    <p class="help-text" style="font-size: 14px;">By clicking register button you agree to our <b>Terms and Condition</b> and <b>Privacy Policy</b>.</p>
                  </div>
                </div>
                <center><button type="submit" class="btn btn-lg btn-primary">Register</button></center>

              </form>


            </div>


          </div>
        </div>









            </div>


        </div>



      </div>

    </div>

    <div class="container-fluid" style="background: white; opacity: 0.9;">
      <div class="col-lg-12 mb-4">
        <div class="row">

          <div class="col-md-6 mb-4">
          <center><h3>About Eval-Nucleus</h3></center><hr>
          <p>Eradicating the gap between employers and potential candidates, we, at CampusPuppy, consider it a need in this era to connect an individual with a company, based on the individual’s specific skill set and expertise in it.<br>Linking together a social community that leaves fake profiles in a galaxy far far away, we intend to provide a hassle free experience of recruitment to both students and employers, at the same time. And what’s more? This professionally socialized environment allows candidates to take various tests to validate individualistic skills. Our sole intention is to bring out a genuine and relaxed recruitment environment and we believe that is what gives us our special place in the market.</p>
          </div>

        </div>
      </div>

    </div>

    <footer class="py-5 bg-dark nav-bg">
      <div class="container">
        <p class="m-0 text-center text-white" style="font-size: 15px;"><a>About</a> | <a>Privacy Policy</a> | <a>Terms and Conditions</a> | <a>Team</a> | <a>Contact Us</a></p>
        <br>
        <p class="m-0 text-center text-white" style="font-size: 14px;">Copyright &copy; <b>Campus Puppy Private Limited</b> 2018</p>
      </div>
    </footer>

    <?php echo $footerFiles; ?>



  </body>

</html>
