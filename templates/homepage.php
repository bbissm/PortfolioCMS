<?php include 'chunks/header.html' ?>
<section class="hero is-link is-fullheight-with-navbar ">
	<div class="hero-body">
		<h1 class="title has-text-grey-dark is-size-1">
			Me. A developer and PC Intusiast.
		</h1>
        <a href="#about">
            <div class="arrow-down">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>

	</div>
</section>
<div class="container">
    <div class="dividerContainer">
        <div class="divider"></div>
    </div>
    <section class="section" id="about">
        <h2 class="">About Me</h2>
        <div class="box">
            <div class="columns is-justify-content-space-between is-desktop">
                <div class="column is-4 hasImage">
                    <img src="img/me.png" alt="Martin Bissiger">
                </div>
                <div class="column is-6">
                    <h3>Martin Bissiger</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="dividerContainer">
        <div class="divider"></div>
    </div>

    <section class="section" id="hobbies">
        <h2>Hobbies</h2>
        <div class="columns">
            <div class="column">
                <img src="img/me.png" alt="Martin Bissiger">
            </div>
            <div class="column">
                <h3>Hobby 1</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="columns is-flex-direction-row-reverse">
            <div class="column">
                <img src="img/me.png" alt="Martin Bissiger">
            </div>
            <div class="column">
                <h3>Hobby 1</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>
    <div class="dividerContainer">
        <div class="divider"></div>
    </div>
    <section class="section" id="work">
        <h2>Work</h2>
        <div class="columns is-multiline">
            <? for ($i = 1; $i < 4; $i++){ ?>
            <div class="column project is-half">
                <div class="flip">
                    <div class="flip-inner">
                        <div class="flip-front">
                            <img src="img/me.png" alt="Porject" style="width:100%;height:100%;object-fit: cover">
                        </div>
                        <div class="flip-back box">
                            <h1>Project <?echo $i?></h1>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                            <a onclick="openPopup(this)"><i class="fas fa-book-open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <a onclick="switchProject(this,'prev')">
                                <div class="arrow-next prev">
                                    <div class="arrow-next-top"></div>
                                    <div class="arrow-next-bottom"></div>
                                </div>
                            </a>
                            <p class="modal-card-title has-text-centered">Projekt <?echo $i ?></p>
                            <a onclick="switchProject(this,'next')">
                                <div class="arrow-next">
                                    <div class="arrow-next-top"></div>
                                    <div class="arrow-next-bottom"></div>
                                </div>
                            </a>

                            <button onclick="closePopup(this)" class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <div class="columns">
                                <div class="column">
                                    <img src="img/me.png" alt="Projekt">
                                </div>
                                <div class="column">
                                    <h3>Titel</h3>
                                    <progress class="progress is-primary" value="0" max="100" data-value="<?echo $i?>5">15%</progress>
                                    <progress class="progress is-warning" value="0" max="100" data-value="<?echo $i?>0">75%</progress>
                                    <progress class="progress is-danger" value="0" max="100" data-value="<?echo $i?>5">90%</progress>
                                    <div class="content">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="modal-card-foot">
                            <a href=""><i class="fab fa-github"></i></a>
                            <a href="https://www.google.ch" target="_blank">www.google.ch<i class="fas fa-external-link-alt"></i></a>
                        </footer>
                    </div>
                </div>
            </div>
            <? } ?>
        </div>
    </section>
	<? include "chunks/contact.html" ?>
</div>

<?php include 'chunks/footer.html' ?>
