
<div class="row">

  <?php foreach($items  as $item): ?>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="/uploads/<?php echo $item['photo']?>" alt="...">
        <div class="caption">
          <h3><?php echo $item['title']?></h3>
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
          <p><?php echo $item['description']?></p>

          <p><a href="item/view/ <?php echo $item['id']?>" class="btn btn-info btn-block" role="button">View</a> </p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
             