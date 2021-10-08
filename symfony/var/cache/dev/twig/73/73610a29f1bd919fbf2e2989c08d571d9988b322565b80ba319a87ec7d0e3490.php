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

/* chunks/_header.html.twig */
class __TwigTemplate_9cb51f775e15ae725b6c2a78d6db452f59647bdb8b3a28dc6c244c43df97075f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chunks/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chunks/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar is-transparent\">
    <div class=\"inner-container\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                <img src=\"https://bulma.io/images/bulma-logo.png\" alt=\"Bulma: a modern CSS framework based on Flexbox\" width=\"112\" height=\"28\">
            </a>
            <div class=\"navbar-burger\" data-target=\"navbarExampleTransparentExample\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id=\"navbarExampleTransparentExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 17
            echo "                    <a class=\"navbar-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menuItem"], "route", [], "any", false, false, false, 17));
            echo "\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\" href=\"https://bulma.io/documentation/overview/start/\">
                        Docs
                    </a>
                    <div class=\"navbar-dropdown is-boxed\">
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/overview/start/\">
                            Overview
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/overview/modifiers/\">
                            Modifiers
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/columns/basics/\">
                            Columns
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/layout/container/\">
                            Layout
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/form/general/\">
                            Form
                        </a>
                        <hr class=\"navbar-divider\">
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/elements/box/\">
                            Elements
                        </a>
                        <a class=\"navbar-item is-active\" href=\"https://bulma.io/documentation/components/breadcrumb/\">
                            Components
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"field is-grouped\">
                        <p class=\"control\">
                            <a class=\"bd-tw-button button\" data-social-network=\"Twitter\" data-social-action=\"tweet\" data-social-target=\"https://bulma.io\" target=\"_blank\" href=\"https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=https://bulma.io&amp;via=jgthms\">
                              <span class=\"icon\">
                                <i class=\"fab fa-twitter\"></i>
                              </span>
                                <span>Tweet</span>
                            </a>
                        </p>
                        <p class=\"control\">
                            <a class=\"button is-primary\" href=\"https://github.com/jgthms/bulma/releases/download/0.9.3/bulma-0.9.3.zip\">
                              <span class=\"icon\">
                                <i class=\"fas fa-download\"></i>
                              </span>
                                <span>Download</span>
                            </a>
                        </p>
                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/login\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Admin</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chunks/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  72 => 18,  67 => 17,  63 => 16,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar is-transparent\">
    <div class=\"inner-container\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"{{ path('homepage') }}\">
                <img src=\"https://bulma.io/images/bulma-logo.png\" alt=\"Bulma: a modern CSS framework based on Flexbox\" width=\"112\" height=\"28\">
            </a>
            <div class=\"navbar-burger\" data-target=\"navbarExampleTransparentExample\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id=\"navbarExampleTransparentExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                {% for menuItem in menu %}
                    <a class=\"navbar-item\" href=\"{{ path(menuItem.route) }}\">
                        {{ menuItem.title }}
                    </a>
                {% endfor %}

                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\" href=\"https://bulma.io/documentation/overview/start/\">
                        Docs
                    </a>
                    <div class=\"navbar-dropdown is-boxed\">
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/overview/start/\">
                            Overview
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/overview/modifiers/\">
                            Modifiers
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/columns/basics/\">
                            Columns
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/layout/container/\">
                            Layout
                        </a>
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/form/general/\">
                            Form
                        </a>
                        <hr class=\"navbar-divider\">
                        <a class=\"navbar-item\" href=\"https://bulma.io/documentation/elements/box/\">
                            Elements
                        </a>
                        <a class=\"navbar-item is-active\" href=\"https://bulma.io/documentation/components/breadcrumb/\">
                            Components
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"field is-grouped\">
                        <p class=\"control\">
                            <a class=\"bd-tw-button button\" data-social-network=\"Twitter\" data-social-action=\"tweet\" data-social-target=\"https://bulma.io\" target=\"_blank\" href=\"https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=https://bulma.io&amp;via=jgthms\">
                              <span class=\"icon\">
                                <i class=\"fab fa-twitter\"></i>
                              </span>
                                <span>Tweet</span>
                            </a>
                        </p>
                        <p class=\"control\">
                            <a class=\"button is-primary\" href=\"https://github.com/jgthms/bulma/releases/download/0.9.3/bulma-0.9.3.zip\">
                              <span class=\"icon\">
                                <i class=\"fas fa-download\"></i>
                              </span>
                                <span>Download</span>
                            </a>
                        </p>
                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/login\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Admin</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
", "chunks/_header.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/chunks/_header.html.twig");
    }
}
