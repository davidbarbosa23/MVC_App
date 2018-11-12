{% extends "layout/default.php" %}
{% block content %}
	<div class="container">
		<div class="row justify-content-md-center">
			<form class="col col-md-5 form-signin text-center">
				<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
	</div>
{% endblock %}