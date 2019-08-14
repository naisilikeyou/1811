<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit" />
    <!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62" />
    <meta name="description" content="精彩小说尽在腾讯文学,腾讯文学提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,科幻小说,恐怖小说,首发小说最新章节免费小说阅读小说下载txt,精彩尽在腾讯文学!2013年热门小说:无敌唤灵,无红色权力,无限曙光,余罪,兵临天下,盛唐风月,武帝,大官人,勇闯天涯,机甲天王" />
    <meta name="keywords" content="腾讯文学,小说,小说网,言情小说,青春小说,玄幻小说,武侠小说,都市小说,历史小说,网络小说,小说下载,小说txt,小说全文阅读,原创网络文学,畅销图书,精品图书,传统出版,电子书" />
    <meta property="qc:admins" content="151626767763051673016375" />
    <meta name="baidu-site-verification" content="zgBU5TfI8l" />
    <title>前台QQ阅读</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico" />
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico" />
    <link rel="stylesheet" type="text/css" href="/index/css/base.css" />
    <!-- prevent dom xss -->
    <script type="text/javascript" src="/index/js/aq_common.js"></script>
    <script type="text/javascript">var userLang = "";</script>
    <script type="text/javascript" src="/index/js/base.js"></script>
    <script type="text/javascript">var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";

        $(function(){
            //书架
            CS.bookshelf.init(addToBookshelfAjaxUrl);

            //页面特定链接/按钮点击分析
            $.getScript("http://pingjs.qq.com/tcss.ping.js");
        });
    </script>
    <script type="text/javascript">
        var webSite = "book";
        var getLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/getStatus.html",
            sendYWLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/logined.html",
            logoutYWSsoAjaxUrl = "http://book.qq.com/public/logout.html",
            checkTokenAjaxUrl = "/api/checkTokenYw.html";

        $(function(){
            //未登录时，更新登录状态
            CS.ssoLogin.init(getLoginStatusAjaxUrl, sendYWLoginStatusAjaxUrl,logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
            CS.ssoLogin.getLoginStatus();
        });

    </script>
    <!--[if lt IE 7]>
    <script src="/index/js/dd_belatedpng.js" mce_src="DD_belatedPNG.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('.prev, .next, .dotted, .fantasy, .edit_ctrl span, .edit_ctrl a, .line2, .box2_left em, .help, a.aleft, a.aright, .QQ, .bottom_tool a, .msgup, .msgdown, .juanbox li a, .p_searchbtn, #sword, .QQ_ICO, .QQ_icon, .cm_writer, #PLoginImg img');
    </script>
    <![endif]-->
</head>
<body>
<link rel="stylesheet" type="text/css" href="/index/css/index.css" />
<!-- 顶部导航 -->
<div id="topNav" class="topNav">
    <div class="pageCenter">
        <!--顶部左边区块-->
        <div id="topLeft" class="topLeft cf">
            <ul>
                <li class="navNormal authority"><span><a class="topLink" href="http://book.qq.com" target="_blank">QQ阅读</a><b></b></span>
                    <div class="topSubList client">
                        <a class="cs_ico" href="http://chuangshi.qq.com" target="_blank">创世中文</a>
                        <a class="yq_ico" href="http://yunqi.qq.com" target="_blank">云起书院</a>
                        <a class="ds_ico" href="http://dushu.qq.com" target="_blank">QQ阅读</a>
                        <a class="bookIntnet" href="http://www.qq.com" target="_blank" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK03'});">腾讯网</a>
                    </div></li>
                <li class="navNormal authority"><span><a class="topLink" href="javascript:" target="_blank">客户端下载</a><b></b></span>
                    <div class="topSubList client">
                        <a class="bookAndroid" href="http://book.qq.com/act/reader/index.html" target="_blank">安卓端</a>
                        <a class="bookIos" href="http://book.qq.com/act/reader/index.html" target="_blank">苹果端</a>
                    </div></li>
            </ul>
        </div>
        <!--登录前后容器-->
        <div class="loginBox">
            <div class="login_before">
                <span class="navline">|</span>
                <a class="reg" target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a>
                <a class="login" attr="click:openLoginPopup;" href="/login">登录</a>
            </div>
        </div>
        <!--顶部右边区块-->
        <div class="topRight">
            <a class="myreader" href="javascript:;">最近阅读<b></b></a>
            <a class="user_center" href="http://account.book.qq.com">个人中心<b></b></a>
            <a class="author_Zone" href="https://write.qq.com/?siteid=3">作家专区</a>
            <span class="navline">|</span>
            <a class="pay" href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a>
            <!-- 我的书架的下拉列表 -->
            <div class="bookrack">
                <!-- 最近阅读列表 -->
                <div class="nav_hover_list cf"></div>
                <p>最近没有阅读书</p>
            </div>
            <!-- 个人中心的下拉列表 -->
            <div class="user_menu">
                <div class="nav_hover_list cf">
                    <a href="http://account.book.qq.com/userfavorite/index.html">我的书架</a>
                    <a href="http://account.book.qq.com/usercenter/index.html">账户设置</a>
                    <a class="a_nobg" href="http://account.book.qq.com/usermoney/index.html">账务中心 </a>
                    <a class="a_nobg" href="https://write.qq.com/?siteid=3">作家专区</a>
                </div>
            </div>
            <!--新短消息提示-->
        </div>
    </div>
</div>
<!-- 顶部导航的模板 -->
<textarea id="topNavBarTpl" style="display:none;"> &lt;div class=&quot;pageCenter&quot;&gt; &lt;!--顶部左边区块--&gt; &lt;div id=&quot;topLeft&quot; class=&quot;topLeft cf&quot;&gt; &lt;ul&gt; &lt;li class=&quot;navNormal authority&quot;&gt; &lt;span&gt; &lt;a class=&quot;topLink&quot; href=&quot;http://book.qq.com&quot; target=&quot;_blank&quot;&gt;QQ阅读&lt;/a&lt;b&gt;&lt;/b &lt;/span &lt;div class=&quot;topSubList client&quot;&gt; &lt;a class=&quot;cs_ico&quot; href=&quot;http://chuangshi.qq.com&quot; target=&quot;_blank&quot;&gt;创世中文&lt;/a &lt;a class=&quot;yq_ico&quot; href=&quot;http://yunqi.qq.com&quot; target=&quot;_blank&quot;&gt;云起书院&lt;/a &lt;a class=&quot;ds_ico&quot; href=&quot;http://dushu.qq.com&quot; target=&quot;_blank&quot;&gt;QQ阅读&lt;/a &lt;a class=&quot;bookIntnet&quot; href=&quot;http://www.qq.com&quot; target=&quot;_blank&quot; onclick=&quot;pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK03'});&quot;&gt;腾讯网&lt;/a &lt;/div &lt;/li &lt;li class=&quot;navNormal authority&quot;&gt; &lt;span&gt; &lt;a class=&quot;topLink&quot; href=&quot;javascript:&quot; target=&quot;_blank&quot;&gt;客户端下载&lt;/a &lt;b&gt;&lt;/b &lt;/span &lt;div class=&quot;topSubList client&quot;&gt; &lt;a class=&quot;bookAndroid&quot; href=&quot;http://book.qq.com/act/reader/index.html&quot; target=&quot;_blank&quot;&gt;安卓端&lt;/a &lt;a class=&quot;bookIos&quot; href=&quot;http://book.qq.com/act/reader/index.html&quot; target=&quot;_blank&quot;&gt;苹果端&lt;/a &lt;/div &lt;/li &lt;/ul &lt;/div &lt;!--登录前后容器--&gt; &lt;div class=&quot;loginBox&quot;&gt;&lt;%if isLogin%&gt;&lt;div class=&quot;login_after&quot;&gt; &lt;span class=&quot;navline&quot;&gt;|&lt;/span &lt;a class=&quot;exit&quot; attr=&quot;click:ywlogout;&quot; href=&quot;javascript:;&quot;&gt;退出&lt;/a &lt;a class=&quot;userName&quot; href=&quot;http://account.book.qq.com/usercenter/index.html&quot;&gt;欢迎您，&lt;%=userInfo.Nickname ? userInfo.Nickname : ''%&gt;&lt;/a &lt;/div&lt;%else%&gt;&lt;div class=&quot;login_before&quot;&gt; &lt;span class=&quot;navline&quot;&gt;|&lt;/span &lt;a class=&quot;reg&quot; target=&quot;_blank&quot; href=&quot;http://zc.qq.com/chs/index.html?from=pt&quot;&gt;注册&lt;/a &lt;a class=&quot;login&quot; attr=&quot;click:openLoginPopup;&quot; href=&quot;javascript:;&quot;&gt;登录&lt;/a &lt;/div&lt;%/if%&gt;&lt;/div &lt;!--顶部右边区块--&gt; &lt;div class=&quot;topRight&quot;&gt;&lt;%if isLogin%&gt; &lt;a class=&quot;myreader&quot; href=&quot;http://account.book.qq.com/userfavorite/index.html&quot;&gt;我的书架&lt;b&gt;&lt;/b&lt;/a&lt;%else%&gt; &lt;a class=&quot;myreader&quot; href=&quot;javascript:;&quot;&gt;最近阅读&lt;b&gt;&lt;/b&lt;/a&lt;%/if%&gt; &lt;a class=&quot;user_center&quot; href=&quot;http://account.book.qq.com&quot;&gt;个人中心&lt;b&gt;&lt;/b&lt;/a &lt;a class=&quot;author_Zone&quot; href=&quot;https://write.qq.com/?siteid=3&quot;&gt;作家专区&lt;/a &lt;span class=&quot;navline&quot;&gt;|&lt;/span &lt;a class=&quot;pay&quot; href=&quot;http://account.book.qq.com/public/recharge.html&quot; target=&quot;_blank&quot;&gt;充值&lt;/a &lt;!-- 我的书架的下拉列表 --&gt; &lt;div class=&quot;bookrack&quot;&gt;&lt;%if isLogin%&gt; &lt;p&gt;&lt;span class=&quot;ccc&quot;&gt;书架藏书：&lt;%=userInfo.collectBookNum ? userInfo.collectBookNum : 0%&gt;本&lt;/span&lt;/p &lt;div class=&quot;nav_hover_list cf&quot;&gt; &lt;a href=&quot;http://account.book.qq.com/userfavorite/index.html?bookshelf_show=2&quot;&gt;最近阅读&lt;/a &lt;%if userInfo.bookshelfList &amp;&amp; userInfo.bookshelfList.length%&gt;&lt;%each userInfo.bookshelfList as bookshelf i%&gt; &lt;a class=&quot;a_nobg&quot; href=&quot;http://account.book.qq.com/userfavorite/index.html?Favoriteid=&lt;%=bookshelf.groupId%&gt;&quot;&gt; &lt;%=bookshelf.groupName%&gt;&lt;/a&lt;%/each%&gt;&lt;%/if%&gt;&lt;/div&lt;%else%&gt; &lt;!-- 最近阅读列表 --&gt; &lt;div class=&quot;nav_hover_list cf&quot;&gt; &lt;%if userInfo.recentReadList &amp;&amp; userInfo.recentReadList.length%&gt;&lt;%each userInfo.recentReadList as book i%&gt; &lt;a class=&quot;a_nobg&quot; href=&quot;&lt;%=book.bookUrl%&gt;&quot;&gt;&lt;%=book.bookName%&gt;&lt;/a &lt;%/each%&gt;&lt;%/if%&gt; &lt;/div &lt;%if !userInfo.recentReadList || userInfo.recentReadList.length === 0%&gt; &lt;p&gt;最近没有阅读书&lt;/p&lt;%/if%&gt;&lt;%/if%&gt; &lt;/div &lt;!-- 个人中心的下拉列表 --&gt; &lt;div class=&quot;user_menu&quot;&gt; &lt;div class=&quot;nav_hover_list cf&quot;&gt; &lt;a href=&quot;http://account.book.qq.com/userfavorite/index.html&quot;&gt;我的书架&lt;/a &lt;a href=&quot;http://account.book.qq.com/usercenter/index.html&quot;&gt;账户设置&lt;/a &lt;a class=&quot;a_nobg&quot; href=&quot;http://account.book.qq.com/usermoney/index.html&quot;&gt;账务中心 &lt;/a &lt;a class=&quot;a_nobg&quot; href=&quot;https://write.qq.com/?siteid=3&quot;&gt;作家专区&lt;/a &lt;/div &lt;/div &lt;!--新短消息提示--&gt; &lt;%if isLogin%&gt; &lt;div id=&quot;topnav_msg&quot; style=&quot;display:none;&quot;&gt; &lt;div id=&quot;pointy_msg&quot;&gt;&lt;/div &lt;p&gt; &lt;a class=&quot;red2&quot; href=&quot;http://account.book.qq.com/usermessage/index.html&quot;&gt;有新短消息&lt;/a &lt;/p &lt;a id=&quot;close_msg&quot; href=&quot;javascript:&quot; title=&quot;关闭&quot;&gt;关闭&lt;/a &lt;/div &lt;%/if%&gt; &lt;/div &lt;/div </textarea>
<script type="text/javascript">
    var getUserInfoAjaxUrl = "/public/showhead.html", //获取用户信息
        getUserNewMsgUrl = "http://account.book.qq.com/usermessage/getMessageNew.html",
        webSite = "book";

    var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";



    $(function(){
        //书架
        CS.bookshelf.init(addToBookshelfAjaxUrl);
        //顶部导航条
        CS.topNav.init(getUserInfoAjaxUrl, getUserNewMsgUrl);
    });
</script>
<div class="pageCenter">
    <div class="bookheader cf">
        <div class="logo fl">
            <a href="http://book.qq.com"> <img alt="腾讯文学，文字之美，感动心灵！" src="/index/picture/txwxlogo.jpg" /></a>
        </div>
        <div class="titleSearch fl cf">
            <div class="searchClass" id="searchClass">
                <em type="all" id="currentSiteBtn">全部</em>
                <div id="searchSiteList" class="searchClass_SubBox" style="display:none;">
                    <a href="javascript:" type="all">全部</a>
                    <a href="javascript:" type="chuangshi">创世</a>
                    <a href="javascript:" type="yunqi">云起</a>
                    <a href="javascript:" type="dushu">图书</a>
                </div>
            </div>
            <span></span>
            <input id="searchInputBySite" type="text" class="clearInput" style="color: rgb(153, 153, 153);" def="我的21岁美女老婆" value="我的21岁美女老婆" />
            <input id="searchBySiteBtn" type="button" class="searchBtn" />
            <div class="hotWords">
                热词：
                <a href="http://yunqi.qq.com/bk/xdyq/23557247.html" target="_blank"> 好想住你隔壁</a>
                <a href="http://yunqi.qq.com/bk/gdyq/13659694.html" target="_blank">卦妃天下</a>
                <a href="http://yunqi.qq.com/bk/lmqc/22876861.html" target="_blank">彩虹在转角</a>
                <a href="http://chuangshi.qq.com/bk/ds/347592.html" target="_blank">都市兵王</a>
                <a href="http://dushu.qq.com/Intro.html?bid=616262" target="_blank">暗黑者</a>
                <a href="http://chuangshi.qq.com/bk/xh/216416.html" target="_blank">主宰之王</a>
            </div>
        </div>
        <div id="headQrCode" class="headQrCode fr">
            <p>下载QQ阅读</p>
            <img width="80" height="80" src="/index/picture/qq_read_qr_1.png" />
            <a href="javascript:" class="close"></a>
        </div>
    </div>
    <script type="text/javascript" src="/index/js/subnav.js"></script>
    <script type="text/javascript">
        var searchResultUrl = "/search/index/type/p1/wd/p2.html";

        $(function () {
            CS.page.subNav.init(searchResultUrl);
        });
    </script>
    <!-- 主体 start-->
    <!--焦点图-->
    <div class="focusWrap">
        <div id="focusBox" class="slider">
            <div class="conbox">
                @foreach($data as $k=>$v)
                    <div>
                        <a target="_blank" href=""> <img width="1000" height="360" src="/uploads/{{$v->img}}" /></a>
                    </div> @endforeach
            </div>
            <div class="switcher">
                <a target="_blank" href="http://yunqi.qq.com/bk/ns/607991.html" class="cur"></a>
                <a target="_blank" href="https://mall.jd.com/index-1000220931.html"></a>
                <a target="_blank" href="http://yunqi.qq.com/news/05235034.html"></a>
                <a target="_blank" href="http://yunqi.qq.com/bk/ns/23557247.html"></a>
                <a target="_blank" href="https://v.qq.com/x/cover/o0ytzgvq6o08e9o/q0031p9zxsh.html"></a>
                <a target="_blank" href="https://detail.tmall.com/item.htm?spm=a230r.1.14.9.1a7368aeMm4Kt8&amp;id=588483941921&amp;cm_id=140105335569ed55e27b&amp;abbucket=14 "></a>
            </div>
        </div>
        <!--悬浮窗-->
    </div>
    <!--频道推荐版块-->
    <div class="channelWrap  mb20 cf">
        <div class="leftBox fl">
            <div class="channelTitle cf">
                <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;">
                    <a href="http://chuangshi.qq.com/bk/xh/456867.html" target="_blank">天域苍穹</a>
                    <a href="http://chuangshi.qq.com/bk/ds/430325.html" target="_blank">校园修真高手</a>
                    <a href="http://chuangshi.qq.com/bk/xh/319657.html" target="_blank">三界独尊</a>
                    <a class="nobr" href="http://chuangshi.qq.com/bk/js/295037.html" target="_blank">最强兵王</a>
                </div>
                <h3>原创男生<span><a href="http://chuangshi.qq.com" target="_blank">chuangshi.qq.com</a></span></h3>
            </div>
            <div class="recBookWrap cf">
                <div class="bigBook fl">
                    <a href="http://chuangshi.qq.com/bk/xh/357735.html" target="_blank"> <img src="/index/picture/t5_357735.jpg" width="204" height="255" target="_blank" /></a>
                    <h4> 《<a href="http://chuangshi.qq.com/bk/xh/357735.html" target="_blank">择天记</a>》 <a href="http://account.book.qq.com/bk/author/ADdQPwdqWWNcNwtrV2FTZQA4" target="_blank">猫腻</a> </h4>
                    <p>择天记</p>
                </div>
                <div class="otherBook fl">
                    <ul>
                        <li> <a href="http://chuangshi.qq.com/bk/js/295037.html" target="_blank"> <img src="/index/picture/t5_295037.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/js/295037.html" target="_blank">最强兵王</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADFQOgdjWW1cNAtvV2dTbA%25253D%25253D" target="_blank">丛林狼</a></p>
                                <p class="intro">最强兵王</p>
                            </div></li>
                        <li><a href="http://chuangshi.qq.com/bk/qh/11315975.html" target="_blank"><img src="/index/picture/t5_11315975.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/qh/11315975.html" target="_blank">邪神旌旗</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADRQPAdtWW5cNQttV2JTYw%25253D%25253D" target="_blank">楚白</a></p>
                                <p class="intro">邪神旌旗</p>
                            </div></li>
                        <li><a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank"><img src="/index/picture/t5_421661.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank">武道霸主</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADdQOwduWW1cMgtiV2NTYwA7WzY%25253D" target="_blank">蜀狂人</a></p>
                                <p class="intro">武道霸主</p>
                            </div></li>
                    </ul>
                    <dl>
                        <dd class="fl">
                            <p><a href="http://chuangshi.qq.com/bk/xh/xx20003gx3/" target="_blank">异世大陆</a><em>丨</em><a href="http://chuangshi.qq.com/bk/xh/614782.html" target="_blank" class="blue">全职法师</a></p>
                            <p>主修一系，怎如全系全通</p>
                        </dd>
                        <dd class="fl">
                            <p><a href="http://chuangshi.qq.com/bk/xh/xx20002gx3/" target="_blank">东方玄幻</a><em>丨</em><a href="http://chuangshi.qq.com/bk/xh/353221.html" target="_blank" class="blue">至尊战神</a></p>
                            <p>武道九重镜，神道五重天</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="rightBox fr">
            <div class="threeTabBox tabSwitch">
                <p>创世排行榜</p>
                <div class="choiceBox">
                    <span class="tabCur">人气榜<cite></cite></span>
                    <span>月票榜</span>
                </div>
            </div>
            <!--男频榜-->
            <div class="rankListWrap">
                <!--创世人气-->
                <ul class="rankList rankHover numList tabList">
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>2982</em>
                            <span class="num3">1</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/25009740.html">三界至尊王道</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">1</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/25009740.html"><img src="/index/picture/s_25009740.jpg" width="55" height="74" alt="三界至尊王道" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/25009740.html">三界至尊王道</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtiV2JTZwA6WzVQMQNt">明玉公子本人</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2078</em>
                            <span class="num3">2</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">鸿渐于磐</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">2</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html"><img src="/index/picture/s_23240412.jpg" width="55" height="74" alt="鸿渐于磐" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">鸿渐于磐</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNwtvV2FTZAA6WzNQPgNi">徐鸣辰</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/wx/xx20011/">传统武侠</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2061</em>
                            <span class="num3">3</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/20496369.html">大道朝天</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">3</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/20496369.html"><img src="/index/picture/s_20496369.jpg" width="55" height="74" alt="大道朝天" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/20496369.html">大道朝天</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPwdqWWNcNwtrV2FTZQA4">猫腻</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1776</em>
                            <span>4</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html">唐残</a>
                        </div>
                        <div class="detailWrap">
                            <span>4</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html"><img src="/index/picture/s_20307022.jpg" width="55" height="74" alt="唐残" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html">唐残</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQMwdsWW5cNQtqV2lTYgA2">猫疲</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20029/">架空历史</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1539</em>
                            <span>5</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html">伏天氏</a>
                        </div>
                        <div class="detailWrap">
                            <span>5</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html"><img src="/index/picture/s_21058239.jpg" width="55" height="74" alt="伏天氏" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html">伏天氏</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOwdvWW9cNgtiV2BTYQA7">净无痕</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>943</em>
                            <span>6</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/14174819.html">都市超级医圣</a>
                        </div>
                        <div class="detailWrap">
                            <span>6</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/14174819.html"><img src="/index/picture/s_14174819.jpg" width="55" height="74" alt="都市超级医圣" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ds/14174819.html">都市超级医圣</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADJQPgdvWW5cNgtqV2JTbQA6">断桥残雪</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20026/">异术超能</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>846</em>
                            <span>7</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/25070416.html">重生IT人</a>
                        </div>
                        <div class="detailWrap">
                            <span>7</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/25070416.html"><img src="/index/picture/s_25070416.jpg" width="55" height="74" alt="重生IT人" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ds/25070416.html">重生IT人</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcMwtrV2hTYAA2WzBQPwNn">莱茵哈特洛克</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20020/">都市生活</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>832</em>
                            <span>8</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/520146.html">极品全能高手</a>
                        </div>
                        <div class="detailWrap">
                            <span>8</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/520146.html"><img src="/index/picture/s_520146.jpg" width="55" height="74" alt="极品全能高手" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ds/520146.html">极品全能高手</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQOQdjWWxcNAtuV2ZTYAA%25252FWzY%25253D">花都大少</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20020/">都市生活</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>736</em>
                            <span>9</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/wx/25367551.html">我是大大侠呀</a>
                        </div>
                        <div class="detailWrap">
                            <span>9</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/wx/25367551.html"><img src="/index/picture/s_25367551.jpg" width="55" height="74" alt="我是大大侠呀" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/wx/25367551.html">我是大大侠呀</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QMwdrWWlcPgtrV2RTZwA2">我是森林木</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/wx/xx20012/">武侠幻想</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>719</em>
                            <span>10</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/25940088.html">星之新大陆</a>
                        </div>
                        <div class="detailWrap">
                            <span>10</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/xh/25940088.html"><img src="/index/picture/s_25940088.jpg" width="55" height="74" alt="星之新大陆" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/25940088.html">星之新大陆</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADBQOQdvWWNcNwtiV2BTbQA9">我是黑白先生</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20003/">异世大陆</a></p>
                            </div>
                        </div></li>
                </ul>
                <!--新书月票-->
                <ul class="rankList rankHover tabList numList hidden">
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>5604</em>
                            <span class="num3">1</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAPlRjATABbA">前任无双</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">1</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAPlRjATABbA"><img src="/index/picture/s_25444718.jpg" width="55" height="74" alt="前任无双" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAPlRjATABbA">前任无双</a></h4>
                                <p>作者：跃千愁</p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xx/xx20018/">神话修真</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>3183</em>
                            <span class="num3">2</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVj4AOFRnATcBZw">废土指挥官</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">2</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVj4AOFRnATcBZw"><img src="/index/picture/s_25492363.jpg" width="55" height="74" alt="废土指挥官" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVj4AOFRnATcBZw">废土指挥官</a></h4>
                                <p>作者：黑土冒青烟</p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20003/">异世大陆</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2979</em>
                            <span class="num3">3</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAM1RgATMBYQ">我怎么就火了呢</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">3</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAM1RgATMBYQ"><img src="/index/picture/s_25509425.jpg" width="55" height="74" alt="我怎么就火了呢" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAM1RgATMBYQ">我怎么就火了呢</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADFQPwdjWWNcMgtvV2ZTZgA5">奈何笑忘川</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20022/">娱乐明星</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2550</em>
                            <span>4</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAP1RlATcBYw">一剑斩破九重天</a>
                        </div>
                        <div class="detailWrap">
                            <span>4</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAP1RlATcBYw"><img src="/index/picture/s_25445167.jpg" width="55" height="74" alt="一剑斩破九重天" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjMAP1RlATcBYw">一剑斩破九重天</a></h4>
                                <p>作者：流浪的蛤蟆</p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xx/xx20101/">古典仙侠</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2138</em>
                            <span>5</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjEAOFRlATcBbQ">打造超玄幻</a>
                        </div>
                        <div class="detailWrap">
                            <span>5</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjEAOFRlATcBbQ"><img src="/index/picture/s_25462169.jpg" width="55" height="74" alt="打造超玄幻" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjEAOFRlATcBbQ">打造超玄幻</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcNAtrV2FTYAA9WzVQMwNh">李鸿天</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2104</em>
                            <span>6</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAPlRgATUBbQ">人生交换游戏</a>
                        </div>
                        <div class="detailWrap">
                            <span>6</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAPlRgATUBbQ"><img src="/index/picture/s_25504449.jpg" width="55" height="74" alt="人生交换游戏" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1lVjcAPlRgATUBbQ">人生交换游戏</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPAdjWWpcNQtsV2BTZAA7WzQ%25253D">尺间萤火</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/2cy/xx20063/">搞笑吐槽</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2082</em>
                            <span>7</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/25404540.html">我是丹田掌控者</a>
                        </div>
                        <div class="detailWrap">
                            <span>7</span>
                            <a target="_blank" href="http://chuangshi.qq.com/bk/ds/25404540.html"><img src="/index/picture/s_25404540.jpg" width="55" height="74" alt="我是丹田掌控者" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ds/25404540.html">我是丹田掌控者</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOAdoWWNcPwtoV2ZTZAA7WzQ%25253D">南极海</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20027/">恩怨情仇</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1453</em>
                            <span>8</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjIAMlRlATcBZQ">玄浑道章</a>
                        </div>
                        <div class="detailWrap">
                            <span>8</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjIAMlRlATcBZQ"><img src="/index/picture/s_25358161.jpg" width="55" height="74" alt="玄浑道章" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjIAMlRlATcBZQ">玄浑道章</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWpcNAtqV2lTZwA3WzRQNQNi">误道者</a></p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xx/xx20015/">修真文明</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1189</em>
                            <span>9</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjQAOlRmATEBbQ">贞观贤王</a>
                        </div>
                        <div class="detailWrap">
                            <span>9</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjQAOlRmATEBbQ"><img src="/index/picture/s_25330209.jpg" width="55" height="74" alt="贞观贤王" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1jVjQAOlRmATEBbQ">贞观贤王</a></h4>
                                <p>作者：大眼小金鱼</p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20085/">两晋隋唐</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1035</em>
                            <span>10</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjIAO1RsATQBZQ">这个日式物语不太冷</a>
                        </div>
                        <div class="detailWrap">
                            <span>10</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjIAO1RsATQBZQ"><img src="/index/picture/s_25451851.jpg" width="55" height="74" alt="这个日式物语不太冷" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1kVjIAO1RsATQBZQ">这个日式物语不太冷</a></h4>
                                <p>作者：和风遇月</p>
                                <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/2cy/xx20060/">原生幻想</a></p>
                            </div>
                        </div></li>
                </ul>
            </div>
        </div>
    </div>
    <!--原创女频-->
    <div class="channelWrap mb20 cf">
        <div class="leftBox fl">
            <div class="channelTitle cf">
                <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;">
                    <a href="http://yunqi.qq.com/bk/gdyq/25598937.html" target="_blank">香瑜记</a>
                    <a href="http://yunqi.qq.com/bk/xxqy/25587560.html" target="_blank">沙雕路上只有我</a>
                    <a href="http://yunqi.qq.com/bk/xdyq/22645377.html" target="_blank"> 苏河湾的石库门</a>
                    <a class="nobr" href="http://yunqi.qq.com/bk/xdyq/22987955.html" target="_blank">二宝驾到</a>
                </div>
                <h3>原创女生<span><a href="http://yunqi.qq.com" target="_blank">yunqi.qq.com</a></span></h3>
            </div>
            <div class="recBookWrap cf">
                <div class="bigBook fl">
                    <a href="http://yunqi.qq.com/bk/lmqc/22876861.html" target="_blank"><img src="/index/picture/t5_22876861.jpg" width="204" height="255" target="_blank" /></a>
                    <h4>《<a href="http://yunqi.qq.com/bk/lmqc/22876861.html" target="_blank">彩虹在转角</a>》 <a href="http://account.book.qq.com/bk/author/ADRQOwduWWpcNwtrV2NTbAA%25252F" target="_blank">楼星吟</a></h4>
                    <p>彩虹在转角</p>
                </div>
                <div class="otherBook fl">
                    <ul>
                        <li><a href="http://yunqi.qq.com/bk/khkj/22727621.html" target="_blank"><img src="/index/picture/t5_22727621.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://yunqi.qq.com/bk/khkj/22727621.html" target="_blank">今天先败一个亿</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6" target="_blank">墨泠</a></p>
                                <p class="intro">今天先败一个亿</p>
                            </div></li>
                        <li><a href="http://yunqi.qq.com/bk/lmqc/23561488.html" target="_blank"><img src="/index/picture/t5_23561488.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://yunqi.qq.com/bk/lmqc/23561488.html" target="_blank">窗外的白兰</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcNQtqV2NTYQA8WzJQNQNk" target="_blank">英儿笑春风</a></p>
                                <p class="intro"> 窗外的白兰</p>
                            </div></li>
                        <li><a href="http://yunqi.qq.com/bk/xdyq/728710.html" target="_blank"><img src="/index/picture/t5_728710.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://yunqi.qq.com/bk/xdyq/728710.html" target="_blank">秋葵老屋</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADZQOwdrWWlcMwtpV2hTbQA9Wzg%25253D" target="_blank">乃越</a></p>
                                <p class="intro">秋葵老屋</p>
                            </div></li>
                    </ul>
                    <dl>
                        <dd class="fl">
                            <p><a href="http://yunqi.qq.com/bk//xx30089so2/" target="_blank">短篇小说</a><em>丨</em><a href="http://yunqi.qq.com/bk/ns/25321157.html" target="_blank" class="blue">多彩日记</a></p>
                            <p>多彩日记</p>
                        </dd>
                        <dd class="fl">
                            <p><a href="http://yunqi.qq.com/bk//xx30090so2/" target="_blank">诗歌散文</a><em>丨</em><a href="http://yunqi.qq.com/bk/ns/25540856.html" target="_blank" class="blue">小海龟历险记</a></p>
                            <p>小海龟历险记</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="rightBox fr">
            <div class="threeTabBox tabSwitch">
                <p>云起排行榜</p>
                <div class="choiceBox">
                    <span class="tabCur">人气榜<cite></cite></span>
                    <span>月票榜</span>
                </div>
            </div>
            <!--女频榜-->
            <div class="rankListWrap">
                <!--云起人气-->
                <ul class="rankList rankHover numList tabList">
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>7714844</em>
                            <span class="num3">1</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">1</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html"><img src="/index/picture/s_185422.jpg" width="55" height="74" alt="邪王追妻" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>2610703</em>
                            <span class="num3">2</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">2</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html"><img src="/index/picture/s_607991.jpg" width="55" height="74" alt="神医弃女" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPAdsWWhcNwtqV2ZTZwA2Wzk%25253D">MS芙子</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>1831362</em>
                            <span class="num3">3</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/20540647.html">吾欲成凰</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">3</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/20540647.html"><img src="/index/picture/s_20540647.jpg" width="55" height="74" alt="吾欲成凰" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/20540647.html">吾欲成凰</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPgdqWW1cNgtrV2VTbAA9">夜北</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>966268</em>
                            <span>4</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13659694.html">卦妃天下</a>
                        </div>
                        <div class="detailWrap">
                            <span>4</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13659694.html"><img src="/index/picture/s_13659694.jpg" width="55" height="74" alt="卦妃天下" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13659694.html">卦妃天下</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADJQMwdpWW1cMgtrV2BTYQA6">锦凰</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>816810</em>
                            <span>5</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a>
                        </div>
                        <div class="detailWrap">
                            <span>5</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/index/picture/s_19818084.jpg" width="55" height="74" alt="神医凰后" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>803663</em>
                            <span>6</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">今天先败一个亿</a>
                        </div>
                        <div class="detailWrap">
                            <span>6</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/index/picture/s_22727621.jpg" width="55" height="74" alt="今天先败一个亿" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">今天先败一个亿</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>711912</em>
                            <span>7</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/1001304536.html">快穿之炮灰女配逆袭记</a>
                        </div>
                        <div class="detailWrap">
                            <span>7</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/1001304536.html"><img src="/index/picture/s_1001304536.jpg" width="55" height="74" alt="快穿之炮灰女配逆袭记" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/1001304536.html">快穿之炮灰女配逆袭记</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOwdjWWpcMQtrV2VTYwA7WzI%25253D">很是矫情</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>574804</em>
                            <span>8</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a>
                        </div>
                        <div class="detailWrap">
                            <span>8</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html"><img src="/index/picture/s_13714263.jpg" width="55" height="74" alt="云家小九超皮哒" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPwdrWW5cNgtiV2JTbQ%25253D%25253D">水清竹</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>435072</em>
                            <span>9</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/1000875951.html">豪门第一少奶奶</a>
                        </div>
                        <div class="detailWrap">
                            <span>9</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/1000875951.html"><img src="/index/picture/s_1000875951.jpg" width="55" height="74" alt="豪门第一少奶奶" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/1000875951.html">豪门第一少奶奶</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOAdrWWtcMQtoV2FTZgA%25252FWzg%25253D">凤元糖果</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>400466</em>
                            <span>10</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13294463.html">美人持刀</a>
                        </div>
                        <div class="detailWrap">
                            <span>10</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13294463.html"><img src="/index/picture/s_13294463.jpg" width="55" height="74" alt="美人持刀" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/13294463.html">美人持刀</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQOQdjWWhcNwtvV2VTZAA%25252BWzQ%25253D">正月初四</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30015/">古典架空</a></p>
                            </div>
                        </div></li>
                </ul>
                <!--月票pk榜-->
                <ul class="rankList rankHover tabList numList hidden">
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>9852</em>
                            <span class="num3">1</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23557247.html">好想住你隔壁</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">1</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23557247.html"><img src="/index/picture/s_23557247.jpg" width="55" height="74" alt="好想住你隔壁" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23557247.html">好想住你隔壁</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOgdvWWxcMAtpV2hTZgA3">叶非夜</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>9230</em>
                            <span class="num3">2</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">2</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/index/picture/s_19818084.jpg" width="55" height="74" alt="神医凰后" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>5093</em>
                            <span class="num3">3</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21441342.html">遇见，傅先生</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">3</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21441342.html"><img src="/index/picture/s_21441342.jpg" width="55" height="74" alt="遇见，傅先生" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21441342.html">遇见，傅先生</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQOAdoWWtcMAtsV2VTbAA3WzU%25253D">无尽相思</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>4588</em>
                            <span>4</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23528760.html">你好，King先生</a>
                        </div>
                        <div class="detailWrap">
                            <span>4</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23528760.html"><img src="/index/picture/s_23528760.jpg" width="55" height="74" alt="你好，King先生" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/23528760.html">你好，King先生</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADJQMwdpWW1cMgtrV2BTYQA6">锦凰</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>4585</em>
                            <span>5</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">今天先败一个亿</a>
                        </div>
                        <div class="detailWrap">
                            <span>5</span>
                            <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/index/picture/s_22727621.jpg" width="55" height="74" alt="今天先败一个亿" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">今天先败一个亿</a></h4>
                                <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>3766</em>
                            <span>6</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a>
                        </div>
                        <div class="detailWrap">
                            <span>6</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA"><img src="/index/picture/s_24017924.jpg" width="55" height="74" alt="夫人你马甲又掉了" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a></h4>
                                <p>作者：一路烦花</p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>3754</em>
                            <span>7</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1gVjIAPFRsATQBYw">花娇</a>
                        </div>
                        <div class="detailWrap">
                            <span>7</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1gVjIAPFRsATQBYw"><img src="/index/picture/s_25056857.jpg" width="55" height="74" alt="花娇" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1gVjIAPFRsATQBYw">花娇</a></h4>
                                <p>作者：吱吱</p>
                                <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30016/">古代情缘</a></p>
                            </div>
                        </div></li>
                </ul>
            </div>
        </div>
    </div>
    <!--畅销图书-->
    <div class="channelWrap mb20 cf">
        <div class="leftBox fl">
            <div class="channelTitle cf">
                <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;">
                    <a href="http://dushu.qq.com/Intro.html?bid=733521" target="_blank">与神对话.1</a>
                    <a href="http://dushu.qq.com/Intro.html?bid=673180" target="_blank">内在的从容</a>
                    <a href="http://dushu.qq.com/Intro.html?bid=734236" target="_blank">法医异闻录</a>
                    <a class="nobr" href="http://dushu.qq.com/Intro.html?bid=735232" target="_blank">疲惫生活中的英雄梦想</a>
                </div>
                <h3>QQ阅读<span><a href="http://dushu.qq.com" target="_blank">dushu.qq.com</a></span></h3>
            </div>
            <div class="recBookWrap cf">
                <div class="bigBook fl">
                    <a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank"><img src="/index/picture/t5_147318.jpg" width="204" height="255" target="_blank" /></a>
                    <h4>《<a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank">橙红年代（陈伟霆、马思纯主演）</a>》 <a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骁骑校</a></h4>
                    <p>橙红年代</p>
                </div>
                <div class="otherBook fl">
                    <ul>
                        <li><a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank"><img src="/index/picture/t5_752521.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank">麻衣神算子</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骑马钓鱼</a></p>
                                <p class="intro">麻衣神算子</p>
                            </div></li>
                        <li><a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank"><img src="/index/picture/t5_593655.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank">爸爸去哪儿：父亲的力量</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">郭涛</a></p>
                                <p class="intro">父亲的力量</p>
                            </div></li>
                        <li><a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank"><img src="/index/picture/t5_567325.jpg" width="62" height="78" /></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank">时光会记得</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">独木舟</a></p>
                                <p class="intro">时光会记得</p>
                            </div></li>
                    </ul>
                    <dl>
                        <dd class="fl">
                            <p><a href="http://dushu.qq.com/store/index/cat2/14000/sortkey/2/ps/30/p/1.html" target="_blank">心理学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725430" target="_blank" class="blue">怪咖心理学</a></p>
                            <p>让你迅速找到身边的怪咖</p>
                        </dd>
                        <dd class="fl">
                            <p><a href="http://dushu.qq.com/store/index/cat2/14100/sortkey/2/ps/30/p/1.html" target="_blank">文学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725411" target="_blank" class="blue">牛棚杂忆（图文典藏版）</a></p>
                            <p>季羡林先生以幽默甚至是调侃</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="rightBox fr">
            <div class="threeTabBox tabSwitch">
                <p>畅销书周榜</p>
                <div class="choiceBox">
                    <span class="tabCur">畅销人气<cite></cite></span>
                    <span>免费人气</span>
                    <!-- <span>VIP人气</span> -->
                </div>
            </div>
            <!--畅销人气榜-->
            <div class="rankListWrap">
                <!--畅销人气-->
                <ul class="rankList rankHover tabList numList">
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>21859</em>
                            <span class="num3">1</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=23411826">一品女仵作</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">1</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=23411826"><img src="/index/picture/s_23411826.jpg" width="55" height="74" alt="一品女仵作" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=23411826">一品女仵作</a></h4>
                                <p>作者：锦若</p>
                                <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&amp;cat3=14311">悬疑/惊悚</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>154</em>
                            <span class="num3">2</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25499782">蹚过男人河的女人</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">2</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25499782"><img src="/index/picture/s_25499782.jpg" width="55" height="74" alt="蹚过男人河的女人" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25499782">蹚过男人河的女人</a></h4>
                                <p>作者：张雅文</p>
                                <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=13100&amp;cat3=13113">情感</a></p>
                            </div>
                        </div></li>
                    <li>
                        <div class="hoverHide">
                            <em>145</em>
                            <span class="num3">3</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25444601">读心师</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">3</span>
                            <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25444601"><img src="/index/picture/s_25444601.jpg" width="55" height="74" alt="读心师" /></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25444601">读心师</a></h4>
                                <p>作者：向林</p>
                                <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=13100&amp;cat3=13107">侦探/悬疑/推理</a></p>
                            </div>
                        </div></li>
                </ul>
                <!--免费人气-->
                <ul class="rankList rankHover numList tabList hidden"></ul>
            </div>
        </div>
    </div>
    <div class="recSiteWrap">
        <img class="csGirl" src="/index/picture/bookgirl.png" />
        <div class="qrCodeWrap">
            <div class="code1">
                <p>下载客户端</p>
                <img width="80" height="80" src="/index/picture/qq_read_qr_1.png" alt="" />
            </div>
            <div class="code2">
                <p>关注微信</p>
                <img src="/index/picture/bookqrcode.png" alt="" />
            </div>
        </div>
        <div class="siteLink">
            <a class="a_cs" href="http://chuangshi.qq.com" target="_blank"></a>
            <a class="a_yq" href="http://yunqi.qq.com" target="_blank"></a>
            <a class="a_dushu" href="http://dushu.qq.com" target="_blank"></a>
            <a class="a_bbs" href="http://bbs.chuangshi.qq.com/" target="_blank"></a>
            <a class="a_custom" href="http://kf.qq.com/product/chuangshi.html" target="_blank"></a>
            <div class="csLink">
                <h3>创世中文</h3>
                <p class="f12">chuangshi.qq.com</p>
                <p>汇集最新最热最火的男性竞技小说在线阅读</p>
            </div>
            <div class="yqLink">
                <h4>云起书院</h4>
                <p class="f12">yunqi.qq.com</p>
                <p>汇集言情小说阅读</p>
            </div>
            <div class="dushuLink">
                <h4>QQ阅读</h4>
                <p class="f12">dushu.qq.com</p>
                <p>汇集畅销小说阅读</p>
            </div>
            <div class="bbsLink">
                <h4>论坛</h4>
                <p class="f12">bbs</p>
                <p>书迷作家汇聚之处</p>
            </div>
            <div class="customLink">
                <h4>客服</h4>
                <p class="f12">Custom</p>
                <p>有问题 找客服</p>
            </div>
        </div>
    </div>
    <!-- 主体 end-->
</div>
<div class="footer">
    <div class="footer_main cf">
        <ul>
            <li class="friendLink"><span>友情链接</span></li>
            <li><a target="_blank" href="http://chuangshi.qq.com/">创世中文网</a><a target="_blank" href="http://yunqi.qq.com/">云起书院</a><a target="_blank" href="http://dushu.qq.com/">畅销图书</a><a target="_blank" href="http://www.qidian.com">起点中文网</a><a target="_blank" href="http://yuedu.163.com/yc/">网易原创</a><a target="_blank" href="http://faloo.com">飞卢小说网</a><a href="http://www.hongshu.com" target="_blank">红薯小说网</a></li>
            <li><a target="_blank" href="http://www.17read.com">一起读小说网</a><a target="_blank" href="https://book.km.com/">快猫小说</a><a target="_blank" href="http://xiaoshuo.sogou.com">搜狗小说</a><a target="_blank" href="http://www.3gsc.com.cn/">3G小说网</a><a target="_blank" href="http://xiaoshuo.360.cn">360小说</a><a target="_blank" href="http://www.17k.com">17K小说网</a><a target="_blank" href="http://mm.17k.com">言情小说</a></li>
            <li><a target="_blank" href="http://www.tadu.com">塔读文学</a><a target="_blank" href="http://www.rain8.com">雨枫轩</a><a target="_blank" href="http://www.zongheng.com">纵横小说网</a><a target="_blank" href="http://www.heiyan.com">黑岩阅读网</a><a target="_blank" href="http://www.zongheng.com/mianfei">免费小说</a><a target="_blank" href="http://xiaoshuo.duba.com/?f=qd">金山小说</a><a target="_blank" href="http://www.lkong.net/forum.php">龙的天空</a></li>
            <li><a target="_blank" href="http://www.huanwen.com">幻文小说网</a><a target="_blank" href="http://www.motie.com/">磨铁中文网</a><a target="_blank" href="http://www.ruochu.com/">若初文学网</a><a target="_blank" href="http://www.bayueju.com/">八月居小说网</a><a target="_blank" href="http://www.kanshu.com/">看书网小说</a><a target="_blank" href="http://www.zhaoxiaoshuo.com/">找小说</a><a target="_blank" href="http://www.qwsy.com/">蔷薇书院</a></li>
            <li><a target="_blank" href="http://www.ting85.com/">畅听网</a><a target="_blank" href="http://www.shuhai.com/">书海小说网</a><a target="_blank" href="http://www.znds.com/">智能电视网</a><a target="_blank" href="http://www.banbijiang.com/">半壁江中文网</a><a href="http://www.zhulang.com/" target="_blank">逐浪小说网</a><a href="http://bbs.eben.cn/forum.php?mod=forumdisplay&amp;fid=30" target="_blank">E人E本移动阅读</a><a target="_blank" href="http://www.feihuo.com/">飞火游戏</a></li>
            <li class="business"><span>商务合作</span>
                <div class="Bcontact">
                    <p>外部渠道联系：</p>
                    <p>张小姐 <a href="mailto:zhanglin@yuewen.com">zhanglin@yuewen.com</a></p>
                    <p>腾讯内部联系：</p>
                    <p>卢小姐 <a href="mailto:luxiaoyun@yuewen.com">luxiaoyun@yuewen.com</a></p>
                </div></li>
        </ul>
    </div>
    <div class="foot">
        <p><a href="http://www.tencent.com/" target="_blank" rel="nofollow">关于腾讯</a><a href="http://www.tencent.com/index_e.shtml" target="_blank" rel="nofollow">About Tencent</a><a href="http://www.qq.com/contract.shtml" target="_blank" rel="nofollow">服务协议</a><a href="http://open.qq.com/" target="_blank" rel="nofollow">开放平台</a><a href="http://www.tencentmind.com/" target="_blank" rel="nofollow">广告服务</a><a href="http://hr.tencent.com/" target="_blank" rel="nofollow">腾讯招聘</a><a href="http://gongyi.qq.com/" target="_blank" rel="nofollow">腾讯公益</a><a href="https://www.yuewen.com/service.html" target="_blank" rel="nofollow">客服中心</a><a href="http://www.qq.com/map/" target="_blank" rel="nofollow">网站导航</a><a class="nobroder" target="_blank" href="https://jubao.yuewen.com/">违规举报</a></p>
        <p> Copyright&nbsp;&nbsp;&copy;&nbsp;1998&nbsp;-&nbsp;2019&nbsp;Tencent.&nbsp;All&nbsp;Rights&nbsp;Reserved</p>
        <p>腾讯公司&nbsp;版权所有</p>
        <p>粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号 网站备案/许可证号：<a style="border-right: 0 solid #CCC;" href="http://beian.miit.gov.cn/publish/query/indexFirst.action" rel="noreferrer" target="_blank">粤B2-20090059 B2-20090028</a></p>
    </div>
    <div id="icp">
        <a href="http://www.sznet110.gov.cn/netalarm/index.jsp" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img1.png" width="122" height="52" /></a>
        <a href="http://www.sznet110.gov.cn/webrecord/innernet/Welcome.jsp?bano=4403101010155" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img2.png" /></a>
        <a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=0272000112400002" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img3.png" /></a>
        <a href="http://www.12377.cn/" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img4.png" /></a>
        <a href="http://www.wenming.cn/" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img5.png" /></a>
        <a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow"><img src="/index/picture/footer_img6.png" /></a>
    </div>
</div>
<!-- 数据统计 -->
<script type="text/javascript">	var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
        requestStatLogData = {
            'site' : "bk",
            'url' : "ACs",
            'bid' : '',
            'uuid' : '',
            'encrypt' : 1
        };

    // var refreshKeyUrl = "http://book.qq.com/ywlogin/refreshkey.html";

    $(function(){
        function _requestStatLog(){
            var params = [],
                url = '';

            $.each(requestStatLogData, function(name, val){
                params.push(name +'='+ encodeURIComponent(val));
            });
            url = requestStatLogUrl +'?'+ params.join('&');

            if(document.referrer){
                url += '&ref='+ encodeURIComponent(document.referrer);
            }

            new Image().src = url;
        }
        _requestStatLog();

        // function _refreshKey(){
        // 	new Image().src = refreshKeyUrl;
        // }
        // setInterval(_refreshKey, 1800000); //每30分钟刷新一次key

        //public
        $.getScript("http://tajs.qq.com/stats?sId=34321758");
        //book.qq.com
        $.getScript("http://tajs.qq.com/stats?sId=34321514", function() {
            //点击流
            $.getScript("http://pingjs.qq.com/ping_tcss_ied.js", function() {
                if (typeof(pgvMain) === 'function') {
                    pgvMain();
                }
            });
        });
    });
</script>
<script type="text/javascript" src="/index/js/index.js"></script>
<script type="text/javascript">    $(function(){
        CS.page.index.main.init();
    });
</script>
</body>
</html>