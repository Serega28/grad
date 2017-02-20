<?php
//подключаем модель News
include_once ROOT.'/models/News.php';

class NewsController
{
    /**Выводим список новостей
     * @return bool
     */

    public function actionList()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        //Подключаем вид
        require_once (ROOT.'/views/news/index.php');
        return true;
    }

    /**Просмотр одной новости
     * @param $id
     * @return bool
     */
    public function actionView($id)
    {

        if ($id){
            $newsItem = News::getNewsItemById($id);

            //Подключаем вид
            require_once(ROOT . '/views/news/view.php');
        }

        return true;
    }
}
