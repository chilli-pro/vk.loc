<?php 
include('classes/User.php');
if(!empty($_POST)) {
	$user = new User();
	$user->registration($_POST);
	$result = $user->result;
}
?>
<?php if(isset($result)): ?>
	<h2><?php echo $result; ?></h2>
<?php endif; ?>
<form role="form" method="post">
	<div class="form-group">
		<input type="text" class="form-control" name="email" placeholder="Enter email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="login" placeholder="Enter login">
	</div>	
	<div class="form-group">
		<input type="password" class="form-control" name="password" placeholder="Enter password">
	</div>
	<input type="submit" class="btn btn-default">

	 <div class="input-container">
 		<select name="month">
  			<option value="0">Month:</option>
  				<?=generate_options(1,12,'callback_month')?>
 			</select>
 		<select name="day">
  				<option value="0">Day:</option>
  					<?=generate_options(1,31)?>
  		</select>
 			<select name="year">
  				<option value="0">Year:</option>
  					<?=generate_options(date('Y'),1900)?>
  		</select>
 		</div>

</form>	