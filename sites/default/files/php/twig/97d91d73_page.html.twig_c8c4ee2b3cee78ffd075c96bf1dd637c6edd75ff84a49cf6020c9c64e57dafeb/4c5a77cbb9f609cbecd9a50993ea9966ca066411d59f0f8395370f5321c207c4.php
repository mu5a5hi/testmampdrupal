<?php

/* themes/mayo/templates/page.html.twig */
class __TwigTemplate_8a9f758b00b7275f01ba58de662f674ed91fd6632ce9ba926b590434e6c21775 extends Twig_Template
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
        $tags = array("if" => 85);
        $filters = array("t" => 86);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 84
        echo "<div id=\"page-wrapper\" style=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_wrapper_style"]) ? $context["page_wrapper_style"] : null), "html", null, true));
        echo "\">
<div id=\"page\"";
        // line 85
        if ((isset($context["page_style"]) ? $context["page_style"] : null)) {
            echo " style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_style"]) ? $context["page_style"] : null), "html", null, true));
            echo "\"";
        }
        echo ">
    <header id=\"header\" role=\"banner\" style=\"";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_style"]) ? $context["header_style"] : null), "html", null, true));
        echo "\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
    <div class=\"section clearfix\">
    <div id=\"header-watermark\"";
        // line 88
        if ((isset($context["header_watermark_style"]) ? $context["header_watermark_style"] : null)) {
            echo " style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_watermark_style"]) ? $context["header_watermark_style"] : null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <div class=\"section clearfix\">

      ";
        // line 91
        if ((isset($context["header_searchbox"]) ? $context["header_searchbox"] : null)) {
            // line 92
            echo "        <div id=\"header-searchbox\">
       ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output_form"]) ? $context["output_form"] : null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if ((isset($context["header_fontsizer"]) ? $context["header_fontsizer"] : null)) {
            // line 98
            echo "        <div id=\"header-fontsizer\">
        <a href=\"#\" class=\"decreaseFont\" title=\"Decrease text size\"></a>
        <a href=\"#\" class=\"resetFont\"    title=\"Restore default text size\"></a>
        <a href=\"#\" class=\"increaseFont\" title=\"Increase text size\"></a>
        </div>
      ";
        }
        // line 104
        echo "
    ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

    </div> <!-- /.section -->
    </div> <!-- /#header-watermark -->
    </div></header> <!-- /#header -->

    <div class=\"clearfix cfie\"></div>

    <!-- for nice_menus, superfish -->
    ";
        // line 114
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menubar", array())) {
            // line 115
            echo "    <div id=\"menubar\" class=\"menubar clearfix\"
      ";
            // line 116
            if ((isset($context["menubar_background"]) ? $context["menubar_background"] : null)) {
                // line 117
                echo "        style=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["menubar_bg_value"]) ? $context["menubar_bg_value"] : null), "html", null, true));
                echo "\"
        ";
            }
            // line 118
            echo ">

      ";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menubar", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 123
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 124
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
    ";
        }
        // line 126
        echo "
    <!-- space between menus and contents -->
    <div class=\"spacer clearfix cfie\"></div>

    <div id=\"main-wrapper\">
    <div id=\"main\" class=\"clearfix\"
      ";
        // line 132
        if ((isset($context["main_style"]) ? $context["main_style"] : null)) {
            // line 133
            echo "        style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_style"]) ? $context["main_style"] : null), "html", null, true));
            echo "\"
        ";
        }
        // line 134
        echo ">

      ";
        // line 136
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_top", array())) {
            // line 137
            echo "      <div id=\"banner-top\" class=\"banner clearfix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_top", array()), "html", null, true));
            echo "</div>
      <div class=\"spacer clearfix cfie\"></div>
      ";
        }
        // line 140
        echo "

     ";
        // line 142
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array())) || $this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "top_column_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array()))) {
            // line 144
            echo "      <div id=\"top-wrapper\">
        <div id=\"top-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 148
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array())) {
                // line 149
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 151
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 155
            echo "
                ";
            // line 156
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array())) {
                // line 157
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 159
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 163
            echo "
                ";
            // line 164
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_third", array())) {
                // line 165
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 167
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 171
            echo "
                ";
            // line 172
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array())) {
                // line 173
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 175
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 179
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>
        </div> <!--/#top-columns -->
      </div> <!-- /#top-wrapper -->
      ";
        }
        // line 184
        echo "

      <div class=\"clearfix cfie\"></div>


      <!-- main content -->
      <main id=\"content\" class=\"column\"><section class=\"section\">

        ";
        // line 192
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 193
            echo "          <div id=\"breadcrumb\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 195
        echo "
        <a id=\"main-content\"></a>
        ";
        // line 197
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
        ";
        // line 198
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo "<h1 class=\"title\" id=\"page-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>";
        }
        // line 199
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
        ";
        // line 200
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 201
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
            ";
            // line 202
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
          </nav>
        ";
        }
        // line 205
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
        ";
        // line 206
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            echo "<ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>";
        }
        // line 207
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "


      </section></main> <!-- /.section, /#content -->


      <!-- sidebar (first) -->
      ";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 215
            echo "        <div id=\"sidebar-first\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 216
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </div></div> <!-- /.section, /#sidebar-first -->
      ";
        }
        // line 219
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 220
            echo "        <div id=\"sidebar-second\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 221
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </div></div> <!-- /.section, /#sidebar-second -->
      ";
        }
        // line 224
        echo "

      <div class=\"clearfix cfie\"></div>

     ";
        // line 228
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array())) || $this->getAttribute(        // line 229
(isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array()))) {
            // line 230
            echo "      <div id=\"bottom-wrapper\">
        <div id=\"bottom-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 234
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array())) {
                // line 235
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 237
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 241
            echo "
                ";
            // line 242
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array())) {
                // line 243
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 245
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 249
            echo "
                ";
            // line 250
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array())) {
                // line 251
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 253
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 257
            echo "
                ";
            // line 258
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array())) {
                // line 259
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 261
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 265
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>


        </div> <!--/#bottom-columns -->
      </div> <!-- /#bottom-wrapper -->
      ";
        }
        // line 272
        echo "
      <div class=\"clearfix cfie\"></div>


      ";
        // line 276
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom", array())) {
            // line 277
            echo "      <div id=\"spacer\" class=\"clearfix cfie\"></div>
      <div id=\"banner-bottom\" class=\"banner clearfix\">";
            // line 278
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 280
        echo "
    </div> <!-- /#main -->
    </div> <!-- /#main-wrapper -->

    <!-- space between contents and footer -->
    <div id=\"spacer\" class=\"clearfix cfie\"></div>

    <div id=\"footer-wrapper\">
     ";
        // line 288
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_second", array())) || $this->getAttribute(        // line 289
(isset($context["page"]) ? $context["page"] : null), "footer_column_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_fourth", array()))) {
            // line 290
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 293
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_first", array())) {
                // line 294
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_columns_width"]) ? $context["footer_columns_width"] : null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 296
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 300
            echo "
                ";
            // line 301
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_second", array())) {
                // line 302
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_columns_width"]) ? $context["footer_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 304
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 308
            echo "
                ";
            // line 309
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_third", array())) {
                // line 310
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_columns_width"]) ? $context["footer_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 312
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 316
            echo "
                ";
            // line 317
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_fourth", array())) {
                // line 318
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_columns_width"]) ? $context["footer_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 320
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 324
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>

      </div> <!--/#footer-columns -->
      ";
        }
        // line 329
        echo "
      ";
        // line 330
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 331
            echo "      <div id=\"footer\"><div class=\"section\">
        ";
            // line 332
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div></div> <!-- /.section, /#footer -->
      ";
        }
        // line 335
        echo "
    </div> <!-- /#footer-wrapper -->


  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/mayo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 335,  568 => 332,  565 => 331,  563 => 330,  560 => 329,  553 => 324,  546 => 320,  540 => 318,  538 => 317,  535 => 316,  528 => 312,  522 => 310,  520 => 309,  517 => 308,  510 => 304,  504 => 302,  502 => 301,  499 => 300,  492 => 296,  486 => 294,  484 => 293,  479 => 290,  477 => 289,  476 => 288,  466 => 280,  461 => 278,  458 => 277,  456 => 276,  450 => 272,  441 => 265,  434 => 261,  428 => 259,  426 => 258,  423 => 257,  416 => 253,  410 => 251,  408 => 250,  405 => 249,  398 => 245,  392 => 243,  390 => 242,  387 => 241,  380 => 237,  374 => 235,  372 => 234,  366 => 230,  364 => 229,  363 => 228,  357 => 224,  351 => 221,  348 => 220,  345 => 219,  339 => 216,  336 => 215,  334 => 214,  323 => 207,  317 => 206,  312 => 205,  306 => 202,  301 => 201,  299 => 200,  294 => 199,  288 => 198,  284 => 197,  280 => 195,  274 => 193,  272 => 192,  262 => 184,  255 => 179,  248 => 175,  242 => 173,  240 => 172,  237 => 171,  230 => 167,  224 => 165,  222 => 164,  219 => 163,  212 => 159,  206 => 157,  204 => 156,  201 => 155,  194 => 151,  188 => 149,  186 => 148,  180 => 144,  178 => 143,  177 => 142,  173 => 140,  166 => 137,  164 => 136,  160 => 134,  154 => 133,  152 => 132,  144 => 126,  138 => 124,  135 => 123,  129 => 120,  125 => 118,  119 => 117,  117 => 116,  114 => 115,  112 => 114,  100 => 105,  97 => 104,  89 => 98,  87 => 97,  84 => 96,  78 => 93,  75 => 92,  73 => 91,  63 => 88,  56 => 86,  48 => 85,  43 => 84,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Mayo's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.menubar: Items for the menubar region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.banner_top: Items for the banner top region.*/
/*  * - page.top_column_first: Items for the top first column.*/
/*  * - page.top_column_second: Items for the top second column.*/
/*  * - page.top_column_third: Items for the top third column.*/
/*  * - page.top_column_fourth: Items for the top fourth column.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.bottom_column_first: Items for the bottom first column.*/
/*  * - page.bottom_column_second: Items for the bottom second column.*/
/*  * - page.bottom_column_third: Items for the bottom third column.*/
/*  * - page.bottom_column_fourth: Items for the bottom fourth column.*/
/*  * - page.banner_bottom: Items for the bottom banner region.*/
/*  * - page.footer_column_first: Items for the first footer column.*/
/*  * - page.footer_column_second: Items for the second footer column.*/
/*  * - page.footer_column_third: Items for the third footer column.*/
/*  * - page.footer_column_forth: Items for the fourth footer column.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see mayo_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div id="page-wrapper" style="{{ page_wrapper_style }}">*/
/* <div id="page"{% if page_style %} style="{{ page_style }}"{% endif %}>*/
/*     <header id="header" role="banner" style="{{ header_style }}" aria-label="{{ 'Site header'|t}}">*/
/*     <div class="section clearfix">*/
/*     <div id="header-watermark"{% if header_watermark_style %} style="{{ header_watermark_style }}" {% endif %}>*/
/*     <div class="section clearfix">*/
/* */
/*       {% if header_searchbox %}*/
/*         <div id="header-searchbox">*/
/*        {{ output_form }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if header_fontsizer %}*/
/*         <div id="header-fontsizer">*/
/*         <a href="#" class="decreaseFont" title="Decrease text size"></a>*/
/*         <a href="#" class="resetFont"    title="Restore default text size"></a>*/
/*         <a href="#" class="increaseFont" title="Increase text size"></a>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     {{ page.header }}*/
/* */
/*     </div> <!-- /.section -->*/
/*     </div> <!-- /#header-watermark -->*/
/*     </div></header> <!-- /#header -->*/
/* */
/*     <div class="clearfix cfie"></div>*/
/* */
/*     <!-- for nice_menus, superfish -->*/
/*     {% if page.menubar %}*/
/*     <div id="menubar" class="menubar clearfix"*/
/*       {%  if menubar_background %}*/
/*         style="{{ menubar_bg_value }}"*/
/*         {% endif %}>*/
/* */
/*       {{ page.menubar }}*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if page.highlighted %}*/
/*       {{ page.highlighted }}*/
/*     {% endif %}*/
/* */
/*     <!-- space between menus and contents -->*/
/*     <div class="spacer clearfix cfie"></div>*/
/* */
/*     <div id="main-wrapper">*/
/*     <div id="main" class="clearfix"*/
/*       {%  if main_style %}*/
/*         style="{{ main_style }}"*/
/*         {% endif %}>*/
/* */
/*       {% if page.banner_top %}*/
/*       <div id="banner-top" class="banner clearfix">{{ page.banner_top }}</div>*/
/*       <div class="spacer clearfix cfie"></div>*/
/*       {% endif %}*/
/* */
/* */
/*      {% if page.top_column_first or page.top_column_second or*/
/*               page.top_column_third or page.top_column_fourth %}*/
/*       <div id="top-wrapper">*/
/*         <div id="top-columns" class="clearfix">*/
/*           <div class="column-blocks clearfix">*/
/*                 <!--column-blocks -->*/
/*                 {% if page.top_column_first %}*/
/*                   <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                     <div class="column-block clearfix">*/
/*                       {{ page.top_column_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_second %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.top_column_second }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_third %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.top_column_third }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_fourth %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.top_column_fourth }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*           </div>  <!--/.column-blocks -->*/
/*           <div class="spacer clearfix cfie"></div>*/
/*         </div> <!--/#top-columns -->*/
/*       </div> <!-- /#top-wrapper -->*/
/*       {% endif %}*/
/* */
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/* */
/*       <!-- main content -->*/
/*       <main id="content" class="column"><section class="section">*/
/* */
/*         {% if page.breadcrumb %}*/
/*           <div id="breadcrumb">{{ page.breadcrumb }}</div>*/
/*         {% endif %}*/
/* */
/*         <a id="main-content"></a>*/
/*         {{ title_prefix }}*/
/*         {% if title %}<h1 class="title" id="page-title">{{ title }}</h1>{% endif %}*/
/*         {{ title_suffix }}*/
/*         {% if tabs %}*/
/*           <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*             {{ tabs }}*/
/*           </nav>*/
/*         {% endif %}*/
/*         {{ page.help }}*/
/*         {% if action_links %}<ul class="action-links">{{ action_links }}</ul>{% endif %}*/
/*         {{ page.content }}*/
/* */
/* */
/*       </section></main> <!-- /.section, /#content -->*/
/* */
/* */
/*       <!-- sidebar (first) -->*/
/*       {% if (page.sidebar_first) %}*/
/*         <div id="sidebar-first" class="column sidebar"><div class="section">*/
/*           {{ page.sidebar_first }}*/
/*         </div></div> <!-- /.section, /#sidebar-first -->*/
/*       {% endif %}*/
/*       {% if (page.sidebar_second) %}*/
/*         <div id="sidebar-second" class="column sidebar"><div class="section">*/
/*           {{ page.sidebar_second }}*/
/*         </div></div> <!-- /.section, /#sidebar-second -->*/
/*       {% endif %}*/
/* */
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/*      {% if page.bottom_column_first or page.bottom_column_second or*/
/*               page.bottom_column_third or page.bottom_column_fourth %}*/
/*       <div id="bottom-wrapper">*/
/*         <div id="bottom-columns" class="clearfix">*/
/*           <div class="column-blocks clearfix">*/
/*                 <!--column-blocks -->*/
/*                 {% if page.bottom_column_first %}*/
/*                   <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                     <div class="column-block clearfix">*/
/*                       {{ page.bottom_column_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_second %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.bottom_column_second }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_third %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.bottom_column_third }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_fourth %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.bottom_column_fourth }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*           </div>  <!--/.column-blocks -->*/
/*           <div class="spacer clearfix cfie"></div>*/
/* */
/* */
/*         </div> <!--/#bottom-columns -->*/
/*       </div> <!-- /#bottom-wrapper -->*/
/*       {% endif %}*/
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/* */
/*       {% if page.banner_bottom %}*/
/*       <div id="spacer" class="clearfix cfie"></div>*/
/*       <div id="banner-bottom" class="banner clearfix">{{ page.banner_bottom }}</div>*/
/*       {% endif %}*/
/* */
/*     </div> <!-- /#main -->*/
/*     </div> <!-- /#main-wrapper -->*/
/* */
/*     <!-- space between contents and footer -->*/
/*     <div id="spacer" class="clearfix cfie"></div>*/
/* */
/*     <div id="footer-wrapper">*/
/*      {% if page.footer_column_first or page.footer_column_second or*/
/*               page.footer_column_third or page.footer_column_fourth %}*/
/*       <div id="footer-columns" class="clearfix">*/
/*           <div class="column-blocks clearfix">*/
/*                 <!--column-blocks -->*/
/*                 {% if page.footer_column_first %}*/
/*                   <div class="column-block-wrapper clearfix" style="width: {{ footer_columns_width }}">*/
/*                     <div class="column-block clearfix">*/
/*                       {{ page.footer_column_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.footer_column_second %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ footer_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.footer_column_second }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.footer_column_third %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ footer_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.footer_column_third }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.footer_column_fourth %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ footer_columns_width }}">*/
/*                       <div class="column-block clearfix">*/
/*                         {{ page.footer_column_fourth }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*           </div>  <!--/.column-blocks -->*/
/*           <div class="spacer clearfix cfie"></div>*/
/* */
/*       </div> <!--/#footer-columns -->*/
/*       {% endif %}*/
/* */
/*       {% if page.footer %}*/
/*       <div id="footer"><div class="section">*/
/*         {{ page.footer }}*/
/*       </div></div> <!-- /.section, /#footer -->*/
/*       {% endif %}*/
/* */
/*     </div> <!-- /#footer-wrapper -->*/
/* */
/* */
/*   </div> <!-- /#page -->*/
/* </div> <!-- /#page-wrapper -->*/
/* */
