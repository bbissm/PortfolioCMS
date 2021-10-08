<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* work.html.twig */
class __TwigTemplate_104322673be81b675a61a2e3282d7042d7b3ebfef8dc33e62ba02530a2df1db5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "work.html.twig"));

        // line 1
        echo "<section class=\"section\" id=\"work\">
    <h2>Work</h2>
    <div class=\"columns is-multiline\">
        <? for (\$i = 1; \$i < 4; \$i++){ ?>
        <div class=\"column project is-half\">
            <div class=\"flip\">
                <div class=\"flip-inner\">
                    <div class=\"flip-front\">
                        <img src=\"../assets/img/me.png\" alt=\"Porject\" style=\"width:100%;height:100%;object-fit: cover\">
                    </div>
                    <div class=\"flip-back box\">
                        <h1>Project <?echo \$i?></h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                        <a onclick=\"window.openPopup(this)\"><i class=\"fas fa-book-open\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"modal\">
                <div class=\"modal-background\"></div>
                <div class=\"modal-card\">
                    <header class=\"modal-card-head\">
                        <a onclick=\"switchProject(this,'prev')\">
                            <div class=\"arrow-next prev\">
                                <div class=\"arrow-next-top\"></div>
                                <div class=\"arrow-next-bottom\"></div>
                            </div>
                        </a>
                        <p class=\"modal-card-title has-text-centered\">Projekt <?echo \$i ?></p>
                        <a onclick=\"switchProject(this,'next')\">
                            <div class=\"arrow-next\">
                                <div class=\"arrow-next-top\"></div>
                                <div class=\"arrow-next-bottom\"></div>
                            </div>
                        </a>

                        <button onclick=\"closePopup(this)\" class=\"delete\" aria-label=\"close\"></button>
                    </header>
                    <section class=\"modal-card-body\">
                        <div class=\"columns\">
                            <div class=\"column\">
                                <img src=\"../assets/img/me.png\" alt=\"Projekt\">
                            </div>
                            <div class=\"column\">
                                <h3>Titel</h3>
                                <progress class=\"progress is-primary\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>5\">15%</progress>
                                <progress class=\"progress is-warning\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>0\">75%</progress>
                                <progress class=\"progress is-danger\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>5\">90%</progress>
                                <div class=\"content\">
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class=\"modal-card-foot\">
                        <a href=\"\"><i class=\"fab fa-github\"></i></a>
                        <a href=\"https://www.google.ch\" target=\"_blank\">www.google.ch<i class=\"fas fa-external-link-alt\"></i></a>
                    </footer>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "work.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"work\">
    <h2>Work</h2>
    <div class=\"columns is-multiline\">
        <? for (\$i = 1; \$i < 4; \$i++){ ?>
        <div class=\"column project is-half\">
            <div class=\"flip\">
                <div class=\"flip-inner\">
                    <div class=\"flip-front\">
                        <img src=\"../assets/img/me.png\" alt=\"Porject\" style=\"width:100%;height:100%;object-fit: cover\">
                    </div>
                    <div class=\"flip-back box\">
                        <h1>Project <?echo \$i?></h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                        <a onclick=\"window.openPopup(this)\"><i class=\"fas fa-book-open\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"modal\">
                <div class=\"modal-background\"></div>
                <div class=\"modal-card\">
                    <header class=\"modal-card-head\">
                        <a onclick=\"switchProject(this,'prev')\">
                            <div class=\"arrow-next prev\">
                                <div class=\"arrow-next-top\"></div>
                                <div class=\"arrow-next-bottom\"></div>
                            </div>
                        </a>
                        <p class=\"modal-card-title has-text-centered\">Projekt <?echo \$i ?></p>
                        <a onclick=\"switchProject(this,'next')\">
                            <div class=\"arrow-next\">
                                <div class=\"arrow-next-top\"></div>
                                <div class=\"arrow-next-bottom\"></div>
                            </div>
                        </a>

                        <button onclick=\"closePopup(this)\" class=\"delete\" aria-label=\"close\"></button>
                    </header>
                    <section class=\"modal-card-body\">
                        <div class=\"columns\">
                            <div class=\"column\">
                                <img src=\"../assets/img/me.png\" alt=\"Projekt\">
                            </div>
                            <div class=\"column\">
                                <h3>Titel</h3>
                                <progress class=\"progress is-primary\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>5\">15%</progress>
                                <progress class=\"progress is-warning\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>0\">75%</progress>
                                <progress class=\"progress is-danger\" value=\"0\" max=\"100\" data-value=\"<?echo \$i?>5\">90%</progress>
                                <div class=\"content\">
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class=\"modal-card-foot\">
                        <a href=\"\"><i class=\"fab fa-github\"></i></a>
                        <a href=\"https://www.google.ch\" target=\"_blank\">www.google.ch<i class=\"fas fa-external-link-alt\"></i></a>
                    </footer>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</section>", "work.html.twig", "/shared/httpd/portfolio/symfony/templates/work.html.twig");
    }
}
