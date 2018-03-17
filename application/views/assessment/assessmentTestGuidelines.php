<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $pageTitle."|Backoffice-CampusPuppy"; ?></title>

    <?php echo $headerFiles; ?>

  </head>

  <body>

    <nav class="navbar fixed-top nav-bg navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 70px;">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <img class="img-responsive" src="<?php echo base_url('assets/images/cp_logo_white.png'); ?>" style="width: 14%; margin: 10px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">


          <li class="nav-item">
            <a class="btn btn-primary" href="about.html" style="margin: auto; border-color: white !important;">Sign Out</a>
          </li>
        </ul>
    </div>


      </div>
    </nav>


    <div class="container" style="margin-top: 10px;">



      <div class="col-lg-12 mb-4">


      <div class="row">


                  <div class="col-md-8 md-4">





                      <div class="card" style="margin-top: 30px;">
                          <h6 class="card-header cardheader"><b>Assessment Test Guidelines</b></h6>

                          <div class="card-body">

                            <p><b>Please go through the following guidelines before starting the test:</b></p>
                            <p>
                              <ol>
                                <li>This is the First Guideline</li>
                                <li>This is the Second Guideline</li>
                              </ol>
                            </p>
                            <center><a class="btn btn-lg btn-primary" style="color: white;">Start Test</a></center>

                          </div>


                        </div>


                  </div>

                  <div class="col-md-4 mb-4" style="margin-top: 30px;">


                    <div class="col-sm-12 mb-4">
                        <div class="card h-100">
                          <h6 class="card-header cardheader">Assessment For</h6>

                          <div class="card-body">
                            <center>
                              <p class="card-text"><img style="width: 50%;" src="<?php echo base_url('assets/images/users/anglo-eastern.jpg'); ?>"></p>
                              <p class="card-text"><b>ANGLO-EASTERN</b></p>
                            </center>
                          </div>


                        </div>
                      </div>


                  </div>







            </div>


        </div>
      </div>


    <?php echo $footer; ?>

    <?php echo $footerFiles; ?>

    <script src="<?= base_url('assets/ckeditor/ckeditor.js')?>"></script>
    <script>
      $(document).ready(function(){
        editor = CKEDITOR.replace('careerObjective');
      });
      </script>

  </body>

</html>
