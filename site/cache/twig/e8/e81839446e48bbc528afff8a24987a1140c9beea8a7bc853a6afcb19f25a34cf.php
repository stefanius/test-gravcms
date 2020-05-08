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

/* @Page:/Users/sgrootveld/PhpstormProjects/test-gravcms/site/user/plugins/error/pages */
class __TwigTemplate_49376aacec433645d2dfbc15641b7f5c3ae9636f53e3290147b24f0bee85a317 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/sgrootveld/PhpstormProjects/test-gravcms/site/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:/Users/sgrootveld/PhpstormProjects/test-gravcms/site/user/plugins/error/pages", "");
    }
}
