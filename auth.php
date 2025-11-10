<?php
// Подключение конфигурации БД
    include_once('config.php');

    // Проверка отправки формы авторизации
    if (isset($_POST['email'])) {
        session_start();

        // Обработка введенных данных
        $email = trim($_POST['email']);
        $password = hash('sha256', trim($_POST['password']));

        // Поиск пользователя в БД
        $stmt = $pdo->prepare("SELECT * FROM `users` where `email` = :email AND `pass` = :password LIMIT 1");
        $stmt->execute(['email' => $email, 'password' => $password]);

        if ($stmt->rowCount() > 0) {
            // Успешная авторизация
            $user = $stmt->fetch();
            $_SESSION['user']['email'] = $user['email'];
            unset($_SESSION['error']);
        } else {
            // Ошибка авторизации
            $_SESSION['error'] = 'email или пароль неверны';
        }

        // Перенаправление на главную страницу
        header('Location: index.php');
    }
?>