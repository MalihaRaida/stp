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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home '></i> <span>Home</span></a></li>


            <li class="treeview">
            <a href="#"><i class="fa  fa-list"></i> <span>Faculty Loading</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
            <li><a href="/admin/faculty_loading"><i class='fa  fa-edit'></i> <span>Add faculty Loading</span></a></li>
            <li><a href="/admin/edit_faculty_loading"><i class='fa fa-edit'></i> <span>View faculty Loading</span></a></li>
            
            
                </ul>
            </li>

        
        
        <!-- <li class="treeview">
            <a href="#"><i class="fa fa-gears"></i> <span>Maintenance Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
                <li><a href="/admin/section_management"><i class='fa fa-gear'></i> <span>Section Management </span></a></li>
                <li><a href="/admin/room_management"><i class='fa  fa-gear'></i> <span>Room Management</span></a></li>
                </ul>
            </li> -->

        <li class="treeview">
            <a href="#"><i class="fa fa-folder"></i> <span>Curriculum Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
            <li><a href="/admin/curriculum_management/add_curriculum"><i class='fa fa-edit'></i> <span>Add Curriculum</span></a></li>
            <li><a href="/admin/curriculum_management/curriculum"><i class='fa fa-edit'></i> <span>View Curriculum</span></a></li>
            
            
                </ul>
            </li>

            
        <li class="treeview">
            <a href="#"><i class="fa fa-male"></i> <span>Instructor</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
        <ul class="treeview-menu">
                <li><a href="/admin/instructor/add_instructor"><i class="fa fa-user-plus"></i> <span>Add Instructor</span></a></li>
                <li><a href="/admin/instructor/view_instructor_account"><i class="fa fa-circle-o"></i> <span>View Instructors</span></a></li>
                </ul>
                </li>
              
        <li class="treeview">
            <a href="#"><i class="fa fa-pencil"></i> <span>Reports</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
        <ul class="treeview-menu">
                <li><a href="/admin/instructor/instructor_reports"><i class="fa fa-circle-o"></i> <span>Instructor Reports</span></a></li>
                <li><a href="{{url('/admin/reports/rooms_occupied')}}"><i class="fa fa-circle-o"></i> <span>Course Occupied</span></a></li>
                </ul> 
                </li>
                         
                

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
