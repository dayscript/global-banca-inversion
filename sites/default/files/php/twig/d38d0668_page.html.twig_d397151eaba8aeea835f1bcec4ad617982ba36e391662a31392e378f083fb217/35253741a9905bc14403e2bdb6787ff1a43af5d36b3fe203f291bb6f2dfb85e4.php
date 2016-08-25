<?php

/* themes/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_75d3b6a2e11c1eca6651b50b262fa64fa96415108535cc6876484585553dcb5a extends Twig_Template
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
        $tags = array("if" => 69, "spaceless" => 160);
        $filters = array("t" => 81, "date" => 203);
        $functions = array("path" => 111);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array('t', 'date'),
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

        // line 57
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array())) {
            // line 70
            echo "        ";
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 71
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 74
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
            echo "
        ";
            // line 75
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 76
                echo "            </div>
          </div>
        ";
            }
            // line 79
            echo "      ";
        }
        // line 80
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
        ";
        // line 82
        if (((isset($context["linked_site_name"]) ? $context["linked_site_name"] : null) || (isset($context["linked_logo"]) ? $context["linked_logo"] : null))) {
            // line 83
            echo "          <div class=\"large-2 columns\">
            ";
            // line 84
            if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                // line 85
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                echo "
            ";
            }
            // line 87
            echo "          </div>
          <div class=\"left large-4 columns\">
            ";
            // line 89
            if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
                // line 90
                echo "              <h1 id=\"site-name\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                echo "</h1>
            ";
            } else {
                // line 92
                echo "              <div id=\"site-name\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                echo "</div>
            ";
            }
            // line 94
            echo "          </div>
        ";
        }
        // line 96
        echo "      </header>

      ";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 99
            echo "        <div class=\"row\">
          <div class=\"large-12 columns\">
            ";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 105
        echo "
      <div class=\"row\">
        ";
        // line 107
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 108
            echo "          <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 110
            if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
                // line 111
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 112
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 114
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 115
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 117
            echo "            </p>
          </div>
        ";
        }
        // line 120
        echo "        ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 121
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 125
        echo "        ";
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 126
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 139
        echo "      </div>

      ";
        // line 141
        if (((isset($context["messages"]) ? $context["messages"] : null) &&  !(isset($context["zurb_foundation_messages_modal"]) ? $context["zurb_foundation_messages_modal"] : null))) {
            // line 142
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 148
        echo "
      ";
        // line 149
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 150
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 156
        echo "
      <div class=\"row\">
        <main id=\"main\" class=\"";
        // line 158
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " columns\" role=\"main\">
          ";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 160
            echo "            ";
            ob_start();
            // line 161
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 163
            echo "          ";
        }
        // line 164
        echo "          <a id=\"main-content\"></a>
          ";
        // line 165
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo " ";
        }
        // line 166
        echo "          <section>
            ";
        // line 167
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
        ";
        // line 170
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 171
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " columns sidebar \">
            ";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 175
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 176
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " columns sidebar\">
            ";
            // line 177
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 180
        echo "      </div>
      ";
        // line 181
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()))) {
            // line 182
            echo "        <footer class=\"row\">
          ";
            // line 183
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 184
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 185
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 188
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) {
                // line 189
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 190
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 193
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array())) {
                // line 194
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 195
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 198
            echo "        </footer>
      ";
        }
        // line 200
        echo "      <div class=\"bottom-bar panel\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 203
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("All rights reserved.")));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 203,  381 => 200,  377 => 198,  371 => 195,  368 => 194,  365 => 193,  359 => 190,  356 => 189,  353 => 188,  347 => 185,  344 => 184,  342 => 183,  339 => 182,  337 => 181,  334 => 180,  328 => 177,  323 => 176,  320 => 175,  314 => 172,  309 => 171,  307 => 170,  301 => 167,  298 => 166,  292 => 165,  289 => 164,  286 => 163,  280 => 161,  277 => 160,  275 => 159,  271 => 158,  267 => 156,  260 => 152,  256 => 150,  254 => 149,  251 => 148,  244 => 144,  240 => 142,  238 => 141,  234 => 139,  224 => 134,  214 => 129,  209 => 126,  206 => 125,  200 => 122,  197 => 121,  194 => 120,  189 => 117,  182 => 115,  175 => 114,  168 => 112,  161 => 111,  159 => 110,  153 => 108,  151 => 107,  147 => 105,  140 => 101,  136 => 99,  134 => 98,  130 => 96,  126 => 94,  120 => 92,  114 => 90,  112 => 89,  108 => 87,  102 => 85,  100 => 84,  97 => 83,  95 => 82,  91 => 81,  88 => 80,  85 => 79,  80 => 76,  78 => 75,  73 => 74,  68 => 71,  65 => 70,  63 => 69,  56 => 65,  49 => 61,  43 => 57,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Zurb Foundations's theme implementation to display a single page.*/
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
/*  * - linked_logo: The logo image, linked to <front>.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - linked_site_name: The name of the site that also links to <front>.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.meta_header*/
/*  * - page.header*/
/*  * - page.help*/
/*  * - page.highlighted*/
/*  * - page.content*/
/*  * - page.sidebar_first*/
/*  * - page.sidebar_second*/
/*  * - page.footer_first*/
/*  * - page.footer_middle*/
/*  * - page.footer_last*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div class="off-canvas-wrapper">*/
/*   <div class="inner-wrap off-canvas-wrapper-inner" id="inner-wrap" data-off-canvas-wrapper>*/
/*     <aside id="left-off-canvas-menu" class="off-canvas left-off-canvas-menu position-left" role="complementary" data-off-canvas>*/
/*       {{ page.left_off_canvas }}*/
/*     </aside>*/
/* */
/*     <aside id="right-off-canvas-menu" class="off-canvas right-off-canvas-menu position-right" role="complementary" data-off-canvas>*/
/*       {{ page.right_off_canvas }}*/
/*     </aside>*/
/* */
/*     <div class="off-canvas-content" data-off-canvas-content>*/
/*       {% if page.meta_header %}*/
/*         {% if meta_header_grid %}*/
/*           <div class="row">*/
/*             <div class="large-12 columns">*/
/*         {% endif %}*/
/*         {{ page.meta_header }}*/
/*         {% if meta_header_grid %}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/*       <header class="row" role="banner" aria-label="{{ 'Site header'|t }}">*/
/*         {% if linked_site_name or linked_logo %}*/
/*           <div class="large-2 columns">*/
/*             {% if linked_logo %}*/
/*               {{ linked_logo }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="left large-4 columns">*/
/*             {% if is_front %}*/
/*               <h1 id="site-name">{{ linked_site_name }}</h1>*/
/*             {% else %}*/
/*               <div id="site-name">{{ linked_site_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/*       </header>*/
/* */
/*       {% if page.header %}*/
/*         <div class="row">*/
/*           <div class="large-12 columns">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         {% if show_account_info %}*/
/*           <div class="{{ site_slogan ? 'large-6' : 'large-4 columns large-offset-8' }} columns hide-for-small">*/
/*             <p>*/
/*               {% if logged_in %}*/
/*                 <a href="{{ path('user.page') }}">{{ 'My Account'|t }}</a>*/
/*                 <a href="{{ path('user.logout') }}">{{ 'Logout'|t }}</a>*/
/*               {% else %}*/
/*                 <a href="{{ path('user.login') }}">{{ 'Login'|t }}</a>*/
/*                 <a href="{{ path('user.register') }}">{{ 'Sign Up'|t }}</a>*/
/*               {% endif %}*/
/*             </p>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if site_slogan %}*/
/*           <div class="large-6 columns hide-for-small">*/
/*             {{ site_slogan }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if show_account_info %}*/
/*           <div class="show-for-small">*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.login') }}" class="radius button">{{ 'Login'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.register') }}" class="radius success button">{{ 'Sign Up'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {% if messages and not zurb_foundation_messages_modal %}*/
/*       <div class="l-messages row">*/
/*         <div class="large-12 columns">*/
/*           {{ messages }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.help %}*/
/*       <div class="l-help row">*/
/*         <div class="large-12 columns">*/
/*           {{ page.help }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         <main id="main" class="{{ main_grid }} columns" role="main">*/
/*           {% if page.highlighted %}*/
/*             {% spaceless %}*/
/*               {{ page.highlighted }}*/
/*             {% endspaceless %}*/
/*           {% endif %}*/
/*           <a id="main-content"></a>*/
/*           {% if breadcrumb %} {{ breadcrumb }} {% endif %}*/
/*           <section>*/
/*             {{ page.content }}*/
/*           </section>*/
/*         </main>*/
/*         {% if page.sidebar_first %}*/
/*           <div id="sidebar-first" class="{{ sidebar_first_grid }} columns sidebar ">*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_second %}*/
/*           <div id="sidebar-second" class="{{ sidebar_sec_grid }} columns sidebar">*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       {% if page.footer_first or page.footer_middle or page.footer_last %}*/
/*         <footer class="row">*/
/*           {% if page.footer_first %}*/
/*             <div id="footer-first" class="large-4 columns">*/
/*               {{ page.footer_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_middle %}*/
/*             <div id="footer-middle" class="large-4 columns">*/
/*               {{ page.footer_middle }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_last %}*/
/*             <div id="footer-last" class="large-4 columns">*/
/*               {{ page.footer_last }}*/
/*             </div>*/
/*           {% endif %}*/
/*         </footer>*/
/*       {% endif %}*/
/*       <div class="bottom-bar panel">*/
/*         <div class="row">*/
/*           <div class="large-12 columns">*/
/*           &copy; {{ "now"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
