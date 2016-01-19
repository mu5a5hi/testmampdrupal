<?php

/* core/themes/stable/templates/admin/views-ui-rearrange-filter-form.html.twig */
class __TwigTemplate_7874305d93403f199967f1a075e48d7f21459dc2333773c85d96af89ca57bbcf extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array("without" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "override", array()), "html", null, true));
        echo "
<div class=\"scroll\" data-drupal-views-scroll>
  ";
        // line 17
        if ((isset($context["grouping"]) ? $context["grouping"] : null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filter_groups", array()), "operator", array()), "html", null, true));
            echo "
  ";
        } else {
            // line 20
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filter_groups", array()), "groups", array()), 0, array()), "html", null, true));
            echo "
  ";
        }
        // line 22
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ungroupable_table"]) ? $context["ungroupable_table"] : null), "html", null, true));
        echo "
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true));
        echo "
</div>
";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "override", "filter_groups", "remove_groups", "filters"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-rearrange-filter-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  67 => 23,  62 => 22,  56 => 20,  50 => 18,  48 => 17,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for Views UI rearrange filter form.*/
/*  **/
/*  * Available variables:*/
/*  * - form: A render element representing the form.*/
/*  * - grouping: A flag whether or not there is more than one group.*/
/*  * - ungroupable_table: The ungroupable filter table.*/
/*  * - table: The groupable filter table.*/
/*  **/
/*  * @see template_preprocess_views_ui_rearrange_filter_form()*/
/*  *//* */
/* #}*/
/* {{ form.override }}*/
/* <div class="scroll" data-drupal-views-scroll>*/
/*   {% if grouping %}*/
/*     {{ form.filter_groups.operator }}*/
/*   {% else %}*/
/*     {{ form.filter_groups.groups.0 }}*/
/*   {% endif %}*/
/*   {{ ungroupable_table }}*/
/*   {{ table }}*/
/* </div>*/
/* {{ form|without('override', 'filter_groups', 'remove_groups', 'filters') }}*/
/* */
