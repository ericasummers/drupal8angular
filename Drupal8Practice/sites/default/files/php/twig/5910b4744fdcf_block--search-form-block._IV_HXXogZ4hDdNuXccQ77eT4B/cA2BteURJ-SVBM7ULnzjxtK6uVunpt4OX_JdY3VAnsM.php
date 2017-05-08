<?php

/* themes/blog_themes/templates/block--search-form-block.html.twig */
class __TwigTemplate_851a3a3f0e72c6bef05a6346b4e981e7a286677cd8ef9d0a0ca56e53597e04ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--search-form-block.html.twig", "themes/blog_themes/templates/block--search-form-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_552b093e5967689e13dcd1202fb68c4aa70a4e3a6dd2c40e4e504403e8279cc2 = $this->env->getExtension("native_profiler");
        $__internal_552b093e5967689e13dcd1202fb68c4aa70a4e3a6dd2c40e4e504403e8279cc2->enter($__internal_552b093e5967689e13dcd1202fb68c4aa70a4e3a6dd2c40e4e504403e8279cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/blog_themes/templates/block--search-form-block.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        
        $__internal_552b093e5967689e13dcd1202fb68c4aa70a4e3a6dd2c40e4e504403e8279cc2->leave($__internal_552b093e5967689e13dcd1202fb68c4aa70a4e3a6dd2c40e4e504403e8279cc2_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_9da398b8a219d70715105aee986648dd7fa908247fd203e195ebdb6be28acf41 = $this->env->getExtension("native_profiler");
        $__internal_9da398b8a219d70715105aee986648dd7fa908247fd203e195ebdb6be28acf41->enter($__internal_9da398b8a219d70715105aee986648dd7fa908247fd203e195ebdb6be28acf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content", 1 => "container-inline"), "method"), "html", null, true));
        echo ">
    ";
        // line 21
        $this->displayParentBlock("content", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_9da398b8a219d70715105aee986648dd7fa908247fd203e195ebdb6be28acf41->leave($__internal_9da398b8a219d70715105aee986648dd7fa908247fd203e195ebdb6be28acf41_prof);

    }

    public function getTemplateName()
    {
        return "themes/blog_themes/templates/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  64 => 20,  58 => 19,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@classy/block/block--search-form-block.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation for a search form block. Extends Classy's
 * search form block template.
 *
 * Available variables:
 * - content: The content of this block.
 * - content_attributes: A list of HTML attributes applied to the main content
 *   tag that appears in the template.
 *
 * @see template_preprocess_block()
 * @see search_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{% block content %}
  <div{{ content_attributes.addClass('content', 'container-inline') }}>
    {{ parent() }}
  </div>
{% endblock %}
";
    }
}
