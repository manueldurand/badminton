<section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">planning</span>
                            <span class="section-heading-lower">Jeu Libre</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <?php
                            foreach ($array as $jour => $horaire) : ?>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?= $jour ?>
                                <span class="ms-auto"><?= $horaire ?></span>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>Gymnase Jean Mermoz</strong>
                                <br />
                               717 Av. Jean Mermoz, 34000 Montpellier
                            </em>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.7964895854134!2d3.886435932104813!3d43.610778796423936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e9982b11%3A0xc6dd43f58630d399!2sLyc%C3%A9e%20Jean%20Mermoz!5e0!3m2!1sfr!2sfr!4v1672838689614!5m2!1sfr!2sfr" 
            width="600" height="450" style="border:0;" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mb-0">
                            <small><em>Contact</em></small>
                            <br />
                            04.04.04.04.04
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <?php
            include 'content/equipe_content.php';
            ?>
        
            <!-- <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                                <span class="section-heading-lower">About Our Cafe</span>
                            </h2>
                            <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                            <p class="mb-0">
                                We guarantee that you will fall in
                                <em>lust</em>
                                with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>