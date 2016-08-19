<div id="container">
	<h2><?php echo $title; ?></h2>
        
	<?php foreach ($clients as $client): ?>
    	<ul>
		    <li><?php echo $client['id']; ?></li>  
			<li><?php echo $client['name']; ?></li> 
			
			<?php switch($client['roleid']) {
			 	case 0: 
					$data['rolename'] = 'N/A';
					break;
			    case 1:    
					$data['rolename'] = 'Customer';
			        break;
			    case 2:
					$data['rolename'] = 'Courier';
					break;
			} ?>  
		    <li><?php echo $data['rolename']; ?></li>
		  	<?php
		  		if($client['active'] == NULL) {
			        $data['activeflag'] = "Not Active";
				} else {
					$data['activeflag'] = 'Active';
				}	
		  	?>
	        <li><?php echo $data['activeflag']; ?></li>
        </ul>
	<?php endforeach; ?>   
	
	<a href="<?php echo site_url('client/create'); ?>">Create Client</a>                 
</div>