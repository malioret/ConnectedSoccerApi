<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_d420a07b063b7201c4b2fa810483adfc450d322ee59ffc9b4b6661601d083616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f952084822800616644fecf1677bd3aeb23c9a766567efe27fc7166b0dc1da = $this->env->getExtension("native_profiler");
        $__internal_a4f952084822800616644fecf1677bd3aeb23c9a766567efe27fc7166b0dc1da->enter($__internal_a4f952084822800616644fecf1677bd3aeb23c9a766567efe27fc7166b0dc1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_a4f952084822800616644fecf1677bd3aeb23c9a766567efe27fc7166b0dc1da->leave($__internal_a4f952084822800616644fecf1677bd3aeb23c9a766567efe27fc7166b0dc1da_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_143ebc2208cf08a9940b727133bb7f2d7a5fdf91276a15c8a72e03554afa75e1 = $this->env->getExtension("native_profiler");
        $__internal_143ebc2208cf08a9940b727133bb7f2d7a5fdf91276a15c8a72e03554afa75e1->enter($__internal_143ebc2208cf08a9940b727133bb7f2d7a5fdf91276a15c8a72e03554afa75e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_143ebc2208cf08a9940b727133bb7f2d7a5fdf91276a15c8a72e03554afa75e1->leave($__internal_143ebc2208cf08a9940b727133bb7f2d7a5fdf91276a15c8a72e03554afa75e1_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
