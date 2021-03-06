<body class="purple">
    <div class="sunrise-loading"></div>
    <div class="vertical-nav">
        <button class="collapse-menu"><i class="icon-dehaze"></i></button>
        <div class="logo">
            <a href="index.html"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="Sunrise"></a>
        </div>
        <div class="user-info">
            <div class="user-img"><img src="<?php echo base_url('assets/img/user7.png');?>" alt="User Info"> <span class="likes-info">26</span></div>
            <h5 class="user-name-o">Cassandra</h5>
            <p class="profile-complete">Profile Complete - 78%</p>
        </div>
        <ul class="menu clearfix">
            <li class="active selected"><a href="<?php echo base_url('super/dashboard');?>"><i class="icon-graphic_eq"></i> <span class="menu-item">Dashboards</span></a>

            </li>
            <li><a href="#"><i class="icon-devices_other"></i> <span class="menu-item">Academic</span> <span class="down-arrow"></span></a>
                <ul>
                    <li><a href="<?php echo base_url('super/classes');?>">Class</a></li>
                    <li><a href="<?php echo base_url('super/sections');?>">Section</a></li>
                    <li><a href="<?php echo base_url('super/subjects');?>">Subjects</a></li>
                    <li><a href="<?php echo base_url('super/syllabus');?>">Syllabus</a></li>
                    <li><a href="<?php echo base_url('super/timetable');?>">Time Table</a></li>
                    <li><a href="<?php echo base_url('super/assignments');?>">Assignments</a></li>
                    <li><a href="<?php echo base_url('super/importantlinks');?>">Important Links</a></li>
                    <li><a href="<?php echo base_url('super/holidays');?>">Holidays</a></li>
                    <li><a href="<?php echo base_url('super/events');?>">News and Events</a></li>
                    <li><a href="<?php echo base_url('super/noticeboard');?>">Notice Board</a></li>

                </ul>
            </li>

			 <li><a href="<?php echo base_url('super/students');?>"><i class="icon-timeline"></i> <span class="menu-item">Students</span></a></li>
            <li><a href="<?php echo base_url('super/parents');?>"><i class="icon-timeline"></i> <span class="menu-item">Parents</span></a></li>
            <li><a href="<?php echo base_url('super/teachers');?>"><i class="icon-av_timer"></i> <span class="menu-item">Teachers</span></a></li>
            <li><a href="#"><i class="icon-pie_chart_outlined"></i> <span class="menu-item">Attendance</span> <span class="down-arrow"></span></a>
                <ul>
                    <li><a href="<?php echo base_url('super/teacherAttendance');?>">Teachers</a></li>
                    <li><a href="<?php echo base_url('super/studentAttendance');?>">Students</a></li>
                    <li><a href="<?php echo base_url('super/employeeAttendance');?>">Other Employees</a></li>
                    <li><a href="<?php echo base_url('super/attendaceReport');?>">Attendance Reports</a></li>


                </ul>
            </li>
            <li><a href="#"><i class="icon-shopping_basket"></i> <span class="menu-item">Leave Management</span> <span class="down-arrow"></span></a>
                     <ul class="collapse">
                         <li><a href="">Leave Types</a></li>
                         <li><a href="invoice.html">Leave Request</a></li>
                         <li><a href="invoice.html">Student</a></li>
                         <li><a href="pricing.html">Teacher</a></li>
                         <li><a href="pricing.html">Others</a></li>
                     </ul>
                </li>
			 <li><a href="#"><i class="icon-shopping_basket"></i> <span class="menu-item">Accounts</span> <span class="down-arrow"></span></a>
                <ul class="collapse">
                    <li><a href="calendar.html">Fees Collection</a></li>
                    <li><a href="invoice.html">Expenses Types</a></li>
                    <li><a href="invoice.html">All Expenses</a></li>
                    <li><a href="pricing.html">Transactions</a></li>
                    <li><a href="pricing.html">Transaction Mode</a></li>
                    <li><a href="pricing.html">Transaction Reports</a></li>
                </ul>
            </li>
			        <li><a href="#"><i class="icon-shopping_basket"></i> <span class="menu-item">Human Resources</span> <span class="down-arrow"></span></a>
                <ul class="collapse">
                    <li><a href="calendar.html">Employees</a></li>
                    <li><a href="invoice.html">Salary</a></li>
                    <li><a href="invoice.html">Interviews</a></li>
                </ul>
            </li>

            <li><a href="#"><i class="icon-shopping_basket"></i> <span class="menu-item">Notifications</span> <span class="down-arrow"></span></a>
                <ul class="collapse">
                    <li><a href="calendar.html">Students</a></li>
                    <li><a href="invoice.html">Parents</a></li>
                    <li><a href="pricing.html">Teachers</a></li>
                    <li><a href="pricing.html">Others</a></li>
                </ul>
            </li>
			 <li><a href="#"><i class="icon-shopping_basket"></i> <span class="menu-item">Messages</span> <span class="down-arrow"></span></a>
                <ul class="collapse">
                    <li><a href="calendar.html">Students</a></li>
                    <li><a href="invoice.html">Parents</a></li>
                    <li><a href="pricing.html">Teachers</a></li>
                    <li><a href="pricing.html">Others</a></li>
                </ul>
            </li>
            <li><a href="gallery.html"><i class="icon-monochrome_photos"></i> <span class="menu-item">Hostel</span></a></li>
            <li><a href="gallery.html"><i class="icon-monochrome_photos"></i> <span class="menu-item">Library</span></a></li>
            <li><a href="gallery.html"><i class="icon-monochrome_photos"></i> <span class="menu-item">Transport</span></a></li>
            <li><a href="gallery.html"><i class="icon-monochrome_photos"></i> <span class="menu-item">Gate Pass</span></a></li>
            <li><a href="#"><i class="icon-domain"></i> <span class="menu-item">Settings</span> <span class="down-arrow"></span></a>
                <ul class="collapse">

                    <li><a href="<?php echo base_url('super/master/add');?>">Profile Settings</a></li>
                    <li><a href="<?php echo base_url('super/academicyear');?>">Academic Year</a></li>
                    <li><a href="<?php echo base_url('super/schools');?>">School Settings</a></li>
                    <li><a href="<?php echo base_url('super/roles');?>">Roles</a></li>
                    <li><a href="<?php echo base_url('super/users');?>">Users</a></li>
                    <li><a href="wysiwyg-editor.html">Permissions</a></li>
                    <li><a href="<?php echo base_url('super/templates');?>">SMS/Notification Templates</a></li>

                    <li><a href="<?php echo base_url('super/resetPassword');?>">Reset Password</a></li>
                    <li><a href="wysiwyg-editor.html">Languages</a></li>
                </ul>
            </li>

        </ul>
    </div>
