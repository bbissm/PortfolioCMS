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

/* news.html.twig */
class __TwigTemplate_c14135cb36ec218d428b7c74a22d1a937c7b271f6830faae1db74dfb6bb14f32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news.html.twig", 1);
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

        echo "News";
        
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
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">zur Homepage</a>
            <a class=\"button is-success mb-5\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_news");
        echo "\">Add News</a>
            <div class=\"columns is-multiline\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["newsEntry"]) {
            // line 12
            echo "                <div class=\"column is-4\">
                    <div class=\"card \">
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["newsEntry"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">
                            <div class=\"card-image\">
                                <figure class=\"image is-4by3\">
                                    <img src=\"https://bulma.io/images/placeholders/1280x960.png\" alt=\"Placeholder image\">
                                </figure>
                            </div>
                        </a>
                        <div class=\"card-content\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <figure class=\"image is-48x48\">
                                        <img src=\"https://bulma.io/images/placeholders/96x96.png\" alt=\"Placeholder image\">
                                    </figure>
                                </div>
                                <div class=\"media-content\">
                                    <p class=\"title is-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsEntry"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                                    <p class=\"subtitle is-6\">@";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsEntry"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                                </div>
                            </div>

                            <div class=\"content\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsEntry"], "teaser", [], "any", false, false, false, 35), "html", null, true);
            echo "
                                <a href=\"#\">#css</a> <a href=\"#\">#responsive</a>
                                <br>
                                <time datetime=\"2016-1-1\"></time>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  143 => 35,  135 => 30,  131 => 29,  113 => 14,  109 => 12,  105 => 11,  100 => 9,  96 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}News{% endblock %}
{% block body %}
    <section class=\"news pb-6\">
        <div class=\"inner-container\">
            <h1>{{ page.title }}</h1>
            <a href=\"{{ path('homepage') }}\">zur Homepage</a>
            <a class=\"button is-success mb-5\" href=\"{{ path('create_news') }}\">Add News</a>
            <div class=\"columns is-multiline\">
            {% for newsEntry in news %}
                <div class=\"column is-4\">
                    <div class=\"card \">
                        <a href=\"{{ path('news_detail', {id: newsEntry.id}) }}\">
                            <div class=\"card-image\">
                                <figure class=\"image is-4by3\">
                                    <img src=\"https://bulma.io/images/placeholders/1280x960.png\" alt=\"Placeholder image\">
                                </figure>
                            </div>
                        </a>
                        <div class=\"card-content\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <figure class=\"image is-48x48\">
                                        <img src=\"https://bulma.io/images/placeholders/96x96.png\" alt=\"Placeholder image\">
                                    </figure>
                                </div>
                                <div class=\"media-content\">
                                    <p class=\"title is-4\">{{ newsEntry.name }}</p>
                                    <p class=\"subtitle is-6\">@{{ newsEntry.title }}</p>
                                </div>
                            </div>

                            <div class=\"content\">
                                {{ newsEntry.teaser }}
                                <a href=\"#\">#css</a> <a href=\"#\">#responsive</a>
                                <br>
                                <time datetime=\"2016-1-1\"></time>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
            </div>
        </div>
    </section>

{% endblock %}
", "news.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/news.html.twig");
    }
}
