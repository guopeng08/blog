<!DOCTYPE HTML>
<html>

<head>
    <meta charset="gb2312">
    <title>@yield("title")</title>
    <meta name="_token" content="{{csrf_token()}}"/>
    <link href="{{env('HOME_PATH', '/home')}}/css/buju.css" rel="stylesheet">
    @yield('css')
</head>

<body>
<header>
    <div class="logo f_l">
        <a href="#">
            <img src="{{env('HOME_PATH', '/home')}}/img/logo.png">
        </a>
    </div>
    <ul class="nologin">
        <li class="word"><a href="/user/register">注册</a></li>
        <li class="word"><a href="/user/login">登录</a></li>
        <li>
            <a href="javascript:void(0)" class="wb"></a>
        </li>
        <li>
            <a href="javascript:void(0)" class="qq"></a>
        </li>
    </ul>
    <div id="topnav" class="f_r">
        <ul>
            <a href="#" target="" id="topnav_current">首页</a>
            <a href="#" target="">关于我</a>
            <a href="#" target="">文章</a>
            <a href="#" target="">心情</a>
            <a href="#" target="">相册</a>
            <a href="#" target="">留言</a>
        </ul>
    </div>
</header>
<article>
    @yield('content')
    <div class="r_box f_r">
        <div class="tit01">
            <h3>关注我</h3>

            <div class="gzwm">
                <ul>
                    <li><a class="xlwb" href="#" target="_blank">新浪微博</a></li>
                    <li><a class="txwb" href="#" target="_blank">腾讯微博</a></li>
                    <li><a class="rss" href="#" target="_blank">RSS</a></li>
                    <li><a class="wx" href="#" target="_blank">邮箱</a></li>
                </ul>
            </div>
        </div>
        <div class="ad300x100">
            <img src="{{env('HOME_PATH', '/home')}}/img/wh.jpg">
        </div>
        <div class="tab" id="lp_right_select">
            <div class="tab-top">
                <ul class="hd" id="tb">
                    <li class="cur"><a href="/">点击排行</a></li>
                    <li><a href="/">最新文章</a></li>
                    <li><a href="/">站长推荐</a></li>
                </ul>
            </div>
            <div class="tab-main" id="tb-main">
                <div class="bd bd-news" style="display:block;">
                    <ul>
                        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
                        <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
                        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
                        <li><a href="/" target="_blank">手机的16个惊人小秘密，据说99.999%的人都不知</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
                    </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
                        <li><a href="/" target="_blank">手机的16个惊人小秘密，据说99.999%的人都不知</a></li>
                        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
                        <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
                    </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <li><a href="/" target="_blank">手机的16个惊人小秘密，据说99.999%的人都不知</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
                        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
                        <li><a href="/" target="_blank">你面对的是生活而不是手机</a></li>
                        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cloud">
            <h3>标签云</h3>
            <ul>
                <li><a href="/">个人博客</a></li>
                <li><a href="/">web开发</a></li>
                <li><a href="/">前端设计</a></li>
                <li><a href="/">Html</a></li>
                <li><a href="/">CSS3</a></li>
                <li><a href="/">CSS3+HTML5</a></li>
                <li><a href="/">百度</a></li>
                <li><a href="/">JavaScript</a></li>
                <li><a href="/">C/C++</a></li>
                <li><a href="/">ASP.NET</a></li>
                <li><a href="/">IOS开发</a></li>
                <li><a href="/">Android开发</a></li>
                <li><a href="/">PHP</a></li>
                <li><a href="/">VS</a></li>
            </ul>
        </div>
        <div class="tuwen">
            <h3>图文推荐</h3>
            <ul>
                <li>
                    <a href="/"><img src="{{env('HOME_PATH', '/home')}}/img/01.jpg"><b>住在手机里的朋友</b></a>

                    <p>
                        <span class="tulanum"><a href="/">手机配件</a></span>
                        <span class="tutime">2016-02-16</span>
                    </p>
                </li>
                <li>
                    <a href="/"><img src="{{env('HOME_PATH', '/home')}}/img/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>

                    <p>
                        <span class="tulanum"><a href="/">手机配件</a></span>
                        <span class="tutime">2016-02-16</span>
                    </p>
                </li>
                <li>
                    <a href="/"><img src="{{env('HOME_PATH', '/home')}}/img/03.jpg"><b>手机的16个惊人小秘密，据说99.999%的人都不知</b></a>

                    <p>
                        <span class="tulanum"><a href="/">手机配件</a></span>
                        <span class="tutime">2016-02-16</span>
                    </p>
                </li>
                <li>
                    <a href="/"><img src="{{env('HOME_PATH', '/home')}}/img/06.jpg"><b>原来以为，一个人的勇敢是，删掉他的手机号码...</b></a>

                    <p>
                        <span class="tulanum"><a href="/">手机配件</a></span>
                        <span class="tutime">2016-02-16</span>
                    </p>
                </li>
                <li>
                    <a href="/"><img src="{{env('HOME_PATH', '/home')}}/img/04.jpg"><b>豪雅手机正式发布! 在法国全手工打造的奢侈品</b></a>

                    <p>
                        <span class="tulanum"><a href="/">手机配件</a></span>
                        <span class="tutime">2016-02-16</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="ad"><img src="{{env('HOME_PATH', '/home')}}/img/03.jpg"></div>
        <div class="links">
            <h3><span><a href="/">申请友情链接</a></span>友情链接</h3>
            <ul>
                <li><a href="/">醉牛逼的武魂生涯</a></li>
                <li><a href="/">观察者网</a></li>
                <li><a href="/">中国投资</a></li>
                <li><a href="/">强国论坛</a></li>
                <li><a href="/">车讯网</a></li>
                <li><a href="/">360导航</a></li>
                <li><a href="/">一带一路门户网</a></li>
            </ul>
        </div>
    </div>
</article>
<script type="text/javascript" src="{{env('HOME_PATH', '/home')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{env('HOME_PATH', '/home')}}/js/sliders.js"></script>
<script type="text/javascript">
    window.onload = function() {
        var oLi = document.getElementById("tb").getElementsByTagName("li");
        var oUl = document.getElementById("tb-main").getElementsByTagName("div");
        for (var i = 0; i < oLi.length; i++) {
            oLi[i].index = i;
            oLi[i].onmouseover = function() {
                for (var n = 0; n < oLi.length; n++)
                    oLi[n].className = "";
                this.className = "cur";
                for (var n = 0; n < oUl.length; n++)
                    oUl[n].style.display = "none";
                oUl[this.index].style.display = "block";
            }
        }

        $("#topnav ul a").click(function(event) {
            /* Act on the event */
            $("#topnav ul a").removeClass('active');
            $(this).addClass('active');

        });
    }
</script>
@yield("js")
</body>

</html>
