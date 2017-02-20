<?php

/**
 * Контроллер AdminPriceController
 * Управление прайсом в админпанели
 */
class AdminPriceController extends AdminBase
{

    /**
     * Action для страницы "Управление прайсом"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список товаров
        $priceList = Price::getPriceList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_price/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить товар в прайслист"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];
            $options['availability'] = $_POST['availability'];
            $options['trade_price'] = $_POST['trade_price'];
            $options['retail_price'] = $_POST['retail_price'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую запись
                $id = Price::createPrice($options);

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/price");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_price/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать прайс"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретной записи
        $price = Price::getPriceById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];
            $options['availability'] = $_POST['availability'];
            $options['trade_price'] = $_POST['trade_price'];
            $options['retail_price'] = $_POST['retail_price'];

            // Сохраняем изменения
            Price::updatePriceById($id, $options);

            // Перенаправляем пользователя на страницу управлениями прайсом
            header("Location: /admin/price");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_price/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить запись"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем запись
            Price::deletePriceById($id);

            // Перенаправляем пользователя на страницу управлениями прайсами
            header("Location: /admin/price");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_price/delete.php');
        return true;
    }

}
