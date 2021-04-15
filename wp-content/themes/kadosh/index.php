<?= get_header('header.php'); ?>

<main id="index">

    <section class='mainsection'>
        <div class='single-item'>
            <p>a</p>
            <p>b</p>
            <p>c</p>
            <p>d</p>
        </div>

        <div>
            <h1>Hotel Encantos de Penedo</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore molestiae, possimus, rerum unde magni blanditiis minima deleniti hic molestias, quod officiis corporis cum quidem ducimus quam delectus nostrum quis et. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic explicabo provident assumenda expedita blanditiis at minus dolor temporibus consequuntur nihil porro, modi voluptatem eaque maiores eveniet quam quasi. Eaque, consequatur.</p>
        </div>
    </section>

    <section class='mainsection'>
        <section>
            <h1>Conheça Penedo em Alagoas</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates quaerat explicabo voluptatibus voluptatum. Iusto, doloremque repellendus ipsum ipsa quam quaerat magni quidem veniam, ex autem nesciunt voluptatum. Beatae, doloremque adipisci?</p>
        </section>

        <section>
            <?= getPosts('penedo_fotos', 0, 3, 'DESC', true, false, false, false, false); ?>
        </section>
    </section>

    <section class='mainsection'>
        <section>
            <h1>Notícias</h1>
            <span></span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </section>

        <section>
            carousel
        </section>
    </section>

    <section class='mainsection'>
        <section>
            <h1>Hotel Encantos de Penedo ALAGOAS</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam saepe illum hic, sed voluptas corrupti ullam ratione, harum dolorem rem, quod provident. Aspernatur consectetur distinctio quo ipsum quae neque numquam.</p>
            <span></span>
            <?= wp_nav_menu(['theme_location' => 'contact_menu']) ?>
        </section>

        <section>
            <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAEAEBnBEm_KuZZ_QJVppSShwXBJN09Vk
    &q=AL-110,+195+-+Santa+Luzia,+Penedo+-+AL,+57200-000">
            </iframe>
        </section>
    </section>
</main>

<?= get_footer('header.php'); ?>