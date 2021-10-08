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

/* news_detail.html.twig */
class __TwigTemplate_86824abbc6044f91200118297c346e9902cbb3ddba4899fff56a90d9aed7994b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news_detail.html.twig", 1);
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
        echo "    <section class=\"news_detail pb-6\">
        <div class=\"inner-container\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">zu den News</a>

            <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            <a class=\"button is-danger mb-5\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_news", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">Delete</a>
            <a class=\"button is-info mb-5\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_news", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">Edit</a>

            <div class=\"card mt-5\">
                <div class=\"card-image\">
                    <figure class=\"image is-4by3\">
                        <img src=\"https://bulma.io/images/placeholders/1280x960.png\" alt=\"Placeholder image\">
                    </figure>
                </div>
                <div class=\"card-content\">
                    <div class=\"media\">
                        <div class=\"media-left\">
                            <figure class=\"image is-48x48\">
                                <img src=\"https://bulma.io/images/placeholders/96x96.png\" alt=\"Placeholder image\">
                            </figure>
                        </div>
                        <div class=\"media-content\">
                            <p class=\"title is-4\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                            <p class=\"subtitle is-6\">@";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"content\">
                        ";
        // line 33
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 33, $this->source); })()), "text", [], "any", false, false, false, 33));
        echo "
                        <a href=\"#\">#css</a> <a href=\"#\">#responsive</a>
                        <br>
                        <time datetime=\"2016-1-1\">Created by ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 36, $this->source); })()), "startdate", [], "any", false, false, false, 36), "d.m.Y"), "html", null, true);
        echo "</time>
                    </div>
                </div>
            </div>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  136 => 33,  128 => 28,  124 => 27,  105 => 11,  101 => 10,  97 => 9,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}News{% endblock %}
{% block body %}
    <section class=\"news_detail pb-6\">
        <div class=\"inner-container\">
            <a href=\"{{ path('news') }}\">zu den News</a>

            <h1>{{ detail.title }}</h1>
            <a class=\"button is-danger mb-5\" href=\"{{ path('delete_news', {id:detail.id}) }}\">Delete</a>
            <a class=\"button is-info mb-5\" href=\"{{ path('edit_news', {id:detail.id}) }}\">Edit</a>

            <div class=\"card mt-5\">
                <div class=\"card-image\">
                    <figure class=\"image is-4by3\">
                        <img src=\"https://bulma.io/images/placeholders/1280x960.png\" alt=\"Placeholder image\">
                    </figure>
                </div>
                <div class=\"card-content\">
                    <div class=\"media\">
                        <div class=\"media-left\">
                            <figure class=\"image is-48x48\">
                                <img src=\"https://bulma.io/images/placeholders/96x96.png\" alt=\"Placeholder image\">
                            </figure>
                        </div>
                        <div class=\"media-content\">
                            <p class=\"title is-4\">{{ detail.name }}</p>
                            <p class=\"subtitle is-6\">@{{ detail.title }}</p>
                        </div>
                    </div>

                    <div class=\"content\">
                        {{ detail.text|markdown_to_html }}
                        <a href=\"#\">#css</a> <a href=\"#\">#responsive</a>
                        <br>
                        <time datetime=\"2016-1-1\">Created by {{ detail.name }} at {{ detail.startdate | date('d.m.Y') }}</time>
                    </div>
                </div>
            </div>
        </div>
    </section>


{% endblock %}
", "news_detail.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/news_detail.html.twig");
    }
}
