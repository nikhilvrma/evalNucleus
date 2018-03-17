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
                          <h6 class="card-header cardheader"><b>Select Assessment Test</b></h6>

                          <div class="card-body">


                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col" style="width: 7%;">#</th>
                                  <th scope="col">Assessment Test</th>
                                  <th scope="col" style="width: 25%;"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>General Aptitude</td>
                                  <td><a class="btn btn-success" style="width: 100%; color: white;">Start Test</a></td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Feedback</td>
                                  <td><a class="btn btn-primary" style="width: 100%; color: white;">Test Completed</a></td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Internal Assessment</td>
                                  <td><a class="btn btn-warning" style="width: 100%; color: black;">Resume Test</a></td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Web Development Assessment</td>
                                  <td><a class="btn btn-danger" style="width: 100%; color: white;">Test Locked</a></td>
                                </tr>
                              </tbody>
                            </table>



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
