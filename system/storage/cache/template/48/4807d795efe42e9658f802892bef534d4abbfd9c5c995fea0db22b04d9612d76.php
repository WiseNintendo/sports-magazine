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

/* common/footer.twig */
class __TwigTemplate_bccb35678f3abf2c4e28c855471934167c918f66bb44aea0c94968e71cbbf5f9 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"http://opencart-russia.ru\" target=\"_blank\">";
        // line 2
        echo ($context["text_project"] ?? null);
        echo "</a>|<a href=\"http://forum.opencart-russia.ru/threads/ustanovka.6044/\" target=\"_blank\">";
        echo ($context["text_documentation"] ?? null);
        echo "</a>|<a href=\"http://forum.opencart-russia.ru\" target=\"_blank\">";
        echo ($context["text_support"] ?? null);
        echo "</a><br />
\t</div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.twig", "");
    }
}
