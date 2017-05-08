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
        $__internal_e2f06e32a1f990d512b29975761733fa3ba85943fb575d920ca5a8f75fb574fc = $this->env->getExtension("native_profiler");
        $__internal_e2f06e32a1f990d512b29975761733fa3ba85943fb575d920ca5a8f75fb574fc->enter($__internal_e2f06e32a1f990d512b29975761733fa3ba85943fb575d920ca5a8f75fb574fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

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
        
        $__internal_e2f06e32a1f990d512b29975761733fa3ba85943fb575d920ca5a8f75fb574fc->leave($__internal_e2f06e32a1f990d512b29975761733fa3ba85943fb575d920ca5a8f75fb574fc_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2556c9c127065ce089d23cbb1e6a2a6127c0872c35637f91e18fb996d246d08a = $this->env->getExtension("native_profiler");
        $__internal_2556c9c127065ce089d23cbb1e6a2a6127c0872c35637f91e18fb996d246d08a->enter($__internal_2556c9c127065ce089d23cbb1e6a2a6127c0872c35637f91e18fb996d246d08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2556c9c127065ce089d23cbb1e6a2a6127c0872c35637f91e18fb996d246d08a->leave($__internal_2556c9c127065ce089d23cbb1e6a2a6127c0872c35637f91e18fb996d246d08a_prof);

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
