<?php
/*
Template Name: Page répértoire des clubs
*/
/* appel du header */
get_header();
$headerimg = get_field('header-img', 'option');
$offerimg = get_field('offer-img');
?>
<main id="primary" class="site-main">
    <article class="section section--header">
        <section class="clubs-header">
            <h1>Trouvez le club d'affaires dans votre ville</h1>
            <p>Développez votre réseau dans un des clubs présents dans notre liste</p>
        </section>
        <section class="section--clubs">
            <?php 
            $clubs = new WP_Query(array( 'post_type' => 
            'clubs', 'posts_per_page' => 20));
            ?>
            <?php while ( $clubs->have_posts() ) : $clubs->the_post(); ?>
                <a class="card-club" href="<?php the_permalink() ?>">
                        <div class="card-club_logo">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-club_content">
                            <p>Club</p>
                            <h2><?php the_field('club-name'); ?></h2>
                            <div class="card-club_content categorie">
                                <?php 
                                    foreach(get_the_category() as $category) {
                                        echo $category->name;
                                    }
                                ?>
                            </div>
                            <div class="card-club_cta">
                                <p><i class="lni lni-arrow-right"></i></p>
                            </div>
                        </div>
                </a>
            <?php endwhile ; ?>
        </section>
    </article>
</main>

<?php
/* appel du footer */
get_footer() 
?>