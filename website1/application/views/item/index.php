<div class="col-lg-4 col-lg-offset-3">
<div id="container">
	<h2><?php echo $title; ?></h2>
	<!--<?php $index = 0; ?>
	<?php foreach ($items as $item): ?> -->
    	<ul> 
	         <a href="<?php echo site_url('item/'.$item['id']); ?>"><?php echo $item['categoriesid']; ?>
	         	</ul>     
			<!--<li>IMAGE</li> 
			<li>
        </ul>
		<ul>
			<li>
				<?php foreach ($bids[$index] as $bid): ?>
					
					<?php echo $bid['amount']; ?></br>
			    
			    <?php endforeach; ?>
			</li> 
		</ul>
		<?php $index++; ?>
	 <?php endforeach; ?>  -->
	   
	</br>
	<a href="<?php echo site_url('item/create'); ?>">Create Item</a>
</div>
