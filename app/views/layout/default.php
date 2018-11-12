<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MVC App</title>
		<link rel="stylesheet" href="{{ ASSET_ROOT }}/css/app.min.css">
	</head>
	<body>
		{% block content %}{% endblock %}

		<footer class="footer">
			<div class="container">
				<span class="text-muted">David Barbosa</span>
			</div>
		</footer>
		<script type="text/javascript" src="{{ ASSET_ROOT }}/js/app.min.js"></script>
	</body>
</html>