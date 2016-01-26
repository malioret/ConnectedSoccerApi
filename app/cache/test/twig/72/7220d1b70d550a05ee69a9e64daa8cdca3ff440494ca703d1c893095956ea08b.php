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
        $__internal_8be20107260d9600f3eb6285c07e20272d4b70b7f2c50ee12d58dbb4d3c61ddb = $this->env->getExtension("native_profiler");
        $__internal_8be20107260d9600f3eb6285c07e20272d4b70b7f2c50ee12d58dbb4d3c61ddb->enter($__internal_8be20107260d9600f3eb6285c07e20272d4b70b7f2c50ee12d58dbb4d3c61ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be20107260d9600f3eb6285c07e20272d4b70b7f2c50ee12d58dbb4d3c61ddb->leave($__internal_8be20107260d9600f3eb6285c07e20272d4b70b7f2c50ee12d58dbb4d3c61ddb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_470e842bad3096ee8ced336f9f2351599083fbb8566c5f7a6b33b1d5b6081cb5 = $this->env->getExtension("native_profiler");
        $__internal_470e842bad3096ee8ced336f9f2351599083fbb8566c5f7a6b33b1d5b6081cb5->enter($__internal_470e842bad3096ee8ced336f9f2351599083fbb8566c5f7a6b33b1d5b6081cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_470e842bad3096ee8ced336f9f2351599083fbb8566c5f7a6b33b1d5b6081cb5->leave($__internal_470e842bad3096ee8ced336f9f2351599083fbb8566c5f7a6b33b1d5b6081cb5_prof);

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
