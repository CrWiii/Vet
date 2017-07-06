@extends('base.layouts.app')

@section('htmlheader_title')
	{{ trans('message.home') }}
@endsection


@section('main-content')
<style type="text/css">
	.modal {
    position: absolute;
}
</style>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-2" style="margin-left: 0px;padding: 0px !important;">
				<div class="box">
	            <div class="box-header with-border" style="width:100%;">
	            	<div style="width:25%; float: left; text-align: left;">
	            		<h1 class="box-title" style="font-size: 28px; padding-bottom: 10px;">Lista de Usuarios</h1><p>Total usuarios: </p>
	            		<!--<a target="_blank" href="\regis">Registrar Usuarios</a>-->
	            		<div class="col-md-5">
	            		<a href="{{URL::to('CrearUsuario')}}" class="btn btn-block btn-primary btn-xs"> Crear Usuario</a>
	            		</div>
	            	</div>
            	</div>
            	<div class="box-body">
            	<div class="col-xs-12 table-responsive">
              		<table class="table table-striped" style="font-size: 11px;">
                		<tbody>
                			<tr>
	                  			<!--<th style="padding: 4px">N°</th>-->
	                  			<th style="padding: 4px">Nombre Completo</th>
	                  			<th style="padding: 4px">Correo</th>
	                  			<th style="padding: 4px; padding-left: 35px !important;">Estado</th>
								<th style="padding: 4px; text-align: center;">Controles</th>
                			</tr>
                		
                		
                		@foreach($usuarios as $key => $usuario)
                			<tr>
								<td style="padding: 4px">{{ $usuario->name}}</td>
								<td style="padding: 4px">{{ $usuario->email }}</td>
							

								<td style="padding: 4px">@if($usuario->state==1) Activo @else Inactivo @endif</td>
								<td style="padding: 4px;width: 260px;">
									<div class="col-xs-2" style="padding: 0px;">
										<a id="asho" href="{{URL::to('ActualizarUsuario', array('id'=>$usuario->id))}}">
											<button id="Btncons" type="button" class="btn btn-block btn-primary btn-xs">Editar</button>
										</a>
									</div>
									<div class="col-xs-4" style="padding: 0px;padding-left: 2px;">
									<a id="test" href= "{{URL::to('DeshabilitarUsuario', array('id'=>$usuario->id))}}" >
											<button type="button" class="btn btn-block btn-danger btn-xs">Desactivar</button>
									</a>
									</div>
									<div class="col-xs-3" style="padding: 0px;padding-left: 2px;">
									<a id="test" href= "{{URL::to('HabilitarUsuario', array('id'=>$usuario->id))}}" >
											<button type="button" class="btn btn-block btn-danger btn-xs">Activar</button>
										</a>
									</div>
								</td>
                		@endforeach
            		  </tbody>
            		</table>
            	</div>
            <div class="box-footer clearfix">
            	{{ $usuarios->links('vendor.pagination.custom') }}
            </div>
            </div>	
          </div>
			</div>
		</div>
	</div>

<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript">
	$(document).on('click', '#userClientBtn', function(){
		var va = $(this).attr('data-id');
		var ed = $("[id='userClienthid'][data-id='"+va+"']");
		if(ed.css('display') == 'none'){
			$("[id='userClienthid'][data-id='"+va+"']").show();
		}else{
			$("[id='userClienthid'][data-id='"+va+"']").hide();
		}
	});
</script>
@endsection
