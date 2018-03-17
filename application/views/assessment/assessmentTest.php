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



                    <div class="col-sm-12 mb-4" style="margin-top: 30px; background: #2c3e50; height: 40px; color: white;">
                          <p style="font-size: 15px; padding: 10px;"><b>Skill Test:</b> PHP</p>
                      </div>


                    <p class="mcq" style="float: right;"><a style="font-size: 16px;">Skip Question (<b>Skips Left: </b>4)</a></p>
                    <p class="mcq"><strong>Question</strong></p>
                    <div class="mcq" id = "question">This is the Test Question</div>
                                <div class="options">
                      <div class = 'option'>
                        <span class="opt">A</span>
                        <input type="radio" name="answer" id="optionA" value="1" />
                        <label for="optionA" id = 'option1'>Option 1</label>
                      </div>
                      <div class = 'option'>
                        <span class="opt">B</span>
                        <input type="radio" name="answer" id="optionB" value="2" />
                        <label for="optionB" id = 'option2'>Option 2</label>
                      </div>
                      <div class = 'option'>
                        <span class="opt">C</span>
                        <input type="radio" name="answer" id="optionC" value="3" />
                        <label for="optionC" id = 'option3'>Option 3</label>
                      </div>
                      <div class = 'option'>
                        <span class="opt">D</span>
                        <input type="radio" name="answer" id="optionD" value="4" />
                        <label for="optionD" id = 'option4'>Option 4</label>
                      </div>
                    </div>

                    <center>
                                  <button id="reset" class="btn btn-primary" style="margin-top: 10px;">RESET</button>
                                  <button class="btn btn-primary submitAns" style="margin-top: 10px;">SUBMIT</button>
                              </center>


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



                      <div class="col-sm-12 mb-4">
                          <div class="card h-100">
                            <h6 class="card-header cardheader">Remaining Test Time</h6>

                            <div class="card-body">
                              <p class="card-text">10:00</p>
                            </div>


                          </div>
                        </div>

                        <div class="col-sm-12 mb-4">
                            <div class="card h-100">
                              <h6 class="card-header cardheader">Remaining Question Time</h6>

                              <div class="card-body">
                                <p class="card-text">10:00</p>
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
