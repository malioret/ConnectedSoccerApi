<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_8fd24ce1f2c3d4df3d871bae1f65342eb94d8c29bb2e79278e298c3cf7a48d02 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_781eaaa88ff4eb9b22f0a534954e87a8f7a1aa3f2c4ab4b1e7442aad664bb76b = $this->env->getExtension("native_profiler");
        $__internal_781eaaa88ff4eb9b22f0a534954e87a8f7a1aa3f2c4ab4b1e7442aad664bb76b->enter($__internal_781eaaa88ff4eb9b22f0a534954e87a8f7a1aa3f2c4ab4b1e7442aad664bb76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781eaaa88ff4eb9b22f0a534954e87a8f7a1aa3f2c4ab4b1e7442aad664bb76b->leave($__internal_781eaaa88ff4eb9b22f0a534954e87a8f7a1aa3f2c4ab4b1e7442aad664bb76b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9beb8f5a263eb4fb3b412757aaa30b279d09289a99d6f4196348a9e2219b3a86 = $this->env->getExtension("native_profiler");
        $__internal_9beb8f5a263eb4fb3b412757aaa30b279d09289a99d6f4196348a9e2219b3a86->enter($__internal_9beb8f5a263eb4fb3b412757aaa30b279d09289a99d6f4196348a9e2219b3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_9beb8f5a263eb4fb3b412757aaa30b279d09289a99d6f4196348a9e2219b3a86->leave($__internal_9beb8f5a263eb4fb3b412757aaa30b279d09289a99d6f4196348a9e2219b3a86_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
