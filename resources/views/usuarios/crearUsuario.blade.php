@extends('base.layouts.app')

@section('htmlheader_title')
    {{ trans('message.home') }}
@endsection


@section('main-content')

<style type="text/css">
    .loading {    
        background-color: #ffffff;
        background-image: url("http://loadinggif.com/images/image-selection/3.gif");
        background-size: 25px 25px;
        background-position:right center;
        background-repeat: no-repeat;
    }
</style>

    <link rel="stylesheet" href="/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/plugins/select2/select2.css">
<div class="col-md-12" style="padding: 0px !important;">
                <div class="col-md-6">
                    <div class="box">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> {{ trans('message.someproblems') }}<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                    <div class="box-body">
                    <p class="login-box-msg">{{ trans('message.registermember') }}</p>
                    <form action="{{ url('/registrarUsuario') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group has-feedback">
                            <input style="width: 100%;color:#000000;" type="text" class="form-control" placeholder="{{ trans('message.firstname') }}" name="firstname" id="firstname" value="{{ old('firstname') }}" required=""/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input style="width: 100%;color:#000000;" type="text" class="form-control" placeholder="{{ trans('message.lastname') }}" name="lastname" id="lastname" value="{{ old('lastname') }}" required=""/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input style="width: 100%;color:#000000;" type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email" id="email" value="{{ old('email') }}" required=""/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input style="width: 100%;color:#000000;" type="text" class="form-control" placeholder="{{ trans('message.phone') }}" name="phone" id="phone" value="{{ old('phone') }}"/>
                            <span class="fa fa-phone form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Seleccione un perfil:</label>
                            <select class="form-control select2">
                              <option></option>
                            </select>
                        </div>

                        <div class="form-group has-feedback">
                        </div>                    

                        <div class="row">
                            <div class="col-xs-1">

                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-4 col-xs-push-1">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">

// $(document).on('change','#Cias',function(){
//     var ciaSelected = $('select#Cias').val();
//     var prof = $('#profile').val();
//     var listCias =  $(this).val();
//     var lo = listCias.length;
//     switch(lo){
//         case 1:
            
//             $("#profile option[value='1']").hide();
//             $("#profile option[value='2']").show();
//             $("#profile option[value='3']").show();
//             $("#profile option:selected").prop("selected", false)
//         break;
//         case 2:
//             $("#profile option[value='1']").attr('selected',true);
//             $("#profile option[value='2']").hide();
//             $("#profile option[value='3']").hide();
//             $("#profile option[value='1']").show();
//         break;
//         case 3:
//             $("#profile option[value='1']").attr('selected',true);
//             $("#profile option[value='2']").hide();
//             $("#profile option[value='3']").hide();
//             $("#profile option[value='1']").show();
//         break;
//         case 4:
//             $("#profile option[value='1']").attr('selected',true);
//             $("#profile option[value='2']").hide();
//             $("#profile option[value='3']").hide();
//             $("#profile option[value='1']").show();
//         break;
//         case 5:
//             $("#profile option[value='1']").attr('selected',true);
//             $("#profile option[value='2']").hide();
//             $("#profile option[value='3']").hide();
//             $("#profile option[value='1']").show();
//         break;
//     }
//     $('#profile').removeAttr('disabled');
//     if(ciaSelected && ciaSelected.length==1){
//         $('#RamosDiv').show();
//         $.ajax({
//             url         : '/getRamosByCia/'+ciaSelected,
//             type        : 'get',
//             error       : function(){
//                 loading
//             },
//             beforeSend  : function(){
//                 //$(".overlay").css("display", "block");
//             },
//             success     : function(data){
//                 //$(".overlay").css("display", "none");
//             },
//         })
//             .done(function(data){
//                 //$("#case-container").empty().html(data);
//                 $('#Ramos').empty();
//                 var RamosOptions = '';
//                     $(data).each(function(){
//                         RamosOptions += "<option value='"+this.id+"'>" + this.description + "</option>";
//                     });
//                 $('#Ramos').append(RamosOptions);
//                 //$('#PRODUCTO').removeAttr('disabled','disabled');
//                 //$('#Cia').append(option);
//             })
//             .fail(function(jqXHR, ajaxOptions, thrownError){
//                 console.log('No response from server');
//                //$(".overlay").css("display", "none");
//         });
//     }else{
//         $('#Ramos').empty();
//         $('#RamosDiv').hide();
//     }
//     if(ciaSelected != 2){
//         $("#profile option[value='4']").hide();
//         $("#profile option[value='5']").hide();
//     }else{
//         $("#profile option[value='4']").show();
//         $("#profile option[value='5']").show();
//     }
//     if(ciaSelected == null){
//         $('#profile').val('');
//         $('#profile').attr('disabled','disabled');
//         $("#contratante option:selected").removeAttr("selected");
//         $('.select2-selection__rendered').empty();
//         $('#contratanteDiv').hide();
//         $('#Ramos').empty();

//     }
// });

// $(document).on('change','#profile',function(){
//     var prof = $(this).val();
//     var ciaSelected = $('select#Cias').val();
//     if(ciaSelected == 2){
//         if(prof==4 || prof==5){
//             console.log(ciaSelected + ' ');
//             $('#contratanteDiv').show();
//         }else{
//             $('#contratanteDiv').hide();
//         }
//     }
// });


//     jQuery(document).ready(function($) {
//         $(".select2").select2();
//     });
</script>