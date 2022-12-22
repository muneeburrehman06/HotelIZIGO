<!DOCTYPE html>
<html lang="en">
<head>
    <title>IZIGO</title>
    @include('includes.meta-css')
</head>
<body>
	<div class="main-wrapper  account-wrapper">
		<div class="account-page">
			<div class="account-center">
				<div class="account-box">
					<form class="form-signin">
						<div class="account-logo">
							<a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<input type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group checkbox">
							<label>
								<input type="checkbox"> I have read and agree the Terms & Conditions
							</label>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-primary account-btn" type="submit">Signup</button>
						</div>
						<div class="text-center login-link">
							Already have an account? <a href="{{ url('login') }}">Login</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@include('includes.scripts')
</body>

</html>
