{% extends "layout/default.php" %}
{% block title %}
    Ver registro | {{ APP_NAME }}
{% endblock %}
{% block content %}
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <form class="col col-md-7 form-signin mt-5">
                <h1 class="h3 mb-3 text-center font-weight-normal">Ver Registro</h1>
                <div class="form-group row">
                    <label for="inputDescription" class="col-3 text-right">Descripción</label>
                    <div class="col-9">
                       <textarea type="text" id="inputDescription" name="description" class="form-control" placeholder="Descripción" rows="3" required readonly>{{ description }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLocation" class="col-3 text-right">Sede</label>
                    <div class="col-9">
                        <input type="text" id="inputLocation" name="location" class="form-control" placeholder="Sede" value="{{ location }}" required readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAmount" class="col-3 text-right">Presupuesto</label>
                    <div class="col-9 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" id="inputAmount" name="amount" class="form-control" placeholder="Presupuesto" value="{{ amount|number_format(2, ',', '.') }}" required readonly>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="inputName" class="col-3 text-right">Nombre</label>
                    <div class="col-9">
                        <input type="text" id="inputName" name="name" class="form-control-plaintext" placeholder="Nombre" value="{{ name }}" required readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-3 text-right">Correo Electrónico</label>
                    <div class="col-9">
                        <input type="email" id="inputEmail" name="email" class="form-control-plaintext" placeholder="Correo Electrónico" value="{{ email }}" required readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <a class="btn btn-lg btn-primary btn-block col-5 mx-auto" href="{{ HTTP_ROOT }}/viewuser/edit">Editar</a>
                </div>
            </form>
        </div>
    </div>
{% endblock %}