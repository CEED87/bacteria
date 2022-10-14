<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Счётчик бактерий</title>
        <style>
            body {
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: Montserrat, sans-serif;
            }
            form {
                display: flex;
                flex-direction: column;
                width: 400px;
            }

            input {
                margin: 10px 0;
                padding: 10px;
                border: unset;
                border-bottom: 2px solid #e3e3e3;
                outline: none;
            }

            button {
                padding: 10px;
                background: #e3e3e3;
                border: unset;
                cursor: pointer;
            }
            .userY {
                border: 2px solid #8cff08;
                border-radius: 3px;
                padding: 10px;
                color: rgb(0, 128, 34);
                text-align: center;
                font-weight: bold;
            }
            .userN {
                border: 2px solid #fa3b3b;
                border-radius: 3px;
                padding: 10px;
                color: rgb(163, 0, 0);
                text-align: center;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <?php

            $dataForm = $_GET;
            $mess = '';
            $bacteria = 'Введите данные';

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
                    $mess = 'Недопустимое имя';
                }  
                elseif ($value === 'phone' and !preg_match("/^[+][0-9]/",$key)) 
                {
                    $mess = 'Недопустимый номер телефона';
                }
                elseif ($value === 'email' and !preg_match("/.+@.+\..+/i",$key)) 
                {
                    $mess = 'Недопустимое email';
                }
              else $bacteria = bacteria($_GET['count']);
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
    </body>
</html>



   
