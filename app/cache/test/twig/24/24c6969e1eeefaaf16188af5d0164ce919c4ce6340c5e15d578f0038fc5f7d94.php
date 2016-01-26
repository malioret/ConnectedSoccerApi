<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_baa2dac1d249e1695ff1d9ff2d6e59712986fff040a00716260164e35e11e59a extends Twig_Template
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
        $__internal_a74f98b5248afd890430994eb80da96e17762182adf2c8452ffd1dac31be4fb1 = $this->env->getExtension("native_profiler");
        $__internal_a74f98b5248afd890430994eb80da96e17762182adf2c8452ffd1dac31be4fb1->enter($__internal_a74f98b5248afd890430994eb80da96e17762182adf2c8452ffd1dac31be4fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_a74f98b5248afd890430994eb80da96e17762182adf2c8452ffd1dac31be4fb1->leave($__internal_a74f98b5248afd890430994eb80da96e17762182adf2c8452ffd1dac31be4fb1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
