<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %}</title>
		<link rel="stylesheet" href="{{ ASSET_ROOT }}/css/app.min.css">
	</head>
	<body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">{{ APP_NAME }}</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ HTTP_ROOT }}">Inicio</a>
            </nav>
            <a class="btn btn-outline-primary" href="{{ HTTP_ROOT }}/register">Registrar</a>
            <a class="btn btn-outline-secondary mx-2" href="{{ HTTP_ROOT }}/login">Ingresar</a>
        </div>

		{% block content %}{% endblock %}

		<footer class="footer">
			<div class="container">
				<span class="text-muted">David Barbosa</span>
			</div>
		</footer>
		<script type="text/javascript" src="{{ ASSET_ROOT }}/js/app.min.js"></script>
	</body>
</html>