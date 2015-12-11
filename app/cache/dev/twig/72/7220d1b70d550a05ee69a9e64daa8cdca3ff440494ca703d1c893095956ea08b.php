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
        $__internal_4b57aa788a55834eb0a8f90a4947fbf4d534a38e57760258b45fed4e67dc8148 = $this->env->getExtension("native_profiler");
        $__internal_4b57aa788a55834eb0a8f90a4947fbf4d534a38e57760258b45fed4e67dc8148->enter($__internal_4b57aa788a55834eb0a8f90a4947fbf4d534a38e57760258b45fed4e67dc8148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b57aa788a55834eb0a8f90a4947fbf4d534a38e57760258b45fed4e67dc8148->leave($__internal_4b57aa788a55834eb0a8f90a4947fbf4d534a38e57760258b45fed4e67dc8148_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fd21d027b9efa56bccede2de1fce7c25bb8e21caa63ba617487427edad23c593 = $this->env->getExtension("native_profiler");
        $__internal_fd21d027b9efa56bccede2de1fce7c25bb8e21caa63ba617487427edad23c593->enter($__internal_fd21d027b9efa56bccede2de1fce7c25bb8e21caa63ba617487427edad23c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_fd21d027b9efa56bccede2de1fce7c25bb8e21caa63ba617487427edad23c593->leave($__internal_fd21d027b9efa56bccede2de1fce7c25bb8e21caa63ba617487427edad23c593_prof);

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
