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
        $__internal_24960abaa2057a80d3e219a489022c844b8e8722bacf3706a09856a14a3e4bb6 = $this->env->getExtension("native_profiler");
        $__internal_24960abaa2057a80d3e219a489022c844b8e8722bacf3706a09856a14a3e4bb6->enter($__internal_24960abaa2057a80d3e219a489022c844b8e8722bacf3706a09856a14a3e4bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24960abaa2057a80d3e219a489022c844b8e8722bacf3706a09856a14a3e4bb6->leave($__internal_24960abaa2057a80d3e219a489022c844b8e8722bacf3706a09856a14a3e4bb6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d528f34a9cfb331437a763e5604195413655ecd16cbc3516705d5eaecff84f4e = $this->env->getExtension("native_profiler");
        $__internal_d528f34a9cfb331437a763e5604195413655ecd16cbc3516705d5eaecff84f4e->enter($__internal_d528f34a9cfb331437a763e5604195413655ecd16cbc3516705d5eaecff84f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_d528f34a9cfb331437a763e5604195413655ecd16cbc3516705d5eaecff84f4e->leave($__internal_d528f34a9cfb331437a763e5604195413655ecd16cbc3516705d5eaecff84f4e_prof);

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
