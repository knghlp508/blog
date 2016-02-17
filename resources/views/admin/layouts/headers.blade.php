<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Xenon - Dashboard</title>

    <link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{asset('css/fonts/linecons/css/linecons.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/xenon-core.css')}}">
    <link rel="stylesheet" href="{{asset('css/xenon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('css/xenon-components.css')}}">
    <link rel="stylesheet" href="{{asset('css/xenon-skins.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="page-body">

    @yield('usercard')

<!-- <div class="copyrights">Collect from <a href="http://www.mycodes.net/"  title="网站模板">网站模板</a></div> -->

<!-- 整体区域start -->
<div class="page-container">

    @yield('sidebar')

    <div class="main-content">

        @yield('nav')

        @yield('title')

        @yield('content')

        <!-- 底部start -->
        <!-- 选择底部风格class，"footer-type-1"灰色，"footer-type-2"黑色 -->
        <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
        <!-- 添加"fixed"的class使底部固定在浏览器底部 -->
        <footer class="main-footer sticky footer-type-1">

            <div class="footer-inner">

                <!-- Add your copyright text here -->
                <div class="footer-text">
                    &copy; 2014
                    <strong>Xenon</strong>
                    More Templates <a href="http://www.mycodes.net/" target="_blank" title="源码之家">源码之家</a> - Collect from <a href="#/" title="网页模板" target="_blank">网页模板</a>
                </div>


                <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                <div class="go-up">

                    <a href="#" rel="go-top">
                        <i class="fa-angle-up"></i>
                    </a>

                </div>

            </div>

        </footer>
        <!-- 底部end -->
    </div>

    @yield('chat')
</div>
<!-- 整体区域end -->

<!-- 加载背景start -->
<div class="page-loading-overlay">
    <div class="loader-2"></div>
</div>
<!-- 加载背景end -->

<!-- Bottom Scripts -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/TweenMax.min.js')}}"></script>
<script src="{{asset('js/resizeable.js')}}"></script>
<script src="{{asset('js/joinable.js')}}"></script>
<script src="{{asset('js/xenon-api.js')}}"></script>
<script src="{{asset('js/xenon-toggles.js')}}"></script>

<!-- JavaScripts initializations and stuff -->
<script src="{{asset('js/xenon-custom.js')}}"></script>

</body>
</html>