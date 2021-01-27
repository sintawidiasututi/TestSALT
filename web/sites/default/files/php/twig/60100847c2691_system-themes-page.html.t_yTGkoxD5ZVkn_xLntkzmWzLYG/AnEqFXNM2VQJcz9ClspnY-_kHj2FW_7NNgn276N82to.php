<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/system-themes-page.html.twig */
class __TwigTemplate_60234be3f84454e3bc5b211471ed6505f64321f7f77d693e8d378f0f93344e42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 34, "set" => 36, "if" => 71];
        $filters = ["escape" => 33, "length" => 47, "join" => 59, "safe_join" => 79];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'length', 'join', 'safe_join'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 33
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "form-group"], "method")), "html", null, true);
        echo ">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 35
            echo "    ";
            // line 36
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 38
$context["theme_group"], "state", []))), 2 => "clearfix", 3 => "panel", 4 => "panel-default"];
            // line 44
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <div class=\"panel-heading\">
        <a class=\"panel-title\" href=\"#system-themes-list--";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "state", [])), "html", null, true);
            echo "\" aria-controls=\"#system-themes-list--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "state", [])), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-pressed=\"false\" data-toggle=\"collapse\" role=\"button\">
          ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true);
            echo " (";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "themes", []))), "html", null, true);
            echo ")
        </a>
      </div>
      ";
            // line 51
            $context["table_classes"] = [0 => "table", 1 => "panel-collapse", 2 => ((($this->getAttribute(            // line 54
$context["theme_group"], "state", []) == "uninstalled")) ? ("collapse") : ("")), 3 => "fade", 4 => ((($this->getAttribute(            // line 56
$context["theme_group"], "state", []) != "uninstalled")) ? ("in") : (""))];
            // line 59
            echo "      <table id=\"system-themes-list--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "state", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["table_classes"] ?? null)), " "), "html", null, true);
            echo "\">
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 61
                echo "          ";
                // line 62
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 63
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 64
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 69
                echo "          <tr";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method")), "html", null, true);
                echo ">
            <td class=\"col-sm-3\">
              ";
                // line 71
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 72
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true);
                    echo "
              ";
                }
                // line 74
                echo "            </td>
            <td class=\"theme-info col-sm-9\">
              <h4 class=\"theme-info__header\">";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true);
                // line 78
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 79
                    echo "                  (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo ")";
                }
                // line 81
                echo "</h4>
              <div class=\"theme-info__description help-block\">";
                // line 82
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true);
                echo "</div>
              ";
                // line 84
                echo "              ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 85
                    echo "                <div class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true);
                    echo "</div>
              ";
                } else {
                    // line 87
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true);
                    echo "
              ";
                }
                // line 89
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </table>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  169 => 92,  161 => 89,  155 => 87,  149 => 85,  146 => 84,  142 => 82,  139 => 81,  134 => 79,  132 => 78,  128 => 77,  124 => 74,  118 => 72,  116 => 71,  110 => 69,  108 => 64,  107 => 63,  106 => 62,  104 => 61,  100 => 60,  93 => 59,  91 => 56,  90 => 54,  89 => 51,  81 => 47,  75 => 46,  69 => 44,  67 => 38,  66 => 36,  64 => 35,  60 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/system/system-themes-page.html.twig", "C:\\xampp\\htdocs\\SALT\\web\\themes\\bootstrap\\templates\\system\\system-themes-page.html.twig");
    }
}
