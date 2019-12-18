<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="width: 250px">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel" style="padding: 20px">
                <div class="pull-left image">
                    
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
       
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
