<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_afe62c247c25ee7dbdaba325d9de120e8d2bbd01c8ca5c47d2ab5ae8c69a9fe6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a8d5727ae1450e169b4aadc8b6731765141dd8267f3967a371663b15dbdffb = $this->env->getExtension("native_profiler");
        $__internal_87a8d5727ae1450e169b4aadc8b6731765141dd8267f3967a371663b15dbdffb->enter($__internal_87a8d5727ae1450e169b4aadc8b6731765141dd8267f3967a371663b15dbdffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a8d5727ae1450e169b4aadc8b6731765141dd8267f3967a371663b15dbdffb->leave($__internal_87a8d5727ae1450e169b4aadc8b6731765141dd8267f3967a371663b15dbdffb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_44041338e93d42c409c461f96441cc689920f2b1207d6e4ef90154b631a78dfa = $this->env->getExtension("native_profiler");
        $__internal_44041338e93d42c409c461f96441cc689920f2b1207d6e4ef90154b631a78dfa->enter($__internal_44041338e93d42c409c461f96441cc689920f2b1207d6e4ef90154b631a78dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_44041338e93d42c409c461f96441cc689920f2b1207d6e4ef90154b631a78dfa->leave($__internal_44041338e93d42c409c461f96441cc689920f2b1207d6e4ef90154b631a78dfa_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
