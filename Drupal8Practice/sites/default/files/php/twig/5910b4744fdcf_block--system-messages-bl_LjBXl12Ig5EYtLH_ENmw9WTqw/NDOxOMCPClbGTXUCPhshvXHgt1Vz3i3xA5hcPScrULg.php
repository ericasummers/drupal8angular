<?php

/* core/themes/stable/templates/block/block--system-messages-block.html.twig */
class __TwigTemplate_db58306e2b24a7b9bd0f01b6fea84581facc1417b9cc8e247c62b0d3a349b74e extends Twig_Template
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
        $__internal_9cd206a719b6ef1f9869ee05f644742f45ef97c1f905dc21ee07bd0e0cde0e95 = $this->env->getExtension("native_profiler");
        $__internal_9cd206a719b6ef1f9869ee05f644742f45ef97c1f905dc21ee07bd0e0cde0e95->enter($__internal_9cd206a719b6ef1f9869ee05f644742f45ef97c1f905dc21ee07bd0e0cde0e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/block/block--system-messages-block.html.twig"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_9cd206a719b6ef1f9869ee05f644742f45ef97c1f905dc21ee07bd0e0cde0e95->leave($__internal_9cd206a719b6ef1f9869ee05f644742f45ef97c1f905dc21ee07bd0e0cde0e95_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
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
 * Theme override for the messages block.
 *
 * Removes wrapper elements from block so that empty block does not appear when
 * there are no messages.
 *
 * Available variables:
 * - content: The content of this block.
 */
#}
{{ content }}
";
    }
}
