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
        $__internal_c7adeac8ad6e648821f731cc09c5ad83de182eb6d7f1cba6fa3d458094a037f5 = $this->env->getExtension("native_profiler");
        $__internal_c7adeac8ad6e648821f731cc09c5ad83de182eb6d7f1cba6fa3d458094a037f5->enter($__internal_c7adeac8ad6e648821f731cc09c5ad83de182eb6d7f1cba6fa3d458094a037f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c7adeac8ad6e648821f731cc09c5ad83de182eb6d7f1cba6fa3d458094a037f5->leave($__internal_c7adeac8ad6e648821f731cc09c5ad83de182eb6d7f1cba6fa3d458094a037f5_prof);

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
