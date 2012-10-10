<?php

/* macros_edit.html.twig */
class __TwigTemplate_a2fba5ce482a5b12ca396b3745692763 extends Twig_Template
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
        // line 62
        echo "
";
    }

    // line 9
    public function getfarbtastic_script($id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if ((!twig_test_empty($_id_))) {
                // line 11
                echo "    ";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["id"] = ($_id_ . "_");
            }
            // line 12
            echo " 
<script type=\"text/javascript\">
/*<![CDATA[*/
";
            // line 58
            echo "(function(a){myatu_bgm_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color={showHideClear:function(){var b=a(\"#background_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\").val();if(b&&b.charAt(0)==\"#\"){if(b.length>1){a(\"#clear_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\").show()}else{a(\"#clear_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\").hide()}}}};a(document).ready(function(c){var b=\"#myatu_bg_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color_picker\",d=\"#background_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\";c(b).farbtastic(function(e){c(d).attr(\"value\",e)});c.farbtastic(b).setColor(c(d).val());c(d).focusin(function(){c(b).show()}).focusout(function(){c(b).hide();myatu_bgm_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color.showHideClear()}).keyup(function(){if(this.value.charAt(0)!=\"#\"){this.value=\"#\"+this.value}c.farbtastic(b).setColor(c(d).val())});c(\"#clear_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\").click(function(){c(d).val(\"#\");myatu_bgm_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color.showHideClear()});myatu_bgm_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color.showHideClear()})})(jQuery);
/*]]>*/
</script>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 64
    public function getfarbtastic_input($id = null, $value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $id,
            "value" => $value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if ((!twig_test_empty($_id_))) {
                // line 66
                echo "    ";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["id"] = ($_id_ . "_");
            }
            // line 67
            echo " 
<input type=\"text\" value=\"#";
            // line 68
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\" autocomplete=\"off\" name=\"background_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\" id=\"background_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\" />
<input type=\"button\" id=\"clear_";
            // line 69
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color\" class=\"hide-if-no-js button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Clear"), "html", null, true);
            echo "\" />
<div id=\"myatu_bg_";
            // line 70
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "color_picker\" class=\"hide-if-no-js\" style=\"z-index:100;background:#eeeeee;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #ccc;position:absolute;display:none;padding:2px;box-shadow:5px 5px 5px #AAA;-moz-box-shadow:5px 5px 5px #AAA;-webkit-box-shadow:5px 5px 5px #AAA;\"></div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "macros_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 70,  127 => 69,  116 => 68,  108 => 66,  105 => 65,  93 => 64,  49 => 58,  44 => 12,  39 => 11,  36 => 10,  188 => 47,  182 => 43,  164 => 41,  159 => 40,  150 => 36,  144 => 33,  137 => 28,  118 => 24,  113 => 67,  102 => 22,  84 => 21,  81 => 20,  53 => 18,  27 => 12,  20 => 62,  86 => 35,  83 => 34,  70 => 31,  67 => 30,  64 => 29,  55 => 24,  51 => 23,  48 => 22,  38 => 18,  34 => 16,  24 => 12,  37 => 14,  26 => 11,  22 => 9,  35 => 17,  31 => 15,  25 => 9,  21 => 9,  17 => 7,);
    }
}
