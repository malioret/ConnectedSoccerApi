<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f02ea2917ec7ed39d74e2eb2500867a2bf1c4eddcd4cababb5613a24c324c86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::empty_layout.html.twig", 12);
        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adfb7277a57a279bc9709f7c82814abf1679b6cb69520465d6a87129c455d167 = $this->env->getExtension("native_profiler");
        $__internal_adfb7277a57a279bc9709f7c82814abf1679b6cb69520465d6a87129c455d167->enter($__internal_adfb7277a57a279bc9709f7c82814abf1679b6cb69520465d6a87129c455d167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfb7277a57a279bc9709f7c82814abf1679b6cb69520465d6a87129c455d167->leave($__internal_adfb7277a57a279bc9709f7c82814abf1679b6cb69520465d6a87129c455d167_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_2f424b4d5ffdeda3a9770c706a934f6723e2cdd8b7bb35273e41efdcf3bdb674 = $this->env->getExtension("native_profiler");
        $__internal_2f424b4d5ffdeda3a9770c706a934f6723e2cdd8b7bb35273e41efdcf3bdb674->enter($__internal_2f424b4d5ffdeda3a9770c706a934f6723e2cdd8b7bb35273e41efdcf3bdb674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_2f424b4d5ffdeda3a9770c706a934f6723e2cdd8b7bb35273e41efdcf3bdb674->leave($__internal_2f424b4d5ffdeda3a9770c706a934f6723e2cdd8b7bb35273e41efdcf3bdb674_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8907e4deb95185e6b4d5c4926f2438749623ef31517b5840b89a64132b2b5e93 = $this->env->getExtension("native_profiler");
        $__internal_8907e4deb95185e6b4d5c4926f2438749623ef31517b5840b89a64132b2b5e93->enter($__internal_8907e4deb95185e6b4d5c4926f2438749623ef31517b5840b89a64132b2b5e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8907e4deb95185e6b4d5c4926f2438749623ef31517b5840b89a64132b2b5e93->leave($__internal_8907e4deb95185e6b4d5c4926f2438749623ef31517b5840b89a64132b2b5e93_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e40db894ecc15b745947682b9fa2cc5da97a42a8837aa7050c650f87369ecd11 = $this->env->getExtension("native_profiler");
        $__internal_e40db894ecc15b745947682b9fa2cc5da97a42a8837aa7050c650f87369ecd11->enter($__internal_e40db894ecc15b745947682b9fa2cc5da97a42a8837aa7050c650f87369ecd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e40db894ecc15b745947682b9fa2cc5da97a42a8837aa7050c650f87369ecd11->leave($__internal_e40db894ecc15b745947682b9fa2cc5da97a42a8837aa7050c650f87369ecd11_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_646ae20b058ca8175fdc4dd1c4ddff396c147ac16d71bdfca94cfa7cad4c9724 = $this->env->getExtension("native_profiler");
        $__internal_646ae20b058ca8175fdc4dd1c4ddff396c147ac16d71bdfca94cfa7cad4c9724->enter($__internal_646ae20b058ca8175fdc4dd1c4ddff396c147ac16d71bdfca94cfa7cad4c9724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_646ae20b058ca8175fdc4dd1c4ddff396c147ac16d71bdfca94cfa7cad4c9724->leave($__internal_646ae20b058ca8175fdc4dd1c4ddff396c147ac16d71bdfca94cfa7cad4c9724_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_263ff1fde82568ae086cec86530c31a6f9854cfa9ca3433ec0c164b3de0448d9 = $this->env->getExtension("native_profiler");
        $__internal_263ff1fde82568ae086cec86530c31a6f9854cfa9ca3433ec0c164b3de0448d9->enter($__internal_263ff1fde82568ae086cec86530c31a6f9854cfa9ca3433ec0c164b3de0448d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_263ff1fde82568ae086cec86530c31a6f9854cfa9ca3433ec0c164b3de0448d9->leave($__internal_263ff1fde82568ae086cec86530c31a6f9854cfa9ca3433ec0c164b3de0448d9_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_bf9a0a5b8f5fd8106a27efa71446a506abd5d6312b67a8c068ff56593674e5c4 = $this->env->getExtension("native_profiler");
        $__internal_bf9a0a5b8f5fd8106a27efa71446a506abd5d6312b67a8c068ff56593674e5c4->enter($__internal_bf9a0a5b8f5fd8106a27efa71446a506abd5d6312b67a8c068ff56593674e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_bf9a0a5b8f5fd8106a27efa71446a506abd5d6312b67a8c068ff56593674e5c4->leave($__internal_bf9a0a5b8f5fd8106a27efa71446a506abd5d6312b67a8c068ff56593674e5c4_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_bdabafa51b8cc77c7c8d1db7c0e51a829e67a833d975ace173c99af48425db00 = $this->env->getExtension("native_profiler");
        $__internal_bdabafa51b8cc77c7c8d1db7c0e51a829e67a833d975ace173c99af48425db00->enter($__internal_bdabafa51b8cc77c7c8d1db7c0e51a829e67a833d975ace173c99af48425db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_bdabafa51b8cc77c7c8d1db7c0e51a829e67a833d975ace173c99af48425db00->leave($__internal_bdabafa51b8cc77c7c8d1db7c0e51a829e67a833d975ace173c99af48425db00_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 32,  108 => 31,  90 => 20,  84 => 19,  73 => 17,  62 => 16,  51 => 15,  40 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
