<div class="col-lg-3 mb-4">
  <center><img class="img-responsive" src="<?php echo base_url('assets/images/profile-images/default-user.jpg'); ?>" style="width: 70%; margin: 10px; border-radius: 50%;"></center>
  <center><b>Nikhil Verma</b></center>
  <center><a style="font-size: 14px;">Sign Out</a></center>
  <div class="list-group" style="margin-top: 15px;">

    <a class="list-group-item sidebar-item"><b style="float: right;">Hiring Nucleus</b></a>
    <a href="<?php echo base_url('assessment-tests'); ?>" class="list-group-item sidebar-item <?php if($activePage=="1") { echo "sidebar-active"; } ?>">Assessment Tests</a>
    <a href="<?php echo base_url('assessment-codes'); ?>" class="list-group-item sidebar-item <?php if($activePage=="1") { echo "sidebar-active"; } ?>">Assessment Codes</a>

    <a class="list-group-item sidebar-item"><b style="float: right;">Profile Settings</b></a>
    <a href="<?php echo base_url('change-password'); ?>" class="list-group-item sidebar-item <?php if($activePage=="7") { echo "sidebar-active"; } ?>">Change Password</a>

  </div>
</div>
