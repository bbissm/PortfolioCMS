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
class __TwigTemplate_a917316d3019068a16d23be9e855ce0f73db3f0c445cebe2ac84c1e0c621a9bb extends Template
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
        echo "<nav class=\"navbar\" id=\"nav\">
    <div class=\"container\">
        <div id=\"navMenu\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a href=\"/\" class=\"navbar-item\">
                    Martin Bissiger
                </a>

            </div>
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <a onclick=\"scrollToEl(0)\" class=\"navbar-item\">
                        Home
                    </a>
                    <a href=\"#about\" class=\"navbar-item\">
                        About
                    </a>
                    <a href=\"#hobby\" class=\"navbar-item\">
                        Hobbies
                    </a>
                    <a href=\"#work\" class=\"navbar-item\">
                        Work
                    </a>
                    <a href=\"#work\" class=\"navbar-item\">
                        Contact
                    </a>
                </div>
                <div class=\"navbar-item\">
                    ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/logout\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Logout</span>
                            </a>
                        </p>
                    ";
        } else {
            // line 39
            echo "                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/login\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Login</span>
                            </a>
                        </p>
                    ";
        }
        // line 48
        echo "                </div>

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
        return array (  97 => 48,  86 => 39,  75 => 30,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\" id=\"nav\">
    <div class=\"container\">
        <div id=\"navMenu\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a href=\"/\" class=\"navbar-item\">
                    Martin Bissiger
                </a>

            </div>
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <a onclick=\"scrollToEl(0)\" class=\"navbar-item\">
                        Home
                    </a>
                    <a href=\"#about\" class=\"navbar-item\">
                        About
                    </a>
                    <a href=\"#hobby\" class=\"navbar-item\">
                        Hobbies
                    </a>
                    <a href=\"#work\" class=\"navbar-item\">
                        Work
                    </a>
                    <a href=\"#work\" class=\"navbar-item\">
                        Contact
                    </a>
                </div>
                <div class=\"navbar-item\">
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/logout\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Logout</span>
                            </a>
                        </p>
                    {% else %}
                        <p class=\"control\">
                            <a class=\"button is-success\" href=\"/login\">
                              <span class=\"icon\">
                                <i class=\"fas fa-sign-in-alt\"></i>
                              </span>
                                <span>Login</span>
                            </a>
                        </p>
                    {% endif %}
                </div>

            </div>
        </div>
    </div>
</nav>

", "chunks/_header.html.twig", "/shared/httpd/portfolio/symfony/templates/chunks/_header.html.twig");
    }
}
