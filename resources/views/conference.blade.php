
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>THS</title>

        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    </head>
    <body>
        
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
           
           
          <!-- SIDENAVBAR -->
   <nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="dashboard.php">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">T</span><span class="font-size-xl text-primary">HS</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                    </a>
                    <ul class="list-inline mt-10">
 
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="admin-profile.php">ADMIN</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="admin-profile.php">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="logout.php">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="open">
                        <a href="dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                       
                    </li>
                  
                    <!-- <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden"></span></li> -->
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu"><i class="si si-puzzle"></i><span class="sidebar-mini-hide"></span>Conferences</a>
                        <ul>
                            <li>
                                <a href="addconference.html">Add Conference</a>
                            </li>
                            <li>
                                <a href="allconference.html">Manage Conferences</a>
                            </li>
                        </ul>
                    </li>
                   
                  
                    <li class="open">
                        <a href="managenews.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Manage News</span></a>
                       
                    </li>
                
                   
                    <li>
                        <a  href="managechat.html"><i class="si si-vector"></i><span class="sidebar-mini-hide">Manage Chats</span></a>
                     
                    </li>
                
         
                
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>





         <!-- HEADER -->

    
                     <header id="page-header">
                         <!-- Header Content -->
                         <div class="content-header">
                             <!-- Left Section -->
                             <div class="content-header-section">
                                 <!-- Toggle Sidebar -->
                                 <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                 <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                                     <i class="fa fa-navicon"></i>
                                 </button>
                                
                                 <div class="btn-group" role="group">
                                     <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i class="fa fa-wrench"></i>
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                                         <h6 class="dropdown-header">Header</h6>
                                         <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                         <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                         <div class="d-none d-xl-block">
                                             <h6 class="dropdown-header">Main Content</h6>
                                             <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                         </div>
                                         <div class="dropdown-divider"></div>
                                        
                                     </div>
                                 </div>
                                 <!-- END Layout Options -->
         
                                 <!-- Color Themes (used just for demonstration) -->
                                 <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                                 <div class="btn-group" role="group">
                                     <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i class="fa fa-paint-brush"></i>
                                     </button>
                                     <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                         <h6 class="dropdown-header text-center">Color Themes</h6>
                                         <div class="row no-gutters text-center mb-5">
                                             <div class="col-4 mb-5">
                                                 <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                             <div class="col-4 mb-5">
                                                 <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                             <div class="col-4 mb-5">
                                                 <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                             <div class="col-4 mb-5">
                                                 <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                             <div class="col-4 mb-5">
                                                 <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                             <div class="col-4 mb-5">
                                                 <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                                     <i class="fa fa-2x fa-circle"></i>
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="dropdown-divider"></div>
                                         <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
                                         <div class="dropdown-divider"></div>
                                       
                                     </div>
                                 </div>
                                 <!-- END Color Themes -->
                             </div>
                             <!-- END Left Section -->
         
                             <!-- Right Section -->
                             <div class="content-header-section">
                                 <!-- User Dropdown -->
                                 <div class="btn-group" role="group">
        
                                     <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ADMIN<i class="fa fa-angle-down ml-5"></i>
                                     </button>
                                    
                                     <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                         <a class="dropdown-item" href="admin-profile.php">
                                             <i class="si si-user mr-5"></i> Profile
                                         </a>
                                       
                                         <div class="dropdown-divider"></div>
         
                                         <!-- Toggle Side Overlay -->
                                         <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                         <a class="dropdown-item" href="change-password.php" data-toggle="layout" data-action="side_overlay_toggle">
                                             <i class="si si-wrench mr-5"></i> Settings
                                         </a>
                                         <!-- END Side Overlay -->
         
                                         <div class="dropdown-divider"></div>
                                         <a class="dropdown-item" href="logout.php">
                                             <i class="si si-logout mr-5"></i> Sign Out
                                         </a>
                                     </div>
                                 </div>
                                 <!-- END User Dropdown -->
         
                                 <!-- Toggle Side Overlay -->
                                 <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                
                             </div>
                             <!-- END Right Section -->
                         </div>
                         <!-- END Header Content -->
         
                         
                         <!-- Header Loader -->
                         <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                         <div id="page-header-loader" class="overlay-header bg-primary">
                             <div class="content-header content-header-fullrow text-center">
                                 <div class="content-header-item">
                                     <i class="fa fa-sun-o fa-spin text-white"></i>
                                 </div>
                             </div>
                         </div>
                         <!-- END Header Loader -->
                     </header>
                 


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Comference name</h2>


                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="speaker.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">

                                    

                                    <div class="ribbon-box">20</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/speaker.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Speakers</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="sponsors.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">10</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/sponsor.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Sponsors</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="polls.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">30</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/poll.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Polls</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center btn btn-info bg-info border-0 text-white" href="" data-toggle="modal" data-target="#addEvent">  
                               Add Events
                            </a>

                            <a class="block text-center btn btn-info bg-info border-0 text-white" href="" data-toggle="modal" data-target="#addPostModal">
                                Add Category
                             </a>
                        </div>

                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="gallery.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">10</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/gallery.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Gallery</p>
                                </div>
                            </a>
                        </div>


                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="advertise.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">10</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/gallery.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Advertise</p>
                                </div>
                            </a>
                        </div>


                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="exhbitos.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">10</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/sponsor.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Exhibitors</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="eventeam.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
  
                                    <div class="ribbon-box">10</div>
                                    <p class="mt-5">
                                        <img style="width: 50px;" src="assets/img/photos/sponsor.png" alt="">
                                    </p>
                                    <p class="font-w600 text-white">Event Team</p>
                                </div>
                            </a>
                        </div>
                      
                        
                    
                        <!-- END Row #1 -->
                    </div>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">ALL Events</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th> ID</th>
                                        <th class="d-none d-sm-table-cell">Events Name</th>
                                        <th class="d-none d-sm-table-cell">Speaker</th>
                                        <th class="d-none d-sm-table-cell">Location</th>
                                        <th class="d-none d-sm-table-cell">Category</th>
                                        <th class="d-none d-sm-table-cell">Description</th>
                                        <th class="d-none d-sm-table-cell">date and time</th>
                                        <th class="d-none d-sm-table-cell">Uploaded File</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                       </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="font-w600">1</td>
                                        <td class="font-w600">Education</td>
                                        <td class="font-w600">Kelvin Msindai</td>
                                        <td class="font-w600">Kigamboni</td>
                                        <td class="font-w600">Status</td>
                                        <td class="font-w600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem sed beatae expedita.</td>
                                        <td class="font-w600">12:23</td>
                                        <td class="font-w600">
                                            <img width="16px" src="assets/img/avatars/avatar0.jpg" alt="">
                                        </td>
                                    
 
                                         <td class="d-none d-sm-table-cell"><a href="view-booking-detail.php?editid=<?php echo htmlentities ($row->ID);?>&&bookingid=<?php echo htmlentities ($row->BookingID);?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    </tr>

                                    
                                
                                
                                
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->


                    

                    <!-- END Dynamic Table Simple -->

    

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

 
        </div>
        <!-- END Page Container -->








                 <!-- MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-light bg-gd-emerald">
                    
                    
                    
                        <h3 class="block-title">Add Category</h3>

                    <button class="close" data-dismiss = "modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                            
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" name="" id="" class="form-control" placeholder="Please write name of category" aria-describedby="helpId">
                
                                </div>
 
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Add Category
                                        </button>
                                    </div>
                                </div> 

                    </form>
            </div>
            </div>
      </div>
    </div>




                 <!-- EVENT MODAL  -->
                 <div class="modal fade" id="addEvent">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-info text-light bg-gd-emerald">
                                
                                
                                
                                    <h3 class="block-title">Add Events</h3>
            
                                <button class="close" data-dismiss = "modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                            
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-email">Event Name:</label>
                                        <div class="col-12">
                                             <input type="text" class="form-control" name="sername" value="" required='true'>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-password">Location</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="serprice" value="" required='true'>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-password">Category</label>
                                        <div class="col-12">
                                            
                                            <select name="" id="input" class="form-control" required="required">
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                            </select>
                                            
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-password">Speakers</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="serprice" value="" required='true'>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-email">Description:</label>
                                        <div class="col-12">
                                             
                                             <textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
                                             
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-12" for="register1-email">File Upload</label>
                                        <div class="col-12">
                                             <input type="file" name="" id="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-alt-success" name="submit">
                                                <i class="fa fa-plus mr-5"></i> Add Event
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                  </div>
                </div>


        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
    </body>
