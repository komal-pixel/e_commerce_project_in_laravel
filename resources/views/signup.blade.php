@include('header')

	<div class="container">
		<h4 class="text-center mt-3">Login Form</h4>
				<form method="POST" action="register">
					{{@csrf_field()}}
					 <div class="offset-3 col-md-6">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
				  </div>
				  <div class="offset-3 col-md-6">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="offset-3 col-md-6">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="offset-3 col-md-6 mt-3">
				  <button type="submit" class="btn btn-primary">Login</button>
				  </div>
				</form>
	</div>

@include('footer')
