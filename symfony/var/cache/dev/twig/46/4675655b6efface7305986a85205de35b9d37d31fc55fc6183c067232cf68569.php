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

/* admin/field/upload_field2.html.twig */
class __TwigTemplate_ee018f9fee4baeaaba5a689bdb390038d925fd47781163a798399e7ccf16f11f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/upload_field2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/field/upload_field2.html.twig"));

        // line 1
        echo "<div class=\"form-widget\">



    <div class=\"field-collection-item field-collection-item-complex\">
        <div class=\"form-widget-compound\">

            <div id=\"Member_attachments_0\">
                <div class=\" form-group\"><legend class=\"col-form-label\">Image file</legend><div class=\"form-widget\">


                        <div class=\"ea-vich-file\">
                            <a class=\"ea-vich-file-name\" href=\"#\">
                                <img src=\"/uploads/team/IMG_3870-1.png\" alt=\"\">
                            </a>
                            <div class=\"ea-vich-file-actions\">
                                <div class=\"btn btn-secondary input-file-container\">
                                    <i class=\"fa fa-fw fa-upload\"></i> Choose file
                                    <input type=\"file\" id=\"Member_attachments_0_imageFile_file\" name=\"Member[attachments][0][imageFile][file]\" onchange=\"            var newFile = document.getElementById('Member_attachments_0_imageFile_file').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('Member_attachments_0_imageFile_file_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        \" class=\"form-control\">
                                </div>


                                <div class=\" form-group\"><div class=\"form-widget\">


                                        <div class=\"form-check\"><input type=\"checkbox\" id=\"Member_attachments_0_imageFile_delete\" name=\"Member[attachments][0][imageFile][delete]\" class=\"form-check-input\" value=\"1\">
                                            <label class=\"form-check-label\" for=\"Member_attachments_0_imageFile_delete\">form.label.delete</label></div>



                                    </div>
                                </div>

                            </div>
                            <div class=\"small\" id=\"Member_attachments_0_imageFile_file_new_file_name\"></div>
                        </div>




                    </div>
                </div>

            </div>
        </div>


        <button type=\"button\" class=\"btn btn-link field-collection-delete-button\" title=\"Remove the item\" onclick=\"this.closest('.form-group').remove(); return false;\">
            <i class=\"fas fa-times\"></i>
        </button>
    </div>




</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/field/upload_field2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-widget\">



    <div class=\"field-collection-item field-collection-item-complex\">
        <div class=\"form-widget-compound\">

            <div id=\"Member_attachments_0\">
                <div class=\" form-group\"><legend class=\"col-form-label\">Image file</legend><div class=\"form-widget\">


                        <div class=\"ea-vich-file\">
                            <a class=\"ea-vich-file-name\" href=\"#\">
                                <img src=\"/uploads/team/IMG_3870-1.png\" alt=\"\">
                            </a>
                            <div class=\"ea-vich-file-actions\">
                                <div class=\"btn btn-secondary input-file-container\">
                                    <i class=\"fa fa-fw fa-upload\"></i> Choose file
                                    <input type=\"file\" id=\"Member_attachments_0_imageFile_file\" name=\"Member[attachments][0][imageFile][file]\" onchange=\"            var newFile = document.getElementById('Member_attachments_0_imageFile_file').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('Member_attachments_0_imageFile_file_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        \" class=\"form-control\">
                                </div>


                                <div class=\" form-group\"><div class=\"form-widget\">


                                        <div class=\"form-check\"><input type=\"checkbox\" id=\"Member_attachments_0_imageFile_delete\" name=\"Member[attachments][0][imageFile][delete]\" class=\"form-check-input\" value=\"1\">
                                            <label class=\"form-check-label\" for=\"Member_attachments_0_imageFile_delete\">form.label.delete</label></div>



                                    </div>
                                </div>

                            </div>
                            <div class=\"small\" id=\"Member_attachments_0_imageFile_file_new_file_name\"></div>
                        </div>




                    </div>
                </div>

            </div>
        </div>


        <button type=\"button\" class=\"btn btn-link field-collection-delete-button\" title=\"Remove the item\" onclick=\"this.closest('.form-group').remove(); return false;\">
            <i class=\"fas fa-times\"></i>
        </button>
    </div>




</div>
", "admin/field/upload_field2.html.twig", "/Users/martin/Documents/devilbox/data/www/portfolio/symfony/templates/admin/field/upload_field2.html.twig");
    }
}
