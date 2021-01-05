
<!DOCTYPE html>
<html>
<head>
	<title>Member Details</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
    <h2>Update Data</h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
    </form>
  </div>
</nav>
<pre>
  
</pre>
<div class="container-fluid col-lg-10">
	<?php echo form_open_multipart('Member/data/'.$memberdata[0]["id"]);?>
		<div class="form-group">
			<label>First Name </label>
			<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>$memberdata[0]["firstname"]]) ;?>
		</div>
		<div>
			<?php echo form_error('firstname',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Last Name </label>
			<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>$memberdata[0]["lastname"]]) ;?>
		</div>
		<div>
			<?php echo form_error('lastname',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Email </label>
			<?php echo form_input(['name'=>'email','class'=>'form-control','value'=>$memberdata[0]["email"]]) ;?>
		</div>
		<div>
			<?php echo form_error('firstname',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Password </label>
			<?php echo form_input(['type'=>'password','name'=>'password','class'=>'form-control','value'=>$memberdata[0]["password"]]) ;?>
		</div>
		<div>
			<?php echo form_error('password',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Contact </label>
			<?php echo form_input(['name'=>'contact','class'=>'form-control','value'=>$memberdata[0]["contact"]]) ;?>
		</div>
		<div>
			<?php echo form_error('contact',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Bithdate </label>
			<?php echo form_input(['type'=>'date','name'=>'birthday','class'=>'form-control','value'=>$memberdata[0]["birthday"]]) ;?>
		</div>
		<div>
			<?php echo form_error('birthday',"<div class='text-danger'>","</div>")?>
		</div>


		<div class="form-group">
			<label>Gender </label>
			<?php echo form_input(['name'=>'gender','class'=>'form-control','value'=>$memberdata[0]["gender"]]) ;?>
		</div>
		<div>
			<?php echo form_error('gender',"<div class='text-danger'>","</div>")?>
		</div>




		<div class="form-group">
			<label>Photo </label>
			<?php echo form_input(['type'=>'file','name'=>'photo','class'=>'form-control','value'=>$memberdata[0]["photo"] ]) ;?>
		</div>
		<?php echo form_input(['type'=>'submit','value'=>'Submit','class'=>'btn btn-success']); ?>
		</br>
		</br>
	<?php echo form_close();?>
</div>