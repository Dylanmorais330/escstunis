<?php

/* meta_single.html.twig */
class __TwigTemplate_5e89598e64edc712cf003fd0c56e235a extends Twig_Template
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
";
        // line 8
        $context["me"] = $this->env->loadTemplate("macros_edit.html.twig");
        // line 9
        echo "
<table class=\"form-table\">
    <tbody>
        <tr valign=\"top\">
            <th scope=\"row\">
                <label for=\"active_gallery\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Image Set"), "html", null, true);
        echo "</label>
            </th>
            <td>
                <select id=\"active_gallery\" class=\"postform\" name=\"active_gallery\">
                    ";
        // line 18
        if (isset($context["galleries"])) { $_galleries_ = $context["galleries"]; } else { $_galleries_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_galleries_);
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 19
            echo "                    <option ";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ($this->getAttribute($_gallery_, "selected")) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "name"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "                </select>
            </td>
        </tr>
        <tr valign=\"top\">
            <th scope=\"row\">
                <label for=\"active_overlay\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Overlay"), "html", null, true);
        echo "</label>
            </th>
            <td>
                <select id=\"active_overlay\" class=\"postform\" name=\"active_overlay\">
                    ";
        // line 30
        if (isset($context["overlays"])) { $_overlays_ = $context["overlays"]; } else { $_overlays_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_overlays_);
        foreach ($context['_seq'] as $context["_key"] => $context["overlay"]) {
            // line 31
            echo "                    <option ";
            if (isset($context["overlay"])) { $_overlay_ = $context["overlay"]; } else { $_overlay_ = null; }
            if ($this->getAttribute($_overlay_, "selected")) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            if (isset($context["overlay"])) { $_overlay_ = $context["overlay"]; } else { $_overlay_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_overlay_, "value"), "html", null, true);
            echo "\">";
            if (isset($context["overlay"])) { $_overlay_ = $context["overlay"]; } else { $_overlay_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_overlay_, "desc"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overlay'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "                </select>
            </td>
        </tr>
        <tr valign=\"top\">
            <th scope=\"row\">
                <label for=\"background_color\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Background Color"), "html", null, true);
        echo "</label>
            </th>
            <td>
                ";
        // line 41
        if (isset($context["me"])) { $_me_ = $context["me"]; } else { $_me_ = null; }
        if (isset($context["background_color"])) { $_background_color_ = $context["background_color"]; } else { $_background_color_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_me_, "farbtastic_input", array(0 => "", 1 => $_background_color_), "method"), "html", null, true);
        echo "
            </td>
        </tr>
    </tbody>
</table>

";
        // line 47
        if (isset($context["me"])) { $_me_ = $context["me"]; } else { $_me_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_me_, "farbtastic_script", array(0 => ""), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "meta_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  109 => 41,  103 => 38,  96 => 33,  78 => 31,  73 => 30,  66 => 26,  59 => 21,  41 => 19,  36 => 18,  29 => 14,  22 => 9,  20 => 8,  17 => 7,);
    }
}
