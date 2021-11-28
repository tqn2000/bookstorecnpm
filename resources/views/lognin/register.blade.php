

	<div class="container">
		<form action="{{route('register')}}" method="post" class="login-email">
			@csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
		@if (session('success'))
		    {{session('success')}}
			
		@endif
	</div>
