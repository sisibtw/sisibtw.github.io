<?php
    if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];

        if (mail('darkk2469@gmail.com',
                 'Новое письмо',
                 'Ждёт обратную связь'."\n".
                 'Имя: '.$name."\n".
                 'Телефон:' .$tel."\n".
                 'email:' .$email."\n".
        
        )) {
            echo('Успешно отправлено');
        } else {
            echo('Ошибка');
        }
    }
?>