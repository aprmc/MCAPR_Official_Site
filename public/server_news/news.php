<?php require_once '../../public/head.php' ?>

<body class="pushable">

    <!-- 下滑菜单 -->
    <div class="ui large top fixed menu transition hidden" id="SlideDownMenu">
        <div class="ui container">
            <a href="/" class="item">主页</a>
        </div>
    </div>

    <!-- 手机侧边栏菜单 -->
    <div class="ui vertical inverted sidebar menu left" id="PhoneSidebarMenu">
        <a href="/" class="item">主页</a>
    </div>


    <div class=" pusher" id="ContentContainer">
        <div class="ui vertical masthead center aligned segment" id="head">

            <div class="ui container">
                <div class="ui large secondary pointing menu">
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="/" class="item">主页</a>
                </div>
            </div>

            <div class="ui text">
                <h1 class="ui header title">
                    我的世界基岩版 APR 生电服务器官网 - 更多新闻
                </h1>
            </div>

        </div>
        <div class="ui text container" id="news">
            <div class="center aligned row">
                <div class="column">
                    <h2 style="text-align: center;">Server News!<i class="bullhorn icon"></i></h2>
                    <!-- article -->
                    <?php
                    // 获取所有新闻
                    $all_news = get_news();

                    // 筛选出置顶新闻和非置顶新闻
                    $top_news = array_filter($all_news, function ($news) {
                        return $news->news_top === 'true';
                    });
                    $non_top_news = array_filter($all_news, function ($news) {
                        return $news->news_top !== 'true';
                    });

                    // 按发布时间从新到旧排序非置顶新闻
                    usort($non_top_news, function ($a, $b) {
                        return strtotime($b->news_time) - strtotime($a->news_time);
                    });

                    // 合并置顶新闻和非置顶新闻
                    $merged_news = array_merge($top_news, $non_top_news);

                    // 分页设置
                    $news_per_page = 1; // 每页显示的新闻数量
                    $total_news = count($merged_news); // 新闻总数
                    $total_pages = ceil($total_news / $news_per_page); // 总页数
                    // 获取当前页数，默认为第一页
                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                    $start_index = ($current_page - 1) * $news_per_page;
                    $end_index = $start_index + $news_per_page - 1;

                    for ($i = $start_index; $i <= $end_index; $i++) {
                        if ($i >= $total_news) {
                            break;
                        }
                        $news_list = $merged_news[$i];
                        if ($news_list->news_top === 'true') { ?>
                            <div class="news-item" style="opacity: 0; transform: translateX(200px);">
                                <svg t="1695529756669" class="icon" viewBox="0 0 1920 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11246" width="48" height="48">
                                    <path d="M367.488 667.904h423.744v47.232H367.488v-47.232zM320.256 204.352h137.28v68.992h-137.28v-68.992zM367.488 754.112h423.744v48H367.488v-48zM693.76 204.352h137.984v68.992H693.76v-68.992zM507.008 204.352h137.28v68.992h-137.28v-68.992z" p-id="11247"></path>
                                    <path d="M1792.512 0H127.488C57.472 0 0 57.152 0 127.616v768.768C0 966.72 57.088 1024 127.488 1024h1665.088c69.952 0 127.424-57.152 127.424-127.616V127.616C1920 57.216 1862.912 0 1792.512 0z m-528 175.104h446.976v54.016H1494.72l-24 101.248h206.976V689.6h-57.728V384.32h-289.472v308.224h-57.728v-362.24h140.224l20.992-101.248h-169.472v-53.952z m-996.032-11.2h614.272v167.232h-51.008v-17.28H320.256v17.28H268.48V163.904z m678.784 681.728h-744v-43.52h111.744V454.848h229.504v-48.704H221.248v-42.048h323.264v-39.744h54.016v39.744h331.52v41.984h-331.52v48.768h245.248v347.264h103.488v43.52z m203.264-94.528c0 59.52-30.72 89.28-92.224 89.28-25.472 0-46.016-0.512-61.504-1.472-2.496-22.976-6.528-45.248-12.032-66.752 22.976 5.504 46.72 8.256 71.232 8.256 24 0 35.968-11.52 35.968-34.496V247.872H971.2v-54.72h278.976v54.72H1150.4v503.232z m521.216 121.536c-67.008-55.488-137.28-108.032-210.752-157.504-4.992 9.984-10.496 19.008-16.512 27.008-41.472 57.024-113.28 101.504-215.232 133.504-9.472-16.512-21.504-34.496-35.968-54.016 94.528-27.008 161.28-64.512 200.256-112.512 34.496-44.992 51.776-113.024 51.776-204.032V421.12h57.728v82.496c0 62.528-6.72 115.776-20.224 159.744 84.48 54.016 161.472 107.008 230.976 158.976l-42.048 50.304z" p-id="11248"></path>
                                    <path d="M367.488 495.36h423.744v47.232H367.488V495.36zM367.488 581.632h423.744v47.232H367.488v-47.232z" p-id="11249"></path>
                                </svg>
                            </div>
                        <?php } ?>
                        <div class="news-item" style="opacity: 0; transform: translateX(200px);">
                            <h3 class="ui header" style="text-align: center;"><?php echo $news_list->news_title; ?></h3>
                            <p>发布时间: <?php echo $news_list->news_time ?> | <i class="tags icon"></i><?php echo $news_list->news_tag ?></p>
                            <p><?php echo $news_list->news_content ?></p>
                            <div class="ui section divider"></div>
                        </div>
                    <?php }; ?>
                    <!-- article end -->

                    <div class="ui centered buttons">
                        <?php if ($current_page > 1) { ?>
                            <a href="?page=<?php echo $current_page - 1 ?>" class="ui labeled icon button">
                                <i class="left chevron icon"></i>
                                上一页
                            </a>
                        <?php } ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                            <a href="?page=<?php echo $i ?>" class="ui button <?php if ($i == $current_page) echo 'active'; ?>">
                                <?php echo $i ?>
                            </a>
                        <?php } ?>

                        <?php if ($current_page < $total_pages) { ?>
                            <a href="?page=<?php echo $current_page + 1 ?>" class="ui right labeled icon button">
                                下一页
                                <i class="right chevron icon"></i>
                            </a>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once '../../public/footer.php' ?>
    </div>
</body>

</html>