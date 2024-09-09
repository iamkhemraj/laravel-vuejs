<template>
	<div class="container">
		<div class="row justify-content-center mt-5 pt-5">
			<div class="col-xs-12 col-sm-8 col-md-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title text-center ">Register Customer</h3>
					</div>
					<div class="card-body">
						<form role="form">
							<!-- First Name Field -->
							<div class="form-group mb-3">
								<input type="text" name="first_name" id="name" class="form-control form-control-sm" placeholder="Name">
							</div>
							<!-- Email Field -->
							<div class="form-group mb-3">
								<input type="email" name="email" id="email" class="form-control form-control-sm"
									placeholder="Email Address">
							</div>
							<!-- Password Field -->
							<div class="form-group mb-3">
								<input type="password" name="password" id="password" class="form-control form-control-sm"
									placeholder="Password">
							</div>
							<!-- Confirm Password Field -->
							<div class="form-group mb-3">
								<input type="password" name="phone" id="password_confirmation" class="form-control form-control-sm"
									placeholder="Phone Number">
							</div>
							<!-- Submit Button -->
							<input type="submit" value="Register" class="btn btn-info btn-block form-control">

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
