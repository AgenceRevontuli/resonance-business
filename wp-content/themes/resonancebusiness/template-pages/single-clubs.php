<?php
/*
Template Name: Page single club
Template Post Type: Clubs
*/
/* appel du header */
get_header();
$clublogo = get_field('club-logo');
$imgclub = get_field('club-image');
?>

<main>
    <article class="section single-club_header">
        <section class="single-club_header-content">
            <div class="single-club_logo">
                <?php if( !empty( $clublogo ) ): ?>
                        <img src="<?php echo esc_url($clublogo['url']); ?>" alt="<?php echo esc_attr($clublogo['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="single-club_info">
                <h1>Rejoignez les entrepreneurs du club <?php the_field('club-name') ?></h1>
                <p><?php the_field('club-content') ?></p>
            </div>
            <div class="single-club_cta">
                <a href="<?php echo get_site_url(null, "/inscription/?club=", null) ?><?php the_field('club-name') ?>" class="cta-primary">
                    Adhérer au club <i class="lni lni-arrow-right"></i>
                </a>
                <a href="<?php echo get_site_url(null, '', null); ?>/evenements" class="cta-bis">
                    Voir les événements <i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </section>
        <section class="single-club_header-img">
                <?php if( !empty( $imgclub ) ): ?>
                        <img src="<?php echo esc_url($imgclub['url']); ?>" alt="<?php echo esc_attr($imgclub['alt']); ?>" />
                <?php endif; ?>
        </section>
        <section class="icon-fleche">
            <a href="#business-club">
                <img src="https://www.resonancebusiness.fr/wp-content/uploads/2021/04/icone-fleche-resonance-business.png" alt="icone-fleche">
            </a>
        </section>
    </article>
    <article class="section single-club_perks" id="business-club">
        <section class="section--title">
            <h2>Le club <?php the_field('club-name') ?> c'est ...</h2>
        </section>
        <section class="section-perks_content">
            <div class="perk">
                <h3>2 rencontres mensuelles</h3>
                <p>Retrouvez deux fois par mois les membres du club lors de réunions Business et ateliers afin d’entretenir votre réseau et développer des opportunités. </p>
            </div><!-- end perk -->
            <div class="perk">
                <h3>2 évènements locaux par an</h3>
                <p>Organisez avec votre groupe et le réseau Resonance Business des évènements pour dynamiser le tissu entrepreneurial Marseillais tout en vous mettant en avant.</p>
            </div><!-- end perk -->
            <div class="perk">
                <h3>4 conférences par an</h3>
                <p>Participez aux conférences réservés aux membres du réseau avec des invités spécialisés dans des domains qui vous touchent de près.</p>
            </div><!-- end perk -->
            <div class="perk">
                <h3>3 interclubs par an</h3>
                <p>Les interclubs sont des évènements qui vous aident à élargir votre réseau. Déouvrez les membres des clubs voisins pour partager vos expériences et développer encore plus vos opportunités.</p>
            </div><!-- end perk -->
        </section>
        <section class="section--cta">
            <a href="<?php echo get_site_url(null, "/inscription/?club=", null) ?><?php the_field('club-name') ?>" class="cta-primary">
                Candidater au club <?php the_field('club-name') ?> Business <i class="lni lni-arrow-right"></i>
            </a>
        </section>
    </article>
    <article class="section single-club_price" id="adherer">
        <section class="section--title">
            <h2>Rejoindre le club <?php the_field('club-name') ?></h2>
            <p>Rejoindre le club d’affaires <?php the_field('club-name') ?>, c’est s’entourer d’entrepreneurs dynamiques et bienveillant pour vous aider à développer votre entreprise, surmonter vos difficultés et chercher des nouvelles opportunités.</p>
        </section>
        <section class="single-club_join">
            <h3>Comment rejoindre le club d'affaires ? </h3>
            <div class="single-club_steps">
                <div class="join-step" id="step1">
                    <span>📝</span>
                    <p>Remplissez votre demande d'adhésion</p>
                </div>
                <div class="join-step" id="step2">
                    <span>✅</span>
                    <p>Recevez la validation de votre adhésion</p>
                </div>
                <div class="join-step" id="step3">
                    <span>🎉</span>
                    <p>Participez aux réunions</p>
                </div>
            </div>
        </section>
        <section class="cards-price">
            <div class="card-price monthly">
                <h4>Tarif mensuel du réseau</h4>
                <p class="price-quote">Engagement sur 12 mois</p>
                <p class="data-price"><span>75 €</span>HT / mois</p>
                <div class="section--cta">
                    <a href="<?php echo get_site_url(null, "/inscription/?club=", null) ?><?php the_field('club-name') ?>" class="cta-primary">
                        Remplir le formulaire d'adhésion <i class="lni lni-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="card-price monthly">
                <h4>Tarif annuel du réseau</h4>
                <p class="price-promotion">1 mois offert</p>
                <p class="data-price"><span>825 €</span>HT / an</p>
                <div class="section--cta">
                    <a href="<?php echo get_site_url(null, "/inscription/?club=", null) ?><?php the_field('club-name') ?>" class="cta-primary">
                        Remplir le formulaire d'adhésion <i class="lni lni-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </article>
</main>

<?php
/* appel du footer */
get_footer() 
?>