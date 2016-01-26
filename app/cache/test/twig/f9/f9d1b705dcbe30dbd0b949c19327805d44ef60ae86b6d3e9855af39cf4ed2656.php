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
        $__internal_02b755f8fb23f51e01e7fc4d37d7ad55587bd7ff06fb8543e9604be238d37b3c = $this->env->getExtension("native_profiler");
        $__internal_02b755f8fb23f51e01e7fc4d37d7ad55587bd7ff06fb8543e9604be238d37b3c->enter($__internal_02b755f8fb23f51e01e7fc4d37d7ad55587bd7ff06fb8543e9604be238d37b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b755f8fb23f51e01e7fc4d37d7ad55587bd7ff06fb8543e9604be238d37b3c->leave($__internal_02b755f8fb23f51e01e7fc4d37d7ad55587bd7ff06fb8543e9604be238d37b3c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_30f3632c1f4e0c132d66f2e458d536cbe0eb3f05a14b7981afbf2c2cb5c97b9b = $this->env->getExtension("native_profiler");
        $__internal_30f3632c1f4e0c132d66f2e458d536cbe0eb3f05a14b7981afbf2c2cb5c97b9b->enter($__internal_30f3632c1f4e0c132d66f2e458d536cbe0eb3f05a14b7981afbf2c2cb5c97b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_30f3632c1f4e0c132d66f2e458d536cbe0eb3f05a14b7981afbf2c2cb5c97b9b->leave($__internal_30f3632c1f4e0c132d66f2e458d536cbe0eb3f05a14b7981afbf2c2cb5c97b9b_prof);

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
