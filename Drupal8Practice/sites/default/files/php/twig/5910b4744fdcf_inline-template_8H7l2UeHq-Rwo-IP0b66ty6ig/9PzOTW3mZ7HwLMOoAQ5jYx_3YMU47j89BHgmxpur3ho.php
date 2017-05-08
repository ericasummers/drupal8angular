<?php

/* {# inline_template_start #}path-to-ajax/nojs/[id] */
class __TwigTemplate_0dde7f5ff6b84ecd18d25a1a297eef5db95a591c6648af97246439d760dc81fb extends Twig_Template
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
        $__internal_872e1876a102d23e27e4dfbb2a4ad1aaa5c63d1f1d2444d5c72486e13e77b976 = $this->env->getExtension("native_profiler");
        $__internal_872e1876a102d23e27e4dfbb2a4ad1aaa5c63d1f1d2444d5c72486e13e77b976->enter($__internal_872e1876a102d23e27e4dfbb2a4ad1aaa5c63d1f1d2444d5c72486e13e77b976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}path-to-ajax/nojs/[id]"));

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

        // line 1
        echo "path-to-ajax/nojs/[id]";
        
        $__internal_872e1876a102d23e27e4dfbb2a4ad1aaa5c63d1f1d2444d5c72486e13e77b976->leave($__internal_872e1876a102d23e27e4dfbb2a4ad1aaa5c63d1f1d2444d5c72486e13e77b976_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}path-to-ajax/nojs/[id]";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}path-to-ajax/nojs/[id]";
    }
}
