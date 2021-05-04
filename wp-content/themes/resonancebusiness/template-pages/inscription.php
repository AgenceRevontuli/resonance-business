<?php
/*
Template Name: Page d'inscription
*/
/* appel du header */
get_header();
?>

<main>
    <article>
        <section class="section-formadhesion">
            <div class="formulaire-wrapper" id="formulaire">
                <div class="formcontainer" id="formcontainer">

                        <?php echo do_shortcode('[contact-form-7 id="167" title="Adhésion club"]') ?>

                </div>
                <div class="form-track">
                    <div class="formstep active" id="formstep1">
                        <div class="formstep-number">
                            <p><span>1</span></p>
                        </div>
                        <div class="formstep-txt">
                            <h3>Commencer</h3>
                            <p>Démarrez votre adhésion en cliquant sur "commencer"</p>
                        </div>
                    </div>
                    <div class="formstep" id="formstep2">
                        <div class="formstep-number">
                            <p><span>2</span></p>
                        </div>
                        <div class="formstep-txt">
                            <h3>Vos informations</h3>
                            <p>Remplissez les champs afin que nous puissions vous présenter aux autres membres et vous inviter dans les différents réseaux</p>
                        </div>
                    </div>
                    <div class="formstep" id="formstep3">
                        <div class="formstep-number">
                            <p><span>3</span></p>
                        </div>
                        <div class="formstep-txt">
                            <h3>Votre entreprise</h3>
                            <p>Renseignez les informations concernant votre entreprise. Cela nous permettra de valider que nous avons une place pour votre secteur d'activité au sein du club que vous souhaitez rejoindre.</p>
                        </div>
                    </div>
                    <div class="formstep" id="formstep4">
                        <div class="formstep-number">
                            <p><span>4</span></p>
                        </div>
                        <div class="formstep-txt">
                            <h3>Validation</h3>
                            <p>Validez vos informations et cliquez sur "envoyer ma candidature" pour confirmer votre demande d'adhésion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>