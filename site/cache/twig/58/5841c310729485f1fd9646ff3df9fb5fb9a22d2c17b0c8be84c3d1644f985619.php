<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/layouts/field-variables.html.twig */
class __TwigTemplate_e0fbbe0d8c56bb02ca77c7d519b49b1f736ddbe187845182e65a572064c3c8a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field_input_classes' => [$this, 'block_field_input_classes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('field_input_classes', $context, $blocks);
    }

    public function block_field_input_classes($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/layouts/field-variables.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block field_input_classes %}{% endblock %}", "forms/layouts/field-variables.html.twig", "/Users/sgrootveld/PhpstormProjects/test-gravcms/site/user/plugins/form/templates/forms/layouts/field-variables.html.twig");
    }
}
