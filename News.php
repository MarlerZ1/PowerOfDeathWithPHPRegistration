<?php
    //Запускаем сессию
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Power of Death - News</title>
	<link rel="stylesheet" href="css\CSS1.CSS" type="text/css"/>
  <link rel="stylesheet" href="css\CSS3.CSS" type="text/css"/>
   <link rel="shortcut icon" href="img\Head2.png" type="image/png">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function(){
           "use strict";
           //================ Проверка email ==================

           //регулярное выражение для проверки email
           var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
           var mail = $('input[name=email]');

           mail.blur(function(){
               if(mail.val() != ''){

                   // Проверяем, если введенный email соответствует регулярному выражению
                   if(mail.val().search(pattern) == 0){
                       // Убираем сообщение об ошибке
                       $('#valid_email_message').text('');

                       //Активируем кнопку отправки
                       $('input[type=submit]').attr('disabled', false);
                   }else{
                       //Выводим сообщение об ошибке
                       $('#valid_email_message').text('Не правильный Email');

                       // Дезактивируем кнопку отправки
                       $('input[type=submit]').attr('disabled', true);
                   }
               }else{
                   $('#valid_email_message').text('Введите Ваш email');
               }
           });

           //================ Проверка длины пароля ==================
           var password = $('input[name=password]');

           password.blur(function(){
               if(password.val() != ''){

                   //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                   if(password.val().length < 6){
                       //Выводим сообщение об ошибке
                       $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                       // Дезактивируем кнопку отправки
                       $('input[type=submit]').attr('disabled', true);

                   }else{
                       // Убираем сообщение об ошибке
                       $('#valid_password_message').text('');

                       //Активируем кнопку отправки
                       $('input[type=submit]').attr('disabled', false);
                   }
               }else{
                   $('#valid_password_message').text('Введите пароль');
               }
           });
       });
   </script>
  </head>
  <body>
    <div></div>
    <div class="Main">
<header>
    <p align="center"><img id="img1" src="img\general-img-main.jpg"> </p>
	<hr/>
</header>
<div  id="PageName">
<p align="center" class="hmain">Новости</p>
</div>
<nav>
  <hr/>
    <table border="1"  align="center" id="TableNav">
      <tr>
        <!-- <td><a href="General.html"><img height="30%" src="img\f1.jpg" alt=""> </a></td><td><a href="Rules.html">Правила </a></td><td><a href="News.html">Новости</a></td><td><a href="Contacts.html">Контакты</a></td> -->
         <td class="A1" onclick="location.href='General.php';">Главная </td><td class="A1" onclick="location.href='Rules.php';">Правила</td><td class="A1" onclick="location.href='News.php';">Новости</td><td class="A1" onclick="location.href='Contacts.php';">Контакты</td>
        <!--   <td><a class="A1" href="General.html"><img height="20%" src="img\f1.jpg"></a></td><td><a class="A1" href="Rules.html"><img height="20%" src="img\f2.jpg"></a></td><td><a class="A1" href="News.html"><img height="20%" src="img\f3.jpg"></a></td><td><a class="A1" href="Contacts.html"><img height="20%" src="img\f4.jpg"></a></td> -->
      </tr>
    </table>
    <hr/>
</nav>
		<content>
      <div class="News">
<p class="Text">В данном разделе будут публиковаться самые разные новости нашего проекта! Например, ивенты, которые в скором времени будут проходить на нашем сервере! Заходите сюда чаще!)</p>
  <p>Пока что новостей нет, заходите в другой раз!</p>
</div>
  </content>
  <hr/>
	<footer>
    <table>
	 <tr>
    <td> <a href="https://vk.com/rp_powerofdeath"><img width="50px" src="img\LogoVK.png"></a> </td>
	 <td><a href="https://facebook.com/"><img width="53px" src="img\LogoFacebook.png"></a> </td>
	 <td><a href="https://twitter.com/"><img width="53px" src="img\LogoTwitter.png"></a> </td>
	  <td><a href="https://telegram.com/"><img width="53px" src="img\LogoTelegram.png"></a> </td>
    <td><p>Power of Death © 2019</p></td>
  </tr>
  </table>
  </footer>
</div>
<div id="auth_block" align="center">
<?php
    //Проверяем авторизован ли пользователь
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
?>
        <div id="link_register">
            <a href="/form_register.php">Регистрация</a>
        </div>

        <div id="link_auth">
            <a href="/form_auth.php">Авторизация</a>
        </div>
<?php
    }else{
        //Если пользователь авторизован, то выводим ссылку Выход
?>
        <div id="link_logout">
            <a href="/logout.php">Выход</a>
        </div>
<?php
    }
?>
</div>
  </body>
</html>
