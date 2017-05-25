<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Upload portofolio</div>
					<div class="panel-body">
						<div class="col-md-6">


								<?php
							echo validation_errors();
							?>
							<?php echo form_open_multipart('upload/create'); ?>


							<input type="text" class="form-control" name="keterangan" required placeholder="keterangan"><br/>


							<label for="userfile">File</label></td>
							<input type="file"  name="userfile" size="20" /><br/>


							<input type="hidden" name="is_submit" value="1" />
							<input  class="btn btn-primary" type="submit" name="submit" value="Submit">


							<?php echo form_close(); ?>


					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div><!--/.main-->

</body>
</html>
