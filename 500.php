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
        <h1>Внутренняя ошибка 500</h1>
        <h2>Извините, что-то пошло не так</h2>
    </div>
</main>
<?php include('includes/footer.php'); ?>