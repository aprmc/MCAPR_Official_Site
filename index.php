<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="generator" content="DocPad v6.79.4">
    <title>MCAPR - Official - Site</title>
    <meta name="description" content="我的世界基岩版1.18.2生电服务器，致力于打造基岩版最强生电服务器，全称：All Perfect Redstone">
    <meta name="keywords" content="mc,我的世界,生电,我的世界基岩版,MCPE,MCAPR,mcapr,aprmc,apr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
    <script>
        $(document).ready(function() {
            //下滑菜单过度
            $('.masthead').visibility({
                once: false,
                onBottomPassed: function() {
                    $('.fixed.menu').transition('fade in');
                },
                onBottomPassedReverse: function() {
                    $('.fixed.menu').transition('fade out');
                }
            });

            //侧边栏的显示隐藏效果
            $('.ui.sidebar').sidebar('attach events', '.toc.item');
        });

        console.log('\n' + ' %c Version: Beta1.1 ' + '\n', 'color: #fadfa3; background: #030307; padding:5px 0;');
        console.log('\n' + ' %c Powered By XCCCX %c https://www.xcccx.top ' + '\n', 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');

        //新闻动画
        const newsContainers = document.querySelectorAll('.news-container');

        function animateNewsItems() {
            newsContainers.forEach((container, index) => {
                setTimeout(() => {
                    container.style.visibility = 'visible';
                    const newsItems = container.querySelectorAll('.news-item');
                    newsItems.forEach((item, itemIndex) => {
                        setTimeout(() => {
                            item.style.animationDelay = `${itemIndex * 200}ms`;
                            item.classList.add('show');
                        }, itemIndex * 200);
                    });
                }, index * 200);
            });
        }
        animateNewsItems();
    </script>
    <?php
    require_once './public/server_news/connciteon_database.php';
    require_once './public/server_news/get_news.php'
    ?>
</head>


<body class="pushable">

    <!-- 下滑菜单 -->
    <div class="ui large top fixed menu transition hidden" id="SlideDownMenu">
        <div class="ui container">
            <a href="#" class="item">主页</a>
            <a href="#about" class="item">关于服务器</a>
            <a href="#admin" class="item">管理员</a>
            <a href="#join" class="item">加入</a>
            <a href="#news" class="item">服务器新闻</a>
        </div>
    </div>

    <!-- 手机侧边栏菜单 -->
    <div class="ui vertical inverted sidebar menu left" id="PhoneSidebarMenu">
        <a href="#" class="item">主页</a>
        <a href="#about" class="item">关于服务器</a>
        <a href="#admin" class="item">管理员</a>
        <a href="#join" class="item">加入</a>
        <a href="#news" class="item">服务器新闻</a>
    </div>


    <div class="pusher" id="ContentContainer">
        <div class="ui vertical masthead center aligned segment" id="head">

            <div class="ui container">
                <div class="ui large secondary pointing menu">
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="#" class="item">主页</a>
                    <a href="#about" class="item">关于服务器</a>
                    <a href="#admin" class="item">管理员</a>
                    <a href="#join" class="item">加入</a>
                    <a href="#news" class="item">服务器新闻</a>
                </div>
            </div>

            <div class="ui text container">
                <h1 class="ui header title">
                    我的世界基岩版 APR 生电服务器官网
                </h1>
            </div>

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
                        $news = get_news();
                        usort($news, function ($a, $b) {
                            return strtotime($b->news_time) - strtotime($a->news_time);
                        });
                        //单次最大展示数量
                        $latest_news = array_slice($news, 0, 2);
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
                        <a href="/news"><button class="fluid ui button">更多新闻<i class="right arrow icon"></i></button></a>
                    </div>
                </div>
            </div>


        </div>
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="two wide column">
                        <h4 class="ui inverted header">其他链接</h4>
                        <div class="ui inverted link list">
                            <a href="https://space.bilibili.com/478744321" class="item">
                                <p>官方bilibili</p>
                            </a>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=1432777209&site=qq&menu=yes" class="item">
                                <p>联系站长</p>
                            </a>
                        </div>
                    </div>
                    <div class="four wide column">
                        © 2023 www.mcapr.top
                        <p>Version: Beta1.1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>