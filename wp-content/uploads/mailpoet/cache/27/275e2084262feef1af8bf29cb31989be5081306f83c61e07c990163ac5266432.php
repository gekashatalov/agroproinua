<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* form/front_end_form.html */
class __TwigTemplate_65f4aa8dc03a9724ea7a23010411931d8864c71ddc3acabe05f309c9e480b710 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "  ";
        if (($context["before_widget"] ?? null)) {
            // line 3
            echo "    ";
            echo ($context["before_widget"] ?? null);
            echo "
  ";
        }
        // line 5
        echo "
  ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "    ";
            echo ($context["before_title"] ?? null);
            echo ($context["title"] ?? null);
            echo ($context["after_title"] ?? null);
            echo "
  ";
        }
        // line 9
        echo "
  <div class=\"mailpoet_form_popup_overlay\"></div>
  <div id=\"";
        // line 11
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_html_id"] ?? null), "html", null, true);
        echo "\" class=\"mailpoet_form mailpoet_form_";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_type"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 12
        if (((($context["form_type"] ?? null) == "popup") || (($context["form_type"] ?? null) == "fixed_bar"))) {
            // line 13
            echo "      <img
        class=\"mailpoet_form_close_icon\"
        alt=\"close\"
        width=15
        height=15
        src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4NDcgMTA1OC44Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTc2LjIgMjAzLjVoNDc3Ljd2NDM2LjZIMTc2LjJ6Ii8+PHBhdGggZD0iTTE0MCAxNDBjMTU2LTE1NyA0MTAtMTU3IDU2NyAwIDE1NyAxNTYgMTU3IDQxMCAwIDU2N3MtNDExIDE1Ny01NjcgMGMtMTU3LTE1Ny0xNTctNDExIDAtNTY3em0xOTEgMTM0bDkyIDkyIDkzLTkyYzM3LTM4IDk0IDE5IDU3IDU3bC05MyA5MiA5MyA5M2MzNyAzNy0yMCA5NC01NyA1N2wtOTMtOTMtOTIgOTNjLTM4IDM3LTk1LTIwLTU3LTU3bDkyLTkzLTkyLTkyYy0zOC0zOCAxOS05NSA1Ny01N3oiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIi8+PC9zdmc+'
      >
    ";
        }
        // line 21
        echo "    ";
        echo ($context["styles"] ?? null);
        echo "
    <form
      target=\"_self\"
      method=\"post\"
      action=\"";
        // line 25
        echo admin_url("admin-post.php?action=mailpoet_subscription_form");
        echo "\"
      class=\"mailpoet_form mailpoet_form_form mailpoet_form_";
        // line 26
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_type"] ?? null), "html", null, true);
        echo "\"
      novalidate
      style=\"";
        // line 28
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_element_styles"] ?? null), "html", null, true);
        echo "\"
      data-delay=\"";
        // line 29
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["delay"] ?? null), "html", null, true);
        echo "\"
      data-position=\"";
        // line 30
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
      data-background-color=\"";
        // line 31
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["backgroundColor"] ?? null), "html", null, true);
        echo "\"
    >
      <input type=\"hidden\" name=\"data[form_id]\" value=\"";
        // line 33
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"token\" value=\"";
        // line 34
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"api_version\" value=\"";
        // line 35
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["api_version"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"endpoint\" value=\"subscribers\" />
      <input type=\"hidden\" name=\"mailpoet_method\" value=\"subscribe\" />

      ";
        // line 39
        echo ($context["html"] ?? null);
        echo "
      <div class=\"mailpoet_message\">
        <p class=\"mailpoet_validate_success\"
        ";
        // line 42
        if ( !($context["success"] ?? null)) {
            // line 43
            echo "        style=\"display:none;\"
        ";
        }
        // line 45
        echo "        >";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["form_success_message"] ?? null), "html", null, true);
        echo "
        </p>
        <p class=\"mailpoet_validate_error\"
        ";
        // line 48
        if ( !($context["error"] ?? null)) {
            // line 49
            echo "        style=\"display:none;\"
        ";
        }
        // line 51
        echo "        >";
        if (($context["error"] ?? null)) {
            // line 52
            echo "        ";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error occurred, make sure you have filled all the required fields.");
            echo "
        ";
        }
        // line 54
        echo "        </p>
      </div>
    </form>
  </div>

  ";
        // line 59
        if (($context["after_widget"] ?? null)) {
            // line 60
            echo "    ";
            echo ($context["after_widget"] ?? null);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "form/front_end_form.html";
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  171 => 59,  164 => 54,  158 => 52,  155 => 51,  151 => 49,  149 => 48,  142 => 45,  138 => 43,  136 => 42,  130 => 39,  123 => 35,  119 => 34,  115 => 33,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  93 => 26,  89 => 25,  81 => 21,  71 => 13,  69 => 12,  63 => 11,  59 => 9,  51 => 7,  49 => 6,  46 => 5,  40 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/front_end_form.html", "/home2/newsitea/clean.a-deco.net/wp-content/plugins/mailpoet/views/form/front_end_form.html");
    }
}
