<?php
/*
Template Name: Page de contact
*/
/* appel du header */
get_header();
?>

<main>
    <article class="page-contact">
        <section class="section--title">
            <h1>Comment vous aider ?</h1>
            <p>Enchanté 👋 ! Nous réponderons à vos questions ou vos demandes avec plaisir.</p>
        </section>
        <section class="section--contact">
            <div class="section--contact_info">
                <div class="choice-button">
                    <div class="select-choice" id="buttontel">
                        <a href="tel:0631496305">
                            <div class="choice">
                                <p><span>📞</span></p>
                                <h3>Nous téléphonner</h3>
                                <p>+33 (0)6 31 49 63 05</p>
                            </div>
                        </a>
                    </div>
                    <div class="select-choice" id="buttontel">
                        <a href="mailto:contact@resonancebusiness.fr">
                            <div class="choice">
                                <p><span>📝</span></p>
                                <h3>Nous envoyer un email</h3>
                                <p>contact@resonancebusiness.fr</p>
                            </div>
                        </a>
                    </div>
                    <div class="select-choice" id="buttontel">
                        <a href="https://calendly.com/tristantornatore/resonancebusiness">
                            <div class="choice">
                                <p><span>📅</span></p>
                                <h3>Réserver un RDV</h3>
                                <p>Voir nos prochaines disponibilités</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="choose-contact">
                    <div class="choice-contact" id="email">
                        <?php echo do_shortcode( '[contact-form-7 id="148" title="Formulaire de contact 1"]' ) ?>
                    </div> 
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>