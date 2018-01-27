                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Admin Dashboard
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                        </div>
                                        <div class="desc"> New Feedbacks </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                                        <div class="desc"> Total Profit </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <div class="visual">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="549">0</span>
                                        </div>
                                        <div class="desc"> New Orders </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                    <div class="visual">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> +
                                            <span data-counter="counterup" data-value="89"></span>% </div>
                                        <div class="desc"> Brand Popularity </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                            <span class="caption-helper">weekly stats...</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn dark btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">New</label>
                                                <label class="btn dark btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="site_statistics_loading">
                                            <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                        <div id="site_statistics_content" class="display-none">
                                            <div id="site_statistics" class="chart"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-share font-red-sunglo hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                            <span class="caption-helper">monthly stats...</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                                    <span class="fa fa-angle-down"> </span>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;"> Q1 2014
                                                            <span class="label label-sm label-default"> past </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Q2 2014
                                                            <span class="label label-sm label-default"> past </span>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="javascript:;"> Q3 2014
                                                            <span class="label label-sm label-success"> current </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> Q4 2014
                                                            <span class="label label-sm label-warning"> upcoming </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="site_activities_loading">
                                            <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                        <div id="site_activities_content" class="display-none">
                                            <div id="site_activities" style="height: 228px;"> </div>
                                        </div>
                                        <div style="margin: 20px 0 10px 30px">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-sm label-success"> Revenue: </span>
                                                    <h3>$13,234</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-sm label-info"> Tax: </span>
                                                    <h3>$134,900</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-sm label-danger"> Shipment: </span>
                                                    <h3>$1,134</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-sm label-warning"> Orders: </span>
                                                    <h3>235090</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-bubbles font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Comments</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                            </li>
                                            <li>
                                                <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar1.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar6.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar8.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Natasha Kim</span>
                                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar4.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Sebastian Davidson</span>
                                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                            <div class="tab-pane" id="portlet_comments_2">
                                                <!-- BEGIN: Comments -->
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar4.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Michael Baker</span>
                                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar8.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar6.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Natasha Kim</span>
                                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-img">
                                                            <img src="assets/pages/media/users/avatar1.jpg" /> </div>
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">Sebastian Davidson</span>
                                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                            </div>
                                                            <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                            <div class="mt-comment-details">
                                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                <ul class="mt-comment-actions">
                                                                    <li>
                                                                        <a href="#">Quick Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">View</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-bubble font-dark hide"></i>
                                            <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;"> Option 1</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">Option 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">Option 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">Option 4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!--begin: widget 1-1 -->
                                                <div class="mt-widget-1">
                                                    <div class="mt-icon">
                                                        <a href="#">
                                                            <i class="icon-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-img">
                                                        <img src="assets/pages/media/users/avatar80_8.jpg"> </div>
                                                    <div class="mt-body">
                                                        <h3 class="mt-username">Diana Ellison</h3>
                                                        <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                    </div>
                                                </div>
                                                <!--end: widget 1-1 -->
                                            </div>
                                            <div class="col-md-4">
                                                <!--begin: widget 1-2 -->
                                                <div class="mt-widget-1">
                                                    <div class="mt-icon">
                                                        <a href="#">
                                                            <i class="icon-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-img">
                                                        <img src="assets/pages/media/users/avatar80_7.jpg"> </div>
                                                    <div class="mt-body">
                                                        <h3 class="mt-username">Jason Baker</h3>
                                                        <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                    </div>
                                                </div>
                                                <!--end: widget 1-2 -->
                                            </div>
                                            <div class="col-md-4">
                                                <!--begin: widget 1-3 -->
                                                <div class="mt-widget-1">
                                                    <div class="mt-icon">
                                                        <a href="#">
                                                            <i class="icon-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-img">
                                                        <img src="assets/pages/media/users/avatar80_6.jpg"> </div>
                                                    <div class="mt-body">
                                                        <h3 class="mt-username">Julia Berry</h3>
                                                        <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                    </div>
                                                </div>
                                                <!--end: widget 1-3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light calendar bordered">
                                    <div class="portlet-title ">
                                        <div class="caption">
                                            <i class="icon-calendar font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Feeds</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="calendar"> </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>