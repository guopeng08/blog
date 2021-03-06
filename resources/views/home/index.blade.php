@extends("home.layout")
@section("title","网站首页")
@section('css')
   <link rel="stylesheet" href="{{env('HOME_PATH', '/home')}}/css/index.css">{{--userinfo2--}}
@endsection

@section("content")
   <div class="l_box f_l">
      <div class="banner">
         <div id="slide-holder">
            <div id="slide-runner">
               <a href="/" target="_blank">
                  <img id="slide-img-1" src="{{env('HOME_PATH', '/home')}}/img/a1.jpg" alt style>
               </a>
               <a href="/" target="_blank">
                  <img id="slide-img-2" src="{{env('HOME_PATH', '/home')}}/img/a2.jpg" alt style>
               </a>
               <a href="/" target="_blank">
                  <img id="slide-img-3" src="{{env('HOME_PATH', '/home')}}/img/a3.jpg" alt style>
               </a>
               <a href="/" target="_blank">
                  <img id="slide-img-4" src="{{env('HOME_PATH', '/home')}}/img/a4.jpg" alt style>
               </a>
               <div id="slide-controls" style="display:block;">
                  <p id="slide-client" class="text">
                     <strong></strong>
                     <span></span>
                  </p>
                  <p id="slide-desc" class="text"></p>
                  <p id="slide-nav"></p>
               </div>
            </div>
         </div>
      </div>

      <div class="topnews">
         <h2>
	   <span>
	    <a href="/" target="_blank">武魂大罗</a>
		 <a href="/" target="_blank">装逼大神</a>
		 <a href="/" target="_blank">屌毛推荐</a>
	   </span>
            文章推荐
         </h2>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/01.jpg">
            </figure>
            <ul>
               <h3><a href="/">住在手机里的朋友</a></h3>
               <p>"通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊 ..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/02.jpg">
            </figure>
            <ul>
               <h3><a href="/">教你怎样用欠费手机拨打电话</a></h3>
               <p>"初次相识的喜悦，让你觉得似乎找到了知音。于是，对于投缘的人，开始了较频繁的交往。渐渐地，初识的喜悦退尽，接下来就是仅仅保持着联系，平淡到偶尔在节假曰发短信互致问候..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/03.jpg">
            </figure>
            <ul>
               <h3><a href="/">原来以为，一个人的勇敢是，删掉他的手机号码...</a></h3>
               <p>"原来以为，一个人的勇敢是，删掉他的手机号码、QQ号码等等一切，努力和他保持距离。等着有一天，习惯不想念他，习惯他不在身边,习惯时间把他在我记忆里的身影磨蚀干净..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/04.jpg">
            </figure>
            <ul>
               <h3><a href="/">手机的16个惊人小秘密，据说99.999%的人都不知</a></h3>
               <p>"引导语：知道么，手机有备用电池，手机拨号码12593+电话号码=陷阱……手机具有很多你不知道的小秘密，说出来一定很惊奇！不信的话就来看看吧！..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/05.jpg">
            </figure>
            <ul>
               <h3><a href="/">你面对的是生活而不是手机</a></h3>
               <p>"每一次与别人吃饭，总会有人会拿出手机。以为他们在打电话或者有紧急的短信，但用余光瞟了一眼之后发现无非就两件事：1、看小说，2、上人人或者QQ..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/06.jpg">
            </figure>
            <ul>
               <h3><a href="/">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></h3>
               <p>"现在跨界联姻，时尚、汽车以及运动品牌联合手机制造商联合发布手机产品在行业里已经不再新鲜，上周我们给大家报道过著名手表制造商瑞士泰格·豪雅（Tag Heuer） 联合法国的手机制造商Modelabs发布的一款奢华手机的部分谍照，而近日该手机终于被正式发布了..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
         <div class="blogs">
            <figure>
               <img src="{{env('HOME_PATH', '/home')}}/img/04.jpg">
            </figure>
            <ul>
               <h3><a href="/">手机的16个惊人小秘密，据说99.999%的人都不知</a></h3>
               <p>"引导语：知道么，手机有备用电池，手机拨号码12593+电话号码=陷阱……手机具有很多你不知道的小秘密，说出来一定很惊奇！不信的话就来看看吧！..."</p>
               <p class="autor">
                            <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
                  <span class="dtime f_l">2016-02-16</span>
                            <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
                            <span class="pingl f_r">
					    评论（<a href="/">60</a>）</span>
               </p>
            </ul>
         </div>
      </div>
   </div>
@section('js')
   <script>
      if (!window.slider) {
         var slider = {};
      }
      slider.data = [{
         "id": "slide-img-1", //与slide-runner中的img标签id对应
         "client": "醉牛逼",
         "desc": "醉牛逼是武魂醉牛逼的存在" //这里描述图片内容
      }, {
         "id": "slide-img-2",
         "client": "醉牛逼",
         "desc": "醉牛逼是武魂醉牛逼的存在"
      }, {
         "id": "slide-img-3",
         "client": "醉牛逼",
         "desc": "醉牛逼是武魂醉牛逼的存在"
      }, {
         "id": "slide-img-4",
         "client": "醉牛逼",
         "desc": "醉牛逼是武魂醉牛逼的存在"
      }];
   </script>
   @endsection
@endsection