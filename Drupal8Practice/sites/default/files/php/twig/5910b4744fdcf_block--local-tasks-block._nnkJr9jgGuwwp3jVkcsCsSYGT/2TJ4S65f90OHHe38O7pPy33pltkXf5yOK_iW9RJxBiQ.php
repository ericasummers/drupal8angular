<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_90a019b98fcc9e6d069a76578f0eed3dd620f33d921fc4eaf9281d876277b3ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99317bca2de19a3b9f3972e7bd55647667d434fdba7b5e0e0c84605435144fd3 = $this->env->getExtension("native_profiler");
        $__internal_99317bca2de19a3b9f3972e7bd55647667d434fdba7b5e0e0c84605435144fd3->enter($__internal_99317bca2de19a3b9f3972e7bd55647667d434fdba7b5e0e0c84605435144fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_99317bca2de19a3b9f3972e7bd55647667d434fdba7b5e0e0c84605435144fd3->leave($__internal_99317bca2de19a3b9f3972e7bd55647667d434fdba7b5e0e0c84605435144fd3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d4fe7649d88c51756e45ff458bedd05627fce09c73f66eee9648d5b1f1d7983 = $this->env->getExtension("native_profiler");
        $__internal_9d4fe7649d88c51756e45ff458bedd05627fce09c73f66eee9648d5b1f1d7983->enter($__internal_9d4fe7649d88c51756e45ff458bedd05627fce09c73f66eee9648d5b1f1d7983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_9d4fe7649d88c51756e45ff458bedd05627fce09c73f66eee9648d5b1f1d7983->leave($__internal_9d4fe7649d88c51756e45ff458bedd05627fce09c73f66eee9648d5b1f1d7983_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
";
    }
}
