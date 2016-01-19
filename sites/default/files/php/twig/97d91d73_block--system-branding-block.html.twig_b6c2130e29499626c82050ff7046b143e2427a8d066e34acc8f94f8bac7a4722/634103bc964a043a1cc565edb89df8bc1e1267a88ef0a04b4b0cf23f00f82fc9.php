<?php

/* themes/mayo/templates/block--system-branding-block.html.twig */
class __TwigTemplate_ec740bf5706040fd95a2f9f093b08d1eb45e680e9bb6d27006f4be55efab47a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/mayo/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 20);
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "      ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "        <div id=\"site_logo\">
        <a href=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
        </a>
        </div> <!-- /#logo -->
      ";
        }
        // line 25
        echo "
      ";
        // line 26
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 27
            echo "        <div id=\"name-and-slogan\" ";
            if (((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null) && (isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
          ";
            // line 28
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 29
                echo "            ";
                if ((isset($context["title"]) ? $context["title"] : null)) {
                    // line 30
                    echo "            <div id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 32
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 36
                    echo "          ";
                } else {
                    // line 37
                    echo "            <h1 id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                <a href=\"";
                    // line 38
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</span></a>
              </h1>
            ";
                }
                // line 41
                echo "          ";
            }
            // line 42
            echo "                    ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 43
                echo "            <div id=\"site-slogan\"";
                if ((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
          ";
            }
            // line 45
            echo "        </div> <!-- /#name-and-slogan -->
      ";
        }
    }

    public function getTemplateName()
    {
        return "themes/mayo/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  140 => 43,  137 => 42,  134 => 41,  124 => 38,  117 => 37,  114 => 36,  104 => 32,  96 => 30,  93 => 29,  91 => 28,  84 => 27,  82 => 26,  79 => 25,  70 => 21,  64 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Mayo's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*       {% if site_logo %}*/
/*         <div id="site_logo">*/
/*         <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*           <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*         </a>*/
/*         </div> <!-- /#logo -->*/
/*       {% endif %}*/
/* */
/*       {% if site_name or site_slogan %}*/
/*         <div id="name-and-slogan" {% if hide_site_name and hide_site_slogan %} class="visually-hidden"{% endif %}>*/
/*           {% if site_name %}*/
/*             {% if title %}*/
/*             <div id="site-name"{% if hide_site_name %} class="visually-hidden"{% endif %}>*/
/*               <strong>*/
/*                 <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home"><span>{{ site_name }}</span></a>*/
/*               </strong>*/
/*             </div>*/
/*           {# Use h1 when the content title is empty #}*/
/*           {% else %}*/
/*             <h1 id="site-name"{% if hide_site_name %} class="visually-hidden" {% endif %}>*/
/*                 <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home"><span>{{ site_name }}</span></a>*/
/*               </h1>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*                     {% if site_slogan %}*/
/*             <div id="site-slogan"{% if hide_site_slogan %} class="visually-hidden"{% endif %}>{{ site_slogan }}</div>*/
/*           {% endif %}*/
/*         </div> <!-- /#name-and-slogan -->*/
/*       {% endif %}*/
/* {% endblock %}*/
/* */
