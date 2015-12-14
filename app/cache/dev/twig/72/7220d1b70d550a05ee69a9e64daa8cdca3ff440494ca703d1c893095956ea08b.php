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
        $__internal_041fb686cd1ebdc4487bf05fa1c4a89a83067b1ebf611131105987fe81cca5b3 = $this->env->getExtension("native_profiler");
        $__internal_041fb686cd1ebdc4487bf05fa1c4a89a83067b1ebf611131105987fe81cca5b3->enter($__internal_041fb686cd1ebdc4487bf05fa1c4a89a83067b1ebf611131105987fe81cca5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041fb686cd1ebdc4487bf05fa1c4a89a83067b1ebf611131105987fe81cca5b3->leave($__internal_041fb686cd1ebdc4487bf05fa1c4a89a83067b1ebf611131105987fe81cca5b3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2fd6d37afbaf52be95be1bd3d8e013d4b0c5ccba5fcffc654291aa2b66ea951b = $this->env->getExtension("native_profiler");
        $__internal_2fd6d37afbaf52be95be1bd3d8e013d4b0c5ccba5fcffc654291aa2b66ea951b->enter($__internal_2fd6d37afbaf52be95be1bd3d8e013d4b0c5ccba5fcffc654291aa2b66ea951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2fd6d37afbaf52be95be1bd3d8e013d4b0c5ccba5fcffc654291aa2b66ea951b->leave($__internal_2fd6d37afbaf52be95be1bd3d8e013d4b0c5ccba5fcffc654291aa2b66ea951b_prof);

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
