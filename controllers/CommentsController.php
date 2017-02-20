<?php

class CommentsController
{
    /**
     * Action для страницы "Комментарии"
     */
    public function actionList()
    {
        $commentsList = array();
        $commentsList = Comments::getCommentsList();

        // Подключаем вид
        require_once ROOT . '/views/comments/list.php';
        return true;
    }

    /**
     * Action для страницы "Оставить отзыв"
     */
    public function actionCreate()
    {
        //Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        //Получаем id пользователя из массива
        $id = $user['id'];

        // Обработка формы
        if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Получаем данные из формы
                $comment = $_POST['comment'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($_POST['comment']) || empty($_POST['comment'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую новость
                Comments::createComment($id, $comment);

                // Перенаправляем пользователя на страницу
                header("Location: / ");
            }
        }

        // Подключаем вид
        require_once ROOT . '/views/comments/index.php';
        return true;
    }

}