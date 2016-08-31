<div class="row">
  <div class="col-md-12 ">
    <?php if(!$has_profile && $own): ?>
    <a href="<?php echo site_url('Profile/create'); ?>" class="btn btn-info btn-sm pull-right" role="button">Create Profile</a>
      <h2>You don't have a profile yet. Please create one.</h2>
      <?php elseif (!$has_profile): ?>
      <h2>This user doesn't have a profile yet.</h2>
      <?php else: ?>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <img src="/uploads/<?php echo $profile['photo']?>" alt="...">
            <div class="caption">

              <table class="table table-bordered">

                <tbody>


                </tbody>
              </table>
              <div class="row">
                <div class="col-md-4">
                  <strong>First Name:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['fname']?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <strong>Last Name:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['lname']?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <strong>Facebook:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['fb']?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <strong>Address:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['description']?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <strong>Gender:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['itemtype']?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <strong>Phone Number:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['phone']?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <strong>Email:</strong>
                </div>
                <div class="col-md-8">
                  <?php echo $profile['email']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if($profile['user_id'] !== $this->session->userdata('id')): ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#message-modal">
          Send Message
        </button>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>
<br />
<br />
<div class="row">
  <div class="col-sm-12 col-md-12">





  </div>
</div>

<br />
<br />
<br />
<br />
<br />

<div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('message/send/'.$profile['user_id'].'/profile')?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Send Message</h4>
        </div>
        <div class="modal-body">
          <textarea name="message" class="form-control" placeholder="Type message here"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>