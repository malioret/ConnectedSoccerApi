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
        $__internal_f9b46fd14a46fa351622c0791af032fdf33b4731b5ae3706ffd1f5d01084b3f2 = $this->env->getExtension("native_profiler");
        $__internal_f9b46fd14a46fa351622c0791af032fdf33b4731b5ae3706ffd1f5d01084b3f2->enter($__internal_f9b46fd14a46fa351622c0791af032fdf33b4731b5ae3706ffd1f5d01084b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_f9b46fd14a46fa351622c0791af032fdf33b4731b5ae3706ffd1f5d01084b3f2->leave($__internal_f9b46fd14a46fa351622c0791af032fdf33b4731b5ae3706ffd1f5d01084b3f2_prof);

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
