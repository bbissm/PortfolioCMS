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

/* team.html.twig */
class __TwigTemplate_46c9963937fc6b30a10aa39a30fd82f219e4a83b6ee676630b9d1d1301369c91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"news pb-6\">
        <div class=\"inner-container\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            <div class=\"columns is-multiline\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "                <div class=\"column skeletonColumn is-4\">
                    <div class=\"memberContainer\">
                        <div class=\"imageContainer mb-5\">
                            <figure class=\"image is-square\" data-image>
                                <img class=\"object-fit-cover skeleton\">
                            </figure>
                        </div>
                        <div class=\"contentContainer\">
                            <div class=\"title3\" data-title>
                                <div class=\"skeleton skeleton-text\"></div>
                            </div>
                            <div class=\"zitat\" data-body>
                                <div class=\"skeleton skeleton-text\"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"column entry is-4 is-hidden\">
                    <div class=\"memberContainer\">
                        <div class=\"imageContainer mb-5\">
                            <figure class=\"image is-square\">
                                <img class=\"object-fit-cover\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["member"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" data-image/>
                            </figure>
                        </div>
                        <div class=\"contentContainer\">
                            <h3 class=\"title3 mb-3\" data-title>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h3>
                            <span class=\"is-italic\" data-body>~";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "zitat", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  138 => 37,  134 => 36,  125 => 32,  101 => 10,  97 => 9,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Events{% endblock %}
{% block body %}
    <section class=\"news pb-6\">
        <div class=\"inner-container\">
            <h1>{{ page.title }}</h1>
            <div class=\"columns is-multiline\">
                {% for member in members %}
                <div class=\"column skeletonColumn is-4\">
                    <div class=\"memberContainer\">
                        <div class=\"imageContainer mb-5\">
                            <figure class=\"image is-square\" data-image>
                                <img class=\"object-fit-cover skeleton\">
                            </figure>
                        </div>
                        <div class=\"contentContainer\">
                            <div class=\"title3\" data-title>
                                <div class=\"skeleton skeleton-text\"></div>
                            </div>
                            <div class=\"zitat\" data-body>
                                <div class=\"skeleton skeleton-text\"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"column entry is-4 is-hidden\">
                    <div class=\"memberContainer\">
                        <div class=\"imageContainer mb-5\">
                            <figure class=\"image is-square\">
                                <img class=\"object-fit-cover\" src=\"{{ vich_uploader_asset(member, 'imageFile') }}\" alt=\"{{ member.image }}\" data-image/>
                            </figure>
                        </div>
                        <div class=\"contentContainer\">
                            <h3 class=\"title3 mb-3\" data-title>{{ member.name }}</h3>
                            <span class=\"is-italic\" data-body>~{{ member.zitat }}</span>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

{% endblock %}
", "team.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/team.html.twig");
    }
}
