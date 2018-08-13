<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => '',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions);
?>
<main class="typography wrap errors-page">
    <div class="errors-page__header">
        <h1>Страница не найдена!</h1>
        <h2>К сожалению, запрошенная вами страница не существует.</h2>
        <p>Проверьте адрес или перейдите на <a href="/">главную страницу</a></p>
    </div>
</main>
<?php include('includes/footer.php'); ?>