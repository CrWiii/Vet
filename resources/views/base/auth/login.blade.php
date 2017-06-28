@extends('base.layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<style type="text/css">
    .btn-primary{
        color: #fff;
        background-color: #000000;
        border-color: #000000;
    }
</style>
<body class="hold-transition login-page" style="background: #ffffff;">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
            <div class="overlay" style="display: none;">
                    <div class="cssload-spin-box"></div>
                </div>
              <!--<b>ACME </b>-->
              <div id="logoo">
                  <img id="logo" src="{{url('/img/logo.jpg')}}" width="280" style="padding-left: 20px;">
              </div>
              

             <!-- <h2 id="logoESAM" style="margin: 0px !important"><img src="img/logo-e.png" width="25" style="margin-bottom: 3px"></h2> -->
            </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                 {{ trans('message.someproblems') }}<br>
                <!--<ul>
                    <li>{{trans('message.errorlogins')}}</li>
                </ul>-->
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="login-box-body" style="border: 2px solid #3c8dbc;border-radius: 10px;">
        <p class="login-box-msg"> {{ trans('message.siginsession') }} </p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" id="email" name="email" style="color: #000000 !important"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('message.password') }}" name="password" style="color: #000000 !important"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('message.remember') }}
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <button type="submit" id="signin" class="btn btn-primary btn-block btn-flat" style="background-color: #3c8dbc; border-color: #3c8dbc;">{{ trans('message.buttonsign') }}</button>
                </div>
            </div>
        </form>
        <a href="{{ url('/password/reset') }}">{{ trans('message.forgotpassword') }}</a><br>
    </div>
    </div>
    </div>
</body>
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript">
/*$(document).on('click','#signin',function(){
    $(this).hide();
});*/
// $(document).on('blur','#email', function(){
//     $email = $(this).val();
//     $.ajax({
//         url     : '/findCiaByUser/',
//         type    : 'get',
//         data    : {'email':$email},
//         error       : function(){},
//         beforeSend  : function(){},
//         success     : function(data){},
//     }).done(function(data){
//         var c=data[0];
//         switch(c){
//             case '1':
//                 if($('#mapfre').length){
//                 }else{
//                     $('#logoo').prepend('<img id="mapfre" src="{{url('/img/medik/mapfre.png')}}" width="200" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#mapfre)").remove();
//                 }
//             break;
//             case '2':
//                 if($('#chubb').length){
//                 }else{
//                     $('#logoo').prepend('<img id="chubb" src="{{url('/img/medik/chubb.png')}}" width="280" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#chubb)").remove();
//                 }
//             break;
//             case '3':
//                 if($('#pacifico').length){
//                 }else{
//                     $('#logoo').prepend('<img id="pacifico" src="{{url('/img/medik/pacifico.png')}}" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#pacifico)").remove();
//                 }
//             break;
//             case '4':
//                 if($('#cardif').length){
//                 }else{
//                     $('#logoo').prepend('<img id="cardif" src="{{url('/img/medik/cardif.png')}}" width="280" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#cardif)").remove();
//                 }
//             break;
//             case '5':
//                 if($('#protecta').length){
//                 }else{
//                     $('#logoo').prepend('<img id="protecta" src="{{url('/img/medik/protecta.png')}}" width="280" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#protecta)").remove();
//                 }
//             break;
//             case '0':
//                 if($('#logo').length){
//                 }else{
//                     $('#logoo').prepend('<img id="logo" src="{{url('/img/medik/Medik-logo.png')}}" width="280" style="margin-bottom: 20px;" />');
//                     $("#logoo").children(":not(#logo)").remove();
//                 }
//             break;
//         }
//     }).fail(function(data){});
// });
</script>
@endsection