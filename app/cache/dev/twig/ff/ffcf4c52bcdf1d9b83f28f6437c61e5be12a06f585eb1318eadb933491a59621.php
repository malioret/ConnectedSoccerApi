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
        $__internal_a080a263d5bb635046ba24c1c8975053489568b4e445513c60bdbc5b7b6f1f38 = $this->env->getExtension("native_profiler");
        $__internal_a080a263d5bb635046ba24c1c8975053489568b4e445513c60bdbc5b7b6f1f38->enter($__internal_a080a263d5bb635046ba24c1c8975053489568b4e445513c60bdbc5b7b6f1f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_a080a263d5bb635046ba24c1c8975053489568b4e445513c60bdbc5b7b6f1f38->leave($__internal_a080a263d5bb635046ba24c1c8975053489568b4e445513c60bdbc5b7b6f1f38_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_03a1c8ded2cabdc6d3558fff9cc5601d33db492c5897d8e1a409a89a7f3bb5bf = $this->env->getExtension("native_profiler");
        $__internal_03a1c8ded2cabdc6d3558fff9cc5601d33db492c5897d8e1a409a89a7f3bb5bf->enter($__internal_03a1c8ded2cabdc6d3558fff9cc5601d33db492c5897d8e1a409a89a7f3bb5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_03a1c8ded2cabdc6d3558fff9cc5601d33db492c5897d8e1a409a89a7f3bb5bf->leave($__internal_03a1c8ded2cabdc6d3558fff9cc5601d33db492c5897d8e1a409a89a7f3bb5bf_prof);

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
