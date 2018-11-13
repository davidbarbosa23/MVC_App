{% extends "layout/default.php" %}
{% block title %}
    Editar registro | {{ APP_NAME }}
{% endblock %}
{% block content %}
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <form class="col col-md-7 form-signin mt-5" method="POST" action="{{ HTTP_ROOT }}/viewuser/edit">
                <h1 class="h3 mb-3 text-center font-weight-normal">Editar Registro</h1>
                {% if message|length %}
                    <div class="form-group row">
                        <div class="alert alert-warning w-100" role="alert">
                            {{ message|raw }}
                        </div>
                    </div>
                {% endif %}
                <div class="form-group row">
                    <label for="inputDescription" class="col-3 text-right">Descripción</label>
                    <div class="col-9">
                       <textarea type="text" id="inputDescription" name="description" class="form-control" placeholder="Descripción" rows="3" required>{{ description }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLocation" class="col-3 text-right">Sede</label>
                    <div class="col-9">
                        <select id="inputLocation" name="location" class="form-control selectpicker" title="Seleccione sede" required>
                            <option {% if location == 'Bogotá' %}selected{% endif %}>Bogotá</option>
                            <option {% if location == 'México' %}selected{% endif %}>México</option>
                            <option {% if location == 'Perú' %}selected{% endif %}>Perú</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAmount" class="col-3 text-right">Presupuesto</label>
                    <div class="col-9 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" id="inputAmount" name="amount" class="form-control" placeholder="Presupuesto" value="{{ amount }}" required>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="inputName" class="col-3 text-right">Nombre</label>
                    <div class="col-9">
                        <input type="text" id="inputName" name="name" class="form-control" placeholder="Nombre" value="{{ name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-3 text-right">Correo Electrónico</label>
                    <div class="col-9">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo Electrónico" value="{{ email }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-3 text-right">Contraseña</label>
                    <div class="col-9">
                    	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="form-group row">
                    <button class="btn btn-lg btn-primary btn-block col-5 mx-auto" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}