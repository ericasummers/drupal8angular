<?php

/* core/themes/classy/templates/form/radios.html.twig */
class __TwigTemplate_eb3fa1f2c28010cec37ffd0f965751a348d85c03d6e91e278292e50a673e8c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244e79f69e51a34551ccbefac8de3e62b39461062672ba17d78010537cafe4e4 = $this->env->getExtension("native_profiler");
        $__internal_244e79f69e51a34551ccbefac8de3e62b39461062672ba17d78010537cafe4e4->enter($__internal_244e79f69e51a34551ccbefac8de3e62b39461062672ba17d78010537cafe4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/radios.html.twig"));

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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-radios"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_244e79f69e51a34551ccbefac8de3e62b39461062672ba17d78010537cafe4e4->leave($__internal_244e79f69e51a34551ccbefac8de3e62b39461062672ba17d78010537cafe4e4_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a 'radios' #type form element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The rendered radios.
 *
 * @see template_preprocess_radios()
 */
#}
<div{{ attributes.addClass('form-radios') }}>{{ children }}</div>
";
    }
}
