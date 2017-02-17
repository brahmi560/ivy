<?php 
	$user_id = $current_user->data->ID;
?>
<h3 class="gdlr-lms-admin-head" ><?php _e('Choose Certifications you can promote', 'gdlr-lms'); ?></h3>
<style>
.checkbox label, .radio label {
    padding-left: 0px;
}
</style>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<fieldset>
						<div class="checkbox checkbox-primary disabled">
							<input id="checkbox2" type="checkbox" disabled="">
							<label for="checkbox2">
								IT Business Analyst - Practitioner
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">
								IT Business Analyst
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">
								IT Scrum Master
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">
								IT Product Owner
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">
								IT Scrum Developer
							</label>
						</div>
						<div>
							<a href="#"><button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Update</strong></button></a>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
