<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $pageTitle."|Backoffice-CampusPuppy"; ?></title>

    <?php echo $headerFiles; ?>
    <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

  </head>

  <body>

    <?php echo $nav; ?>

    <div class="container" style="margin-top: 10px;">


      <?php if($message['content']!=''){?>
      <ol class="breadcrumb" style="background-color: white !important; margin-top: 20px; border: 1px solid <?=$message['color']?>;">
        <li style="color: <?=$message['color']?>;"><?=$message['content']?></li>
      </ol>
    	<?php }?>

      <div class="row">

        <?php echo $sidebar; ?>

        <div class="col-lg-9 mb-4">

          <h3 class="mt-4 mb-3" style="float: right;"><?php echo $pageTitle; ?></h3>

          <div class="clearfix"></div>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Assessment Tests</a>
            </li>
            <li class="breadcrumb-item active">Users</li>
          </ol>

          <div class="clearfix"></div>

          <hr>


            <div class="row">
              <div class="col-md-12">
              <table id="example">
                <thead>
                  <tr>
                    <th style="width: 10%">#</th>
                    <th style="width: 30%">Name</th>
                    <th style="width: 35%">Contact Details</th>
                    <th style="width: 25%">Report</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><b>Name: </b>Nikhil Verma<br><b>Coupon: </b>CPHNAsa2323</td>
                    <td><b>E-Mail: </b>vrmanikhil@gmail.com<br><b>Mobile: </b>+91-7503705892</td>
                    <td><a class="btn btn-primary" style="color: white;">Download Report</a></td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>


        </div>
      </div>

    </div>

    <?php echo $footer; ?>

    <?php echo $footerFiles; ?>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>

  </body>

</html>
