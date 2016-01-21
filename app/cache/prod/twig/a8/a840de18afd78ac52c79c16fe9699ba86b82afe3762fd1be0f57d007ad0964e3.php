<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_41a52591cd08d26e6d1bc79bc52aecfd6ea372059f0c2e3878455b19942a3a11 extends Twig_Template
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
        $__internal_054a90a3a2a407d4540d5e44347e7f34b2d6e3d8a6d37fed2608dc8b04414328 = $this->env->getExtension("native_profiler");
        $__internal_054a90a3a2a407d4540d5e44347e7f34b2d6e3d8a6d37fed2608dc8b04414328->enter($__internal_054a90a3a2a407d4540d5e44347e7f34b2d6e3d8a6d37fed2608dc8b04414328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_054a90a3a2a407d4540d5e44347e7f34b2d6e3d8a6d37fed2608dc8b04414328->leave($__internal_054a90a3a2a407d4540d5e44347e7f34b2d6e3d8a6d37fed2608dc8b04414328_prof);

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
