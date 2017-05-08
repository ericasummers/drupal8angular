<?php

/* {# inline_template_start #}use-ajax */
class __TwigTemplate_fbf1a3b5b9786d34f7824e96ac02da4c80faa9116e3833cabc7e1a94e0911c1c extends Twig_Template
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
        $__internal_b0d3c45004d6de40f079352b923ef401d095888f042ceb08ff82520f4a53ff1c = $this->env->getExtension("native_profiler");
        $__internal_b0d3c45004d6de40f079352b923ef401d095888f042ceb08ff82520f4a53ff1c->enter($__internal_b0d3c45004d6de40f079352b923ef401d095888f042ceb08ff82520f4a53ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}use-ajax"));

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
        echo "use-ajax";
        
        $__internal_b0d3c45004d6de40f079352b923ef401d095888f042ceb08ff82520f4a53ff1c->leave($__internal_b0d3c45004d6de40f079352b923ef401d095888f042ceb08ff82520f4a53ff1c_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}use-ajax";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}use-ajax";
    }
}
