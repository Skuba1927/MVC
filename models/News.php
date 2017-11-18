<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 18.11.2017
 * Time: 14:22
 */

class News
{
    public static function getNewsItemId($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM news WHERE id='.$id);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
    public static function getNewsList() :array
    {
        $db = Db::getConnection();

        $newList = array();
        $result = $db->query('SELECT id, title, date, short_content '
        .'FROM news '
        .'ORDER BY dete DESC'
        .'LIMIT 10');
        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newList;
    }
}