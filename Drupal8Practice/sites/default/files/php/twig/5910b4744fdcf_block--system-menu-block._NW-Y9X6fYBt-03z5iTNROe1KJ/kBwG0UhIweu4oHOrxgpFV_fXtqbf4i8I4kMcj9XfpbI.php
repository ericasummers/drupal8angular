<?php

/* themes/blog_themes/templates/block--system-menu-block.html.twig */
class __TwigTemplate_eb0eefbc67d004e7a2b6650e07229474f2ebaa8508b282e42fc3a82e2d83fdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "themes/blog_themes/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cccadcc9bd7db41ef753918f156229cea31d8ede124a1e5eaaf692cb23718a98 = $this->env->getExtension("native_profiler");
        $__internal_cccadcc9bd7db41ef753918f156229cea31d8ede124a1e5eaaf692cb23718a98->enter($__internal_cccadcc9bd7db41ef753918f156229cea31d8ede124a1e5eaaf692cb23718a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/blog_themes/templates/block--system-menu-block.html.twig"));

        $tags = array("set" => 10);
        $filters = array("clean_id" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_id'),
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

        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccadcc9bd7db41ef753918f156229cea31d8ede124a1e5eaaf692cb23718a98->leave($__internal_cccadcc9bd7db41ef753918f156229cea31d8ede124a1e5eaaf692cb23718a98_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e8398c160d1ffee875979caac2327d6cfb853d90aa0d2ab41545102c0d1ccc1 = $this->env->getExtension("native_profiler");
        $__internal_3e8398c160d1ffee875979caac2327d6cfb853d90aa0d2ab41545102c0d1ccc1->enter($__internal_3e8398c160d1ffee875979caac2327d6cfb853d90aa0d2ab41545102c0d1ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>
";
        
        $__internal_3e8398c160d1ffee875979caac2327d6cfb853d90aa0d2ab41545102c0d1ccc1->leave($__internal_3e8398c160d1ffee875979caac2327d6cfb853d90aa0d2ab41545102c0d1ccc1_prof);

    }

    public function getTemplateName()
    {
        return "themes/blog_themes/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 13,  63 => 12,  56 => 1,  54 => 11,  52 => 10,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@classy/block/block--system-menu-block.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation for a menu block.
 *
 * @ingroup themeable
 */
#}
{% set show_anchor = \"show-\" ~ attributes.id|clean_id %}
{% set hide_anchor = \"hide-\" ~ attributes.id|clean_id %}
{% block content %}
  <div{{ content_attributes.addClass('content') }}>
    {{ content }}
  </div>
{% endblock %}
";
    }
}
