<?php

class Price
{
    //returns an array of price items
    public static function getPriceList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $priceList = array();
        // Текст запроса к БД
        $result = $db->query('SELECT id, name, description, availability, trade_price, retail_price FROM price ORDER BY id ASC LIMIT 20');

        $i = 0;
        while($row = $result->fetch()) {
            $priceList[$i]['id'] = $row['id'];
            $priceList[$i]['name' ]= $row['name'];
            $priceList[$i]['description'] = $row['description'];
            $priceList[$i]['availability' ]= $row['availability'];
            $priceList[$i]['trade_price'] = $row['trade_price'];
            $priceList[$i]['retail_price' ]= $row['retail_price'];
            $i++;
        }

        return $priceList;
    }

    //returns single price item with specified id
    public static function getPriceItemById($id)
    {
        //Запрос к БД
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            //Запрос к БД
            $result = $db->query('SELECT * FROM price WHERE id=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode();

            $newsItem = $result->fetch(PDO::FETCH_ASSOC);

            return $newsItem;

        }
    }

    /**
     * Удаляет товар с указанным id
     * @param integer $id <p>id товара</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deletePriceById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM price WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Возвращает товар с указанным id
     * @param integer $id <p>id товара</p>
     * @return array <p>Массив с информацией о товаре</p>
     */
    public static function getPriceById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM price WHERE id = :id';

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
     * Редактирует товар с заданным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Массив с информацей о товаре</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updatePriceById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE price 
            SET 
                name = :name, 
                description = :description, 
                availability = :availability, 
                trade_price = :trade_price, 
                retail_price = :retail_price 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':trade_price', $options['trade_price'], PDO::PARAM_STR);
        $result->bindParam(':retail_price', $options['retail_price'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Добавляет новый товар
     * @param array $options <p>Массив с информацией о товаре</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createPrice($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO price '
            . '(name, description, availability, trade_price, retail_price)'
            . 'VALUES '
            . '(:name, :description, :availability, :trade_price, :retail_price)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':trade_price', $options['trade_price'], PDO::PARAM_INT);
        $result->bindParam(':retail_price', $options['retail_price'], PDO::PARAM_STR);
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