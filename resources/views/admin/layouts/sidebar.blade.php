@section('sidebar')
<!-- 左部导航条start -->
<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<!-- 添加"fixed"的class能使导航条在浏览器中固定 -->
<!-- 添加"toggle-others"的class能使导航条保持只展开一个一级导航 -->
<!-- 添加"collapsed"的class能是导航条只显示导航图标 -->
<div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
        <!-- 顶部区域start -->
        <header class="logo-env">
            <!-- logo start -->
            <div class="logo">
                <!-- 完全显示的logo -->
                <a href="dashboard-1.html" class="logo-expanded">
                    <img src="{{asset('images/logo@2x.png')}}" width="80" alt="" />
                </a>
                <!-- 缩略显示的logo -->
                <a href="dashboard-1.html" class="logo-collapsed">
                    <img src="{{asset('images/logo-collapsed@2x.png')}}" width="40" alt="" />
                </a>
            </div>
            <!-- logo end -->

            <!-- 只用于在手机端显示 -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>
                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>
            <!-- 用于显示顶部隐藏的用户卡 -->
            <div class="settings-icon">
                <a href="#" data-toggle="settings-pane" data-animate="true">
                    <i class="linecons-cog"></i>
                </a>
            </div>
        </header>
        <!-- 顶部区域end -->

        <!-- 导航菜单start -->
        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <!-- 主页 -->
            <li @if($shareDatas['currentRouteDatas']['controller']=='Index')class="active"@endif>
                <a href="{{url('admin')}}">
                    <i class="linecons-globe"></i>
                    <span class="title">主页</span>
                </a>
            </li>
            <!-- 管理员、角色、权限 -->
            <li @if($shareDatas['currentRouteDatas']['controller']=='Admin')class="active opened"@endif>
                <a href="#">
                    <i class="linecons-cog"></i>
                    <span class="title">管理</span>
                </a>
                <ul>
                    <li @if($shareDatas['currentRouteDatas']['controller']=='Admin')class="active opened"@endif>
                        <a href="extra-icons-fontawesome.html">
                            <span class="title">管理员</span>
                            {{--<span class="label label-warning pull-right">4</span>--}}
                        </a>
                        <ul>
                            <li @if($shareDatas['currentRouteDatas']['controller']=='Admin' && $shareDatas['currentRouteDatas']['method']=='index')class="active"@endif>
                                <a href="{{url('admin/admin')}}">
                                    <span class="title">管理员列表</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-linecons.html">
                                    <span class="title">添加管理员</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-elusive.html">
                                    <span class="title">管理员权限设置</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="extra-icons-fontawesome.html">
                            <span class="title">角色</span>
                            {{--<span class="label label-warning pull-right">4</span>--}}
                        </a>
                        <ul>
                            <li>
                                <a href="extra-icons-fontawesome.html">
                                    <span class="title">角色列表</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-linecons.html">
                                    <span class="title">添加角色</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-elusive.html">
                                    <span class="title">角色权限设置</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="extra-icons-fontawesome.html">
                            <span class="title">权限</span>
                            {{--<span class="label label-warning pull-right">4</span>--}}
                        </a>
                        <ul>
                            <li>
                                <a href="extra-icons-fontawesome.html">
                                    <span class="title">权限列表</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-linecons.html">
                                    <span class="title">添加权限</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- 用户 -->
            <li>
                <a href="layout-variants.html">
                    <i class="linecons-user"></i>
                    <span class="title">用户</span>
                </a>
                <ul>
                    <li>
                        <a href="layout-variants.html">
                            <span class="title">用户列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="layout-collapsed-sidebar.html">
                            <span class="title">添加用户</span>
                        </a>
                    </li>
                    <li>
                        <a href="layout-static-sidebar.html">
                            <span class="title">用户权限设置</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 分类 -->
            <li>
                <a href="ui-panels.html">
                    <i class="linecons-paper-plane"></i>
                    <span class="title">分类</span>
                </a>
                <ul>
                    <li>
                        <a href="ui-panels.html">
                            <span class="title">分类列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">
                            <span class="title">添加分类</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 文章 -->
            <li @if($shareDatas['currentRouteDatas']['controller']=='Articles')class="active opened"@endif>
                <a href="ui-widgets.html">
                    <i class="linecons-doc"></i>
                    <span class="title">文章</span>
                </a>
                <ul>
                    <li @if($shareDatas['currentRouteDatas']['controller']=='Articles' && $shareDatas['currentRouteDatas']['method']=='index')class="active opened"@endif>
                        <a href="{{url('admin/articles')}}">
                            <span class="title">文章列表</span>
                            @if($shareDatas['currentRouteDatas']['controller']=='Articles')
                                <span class="label label-success pull-right">{{$articlesDatas['total']}}</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-compose.html">
                            <span class="title">添加文章</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="mailbox-main.html">
                    <i class="linecons-mail"></i>
                    <span class="title">Mailbox</span>
                    {{--<span class="label label-success pull-right">5</span>--}}
                </a>
                <ul>
                    <li>
                        <a href="mailbox-main.html">
                            <span class="title">Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-compose.html">
                            <span class="title">Compose Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-message.html">
                            <span class="title">View Message</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables-basic.html">
                    <i class="linecons-database"></i>
                    <span class="title">Tables</span>
                </a>
                <ul>
                    <li>
                        <a href="tables-basic.html">
                            <span class="title">Basic Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-responsive.html">
                            <span class="title">Responsive Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-datatables.html">
                            <span class="title">Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="forms-native.html">
                    <i class="linecons-params"></i>
                    <span class="title">Forms</span>
                </a>
                <ul>
                    <li>
                        <a href="forms-native.html">
                            <span class="title">Native Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-advanced.html">
                            <span class="title">Advanced Plugins</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-wizard.html">
                            <span class="title">Form Wizard</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <span class="title">Form Validation</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-input-masks.html">
                            <span class="title">Input Masks</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-file-upload.html">
                            <span class="title">File Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <span class="title">Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-sliders.html">
                            <span class="title">Sliders</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="extra-gallery.html">
                    <i class="linecons-beaker"></i>
                    <span class="title">Extra</span>
                    <span class="label label-purple pull-right hidden-collapsed">New Items</span>
                </a>
                <ul>
                    <li>
                        <a href="extra-icons-fontawesome.html">
                            <span class="title">Icons</span>
                            <span class="label label-warning pull-right">4</span>
                        </a>
                        <ul>
                            <li>
                                <a href="extra-icons-fontawesome.html">
                                    <span class="title">Font Awesome</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-linecons.html">
                                    <span class="title">Linecons</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-elusive.html">
                                    <span class="title">Elusive</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-icons-meteocons.html">
                                    <span class="title">Meteocons</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="extra-maps-google.html">
                            <span class="title">Maps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="extra-maps-google.html">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-maps-advanced.html">
                                    <span class="title">Advanced Map</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra-maps-vector.html">
                                    <span class="title">Vector Map</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="extra-gallery.html">
                            <span class="title">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-calendar.html">
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-profile.html">
                            <span class="title">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-login.html">
                            <span class="title">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-lockscreen.html">
                            <span class="title">Lockscreen</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-login-light.html">
                            <span class="title">Login Light</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-timeline.html">
                            <span class="title">Timeline</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-timeline-center.html">
                            <span class="title">Timeline Centerd</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-notes.html">
                            <span class="title">Notes</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-image-crop.html">
                            <span class="title">Image Crop</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-portlets.html">
                            <span class="title">Portlets</span>
                        </a>
                    </li>
                    <li>
                        <a href="blank-sidebar.html">
                            <span class="title">Blank Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-search.html">
                            <span class="title">Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-invoice.html">
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-not-found.html">
                            <span class="title">404 Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-tocify.html">
                            <span class="title">Tocify</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-loader.html">
                            <span class="title">Loading Progress</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-page-loading-ol.html">
                            <span class="title">Page Loading Overlay</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-notifications.html">
                            <span class="title">Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-nestable-lists.html">
                            <span class="title">Nestable Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="extra-scrollable.html">
                            <span class="title">Scrollable</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="charts-main.html">
                    <i class="linecons-globe"></i>
                    <span class="title">Charts</span>
                </a>
                <ul>
                    <li>
                        <a href="charts-main.html">
                            <span class="title">Chart Variants</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-range.html">
                            <span class="title">Range Selector</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-sparklines.html">
                            <span class="title">Sparklines</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-map.html">
                            <span class="title">Map Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-gauges.html">
                            <span class="title">Circular Gauges</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-bar-gauges.html">
                            <span class="title">Bar Gauges</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="linecons-cloud"></i>
                    <span class="title">Menu Levels</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-line"></i>
                            <span class="title">Menu Level 1.1</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-parallel"></i>
                                    <span class="title">Menu Level 2.1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-parallel"></i>
                                    <span class="title">Menu Level 2.2</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-cascade"></i>
                                            <span class="title">Menu Level 3.1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-cascade"></i>
                                            <span class="title">Menu Level 3.2</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-flow-branch"></i>
                                                    <span class="title">Menu Level 4.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-parallel"></i>
                                    <span class="title">Menu Level 2.3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-line"></i>
                            <span class="title">Menu Level 1.2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-line"></i>
                            <span class="title">Menu Level 1.3</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- 导航菜单end -->
    </div>
</div>
<!-- 左部导航条end -->
@endsection