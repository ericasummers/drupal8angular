<?php

/* core/themes/seven/templates/image-widget.html.twig */
class __TwigTemplate_3904d0154c0396c48c351632fa0b067cd7dce47a815d97cf7794a94fbeb6520e extends Twig_Template
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
        $__internal_ad8cfba86f09ca3a5a378cac48b9fff86de2ae42decf413cf6b07bc7f1721ea0 = $this->env->getExtension("native_profiler");
        $__internal_ad8cfba86f09ca3a5a378cac48b9fff86de2ae42decf413cf6b07bc7f1721ea0->enter($__internal_ad8cfba86f09ca3a5a378cac48b9fff86de2ae42decf413cf6b07bc7f1721ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/image-widget.html.twig"));

        $tags = array("include" => 11);
        $filters = array();
        $functions = array("attach_library" => 12);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array(),
                array('attach_library')
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

        // line 11
        $this->loadTemplate("@classy/content-edit/image-widget.html.twig", "core/themes/seven/templates/image-widget.html.twig", 11)->display($context);
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/image-widget"), "html", null, true));
        echo "
";
        
        $__internal_ad8cfba86f09ca3a5a378cac48b9fff86de2ae42decf413cf6b07bc7f1721ea0->leave($__internal_ad8cfba86f09ca3a5a378cac48b9fff86de2ae42decf413cf6b07bc7f1721ea0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 11,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for an image field widget.
 *
 * Included from Classy theme.
 *
 * @see template_preprocess_image_widget()
 */
#}
{% include '@classy/content-edit/image-widget.html.twig' %}
{{ attach_library('classy/image-widget') }}
";
    }
}
