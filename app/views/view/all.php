{% extends "layout/default.php" %}
{% block title %}
    Ver todos los registros | {{ APP_NAME }}
{% endblock %}
{% block content %}
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col">
            	<h1 class="h3 mb-3 text-center font-weight-normal">Ver Registros</h1>
            	<table class="table table-sm">
            		<thead>
            			<tr>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/id{% if (url.0 == 'id') and (url.1 != 'desc') %}/desc{% endif %}">#</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/unique_id{% if (url.0 == 'unique_id') and (url.1 != 'desc') %}/desc{% endif %}">Proceso</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/name{% if (url.0 == 'name') and (url.1 != 'desc') %}/desc{% endif %}">Nombre</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/email{% if (url.0 == 'email') and (url.1 != 'desc') %}/desc{% endif %}">Email</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/location{% if (url.0 == 'location') and (url.1 != 'desc') %}/desc{% endif %}">Sede</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/amount{% if (url.0 == 'amount') and (url.1 != 'desc') %}/desc{% endif %}">Presupuesto</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/created_at{% if (url.0 == 'created_at') and (url.1 != 'desc') %}/desc{% endif %}">Fecha</a></th>
            				<th scope="col"><a href="{{ HTTP_ROOT }}/viewuser/all/description{% if (url.0 == 'description') and (url.1 != 'desc') %}/desc{% endif %}">Descripción</a></th>
            			</tr>
            		</thead>
            		<tbody>
            			{% for user in users %}
							<tr>
								<th scope="row">{{ user.id|e }}</th>
								<td>{{ user.unique_id|e }}</td>
								<td>{{ user.name|e }}</td>
								<td>{{ user.email|e }}</td>
								<td>{{ user.location|e }}</td>
								<td>$ {{ user.amount|number_format(2, ',', '.') }}</td>
								<td>{{ user.created_at|e }}</td>
								<td>{{ user.description|e }}</td>
							</tr>
						{% endfor %}
            		</tbody>
            	</table>
            </div>
        </div>
    </div>
{% endblock %}