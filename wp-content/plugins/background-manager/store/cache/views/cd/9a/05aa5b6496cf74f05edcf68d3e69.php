<?php

/* galleries.html.twig */
class __TwigTemplate_cd9a05aa5b6496cf74f05edcf68d3e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "
<form method=\"post\" action=\"\">
";
        // line 9
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        echo $_list_;
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "galleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 9,  17 => 7,);
    }
}
