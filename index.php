<?php require_once './public/head.php' ?>


<body class="pushable">

    <!-- 下滑菜单 -->
    <nav>
        <div class="ui large top fixed menu transition hidden" id="SlideDownMenu">
            <div class="ui container">
                <a href="#" class="item">主页</a>
                <a href="#about" class="item">关于服务器</a>
                <!-- <a href="#admin" class="item">管理员</a> -->
                <a href="#join" class="item">加入</a>
                <a href="#news" class="item">服务器新闻</a>
            </div>
        </div>
    </nav>


    <!-- 手机侧边栏菜单 -->
    <div class="ui vertical inverted sidebar menu left" id="PhoneSidebarMenu">
        <a href="#" class="item">主页</a>
        <a href="#about" class="item">关于服务器</a>
        <!-- <a href="#admin" class="item">管理员</a> -->
        <a href="#join" class="item">加入</a>
        <a href="#news" class="item">服务器新闻</a>
    </div>


    <div class="pusher" id="ContentContainer">
        <div class="ui vertical masthead center aligned segment" id="head">
            <nav>
                <div class="ui container">
                    <div class="ui large secondary pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <a href="#" class="item">主页</a>
                        <a href="#about" class="item">关于服务器</a>
                        <!-- <a href="#admin" class="item">管理员</a> -->
                        <a href="#join" class="item">加入</a>
                        <a href="#news" class="item">服务器新闻</a>
                    </div>
                </div>
            </nav>
            <h1 class="ui header title text">
                我的世界基岩版 APR 生电服务器官网
            </h1>
        </div>

        <!--内容-->
        <div class="ui container">

            <div class="ui vertical stripe segment" id="about">
                <div class="ui middle aligned stackable grid container">
                    <div class="row animate-item">
                        <div class="eight wide column">
                            <h2 class="ui header">稳定、强劲的服务器</h2>
                            <p>
                                采用Windows Server 2019作为服务器系统<br>
                                CPU核心采用
                                英特尔® 至强® 金牌 6146 处理器
                                24.75M 高速缓存，3.20 GHz专业的服务器CPU稳定!<br>
                                8GBECC服务器内存不崩溃!TPS稳定在20!<br>
                                服务器核心采用<a href="https://www.minebbs.com/liteloader/" target="_blank">BDS</a>
                                +
                                <a href="https://www.minebbs.com/resources/eq-bds-3-9.4289/" target="_blank">EQ面板</a>稳定!<br>
                                就是突出一个稳定!
                            </p>
                            <h3 class="ui header">不跑路</h3>
                            <p>
                                从开服2022/9/18到现在每天备份三次存档<br>
                            </p>
                        </div>
                        <div class="six wide right floated column">
                            <img alt="img" src="https://img.xcccx.top/imgs/2023/09/6d9d2a51913feb34.png" class="ui  large bordered rounded image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment" id="join">
                <div class="ui text container">
                    <div class="center aligned row">
                        <div class="column">
                            <h2 style="text-align: center;">加入我们</h2>
                        </div>
                    </div>
                    <div class="animate-item">
                        <h3 class="ui header">如何加入?</h3>
                        <p>
                            首先你需要一个微软账户 and 1.18.2我的世界基岩版
                        </p>
                        <h4 class="ui horizontal header divider">
                            <p>-</p>
                        </h4>
                        <h3 class="ui header">然后你需要进入审核群</h3>
                        <p>
                            <a href="" target="_blank">点击此链接进入审核群</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ui text container" id="news">
                <div class="center aligned row">
                    <div class="column">
                        <h2 style="text-align: center;">Server News!<i class="bullhorn icon"></i></h2>
                        <?php
                        $news = array_reverse(get_news());
                        usort($news, function ($a, $b) {
                            return strtotime($b->news_time) - strtotime($a->news_time);
                        });
                        //单次最大展示数量
                        $latest_news = array_slice($news, 0, 1);
                        foreach ($latest_news as $index => $news_list) :
                        ?>
                            <div class="news-item" style="opacity: 0; transform: translateX(200px);">
                                <h3 class="ui header article_title">
                                    <?php echo $news_list->news_title; ?>
                                </h3>
                                <p>
                                    <?php echo $news_list->news_content ?>
                                </p>
                                <p>发布时间: <?php echo $news_list->news_time ?> | <i class="tags icon"></i><?php echo $news_list->news_tag ?></p>
                                <div class="ui section divider"></div>
                            </div>

                        <?php endforeach ?>
                        <div class="ui centered buttons">
                            <a href="/news" class="ui right labeled icon button">
                                更多新闻
                                <i class="right arrow icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './public/footer.php' ?>
    </div>
</body>

</html>