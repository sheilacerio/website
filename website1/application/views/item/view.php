<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $item['photo']?>" alt="...">
      <div class="caption">
        <h3><?php echo $item['title']?></h3>
        <p><?php echo $item['category']?></p>


        <table class="table table-bordered">

          <tbody>
            <tr>
              <th>Width</th>
              <td><?php echo $item['width']?></td>
              <th>Height</th>
              <td><?php echo $item['height']?></td>
            </tr>
            <tr>
              <th>Length</th>
              <td><?php echo $item['length']?></td>
              <th>Weight</th>
              <td><?php echo $item['weight']?></td>
            </tr>

          </tbody>
        </table>
        <div class="row">
          <div class="col-md-4">
            <strong>Quality:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['quality']?>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4">
            <strong>Item type:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['itemtype']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Pickup Location:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['pickuplocation']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Date to be pickup:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['shipmentpickup']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Deliver Location:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['deliverlocation']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Date to be deliver:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['shipmentdeliver']?>
          </div>
        </div>
         <div class="row">
          <div class="col-md-4">
            <strong>Description:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['description']?>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />

      </div>
    </div>
  </div>
</div>

<?php foreach($bids  as $bid): ?> 
<div class="row">
  <div class="col-md-12">
      <div class="well">

        <?php
        if($bid['role']){
          $profile_link = 'shipper/index/'.$bid['id'];
        } else {
          $profile_link = 'profile/index/'.$bid['id'];
        }

        ?>
      <span class="label label-success"> <a href="<?php echo site_url($profile_link);?>"><?php echo $bid['first_name']?> <?php echo $bid['last_name']?> ( <?php echo $bid['email']?> )</span></a>



      <?php echo $bid['message']?>
      </div>
  </div>
</div>
   <?php endforeach; ?>

<?php if (array_key_exists('id', $user)) { ?>
  <?php if ($user['role'] == '1') { ?>
  <div class="row">
    <div class="col-md-12">
      <?php echo form_open_multipart('item/view/'.$id); ?>
        <div class="well">

          <div class="form-group">
            <label for="exampleInputPassword1">Bid Mesage</label>
            <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>

          </div> 

          <button type="submit" class="btn btn-info btn-block">Bid</button>
        </div>
      </form>
    </div>
  </div>
 <?php } else{ ?>
   <div class="alert alert-danger" role="alert">You must be a carrier in order to bid!</div>

  <?php } ?>
<?php } ?>





























