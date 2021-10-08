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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_00e955b983e8c92450a71ceef66be24a476948b18e4978ecd8aece5b7be48c40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('time_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('file_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('form_row', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('collection_row', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_label', $context, $blocks);
        // line 295
        echo "
";
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 303
        echo "
";
        // line 304
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 348
        echo "
";
        // line 349
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 353
        echo "
";
        // line 354
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 412
        echo "
";
        // line 414
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 454
        echo "
";
        // line 455
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 509
        echo "
";
        // line 511
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 514
        echo "
";
        // line 515
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 519
        echo "
";
        // line 521
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 538
        echo "
";
        // line 540
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 558
        echo "
";
        // line 560
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 563
        echo "
";
        // line 564
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 576
        echo "
";
        // line 578
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 626
        echo "
";
        // line 627
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 643
        echo "
";
        // line 644
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 647
        echo "
";
        // line 648
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 710
        echo "
";
        // line 711
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 778
        echo "
";
        // line 779
        $this->displayBlock('ea_slug_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 5
        echo "    ";
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)), 0)) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <div class=\"row\"> ";
        // line 12
        echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "referrer"], "method", false, false, false, 12), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        // line 16
        echo "            ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new RuntimeError('Variable "render_rest" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
            echo "
            ";
        }
        // line 19
        echo "        </div> ";
        // line 20
        echo "    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 24
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 24, $this->source); })())), 0))) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 34
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })()), [0 => "file", 1 => "hidden"]))) {
            // line 35
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "range")) || (0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "color"))))) {
            // line 38
            echo "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        // line 46
        echo "    ";
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 51
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 52
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 56
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 57
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 58
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 62
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter((isset($context["vich"]) || array_key_exists("vich", $context) ? $context["vich"] : (function () { throw new RuntimeError('Variable "vich" does not exist.', 62, $this->source); })()), false)) : (false))) {
            // line 63
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 63, $this->source); })()), "file")) : ("file"));
            // line 64
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 73
        echo "    ";
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 73, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 74
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 74), "")) : ("")) . " form-group")]);
        // line 76
        echo "
    <div class=\"";
        // line 77
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 78
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 78, $this->source); })())];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'label');
        // line 80
        echo "<div class=\"form-widget\">
                ";
        // line 81
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", false, false, false, 81), null)) : (null)));
        // line 82
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", false, false, false, 82), null)) : (null)));
        // line 83
        echo "                ";
        $context["has_input_groups"] = ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 83, $this->source); })()) || (isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 83, $this->source); })()));
        // line 84
        echo "
                ";
        // line 85
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 85, $this->source); })())) {
            echo "<div class=\"input-group\">";
        }
        // line 86
        echo "                    ";
        if ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 86, $this->source); })())) {
            // line 87
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 88, $this->source); })()), "field", [], "any", false, false, false, 88), "prepend_html", [], "any", false, false, false, 88);
            echo "</span>
                        </div>
                    ";
        }
        // line 91
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'widget');
        echo "

                    ";
        // line 94
        if ((isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 94, $this->source); })())) {
            // line 95
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 95, $this->source); })()), "field", [], "any", false, false, false, 95), "append_html", [], "any", false, false, false, 95);
            echo "</span>
                    ";
        }
        // line 97
        echo "                    ";
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 97, $this->source); })())) {
            echo "</div>";
        }
        // line 98
        echo "
                ";
        // line 99
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 104
        echo "                ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", false, false, false, 104), false)) : (false)), (isset($context["nullable_fields_fqcn"]) || array_key_exists("nullable_fields_fqcn", $context) ? $context["nullable_fields_fqcn"] : (function () { throw new RuntimeError('Variable "nullable_fields_fqcn" does not exist.', 104, $this->source); })())) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", false, false, false, 104), false)) : (false)))) {
            // line 105
            echo "                    <div class=\"nullable-control\">
                        <label>
                            <input type=\"checkbox\" ";
            // line 107
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 112
        echo "
                ";
        // line 113
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", true, true, false, 113) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)) : (false))) {
            // line 114
            echo "                    <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 114, $this->source); })()), "field", [], "any", false, false, false, 114), "help", [], "any", false, false, false, 114);
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", true, true, false, 115) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)) : (false))) {
            // line 116
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "help", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "help_translation_parameters", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "translation_domain", [], "any", false, false, false, 116));
            echo "</small>
                ";
        }
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'errors');
        // line 120
        echo "</div>
        </div>
    </div>

    ";
        // line 125
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", false, false, false, 125), null)) : (null)))) {
            // line 126
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 131
        echo "    ";
        if ((0 === twig_compare("ea-autocomplete", ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", false, false, false, 131), false)) : (false))))) {
            // line 132
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 132, $this->source); })()), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 137
            echo "    ";
        }
        // line 138
        echo "
    ";
        // line 139
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 143
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 143, $this->source); })()), "rendered", [], "any", false, false, false, 143))) {
            // line 144
            echo "        ";
            $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 144, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 144, $this->source); })()), 'row')]);
            // line 145
            echo "    ";
        }
        // line 146
        echo "
    ";
        // line 147
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 147, $this->source); })()), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "vars", [], "any", false, false, false, 149), "ea_crud_form", [], "any", false, false, false, 149), "ea_field", [], "any", false, false, false, 149) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "vars", [], "any", false, false, false, 149), "ea_crud_form", [], "any", false, false, false, 149), "ea_field", [], "any", false, false, false, 149), "customOptions", [], "any", false, false, false, 149), "get", [0 => "entryIsComplex"], "method", false, false, false, 149))) ? ("true") : ("false")), "data-allow-add" => ((        // line 150
(isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 150, $this->source); })())) ? ("true") : ("false")), "data-allow-delete" => ((        // line 151
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 151, $this->source); })())) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 152
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "children", [], "any", false, false, false, 152))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "children", [], "any", false, false, false, 152))))), "data-form-type-name-placeholder" => ((        // line 153
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153)) : (""))]);
        // line 155
        echo "
    ";
        // line 156
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 160
        echo "    ";
        // line 162
        echo "    ";
        $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 162, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 162, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 162, $this->source); })()))));
        // line 163
        echo "    ";
        $context["is_array_field"] = (0 === twig_compare("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", true, true, false, 163) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", false, false, false, 163)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", false, false, false, 163)) : (false))));
        // line 164
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 166
        if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 166, $this->source); })())) {
            // line 167
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 168
(isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 168, $this->source); })())) {
            // line 169
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 171
            echo "            <div class=\"accordion\">
                ";
            // line 172
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 175
        echo "    </div>

    ";
        // line 177
        if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 177, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 177), "prototype", [], "any", true, true, false, 177))) {
            // line 178
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 178, $this->source); })()), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 179
            echo "    ";
        }
        // line 180
        echo "
    ";
        // line 181
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 181, $this->source); })()), false)) : (false))) {
            // line 182
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_widget"));

        // line 190
        echo "    ";
        $context["is_array_field"] = (0 === twig_compare("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })())), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", true, true, false, 190) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })())), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", false, false, false, 190)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })())), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", false, false, false, 190)) : (false))));
        // line 191
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })())), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", true, true, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })())), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", false, false, false, 191)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })())), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", false, false, false, 191)) : (false));
        // line 192
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })())), "vars", [], "any", false, true, false, 192), "allow_delete", [], "any", true, true, false, 192)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })())), "vars", [], "any", false, true, false, 192), "allow_delete", [], "any", false, false, false, 192), false)) : (false));
        // line 193
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", true, true, false, 193) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", false, false, false, 193)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })())), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", false, false, false, 193)) : (false));
        // line 194
        echo "    ";
        ob_start();
        // line 195
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        echo "
    <div class=\"field-collection-item ";
        // line 201
        echo (((isset($context["is_complex"]) || array_key_exists("is_complex", $context) ? $context["is_complex"] : (function () { throw new RuntimeError('Variable "is_complex" does not exist.', 201, $this->source); })())) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 202
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter((isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 202, $this->source); })()), false)) : (false))) {
            // line 203
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), 'widget');
            echo "
            ";
            // line 204
            if ((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 204, $this->source); })())) {
                // line 205
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 205, $this->source); })()), "html", null, true);
                echo "
            ";
            }
            // line 207
            echo "        ";
        } else {
            // line 208
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 210
            echo (((isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 210, $this->source); })())) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 210, $this->source); })()), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 212, $this->source); })())), "html", null, true);
            echo "
                    </button>

                    ";
            // line 215
            if ((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 215, $this->source); })())) {
                // line 216
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 216, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 218
            echo "                </h2>
                <div id=\"";
            // line 219
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 219, $this->source); })()), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo (((isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 219, $this->source); })())) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 226
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 230
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 231
        if (twig_in_filter("collection", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 231, $this->source); })()))) {
            // line 232
            echo "            ";
            // line 234
            echo "            ";
            $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 234, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 234, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 234, $this->source); })()))));
            // line 235
            echo "            ";
            if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 235, $this->source); })())) {
                // line 236
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 238
            echo "            ";
            if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 238, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 238), "prototype", [], "any", true, true, false, 238))) {
                // line 239
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 239, $this->source); })()), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 240
                echo "            ";
            }
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        ";
        // line 243
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 248, $this->source); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 248), "css_class", [], "any", true, true, false, 248)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 248), "css_class", [], "any", false, false, false, 248), "")) : ("")), "html", null, true);
        echo "\">";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 256
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 256, $this->source); })()) === false)) {
            // line 257
            echo "<label>";
            echo "</label>";
        } else {
            // line 259
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 259, $this->source); })()))) {
                // line 260
                $context["element"] = "legend";
                // line 261
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 261, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 261), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 263
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 263, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 263, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 263), "")) : ("")) . " form-control-label"))]);
            }
            // line 265
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 265, $this->source); })())) {
                // line 266
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 266, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 266)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 266), "")) : ("")) . " required"))]);
            }
            // line 268
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 268, $this->source); })()))) {
                // line 269
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 269, $this->source); })()))) {
                    // line 270
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 270, $this->source); })()), ["%name%" =>                     // line 271
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 271, $this->source); })()), "%id%" =>                     // line 272
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 272, $this->source); })())]);
                } else {
                    // line 275
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 275, $this->source); })()));
                }
            }
            // line 278
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 278, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 278, $this->source); })())) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 278, $this->source); })())];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 278, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            // line 279
            if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 279, $this->source); })()) === false)) {
                // line 280
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 280, $this->source); })()), false)) : (false)) === false)) {
                    // line 281
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 281, $this->source); })()), "html", null, true);
                } else {
                    // line 283
                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 283, $this->source); })());
                }
            } else {
                // line 286
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 286, $this->source); })()), false)) : (false)) === false)) {
                    // line 287
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 287, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 287, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 287, $this->source); })())), "html", null, true);
                } else {
                    // line 289
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 289, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 289, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 289, $this->source); })()));
                }
            }
            // line 292
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 292, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 298
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 299
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 300
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 300, $this->source); })()), "templatePath", [0 => "label/empty"], "method", false, false, false, 300));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 304
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 305
        echo "    ";
        $context["force_error"] = true;
        // line 306
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 310
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 311
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 311, $this->source); })()), "")) : ("")))) {
            // line 312
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 312, $this->source); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 312, $this->source); })()), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 313
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 313, $this->source); })()), "."));
            // line 314
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 321
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 321, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 321, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 321, $this->source); })()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 322
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 322, $this->source); })()), [], "array", true, true, false, 322) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 322, $this->source); })()), [], "array", false, false, false, 322)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 322, $this->source); })()), [], "array", false, false, false, 322), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 323
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new RuntimeError('Variable "download_title" does not exist.', 323, $this->source); })()), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 326
        echo "
        ";
        // line 327
        ob_start();
        // line 328
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "file", [], "any", false, false, false, 328), "vars", [], "any", false, false, false, 328), "id", [], "any", false, false, false, 328), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "file", [], "any", false, false, false, 331), "vars", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 333
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 336
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "file", [], "any", false, false, false, 338), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 338, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 341
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 341)) {
            // line 342
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "delete", [], "any", false, false, false, 342), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 344
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "file", [], "any", false, false, false, 345), "vars", [], "any", false, false, false, 345), "id", [], "any", false, false, false, 345), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 350
        echo "    ";
        $context["force_error"] = true;
        // line 351
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 354
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 355
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 355), "formTypeOptions", [], "any", true, true, false, 355)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 355), "formTypeOptions", [], "any", false, false, false, 355), "")) : (""));
        // line 356
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 357
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 357, $this->source); })()), "")) : ("")))) {
            // line 358
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 358, $this->source); })()), "")) : ("")))) {
                // line 359
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 360
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 360) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 360, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 360)))) {
                    // line 361
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 361, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 361, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 361, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 361, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 361)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 363
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 363, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 363, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 363, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 365
                echo "                </div>
            ";
            } else {
                // line 367
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 367, $this->source); })()));
                // line 368
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 369
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 369, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 370
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 370) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 370, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 370)))) {
                    // line 371
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 371, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 371, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 371, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 371, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 371)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 373
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 373, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 373, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 373, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 375
                echo "                </a>

                <div id=\"";
                // line 377
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 377, $this->source); })()), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 378
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 378) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 378, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 378)))) {
                    // line 379
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 379, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 379, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 379, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 379, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 379)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 381
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 381, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 381, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 381, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 383
                echo "                </div>
            ";
            }
            // line 385
            echo "        ";
        }
        // line 386
        echo "
        ";
        // line 387
        ob_start();
        // line 388
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "file", [], "any", false, false, false, 388), "vars", [], "any", false, false, false, 388), "id", [], "any", false, false, false, 388), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "file", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 393
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 396
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "file", [], "any", false, false, false, 398), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 398, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 401
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 401)) {
            // line 402
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "delete", [], "any", false, false, false, 402), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 404
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 405
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "file", [], "any", false, false, false, 405), "vars", [], "any", false, false, false, 405), "id", [], "any", false, false, false, 405), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 409
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        // line 410
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 414
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        // line 415
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 415, $this->source); })()), "form_tabs", [], "any", false, false, false, 415)), 0))) {
            // line 416
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ea_form_tabs"]) || array_key_exists("ea_form_tabs", $context) ? $context["ea_form_tabs"] : (function () { throw new RuntimeError('Variable "ea_form_tabs" does not exist.', 419, $this->source); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 420
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 421
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 421)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 421), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 421), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 422
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 422)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 422), false)) : (false))) {
                    // line 423
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 423), "html", null, true);
                    echo "\"></i>";
                }
                // line 425
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "label", [], "array", false, false, false, 425), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 425, $this->source); })()), "i18n", [], "any", false, false, false, 425), "translationDomain", [], "any", false, false, false, 425)), "html", null, true);
                // line 426
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 426), 0))) {
                    // line 427
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 427)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 428
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 428), "html", null, true);
                    // line 429
                    echo "</span>";
                }
                // line 431
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ea_form_tabs"]) || array_key_exists("ea_form_tabs", $context) ? $context["ea_form_tabs"] : (function () { throw new RuntimeError('Variable "ea_form_tabs" does not exist.', 436, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 437
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 437), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 437)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", false, false, false, 437), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 438
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 438)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 438), false)) : (false))) {
                    // line 439
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 440
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 440), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 440, $this->source); })()), "i18n", [], "any", false, false, false, 440), "translationDomain", [], "any", false, false, false, 440));
                    echo "
                                </div>
                            ";
                }
                // line 443
                echo "
                            ";
                // line 444
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 451
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 455
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        // line 456
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 456, $this->source); })()), "form_panels", [], "any", false, false, false, 456), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 456) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 456), (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 456, $this->source); })())))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 457
            echo "        ";
            $context["panel_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 457), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 457), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 457), false)) : (false)));
            // line 458
            echo "
        ";
            // line 459
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 459);
            // line 460
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 460);
            // line 461
            echo "
        <div class=\"";
            // line 462
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 462) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 462)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 462), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"form-panel\">
                ";
            // line 464
            if ((isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 464, $this->source); })())) {
                // line 465
                echo "                    <div class=\"form-panel-header ";
                echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 465, $this->source); })())) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 465)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 465), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-panel-title\">
                            <a ";
                // line 467
                if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 467, $this->source); })())) {
                    // line 468
                    echo "                                    href=\"#\" class=\"not-collapsible\"
                               ";
                } else {
                    // line 470
                    echo "                                    href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse ";
                    // line 471
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 471, $this->source); })())) ? ("collapsed") : (""));
                    echo "\"
                                    aria-expanded=\"";
                    // line 472
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 472, $this->source); })())) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\"
                               ";
                }
                // line 474
                echo "                            >
                                ";
                // line 475
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 475, $this->source); })())) {
                    // line 476
                    echo "                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                ";
                }
                // line 478
                echo "
                                ";
                // line 479
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 479)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 479), false)) : (false))) {
                    // line 480
                    echo "                                    <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 480), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 482
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 482);
                echo "
                            </a>

                            ";
                // line 485
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 485)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 485), false)) : (false))) {
                    // line 486
                    echo "                                <div class=\"form-panel-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 486);
                    echo "</div>
                            ";
                }
                // line 488
                echo "                        </div>
                    </div>
                ";
            }
            // line 491
            echo "
                <div id=\"content-";
            // line 492
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"form-panel-body ";
            echo (( !(isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 492, $this->source); })())) ? ("without-header") : (""));
            echo " ";
            echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 492, $this->source); })())) ? ("collapse") : (""));
            echo " ";
            echo (( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 492, $this->source); })())) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 494
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 494), "block_prefixes", [], "any", false, false, false, 494)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 494), "ea_crud_form", [], "any", false, false, false, 494), "form_panel", [], "any", false, false, false, 494), $context["panel_name"]))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 495
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 495), "ea_crud_form", [], "any", false, false, false, 495), "form_tab", [], "any", false, false, false, 495) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 495), "ea_crud_form", [], "any", false, false, false, 495), "form_tab", [], "any", false, false, false, 495), (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 495, $this->source); })()))))) {
                    // line 496
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 498
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 499
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 504
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 504), "block_prefixes", [], "any", false, false, false, 504)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 504), "ea_crud_form", [], "any", false, false, false, 504), "form_tab", [], "any", false, false, false, 504) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 504), "ea_crud_form", [], "any", false, false, false, 504), "form_tab", [], "any", false, false, false, 504), (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 504, $this->source); })()))))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 505
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 507
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 511
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        // line 512
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "autocomplete", [], "any", false, false, false, 512), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 512, $this->source); })()), ["required" => (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 512, $this->source); })())])]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 515
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        // line 516
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })())), "vars", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516);
        // line 517
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 521
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        // line 522
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 522, $this->source); })()), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 524
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 524, $this->source); })()), "vars", [], "any", false, false, false, 524), "ea_crud_form", [], "any", false, false, false, 524), "ea_field", [], "any", false, false, false, 524), "customOptions", [], "any", false, false, false, 524), "get", [0 => "language"], "method", false, false, false, 524), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 525
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), "vars", [], "any", false, false, false, 525), "ea_crud_form", [], "any", false, false, false, 525), "ea_field", [], "any", false, false, false, 525), "customOptions", [], "any", false, false, false, 525), "get", [0 => "tabSize"], "method", false, false, false, 525), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 526
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), "vars", [], "any", false, false, false, 526), "ea_crud_form", [], "any", false, false, false, 526), "ea_field", [], "any", false, false, false, 526), "customOptions", [], "any", false, false, false, 526), "get", [0 => "indentWithTabs"], "method", false, false, false, 526)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 527
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "vars", [], "any", false, false, false, 527), "ea_crud_form", [], "any", false, false, false, 527), "ea_field", [], "any", false, false, false, 527), "customOptions", [], "any", false, false, false, 527), "get", [0 => "showLineNumbers"], "method", false, false, false, 527)) ? ("true") : ("false"))])]);
        // line 528
        echo "

    ";
        // line 530
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), "vars", [], "any", false, false, false, 530), "ea_crud_form", [], "any", false, false, false, 530), "ea_field", [], "any", false, false, false, 530), "customOptions", [], "any", false, false, false, 530), "get", [0 => "numOfRows"], "method", false, false, false, 530);
        // line 531
        echo "    ";
        if ( !(null === (isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 531, $this->source); })()))) {
            // line 532
            echo "        <style type=\"text/css\">
            ";
            // line 534
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 534, $this->source); })()), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * (isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 534, $this->source); })()))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 540
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        // line 541
        echo "    ";
        $context["numOfRows"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_crud_form", [], "any", false, true, false, 541), "ea_field", [], "any", false, true, false, 541), "customOptions", [], "any", false, true, false, 541), "get", [0 => "numOfRows"], "method", true, true, false, 541)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_crud_form", [], "any", false, true, false, 541), "ea_field", [], "any", false, true, false, 541), "customOptions", [], "any", false, true, false, 541), "get", [0 => "numOfRows"], "method", false, false, false, 541), 5)) : (5));
        // line 542
        echo "
    ";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 543, $this->source); })()), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 546
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 546, $this->source); })()), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 549
        if ((isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 549, $this->source); })())) {
            // line 550
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 551
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 551, $this->source); })()), "html", null, true);
            echo "].trix-content {
                ";
            // line 553
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round(((isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 553, $this->source); })()) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 560
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        // line 561
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "vars", [], "any", false, false, false, 561), "row_attr", [], "any", false, false, false, 561), "class", [], "any", false, false, false, 561), "html", null, true);
        echo "\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 564
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        // line 565
        echo "    <div class=\"form-section ";
        echo ((((0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "icon", [], "any", true, true, false, 565)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "icon", [], "any", false, false, false, 565), false)) : (false)), false)) && (0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "label", [], "any", true, true, false, 565)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "label", [], "any", false, false, false, 565), false)) : (false)), false)))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "css_class", [], "any", true, true, false, 565)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "css_class", [], "any", false, false, false, 565), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 567
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "icon", [], "any", true, true, false, 567)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "icon", [], "any", false, false, false, 567), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 567, $this->source); })()), "field", [], "any", false, false, false, 567), "icon", [], "any", false, false, false, 567), "html", null, true);
            echo "\"></i>";
        }
        // line 568
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 568), "label", [], "any", true, true, false, 568)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 568), "label", [], "any", false, false, false, 568), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 568), "label", [], "any", true, true, false, 568)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 568), "label", [], "any", false, false, false, 568), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 568, $this->source); })()), "i18n", [], "any", false, false, false, 568), "translationDomain", [], "any", false, false, false, 568));
        }
        echo "</span>
        </h2>

        ";
        // line 571
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 571), "help", [], "any", true, true, false, 571)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 571), "help", [], "any", false, false, false, 571), false)) : (false))) {
            // line 572
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 572, $this->source); })()), "field", [], "any", false, false, false, 572), "help", [], "any", false, false, false, 572), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 572, $this->source); })()), "i18n", [], "any", false, false, false, 572), "translationDomain", [], "any", false, false, false, 572));
            echo "</p>
        ";
        }
        // line 574
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 578
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        // line 579
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 579), "query", [], "any", false, true, false, 579), "get", [0 => "filters"], "method", true, true, false, 579)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 579), "query", [], "any", false, true, false, 579), "get", [0 => "filters"], "method", false, false, false, 579), [])) : ([])));
        // line 580
        echo "
    ";
        // line 581
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 581, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 582
            echo "        <div class=\"col-12\">
            <div class=\"filter-field ";
            // line 583
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 583)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 583)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 583), "name", [], "any", false, false, false, 583), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 584), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 585
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 585), "name", [], "any", false, false, false, 585), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 585, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 586
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 586), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 586), "name", [], "any", false, false, false, 586), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 586, $this->source); })()))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 586), "html", null, true);
            echo "\"
                        ";
            // line 587
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 587), "label_attr", [], "any", true, true, false, 587)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 587), "label_attr", [], "any", false, false, false, 587), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 588
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 588), "label", [], "any", true, true, false, 588)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 588), "label", [], "any", false, false, false, 588), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 588), "name", [], "any", false, false, false, 588)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 588), "name", [], "any", false, false, false, 588)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 588, $this->source); })()), "i18n", [], "any", false, false, false, 588), "translationDomain", [], "any", false, false, false, 588)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 591
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 591), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 591), "name", [], "any", false, false, false, 591), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 591, $this->source); })()))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 591), "html", null, true);
            echo "\">
                    <div class=\"form-widget my-2\">
                        ";
            // line 593
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#";
        // line 614
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "vars", [], "any", false, false, false, 614), "id", [], "any", false, false, false, 614), "html", null, true);
        echo "').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 627
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        // line 628
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 629
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 629, $this->source); })()), "comparison", [], "any", false, false, false, 629), 'row');
        echo "
        ";
        // line 630
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "value", [], "any", false, false, false, 630), 'row');
        echo "
        <div id=\"wrapper_";
        // line 631
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "value2", [], "any", false, false, false, 631), "vars", [], "any", false, false, false, 631), "id", [], "any", false, false, false, 631), "html", null, true);
        echo "\" ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "comparison", [], "any", false, false, false, 631), "vars", [], "any", false, false, false, 631), "value", [], "any", false, false, false, 631), "between"))) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 632, $this->source); })()), "value2", [], "any", false, false, false, 632), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 635
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), "comparison", [], "any", false, false, false, 635), "vars", [], "any", false, false, false, 635), "id", [], "any", false, false, false, 635), "html", null, true);
        echo "').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_";
        // line 636
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 636, $this->source); })()), "value2", [], "any", false, false, false, 636), "vars", [], "any", false, false, false, 636), "id", [], "any", false, false, false, 636), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 641
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), 'errors');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 644
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        // line 645
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 648
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        // line 649
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 651
        $context["placeholder"] = "";
        // line 652
        echo "            ";
        $context["title"] = "";
        // line 653
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 654
        echo "            ";
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 654, $this->source); })())) {
            // line 655
            echo "                ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 655, $this->source); })())) {
                // line 656
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 656, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 656, $this->source); })()));
                // line 657
                echo "                ";
            } else {
                // line 658
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 658, $this->source); })())), "filename", [], "any", false, false, false, 658);
                // line 659
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 659, $this->source); })())), "mTime", [], "any", false, false, false, 659));
                // line 660
                echo "                ";
            }
            // line 661
            echo "            ";
        }
        // line 662
        echo "            <div class=\"custom-file\">
                ";
        // line 663
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 663, $this->source); })()), "file", [], "any", false, false, false, 663), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 663, $this->source); })()), "file", [], "any", false, false, false, 663), "vars", [], "any", false, false, false, 663), "attr", [], "any", false, false, false, 663), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 663, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 663, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 663, $this->source); })()), "style" => "display: none"])]);
        echo "
                ";
        // line 664
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 664, $this->source); })()), "file", [], "any", false, false, false, 664), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 664, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 667
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 667, $this->source); })())) {
            // line 668
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 668, $this->source); })())) {
                // line 669
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 669, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 669, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 669, $this->source); })()), "size", [], "any", false, false, false, 669)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 671
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 671, $this->source); })())), "size", [], "any", false, false, false, 671)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 674
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 674, $this->source); })())) {
            // line 675
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 675, $this->source); })()))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 675, $this->source); })()), "delete", [], "any", false, false, false, 675), "vars", [], "any", false, false, false, 675), "id", [], "any", false, false, false, 675), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 679
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 679, $this->source); })()), "file", [], "any", false, false, false, 679), "vars", [], "any", false, false, false, 679), "id", [], "any", false, false, false, 679), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 684
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 684, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 684, $this->source); })()))) {
            // line 685
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 688
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 688, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 689
                echo "                        <tr>
                            <td>
                                ";
                // line 691
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 691, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 691, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 691))), "html", null, true);
                    echo "\">";
                }
                // line 692
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 692)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 693
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 693), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 695
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 695, $this->source); })())) {
                    echo "</a>";
                }
                // line 696
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 697
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 697)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 700
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 704
        echo "        ";
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 704, $this->source); })())) {
            // line 705
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 705, $this->source); })()), "delete", [], "any", false, false, false, 705), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 707
        echo "    </div>
    ";
        // line 708
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 708, $this->source); })()), "file", [], "any", false, false, false, 708), 'errors');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 711
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        // line 712
        echo "    ";
        $context["placeholder"] = "";
        // line 713
        echo "    ";
        $context["title"] = "";
        // line 714
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 715
        echo "    ";
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 715, $this->source); })())) {
            // line 716
            echo "        ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 716, $this->source); })())) {
                // line 717
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 717, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 717, $this->source); })()));
                // line 718
                echo "        ";
            } else {
                // line 719
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 719, $this->source); })())), "filename", [], "any", false, false, false, 719);
                // line 720
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 720, $this->source); })())), "mTime", [], "any", false, false, false, 720));
                // line 721
                echo "        ";
            }
            // line 722
            echo "    ";
        }
        // line 723
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "file", [], "any", false, false, false, 726), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "file", [], "any", false, false, false, 726), "vars", [], "any", false, false, false, 726), "attr", [], "any", false, false, false, 726), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 726, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 726, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 726, $this->source); })()), "class" => "form-control"])]);
        echo "

            ";
        // line 728
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 728, $this->source); })())) {
            // line 729
            echo "                <span class=\"input-group-text\">
                    ";
            // line 730
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 730, $this->source); })())) {
                // line 731
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 731, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 731, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 731, $this->source); })()), "size", [], "any", false, false, false, 731)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 733
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 733, $this->source); })())), "size", [], "any", false, false, false, 733)), "html", null, true);
                echo "
                    ";
            }
            // line 735
            echo "                </span>
            ";
        }
        // line 737
        echo "
            ";
        // line 738
        if (((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 738, $this->source); })()) && (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 738, $this->source); })()))) {
            // line 739
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 743
        echo "
            ";
        // line 744
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 744, $this->source); })())) {
            // line 745
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 749
        echo "        </div>

        ";
        // line 751
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 751, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 751, $this->source); })()))) {
            // line 752
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 755
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 755, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 756
                echo "                        <tr>
                            <td>
                                ";
                // line 758
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 758, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 758, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 758))), "html", null, true);
                    echo "\">";
                }
                // line 759
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 759)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 760
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 760), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 762
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 762, $this->source); })())) {
                    echo "</a>";
                }
                // line 763
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 764
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 764)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 767
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 771
        echo "        ";
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 771, $this->source); })())) {
            // line 772
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 772, $this->source); })()), "delete", [], "any", false, false, false, 772), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 774
        echo "    </div>

    ";
        // line 776
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 776, $this->source); })()), "file", [], "any", false, false, false, 776), 'errors');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 779
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        // line 780
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 780, $this->source); })()), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 782
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "parent", [], "any", false, false, false, 782), "children", [], "any", false, false, false, 782), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 782, $this->source); })()), [], "array", false, false, false, 782), "vars", [], "any", false, false, false, 782), "id", [], "any", false, false, false, 782)]);
        // line 784
        echo "
    <div class=\"input-group\">
        ";
        // line 786
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2642 => 786,  2638 => 784,  2636 => 782,  2634 => 780,  2624 => 779,  2612 => 776,  2608 => 774,  2602 => 772,  2599 => 771,  2593 => 767,  2584 => 764,  2581 => 763,  2577 => 762,  2572 => 760,  2567 => 759,  2561 => 758,  2557 => 756,  2553 => 755,  2548 => 752,  2546 => 751,  2542 => 749,  2536 => 745,  2534 => 744,  2531 => 743,  2525 => 739,  2523 => 738,  2520 => 737,  2516 => 735,  2510 => 733,  2504 => 731,  2502 => 730,  2499 => 729,  2497 => 728,  2492 => 726,  2487 => 723,  2484 => 722,  2481 => 721,  2478 => 720,  2475 => 719,  2472 => 718,  2469 => 717,  2466 => 716,  2463 => 715,  2460 => 714,  2457 => 713,  2454 => 712,  2444 => 711,  2432 => 708,  2429 => 707,  2423 => 705,  2420 => 704,  2414 => 700,  2405 => 697,  2402 => 696,  2398 => 695,  2393 => 693,  2388 => 692,  2382 => 691,  2378 => 689,  2374 => 688,  2369 => 685,  2367 => 684,  2358 => 679,  2346 => 675,  2344 => 674,  2337 => 671,  2331 => 669,  2329 => 668,  2327 => 667,  2322 => 664,  2318 => 663,  2315 => 662,  2312 => 661,  2309 => 660,  2306 => 659,  2303 => 658,  2300 => 657,  2297 => 656,  2294 => 655,  2291 => 654,  2288 => 653,  2285 => 652,  2283 => 651,  2279 => 649,  2269 => 648,  2256 => 645,  2246 => 644,  2236 => 641,  2229 => 636,  2225 => 635,  2219 => 632,  2211 => 631,  2207 => 630,  2203 => 629,  2200 => 628,  2190 => 627,  2168 => 614,  2151 => 599,  2131 => 593,  2120 => 591,  2114 => 588,  2100 => 587,  2092 => 586,  2086 => 585,  2082 => 584,  2070 => 583,  2067 => 582,  2050 => 581,  2047 => 580,  2044 => 579,  2034 => 578,  2023 => 574,  2017 => 572,  2015 => 571,  2006 => 568,  2000 => 567,  1992 => 565,  1982 => 564,  1969 => 561,  1959 => 560,  1943 => 553,  1939 => 551,  1936 => 550,  1934 => 549,  1928 => 546,  1922 => 543,  1919 => 542,  1916 => 541,  1906 => 540,  1889 => 534,  1886 => 532,  1883 => 531,  1881 => 530,  1877 => 528,  1875 => 527,  1874 => 526,  1873 => 525,  1872 => 524,  1870 => 522,  1860 => 521,  1847 => 517,  1844 => 516,  1834 => 515,  1821 => 512,  1811 => 511,  1797 => 507,  1788 => 505,  1783 => 504,  1774 => 499,  1768 => 498,  1762 => 496,  1759 => 495,  1755 => 494,  1744 => 492,  1741 => 491,  1736 => 488,  1730 => 486,  1728 => 485,  1721 => 482,  1715 => 480,  1713 => 479,  1710 => 478,  1706 => 476,  1704 => 475,  1701 => 474,  1694 => 472,  1690 => 471,  1685 => 470,  1681 => 468,  1679 => 467,  1671 => 465,  1669 => 464,  1664 => 462,  1661 => 461,  1658 => 460,  1656 => 459,  1653 => 458,  1650 => 457,  1644 => 456,  1634 => 455,  1620 => 451,  1614 => 447,  1597 => 444,  1594 => 443,  1588 => 440,  1585 => 439,  1583 => 438,  1572 => 437,  1555 => 436,  1551 => 434,  1543 => 431,  1540 => 429,  1538 => 428,  1534 => 427,  1532 => 426,  1530 => 425,  1525 => 423,  1523 => 422,  1514 => 421,  1511 => 420,  1507 => 419,  1502 => 416,  1499 => 415,  1489 => 414,  1476 => 410,  1466 => 409,  1453 => 405,  1450 => 404,  1444 => 402,  1442 => 401,  1436 => 398,  1432 => 397,  1429 => 396,  1425 => 393,  1420 => 391,  1413 => 388,  1411 => 387,  1408 => 386,  1405 => 385,  1401 => 383,  1395 => 381,  1389 => 379,  1387 => 378,  1383 => 377,  1379 => 375,  1373 => 373,  1367 => 371,  1365 => 370,  1361 => 369,  1358 => 368,  1355 => 367,  1351 => 365,  1345 => 363,  1339 => 361,  1337 => 360,  1334 => 359,  1331 => 358,  1329 => 357,  1326 => 356,  1323 => 355,  1313 => 354,  1300 => 351,  1297 => 350,  1287 => 349,  1274 => 345,  1271 => 344,  1265 => 342,  1263 => 341,  1257 => 338,  1253 => 337,  1250 => 336,  1246 => 333,  1241 => 331,  1234 => 328,  1232 => 327,  1229 => 326,  1223 => 323,  1219 => 322,  1214 => 321,  1211 => 314,  1208 => 313,  1205 => 312,  1203 => 311,  1200 => 310,  1190 => 309,  1177 => 306,  1174 => 305,  1164 => 304,  1151 => 300,  1148 => 299,  1138 => 298,  1125 => 292,  1121 => 289,  1118 => 287,  1116 => 286,  1112 => 283,  1109 => 281,  1107 => 280,  1105 => 279,  1090 => 278,  1086 => 275,  1083 => 272,  1082 => 271,  1081 => 270,  1079 => 269,  1077 => 268,  1074 => 266,  1072 => 265,  1069 => 263,  1066 => 261,  1064 => 260,  1062 => 259,  1058 => 257,  1056 => 256,  1046 => 255,  1036 => 250,  1034 => 249,  1028 => 248,  1018 => 247,  1005 => 243,  1002 => 242,  999 => 241,  996 => 240,  993 => 239,  990 => 238,  984 => 236,  981 => 235,  978 => 234,  976 => 232,  974 => 231,  971 => 230,  961 => 229,  950 => 226,  942 => 221,  935 => 219,  932 => 218,  926 => 216,  924 => 215,  918 => 212,  911 => 210,  907 => 208,  904 => 207,  898 => 205,  896 => 204,  891 => 203,  889 => 202,  885 => 201,  882 => 200,  875 => 196,  872 => 195,  869 => 194,  866 => 193,  863 => 192,  860 => 191,  857 => 190,  847 => 189,  833 => 184,  829 => 182,  827 => 181,  824 => 180,  821 => 179,  818 => 178,  816 => 177,  812 => 175,  806 => 172,  803 => 171,  797 => 169,  795 => 168,  790 => 167,  788 => 166,  784 => 164,  781 => 163,  778 => 162,  776 => 160,  766 => 159,  754 => 156,  751 => 155,  749 => 153,  748 => 152,  747 => 151,  746 => 150,  745 => 149,  744 => 147,  741 => 146,  738 => 145,  735 => 144,  732 => 143,  722 => 142,  710 => 139,  707 => 138,  704 => 137,  701 => 132,  698 => 131,  688 => 130,  676 => 126,  673 => 125,  667 => 120,  665 => 119,  659 => 116,  657 => 115,  652 => 114,  650 => 113,  647 => 112,  640 => 108,  634 => 107,  630 => 105,  627 => 104,  625 => 99,  622 => 98,  617 => 97,  611 => 95,  609 => 94,  604 => 92,  601 => 91,  595 => 88,  592 => 87,  589 => 86,  585 => 85,  582 => 84,  579 => 83,  576 => 82,  574 => 81,  571 => 80,  569 => 79,  558 => 78,  554 => 77,  551 => 76,  549 => 74,  547 => 73,  537 => 72,  526 => 66,  523 => 64,  521 => 63,  519 => 62,  509 => 61,  499 => 58,  497 => 57,  495 => 56,  485 => 55,  475 => 52,  473 => 51,  471 => 50,  461 => 49,  448 => 46,  445 => 45,  435 => 44,  425 => 41,  422 => 39,  420 => 38,  418 => 37,  415 => 35,  413 => 34,  403 => 33,  392 => 28,  381 => 26,  376 => 25,  373 => 24,  363 => 23,  352 => 20,  350 => 19,  344 => 17,  341 => 16,  331 => 15,  318 => 12,  313 => 9,  310 => 8,  304 => 6,  301 => 5,  291 => 4,  281 => 779,  278 => 778,  276 => 711,  273 => 710,  271 => 648,  268 => 647,  266 => 644,  263 => 643,  261 => 627,  258 => 626,  256 => 578,  253 => 576,  251 => 564,  248 => 563,  246 => 560,  243 => 558,  241 => 540,  238 => 538,  236 => 521,  233 => 519,  231 => 515,  228 => 514,  226 => 511,  223 => 509,  221 => 455,  218 => 454,  216 => 414,  213 => 412,  211 => 409,  208 => 408,  206 => 354,  203 => 353,  201 => 349,  198 => 348,  196 => 309,  193 => 308,  191 => 304,  188 => 303,  186 => 298,  183 => 297,  180 => 295,  178 => 255,  175 => 254,  172 => 252,  170 => 247,  167 => 246,  165 => 229,  162 => 228,  160 => 189,  157 => 188,  155 => 159,  152 => 158,  150 => 142,  147 => 141,  145 => 130,  142 => 129,  140 => 72,  137 => 71,  134 => 69,  132 => 61,  129 => 60,  127 => 55,  124 => 54,  122 => 49,  119 => 48,  117 => 44,  114 => 43,  112 => 33,  109 => 32,  106 => 30,  104 => 23,  101 => 22,  99 => 15,  96 => 14,  94 => 4,  91 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% use '@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig' %}

{% block form_start %}
    {% if form.vars.errors|length > 0 and 'ea_crud' in form.vars.block_prefixes|default([]) %}
        {{ form_errors(form, {attr: { class: 'global-invalid-feedback' }}) }}
    {% endif %}

    {{ parent() }}

    <div class=\"row\"> {# this is closed in form_end #}
        <input type=\"hidden\" name=\"referrer\" value=\"{{ ea.request.query.get('referrer') }}\">
{% endblock form_start %}

{% block form_end %}
            {% if not render_rest is defined or render_rest %}
                {{ form_rest(form) }}
            {% endif %}
        </div> {# this closes the '<div class=\"row\">' of form_start #}
    </form>
{% endblock %}

{% block form_errors %}
    {% if errors|length > 0 %}
        {% for error in errors %}
            <div class=\"{{ attr.class|default('') }} invalid-feedback d-block\">{{ error.message }}</div>
        {% endfor %}
    {% endif %}
{% endblock form_errors %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block datetime_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) %}
    {{ parent() }}
{% endblock datetime_widget %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block file_widget -%}
    {% if vich|default(false) %}
        {%- set type = type|default('file') -%}
        {{- block('form_widget_simple') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row %}
    {% set row_attr = row_attr|merge({
        class: row_attr.class|default('') ~ ' form-group'
    }) %}

    <div class=\"{{ form.vars.ea_crud_form.ea_field.columns ?? form.vars.ea_crud_form.ea_field.defaultColumns ?? '' }}\">
        <div {% with { attr: row_attr } %}{{ block('attributes') }}{% endwith %}>
            {{- form_label(form) -}}
            <div class=\"form-widget\">
                {% set has_prepend_html = ea.field.prepend_html|default(null) is not null %}
                {% set has_append_html = ea.field.append_html|default(null) is not null %}
                {% set has_input_groups = has_prepend_html or has_append_html %}

                {% if has_input_groups %}<div class=\"input-group\">{% endif %}
                    {% if has_prepend_html %}
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">{{ ea.field.prepend_html|raw }}</span>
                        </div>
                    {% endif %}

                    {{ form_widget(form) }}

                    {% if has_append_html %}
                        <span class=\"input-group-text\">{{ ea.field.append_html|raw }}</span>
                    {% endif %}
                    {% if has_input_groups %}</div>{% endif %}

                {% set nullable_fields_fqcn = [
                    'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField',
                    'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField',
                    'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TimeField',
                ] %}
                {% if form.vars.ea_crud_form.ea_field.fieldFqcn|default(false) in nullable_fields_fqcn and ea.field.nullable|default(false) %}
                    <div class=\"nullable-control\">
                        <label>
                            <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                            {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                        </label>
                    </div>
                {% endif %}

                {% if ea.field.help ?? false %}
                    <small class=\"form-help\">{{ ea.field.help|raw }}</small>
                {% elseif form.vars.help ?? false %}
                    <small class=\"form-help\">{{ form.vars.help|trans(form.vars.help_translation_parameters, form.vars.translation_domain)|raw }}</small>
                {% endif %}

                {{- form_errors(form) -}}
            </div>
        </div>
    </div>

    {# if a field doesn't define its columns explicitly, insert a fill element to make the field take the entire row space #}
    {% if form.vars.ea_crud_form.ea_field.columns|default(null) is null %}
        <div class=\"flex-fill\"></div>
    {% endif %}
{% endblock form_row %}

{% block choice_widget_collapsed %}
    {% if 'ea-autocomplete' == attr['data-ea-widget']|default(false) %}
        {% set attr = attr|merge({
            'data-ea-i18n-no-results-found': 'autocomplete.no-results-found'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-no-more-results': 'autocomplete.no-more-results'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-loading-more-results': 'autocomplete.loading-more-results'|trans({}, 'EasyAdminBundle'),
        }) %}
    {% endif %}

    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block collection_row %}
    {% if prototype is defined and not prototype.rendered %}
        {% set row_attr = row_attr|merge({ 'data-prototype': form_row(prototype) }) %}
    {% endif %}

    {% set row_attr = row_attr|merge({
        'data-ea-collection-field': 'true',
        'data-entry-is-complex': form.vars.ea_crud_form.ea_field and form.vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ? 'true' : 'false',
        'data-allow-add': allow_add ? 'true' : 'false',
        'data-allow-delete': allow_delete ? 'true' : 'false',
        'data-num-items': form.children is empty ? 0 : max(form.children|keys),
        'data-form-type-name-placeholder': prototype is defined ? prototype.vars.name : '',
    }) %}

    {{ block('form_row') }}
{% endblock collection_row %}

{% block collection_widget %}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form.vars.ea_crud_form.ea_field.fieldFqcn ?? false %}

    <div class=\"ea-form-collection-items\">
        {% if isEmptyCollection %}
            {{ block('empty_collection') }}
        {% elseif is_array_field %}
            {{ block('form_widget') }}
        {% else %}
            <div class=\"accordion\">
                {{ block('form_widget') }}
            </div>
        {% endif %}
    </div>

    {% if isEmptyCollection or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {% if allow_add|default(false) %}
        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            {{ 'action.add_new_item'|trans({}, 'EasyAdminBundle') }}
        </button>
    {% endif %}
{% endblock collection_widget %}

{% block collection_entry_widget %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form_parent(form).vars.ea_crud_form.ea_field.fieldFqcn ?? false %}
    {% set is_complex = form_parent(form).vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ?? false %}
    {% set allows_deleting_items = form_parent(form).vars.allow_delete|default(false) %}
    {% set render_expanded = form_parent(form).vars.ea_crud_form.ea_field.customOptions.get('renderExpanded') ?? false %}
    {% set delete_item_button %}
        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    {% endset %}

    <div class=\"field-collection-item {{ is_complex ? 'field-collection-item-complex' }}\">
        {% if is_array_field|default(false) %}
            {{ form_widget(form) }}
            {% if allows_deleting_items %}
                {{ delete_item_button }}
            {% endif %}
        {% else %}
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button {{ render_expanded ? '' : 'collapsed' }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ id }}-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        {{ value|ea_as_string }}
                    </button>

                    {% if allows_deleting_items %}
                        {{ delete_item_button }}
                    {% endif %}
                </h2>
                <div id=\"{{ id }}-contents\" class=\"accordion-collapse collapse {{ render_expanded ? 'show' }}\">
                    <div class=\"accordion-body\">
                        {{ form_widget(form) }}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock collection_entry_widget %}

{% block form_widget_compound %}
    <div class=\"form-widget-compound\">
        {% if 'collection' in block_prefixes %}
            {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
            {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
            {% if isEmptyCollection %}
                {{ block('empty_collection') }}
            {% endif %}
            {% if isEmptyCollection or form.vars.prototype is defined %}
                {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
            {% endif %}
        {% endif %}

        {{ parent() }}
    </div>
{% endblock form_widget_compound %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ ea.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is same as(false) -%}
        <label>{# the empty <label> is needed to not break the form design #}</label>
    {%- else -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>
        {%- if translation_domain is same as(false) -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label -}}
            {%- else -%}
                {{- label|raw -}}
            {%- endif -%}
        {%- else -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label|trans(label_translation_parameters, translation_domain) -}}
            {%- else -%}
                {{- label|trans(label_translation_parameters, translation_domain)|raw -}}
            {%- endif -%}
        {%- endif -%}
        </{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(ea.templatePath('label/empty')) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"ea-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            {% set file_extension = download_uri|split('.')|last %}
            {% set extension_icons = {
                'gif': 'fa-file-image-o',
                'jpg': 'fa-file-image-o',
                'pdf': 'fa-file-pdf-o',
                'png': 'fa-file-image-o',
                'zip': 'fa-file-archive-o'
            } %}
            <a class=\"ea-vich-file-name\" href=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                <i class=\"fa fa-fw {{ extension_icons[file_extension] ?? 'fa-file-o' }}\"></i>
                {{ download_title }}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'vich_uploader.form_label.delete_confirm'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    {% set formTypeOptions = ea_crud_form.ea_field.formTypeOptions|default('') %}
    <div class=\"ea-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"ea-lightbox-thumbnail\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img style=\"cursor: initial\" src=\"{{ (asset_helper is same as(true) ? asset(image_uri) : image_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img style=\"cursor: initial\" src=\"{{ asset_helper is same as(true) ? asset(image_uri) : image_uri }}\">
                    {% endif %}
                </div>
            {% else %}
                {% set _lightbox_id = 'ea-lightbox-' ~ id %}

                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#{{ _lightbox_id }}\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"ea-lightbox\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'vich_uploader.form_label.delete_confirm'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block ea_crud_rest %}
    {{ form_rest(form) }}
{% endblock ea_crud_rest %}

{# EasyAdmin form type #}
{% block ea_crud_widget %}
    {% if ea_crud_form.form_tabs|length > 0 %}
        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    {% for tab_name, tab_config in ea_form_tabs %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if tab_config.active %}active{% endif %}\" href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-bs-toggle=\"tab\">
                                {%- if tab_config.icon|default(false) -%}
                                    <i class=\"fa fa-fw fa-{{ tab_config.icon }}\"></i>
                                {%- endif -%}
                                {{ tab_config['label']|trans(domain = ea.i18n.translationDomain) }}
                                {%- if tab_config.errors > 0 -%}
                                    <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_config.errors}, 'EasyAdminBundle') }}\">
                                        {{- tab_config.errors -}}
                                    </span>
                                {%- endif -%}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"tab-content\">
                    {% for tab_name, tab_config in ea_form_tabs %}
                        <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %} {{ tab_config['css_class']|default('') }}\">
                            {% if tab_config['help']|default(false) %}
                                <div class=\"content-header-help tab-help\">
                                    {{ tab_config['help']|trans(domain = ea.i18n.translationDomain)|raw }}
                                </div>
                            {% endif %}

                            {{ block('ea_crud_widget_panels') }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        {{ block('ea_crud_widget_panels') }}
    {% endif %}
{% endblock ea_crud_widget %}

{% block ea_crud_widget_panels %}
    {% for panel_name, panel_config in ea_crud_form.form_panels|filter(panel_config => not panel_config.form_tab or panel_config.form_tab == tab_name) %}
        {% set panel_has_header = panel_config.label|default(false) or panel_config.icon|default(false) or panel_config.help|default(false) %}

        {% set collapsible = panel_config.collapsible %}
        {% set collapsed = panel_config.collapsed %}

        <div class=\"{{ panel_config.css_class ?? '' }}\">
            <div class=\"form-panel\">
                {% if panel_has_header %}
                    <div class=\"form-panel-header {{ collapsible ? 'collapsible' }} {{ panel_config.help|default(false) is not empty ? 'with-help' }}\">
                        <div class=\"form-panel-title\">
                            <a {% if not collapsible %}
                                    href=\"#\" class=\"not-collapsible\"
                               {% else %}
                                    href=\"#content-{{ panel_name }}\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse {{ collapsed ? 'collapsed' }}\"
                                    aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ panel_name }}\"
                               {% endif %}
                            >
                                {% if collapsible %}
                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                {% endif %}

                                {% if panel_config.icon|default(false) %}
                                    <i class=\"form-panel-icon {{ panel_config.icon }}\"></i>
                                {% endif %}
                                {{ panel_config.label|raw }}
                            </a>

                            {% if panel_config.help|default(false) %}
                                <div class=\"form-panel-help\">{{ panel_config.help|raw }}</div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                <div id=\"content-{{ panel_name }}\" class=\"form-panel-body {{ not panel_has_header ? 'without-header' }} {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                    <div class=\"row\">
                        {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and field.vars.ea_crud_form.form_panel == panel_name) %}
                            {% if not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name %}
                                {{ form_row(field) }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and (not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name)) %}
            {{ form_row(field) }}
        {% endfor %}
    {% endfor %}
{% endblock ea_crud_widget_panels %}

{# EasyAdminAutocomplete form type #}
{% block ea_autocomplete_widget %}
    {{ form_widget(form.autocomplete, { attr: attr|merge({ required: required }) }) }}
{% endblock ea_autocomplete_widget %}

{% block ea_autocomplete_inner_label %}
    {% set name = form_parent(form).vars.name %}
    {{ block('form_label') }}
{% endblock ea_autocomplete_inner_label %}

{# EasyAdmin's CodeEditor form type #}
{% block ea_code_editor_widget %}
    {{ form_widget(form, { attr: attr|merge({
        'data-ea-code-editor-field': 'true',
        'data-language': form.vars.ea_crud_form.ea_field.customOptions.get('language'),
        'data-tab-size': form.vars.ea_crud_form.ea_field.customOptions.get('tabSize'),
        'data-indent-with-tabs': form.vars.ea_crud_form.ea_field.customOptions.get('indentWithTabs') ? 'true' : 'false',
        'data-show-line-numbers': form.vars.ea_crud_form.ea_field.customOptions.get('showLineNumbers') ? 'true' : 'false',
    }) }) }}

    {% set numOfRows = form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows') %}
    {% if numOfRows is not null %}
        <style type=\"text/css\">
            {# here we consider 21px as the average line height #}
            #{{ id }} + .CodeMirror { height: {{ (21 * numOfRows)|round }}px !important; max-height: none; }
        </style>
    {% endif %}
{% endblock ea_code_editor_widget %}

{# EasyAdmin's TextEditor form type #}
{% block ea_text_editor_widget %}
    {% set numOfRows = form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows')|default(5) %}

    {{ form_widget(form, { attr: attr|merge({ style: 'display: none', class: 'ea-text-editor-content' }) }) }}

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"{{ id }}\" class=\"trix-content\"></trix-editor>
    </div>

    {% if numOfRows %}
        <style type=\"text/css\">
            trix-editor[input={{ id }}].trix-content {
                {# here we consider 21px as the average line height #}
                min-height: {{ (numOfRows * 21)|round }}px;
            }
        </style>
    {% endif %}
{% endblock ea_text_editor_widget %}

{# EasyAdminSection form type #}
{% block ea_form_row_row %}
    <div class=\"{{ form.vars.row_attr.class }}\"></div>
{% endblock %}

{% block ea_section_row %}
    <div class=\"form-section {{ ea.field.icon|default(false) == false and ea.field.label|default(false) == false ? 'form-section-empty' }} {{ ea.field.css_class|default('') }}\">
        <h2>
            {% if ea.field.icon|default(false) %}<i class=\"fa fa-fw fa-{{ ea.field.icon }}\"></i>{% endif %}
            <span>{% if ea.field.label|default(false) %}{{ ea.field.label|default('')|trans(domain = ea.i18n.translationDomain)|raw }}{% endif %}</span>
        </h2>

        {% if ea.field.help|default(false) %}
            <p class=\"form-section-help\">{{ ea.field.help|trans(domain = ea.i18n.translationDomain)|raw }}</p>
        {% endif %}
    </div>
{% endblock ea_section_row %}

{# EasyAdminFilters form type #}
{% block ea_filters_widget %}
    {% set applied_filters = ea.request.query.get('filters')|default([])|keys %}

    {% for field in form %}
        <div class=\"col-12\">
            <div class=\"filter-field {% if not loop.last %}border-bottom{% endif %} py-1 px-3 {% if loop.last %}pb-2{% endif %}\" data-filter-property=\"{{ field.vars.name }}\">
                <div class=\"filter-heading\" id=\"filter-heading-{{ loop.index }}\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" {% if field.vars.name in applied_filters %}checked{% endif %}>
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-{{ loop.index }}\" aria-expanded=\"{{ field.vars.name in applied_filters ? 'true' : 'false' }}\" aria-controls=\"filter-content-{{ loop.index }}\"
                        {% for name, value in field.vars.label_attr|default([]) %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                        {{ field.vars.label|default(field.vars.name|humanize)|trans(domain = ea.i18n.translationDomain) }}
                    </a>
                </div>
                <div id=\"filter-content-{{ loop.index }}\" class=\"filter-content collapse {% if field.vars.name in applied_filters %}show{% endif %}\" aria-labelledby=\"filter-heading-{{ loop.index }}\">
                    <div class=\"form-widget my-2\">
                        {{ form_widget(field) }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#{{ form.vars.id }}').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>
{% endblock ea_filters_widget %}

{% block ea_numeric_filter_widget %}
    <div class=\"form-widget-compound\">
        {{ form_row(form.comparison) }}
        {{ form_row(form.value) }}
        <div id=\"wrapper_{{ form.value2.vars.id }}\" {% if form.comparison.vars.value != 'between' %}style=\"display: none\"{% endif %}>
            {{ form_row(form.value2) }}
        </div>
        <script>
            document.querySelector('#{{ form.comparison.vars.id }}').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_{{ form.value2.vars.id }}');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>
    {{- form_errors(form) -}}
{% endblock ea_numeric_filter_widget %}

{% block ea_datetime_filter_widget %}
    {{ block('ea_numeric_filter_widget') }}
{% endblock ea_datetime_filter_widget %}

{% block ea_fileupload_widget %}
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {% set placeholder = '' %}
            {% set title = '' %}
            {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
            {% if currentFiles %}
                {% if multiple %}
                    {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
                {% else %}
                    {% set placeholder = (currentFiles|first).filename %}
                    {% set title = (currentFiles|first).mTime|date %}
                {% endif %}
            {% endif %}
            <div class=\"custom-file\">
                {{ form_widget(form.file, { attr: form.file.vars.attr|merge({ placeholder: placeholder, title: title, 'data-files-label': filesLabel, style: 'display: none' }) }) }}
                {{ form_label(form.file, placeholder, { label_attr: { class: 'custom-file-label' }}) }}
            </div>
            <div class=\"input-group-text\">
                {%- if currentFiles -%}
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                {%- endif -%}
                {% if allow_delete %}
                    <label class=\"btn ea-fileupload-delete-btn\" {% if currentFiles is empty %}style=\"display: none\"{% endif %} for=\"{{ form.delete.vars.id }}\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                {% endif %}
                <label class=\"btn\" for=\"{{ form.file.vars.id }}\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        <i class=\"fa fa-file-o\"></i> {{ file.filename }}
                                    </span>
                                {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div style=\"display: none\">{{ form_widget(form.delete, { label: false }) }}</div>
        {% endif %}
    </div>
    {{ form_errors(form.file) }}
{% endblock %}

{% block TODO_ea_fileupload_widget %}
    {% set placeholder = '' %}
    {% set title = '' %}
    {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
    {% if currentFiles %}
        {% if multiple %}
            {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
        {% else %}
            {% set placeholder = (currentFiles|first).filename %}
            {% set title = (currentFiles|first).mTime|date %}
        {% endif %}
    {% endif %}

    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {{ form_widget(form.file, { attr: form.file.vars.attr|merge({ placeholder: placeholder, title: title, 'data-files-label': filesLabel, class: 'form-control' }) }) }}

            {% if currentFiles %}
                <span class=\"input-group-text\">
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                </span>
            {% endif %}

            {% if currentFiles and allow_delete %}
                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            {% endif %}

            {% if currentFiles %}
                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            {% endif %}
        </div>

        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        <i class=\"fa fa-file-o\"></i> {{ file.filename }}
                                    </span>
                                    {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div style=\"display: none\">{{ form_widget(form.delete, { label: false }) }}</div>
        {% endif %}
    </div>

    {{ form_errors(form.file) }}
{% endblock %}

{% block ea_slug_widget %}
    {% set attr = attr|merge({
        'data-ea-slug-field': '',
        'data-target': form.parent.children[target].vars.id
    }) %}

    <div class=\"input-group\">
        {{ block('form_widget') }}
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
{% endblock %}
", "@EasyAdmin/crud/form_theme.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
