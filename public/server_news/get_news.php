<?php
function get_news()
{
    try {
        $pdo = connect_database();
        $sql = "SELECT * FROM news_content";
        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll();
        $pdo = null;
        $result = array();
        foreach ($rows as $row) {
            $news_list = new stdClass();
            $news_list->news_id = $row['id'];
            $news_list->news_title = $row['title'];
            $news_list->news_content = $row['content'];
            $news_list->news_top = $row['top'];
            $news_list->news_tag = $row['tag'];
            $news_list->news_time = $row['time'];
            $result[] = $news_list;
        }
        return $result;
    } catch (PDOException $e) {
        throw new Exception("数据库查询失败: " . $e->getMessage());
    }
}
