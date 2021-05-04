<?php
/*
Template Name: Page d'accueil
*/
/* appel du header */
get_header();
$headerimg = get_field('header-img', 'option');
$offerimg = get_field('offer-img');
?>
<!-- Début du code de la page d'accueil --> 
<main id="primary" class="site-main">
    <article class="header--section">
        <section class="header--section_content">
            <div class="header--section_info">
                <h1><?php echo the_field('titre_principal') ?></h1>
                <p><?php echo the_field('home_baseling') ?></p>
                <div class="header--section_cta">
                    <a href="<?php echo the_field('button-header-1-link') ?>">
                        <button class="cta-header">
                        <?php echo the_field('button-header-1-txt') ?> <br /><i class="lni lni-arrow-right"></i>
                        </button>
                    </a>
                    <a href="<?php echo the_field('button-header-2-link') ?>">
                        <button class="cta-header">
                        <?php echo the_field('button-header-2-txt') ?> <br /><i class="lni lni-arrow-right"></i>
                        </button>
                    </a>
                </div><!-- /.header--section_cta -->
            </div><!-- /.header--section_info -->
            <div class="header--section_img">
            <img src="<?php echo esc_url($headerimg['url']); ?>" alt="<?php echo esc_attr($headerimg['alt']); ?>" />
            </div>
        </section><!-- /.header--section_content -->
        <section class="header--section_scroll">
            <a href="#pourquoi-rejoindre"><?php echo the_field('link-header') ?></a>
        </section>
    </article>

    <article class="section section--1 join" id="pourquoi-rejoindre">
        <section class="section--title section--1_title">
            <?php $section2 = get_field('section-why'); ?>
            <h2><?php echo esc_html($section2['why-title']); ?></h2>
            <p><?php echo esc_html($section2['why-subtitle']); ?></p>
        </section>
        <section class="section--content avantages">
            <div class="avantage" id="avantage1">
                <h3><?php echo esc_html($section2['why-col-1-title']); ?></h3>
                <p>
                    <?php echo $section2['why-col-1-txt']; ?>
                </p>
            </div><!-- end div > avantage -->
            <div class="avantage" id="avantage2">
                <h3><?php echo esc_html($section2['why-col-2-title']); ?></h3>
                <p>
                    <?php echo $section2['why-col-2-txt']; ?>
                </p>
            </div><!-- end div > avantage -->
            <div class="avantage" id="avantage3">
                <h3><?php echo esc_html($section2['why-col-3-title']); ?></h3>
                <p>
                    <?php echo $section2['why-col-3-txt']; ?>
                </p>
            </div><!-- end div > avantage -->
            <div class="avantage" id="avantage4">
                <h3><?php echo esc_html($section2['why-col-4-title']); ?></h3>
                <p>
                    <?php echo $section2['why-col-4-txt']; ?>
                </p>
            </div><!-- end div > avantage -->
        </section><!-- end section section--content -->
        <section class="section--cta">
            <a href="<?php echo esc_url($section2['why-cta-link']); ?>" class="cta-primary">
            <?php echo esc_html($section2['why-cta']); ?> <i class="lni lni-arrow-right"></i>
            </a>
        </section>
    </article>
    <article class="section section--2 offer">
        <section class="offer--content">
            <?php $section3 = get_field('section-offer') ?>
            <h4><?php echo esc_html($section3['offer-title']); ?></h4>
                <?php echo $section3['offer-content']; ?>
            <p class="offer--content_quote">
                <?php echo esc_html($section3['why-quote']); ?>
            </p>
        </section>
        <section class="offer--img">
            <?php if( !empty( $offerimg ) ): ?>
                    <img src="<?php echo esc_url($offerimg['url']); ?>" alt="<?php echo esc_attr($offerimg['alt']); ?>" />
            <?php endif; ?>
        </section>
    </article>
    <article class="section section--3 prix">
        <?php $section4 = get_field('section_prix'); ?>
        <section class="section--title price-title">
            <h2><?php echo esc_html($section4['price-title']); ?></h2>
        </section>
        <section class="section--price">
            <p><?php echo esc_html($section4['price-tarif']); ?></p>
        </section>
        <section class="section--price_detail">
        <div class="row">
            <?php
                // Check rows exists.
                if( have_rows('price-details') ):

                    // Loop through rows.
                    while( have_rows('price-details') ) : the_row();

                        // Load sub field value.
                        $title = get_sub_field('details-title');
                        $content = get_sub_field('details-content');
                        // Do something...
                        echo '<div class="price-detail col1">'; 
                            echo '<h3>';
                                echo $title;
                            echo '</h3>';
                            echo '<p>';
                                echo $content;
                            echo '</p>';
                        echo '</div>';

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div>
        </section><!-- end section--price_detail -->
        <section class="section--cta">
            <a href="<?php echo esc_html($section4['price-cta-link']); ?>" class="cta-secondary">
            <?php echo esc_html($section4['price-cta-txt']); ?> <i class="lni lni-arrow-right"></i>
            </a>
        </section>
    </article>
    <!-- break témoignages 
    <article class="section section--testimonials" id="temoignage-business">
        <section class="section--title">
            <h2>Ils ont fait le choix Resonance Business</h2>
        </section>
        
        <section class="testimonials">
            
        </section>
        
        <section class="section--cta">
            <a href="https://www.resonancebusiness.fr/clubs/" class="cta-primary">
                Rejoignez un club Business <i class="lni lni-arrow-right"></i>
            </a>
        </section>
    </article>-->
    <!-- end temoignages business -->
    <article class="section section--faq" id="faq">
        <?php $section5 = get_field('section-how'); ?>
        <section class="section--title">
            <h2><?php echo esc_html($section5['how-title']); ?></h2>
            <p><?php echo $section5['how-subtitle']; ?></p>
        </section>
        <section class="steps">
            <div class="etape step1">
                <p class="step-number"><span>1</span></p>
                <p><?php echo $section5['how-step1']; ?></p>
            </div>
            <div class="etape step2">
                <p class="step-number"><span>2</span></p>
                <p><?php echo $section5['how-step2']; ?></p>
            </div>
            <div class="etape step2">
                <p class="step-number"><span>3</span></p>
                <p><?php echo $section5['how-step3']; ?></p>
            </div>
            <div class="etape step2">
                <p class="step-number"><span>4</span></p>
                <p><?php echo $section5['how-step4']; ?></p>
            </div>
        </section>
        <section class="section--cta">
            <a href="<?php echo esc_url($section5['how-cta-link']); ?>" class="cta-primary">
                <?php echo esc_html($section5['how-cta-txt']); ?> <i class="lni lni-arrow-right"></i>
            </a>
        </section>
    </article>
    <article class="section section--action" id="adherer">
        <?php $section6 = get_field('section-cta'); ?>
        <section class="section--action_clubs action">
            <h2><?php echo esc_html($section6['cta-left-title']); ?></h2>
            <div class="section--action_content">
                <?php echo $section6['cta-content-left']; ?>
            </div>
            <div class="action_cta">
                <a href="<?php echo esc_url($section6['cta-link-left']); ?>" class="cta-primary">
                    <?php echo esc_html($section6['cta-txt-gauche']); ?> <i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </section>
        <section class="section--action_rdv action">
            <h2><?php echo esc_html($section6['cta-droite-title']); ?></h2>
            <div class="section--action_content">
                <?php echo $section6['cta-content-droite']; ?>
            </div>
            <div class="action_cta">
                <a href="<?php echo esc_url($section6['cta-link-right']); ?>" target="_blank" class="cta-primary">
                    <?php echo esc_html($section6['cta-txt-droite']); ?> <i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </section>
    </article>

</main>

<?php
/* appel du footer */
get_footer() 
?>