<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_0805cafd7952761c7dfc06b1dd6bba3d1f12be55df728e114446824bb3be7fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0e2433b1155572f6445029de6decf0b878871f817625f91545d3dcdcc6227a6 = $this->env->getExtension("native_profiler");
        $__internal_e0e2433b1155572f6445029de6decf0b878871f817625f91545d3dcdcc6227a6->enter($__internal_e0e2433b1155572f6445029de6decf0b878871f817625f91545d3dcdcc6227a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e2433b1155572f6445029de6decf0b878871f817625f91545d3dcdcc6227a6->leave($__internal_e0e2433b1155572f6445029de6decf0b878871f817625f91545d3dcdcc6227a6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_13e4a3684474eaae178427c1ce04a6c7140c5cd17c389616fb5e6bd64b919dfb = $this->env->getExtension("native_profiler");
        $__internal_13e4a3684474eaae178427c1ce04a6c7140c5cd17c389616fb5e6bd64b919dfb->enter($__internal_13e4a3684474eaae178427c1ce04a6c7140c5cd17c389616fb5e6bd64b919dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_13e4a3684474eaae178427c1ce04a6c7140c5cd17c389616fb5e6bd64b919dfb->leave($__internal_13e4a3684474eaae178427c1ce04a6c7140c5cd17c389616fb5e6bd64b919dfb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
