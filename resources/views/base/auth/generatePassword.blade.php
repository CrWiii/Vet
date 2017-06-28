@extends('base.layouts.auth')

@section('htmlheader_title')
    Activación Usuario
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app">
        <div class="login-box">
            <div>
              <h3 style="text-align: center;font-weight: bold;font-size: 1.8em;line-height: 1.42857143;">{{ trans('message.tit') }} </h3>
            </div>
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
        <div class="login-box-body">
        <p class="login-box-msg"> {{ trans('message.subtit') }}: <br> {{$result->email}}</p>
        <form action="{{ url('/ActivateUser', array('id'=>$result->id)) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('message.password') }}" name="password" style="color: #000000 !important"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('message.repassword') }}" name="password_confirmation" style="color: #000000 !important"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-6">
                   
                </div>
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.buttonactivateuser') }}</button>
                </div>
            </div>
        </form>

    </div>
   
    </div>

    </div>
    @include('base.layouts.partials.scripts_auth')
</body>
@endsection
