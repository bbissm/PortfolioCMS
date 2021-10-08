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

/* event.html.twig */
class __TwigTemplate_cb7aab550c6295c79f7021aefb550c9e7700143200fe97efdf8fb1449a8c0db9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event.html.twig", 1);
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
            <section class=\"accordions\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "                <article class=\"accordion mb-6\">
                    <div class=\"accordion-header toggle\">
                        <div class=\"columns is-mobile\">
                            <div class=\"column is-3\">
                                <figure class=\"image\">
                                    <img class=\"object-fit-cover\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["event"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" />
                                </figure>
                            </div>
                            <div class=\"column is-5\">
                                <h3 class=\"title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</h3>
                                <p class=\"location\"><i class=\"far fa-building\"></i>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"column date is-2\">
                                <p><i class=\"far fa-calendar\"></i>29.07.1997</p>
                            </div>
                            <div class=\"column time is-2\">
                                <p><i class=\"far fa-clock\"></i>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "time", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div class=\"gg-chevron-down\" aria-label=\"toggle\"></div>
                    </div>

                    <div class=\"accordion-body\">
                        <div class=\"accordion-content\">
                            <div class=\"columns is-tablet\">
                                <div class=\"column eventInfos is-3\">
                                    <a class=\"button red mb-5\">Tickets</a>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                </div>
                                <div class=\"column eventContent is-4\">
                                    ";
            // line 44
            echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 44));
            echo "
                                </div>
                                <div class=\"column eventGallery is-5\">
                                    <figure class=\"image\">
                                        <img class=\"object-fit-cover\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["event"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 48), "html", null, true);
            echo "\" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </section>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 56,  158 => 48,  151 => 44,  130 => 26,  121 => 20,  117 => 19,  108 => 15,  101 => 10,  97 => 9,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Events{% endblock %}
{% block body %}
    <section class=\"news pb-6\">
        <div class=\"inner-container\">
            <h1>{{ page.title }}</h1>
            <section class=\"accordions\">
            {% for event in events %}
                <article class=\"accordion mb-6\">
                    <div class=\"accordion-header toggle\">
                        <div class=\"columns is-mobile\">
                            <div class=\"column is-3\">
                                <figure class=\"image\">
                                    <img class=\"object-fit-cover\" src=\"{{ vich_uploader_asset(event, 'imageFile') }}\" alt=\"{{ event.image }}\" />
                                </figure>
                            </div>
                            <div class=\"column is-5\">
                                <h3 class=\"title\">{{ event.title }}</h3>
                                <p class=\"location\"><i class=\"far fa-building\"></i>{{ event.location }}</p>
                            </div>
                            <div class=\"column date is-2\">
                                <p><i class=\"far fa-calendar\"></i>29.07.1997</p>
                            </div>
                            <div class=\"column time is-2\">
                                <p><i class=\"far fa-clock\"></i>{{ event.time }}</p>
                            </div>
                        </div>
                        <div class=\"gg-chevron-down\" aria-label=\"toggle\"></div>
                    </div>

                    <div class=\"accordion-body\">
                        <div class=\"accordion-content\">
                            <div class=\"columns is-tablet\">
                                <div class=\"column eventInfos is-3\">
                                    <a class=\"button red mb-5\">Tickets</a>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                    <p>Tickets</p>
                                </div>
                                <div class=\"column eventContent is-4\">
                                    {{ event.description|markdown_to_html }}
                                </div>
                                <div class=\"column eventGallery is-5\">
                                    <figure class=\"image\">
                                        <img class=\"object-fit-cover\" src=\"{{ vich_uploader_asset(event, 'imageFile') }}\" alt=\"{{ event.image }}\" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            {% endfor %}
            </section>
        </div>
    </section>

{% endblock %}
", "event.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/event.html.twig");
    }
}
