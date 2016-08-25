<?php

/* themes/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_c506d36752122da022dcc6db02e1e85692f0cc069e20b84393660dc886cccb69 extends Twig_Template
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
        $tags = array("import" => 16, "if" => 23, "macro" => 56, "for" => 72, "set" => 74);
        $filters = array();
        $functions = array("link" => 77);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'if', 'macro', 'for', 'set'),
                array(),
                array('link')
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
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
            // line 24
            echo "  ";
            if ((isset($context["top_bar_sticky"]) ? $context["top_bar_sticky"] : null)) {
                // line 25
                echo "  <div id=\"top-bar-sticky-container\" data-sticky-container>
  ";
            }
            // line 27
            echo "    <div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_attributes"]) ? $context["top_bar_attributes"] : null), "html", null, true));
            echo ">
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_menu_text"]) ? $context["top_bar_menu_text"] : null), "html", null, true));
            echo "</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 1)));
            echo "
          ";
            // line 40
            if ((isset($context["top_bar_search"]) ? $context["top_bar_search"] : null)) {
                // line 41
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_search"]) ? $context["top_bar_search"] : null), "html", null, true));
                echo "
          ";
            }
            // line 43
            echo "          ";
            if ((isset($context["top_bar_languageswitcher"]) ? $context["top_bar_languageswitcher"] : null)) {
                // line 44
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_languageswitcher"]) ? $context["top_bar_languageswitcher"] : null), "html", null, true));
                echo "
          ";
            }
            // line 46
            echo "        </div>
      </nav>
    </div>
  ";
            // line 49
            if ((isset($context["top_bar_sticky"]) ? $context["top_bar_sticky"] : null)) {
                // line 50
                echo "  </div>
  ";
            }
        } else {
            // line 53
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 0)));
            echo "
";
        }
        // line 55
        echo "
";
    }

    // line 56
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "  ";
            $context["menus"] = $this;
            // line 58
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 59
                echo "    ";
                if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                    // line 60
                    echo "      ";
                    if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                        // line 61
                        echo "        <ul";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu", 1 => "vertical", 2 => "medium-horizontal"), "method"), "setAttribute", array(0 => "data-responsive-menu", 1 => "drilldown medium-dropdown"), "method"), "html", null, true));
                        echo ">
      ";
                    } else {
                        // line 63
                        echo "        <ul class=\"submenu menu vertical\" data-submenu>
      ";
                    }
                    // line 65
                    echo "    ";
                } else {
                    // line 66
                    echo "      ";
                    if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                        // line 67
                        echo "        <ul";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown", 1 => "menu"), "method"), "html", null, true));
                        echo " data-dropdown-menu>
      ";
                    } else {
                        // line 69
                        echo "        <ul class=\"menu\">
      ";
                    }
                    // line 71
                    echo "    ";
                }
                // line 72
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 73
                    echo "      ";
                    if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                        // line 74
                        echo "        ";
                        $context["item_classes"] = array(0 => (( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) ? ("has-submenu") : ("")));
                        // line 75
                        echo "      ";
                    }
                    // line 76
                    echo "      <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
        ";
                    // line 77
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 78
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 79
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["top_bar"]) ? $context["top_bar"] : null))));
                        echo "
        ";
                    }
                    // line 81
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 83,  213 => 81,  207 => 79,  205 => 78,  201 => 77,  196 => 76,  193 => 75,  190 => 74,  187 => 73,  182 => 72,  179 => 71,  175 => 69,  169 => 67,  166 => 66,  163 => 65,  159 => 63,  153 => 61,  150 => 60,  147 => 59,  144 => 58,  141 => 57,  126 => 56,  121 => 55,  115 => 53,  110 => 50,  108 => 49,  103 => 46,  97 => 44,  94 => 43,  88 => 41,  86 => 40,  82 => 39,  75 => 35,  67 => 30,  60 => 27,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* */
/* {% if top_bar %}*/
/*   {% if top_bar_sticky %}*/
/*   <div id="top-bar-sticky-container" data-sticky-container>*/
/*   {% endif %}*/
/*     <div {{ top_bar_attributes }}>*/
/*       <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">*/
/*         <button class="menu-icon" type="button" data-toggle></button>*/
/*         <div class="title-bar-title">{{ top_bar_menu_text }}</div>*/
/*       </div>*/
/*       <nav class="top-bar" id="main-menu" role="navigation">*/
/*         <div class="top-bar-left">*/
/*           <ul class="dropdown menu" data-dropdown-menu>*/
/*             <li class="menu-text">{{ site_name }}</li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="top-bar-right">*/
/*           {{ menus.menu_links(items, attributes, 0, 1) }}*/
/*           {% if top_bar_search %}*/
/*             {{ top_bar_search }}*/
/*           {% endif %}*/
/*           {% if top_bar_languageswitcher %}*/
/*             {{ top_bar_languageswitcher }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </nav>*/
/*     </div>*/
/*   {% if top_bar_sticky %}*/
/*   </div>*/
/*   {% endif %}*/
/* {% else %}*/
/*   {{ menus.menu_links(items, attributes, 0, 0) }}*/
/* {% endif %}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, top_bar) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if top_bar %}*/
/*       {% if menu_level == 0 %}*/
/*         <ul{{ attributes.addClass('menu', 'vertical', 'medium-horizontal').setAttribute('data-responsive-menu', 'drilldown medium-dropdown') }}>*/
/*       {% else %}*/
/*         <ul class="submenu menu vertical" data-submenu>*/
/*       {% endif %}*/
/*     {% else %}*/
/*       {% if menu_level == 0 %}*/
/*         <ul{{ attributes.addClass('dropdown', 'menu') }} data-dropdown-menu>*/
/*       {% else %}*/
/*         <ul class="menu">*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {% if top_bar %}*/
/*         {% set item_classes = [ item.below is not empty ? 'has-submenu' ] %}*/
/*       {% endif %}*/
/*       <li{{ item.attributes.addClass(item_classes) }}>*/
/*         {{ link(item.title, item.url) }}*/
/*         {% if item.below %}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
