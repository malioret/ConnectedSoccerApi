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
        $__internal_d142c0041416e76fa109d453b564af82a8e65ab8e5817e6ab39361912b78c1cb = $this->env->getExtension("native_profiler");
        $__internal_d142c0041416e76fa109d453b564af82a8e65ab8e5817e6ab39361912b78c1cb->enter($__internal_d142c0041416e76fa109d453b564af82a8e65ab8e5817e6ab39361912b78c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_d142c0041416e76fa109d453b564af82a8e65ab8e5817e6ab39361912b78c1cb->leave($__internal_d142c0041416e76fa109d453b564af82a8e65ab8e5817e6ab39361912b78c1cb_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_195294c93c3cd0282dc387958babade63c3bf3c96b492d18c1579fc98aa4cb20 = $this->env->getExtension("native_profiler");
        $__internal_195294c93c3cd0282dc387958babade63c3bf3c96b492d18c1579fc98aa4cb20->enter($__internal_195294c93c3cd0282dc387958babade63c3bf3c96b492d18c1579fc98aa4cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_195294c93c3cd0282dc387958babade63c3bf3c96b492d18c1579fc98aa4cb20->leave($__internal_195294c93c3cd0282dc387958babade63c3bf3c96b492d18c1579fc98aa4cb20_prof);

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
