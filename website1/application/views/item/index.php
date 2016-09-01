<div class="row">
  <div class="col-md-12 ">
  <a href="item/create" class="btn btn-info  pull-right" role="button">Create New</a>
  </div>
</div>
<br />
<br />
<div class="row">
  <div class="col-sm-12 col-md-12">



    <table class="table table-bordered">
      <thead>
        <tr>

          <th>Title</th>
          <th>Quality</th>
          <th>Description</th>
          <th>View</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($items  as $item): ?>
          <tr>
            <th scope="row"><?php echo $item['title']?></th>
            <td><?php echo $item['quality']?></td>
            <td><?php echo $item['description']?></td>
            <td>
           <a href="item/update/<?php echo $item['id']?>" class="btn btn-info btn-sm pull-right" role="button">update</a>
           <a href="item/delete/<?php echo $item['id']?>" class="btn btn-info btn-sm pull-right" role="button">delete</a>
            <a href="item/view/<?php echo $item['id']?>" class="btn btn-info btn-sm pull-right" role="button">View</a>
            </td>
          </tr>
          <?php endforeach; ?>

        </tbody>
      </table>


  </div>
</div>

<br />
<br />
<br />
<br />
<br />
