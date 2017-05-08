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
        $__internal_f23f5c21157794fd2197075014336cd7349a78f5094a5242e8d4f3c1ed5a7c17 = $this->env->getExtension("native_profiler");
        $__internal_f23f5c21157794fd2197075014336cd7349a78f5094a5242e8d4f3c1ed5a7c17->enter($__internal_f23f5c21157794fd2197075014336cd7349a78f5094a5242e8d4f3c1ed5a7c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

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
        
        $__internal_f23f5c21157794fd2197075014336cd7349a78f5094a5242e8d4f3c1ed5a7c17->leave($__internal_f23f5c21157794fd2197075014336cd7349a78f5094a5242e8d4f3c1ed5a7c17_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_916244078dab1b0907b867c28b31c28b9d92b108b7d4f6e254d14822e56af70a = $this->env->getExtension("native_profiler");
        $__internal_916244078dab1b0907b867c28b31c28b9d92b108b7d4f6e254d14822e56af70a->enter($__internal_916244078dab1b0907b867c28b31c28b9d92b108b7d4f6e254d14822e56af70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_916244078dab1b0907b867c28b31c28b9d92b108b7d4f6e254d14822e56af70a->leave($__internal_916244078dab1b0907b867c28b31c28b9d92b108b7d4f6e254d14822e56af70a_prof);

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
