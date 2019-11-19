<div class="container">
	<div class="row">
		<form method="POST" action="<?php echo base_url('admin-login') ?>">
			Name : <br><input type="text" name="name">
			<span><?php echo form_error('name'); ?></span>
			<br>
			Password : <br> <input type="password" name="password">
			<span><?php echo form_error('password'); ?></span>
			<br><br>
			<input type="submit" name="submit" value="Login">
			<span><?php echo $this->session->flashdata('error');
			 ?></span>
		</form>
	</div>
</div>