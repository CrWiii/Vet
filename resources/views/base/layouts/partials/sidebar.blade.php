<aside class="main-sidebar">
    <section class="sidebar">
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/avatar5.png" height="35" class="img-circle" alt="User Image" />
                    <div style="margin: 35px;"></div>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('message.online') }}</a>
                </div>
            </div>
        @endif
        <form action="#" method="get" class="sidebar-form">
        </form>
        <ul class="sidebar-menu">
            <li class="header">{{ trans('message.header') }}</li>

            <li class="treeview">
                <a href="#"><i class="fa fa-wrench"></i><span>Mantenimientos</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('ListarUsuarios') }}"><i class='fa fa-user'></i>Usuarios</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i><span>gg</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="{{url('ListaSiniestros')}}"><i class='fa fa-user'></i><span></span>jj</a>
                    </li>
                    <li class="treeview">
                        <a href="{{url('/ReporteExcel')}}"><i class='fa fa-list-alt'></i><span></span>jj</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>