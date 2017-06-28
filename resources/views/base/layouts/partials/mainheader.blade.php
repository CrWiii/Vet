<!-- Main Header -->
<header class="main-header" style="background-color: #eff3f5 !important">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo" style="background-color: #eff3f5 !important">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini" style="background-color: #eff3f5 !important;"><!-- <img src="'/img/logo.jpg'" width="50" style="padding-top: 10px"> --></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" style="background-color: #eff3f5 !important;padding-top: 5px !important;padding-bottom: 5px !important;"><!-- <img src="" width="80"> --></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-color: #eff3f5 !important;">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: #eff3f5 !important;color: black !important">
            <span class="sr-only">{{ trans('message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        

        
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!--<li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('message.tabmessages') }}</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/dist/img/avatar5.png" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            {{ trans('message.supteam') }}
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>{{ trans('message.awesometheme') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">c</a></li>
                    </ul>
                </li>-->
                <!--<li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('message.notifications') }}</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> {{ trans('message.newmembers') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">{{ trans('message.viewall') }}</a></li>
                    </ul>
                </li>--><!--
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('message.tasks') }}</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <h3>
                                            {{ trans('message.tasks') }}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% {{ trans('message.complete') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">{{ trans('message.alltasks') }}</a>
                        </li>
                    </ul>
                </li>-->
                <li class="dropdown tasks-menu">
                <!-- <h3 class="box-title" style="font-size: 18px;margin-top: 15px;"><img src="{{url('img/logo_s.jpg')}}" width="25" style="margin-bottom: 3px">iniestros</h3> -->
                </li>
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 15px;margin-top: 10px !important;">
                            <!-- The user image in the navbar-->
                           
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span  style="color: black !important;">{{ Auth::user()->name }}</span>
                            <span class="glyphicon glyphicon-user" style="color: #5c6a71 !important;" aria-hidden="true"></span>
                        </a>
                        <ul class="dropdown-menu" style="margin-top: 13px !important;">
                            <!-- The user image in the menu -->
                            <!--<li class="user-header" style="height: 85px !important">
                                <img src="/dist/img/avatar5.png" class="img-circle" alt="User Image" />
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ trans('adminlte_lang::message.login') }}</small>
                                </p>
                            </li>-->
                            <!-- Menu Body -->
                            <!--<li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('message.followers') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('message.sales') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('message.friends') }}</a>
                                </div>
                            </li>-->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">{{ trans('message.profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ trans('message.signout') }}
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
            </ul>
        </div>
    </nav>
</header>