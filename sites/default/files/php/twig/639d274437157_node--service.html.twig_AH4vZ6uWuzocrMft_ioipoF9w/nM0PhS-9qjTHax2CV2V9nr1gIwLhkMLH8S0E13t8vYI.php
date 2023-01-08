<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/gavias_daudo/templates/node/node--service.html.twig */
class __TwigTemplate_cbaf7f0b9144a3774c86257c4dad3874 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source)))) : ("")), 7 => "clearfix"];
        // line 13
        echo "
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  <div class=\"service-block\">
    <div class=\"box-content\">
       <div class=\"frontend\">
          <div class=\"frontend-content\">
            <div class=\"service-block-content\">
              ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 20)) {
                // line 21
                echo "                <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 22
            echo "  
              <div class=\"service-content\">
                  <h3 class=\"title\"><a href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</a></h3>
                  <div class=\"desc\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</div>
              </div>
          </div>  
          </div>   
       </div>
       <div class=\"backend\">
          <div class=\"content-be\">
            <div class=\"service-block-content\">
              <div class=\"service-content\">
                <div class=\"service-images lightGallery\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</div>
                <h3 class=\"title\"><a href=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 35, $this->source), "html", null, true);
            echo "</a></h3>
                <div class=\"readmore\"><a class=\"btn-inline\" href=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            echo "</a></div>
              </div>  
            </div>    
          </div>
       </div>
    </div>
  </div> 

";
        } elseif ((        // line 44
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 45
            echo "
  <div class=\"service-block-2\">      
    <div class=\"service-images lightGallery\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
          ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 50)) {
                // line 51
                echo "            <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 52
            echo " 
          <div class=\"content-bottom\">
              <h3 class=\"title\"><a href=\"";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 54, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
            echo "</a></h3>
              <div class=\"desc\">";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</div>
              <div class=\"read-more\">
              <a class=\"link-readmore btn-inline\" href=\"";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 57, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            echo "</a>
            </div>
          </div>  
       </div>    
    </div>
  </div>

";
        } elseif ((        // line 64
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 65
            echo "
  <div class=\"service-block-3 grid\">  
    <div class=\"service-images\">";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</div>
    <div class=\"service-content\">
      ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 69)) {
                // line 70
                echo "        <div class=\"service-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 71
            echo "  
      <h3 class=\"title\"><a href=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 72, $this->source), "html", null, true);
            echo "</a></h3>
      <div class=\"read-more\"><a href=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 73, $this->source), "html", null, true);
            echo "\" class=\"btn-inline\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            echo "</a></div>
    </div>
  </div>

";
        } else {
            // line 78
            echo "
<article";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">
  <div class=\"service-block-singe\">
    <div class=\"service-images-inner\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
      ";
            // line 83
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 83))) {
                // line 84
                echo "          <div class=\"service-icon\"><span class=\"icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</span></div>
        ";
            }
            // line 86
            echo "    </div>
    <div class=\"post-content\">
      ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 88, $this->source), "html", null, true);
            echo "
         <h1";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            echo "      

      <div";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 92), 92, $this->source), "html", null, true);
            echo ">
        ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 93, $this->source), "field_service_images", "field_service_icon", "comment"), "html", null, true);
            echo "
      </div>
      <div id=\"node-single-comment\">
        <div id=\"comments\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
        </div>  
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_daudo/templates/node/node--service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 97,  240 => 93,  236 => 92,  231 => 90,  225 => 89,  221 => 88,  217 => 86,  211 => 84,  209 => 83,  205 => 82,  199 => 79,  196 => 78,  186 => 73,  180 => 72,  177 => 71,  171 => 70,  169 => 69,  164 => 67,  160 => 65,  158 => 64,  146 => 57,  141 => 55,  135 => 54,  131 => 52,  125 => 51,  123 => 50,  117 => 47,  113 => 45,  111 => 44,  98 => 36,  92 => 35,  88 => 34,  76 => 25,  70 => 24,  66 => 22,  60 => 21,  58 => 20,  49 => 14,  46 => 13,  44 => 9,  43 => 8,  42 => 7,  41 => 6,  40 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--service.html.twig", "/var/www/html/themes/custom/gavias_daudo/templates/node/node--service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14);
        static $filters = array("clean_class" => 5, "escape" => 21, "t" => 36, "render" => 83, "without" => 93);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'render', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
