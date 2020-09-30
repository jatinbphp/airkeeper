<!DOCTYPE html>
<html>
<head>
	<title>CRUD Application - House</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>


<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
	  <a href="a" class="navbar-brand">HOUSE APPLICATION</a>
	</div>
</div>
<div class="container" style="padding: 10px;">

<div class="row">
 <div class="col-md-12">
 <div class="row">	
	<div class="col-6"><h3>View Property</h3></div>
	<div class="col-6 text-right">
	 <a href="<?php echo base_url().'index.php/admin/create'; ?>" class="btn btn-primary">Create</a>
	 </div>
  </div>
  <hr>
 </div>
</div>

<div class="row">
	<div class="col-md-12">
	  <table class="table table-striped">
	  	<tr>
	  	 <th>ID</th>
	  	 <th>Owner</th>
	  	 <th>Property Type</th>
	  	 <th>Country</th>
	  	 <th>City</th>
	  	 <th>State</th>
	  	 <th>Available Date</th>
	  	 <th>Guest</th>
	  	 <th>Bedrooms</th>
	  	 <th width="100">Edit</th>
	  	 <th width="100">Delete</th>	
	  	</tr>

<?php if(!empty($house)) { foreach($house as $house) { ?>
<tr>
 <td><?php echo $house['id'] ?></td>
 <td><?php echo $house['owner'] ?></td>
 <td><?php echo $house['property_type'] ?></td>
 <td><?php echo $house['country'] ?></td>
 <td><?php echo $house['city'] ?></td>
 <td><?php echo $house['state'] ?></td>
 <td><?php echo $house['available_date'] ?></td>
 <td><?php echo $house['guest'] ?></td>
 <td><?php echo $house['bedrooms'] ?></td>

 <td>
   <a href="<?php echo base_url().'index.php/admin/edit/'.$house['id']?>" class="btn btn-primary">Edit</a>
</td>

<td>
	<a href="<?php echo base_url().'index.php/admin/edit/'.$house['id']?>" class="btn btn-danger">Delete</a> 
</td>
</tr>

  <?php } } else { ?>
<tr>
 <td colspan="5">Record Not Found</td>	
</tr>
  <?php } ?>
</table>

</div>
</div>
</div>
</body>
</html>
