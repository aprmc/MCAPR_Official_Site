console.log('\n' + ' %c Version: Beta1.0.0 ' + '\n', 'color: #fadfa3; background: #030307; padding:5px 0;');
console.log('\n' + ' %c Powered By XCCCX %c https://www.xcccx.top ' + '\n', 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');

$(document).ready(function () {
    //下滑菜单过度
    $('.masthead').visibility({
        once: false,
        onBottomPassed: function () {
            $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function () {
            $('.fixed.menu').transition('fade out');
        }
    });
    //侧边栏的显示隐藏效果
    $('.ui.sidebar').sidebar('attach events', '.toc.item');
});

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