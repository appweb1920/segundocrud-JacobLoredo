<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Lista de Piezas</title>
</head>
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-3">
							<h2>Lista de Piezas</b></h2>
						</div>
						
						<div class="col-xs-9" >
							<a href="#addPieza" class="btn btn-success" data-toggle="modal"><i class="material-icons" >&#xE147;</i> <span>Nueva Pieza</span></a>
						</div>
						
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Nombre pieza</th>
							<th>Descripcion</th>
							<th>No. Piezas</th>
							<th>Costo por pieza</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

					@if (!is_null($piezas))
    					@foreach ($piezas as $P)
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>

							
								<td>{{$P->Nombre}}</td>
								<td>{{$P->Descripcion}}</td>
								<td>{{$P->NumeroPiezas}}</td>
								<td>{{$P->CostoPieza}}</td>
								<td >
									<a href="./EditarPuntoR/{{$P->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<a href="./EliminarP/{{$P->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								</td>
							</tr>
    					@endforeach
    				@endif
						
				
					</tbody>
				</table>
				
			</div>
		</div>        
    </div>
    <div id="addPieza" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="\" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Punto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre de la pieza</label>
							<input type="text" class="form-control" required name='NombreP'>
						</div>
						<div class="form-group">
							<label>Descripcion</label>
							<input type="text" class="form-control" required name ='DescripcionP'>
						</div>
						<div class="form-group">
							<label>No.Piezas</label>
							<input type="number" min="1" max="24"class="form-control" required name ='NPieza'>
                        </div>
                        <div class="form-group">
							<label>Costo por pieza</label>
							<input type="text" class="form-control" required name ='CostoPiezas'>
						</div>
						
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>