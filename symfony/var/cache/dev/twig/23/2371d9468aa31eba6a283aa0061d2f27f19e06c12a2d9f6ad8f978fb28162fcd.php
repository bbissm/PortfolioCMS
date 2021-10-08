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

/* chunks/_footer.html.twig */
class __TwigTemplate_c6a8dab810dc702346d4bcf9d64bcc51db2864ec8f12b17edc1f9662e5071e39 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chunks/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chunks/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Bulma</strong> by <a href=\"https://jgthms.com\">Jeremy Thomas</a>. The source code is licensed
            <a href=\"http://opensource.org/licenses/mit-license.php\">MIT</a>. The website content
            is licensed <a href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">CC BY NC SA 4.0</a>.
        </p>
    </div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chunks/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Bulma</strong> by <a href=\"https://jgthms.com\">Jeremy Thomas</a>. The source code is licensed
            <a href=\"http://opensource.org/licenses/mit-license.php\">MIT</a>. The website content
            is licensed <a href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">CC BY NC SA 4.0</a>.
        </p>
    </div>
</footer>
", "chunks/_footer.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/chunks/_footer.html.twig");
    }
}
