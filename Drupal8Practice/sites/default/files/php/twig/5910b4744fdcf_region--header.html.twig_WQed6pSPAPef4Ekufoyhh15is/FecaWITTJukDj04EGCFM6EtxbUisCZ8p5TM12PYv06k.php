<?php

/* themes/blog_themes/templates/region--header.html.twig */
class __TwigTemplate_966b968392164e2adc72d58ab370accdbb2c5bcfea1343309f77020afcebda14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("region.html.twig", "themes/blog_themes/templates/region--header.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30410a577ece46237d9eef236ae56fdf67ddd38bc8c8f2029405bfc2eeb75e2 = $this->env->getExtension("native_profiler");
        $__internal_a30410a577ece46237d9eef236ae56fdf67ddd38bc8c8f2029405bfc2eeb75e2->enter($__internal_a30410a577ece46237d9eef236ae56fdf67ddd38bc8c8f2029405bfc2eeb75e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/blog_themes/templates/region--header.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30410a577ece46237d9eef236ae56fdf67ddd38bc8c8f2029405bfc2eeb75e2->leave($__internal_a30410a577ece46237d9eef236ae56fdf67ddd38bc8c8f2029405bfc2eeb75e2_prof);

    }

    public function getTemplateName()
    {
        return "themes/blog_themes/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"region.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation to display a header region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region div.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{% set attributes = attributes.addClass('clearfix') %}
";
    }
}
