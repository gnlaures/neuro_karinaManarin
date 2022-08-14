<div class="c-tab c-tabVideos <?php echo $cTabVideos["modifiers"] ?>">
    <div class="c-tab__hero">
        <div class="c-tab__hero__content is-active" data-tab="a">
            <?php $cVideo = array('modifiers' => '', 'link' => 'https://www.youtube.com/watch?v=c8C7iNR9YI4', 'cover' => 'post_1.jpeg', 'title' => 'Quatro filiados ao PP em Siderópolis são expulsosdo partido'); include('parts/components/c-video.php'); ?>
        </div>
        <div class="c-tab__hero__content" data-tab="b">
            <?php $cVideo = array('modifiers' => '', 'link' => 'https://www.youtube.com/watch?v=c8C7iNR9YI4', 'cover' => 'post_2.jpeg', 'title' => 'É preciso que os poderes cumpram as leis e aceitem que a população se manifeste'); include('parts/components/c-video.php'); ?>
        </div>
        <div class="c-tab__hero__content" data-tab="c">
            <?php $cVideo = array('modifiers' => '', 'link' => 'https://www.youtube.com/watch?v=c8C7iNR9YI4', 'cover' => 'post_3.jpg', 'title' => 'SC está entre os melhores do Brasil na aplicação da vacina contra a Covid-19'); include('parts/components/c-video.php'); ?>
        </div>
    </div>
    <div class="c-tab__options">
        <ul>
            <li><span data-tab="a" class="is-active">Quatro filiados ao PP em Siderópolis são expulsosdo partido</span></li>
            <li><span data-tab="b">É preciso que os poderes cumpram as leis e aceitem que a população se manifeste</span></li>
            <li><span data-tab="c">SC está entre os melhores do Brasil na aplicação da vacina contra a Covid-19</span></li>
        </ul>
    </div>
</div>