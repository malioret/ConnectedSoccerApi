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
        $__internal_4d34366922cc1d3b5784262d0cbcaae0db6b6f6fc179c9ddef567e5382372bc4 = $this->env->getExtension("native_profiler");
        $__internal_4d34366922cc1d3b5784262d0cbcaae0db6b6f6fc179c9ddef567e5382372bc4->enter($__internal_4d34366922cc1d3b5784262d0cbcaae0db6b6f6fc179c9ddef567e5382372bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d34366922cc1d3b5784262d0cbcaae0db6b6f6fc179c9ddef567e5382372bc4->leave($__internal_4d34366922cc1d3b5784262d0cbcaae0db6b6f6fc179c9ddef567e5382372bc4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_420193a6fc9de42f0b4df4b79a6dd281363b912390f3d5a0266f094d8b4c348c = $this->env->getExtension("native_profiler");
        $__internal_420193a6fc9de42f0b4df4b79a6dd281363b912390f3d5a0266f094d8b4c348c->enter($__internal_420193a6fc9de42f0b4df4b79a6dd281363b912390f3d5a0266f094d8b4c348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_420193a6fc9de42f0b4df4b79a6dd281363b912390f3d5a0266f094d8b4c348c->leave($__internal_420193a6fc9de42f0b4df4b79a6dd281363b912390f3d5a0266f094d8b4c348c_prof);

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
