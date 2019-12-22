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
                    <br>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                </div>
             </div>
        @endif

        

        
            <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="active"><a href="/admin/dashboard"><i class='fa fa-home '></i> <span>Home</span></a></li>


            <li class="treeview">
            <a href="#"><i class="fa  fa-list"></i> <span>Course</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
            <li><a href="/admin/course_insertion"><i class='fa  fa-edit'></i> <span>Insert Course</span></a></li>
            <li><a href="/admin/course_view"><i class='fa fa-edit'></i> <span>View Course</span></a></li>
            
            
                </ul>
            </li>
            <li><a href="/admin/admin_result"><i class='fa fa-pencil '></i> <span>Result</span></a></li>
                         
                

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
