<?php
/*
Template Name: Page single event
Template Post Type: Evenements
*/
/* appel du header */
get_header();
$clubevent = get_field('event-club');
?>

<main>
    <article class="section-singleevent">
        <section class="single-event_header">
            <div class="single-event_header-txt">
                <div class="single-event_cat">
                    <p>
                        <?php 
                            foreach(get_the_category() as $category) {
                                echo $category->name;
                            }
                        ?>
                    </p>
                </div> 
                <h1><?php echo get_field('event-name'); ?></h1>
                <div class="single-event_info">
                    <div class="info-meta"> 
                        <div class="single-event_meta">
                            <p>Date : <span><?php echo the_field('event-date') ?></span></p>
                        </div>
                        <div class="single-event_meta">
                            <p>Heure de début : <span><?php echo the_field('event-start') ?></span></p>
                        </div>
                        <div class="single-event_meta">
                            <p>Heure de fin : <span><?php echo the_field('event-end') ?></span></p>
                        </div>
                        <div class="single-event_meta">
                            <p>Lieu : <span><?php echo the_field('event-lieu') ?></span></p>
                        </div>
                    </div><!-- end info-meta -->
                </div>
                <p><?php echo the_field('event-content'); ?></p>
                <div class="single-club_cta">
                <a href="#inscription" class="cta-primary">
                    M'inscrire à l'événement <i class="lni lni-arrow-right"></i>
                </a>
                <a href="<?php echo get_site_url(null, '', null); ?>/evenements" class="cta-bis">
                    En savoir plus <i class="lni lni-arrow-right"></i>
                </a>
            </div>
            </div>
            <div class="single-event_header-img">
                <?php the_post_thumbnail(); ?>
            </div>
        </section>
        <section class="single-event_description section-page">
            <div class="single-event_row">
                <div class="single-event_col reseau">
                    <h2>Soirée réseautage en perspective</h2>
                    <h3>Développez votre réseau</h3>
                    <p>Difficile de rencontrer les entrepreneurs de votre région et de provoquer les opportunités en cette période compliquée. Rejoignez-nous pour profiter d'un moment tant apprécié pour découvrir des profils entrepreneurs et développer votre réseau.</p>
                    <h3>Ambiance conviviale</h3>
                    <p>Un cocktail sera organisé pour vous permettre de faire des connaissances dans une ambiance convivale. La présentation du réseau d'affaires Resonance laissera place à des discussions entre vous et les autres membres de la soirée en toute décontraction.</p>
                </div>
                <div class="single-event_col image">
                    <div class="image-double">
                        <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/photo-resonance-business-ouverture-club-affaires-marseille-networking.jpg', null); ?>" alt="ouverture business club affaires entrepreneur">
                        <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/photo-resonance-business-ouverture-club-affaires-marseille-entrepreneur.jpg', null); ?>" alt="Resonance Business echange de contact professionnel business club entrepreneur">
                    </div>
                    <div class="image-simple">
                        <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/photo-resonance-business-ouverture-club-affaires-marseille-entrepreneur-business.jpg', null); ?>" alt="soiree business networking club affaires">
                    </div>
                </div>
            </div><!-- end div row -->
            <div class="single-event_row second">
                <div class="single-event_col img">
                    <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/photo-resonance-business-ouverture-club-affaires-contrats.jpg', null); ?>" alt="nouveau club affaires business resonance">
                </div>
                <div class="single-event_col businessclub">
                    <h2>Découvrez un nouveau Business Club</h2>
                    <h3>Accompagner votre quotidien d'entrepreneur</h3>
                    <p>Cette soirée sera l'occasion de vous présenter le nouveau réseau Resonance Business. Un club d'affaires qui vous aidera à sortir de la solitude de l'entrepreneur, vous former aux nouvelles tendances du monde entrepreneurial et à développer vos contacts pour provoquer des nouvelles opportunités Business.</p>
                    <h3>Vous aider dans les moments difficiles</h3>
                    <p>Nos valeurs : L'humain. Nous avons développer nos Business Clubs Resonance dans un seul but. Placer l'entrepreneur au centre de son aventure entrepreneuriale. En profitant des expériences de chacun, concentrez-vous sur l'essentiel. Ce qui vous a poussé à vous lancer. Ne vous inquiétez plus de demain, vous êtes bien entouré 😉.</p>
                </div>
            </div><!-- end div row -->
            <div class="single-event_row">
                <a href="<?php echo get_site_url(null, '', null); ?>/<?php the_field('club-link') ?>" class="cta-primary">
                    M'inscrire à la soirée de lancement <i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </section>
        <section class="single_event-about">
            <div class="about-club">
            <?php if( $clubevent ): ?>
                <?php foreach( $clubevent as $clubevent ): ?>
                    <h2>À propos des clubs Resonance Business<?php // echo get_the_title( $clubevent->ID ); ?></h2>
                    <div class="about-club_offre">
                        <div class="offre-info">
                            <h3>2 réunions par mois</h3>
                            <p>Les adhérents se réunissent deux fois par mois. La première quinzaine du mois pour une réunion business, se connaître, développer son réseau et ses opportunités. La seconde la deuxième quinzaine pour un atelier, formation ou moment détente.</p>
                        </div>
                        <div class="offre-info">
                            <h3>1 conférence par trimestre</h3>
                            <p>Une fois par trimestre, vous êtes invité à suivre une conférence sur des sujets entrepreneuriaux avec des invités experts de leur sujet. Les adhérents peuvent voter pour les sujets abordés.</p>
                        </div>
                        <div class="offre-info">
                            <h3>3 interclubs par an</h3>
                            <p>Trois fois par an, les membres sont invités à se réunir avec les clubs voisins pour ouvrir les carnets d'adresse et découvrir des nouveaux profils sur toute votre région.</p>
                        </div>
                        <div class="offre-info">
                            <h3>2 événements locaux par an</h3>
                            <p>Votre club organisera en partenariat avec le réseau national deux événements locaux pour dynamiser l'écosystème entrepreneurial local.</p>
                        </div>
                        <div class="offre-info">
                            <h3>Accès aux réseau 7/24 grâce aux outils digitaux</h3>
                            <p>Ouvrez-vous à tous les clubs d'affaires Resonance Business grâce aux outils de communication digitaux. Découvrez des opportunités au delà de votre zone d'activité et trouvez des réponses grâce à la communauté.</p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="about-intervenants">
                <h2>Les intervenants</h2>
                <div class="intervenants">
                               <?php 
                                    if( have_rows('event-star') ):

                                        // Loop through rows.
                                        while( have_rows('event-star') ) : the_row();
                                    
                                            // Load sub field value.
                                            $nom = get_sub_field('star-name');
                                            $entreprise = get_sub_field('star-company');
                                            $photo = get_sub_field('star-photo');
                                            $description = get_sub_field('star-desc');
                                            $linkedin = get_sub_field('star-linkedin');
                                ?>

                                        <div class="intervenant">
                                            <div class="star-photo">
                                                <img src="<?php echo($photo['url']) ?>" alt="<?php echo($photo['alt']) ?>" />
                                            </div>
                                            <div class="star-name">
                                                <div class="star-info">
                                                    <p><?php echo($nom) ?></p>
                                                    <p class="star-company"><span>
                                                    <?php echo($entreprise) ?>
                                                    </span></p>
                                                    <p><a href="<?php echo($linkedin) ?>" target="_blank"><i class="lni lni-linkedin-original"></i></a></p>
                                                </div>
                                                <div class="star-description">
                                                    <p><?php echo($description) ?></p>
                                                </div>
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
        </section>
        <section class="single-event_inscription" id="inscription">
            <div class="inscription-title">
                <h2>Réservez votre place dès maintenant !</h2>
                <h3>Événement gratuit, inscription obligatoire</h3>
                <p>Pour nous rejoindre, c'est simple, il te suffit de t'inscrire au formulure ci-dessous. L'événement est entièrement gratuit sans obligation d'achat. 🚀</p>
            </div>
            <div class="inscription-form">
                <div class="typeform-widget" data-url="https://form.typeform.com/to/KfQmSUjP?typeform-medium=embed-snippet#club=<?php echo get_the_title( $clubevent->ID ); ?> et Aix Business&date=<?php echo the_field('event-date') ?>&heuredebut=<?php echo the_field('event-start') ?>&heurefin=<?php echo the_field('event-end') ?>&lieu=<?php echo the_field('event-lieu') ?>" data-hide-headers="true" data-hide-footer="true" style="width: 100%; height: 600px;">
                </div> 
                <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
            </div>
        </section>
        <section class="single-event_faq">
            <div class="faq-title">
                <h2>Foire aux questions</h2>
                <h3>Vous avez des questions ?</h3>
                <p>N'hésitez pas à nous contacter si vous souhaitez en savoir plus sur notre concept ou cet événément. Vous pouvez également vérifier que votre question n'a pas déjà trouvé une réponse dans les questions fréquemment posées ci-dessous.</p>
            </div>
            <div class="faq-sections">
                <div class="event-faq">
                    <h3>Questions fréquentes</h3>
                    <div class="faq-question">
                        <div class="visible-panel">
                            <h4>Comment être sûr que mon inscription a bien été prise en compte ?</h4>
                            <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/chevron-down.svg', null); ?>" alt="">
                        </div>
                        <div class="toggle-panel">
                            <p>Après la soumission de votre formulaire, vous devriez recevoir un email de confirmation. Cet email est la preuve que vous êtes attendu à l'événement.</p>
                        </div>
                    </div><!-- end faq-question -->
                    <div class="faq-question">
                        <div class="visible-panel">
                            <h4>Je n'ai pas reçu d'email de confirmation</h4>
                            <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/chevron-down.svg', null); ?>" alt="">
                        </div>
                        <div class="toggle-panel">
                            <p>Nos emails glissent souvent malheureucontreusement dans les spams des clients de messagerie. N'oubliez de vérifier dans vos spams. Si vous ne l'avez toujours pas, n'hésitez pas à nous contacter directement pour valider votre inscription.</p>
                        </div>
                    </div><!-- end faq-question -->
                    <div class="faq-question">
                        <div class="visible-panel">
                            <h4>Une contribution va m'être demandée ?</h4>
                            <img src="<?php echo get_site_url(null, 'wp-content/uploads/2021/04/chevron-down.svg', null); ?>" alt="">
                        </div>
                        <div class="toggle-panel">
                            <p>Non, cet événement business est gratuit et sans obligation d'achat.</p>
                        </div>
                    </div><!-- end faq-question -->
                    <!-- 
                    <div class="faq-question">
                        <h4>Puis-je venir accompagné ?</h4>
                        <p>Oui, vous devez inscrire la personne afin qu'elle reçoive une invitation elle aussi. Sans inscription, nous pouvons vous refuser l'accès à la salle pour respecter les normes COVID-19 en vigueur.</p>
                    </div>
                    <div class="faq-question">
                        <h4>Il y aura d'autre événement de lancement ?</h4>
                        <p>Non, à l'issue de cet événement, nous lançons officiellement les activités du club d'affaires. D'autres événements seront organisés sur d'autres sujets et pourront être ouvert au public. N'hésitez pas à vous inscrire à la newseletter pour être tenu informé.</p>
                    </div>
                    <div class="faq-question">
                        <h4>Devons-nous adhérer au club en nous inscrivant ?</h4>
                        <p>Non, l'adhésion est à votre convenance. Si vous êtes en accord avec nos valeurs et que vous souhaitez nous rejoindre, vous serez invité à le faire dès la fin de l'événement. En revanche, il est possible d'adhérer ultérieurement. Attention toutefois, les places partent vite et nous n'acceptons qu'un représentant par secteur d'activité.</p>
                    </div>
                    <div class="faq-question">
                        <h4>La liste des participants sera-t-elle partagée ?</h4>
                        <p>Non, nous faisons le choix de ne pas partager la liste des participants. Nous vous invitons à venir avec vos cartes de visites afin de les distribuées lors de l'événement.</p>
                    </div>
                    <div class="faq-question">
                        <h4>Est-il possible d'avoir un RDV avec un membre de l'organisation ?</h4>
                        <p>Oui ! Pour cela, n'hésitez pas à nous envoyer un email ou à réserver directement un créneau en cliquant sur notre agenda ici</p>
                    </div>-->
                </div> 
                <div class="event-newsletter">
                    <h3>Restez informé des actualités du club</h3>
                    <h4>Vous n'êtes pas disponible à cette date mais intéressé par le concept du club <?php echo get_the_title( $clubevent->ID ); ?> ?</h4>
                    <div class="typeform-widget form-newsletter" data-url="https://form.typeform.com/to/g8wjd7xy?typeform-medium=embed-snippet#club=<?php echo get_the_title( $clubevent->ID ); ?> et Aix Business" data-transparency="100" data-hide-headers="true" data-hide-footer="true" style="width: 100%; height: 450px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                </div>
            </div>
        </section>
    </article>
</main>

<?php
/* appel du footer */
get_footer() 
?>