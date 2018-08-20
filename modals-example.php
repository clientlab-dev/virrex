<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => '',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions);
?>
<main class="typography wrap news-single">
    <div class="news-single__header">
    <h1>Все модальные окна</h1>
    </div>
    <p>
       <a onclick="$('#login').arcticmodal()">Вход в личный кабинет</a>
       <br>
       <a onclick="$('#recover').arcticmodal()">Восстановление пароля</a>
       <br>
       <a onclick="$('#success-registration').arcticmodal()">Вход в личный кабинет</a>
       <br>
       <a onclick="$('#confirmed-registration').arcticmodal()">Регистрация - ok</a>
       <br>
       <a onclick="$('#can-enter').arcticmodal()">Подтверждено</a>
       <br>
       <a onclick="$('#key-error').arcticmodal()">Ключ недействителен</a>
       <br>
       <a onclick="$('#confirmation-error').arcticmodal()">Подтверждение недействительно</a>
       <br>
       <a onclick="$('#registration').arcticmodal()">Регистрация</a>
    </p>
</main>
<?php include('includes/footer.php'); ?>