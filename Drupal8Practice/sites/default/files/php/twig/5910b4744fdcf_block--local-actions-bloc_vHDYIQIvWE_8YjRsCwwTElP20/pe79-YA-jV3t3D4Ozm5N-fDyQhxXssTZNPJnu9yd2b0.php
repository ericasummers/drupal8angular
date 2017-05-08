<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_0893fe8e918e748ef5380b3234f08cfec4cc61c2871627e665f26f225d1086b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f935630da37b034013d092f71c89435a80bf5c0a723cac86aa1f0af0d8dc4a76 = $this->env->getExtension("native_profiler");
        $__internal_f935630da37b034013d092f71c89435a80bf5c0a723cac86aa1f0af0d8dc4a76->enter($__internal_f935630da37b034013d092f71c89435a80bf5c0a723cac86aa1f0af0d8dc4a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f935630da37b034013d092f71c89435a80bf5c0a723cac86aa1f0af0d8dc4a76->leave($__internal_f935630da37b034013d092f71c89435a80bf5c0a723cac86aa1f0af0d8dc4a76_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c40b587fad2b06d1a2258c50fbca75334343328a6e5ce2f92793a6f33015341 = $this->env->getExtension("native_profiler");
        $__internal_2c40b587fad2b06d1a2258c50fbca75334343328a6e5ce2f92793a6f33015341->enter($__internal_2c40b587fad2b06d1a2258c50fbca75334343328a6e5ce2f92793a6f33015341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_2c40b587fad2b06d1a2258c50fbca75334343328a6e5ce2f92793a6f33015341->leave($__internal_2c40b587fad2b06d1a2258c50fbca75334343328a6e5ce2f92793a6f33015341_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
";
    }
}
