<?php

/* core/themes/stable/templates/admin/views-ui-views-listing-table.html.twig */
class __TwigTemplate_a780d4f9435348d488f92ef7d3256a4b49b52d7ad1a0254dd77bde0612ced3ca extends Twig_Template
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
        $__internal_74c62508cc09652f804b340b146ab7253610b6c151851c7164a89e5059dd6ef7 = $this->env->getExtension("native_profiler");
        $__internal_74c62508cc09652f804b340b146ab7253610b6c151851c7164a89e5059dd6ef7->enter($__internal_74c62508cc09652f804b340b146ab7253610b6c151851c7164a89e5059dd6ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-views-listing-table.html.twig"));

        $tags = array("for" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 18
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "responsive-enabled"), "method"), "html", null, true));
        echo ">
  <thead>
    <tr>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 22
            echo "        <th";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["header"], "attributes", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["header"], "data", array()), "html", null, true));
            echo "</th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "      <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        <td class=\"views-ui-view-name\">
          <h3 data-drupal-selector=\"views-table-filter-text-source\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "view_name", array()), "data", array()), "html", null, true));
            echo "</h3>
        </td>
        <td class=\"views-ui-view-machine-name\" data-drupal-selector=\"views-table-filter-text-source\">
          ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "machine_name", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-description\" data-drupal-selector=\"views-table-filter-text-source\">
          ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "description", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-displays\">
          ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "displays", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-operations\">
          ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "operations", array()), "data", array()), "html", null, true));
            echo "
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </tbody>
</table>
";
        
        $__internal_74c62508cc09652f804b340b146ab7253610b6c151851c7164a89e5059dd6ef7->leave($__internal_74c62508cc09652f804b340b146ab7253610b6c151851c7164a89e5059dd6ef7_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-views-listing-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  107 => 42,  101 => 39,  95 => 36,  89 => 33,  83 => 30,  77 => 28,  73 => 27,  68 => 24,  57 => 22,  53 => 21,  46 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for views listing table.
 *
 * Available variables:
 * - headers: Contains table headers.
 * - rows: Contains multiple rows. Each row contains:
 *   - view_name: The human-readable name of the view.
 *   - machine_name: Machine name of the view.
 *   - description: The description of the view.
 *   - displays: List of displays attached to the view.
 *   - operations: List of available operations.
 *
 * @see template_preprocess_views_ui_views_listing_table()
 */
#}
<table{{ attributes.addClass('responsive-enabled') }}>
  <thead>
    <tr>
      {% for header in headers %}
        <th{{ header.attributes }}>{{ header.data }}</th>
      {% endfor %}
    </tr>
  </thead>
  <tbody>
    {% for row in rows %}
      <tr{{ row.attributes }}>
        <td class=\"views-ui-view-name\">
          <h3 data-drupal-selector=\"views-table-filter-text-source\">{{ row.data.view_name.data }}</h3>
        </td>
        <td class=\"views-ui-view-machine-name\" data-drupal-selector=\"views-table-filter-text-source\">
          {{ row.data.machine_name.data }}
        </td>
        <td class=\"views-ui-view-description\" data-drupal-selector=\"views-table-filter-text-source\">
          {{ row.data.description.data }}
        </td>
        <td class=\"views-ui-view-displays\">
          {{ row.data.displays.data }}
        </td>
        <td class=\"views-ui-view-operations\">
          {{ row.data.operations.data }}
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
";
    }
}
