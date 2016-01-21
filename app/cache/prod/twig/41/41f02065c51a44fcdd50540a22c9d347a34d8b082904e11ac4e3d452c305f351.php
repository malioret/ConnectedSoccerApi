<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e36fac475731c9ec305ed3521b75051c41f901a5470be7f9b66176669af2050a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5307046f2e42f056e042bf50b210d4c5eb7dc8c2481efb18fbc4125d03cec430 = $this->env->getExtension("native_profiler");
        $__internal_5307046f2e42f056e042bf50b210d4c5eb7dc8c2481efb18fbc4125d03cec430->enter($__internal_5307046f2e42f056e042bf50b210d4c5eb7dc8c2481efb18fbc4125d03cec430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_5307046f2e42f056e042bf50b210d4c5eb7dc8c2481efb18fbc4125d03cec430->leave($__internal_5307046f2e42f056e042bf50b210d4c5eb7dc8c2481efb18fbc4125d03cec430_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4eef1e7c673b4be0816562b0e87c564b5846bafa30049859622f88ea406ea19a = $this->env->getExtension("native_profiler");
        $__internal_4eef1e7c673b4be0816562b0e87c564b5846bafa30049859622f88ea406ea19a->enter($__internal_4eef1e7c673b4be0816562b0e87c564b5846bafa30049859622f88ea406ea19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4eef1e7c673b4be0816562b0e87c564b5846bafa30049859622f88ea406ea19a->leave($__internal_4eef1e7c673b4be0816562b0e87c564b5846bafa30049859622f88ea406ea19a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
