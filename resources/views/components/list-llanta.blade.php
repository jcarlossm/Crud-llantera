<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Fabricante</th>
						<th>Calificación</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
                @foreach($llantas as $user)
                        <tr>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->fabricante }}</td>
                            <td>{{ $user->calificacion }}</td>
                            <td>{{ $user->calificacion }}</td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
			<div class="clearfix">

			</div>
		</div>
	</div>        
</div>