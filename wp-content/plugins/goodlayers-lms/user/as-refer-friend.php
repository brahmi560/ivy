<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
a, a:hover {
    color: #72d5cd;
}
.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
.form-group {
    margin-bottom: 15px;
}
.form-control, .single-line {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;
	box-shadow: none;
	line-height: 1.42857143;
}
.hr-line-dashed {
    border-top: 1px dashed #e7eaec;
    color: #ffffff;
    background-color: #ffffff;
    height: 1px;
    margin: 20px 0;
}
.float-e-margins .btn {
    margin-bottom: 5px;
}
.m-t-n-xs {
    margin-top: -5px;
}
.btn-group-sm>.btn{
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.btn-primary {
    background-color: #1ab394;
    border-color: #1ab394;
    color: #FFFFFF;
}
.btn {
    border-radius: 3px;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary, .btn-primary:active:focus, .btn-primary:active:hover, .btn-primary.active:hover, .btn-primary.active:focus {
    background-color: #18a689;
    border-color: #18a689;
    color: #FFFFFF;
}
@media (min-width: 768px){
.form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
}
}
</style>
</head>
<body>
<h3 class="gdlr-lms-admin-head" ><?php _e('Refer a Friend', 'gdlr-lms'); ?></h3>
<div class="row">
	<div class="col-lg-12">
		<form class="form-horizontal">
			<div class="form-group"><label class="col-sm-4 control-label">Your Friend Name:</label>
				<div class="col-sm-8"><input type="text" class="form-control" required></div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="form-group"><label class="col-lg-4 control-label">Email:</label>
				<div class="col-lg-8"><input type="email" class="form-control" required></div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="form-group"><label class="col-lg-4 control-label">Contact No.:</label>
				<div class="col-lg-8"><input type="text" class="form-control" required></div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="form-group"><label class="col-lg-4 control-label">Comments:</label>
				<div class="col-lg-8"><textarea name="address" id="address" style="width: 100%;"></textarea></div>
			</div>
			<div>
				<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
			</div>
		</form>
	</div>
</div>

</body>
</html>