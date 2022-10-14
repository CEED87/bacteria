<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Авторизация и регистрация</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php

            $dataForm = $_GET;
            $mess = '';
            $bacteria = 'Enter the data';

            function bacteria($count) {
                $greenBacteria = 1;
                $redBacteria = 1;

                for ($i = 1; $i <= $count; $i++) {
                    $green_green = $greenBacteria * 3;
                    $green_red = $greenBacteria * 4;

                    $red_green = $redBacteria * 7;
                    $red_red = $redBacteria * 5;

                    $greenBacteria = $green_green + $red_green;
                    $redBacteria = $green_red + $red_red;
                }

                return 'Зеленых бактерий: '. $greenBacteria . ' ' . 'Красных бактерий: ' . $redBacteria;
            }

            foreach($dataForm as $value => $key) {
            
                if ($value === 'name' and !preg_match("/^[a-zA-Zа-яА-Я]/",$key)) 
                {
                    $mess = 'Not valid name';
                }  
                elseif ($value === 'phone' and !preg_match("/^[+][0-9]/",$key)) 
                {
                    $mess = 'Not valid phone';
                }
                elseif ($value === 'email' and !preg_match("/.+@.+\..+/i",$key)) 
                {
                    $mess = 'Not valid email';
                }
              else $bacteria = bacteria($_GET['count']);
                // else $bacteria = $_GET['count'];
            }
    ?>
        <form id="register" action="/" method="GET">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Введите имя">
            <span></span>
            <label>Номер телефона</label>
            <input type="tel" name="phone" placeholder="Введите номер телефона">
            <span></span>
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите этектронную почту">
            <span></span>
            <label>Число тактов времени</label>
            <input type="number" name="count" placeholder="Введите число тактов">
            <span></span>
            <button type="submit">Отправить</button>

            <?php
            if ($mess !== '') {
                echo "<p class='userN'> $mess </p>";
            } else 
                echo "<p class='userY'> $bacteria </p>";
            ?>
        
        </form>



    <script src="/scripts/main.js"></script>
    <script src="/scripts/registration.js"></script>
    
    </body>
</html>



   
