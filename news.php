<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => '',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions);
?>

<div class="wrap">
    <div class="news">
    <h1 class="news__header">Новости Virex</h1>
    </div>
<div class="two-collumns">
    <main class="two-collumns__left-col news">
        <article>
            <h2 class="news__title">Загoловок</h2>
            <p class="news__time">23.04.2018 10:30</p>
            <p class="news__content">
                Банки Уолл-стрит наблюдают падение цен акций, в то время как криптовалютный рынок подскакивает 
                в то время как гиганты Уолл-стрит JP Morgan и Citigroup получали огромные доходы в первом квартале, 
                их общие цены на акции упали, сообщил Wall Street Journal (WSJ) в пятницу, 13 апреля...
            </p>
            <footer>
                <div class="news__tags">
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                </div>
                    <a href="#" class="news__btn-read">Читать далее >></a>
            </footer>
        </article>

        <article>
            <h2 class="news__title">Загoловок</h2>
            <p class="news__time">23.04.2018 10:30</p>
            <p class="news__content">
                Банки Уолл-стрит наблюдают падение цен акций, в то время как криптовалютный рынок подскакивает 
                в то время как гиганты Уолл-стрит JP Morgan и Citigroup получали огромные доходы в первом квартале, 
                их общие цены на акции упали, сообщил Wall Street Journal (WSJ) в пятницу, 13 апреля...
                <img src="assets/img/news_images/roof.jpg" alt="">
            </p>
            <footer>
                <div class="news__tags">
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                </div>
                    <a href="#" class="news__btn-read">Читать далее >></a>
            </footer>
        </article>

        <article>
            <h2 class="news__title">Загoловок</h2>
            <p class="news__time">23.04.2018 10:30</p>
            <p class="news__content">
                Банки Уолл-стрит наблюдают падение цен акций, в то время как криптовалютный рынок подскакивает 
                в то время как гиганты Уолл-стрит JP Morgan и Citigroup получали огромные доходы в первом квартале, 
                их общие цены на акции упали, сообщил Wall Street Journal (WSJ) в пятницу, 13 апреля...
            </p>
            <footer>
                <div class="news__tags">
                    <a href="#" class="news__btn">Тема</a>
                    <a href="#" class="news__btn">Тема</a>
                </div>
                    <a href="#" class="news__btn-read">Читать далее >></a>
            </footer>
        </article>

    </main>
    <aside class="two-collumns__aside">
    <h2 class="news__all-tags-header">Популярные Тэги:</h2>
        <div class="news__all-tags">
            <a href="#" class="news__btn">Тэг</a>
            <a href="#" class="news__btn">Тема</a>
            <a href="#" class="news__btn">Биткоин</a>
            <a href="#" class="news__btn">Storage</a>
            <a href="#" class="news__btn">Уолл Стрит</a>
            <a href="#" class="news__btn">GPU</a>
            <a href="#" class="news__btn">Доходы</a>
            <a href="#" class="news__btn">Акции</a>
        </div>
    </aside>
</div>
</div>
<div class="wrap">
    <div class="pagination">
        <ul class="pagination__list">
            <!-- <li><a class="pagination__move" href="#">〈</a></li> -->
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a class="pagination__move" href="#">〉</a></li>
        </ul>
    </div>
</div>
<?php include('includes/footer.php'); ?>