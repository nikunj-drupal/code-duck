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

/* themes/custom/gavias_daudo/templates/node/node--team.html.twig */
class __TwigTemplate_1fc1aadf4aa5040ccce68ead604c38d6 extends Template
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
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 6 => "clearfix"];
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 

  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
      <div class=\"socials-team\">
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20)) {
                // line 21
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 22
            echo " 
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23)) {
                // line 24
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 25
            echo " 
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26)) {
                // line 27
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 28
            echo " 
        ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)) {
                // line 30
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 31
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <h3 class=\"team-name\"><a href=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source));
            echo "</a></h3>
      <div class=\"team-job\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), 36, $this->source));
            echo "</div>
      <div class=\"team-skills\">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 39), 39, $this->source), "--");
                // line 40
                echo "          ";
                if (((($__internal_compile_0 = ($context["skill"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["0"] ?? null) : null) && (($__internal_compile_1 = ($context["skill"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["1"] ?? null) : null))) {
                    // line 41
                    echo "            <div class=\"team-skill\">
              <div class=\"progress-label\">";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["skill"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["0"] ?? null) : null), 42, $this->source), "html", null, true);
                    echo "</div>
               <div class=\"progress\">
                 <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["skill"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["1"] ?? null) : null), 44, $this->source), "html", null, true);
                    echo "%\"><span></span></div>
                 <span class=\"percentage\"><span></span>";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["skill"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["1"] ?? null) : null), 45, $this->source), "html", null, true);
                    echo "%</span>
              </div>
            </div>
          ";
                }
                // line 48
                echo "  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo " 
      </div>
    </div>
  </div>

";
        } elseif ((        // line 54
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 55
            echo "
<div";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"team-content\">
      <h3 class=\"team-name\"><a href=\"";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 62, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source));
            echo "</a></h3>
      ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63)) {
                echo "   
        <div class=\"team-job\">";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source));
                echo "</div>
      ";
            }
            // line 66
            echo "      <div class=\"socials-team\">
        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67)) {
                // line 68
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 69
            echo " 
        ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70)) {
                // line 71
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 72
            echo " 
        ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73)) {
                // line 74
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 75
            echo " 
        ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76)) {
                // line 77
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 78
            echo " 
      </div>
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 86
            echo "<!-- Start Display article for detail page -->

<article";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 88), "addClass", [0 => "node-detail"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), 92, $this->source));
            echo "</div>
      <div class=\"job\">";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</div>
            <div class=\"socials\">
                ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107)) {
                // line 108
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
                ";
            }
            // line 109
            echo " 
                ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110)) {
                // line 111
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
                ";
            }
            // line 112
            echo " 
                ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113)) {
                // line 114
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
                ";
            }
            // line 115
            echo " 
                ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116)) {
                // line 117
                echo "                  <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
                ";
            }
            // line 118
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "</div>
          </div>
          <div class=\"team-skills margin-top-30\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 127
                echo "              ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 127), 127, $this->source), "--");
                // line 128
                echo "              ";
                if (((($__internal_compile_5 = ($context["skill"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["0"] ?? null) : null) && (($__internal_compile_6 = ($context["skill"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["1"] ?? null) : null))) {
                    // line 129
                    echo "                <div class=\"team-skill margin-bottom-10\">
                  <div class=\"progress-label\">";
                    // line 130
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["skill"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["0"] ?? null) : null), 130, $this->source), "html", null, true);
                    echo "</div>
                   <div class=\"progress\">
                     <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 132
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = ($context["skill"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["1"] ?? null) : null), 132, $this->source), "html", null, true);
                    echo "%\"><span></span></div>
                     <span class=\"percentage\"><span></span>";
                    // line 133
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = ($context["skill"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["1"] ?? null) : null), 133, $this->source), "html", null, true);
                    echo "%</span>
                  </div>
                </div>
              ";
                }
                // line 136
                echo "  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo " 
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 143), 143, $this->source), "html", null, true);
            echo ">
      ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 144, $this->source), "field_team_name", "field_team_contact", "field_team_image", "field_team_skills", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo " </div>

    ";
            // line 149
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 149)) {
                // line 150
                echo "      <div id=\"node-single-comment\">
        ";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 153
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_daudo/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 160,  420 => 153,  414 => 151,  411 => 150,  409 => 149,  404 => 147,  398 => 144,  394 => 143,  386 => 137,  379 => 136,  372 => 133,  368 => 132,  363 => 130,  360 => 129,  357 => 128,  354 => 127,  350 => 126,  344 => 123,  340 => 122,  334 => 118,  328 => 117,  326 => 116,  323 => 115,  317 => 114,  315 => 113,  312 => 112,  306 => 111,  304 => 110,  301 => 109,  295 => 108,  293 => 107,  288 => 105,  284 => 104,  277 => 100,  270 => 96,  264 => 93,  260 => 92,  253 => 88,  249 => 86,  239 => 78,  233 => 77,  231 => 76,  228 => 75,  222 => 74,  220 => 73,  217 => 72,  211 => 71,  209 => 70,  206 => 69,  200 => 68,  198 => 67,  195 => 66,  190 => 64,  186 => 63,  180 => 62,  174 => 59,  168 => 56,  165 => 55,  163 => 54,  156 => 49,  149 => 48,  142 => 45,  138 => 44,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  120 => 38,  115 => 36,  109 => 35,  103 => 31,  97 => 30,  95 => 29,  92 => 28,  86 => 27,  84 => 26,  81 => 25,  75 => 24,  73 => 23,  70 => 22,  64 => 21,  62 => 20,  57 => 18,  50 => 14,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--team.html.twig", "/var/www/html/themes/custom/gavias_daudo/templates/node/node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14, "for" => 38);
        static $filters = array("clean_class" => 4, "escape" => 18, "e" => 35, "split" => 39, "t" => 104, "without" => 144);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'split', 't', 'without'],
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
