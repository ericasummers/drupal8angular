<?php

/* {# inline_template_start #}<div class="form-item">{{ message }}</div> */
class __TwigTemplate_d7c7c36ab38f322a5a77ed3305cb925964ad98bbbed1defdf9b46e1a80a60e79 extends Twig_Template
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
        $__internal_979c333f56a91186909c5fdec41593d4a169ccb0acb16b9420d97d2fc724e473 = $this->env->getExtension("native_profiler");
        $__internal_979c333f56a91186909c5fdec41593d4a169ccb0acb16b9420d97d2fc724e473->enter($__internal_979c333f56a91186909c5fdec41593d4a169ccb0acb16b9420d97d2fc724e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<div class=\"form-item\">{{ message }}</div>"));

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
        echo "<div class=\"form-item\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
        echo "</div>";
        
        $__internal_979c333f56a91186909c5fdec41593d4a169ccb0acb16b9420d97d2fc724e473->leave($__internal_979c333f56a91186909c5fdec41593d4a169ccb0acb16b9420d97d2fc724e473_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"form-item\">{{ message }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"form-item\">{{ message }}</div>";
    }
}
