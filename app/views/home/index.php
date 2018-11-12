{% extends "layout/default.php" %}
{% block title %}
    Inicio | {{ APP_NAME }}
{% endblock %}
{% block content %}
<div class="container">
    <div class="row">
        <header class="col main">
            <h1>Bienvenido a {{ APP_NAME }} home/index view</h1>
        </header>
    </div>
    <div class="row">
        <div class="col">
            <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>
            <code>/home/index/[name]/[mood]</code>
            <p>{{ name }} is {{ mood }}</p>
        </div>
    </div>
</div>
{% endblock %}