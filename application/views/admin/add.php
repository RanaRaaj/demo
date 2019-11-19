<section>
	<div class="container">
		<div class="row">
			<form method="POST" action="<?php echo base_url('form') ?>" enctype="multipart/form-data">
				Name : <input type="text" name="name" placeholder="Add Name">
				<br>
				Choose Image : <input type="file" name="image">
				<br>
				<input type="submit" name="submit" value="Add">
			</form>
		</div>
	</div>
</section>