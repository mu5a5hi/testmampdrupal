<?php

/* core/themes/stable/templates/admin/color-scheme-form.html.twig */
class __TwigTemplate_72b1e3a217e35d0876f96d4787240154dfc5463c7bcdda03947e99a6d3ccc985 extends Twig_Template
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
        $filters = array("without" => 21, "t" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without', 't'),
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

        // line 16
        echo "<div class=\"color-form clearfix\">
  ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scheme", array()), "html", null, true));
        echo "
  <div class=\"clearfix color-palette js-color-palette\">
    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "palette", array()), "html", null, true));
        echo "
  </div>
  ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "scheme", "palette"), "html", null, true));
        echo "
  <h2>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Preview")));
        echo "</h2>
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_preview"]) ? $context["html_preview"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/color-scheme-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 22,  56 => 21,  51 => 19,  46 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a theme's color form.*/
/*  **/
/*  * Available variables:*/
/*  * - form: Form elements for the color scheme form, including:*/
/*  *   - scheme: A color scheme form element. For example: a select element with*/
/*  *     color theme presets, or a color picker widget.*/
/*  *   - palette: Color fields that can be changed by entering in a new hex value.*/
/*  * - html_preview: A HTML preview of the theme's current color scheme.*/
/*  **/
/*  * @see template_preprocess_color_scheme_form()*/
/*  *//* */
/* #}*/
/* <div class="color-form clearfix">*/
/*   {{ form.scheme }}*/
/*   <div class="clearfix color-palette js-color-palette">*/
/*     {{ form.palette }}*/
/*   </div>*/
/*   {{ form|without('scheme', 'palette') }}*/
/*   <h2>{{ 'Preview'|t }}</h2>*/
/*   {{ html_preview }}*/
/* </div>*/
/* */
