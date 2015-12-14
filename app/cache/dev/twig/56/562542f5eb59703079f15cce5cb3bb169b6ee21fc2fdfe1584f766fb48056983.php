<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_dda8586d47b30375439de6d45f58d950c27b3f9f8443a9459623de22f6a95fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a60b06af68cb8543db363bb099cc562a23af63e461908440901a203b7df73e = $this->env->getExtension("native_profiler");
        $__internal_87a60b06af68cb8543db363bb099cc562a23af63e461908440901a203b7df73e->enter($__internal_87a60b06af68cb8543db363bb099cc562a23af63e461908440901a203b7df73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 68
        echo "
";
        
        $__internal_87a60b06af68cb8543db363bb099cc562a23af63e461908440901a203b7df73e->leave($__internal_87a60b06af68cb8543db363bb099cc562a23af63e461908440901a203b7df73e_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_5724bfb4e881d0915546ad9ec4db1604e91a7a307ef1a773e2c90f044ca06277 = $this->env->getExtension("native_profiler");
        $__internal_5724bfb4e881d0915546ad9ec4db1604e91a7a307ef1a773e2c90f044ca06277->enter($__internal_5724bfb4e881d0915546ad9ec4db1604e91a7a307ef1a773e2c90f044ca06277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_5724bfb4e881d0915546ad9ec4db1604e91a7a307ef1a773e2c90f044ca06277->leave($__internal_5724bfb4e881d0915546ad9ec4db1604e91a7a307ef1a773e2c90f044ca06277_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_695b8f26b4763de1a9f8f17e42ed5c24e4283b96dd4ae0234b93dfecfd2cac59 = $this->env->getExtension("native_profiler");
        $__internal_695b8f26b4763de1a9f8f17e42ed5c24e4283b96dd4ae0234b93dfecfd2cac59->enter($__internal_695b8f26b4763de1a9f8f17e42ed5c24e4283b96dd4ae0234b93dfecfd2cac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"form-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_695b8f26b4763de1a9f8f17e42ed5c24e4283b96dd4ae0234b93dfecfd2cac59->leave($__internal_695b8f26b4763de1a9f8f17e42ed5c24e4283b96dd4ae0234b93dfecfd2cac59_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_b18e6a770e308309cbc15904403538a6ad29cc625e31004e605dc69a59177d90 = $this->env->getExtension("native_profiler");
        $__internal_b18e6a770e308309cbc15904403538a6ad29cc625e31004e605dc69a59177d90->enter($__internal_b18e6a770e308309cbc15904403538a6ad29cc625e31004e605dc69a59177d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_b18e6a770e308309cbc15904403538a6ad29cc625e31004e605dc69a59177d90->leave($__internal_b18e6a770e308309cbc15904403538a6ad29cc625e31004e605dc69a59177d90_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_4022ffe04afe10929890ebe77ea9183e911637c1dbd39da3d1f91333906c5987 = $this->env->getExtension("native_profiler");
        $__internal_4022ffe04afe10929890ebe77ea9183e911637c1dbd39da3d1f91333906c5987->enter($__internal_4022ffe04afe10929890ebe77ea9183e911637c1dbd39da3d1f91333906c5987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"form-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4022ffe04afe10929890ebe77ea9183e911637c1dbd39da3d1f91333906c5987->leave($__internal_4022ffe04afe10929890ebe77ea9183e911637c1dbd39da3d1f91333906c5987_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 63,  194 => 61,  188 => 59,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  167 => 52,  157 => 47,  155 => 46,  150 => 45,  147 => 44,  141 => 42,  138 => 41,  132 => 40,  117 => 34,  113 => 32,  107 => 30,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  86 => 23,  76 => 18,  74 => 17,  69 => 16,  66 => 15,  60 => 13,  57 => 12,  51 => 11,  43 => 68,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
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
/* {% block sonata_type_date_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('date_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*             <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_date_picker_widget_html %}*/
/* */
/* {% block sonata_type_date_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="form-group">*/
/*                 {{ block('sonata_type_date_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_date_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_date_picker_widget %}*/
/* */
/* {% block sonata_type_datetime_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dtp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('datetime_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*           <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_datetime_picker_widget_html %}*/
/* */
/* {% block sonata_type_datetime_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="form-group">*/
/*                 {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_datetime_picker_widget %}*/
/* */
/* */
