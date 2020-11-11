<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Editar Piezas</title>
</head>
<body>
   
		
				<form action="\ActualizarP\{{$piezas->id}}" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Modifiar Pieza</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre de la pieza</label>
							<input type="text" class="form-control" required name='NombreP' value='{{$piezas->Nombre}}'>
						</div>
						<div class="form-group">
							<label>Descripcion</label>
							<input type="text" class="form-control" required name ='DescripcionP' value='{{$piezas->Descripcion}}'>
						</div>
						<div class="form-group">
							<label>Numero de Piezas</label>
							<input type="number" min="1" class="form-control" required name ='NPieza' value='{{$piezas->NumeroPiezas}}'>
						</div>
						<div class="form-group">
							<label>Costo por pieza</label>
							<input type='number'min="1"  class="form-control" required name ='CostoPiezas' value='{{$piezas->CostoPieza}}'>
						</div>
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Editar">
					</div>
				</form>
			
</body>
</html>