<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_30bb0e7278c204dd949c188226e5fefb164b7eabaf5aa3b1bc5517d918934843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beec1c0ecdd1b7d4cb6cee0a461cbd17edccd2ac38343e4f06a9388dfd081b14 = $this->env->getExtension("native_profiler");
        $__internal_beec1c0ecdd1b7d4cb6cee0a461cbd17edccd2ac38343e4f06a9388dfd081b14->enter($__internal_beec1c0ecdd1b7d4cb6cee0a461cbd17edccd2ac38343e4f06a9388dfd081b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
        <title>
        ";
        // line 68
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 88
        echo "        </title>
    </head>
    <body ";
        // line 90
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 91
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 333
        echo "    </body>
</html>
";
        
        $__internal_beec1c0ecdd1b7d4cb6cee0a461cbd17edccd2ac38343e4f06a9388dfd081b14->leave($__internal_beec1c0ecdd1b7d4cb6cee0a461cbd17edccd2ac38343e4f06a9388dfd081b14_prof);

    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_dc200d5e7869a2c4c4262dcddcfb52e4ea8d571657b2d97591bd487059f1a92c = $this->env->getExtension("native_profiler");
        $__internal_dc200d5e7869a2c4c4262dcddcfb52e4ea8d571657b2d97591bd487059f1a92c->enter($__internal_dc200d5e7869a2c4c4262dcddcfb52e4ea8d571657b2d97591bd487059f1a92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_dc200d5e7869a2c4c4262dcddcfb52e4ea8d571657b2d97591bd487059f1a92c->leave($__internal_dc200d5e7869a2c4c4262dcddcfb52e4ea8d571657b2d97591bd487059f1a92c_prof);

    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_a48cc7b41ef631e323a1ef8b29b4708f49cb6866be3a7283b0d28c6d110e03f8 = $this->env->getExtension("native_profiler");
        $__internal_a48cc7b41ef631e323a1ef8b29b4708f49cb6866be3a7283b0d28c6d110e03f8->enter($__internal_a48cc7b41ef631e323a1ef8b29b4708f49cb6866be3a7283b0d28c6d110e03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_a48cc7b41ef631e323a1ef8b29b4708f49cb6866be3a7283b0d28c6d110e03f8->leave($__internal_a48cc7b41ef631e323a1ef8b29b4708f49cb6866be3a7283b0d28c6d110e03f8_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e980285fd183a161ac6d544582ce280f09353d0080aafe8e2acf8a8f6c302a5e = $this->env->getExtension("native_profiler");
        $__internal_e980285fd183a161ac6d544582ce280f09353d0080aafe8e2acf8a8f6c302a5e->enter($__internal_e980285fd183a161ac6d544582ce280f09353d0080aafe8e2acf8a8f6c302a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        
        $__internal_e980285fd183a161ac6d544582ce280f09353d0080aafe8e2acf8a8f6c302a5e->leave($__internal_e980285fd183a161ac6d544582ce280f09353d0080aafe8e2acf8a8f6c302a5e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1c15186a6a42b9041deebada750faaa5050d75d45db2c03fe3867f6f3e65138 = $this->env->getExtension("native_profiler");
        $__internal_f1c15186a6a42b9041deebada750faaa5050d75d45db2c03fe3867f6f3e65138->enter($__internal_f1c15186a6a42b9041deebada750faaa5050d75d45db2c03fe3867f6f3e65138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            ";
        // line 55
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 56
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 57
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 58
            echo "
                ";
            // line 60
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 61
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonataadmin/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "
        ";
        
        $__internal_f1c15186a6a42b9041deebada750faaa5050d75d45db2c03fe3867f6f3e65138->leave($__internal_f1c15186a6a42b9041deebada750faaa5050d75d45db2c03fe3867f6f3e65138_prof);

    }

    // line 68
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_6370427b6af6bc6b8b1531f0ef87ace4d1e07c8704ec53031270ab7c7c243890 = $this->env->getExtension("native_profiler");
        $__internal_6370427b6af6bc6b8b1531f0ef87ace4d1e07c8704ec53031270ab7c7c243890->enter($__internal_6370427b6af6bc6b8b1531f0ef87ace4d1e07c8704ec53031270ab7c7c243890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 69
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 71
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 72
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 74
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 75
                echo "                    -
                    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 77
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 78
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 79
                            echo "                                &gt;
                            ";
                        }
                        // line 81
                        echo "
                            ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 84
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_6370427b6af6bc6b8b1531f0ef87ace4d1e07c8704ec53031270ab7c7c243890->leave($__internal_6370427b6af6bc6b8b1531f0ef87ace4d1e07c8704ec53031270ab7c7c243890_prof);

    }

    // line 90
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_41c7301efc172dc95f1dc27b532a07d555708a680f5ffef142a433bfedfd6b44 = $this->env->getExtension("native_profiler");
        $__internal_41c7301efc172dc95f1dc27b532a07d555708a680f5ffef142a433bfedfd6b44->enter($__internal_41c7301efc172dc95f1dc27b532a07d555708a680f5ffef142a433bfedfd6b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_41c7301efc172dc95f1dc27b532a07d555708a680f5ffef142a433bfedfd6b44->leave($__internal_41c7301efc172dc95f1dc27b532a07d555708a680f5ffef142a433bfedfd6b44_prof);

    }

    // line 91
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ed40117b0ba24ba46a9df2212688a57e0217d291d9ca8ba5b5959408b9758cdb = $this->env->getExtension("native_profiler");
        $__internal_ed40117b0ba24ba46a9df2212688a57e0217d291d9ca8ba5b5959408b9758cdb->enter($__internal_ed40117b0ba24ba46a9df2212688a57e0217d291d9ca8ba5b5959408b9758cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 92
        echo "            <header class=\"header\">
                ";
        // line 93
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 100
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 112
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 173
        echo "            </header>
        ";
        
        $__internal_ed40117b0ba24ba46a9df2212688a57e0217d291d9ca8ba5b5959408b9758cdb->leave($__internal_ed40117b0ba24ba46a9df2212688a57e0217d291d9ca8ba5b5959408b9758cdb_prof);

    }

    // line 93
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_70d669d81644d5240e23038a52bb44edda371ecb41884ea10c2936ce0807045a = $this->env->getExtension("native_profiler");
        $__internal_70d669d81644d5240e23038a52bb44edda371ecb41884ea10c2936ce0807045a->enter($__internal_70d669d81644d5240e23038a52bb44edda371ecb41884ea10c2936ce0807045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 94
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_70d669d81644d5240e23038a52bb44edda371ecb41884ea10c2936ce0807045a->leave($__internal_70d669d81644d5240e23038a52bb44edda371ecb41884ea10c2936ce0807045a_prof);

    }

    // line 100
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1b8a188cd85da2842cbddb2b0b7785120c72920d6318bd7d85ba17eb4db87d90 = $this->env->getExtension("native_profiler");
        $__internal_1b8a188cd85da2842cbddb2b0b7785120c72920d6318bd7d85ba17eb4db87d90->enter($__internal_1b8a188cd85da2842cbddb2b0b7785120c72920d6318bd7d85ba17eb4db87d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 101
        echo "                    ";
        ob_start();
        // line 102
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 103
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 104
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 106
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 107
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 109
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 111
        echo "                ";
        
        $__internal_1b8a188cd85da2842cbddb2b0b7785120c72920d6318bd7d85ba17eb4db87d90->leave($__internal_1b8a188cd85da2842cbddb2b0b7785120c72920d6318bd7d85ba17eb4db87d90_prof);

    }

    // line 112
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4f683430f64ededc3cdbfac43824f95bab8f963fd7344c3d5daed4e156e1eb66 = $this->env->getExtension("native_profiler");
        $__internal_4f683430f64ededc3cdbfac43824f95bab8f963fd7344c3d5daed4e156e1eb66->enter($__internal_4f683430f64ededc3cdbfac43824f95bab8f963fd7344c3d5daed4e156e1eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 113
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 114
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 123
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 148
            echo "                            </div>

                            ";
            // line 150
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 170
            echo "                        </nav>
                    ";
        }
        // line 172
        echo "                ";
        
        $__internal_4f683430f64ededc3cdbfac43824f95bab8f963fd7344c3d5daed4e156e1eb66->leave($__internal_4f683430f64ededc3cdbfac43824f95bab8f963fd7344c3d5daed4e156e1eb66_prof);

    }

    // line 123
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c46badeaa52021711275a3da260a32d8e9e148df844a808b4d25a21c290cdf26 = $this->env->getExtension("native_profiler");
        $__internal_c46badeaa52021711275a3da260a32d8e9e148df844a808b4d25a21c290cdf26->enter($__internal_c46badeaa52021711275a3da260a32d8e9e148df844a808b4d25a21c290cdf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 124
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 125
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 126
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 127
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 128
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 129
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 130
                            echo "                                                            <li>
                                                                ";
                            // line 131
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 132
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 134
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 136
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 138
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 140
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                ";
                }
                // line 142
                echo "                                            ";
            } else {
                // line 143
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 145
            echo "                                        </ol>
                                    ";
        }
        // line 147
        echo "                                ";
        
        $__internal_c46badeaa52021711275a3da260a32d8e9e148df844a808b4d25a21c290cdf26->leave($__internal_c46badeaa52021711275a3da260a32d8e9e148df844a808b4d25a21c290cdf26_prof);

    }

    // line 150
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_bde310939cd325abad2781cdb24c6f26d6bafea52790d4e18e1d93558af87d41 = $this->env->getExtension("native_profiler");
        $__internal_bde310939cd325abad2781cdb24c6f26d6bafea52790d4e18e1d93558af87d41->enter($__internal_bde310939cd325abad2781cdb24c6f26d6bafea52790d4e18e1d93558af87d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 151
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 157
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 157)->display($context);
        // line 158
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 164
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 164)->display($context);
        // line 165
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
        
        $__internal_bde310939cd325abad2781cdb24c6f26d6bafea52790d4e18e1d93558af87d41->leave($__internal_bde310939cd325abad2781cdb24c6f26d6bafea52790d4e18e1d93558af87d41_prof);

    }

    // line 176
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0ee9af2e36b3aec082fe12fbd4b4e851739b957353451d8f467c0c74432aeb9e = $this->env->getExtension("native_profiler");
        $__internal_0ee9af2e36b3aec082fe12fbd4b4e851739b957353451d8f467c0c74432aeb9e->enter($__internal_0ee9af2e36b3aec082fe12fbd4b4e851739b957353451d8f467c0c74432aeb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 177
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 178
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
                <aside class=\"right-side\">
                    ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 329
        echo "                </aside>

            </div>
        ";
        
        $__internal_0ee9af2e36b3aec082fe12fbd4b4e851739b957353451d8f467c0c74432aeb9e->leave($__internal_0ee9af2e36b3aec082fe12fbd4b4e851739b957353451d8f467c0c74432aeb9e_prof);

    }

    // line 178
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4d1d55aaa15272351435df087225955ca0a87748fd1781ebb66e64002d88b3af = $this->env->getExtension("native_profiler");
        $__internal_4d1d55aaa15272351435df087225955ca0a87748fd1781ebb66e64002d88b3af->enter($__internal_4d1d55aaa15272351435df087225955ca0a87748fd1781ebb66e64002d88b3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 179
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 181
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                        </section>
                    </aside>
                ";
        
        $__internal_4d1d55aaa15272351435df087225955ca0a87748fd1781ebb66e64002d88b3af->leave($__internal_4d1d55aaa15272351435df087225955ca0a87748fd1781ebb66e64002d88b3af_prof);

    }

    // line 181
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_58daa5b5f1af49486ccbd7f81f6dea2767fbcf6faa50f70c452d222f39b5f032 = $this->env->getExtension("native_profiler");
        $__internal_58daa5b5f1af49486ccbd7f81f6dea2767fbcf6faa50f70c452d222f39b5f032->enter($__internal_58daa5b5f1af49486ccbd7f81f6dea2767fbcf6faa50f70c452d222f39b5f032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 182
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 196
        echo "
                                ";
        // line 197
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 198
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 243
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                            ";
        
        $__internal_58daa5b5f1af49486ccbd7f81f6dea2767fbcf6faa50f70c452d222f39b5f032->leave($__internal_58daa5b5f1af49486ccbd7f81f6dea2767fbcf6faa50f70c452d222f39b5f032_prof);

    }

    // line 182
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_bbf9671f78e41bb7b96ecf9871f9dcb560d6153ecf7db715b858d6053788328e = $this->env->getExtension("native_profiler");
        $__internal_bbf9671f78e41bb7b96ecf9871f9dcb560d6153ecf7db715b858d6053788328e->enter($__internal_bbf9671f78e41bb7b96ecf9871f9dcb560d6153ecf7db715b858d6053788328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 183
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 184
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 195
        echo "                                ";
        
        $__internal_bbf9671f78e41bb7b96ecf9871f9dcb560d6153ecf7db715b858d6053788328e->leave($__internal_bbf9671f78e41bb7b96ecf9871f9dcb560d6153ecf7db715b858d6053788328e_prof);

    }

    // line 197
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_db916a6d0ecd68b90fbd8cff71ca5694797c5db7beb4b2e08a84f1c7a09d7777 = $this->env->getExtension("native_profiler");
        $__internal_db916a6d0ecd68b90fbd8cff71ca5694797c5db7beb4b2e08a84f1c7a09d7777->enter($__internal_db916a6d0ecd68b90fbd8cff71ca5694797c5db7beb4b2e08a84f1c7a09d7777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_db916a6d0ecd68b90fbd8cff71ca5694797c5db7beb4b2e08a84f1c7a09d7777->leave($__internal_db916a6d0ecd68b90fbd8cff71ca5694797c5db7beb4b2e08a84f1c7a09d7777_prof);

    }

    // line 198
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_f01b0e21be10571f3e568a4b896fe82f5e4232e08fb474905fada438520a1585 = $this->env->getExtension("native_profiler");
        $__internal_f01b0e21be10571f3e568a4b896fe82f5e4232e08fb474905fada438520a1585->enter($__internal_f01b0e21be10571f3e568a4b896fe82f5e4232e08fb474905fada438520a1585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 199
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 200
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 202
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 203
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 204
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 205
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "
                                                ";
                // line 208
                echo "                                                ";
                $context["item_count"] = 0;
                // line 209
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 210
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 211
                            echo "                                                        ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 212
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 213
                                echo "                                                        ";
                            }
                            // line 214
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo "                                                ";
                }
                // line 216
                echo "
                                                ";
                // line 217
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 218
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 219
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 220
                        echo "                                                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 221
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 222
                            echo "                                                        ";
                        }
                        // line 223
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 226
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 227
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 230
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 232
                        echo "                                                                ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 233
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 235
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 239
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                                        </ul>
                                    ";
        }
        // line 242
        echo "                                ";
        
        $__internal_f01b0e21be10571f3e568a4b896fe82f5e4232e08fb474905fada438520a1585->leave($__internal_f01b0e21be10571f3e568a4b896fe82f5e4232e08fb474905fada438520a1585_prof);

    }

    // line 243
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_325f488c0b7762f96d98c673ff5c986329a54f5e0d532f69546b8935cb7bacd2 = $this->env->getExtension("native_profiler");
        $__internal_325f488c0b7762f96d98c673ff5c986329a54f5e0d532f69546b8935cb7bacd2->enter($__internal_325f488c0b7762f96d98c673ff5c986329a54f5e0d532f69546b8935cb7bacd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 244
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
        
        $__internal_325f488c0b7762f96d98c673ff5c986329a54f5e0d532f69546b8935cb7bacd2->leave($__internal_325f488c0b7762f96d98c673ff5c986329a54f5e0d532f69546b8935cb7bacd2_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c3aef2634629ddb6268456e96df9f616e3c6148b75973301383962dc389c39be = $this->env->getExtension("native_profiler");
        $__internal_c3aef2634629ddb6268456e96df9f616e3c6148b75973301383962dc389c39be->enter($__internal_c3aef2634629ddb6268456e96df9f616e3c6148b75973301383962dc389c39be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                        <section class=\"content-header\">
                            ";
        // line 254
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 288
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 291
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 327
        echo "                        </section>
                    ";
        
        $__internal_c3aef2634629ddb6268456e96df9f616e3c6148b75973301383962dc389c39be->leave($__internal_c3aef2634629ddb6268456e96df9f616e3c6148b75973301383962dc389c39be_prof);

    }

    // line 254
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_2d08257b8bea5420b6a1797fc20c16afa90c779ede3cd97afca5304c6192482e = $this->env->getExtension("native_profiler");
        $__internal_2d08257b8bea5420b6a1797fc20c16afa90c779ede3cd97afca5304c6192482e->enter($__internal_2d08257b8bea5420b6a1797fc20c16afa90c779ede3cd97afca5304c6192482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 255
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 286
        echo "
                            ";
        
        $__internal_2d08257b8bea5420b6a1797fc20c16afa90c779ede3cd97afca5304c6192482e->leave($__internal_2d08257b8bea5420b6a1797fc20c16afa90c779ede3cd97afca5304c6192482e_prof);

    }

    // line 255
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_8f2b2fa595834f456ed84a28352a67aa21a3041a3221e92973185773b6d65512 = $this->env->getExtension("native_profiler");
        $__internal_8f2b2fa595834f456ed84a28352a67aa21a3041a3221e92973185773b6d65512->enter($__internal_8f2b2fa595834f456ed84a28352a67aa21a3041a3221e92973185773b6d65512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 256
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 257
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 258
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 265
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 267
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 268
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 270
            echo "                                                </div>

                                                ";
            // line 272
            if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 273
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 275
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 277
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 282
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 285
        echo "                                ";
        
        $__internal_8f2b2fa595834f456ed84a28352a67aa21a3041a3221e92973185773b6d65512->leave($__internal_8f2b2fa595834f456ed84a28352a67aa21a3041a3221e92973185773b6d65512_prof);

    }

    // line 258
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_6ff0cf1cc7902f8f60c5509b1544005c634c2bb7351b7c4ababf7dd6e6436ce0 = $this->env->getExtension("native_profiler");
        $__internal_6ff0cf1cc7902f8f60c5509b1544005c634c2bb7351b7c4ababf7dd6e6436ce0->enter($__internal_6ff0cf1cc7902f8f60c5509b1544005c634c2bb7351b7c4ababf7dd6e6436ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 259
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 260
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 261
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 264
        echo "                                            ";
        
        $__internal_6ff0cf1cc7902f8f60c5509b1544005c634c2bb7351b7c4ababf7dd6e6436ce0->leave($__internal_6ff0cf1cc7902f8f60c5509b1544005c634c2bb7351b7c4ababf7dd6e6436ce0_prof);

    }

    // line 291
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_5f87749963130a66ff1586fd0823bf9c59024b756d7ba0e43398042b229c3a33 = $this->env->getExtension("native_profiler");
        $__internal_5f87749963130a66ff1586fd0823bf9c59024b756d7ba0e43398042b229c3a33->enter($__internal_5f87749963130a66ff1586fd0823bf9c59024b756d7ba0e43398042b229c3a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 292
        echo "
                                ";
        // line 293
        $this->displayBlock('notice', $context, $blocks);
        // line 296
        echo "
                                ";
        // line 297
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 298
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 300
        echo "
                                ";
        // line 301
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 302
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 304
        echo "
                                ";
        // line 305
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 306
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 308
        echo "
                                ";
        // line 309
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 310
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 312
        echo "
                                ";
        // line 313
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 314
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 315
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 316
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 319
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 320
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 321
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 324
            echo "                                    </div>
                                ";
        }
        // line 326
        echo "                            ";
        
        $__internal_5f87749963130a66ff1586fd0823bf9c59024b756d7ba0e43398042b229c3a33->leave($__internal_5f87749963130a66ff1586fd0823bf9c59024b756d7ba0e43398042b229c3a33_prof);

    }

    // line 293
    public function block_notice($context, array $blocks = array())
    {
        $__internal_807f47412374a1a772787202916830ba75ed1324a838f4c495b03ef1571d1e13 = $this->env->getExtension("native_profiler");
        $__internal_807f47412374a1a772787202916830ba75ed1324a838f4c495b03ef1571d1e13->enter($__internal_807f47412374a1a772787202916830ba75ed1324a838f4c495b03ef1571d1e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 294
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 294)->display($context);
        // line 295
        echo "                                ";
        
        $__internal_807f47412374a1a772787202916830ba75ed1324a838f4c495b03ef1571d1e13->leave($__internal_807f47412374a1a772787202916830ba75ed1324a838f4c495b03ef1571d1e13_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1182 => 295,  1179 => 294,  1173 => 293,  1166 => 326,  1162 => 324,  1156 => 321,  1153 => 320,  1151 => 319,  1145 => 316,  1137 => 315,  1134 => 314,  1132 => 313,  1129 => 312,  1123 => 310,  1121 => 309,  1118 => 308,  1112 => 306,  1110 => 305,  1107 => 304,  1101 => 302,  1099 => 301,  1096 => 300,  1090 => 298,  1088 => 297,  1085 => 296,  1083 => 293,  1080 => 292,  1074 => 291,  1067 => 264,  1061 => 261,  1058 => 260,  1055 => 259,  1049 => 258,  1042 => 285,  1037 => 282,  1029 => 277,  1024 => 275,  1020 => 273,  1018 => 272,  1014 => 270,  1008 => 268,  1006 => 267,  1002 => 265,  1000 => 258,  997 => 257,  994 => 256,  988 => 255,  980 => 286,  977 => 255,  971 => 254,  963 => 327,  961 => 291,  956 => 288,  954 => 254,  951 => 253,  945 => 252,  937 => 244,  931 => 243,  924 => 242,  920 => 240,  914 => 239,  909 => 236,  903 => 235,  891 => 233,  888 => 232,  884 => 231,  878 => 230,  871 => 227,  867 => 226,  859 => 224,  853 => 223,  850 => 222,  847 => 221,  844 => 220,  839 => 219,  836 => 218,  834 => 217,  831 => 216,  828 => 215,  821 => 214,  818 => 213,  815 => 212,  812 => 211,  806 => 210,  803 => 209,  800 => 208,  797 => 206,  790 => 205,  787 => 204,  781 => 203,  778 => 202,  774 => 201,  771 => 200,  768 => 199,  762 => 198,  750 => 197,  743 => 195,  729 => 186,  723 => 184,  720 => 183,  714 => 182,  707 => 246,  704 => 243,  701 => 198,  699 => 197,  696 => 196,  693 => 182,  687 => 181,  678 => 247,  676 => 181,  672 => 179,  666 => 178,  656 => 329,  654 => 252,  650 => 250,  648 => 178,  645 => 177,  639 => 176,  628 => 165,  626 => 164,  618 => 158,  616 => 157,  608 => 151,  602 => 150,  595 => 147,  591 => 145,  585 => 143,  582 => 142,  579 => 141,  565 => 140,  559 => 138,  555 => 136,  549 => 134,  541 => 132,  539 => 131,  536 => 130,  533 => 129,  515 => 128,  512 => 127,  510 => 126,  507 => 125,  504 => 124,  498 => 123,  491 => 172,  487 => 170,  485 => 150,  481 => 148,  479 => 123,  468 => 114,  465 => 113,  459 => 112,  452 => 111,  448 => 109,  442 => 107,  439 => 106,  431 => 104,  429 => 103,  424 => 102,  421 => 101,  415 => 100,  404 => 96,  400 => 94,  394 => 93,  386 => 173,  383 => 112,  380 => 100,  378 => 93,  375 => 92,  369 => 91,  357 => 90,  350 => 87,  347 => 86,  344 => 85,  330 => 84,  325 => 82,  322 => 81,  318 => 79,  315 => 78,  312 => 77,  295 => 76,  292 => 75,  289 => 74,  283 => 72,  281 => 71,  275 => 69,  269 => 68,  261 => 64,  258 => 63,  252 => 61,  249 => 60,  246 => 58,  241 => 57,  238 => 56,  235 => 55,  232 => 53,  223 => 51,  219 => 50,  212 => 46,  208 => 44,  202 => 43,  194 => 42,  186 => 41,  182 => 39,  176 => 38,  168 => 35,  159 => 33,  155 => 32,  152 => 31,  146 => 30,  137 => 26,  131 => 25,  119 => 23,  110 => 333,  108 => 176,  105 => 175,  103 => 91,  99 => 90,  95 => 88,  93 => 68,  89 => 66,  87 => 38,  84 => 37,  82 => 30,  79 => 29,  77 => 25,  72 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview      = block('preview') %}*/
/* {% set _form         = block('form') %}*/
/* {% set _show         = block('show') %}*/
/* {% set _list_table   = block('list_table') %}*/
/* {% set _list_filters = block('list_filters') %}*/
/* {% set _tab_menu     = block('tab_menu') %}*/
/* {% set _content      = block('content') %}*/
/* {% set _title        = block('title') %}*/
/* {% set _breadcrumb   = block('breadcrumb') %}*/
/* {% set _actions      = block('actions') %}*/
/* {% set _navbar_title = block('navbar_title') %}*/
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/* */
/*             {% for stylesheet in admin_pool.getOption('stylesheets', []) %}*/
/*                 <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if admin_pool is defined and admin_pool.getOption('use_icheck') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                };*/
/*             </script>*/
/* */
/*             {% for javascript in admin_pool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if admin_pool is defined and admin_pool.getOption('use_select2') %}*/
/*                 {% set locale = app.request.locale %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonataadmin/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/*         {% block sonata_header %}*/
/*             <header class="header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                     <a class="logo" href="{{ url('sonata_admin_dashboard') }}">*/
/*                         {% if 'single_image' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <img src="{{ asset(admin_pool.titlelogo) }}" alt="{{ admin_pool.title }}">*/
/*                         {% endif %}*/
/*                         {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <span>{{ admin_pool.title }}</span>*/
/*                         {% endif %}*/
/*                     </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     {% if admin_pool is defined %}*/
/*                         <nav class="navbar navbar-static-top" role="navigation">*/
/*                             <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </a>*/
/* */
/*                             <div class="navbar-left">*/
/*                                 {% block sonata_breadcrumb %}*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in admin.breadcrumbs(action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_breadcrumb %}*/
/*                             </div>*/
/* */
/*                             {% block sonata_top_nav_menu %}*/
/*                                 <div class="navbar-right">*/
/*                                     <ul class="nav navbar-nav">*/
/*                                         <li class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             {% include admin_pool.getTemplate('add_block') %}*/
/*                                         </li>*/
/*                                         <li class="dropdown user-menu">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             <ul class="dropdown-menu dropdown-user">*/
/*                                                 {% include admin_pool.getTemplate('user_block') %}*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endblock %}*/
/*                         </nav>*/
/*                     {% endif %}*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*                 {% block sonata_left_side %}*/
/*                     <aside class="left-side sidebar-offcanvas">*/
/*                         <section class="sidebar">*/
/*                             {% block sonata_side_nav %}*/
/*                                 {% block sonata_sidebar_search %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <form action="{{ url('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                             <div class="input-group custom-search-form">*/
/*                                                 <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                     <span class="input-group-btn">*/
/*                                                         <button class="btn btn-flat" type="submit">*/
/*                                                             <i class="fa fa-search"></i>*/
/*                                                         </button>*/
/*                                                     </span>*/
/*                                             </div>*/
/*                                         </form>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_sidebar_search %}*/
/* */
/*                                 {% block side_bar_before_nav %} {% endblock %}*/
/*                                 {% block side_bar_nav %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <ul class="sidebar-menu">*/
/*                                             {% for group in admin_pool.dashboardgroups %}*/
/*                                                 {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*                                                 {% for role in group.roles if not display %}*/
/*                                                     {% set display = is_granted(role) %}*/
/*                                                 {% endfor %}*/
/* */
/*                                                 {# Do not display the group label if no item in group is available #}*/
/*                                                 {% set item_count = 0 %}*/
/*                                                 {% if display %}*/
/*                                                     {% for admin in group.items if item_count == 0 %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                             {% set item_count = item_count+1 %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if display and (item_count > 0) %}*/
/*                                                     {% set active = false %}*/
/*                                                     {% for admin in group.items %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') and app.request.get('_sonata_admin') == admin.code %}*/
/*                                                             {% set active = true %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                     <li class="treeview{% if active %} active{% endif %}">*/
/*                                                         <a href="#">*/
/*                                                             {% if group.icon|default() %}{{ group.icon|raw }}{% endif %}*/
/*                                                             <span>{{ group.label|trans({}, group.label_catalogue) }}</span>*/
/*                                                             <i class="fa pull-right fa-angle-left"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu{% if active %} active{% endif %}">*/
/*                                                             {% for admin in group.items %}*/
/*                                                                 {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                                     <li{% if app.request.get('_sonata_admin') == admin.code %} class="active"{% endif %}><a href="{{ admin.generateUrl('list')}}"><i class="fa fa-angle-double-right"></i> {{ admin.label|trans({}, admin.translationdomain) }}</a></li>*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                 {% endblock side_bar_nav %}*/
/*                                 {% block side_bar_after_nav %}*/
/*                                     <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px"><a href="http://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a></p>*/
/*                                 {% endblock %}*/
/*                             {% endblock sonata_side_nav %}*/
/*                         </section>*/
/*                     </aside>*/
/*                 {% endblock sonata_left_side %}*/
/* */
/*                 <aside class="right-side">*/
/*                     {% block sonata_page_content %}*/
/*                         <section class="content-header">*/
/*                             {% block sonata_page_content_header %}*/
/*                                 {% block sonata_page_content_nav %}*/
/*                                     {% if _tab_menu is not empty or _actions is not empty %}*/
/*                                         <nav class="navbar navbar-default" role="navigation">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <span class="navbar-brand">{{ _navbar_title|raw }}</span>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/*                                             <div class="container-fluid">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                     <ul class="nav navbar-nav navbar-right">*/
/*                                                         <li class="dropdown sonata-actions">*/
/*                                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                             <ul class="dropdown-menu" role="menu">*/
/*                                                                 {{ _actions|raw }}*/
/*                                                             </ul>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </nav>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_page_content_nav %}*/
/* */
/*                             {% endblock sonata_page_content_header %}*/
/*                         </section>*/
/* */
/*                         <section class="content">*/
/*                             {% block sonata_admin_content %}*/
/* */
/*                                 {% block notice %}*/
/*                                     {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                                 {% endblock notice %}*/
/* */
/*                                 {% if _preview is not empty %}*/
/*                                     <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _content is not empty %}*/
/*                                     <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _show is not empty %}*/
/*                                     <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _form is not empty %}*/
/*                                     <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                     <div class="row">*/
/*                                         <div class="sonata-ba-list {% if _list_filters|trim %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                                             {{ _list_table|raw }}*/
/*                                         </div>*/
/* */
/*                                         {% if _list_filters|trim %}*/
/*                                             <div class="sonata-ba-filter col-md-2">*/
/*                                                 {{ _list_filters|raw }}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_admin_content %}*/
/*                         </section>*/
/*                     {% endblock sonata_page_content %}*/
/*                 </aside>*/
/* */
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </body>*/
/* </html>*/
/* */
