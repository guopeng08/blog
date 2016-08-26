<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}"/>

    <link href="{{env('HOME_PATH', '/home')}}/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')

</head>

<body style="background-color:#ccc;">
<nav class="navbar navbar-default navbar-static-bottom navbar-inverse" role="navigation">
    <div class="container">
        <!--品牌图标-->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Brand</a>

            <p class="navbar-text"><a href="#">欢迎光临！</a></p>
        </div>
        <!--//品牌图标-->
        <!--折叠菜单-->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">起步</a></li>
                <li><a href="#">全局CSS样式</a></li>
                <li><a href="#">组件</a></li>
                <li><a href="#">插件</a></li>
                <li><a href="#">定制</a></li>
                <li><a href="#">网站实例</a></li>
            </ul>
            <!--导航条中的表单-->
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="button" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        中文版 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Apache</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')



<!--[if lt IE 9]>
<script src="{{env('HOME_PATH', '/home')}}/js/html5shiv.min.js"></script>
<script src="{{env('HOME_PATH', '/home')}}/js/respond.min.js"></script>
<![endif]-->
<script src="{{env('HOME_PATH', '/home')}}/js/jquery.min.js"></script>
<script src="{{env('HOME_PATH', '/home')}}/js/bootstrap.min.js"></script>
@yield("js")
</body>

</html>
