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

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_27cc0a58f89e78cb7c4c0c5e785eb0303c78ddedb26d599734e2e7179c8f1c2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        // line 1
        $context["__internal_72227765e2b00845119886a3692911dd40905149e1ff030a1197f875bea993e9"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 1, $this->source); })()), "i18n", [], "any", false, false, false, 1), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "started", [], "any", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 5, $this->source); })())), 0))) {
                // line 6
                echo "        <div id=\"flash-messages\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 7, $this->source); })()));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 8
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 9
                        echo "                    <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "\">
                        <button type=\"button\" class=\"alert-close\" onclick=\"this.closest('div').style.display='none'\">&times;</button>

                        ";
                        // line 12
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                         // line 1
(isset($context["__internal_72227765e2b00845119886a3692911dd40905149e1ff030a1197f875bea993e9"]) || array_key_exists("__internal_72227765e2b00845119886a3692911dd40905149e1ff030a1197f875bea993e9", $context) ? $context["__internal_72227765e2b00845119886a3692911dd40905149e1ff030a1197f875bea993e9"] : (function () { throw new RuntimeError('Variable "__internal_72227765e2b00845119886a3692911dd40905149e1ff030a1197f875bea993e9" does not exist.', 1, $this->source); })()));
                        // line 12
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        </div>
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  85 => 15,  77 => 12,  75 => 1,  74 => 12,  67 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain ea.i18n.translationDomain %}
{% if app.session is not null and app.session.started %}
    {% set flash_messages = app.session.flashbag.all %}

    {% if flash_messages|length > 0 %}
        <div id=\"flash-messages\">
            {% for label, messages in flash_messages %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">
                        <button type=\"button\" class=\"alert-close\" onclick=\"this.closest('div').style.display='none'\">&times;</button>

                        {{ message|trans|raw }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    {% endif %}
{% endif %}
", "@EasyAdmin/flash_messages.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/flash_messages.html.twig");
    }
}
