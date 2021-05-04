<?php
/*
Template Name: Page de paiement
*/
/* appel du header */
get_header();
?>

<main>
    <article class="section">
        <section class="section--title">
            <h1>Formulaire d'adhésion au club</h1>
            <p>Vous souhaitez rejoindre un Business Club du réseau Resonance ? Remplissez le formulaire en dessous. Votre demande d'adhésion est prise en compte dès que le paiement de celle-ci est réalisée. Vous receverez dans les 48 heures suivantes la validation de votre adhésion. Si elle n'est pas validée, vous êtes automatiquement remboursé.</p>
            <div class="single-club_cta">
                <a href="#formulaire" class="cta-primary">
                    Remplir le formulaire <i class="lni lni-arrow-right"></i>
                </a>
                <a href="<?php echo get_site_url(null, '', null); ?>/nous-contacter" class="cta-bis">
                    Nous contacter <i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </section>
    </article>
    <article class="subscription--content" id="formulaire">
        <section class="sub--content">
            <div class="subscription--form" id="formwrapper">
                <div class="step-row">
                    <div id="rowstep1" class="rowstep active">
                        <p class="active" id="spanrowstep1"><span>1</span></p>
                        <p class=" prowstep active" id="prowstep1">Choix de la formule</p>
                    </div>
                    <div id="rowstep2" class="rowstep">
                        <p id="spanrowstep2"><span>2</span></p>
                        <p class="prowstep" id="prowstep2">Informations sur l'entreprise</p>
                    </div>
                    <div id="rowstep3" class="rowstep">
                        <p id="spanrowstep3"><span>3</span></p>
                        <p class="prowstep" id="prowstep3">Validation de l'adhésion</p>
                    </div>
                </div>
                <div class="form-container" id="formcontainer">
                    <?php 
                        the_content();
                    ?>
                </div>
            </div>
        </section>
        <section class="subscription--reassurance">
        </section>
    </article>
</main>

<?php
/* appel du footer */
get_footer() 
?>