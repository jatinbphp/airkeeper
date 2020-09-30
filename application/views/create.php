<!DOCTYPE html>
<html>
<head>
	<title>HOUSE Application - Create </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>

<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
	  <a href="a" class="navbar-brand">HOUSE APPLICATION</a>
	</div>
</div>

<div class="container" style="padding:10px;">
<h6>AIRKEEPER</h6>

<form method="post" name="createHouse" action="<?php echo base_url().'index.php/admin/create';?>">

<div class="col-sm-12">
	<div class="row">
  <div class="col-sm-6 form-group">
  <label>Owner</label>

<select class="form-control">
  <option value="" disabled selected>Select Owner</option>
  <option value="1">A</option>
  <option value="2">B</option>
  <option value="3">C</option>
  <option value="4">D</option>
</select>
  <?php echo form_error('name');?>  
</div>

<div class="col-sm-3 form-group">
  <label>Identificator AIRBNB</label>
  <input class="form-control" type="text" name="identificator_airbnb" placeholder="Promotional code">
</div>

<div class="col-sm-3 form-group">
  <label>Property Type</label>
  <select class="form-control">
  <option value="" disabled selected>Select Type</option>
  <option value="1">House</option>
  <option value="2">Toen House</option>
  <option value="3">Apartment</option>
</select>
</div>
</div>
</div>

<hr>
<h6>PROPERTY ADDRESS</h6>

<div class="col-sm-12">
	<div class="row">
  <div class="col-sm-4 form-group">
  <label>Country</label>

<select class="form-control">
  <option value="" disabled selected>Australia</option>
  <option value="1">India</option>
  <option value="2">Australia</option>
  <option value="3">USA</option>
  <option value="4">Dubai</option>
</select>
  <?php echo form_error('name');?>  
</div>

<div class="col-sm-4 form-group">
  <label>Street Address</label>
  <input class="form-control" type="text" name="street_address" placeholder="Street Address">
</div>

<div class="col-sm-4 form-group">
  <label>Apt,Suite.(Optional)</label>
  <input class="form-control" type="text" name="apt_suite" placeholder="Apt,Suite.(Optional)">
</div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
  <div class="col-sm-4 form-group">
  <label>City</label>
  <input class="form-control" type="text" name="city" placeholder="City">
</div>

  <div class="col-sm-4 form-group">
  <label>State</label>
  <input class="form-control" type="text" name="state" placeholder="State">
</div>

  <div class="col-sm-4 form-group">
  <label>Postcode</label>
  <input class="form-control" type="text" name="postcode" placeholder="Postcode">
</div>
</div>

<hr>
<h6>AVAILABLE</h6>

<div class="col-sm-12">
	<div class="row">
  <div class="col-sm-5 form-group">
  <label>Starting Date</label>
  <input type="text" class="form-control input-sm datepicker" id="arrival" placeholder="">
        </div>