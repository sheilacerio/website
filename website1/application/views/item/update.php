<div class="col-lg-4 col-lg-offset-3">
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<a href="<?php echo site_url("/item/update/")."/".$item['id']; ?>">

        
    <label for="id">ID</label>
    <input type="text" name="id" /></br> 
    <label for="name">Name</label>
    <textarea name="name" rows="1"  cols="50" ></textarea><br/> 
    <label for="width">Categories ID</label>
    <select name="categoriesid"> 
        <option value="Household Goods">Household Goods</option>
        <option value="Vehicle">Vehicle</option>
        <option value="Moving">Moving</option>
        <option value="Pets">Pets</option>
        <option value="Others">Others</option>
    </select>

    <label for="shipment_title">Shipment Title</label>
    <textarea name="shipment_title" rows="2"  cols="50" placeholder="eg. washing"></textarea><br/> 
  
    <label for="width">Width</label>
    <input type="input" name="width" placeholder="cm" /></br> 

    <label for="height">Height</label>
    <input type="input" name="height" placeholder="cm" /></br>  

    <label for="length">Length</label>
    <input type="input" name="length" placeholder="cm" /></br>  

    <label for="weight">Weight</label>
    <input type="input" name="weight" placeholder="kg" /></br>

    <label for="quality">Quality</label>
    <input type="input" name="quality" /></br> 

    <label for="description">Description</label>
    <textarea name="description" rows="2"  cols="50" placeholder="eg. fragile"></textarea><br/> 

    <label for="width">Select</label>
    <select name="selectid"> 
        <option value="Palletized">Palletized</option>
        <option value="Stackable">Stackable</option>
        <option value="Crated">Crated</option>
    </select>

    <label for="pickup">Shipment to be pick up</label>
    <textarea name="pickup" rows="1"  cols="50"></textarea><br/>

     <label for="datepicker">Date to be pickup</label>
    <textarea name="datepicker"  value="<?php echo set_value('datepicker', @date('d-m-Y', @strtotime($item[0]->datepicker))); ?>" rows="1"  cols="50"></textarea><br/>

    <label for="delivery">Shipment to be delivered</label>
    <textarea name="delivery" rows="1"  cols="50"></textarea><br/> 

    <label for="datepicker1">Date to be delivered</label>
    <textarea name="datepicker1"  value="<?php echo set_value('datepicker1', @date('d-m-Y', @strtotime($item[0]->datepicker1))); ?>" rows="1"  cols="50"></textarea><br/>
  

    <label for="image">Image</label></br></br> 
  <input name="image" accept="image/jpeg" type="file"></br>  

   <label for="checkbox">Active</label>
    <input type="checkbox" name="active" value="active"/></br>  

    <input type="submit" name="submit" value="Update Item" />

</form> 

<a href="<?php echo site_url('item'); ?>">Cancel</a>