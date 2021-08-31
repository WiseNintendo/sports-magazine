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

/* install/step_4.twig */
class __TwigTemplate_b695aec5155f7f1855418e52277ac741b21320616b4a6bffc5bc64bad75738fb extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">4<small>/4</small></h1>
        <h3>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "<br>
          <small>";
        // line 8
        echo ($context["text_step_4"] ?? null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-success alert-dismissible\">";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo ($context["error_warning"] ?? null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 25
        echo ($context["text_catalog"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 28
        echo ($context["text_admin"] ?? null);
        echo "</a></div>
    </div>
  </div>

  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\"><a href=\"http://opencart-russia.ru\" class=\"icon transition\"><i class=\"fa fa-cloud fa-4x\"></i></a>
        <h3>";
        // line 35
        echo ($context["text_facebook"] ?? null);
        echo "</h3>
        <p>";
        // line 36
        echo ($context["text_facebook_description"] ?? null);
        echo "</p>
        <a href=\"http://opencart-russia.ru\">";
        // line 37
        echo ($context["text_facebook_visit"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"http://forum.opencart-russia.ru\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 39
        echo ($context["text_forum"] ?? null);
        echo "</h3>
        <p>";
        // line 40
        echo ($context["text_forum_description"] ?? null);
        echo "</p>
        <a href=\"http://forum.opencart-russia.ru\">";
        // line 41
        echo ($context["text_forum_visit"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 43
        echo ($context["text_commercial"] ?? null);
        echo "</h3>
        <p>";
        // line 44
        echo ($context["text_commercial_description"] ?? null);
        echo "</p>
        <a href=\"http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/\" target=\"_BLANK\">";
        // line 45
        echo ($context["text_commercial_visit"] ?? null);
        echo "</a></div>
    </div>
  </div>
</div>
";
        // line 49
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  129 => 45,  125 => 44,  121 => 43,  116 => 41,  112 => 40,  108 => 39,  103 => 37,  99 => 36,  95 => 35,  85 => 28,  79 => 25,  68 => 18,  62 => 16,  60 => 15,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step_4.twig", "");
    }
}
