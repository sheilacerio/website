<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $shipper['photo']?>" alt="...">
      <div class="caption">
       

        <table class="table table-bordered">

          <tbody>
            <tr>
                 <th>Company Name</th>
              <td><?php echo $shipper['companyname']?></td>
              <th>Email</th>
              <td><?php echo $shipper['email']?></td>
            </tr>
            <tr>
              <th>Phone</th>
              <td><?php echo $shipper['phone']?></td>
              <th>Profile</th>
              <td><?php echo $shipper['ht']?></td>
            </tr>
          </tbody>
        </table>
       

       
        <br />
        <br />
        <br />
        <br />

      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
      <div class="well">
      <span class="label label-success"> <a href="<?php echo site_url('email');?>"></span></a>

      <?php echo $shipper['message']?>/
      </div>
  </div>
</div>
  
 
  <div class="row">
    <div class="col-md-12">
      <?php echo form_open_multipart("Shipper/view/"); ?>
        <div class="well">

          <div class="form-group">
            <label for="exampleInputPassword1">Mesage</label>
            <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>

          </div> 

          <button type="submit" class="btn btn-info btn-block">Message</button>
        </div>
      </form>
    </div>
  </div>
  



























