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

/* modules/simplelogin/templates/page--simplelogin.html.twig */
class __TwigTemplate_f0e732484295ccfd31ef8f0d17544f6296a31102bfa057e98582b4c81468d9a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 1];
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
        // line 1
        echo "<div class=\"simplelogin-wrapper ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_class"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_opacity"] ?? null)), "html", null, true);
        echo "\" style=\"\">
  <div class=\"simplelogin-form\" style=\"width: ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_width"] ?? null)), "html", null, true);
        echo "px\">
    <div class=\"simplelogin-link\">
      ";
        // line 4
        if ((($context["path"] ?? null) == "/user/password")) {
            // line 5
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
            echo "user/login\" class=\"signreg\">Login</a>
      ";
        } elseif ((        // line 6
($context["path"] ?? null) == "/user/register")) {
            // line 7
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
            echo "user/login\" class=\"signreg\">Login</a>
      ";
        } else {
            // line 9
            echo "        ";
            if ((($context["site_register"] ?? null) != "admin_only")) {
                // line 10
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
                echo "user/register\" class=\"signreg\">Sign up</a>
        ";
            }
            // line 12
            echo "      ";
        }
        // line 13
        echo "    </div>
    
  <div class=\"simplelogin-bg\">  
    <div class=\"simplelogin-logo\">
      <a href=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "\" alt=\"Home\"/></a>
      <h1>";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo " 

    ";
        // line 24
        if ((($context["path"] ?? null) == "/user/login")) {
            // line 25
            echo "      <div class=\"forgot-password\">Forgot password? <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
            echo "user/password\" class=\"\">Click here</a></div>
    ";
        }
        // line 26
        echo "   

  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/simplelogin/templates/page--simplelogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 26,  123 => 25,  121 => 24,  116 => 22,  112 => 21,  106 => 18,  100 => 17,  94 => 13,  91 => 12,  85 => 10,  82 => 9,  76 => 7,  74 => 6,  69 => 5,  67 => 4,  62 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/simplelogin/templates/page--simplelogin.html.twig", "C:\\xampp\\htdocs\\drzegarra\\modules\\simplelogin\\templates\\page--simplelogin.html.twig");
    }
}
