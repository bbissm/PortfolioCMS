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

/* hobbies.html.twig */
class __TwigTemplate_fa5f8099101dd5cedaffb7da5410a7828c4c2203d8dc658b717bbd55d632b0e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hobbies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hobbies.html.twig"));

        // line 1
        echo "<section class=\"section\" id=\"hobby\">
    <h2>Hobbies
        <a class=\"ml-5 button is-success mb-5\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_hobby");
        echo "\">Add Hobby</a>
    </h2>

    <div class=\"columns is-multiline is-desktop\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hobbies"]) || array_key_exists("hobbies", $context) ? $context["hobbies"] : (function () { throw new RuntimeError('Variable "hobbies" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 8
            echo "            <div class=\"column is-half\">
                <img src=\"../assets/img/me.png\" alt=\"Martin Bissiger\">
            </div>
            <div class=\"column\">
                <h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    <a class=\"ml-3\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_hobby", ["id" => twig_get_attribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                    <a class=\"ml-3\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_hobby", ["id" => twig_get_attribute($this->env, $this->source, $context["hobby"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "#hobby\"><i class=\"fas fa-trash\"></i></a>
                </h3>
                <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hobby"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hobbies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  58 => 8,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"hobby\">
    <h2>Hobbies
        <a class=\"ml-5 button is-success mb-5\" href=\"{{ path('create_hobby') }}\">Add Hobby</a>
    </h2>

    <div class=\"columns is-multiline is-desktop\">
        {% for hobby in hobbies %}
            <div class=\"column is-half\">
                <img src=\"../assets/img/me.png\" alt=\"Martin Bissiger\">
            </div>
            <div class=\"column\">
                <h3>{{ hobby.title }}
                    <a class=\"ml-3\" href=\"{{ path('edit_hobby', {'id':hobby.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                    <a class=\"ml-3\" href=\"{{ path('delete_hobby', {'id':hobby.id}) }}#hobby\"><i class=\"fas fa-trash\"></i></a>
                </h3>
                <p>{{ hobby.description }}</p>
            </div>
        {% endfor %}
    </div>
</section>", "hobbies.html.twig", "/shared/httpd/portfolio/symfony/templates/hobbies.html.twig");
    }
}
