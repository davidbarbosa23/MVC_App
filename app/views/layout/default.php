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
                <a class="p-2 text-dark" href="{{ HTTP_ROOT }}/viewuser/all">Registros</a>
            </nav>
            {% if SESSION_USER %}
        		<a class="btn btn-outline-primary" href="{{ HTTP_ROOT }}/viewuser">Mi registro</a>
	            <a class="btn btn-outline-secondary mx-2" href="{{ HTTP_ROOT }}/viewuser/edit">Editar</a>
	            <a class="btn btn-outline-secondary mx-2" href="{{ HTTP_ROOT }}/login/logout">Salir</a>
        	{% else %}
	            <a class="btn btn-outline-primary" href="{{ HTTP_ROOT }}/register">Registrar</a>
	            <a class="btn btn-outline-secondary mx-2" href="{{ HTTP_ROOT }}/login">Acceder</a>
        	{% endif %}
        </div>

		{% block content %}{% endblock %}

		<footer class="footer">
			<div class="container text-muted">
                <div class="row">
                    <div class="col">
                        <span class="mx-2">David Barbosa</span> | 
                        <a target="_blank" href="https://www.linkedin.com/in/davidbarbosar/" class="text-muted mx-2">LinkedIn</a> | 
                        <a target="_blank" href="https://github.com/davidbarbosa23" class="text-muted mx-2">GitHub</a> | 
                        <a target="_blank" href="{{ HTTP_ROOT }}/PHP-Developer.pdf" class="text-muted mx-2">Curriculum</a> | 
                        <a target="_blank" href="mailto:davidbarbosa.dev@gmail.com" class="text-muted mx-2">davidbarbosa.dev@gmail.com</a> | 
                        <a target="_blank" href="tel:+573196124702" class="text-muted mx-2">(+57) 319 612 4702</a>
                    </div>
                    <div class="col-3 text-right">
    				    <a target="_blank" href="https://github.com/davidbarbosa23/MVC_App/blob/master/readme.md" class="d-inline-block text-muted mx-2">Readme</a>
                    </div>
                </div>
			</div>
		</footer>
		<script type="text/javascript" src="{{ ASSET_ROOT }}/js/app.min.js"></script>
	</body>
</html>