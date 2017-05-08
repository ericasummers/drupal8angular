<?php

/* core/themes/stable/templates/admin/views-ui-view-displays-list.html.twig */
class __TwigTemplate_90c490d1a7dd66f9096d3957d28f12237a9c52e922d0d7679eed9c0b2b882dab extends Twig_Template
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
        $__internal_22b1d78f9af76772fdd66314200a38510d08328ccaeb1dd7c1e19d0320276c90 = $this->env->getExtension("native_profiler");
        $__internal_22b1d78f9af76772fdd66314200a38510d08328ccaeb1dd7c1e19d0320276c90->enter($__internal_22b1d78f9af76772fdd66314200a38510d08328ccaeb1dd7c1e19d0320276c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-view-displays-list.html.twig"));

        $tags = array("for" => 13, "if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 12
        echo "<ul>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displays"]) ? $context["displays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["display"]) {
            // line 14
            echo "    <li>
      ";
            // line 15
            if ($this->getAttribute($context["display"], "path", array())) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["display"], "display", array()), "html", null, true));
                echo " <span data-drupal-selector=\"views-table-filter-text-source\">(";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["display"], "path", array()), "html", null, true));
                echo ")</span>
      ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["display"], "display", array()), "html", null, true));
                echo "
      ";
            }
            // line 20
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['display'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>
";
        
        $__internal_22b1d78f9af76772fdd66314200a38510d08328ccaeb1dd7c1e19d0320276c90->leave($__internal_22b1d78f9af76772fdd66314200a38510d08328ccaeb1dd7c1e19d0320276c90_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-view-displays-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  72 => 20,  66 => 18,  58 => 16,  56 => 15,  53 => 14,  49 => 13,  46 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for views displays on the views listing page.
 *
 * Available variables:
 * - displays: Contains multiple display instances. Each display contains:
 *   - display: Display name.
 *   - path: Path to display, if any.
 */
#}
<ul>
  {% for display in displays %}
    <li>
      {% if display.path %}
        {{ display.display }} <span data-drupal-selector=\"views-table-filter-text-source\">({{ display.path }})</span>
      {% else %}
        {{ display.display }}
      {% endif %}
    </li>
  {% endfor %}
</ul>
";
    }
}
