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

/* admin/field/vich_image.html.twig */
class __TwigTemplate_9184863ddd40498fa7c2394cdaec3ff163e5d6037413255ca82dd1a134076e51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/vich_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/vich_image.html.twig"));

        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            if (preg_match("/.svg\$/", twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3))) {
                // line 4
                echo "        <div class=\"thumbnail\">
            ";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "instance", [], "any", false, false, false, 5), (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "property", [], "any", false, false, false, 5) . "File"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "fqcn", [], "any", false, false, false, 5)), "html", null, true);
                echo "
        </div>
    ";
            } else {
                // line 8
                echo "        ";
                $context["html_id"] = ("ea-lightbox-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "uniqueId", [], "any", false, false, false, 8));
                // line 9
                echo "        <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "\" data-featherlight=\"#";
                echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
            <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "instance", [], "any", false, false, false, 10), (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "property", [], "any", false, false, false, 10) . "File"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "fqcn", [], "any", false, false, false, 10)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
                echo "\" class=\"img-fluid\">
        </a>

        <div id=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "\" class=\"ea-lightbox\">
            <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "instance", [], "any", false, false, false, 14), (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), "property", [], "any", false, false, false, 14) . "File"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "fqcn", [], "any", false, false, false, 14)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
        </div>
    ";
            }
        } else {
            // line 18
            echo "    <span class=\"badge badge-secondary\">
        Empty
    </span>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/field/vich_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  79 => 14,  75 => 13,  67 => 10,  60 => 9,  57 => 8,  51 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# admin/field/vich_image.html.twig #}
{% if field.value %}
    {% if field.value matches '/\\.svg\$/'  %}
        <div class=\"thumbnail\">
            {{ vich_uploader_asset(entity.instance, field.property ~ 'File', entity.fqcn) }}
        </div>
    {% else %}
        {% set html_id = 'ea-lightbox-' ~ field.uniqueId %}
        <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#{{ html_id }}\" data-featherlight=\"#{{ html_id }}\" data-featherlight-close-on-click=\"anywhere\">
            <img src=\"{{ vich_uploader_asset(entity.instance, field.property ~ 'File', entity.fqcn) }}\" alt=\"{{ entity.name }}\" class=\"img-fluid\">
        </a>

        <div id=\"{{ html_id }}\" class=\"ea-lightbox\">
            <img src=\"{{ vich_uploader_asset(entity.instance, field.property ~ 'File', entity.fqcn) }}\" alt=\"{{ entity.name }}\">
        </div>
    {% endif %}
{% else %}
    <span class=\"badge badge-secondary\">
        Empty
    </span>
{% endif %}
", "admin/field/vich_image.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/admin/field/vich_image.html.twig");
    }
}
