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

/* admin/field/upload_field.html.twig */
class __TwigTemplate_d68d8fe01920dceb00c27ec8b028de3768a7929f3c41ce879d8b2c40e4e298dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/upload_field.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/upload_field.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"form-widget\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "            <a href=\"#\" class=\"col-sm ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#ea-lightbox-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-featherlight=\"#ea-lightbox-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img class=\"fill\" src=\"uploads/team/";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" width=\"200\" height=\"200\" style=\"object-fit: cover\">
            </a>
            <div id=\"ea-lightbox-";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"ea-lightbox\">
                <img src=\"uploads/team/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/field/upload_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  67 => 8,  63 => 7,  58 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"form-widget\">
        {% for image in field.value %}
            <a href=\"#\" class=\"col-sm ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#ea-lightbox-{{ image.id }}\" data-featherlight=\"#ea-lightbox-{{ image.id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img class=\"fill\" src=\"uploads/team/{{ image.image }}\" width=\"200\" height=\"200\" style=\"object-fit: cover\">
            </a>
            <div id=\"ea-lightbox-{{ image.id }}\" class=\"ea-lightbox\">
                <img src=\"uploads/team/{{ image.image }}\" alt=\"\">
            </div>
        {% endfor %}
    </div>
</div>
", "admin/field/upload_field.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/admin/field/upload_field.html.twig");
    }
}
