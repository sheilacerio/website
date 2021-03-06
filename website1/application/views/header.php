<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="description" content="">
       <meta name="author" content="">

       <title>IShip</title>
		<title>IShip</title>
         	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/helpers.css" rel="stylesheet" type="text/css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
          <script>
  $( function() {
    $( "#datepicker" ).datepicker();
     $( "#datepicker1" ).datepicker();
  } );
  </script>
     </head>
     <hr>
      <hr>
<body>
       <!-- Navigation -->
       <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
           <div class="container">
               <div class="navbar-header page-scroll">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">IShip</a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse navbar-ex1-collapse">
                   <ul class="nav navbar-nav">
                       <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                     
                       <li>
                           <a href="<?php echo base_url('index.php/main/register'); ?>">Sign Up</a>
                       </li>

                     
                       <?php if (array_key_exists('id', $user)) { ?>
                        <?php if ($user['role'] == '0') { ?>
                          <li>
                           <a href="<?php echo site_url('item/');?>">My Items</a>
                          </li>
                        <?php } ?>
                      <?php  ?>
                       <?php if (array_key_exists('id', $user)) { ?>
                            <?php
                               if($this->session->userdata('role'))
                                   $profile_link = 'shipper/index';
                               else
                                   $profile_link = 'profile/index';
                           ?>
                          <li>
                           <a href="<?php echo site_url($profile_link);?>">Profile</a>
                          </li>
                           <li>
                               <a href="<?php echo site_url('message');?>">Messages</a>
                           </li>
                        <?php } ?>
                      <?php  ?>
                      <li>
                         <a href="<?php echo site_url('main/logout');?>">Log out (<?php echo $user['first_name']?> <?php echo $user['last_name']?>)</a>
                        </li>
                      <?php } else{ ?>
                        <li>
                         <a href="<?php echo site_url('main/login');?>">Log in</a>
                        </li>
                       <li>
                           <a href="<?php echo site_url('admin/login');?>">Admin</a>
                       </li>
                        <?php } ?>

                   </ul>
               </div>
               <!-- /.navbar-collapse -->
           </div>
           <!-- /.container -->
       </nav>

       <!--page-->
    <?php
            $arr = $this->session->flashdata();
            if(!empty($arr['flash_message'])){
                $html = '<div class="bg-warning container flash-message">';
                $html .= $arr['flash_message'];
                $html .= '</div>';
                echo $html;
            }
        ?>
    <div class="container">
        <div class="row">



