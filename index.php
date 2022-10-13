

    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <form id="register" action="/" method="GET">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Enter your login">
        <span></span>
        <label>Номер телефона</label>
        <input type="tel" name="phone" placeholder="Enter password">
        <span></span>
        <label>Почта</label>
        <input type="email" name="email" placeholder="Confirm the password">
        <span></span>
        <label>Число тактов времени</label>
        <input type="number" name="count" placeholder="Enter your email address">
        <span></span>
        <button type="submit">Отправить</button>
       
        <p id="mess"></p>
    </form>

    <?php
        // print_r($_GET);

        $dataForm = $_GET;
        // print_r($dataForm);
        foreach($dataForm as $value => $key) {
            // if(!preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$/",$value)) {
            // // echo $value . "<br>";
            // echo "No valid";
            // }else 
            // echo $value . "<br>";
            // echo $value .' '. $key . "<br>";

            if ($value === 'name' and preg_match("/^[a-zA-Zа-яА-Я]/",$key)) {
                echo $key . "<br>";
            }
            if ($value === 'phone' and preg_match("/^[+][0-9]/",$key)) {
                echo $key . "<br>";
            }
        }

//         $website = input($_POST["site"]);

// if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//    $websiteErr = "Invalid URL"; 
// }


    ?>

    <script src="/scripts/main.js"></script>
    <script src="/scripts/registration.js"></script>
    
    </body>
    </html>



   
