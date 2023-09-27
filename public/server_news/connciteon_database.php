<?php
/**链接数据库
 * 
 */
function connect_database()
{
    require $_SERVER['DOCUMENT_ROOT'] . '/db_confing.php';
    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $pdo->exec('set names utf8');
        return $pdo;
    } catch (PDOException $e) {
        echo '
        <div id="container" class="ui container">
            <div class="ui segment mdui-color-red">
                <h1 class="ui center aligned header">warning</h1>
                <p class="ui center aligned">数据库连接错误: ' . $e->getMessage() . '</p>
            </div>
        </div>
        '
        ;
    }
}
?>