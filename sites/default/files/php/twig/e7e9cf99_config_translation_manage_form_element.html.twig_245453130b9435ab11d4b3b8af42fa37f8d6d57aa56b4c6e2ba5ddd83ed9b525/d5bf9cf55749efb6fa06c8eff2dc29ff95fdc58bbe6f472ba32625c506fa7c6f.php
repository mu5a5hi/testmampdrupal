<?php

/* core/themes/stable/templates/admin/config_translation_manage_form_element.html.twig */
class __TwigTemplate_14f32320bb026b101b3fba128fc5c24b493c172054fcc8223bec70e4536a2ea5 extends Twig_Template
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

        // line 14
        echo "<div class=\"translation-set clearfix\">
  <div class=\"layout-column layout-column--half translation-set__source\">
    ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "source", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-column layout-column--half translation-set__translated\">
    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "translation", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/config_translation_manage_form_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  47 => 16,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a form element in config_translation.*/
/*  **/
/*  * Available variables:*/
/*  * - element: Array that represents the element shown in the form.*/
/*  *   - source: The source of the translation.*/
/*  *   - translation: The translation for the target language.*/
/*  **/
/*  * @see template_preprocess()*/
/*  *//* */
/* #}*/
/* <div class="translation-set clearfix">*/
/*   <div class="layout-column layout-column--half translation-set__source">*/
/*     {{ element.source }}*/
/*   </div>*/
/*   <div class="layout-column layout-column--half translation-set__translated">*/
/*     {{ element.translation }}*/
/*   </div>*/
/* </div>*/
/* */
