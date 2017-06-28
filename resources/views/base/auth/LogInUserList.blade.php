@extends('base.layouts.app')

@section('htmlheader_title')
	{{ trans('message.home') }}
@endsection


@section('main-content')
<style type="text/css">
	.modal {
    	position: absolute;
	}
	.users-list > li {
    	width:  15%;
    }
    .users-list > li img {
    	border-radius: 0% !important;
    }
    .users-list-name{
    	margin-bottom: 0px;
    	font-size: 0.8em;
    	text-align: left;
    }
    .sub{
    	font-size: 0.6em !important;
    	display: none;
    }
</style>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-md-offset-2" style="margin-left: 0px;padding: 0px !important;">
            	<div class="box-body">
            		<div class="col-xs-12" style="margin-left: 0px;padding: 0px !important;">
            			<div class="box box-danger">
			                <div class="box-header with-border" style="width:100%;">
			                  <h3 class="box-title">Usuarios Conectados</h3>

			                  <div class="box-tools pull-right">
			                    <span class="label label-danger" id="CountUserOnline"></span>
			                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                    </button>
			                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
			                    </button>
			                  </div>
			                </div>
			                <div class="box-body no-padding">
			                	<ul class="users-list clearfix">
			                	<?php $CountUserOnline=0; ?>
			                	@if($Users)
			                		@foreach($Users as $user)
			                			@if($user->isOnline())
			                				<?php $CountUserOnline++; ?>
			                				<li>
						                      	<img src="{{url('img/user_img.jpg')}}" alt="User Image">
						                      	<p class="users-list-name"><i class="fa fa-circle text-green"></i>{{' '.$user->firstname}} {{$user->lastname}}</p>
						                      	<p class="users-list-name"><i class="fa fa-user"></i>{{' '.$user->email}}</p>
						                      	
						                      	<p class="users-list-name"><i class="fa fa-folder-open"></i>{{' '.$user->profile->description}}</p>
						                      	<p class="users-list-name"><i class="fa fa-phone-square"></i> {{' '.$user->celphone}}</p>
						                      	
						                      	<?php $f=1; ?>
						                      	@foreach($user->cias as $cia)
						                      		<p class="users-list-name"><a href="#" id="cia" data-id="{{$user->id}}{{$cia->id}}"><i class="fa fa-copyright"></i></a>{{" ".$f."- ".$cia->description}}</p>
						                      		<?php $i=1; ?>
						                      		@foreach($cia->Ramos as $ramo)
						                      			<p class="users-list-name sub" id="ramo" data-id="{{$user->id}}{{$cia->id}}"><i class="fa fa-registered"></i>{{" ".$f.".".$i."- ".$ramo->description}}</p>
						                      			<?php $i++; ?>
						                      		@endforeach
						                      		<?php $f++; ?>
						                      	@endforeach
						                      	<!-- <span class="users-list-date">Today</span>https://www.youtube.com/watch?v=21aVzSN30f8 -->
						                    </li>
			                			@endif
			                		@endforeach
			                	@endif
				                <input type="hidden" id="CountUsers" value="{{$CountUserOnline}}">
<!-- 			                    <li>
			                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Norman</a>
			                      <span class="users-list-date">Yesterday</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Jane</a>
			                      <span class="users-list-date">12 Jan</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user6-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">John</a>
			                      <span class="users-list-date">12 Jan</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user2-160x160.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Alexander</a>
			                      <span class="users-list-date">13 Jan</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user5-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Sarah</a>
			                      <span class="users-list-date">14 Jan</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user4-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Nora</a>
			                      <span class="users-list-date">15 Jan</span>
			                    </li>
			                    <li>
			                      <img src="dist/img/user3-128x128.jpg" alt="User Image">
			                      <a class="users-list-name" href="#">Nadia</a>
			                      <span class="users-list-date">15 Jan</span>
			                    </li> -->
			                  </ul>
			                  <!-- /.users-list -->
			                </div>
			                <!-- /.box-body -->
			                <div class="box-footer text-center">

			                </div>
			                <!-- /.box-footer -->
			              </div>            		
	            	</div>
            	</div>	
        	</div>
		</div>
	</div>

<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript">
	$(document).on('click', '#cia', function(){
		var va = $(this).attr('data-id');
		var ed = $("[id='ramo'][data-id='"+va+"']");
		if(ed.css('display') == 'none'){
			$("[id='ramo'][data-id='"+va+"']").show();
		}else{
			$("[id='ramo'][data-id='"+va+"']").hide();
		}
	});
	$(document).ready(function(){
		var cantuseroline = $('#CountUsers').val() + ' Usuarios Online';
		$('#CountUserOnline').text(cantuseroline);
	});
</script>
@endsection