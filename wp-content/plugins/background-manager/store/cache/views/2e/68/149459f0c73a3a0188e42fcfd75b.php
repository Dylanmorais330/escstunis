<?php

/* edit_gallery.html.twig */
class __TwigTemplate_2e68149459f0c73a3a0188e42fcfd75b extends Twig_Template
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
<form name=\"gallery\" method=\"post\" action=\"\">
    <input type=\"hidden\" id=\"edit_id\" name=\"edit\" value=\"";
        // line 9
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $_edit_, "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"images_hash\" name=\"images_hash\" value=\"";
        // line 10
        if (isset($context["images_hash"])) { $_images_hash_ = $context["images_hash"]; } else { $_images_hash_ = null; }
        echo twig_escape_filter($this->env, $_images_hash_, "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"images_iframe_base\" name=\"images_iframe_base\" value=\"";
        // line 11
        if (isset($context["images_iframe_src"])) { $_images_iframe_src_ = $context["images_iframe_src"]; } else { $_images_iframe_src_ = null; }
        echo twig_escape_filter($this->env, $_images_iframe_src_, "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"images_per_page\" name=\"images_per_page\" value=\"";
        // line 12
        if (isset($context["images_per_page"])) { $_images_per_page_ = $context["images_per_page"]; } else { $_images_per_page_ = null; }
        echo twig_escape_filter($this->env, $_images_per_page_, "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"image_iframe_edit_base\" name=\"image_iframe_edit_base\" value=\"";
        // line 13
        if (isset($context["image_edit_src"])) { $_image_edit_src_ = $context["image_edit_src"]; } else { $_image_edit_src_ = null; }
        echo twig_escape_filter($this->env, $_image_edit_src_, "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"image_del_is_perm\" name=\"image_del_is_perm\" value=\"";
        // line 14
        if (isset($context["image_del_is_perm"])) { $_image_del_is_perm_ = $context["image_del_is_perm"]; } else { $_image_del_is_perm_ = null; }
        echo twig_escape_filter($this->env, $_image_del_is_perm_, "html", null, true);
        echo "\" />
    ";
        // line 15
        if (isset($context["nonce"])) { $_nonce_ = $context["nonce"]; } else { $_nonce_ = null; }
        echo $_nonce_;
        echo "
    ";
        // line 16
        if (isset($context["nonce_meta_order"])) { $_nonce_meta_order_ = $context["nonce_meta_order"]; } else { $_nonce_meta_order_ = null; }
        echo $_nonce_meta_order_;
        echo "
    ";
        // line 17
        if (isset($context["nonce_meta_clsd"])) { $_nonce_meta_clsd_ = $context["nonce_meta_clsd"]; } else { $_nonce_meta_clsd_ = null; }
        echo $_nonce_meta_clsd_;
        echo "

    <div id=\"poststuff\" ";
        // line 19
        if (isset($context["is_wp34"])) { $_is_wp34_ = $context["is_wp34"]; } else { $_is_wp34_ = null; }
        if ((!$_is_wp34_)) {
            echo "class=\"metabox-holder ";
            if (isset($context["has_right_sidebar"])) { $_has_right_sidebar_ = $context["has_right_sidebar"]; } else { $_has_right_sidebar_ = null; }
            echo twig_escape_filter($this->env, $_has_right_sidebar_, "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 20
        if (isset($context["is_wp34"])) { $_is_wp34_ = $context["is_wp34"]; } else { $_is_wp34_ = null; }
        if ((!$_is_wp34_)) {
            // line 21
            echo "        <div id=\"side-info-column\" class=\"inner-sidebar\">
            ";
            // line 22
            if (isset($context["meta_boxes_side"])) { $_meta_boxes_side_ = $context["meta_boxes_side"]; } else { $_meta_boxes_side_ = null; }
            echo $_meta_boxes_side_;
            echo "
        </div>
        ";
        }
        // line 25
        echo "
        <div id=\"post-body\" ";
        // line 26
        if (isset($context["is_wp34"])) { $_is_wp34_ = $context["is_wp34"]; } else { $_is_wp34_ = null; }
        if ($_is_wp34_) {
            echo "class=\"metabox-holder ";
            if (isset($context["has_right_sidebar"])) { $_has_right_sidebar_ = $context["has_right_sidebar"]; } else { $_has_right_sidebar_ = null; }
            echo twig_escape_filter($this->env, $_has_right_sidebar_, "html", null, true);
            echo "\"";
        }
        echo ">
            <div id=\"post-body-content\">
                <div id=\"titlediv\">
                    <div id=\"titlewrap\">
                        <label class=\"hide-if-no-js\" style=\"visibility:hidden\" id=\"title-prompt-text\" for=\"title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Enter title here"), "html", null, true);
        echo "</label>
                        <input id=\"title\" type=\"text\" autocomplete=\"off\" value=\"";
        // line 31
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "post_title"), "html", null, true);
        echo "\" tabindex=\"1\" size=\"30\" name=\"post_title\" />
                    </div>
                </div>

                <div id=\"imagediv\" class=\"postarea\">
                    <div id=\"editor-toolbar\" class=\"hide-if-no-js\">
                        <div id=\"imagediv_nav\" class=\"tablenav\">
                             <div class=\"tablenav-pages\"></div>
                        </div>
                        <div id=\"media-buttons\">
                            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Upload/Insert"), "html", null, true);
        echo "
                            ";
        // line 42
        if (isset($context["media_buttons"])) { $_media_buttons_ = $context["media_buttons"]; } else { $_media_buttons_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_media_buttons_);
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 43
            echo "                            <a href=\"";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "url"), "html", null, true);
            echo "\" id=\"add_";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "id"), "html", null, true);
            echo "\" class=\"thickbox\" title=\"";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "title"), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "icon"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "title"), "html", null, true);
            echo "\" onclick=\"return false;\" /></a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "                        </div>
                    </div>

                    <div id=\"image_editor_container\" class=\"wp-editor-container\">
                        <div id=\"quicktags\" class=\"quicktags-toolbar\">
                            <div id=\"ed_toolbar\" class=\"img_ed_buttons\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Image Selection: "), "html", null, true);
        echo "
                                <a id=\"ed_move_l_selected\" href=\"#\" class=\"button\" accesskey=\"[\" title=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Move the selected images to the left"), "html", null, true);
        echo "\"><i></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Move Left"), "html", null, true);
        echo "</a>
                                <a id=\"ed_move_r_selected\" href=\"#\" class=\"button\" accesskey=\"]\" title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Move the selected images to the right"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Move Right"), "html", null, true);
        echo " <i></i></a>
                                &nbsp;
                                <a id=\"ed_delete_selected\" href=\"#\" class=\"button\" accesskey=\"l\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Permanently delete the selected images"), "html", null, true);
        echo "\"><i></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Delete"), "html", null, true);
        echo "</a>
                                <a id=\"ed_remove_selected\" href=\"#\" class=\"button\" accesskey=\"v\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Remove (detach) the images from the Image Set"), "html", null, true);
        echo "\"><i></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Remove"), "html", null, true);
        echo "</a>
                                &nbsp;
                                <a id=\"ed_clear_selected\" href=\"#\" class=\"button\" accesskey=\"c\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Clear the selection"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Clear"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                        <div id=\"editorcontainer\">
                            <div id=\"image_iframe_overlay\">
                                <div id=\"overlay\"></div>
                                <div id=\"loader\">
                                    <img src=\"";
        // line 65
        if (isset($context["img_large_loader"])) { $_img_large_loader_ = $context["img_large_loader"]; } else { $_img_large_loader_ = null; }
        echo twig_escape_filter($this->env, $_img_large_loader_, "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Loading"), "html", null, true);
        echo "...\" />
                                </div>
                            </div>
                            <iframe id=\"images_iframe\" src=\"";
        // line 68
        if (isset($context["images_iframe_src"])) { $_images_iframe_src_ = $context["images_iframe_src"]; } else { $_images_iframe_src_ = null; }
        echo twig_escape_filter($this->env, $_images_iframe_src_, "html", null, true);
        echo "\" tabindex=\"2\"></iframe>
                        </div>
                    </div>
                    <table id=\"post-status-info\">
                        <tbody>
                            <tr>
                                <td id=\"wp-word-count\">
                                    ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Image count"), "html", null, true);
        echo ": <span id=\"image-count\">";
        if (isset($context["images_count"])) { $_images_count_ = $context["images_count"]; } else { $_images_count_ = null; }
        echo twig_escape_filter($this->env, $_images_count_, "html", null, true);
        echo "</span>
                                    <span id=\"selected-count\">(<span id=\"select-count\">0</span> ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("selected"), "html", null, true);
        echo ")</span>
                                </td>
                                <td>
                                    <i id=\"resize_window\"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                ";
        // line 86
        if (isset($context["is_wp34"])) { $_is_wp34_ = $context["is_wp34"]; } else { $_is_wp34_ = null; }
        if ((!$_is_wp34_)) {
            // line 87
            echo "                ";
            if (isset($context["meta_boxes_main"])) { $_meta_boxes_main_ = $context["meta_boxes_main"]; } else { $_meta_boxes_main_ = null; }
            echo $_meta_boxes_main_;
            echo "
                ";
        }
        // line 89
        echo "            </div> ";
        // line 90
        echo "
            ";
        // line 91
        if (isset($context["is_wp34"])) { $_is_wp34_ = $context["is_wp34"]; } else { $_is_wp34_ = null; }
        if ($_is_wp34_) {
            // line 92
            echo "            <div id=\"postbox-container-1\" class=\"postbox-container\">";
            if (isset($context["meta_boxes_side"])) { $_meta_boxes_side_ = $context["meta_boxes_side"]; } else { $_meta_boxes_side_ = null; }
            echo $_meta_boxes_side_;
            echo "</div>
            <div id=\"postbox-container-2\" class=\"postbox-container\">";
            // line 93
            if (isset($context["meta_boxes_main"])) { $_meta_boxes_main_ = $context["meta_boxes_main"]; } else { $_meta_boxes_main_ = null; }
            echo $_meta_boxes_main_;
            echo "</div>
            ";
        }
        // line 95
        echo "        </div> ";
        // line 96
        echo "        <br class=\"clear\" />
    </div> ";
        // line 98
        echo "</form>

<script type=\"text/javascript\">
//<![CDATA[
try{document.gallery.title.focus();}catch(e){}
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "edit_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 98,  277 => 96,  275 => 95,  269 => 93,  263 => 92,  260 => 91,  257 => 90,  255 => 89,  248 => 87,  245 => 86,  232 => 76,  225 => 75,  214 => 68,  205 => 65,  193 => 58,  186 => 56,  180 => 55,  173 => 53,  167 => 52,  163 => 51,  155 => 45,  133 => 43,  128 => 42,  124 => 41,  110 => 31,  106 => 30,  90 => 25,  80 => 21,  77 => 20,  61 => 17,  56 => 16,  46 => 14,  41 => 13,  103 => 51,  97 => 47,  79 => 45,  74 => 44,  65 => 40,  59 => 37,  134 => 70,  127 => 69,  116 => 68,  108 => 66,  105 => 65,  93 => 26,  49 => 58,  44 => 12,  39 => 11,  36 => 12,  188 => 47,  182 => 43,  164 => 41,  159 => 40,  150 => 36,  144 => 33,  137 => 28,  118 => 24,  113 => 67,  102 => 22,  84 => 21,  81 => 20,  53 => 18,  27 => 12,  20 => 8,  86 => 35,  83 => 22,  70 => 31,  67 => 19,  64 => 29,  55 => 24,  51 => 15,  48 => 22,  38 => 20,  34 => 16,  24 => 12,  37 => 14,  26 => 10,  22 => 9,  35 => 17,  31 => 11,  25 => 9,  21 => 9,  17 => 7,);
    }
}
