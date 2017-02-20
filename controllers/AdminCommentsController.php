<?php

/**
 * Контроллер AdminCommentsController
 * Управление отзывами в админпанели
 */
class AdminCommentsController extends AdminBase
{

    /**
     * Action для страницы "Управление отзывами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список новостей
        $allComments = Comments::getAllComments();

        // Подключаем вид
        require_once(ROOT . '/views/admin_comments/index.php');
        return true;
    }
    /**
     * Action для страницы "Редактировать отзыв"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном отзыве
        $comment = Comments::getCommentsById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $commentText = $_POST['comment'];
            $commentType = $_POST['comment_type'];

            // Сохраняем изменения
            Comments::updateComment($id, $commentText, $commentType);

            // Перенаправляем пользователя на страницу управлениями отзывами
            header("Location: /admin/comments");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_comments/update.php');
        return true;
    }
}