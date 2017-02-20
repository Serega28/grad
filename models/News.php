<?php

class News
{
    //returns an array of available news items
    public static function getNewsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $newsList = array();
        // Текст запроса к БД
        $result = $db->query('SELECT id, title, short_content FROM news WHERE type = 1 ORDER BY id ASC LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }

    //returns an array of all news items
    public static function getAllNews()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $allNews = array();
        // Текст запроса к БД
        $result = $db->query('SELECT id, title, short_content FROM news ORDER BY id');

        $i = 0;
        while ($row = $result->fetch()) {
            $allNews[$i]['id'] = $row['id'];
            $allNews[$i]['title'] = $row['title'];
            $allNews[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $allNews;
    }

    //returns single news item with specified id
    public static function getNewsItemById($id)
    {
        //Запрос к БД
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            //Запрос к БД
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode();

            $newsItem = $result->fetch(PDO::FETCH_ASSOC);

            return $newsItem;
        }
    }

    /**
     * Удаляет новость с указанным id
     * @param integer $id <p>id новости</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM news WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no_image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/news/';

        // Путь к изображению товара
        $pathToNewsImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToNewsImage)) {
            // Если изображение для новости существует
            // Возвращаем путь изображения новости
            return $pathToNewsImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

    /**
     * Возвращает новость с указанным id
     * @param integer $id <p>id новости</p>
     * @return array <p>Массив с информацией о новости</p>
     */
    public static function getNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM news WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    /**
     * Редактирует новость с заданным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Массив с информацей о новости</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateNewsById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE news
            SET 
                title = :title, 
                short_content = :short_content, 
                content = :content, 
                author_name = :author_name, 
                type = :type
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':author_name', $options['author_name'], PDO::PARAM_STR);
        $result->bindParam(':type', $options['type'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Добавляет новыую новость
     * @param array $options <p>Массив с информацией о новости</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createNews($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO news '
            . '(title, short_content, content, author_name, type)'
            . 'VALUES '
            . '(:title, :short_content, :content, :author_name, :type)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_INT);
        $result->bindParam(':author_name', $options['author_name'], PDO::PARAM_STR);
        $result->bindParam(':type', $options['type'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


    /**
     * Возвращает текстое пояснение наличия товара:<br/>
     * <i>0 - Под заказ, 1 - В наличии</i>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }
}