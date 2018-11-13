{% extends "layout/default.php" %}
{% block title %}
	Acceder | {{ APP_NAME }}
{% endblock %}
{% block content %}
	<div class="container mt-4">
		<div class="row justify-content-md-center">
			<form class="col col-md-5 form-signin text-center mt-5" method="POST" action="{{ HTTP_ROOT }}/login/signin">
				<h1 class="h3 mb-3 font-weight-normal">Acceder</h1>
                {% if message|length %}
                    <div class="alert alert-warning" role="alert">
                        {{ message|raw }}
                    </div>
                {% endif %}
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Correo electrónico</label>
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo electrónico" value="{{ email }}" required autofocus>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Contraseña</label>
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
				</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
			</form>
		</div>
	</div>
{% endblock %}