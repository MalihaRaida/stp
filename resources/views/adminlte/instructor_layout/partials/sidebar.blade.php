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
            <li class="active"><a href="/instructor/dashboard"><i class='fa fa-home '></i> <span>Home</span></a></li>
            <li class=""><a href="/instructor/course_registration"><i class='fa fa-calendar-check-o '></i> <span>Course Registration</span></a></li>
            <li class=""><a href="/instructor/instructor_result"><i class='fa fa-pencil '></i> <span>Result</span></a></li>
    </section>
    <!-- /.sidebar -->
</aside>
