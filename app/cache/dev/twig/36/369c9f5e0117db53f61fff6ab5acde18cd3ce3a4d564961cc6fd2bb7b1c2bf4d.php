<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_22cdeba525e8e3f9b4e5e24f069a9a257ab8e17968203bcf295d244d79ba87eb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d915759907d11e8b792cb079043b0b17ebf466ff985620410a3ad26c3b0e232 = $this->env->getExtension("native_profiler");
        $__internal_7d915759907d11e8b792cb079043b0b17ebf466ff985620410a3ad26c3b0e232->enter($__internal_7d915759907d11e8b792cb079043b0b17ebf466ff985620410a3ad26c3b0e232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d915759907d11e8b792cb079043b0b17ebf466ff985620410a3ad26c3b0e232->leave($__internal_7d915759907d11e8b792cb079043b0b17ebf466ff985620410a3ad26c3b0e232_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_464409f4a55301d40cd61ab557d2c54f16e5e3767b6b59daf5b513198879e9b7 = $this->env->getExtension("native_profiler");
        $__internal_464409f4a55301d40cd61ab557d2c54f16e5e3767b6b59daf5b513198879e9b7->enter($__internal_464409f4a55301d40cd61ab557d2c54f16e5e3767b6b59daf5b513198879e9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_464409f4a55301d40cd61ab557d2c54f16e5e3767b6b59daf5b513198879e9b7->leave($__internal_464409f4a55301d40cd61ab557d2c54f16e5e3767b6b59daf5b513198879e9b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
