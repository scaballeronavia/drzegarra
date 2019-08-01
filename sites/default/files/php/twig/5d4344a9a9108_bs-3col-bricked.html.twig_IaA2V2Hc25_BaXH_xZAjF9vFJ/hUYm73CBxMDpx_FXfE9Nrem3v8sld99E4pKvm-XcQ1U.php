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

/* modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig */
class __TwigTemplate_963d3b07b6f50e69472b6198a28acff1538df1be0768007a77f5fa6233cf7dd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 30];
        $filters = ["escape" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 27
        echo "<";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "

  ";
        // line 30
        if ($this->getAttribute(($context["top"] ?? null), "content", [])) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute(($context["top_left"] ?? null), "content", [])) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_left"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        if ($this->getAttribute(($context["top_middle"] ?? null), "content", [])) {
            // line 43
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if ($this->getAttribute(($context["top_right"] ?? null), "content", [])) {
            // line 49
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["top_right"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["middle"] ?? null), "content", [])) {
            // line 55
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if ($this->getAttribute(($context["bottom_left"] ?? null), "content", [])) {
            // line 61
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_left"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["bottom_middle"] ?? null), "content", [])) {
            // line 67
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_middle"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ($this->getAttribute(($context["bottom_right"] ?? null), "content", [])) {
            // line 73
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom_right"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ($this->getAttribute(($context["bottom"] ?? null), "content", [])) {
            // line 79
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "wrapper", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "content", [])), "html", null, true);
            echo "
  </";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bottom"] ?? null), "wrapper", [])), "html", null, true);
            echo ">
  ";
        }
        // line 83
        echo "
</";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null)), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 84,  243 => 83,  238 => 81,  234 => 80,  228 => 79,  226 => 78,  223 => 77,  218 => 75,  214 => 74,  208 => 73,  206 => 72,  203 => 71,  198 => 69,  194 => 68,  188 => 67,  186 => 66,  183 => 65,  178 => 63,  174 => 62,  168 => 61,  166 => 60,  163 => 59,  158 => 57,  154 => 56,  148 => 55,  146 => 54,  143 => 53,  138 => 51,  134 => 50,  128 => 49,  126 => 48,  123 => 47,  118 => 45,  114 => 44,  108 => 43,  106 => 42,  103 => 41,  98 => 39,  94 => 38,  88 => 37,  86 => 36,  83 => 35,  78 => 33,  74 => 32,  68 => 31,  66 => 30,  61 => 28,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/bootstrap_layouts/templates/3.0.0/bs-3col-bricked.html.twig", "C:\\xampp\\htdocs\\drzegarra\\modules\\bootstrap_layouts\\templates\\3.0.0\\bs-3col-bricked.html.twig");
    }
}
