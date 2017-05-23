<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login AS Assistant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" >
	<script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Login as Assistant</h2>
				</div>
				<div class="panel-body">
					<form action="{{url('employer/assist/login')}}" method="post">
					{{csrf_field()}}
						<div class="input-group form-group">
							<span class="input-group-addon" id="basic-addon1">Email</span>
							<input type="email" name="assists_email" id="email" class="form-control" aria-describedby="basic-addon1">
						</div>
						<div class="input-group form-group">
							<span class="input-group-addon" id="basic-addon2">Password</span>
							<input type="password" name="assists_password" id="password" class="form-control" aria-describedby="basic-addon2">
							
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-default">
						</div>
					</form>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
	
