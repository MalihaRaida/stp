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
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
             </div>
        @endif

       
            <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home '></i> <span>Home</span></a></li>
            <li class=""><a href="{{ url('/instructor/faculty_loading') }}"><i class='fa fa-calendar-check-o '></i> <span>Course View</span></a></li>
            <li class=""><a href="{{url('/instructor/semester_occupied')}}"><i class='fa fa-calendar-check-o '></i> <span>Semester Wise course View</span></a></li>
            <li class=""><a href="{{ url('/account/change_password') }}"><i class='fa fa-lock '></i> <span>Change Password</span></a></li>
    </section>
    <!-- /.sidebar -->
</aside>
