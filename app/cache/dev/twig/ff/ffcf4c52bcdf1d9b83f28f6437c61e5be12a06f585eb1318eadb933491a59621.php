<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_331d8055ab217c76d3eeab974691a04f7ca6a54ab9dbfdb05f8333a81f93185d extends Twig_Template
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
        $__internal_9285b5fbf902b9b344ae98d4118efca2d02b5c513fac4cbd8251b4090482901b = $this->env->getExtension("native_profiler");
        $__internal_9285b5fbf902b9b344ae98d4118efca2d02b5c513fac4cbd8251b4090482901b->enter($__internal_9285b5fbf902b9b344ae98d4118efca2d02b5c513fac4cbd8251b4090482901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_9285b5fbf902b9b344ae98d4118efca2d02b5c513fac4cbd8251b4090482901b->leave($__internal_9285b5fbf902b9b344ae98d4118efca2d02b5c513fac4cbd8251b4090482901b_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_92d01f3f4c2f77dc5454fd059b5768102f95d28e573f9c381be6ec63ea5a23f9 = $this->env->getExtension("native_profiler");
        $__internal_92d01f3f4c2f77dc5454fd059b5768102f95d28e573f9c381be6ec63ea5a23f9->enter($__internal_92d01f3f4c2f77dc5454fd059b5768102f95d28e573f9c381be6ec63ea5a23f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_92d01f3f4c2f77dc5454fd059b5768102f95d28e573f9c381be6ec63ea5a23f9->leave($__internal_92d01f3f4c2f77dc5454fd059b5768102f95d28e573f9c381be6ec63ea5a23f9_prof);

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
