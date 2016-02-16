@section('usercard')
<!-- 顶部用户区域start -->
<div class="settings-pane">
    <!-- 右上角关闭按钮start -->
    <a href="#" data-toggle="settings-pane" data-animate="true">
        &times;
    </a>
    <!-- 右上角关闭按钮end -->

    <!-- 用户卡区域start -->
    <div class="settings-pane-inner">
        <div class="row">
            <!-- 左边用户资料start -->
            <div class="col-md-4">
                <div class="user-info">
                    <!-- 用户头像start -->
                    <div class="user-image">
                        <a href="extra-profile.html">
                            <img src="{{asset('images/user-2.png')}}" class="img-responsive img-circle" />
                        </a>
                    </div>
                    <!-- 用户头像end -->

                    <!-- 资料start -->
                    <div class="user-details">
                        <h3>
                            <!-- 用户名 -->
                            <a href="extra-profile.html">John Smith</a>
                            <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                            <!-- 用户状态 -->
                            <span class="user-status is-online"></span>
                        </h3>
                        <!-- 用户角色 -->
                        <p class="user-title">Web Developer</p>
                        <!-- 用户操作区start -->
                        <div class="user-links">
                            <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                            <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                        </div>
                        <!-- 用户操作区end -->
                    </div>
                    <!-- 资料end -->
                </div>
            </div>
            <!-- 左边用户资料end -->

            <!-- 右边功能区start -->
            <div class="col-md-8 link-blocks-env">
                <div class="links-block left-sep">
                    <h4>
                        <span>Notifications</span>
                    </h4>
                    <ul class="list-unstyled">
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
                            <label for="sp-chk1">Messages</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                            <label for="sp-chk2">Events</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                            <label for="sp-chk3">Updates</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                            <label for="sp-chk4">Server Uptime</label>
                        </li>
                    </ul>
                </div>
                <div class="links-block left-sep">
                    <h4>
                        <a href="#">
                            <span>Help Desk</span>
                        </a>
                    </h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Support Center
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Submit a Ticket
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Domains Protocol
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Terms of Service
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 右边功能区end -->
        </div>
    </div>
    <!-- 用户卡区域send -->
</div>
<!-- 顶部用户区域end -->
@endsection