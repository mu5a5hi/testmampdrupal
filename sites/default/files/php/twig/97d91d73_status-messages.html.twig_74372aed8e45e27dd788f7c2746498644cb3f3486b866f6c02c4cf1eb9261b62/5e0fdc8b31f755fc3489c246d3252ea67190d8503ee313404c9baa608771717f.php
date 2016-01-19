<?php

/* themes/mayo/templates/status-messages.html.twig */
class __TwigTemplate_207b49fb4e440a2b85ce87ba918a8fd5bb51e7a7fd23071aca69394fce554f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 26, "if" => 27, "for" => 31, "set" => 33);
        $filters = array("without" => 38, "length" => 45, "first" => 52);
        $functions = array("attach_library" => 28);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if', 'for', 'set'),
                array('without', 'length', 'first'),
                array('attach_library')
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

        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 27
        echo "  ";
        if ( !twig_test_empty((isset($context["message_list"]) ? $context["message_list"] : null))) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("mayo/messages"), "html", null, true));
            echo "
    <div id=\"messages\">
      <div class=\"section clearfix\">
";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 32
                echo "  ";
                // line 33
                $context["classes"] = array(0 => "messages", 1 => ("messages--" .                 // line 35
$context["type"]));
                // line 38
                echo "  <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
                echo ">
    ";
                // line 39
                if (($context["type"] == "error")) {
                    // line 40
                    echo "      <div role=\"alert\">
    ";
                }
                // line 42
                echo "      ";
                if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                    // line 43
                    echo "        <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                    echo "</h2>
      ";
                }
                // line 45
                echo "      ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 46
                    echo "        <ul class=\"messages__list\">
          ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 48
                        echo "            <li class=\"messages__item\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                        echo "</li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "        </ul>
      ";
                } else {
                    // line 52
                    echo "        ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                    echo "
      ";
                }
                // line 54
                echo "    ";
                if (($context["type"] == "error")) {
                    // line 55
                    echo "      </div>
    ";
                }
                // line 57
                echo "  </div>
  ";
                // line 59
                echo "  ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/mayo/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 61,  130 => 59,  127 => 57,  123 => 55,  120 => 54,  114 => 52,  110 => 50,  101 => 48,  97 => 47,  94 => 46,  91 => 45,  85 => 43,  82 => 42,  78 => 40,  76 => 39,  69 => 38,  67 => 35,  66 => 33,  64 => 32,  60 => 31,  53 => 28,  50 => 27,  44 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  *//* */
/* #}*/
/* {% block messages %}*/
/*   {% if message_list is not empty %}*/
/*     {{ attach_library('mayo/messages') }}*/
/*     <div id="messages">*/
/*       <div class="section clearfix">*/
/* {% for type, messages in message_list %}*/
/*   {%*/
/*     set classes = [*/
/*       'messages',*/
/*       'messages--' ~ type,*/
/*     ]*/
/*   %}*/
/*   <div role="contentinfo" aria-label="{{ status_headings[type] }}"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>*/
/*     {% if type == 'error' %}*/
/*       <div role="alert">*/
/*     {% endif %}*/
/*       {% if status_headings[type] %}*/
/*         <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*       {% endif %}*/
/*       {% if messages|length > 1 %}*/
/*         <ul class="messages__list">*/
/*           {% for message in messages %}*/
/*             <li class="messages__item">{{ message }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         {{ messages|first }}*/
/*       {% endif %}*/
/*     {% if type == 'error' %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   {# Remove type specific classes. #}*/
/*   {{ attributes.removeClass(classes) }}*/
/* {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock messages %}*/
/* */
