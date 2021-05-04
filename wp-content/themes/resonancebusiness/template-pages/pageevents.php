<?php
/*
Template Name: Page repertoire events
*/
/* appel du header */
get_header();
?>

<main>
    <article class="section section--title_event">
        <section class="header-content">
            <h1>Des événements business proche de chez vous</h1>
            <p>Retrouvez tous les événements a destination des entrepreneurs dans votre ville. Conférences, ateliers, formations ... autant d'occasions de développer votre réseau et de découvrir des professionnels désireux de développer des opportunités.</p>
        </section>
    </article>
    <article class="section event-content">
        <section class="section-events">
            <div class="list-events">
                <?php 
                $events = new WP_Query(array( 'post_type' => 
                'evenements', 'posts_per_page' => 20));
                ?>
                <?php while ( $events->have_posts() ) : $events->the_post(); ?>
                <a href="<?php the_permalink() ?>">
                    <div class="card-event" >
                       <div class="event-img">
                        
                       </div>  
                       <div class="event-content">
                           <div class="event-date">
                               <p><i class="lni lni-calendar"></i>  le <?php the_field('event-date') ?> <i class="lni lni-timer"></i> de <?php the_field('event-start') ?> à <?php the_field('event-end') ?></p>
                           </div>
                           <h2><?php the_field('event-name') ?></h2>
                           <p class="event-label"><span>Organisé par : </span></p>
                           <div class="event-club">
                           <?php 
                            $clubevent = get_field('event-club');

                            ?>
                            <?php if( $clubevent ): ?>
                            <ul>
                            <?php foreach( $clubevent as $clubevent ): ?>
                                <li>
                                    <?php $clublogo = get_field('club-logo', $clubevent->ID) ?>
                                    <a href="<?php echo get_permalink( $clubevent->ID ); ?>">
                                    <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/icone-resonance-business-echo-entrepreneur-club-affaires.svg', null); ?>" alt="<?php echo $clublogo['alt']; ?>" width="30" /><?php echo get_the_title( $clubevent->ID ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                           </div>
                           <p class="event-label"><span>
                                   Intervenants : 
                               </span></p>
                           <div class="stars-event">
                               <?php 
                                    if( have_rows('event-star') ):

                                        // Loop through rows.
                                        while( have_rows('event-star') ) : the_row();
                                    
                                            // Load sub field value.
                                            $nom = get_sub_field('star-name');
                                            $entreprise = get_sub_field('star-company');
                                            $photo = get_sub_field('star-photo');
                                            // Do something...
                                ?>

                                        <div class="star">
                                            <div class="star-photo">
                                                <img src="<?php echo($photo['url']) ?>" alt="<?php echo($photo['alt']) ?>" />
                                            </div>
                                            <div class="star-name">
                                                <p><?php echo($nom) ?></p>
                                                <p class="star-company"><span>
                                                <?php echo($entreprise) ?>
                                                </span></p>
                                            </div>

                                        </div>

                                <?php  endwhile;
                                    
                                    // No value.
                                    else :
                                        // Do something...
                                    endif;
                               ?>
                           </div>
                       </div>   
                    </div><!-- end card-event -->
                    </a>
                <?php endwhile ; ?>
            </div>
        </section>
    </article>
</main>

<?php
/* appel du footer */
get_footer() 
?>