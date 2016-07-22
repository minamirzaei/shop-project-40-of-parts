<?php

/* user/login.html.twig */
class __TwigTemplate_670da882a125380aa51b69cc049aab7f0f55e957d730854ef3ff1a299eaf0969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/login.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ( !twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 6
            echo "        <strong>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</strong>
    ";
        }
        // line 8
        echo "    ";
        // line 13
        echo "    <H2>ورود به سیستم</H2>
    <form action=\"\" method=\"post\">
        <br />
        <br />
        <div id=\"login-box-name\" style=\"margin-top:20px;\"></div><div id=\"login-box-field\" style=\"margin-top:20px;\"><input name=\"email\" type=\"text\" class=\"form-login\"  size=\"30\" maxlength=\"2048\" placeholder=\"ایمیل\"/></div>
        <div id=\"login-box-name\"></div><div id=\"login-box-field\"><input name=\"password\" type=\"password\" class=\"form-login\"  size=\"30\" maxlength=\"2048\"  placeholder=\"رمز ورود\"/></div>
        <br />
        <span class=\"login-box-options\"><input type=\"checkbox\" name=\"rememberMe\" value=\"1\"> مرا به خاطر بسپار </span>
        <br />
        <br />
        <input type=\"submit\"  value=\"ورود\"  class=\"btn-form-create\"  size=\"10\"  /> 

    </form>
";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  40 => 8,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "user/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% if message is not empty %}*/
/*         <strong>{{message}}</strong>*/
/*     {% endif %}*/
/*     {# <form action="" method="post">*/
/*          ایمیل: <input type="text" name="email"><br>*/
/*          رمز: <input type="password" name="password"><br>*/
/*          <input type="submit">*/
/*      </form>#}*/
/*     <H2>ورود به سیستم</H2>*/
/*     <form action="" method="post">*/
/*         <br />*/
/*         <br />*/
/*         <div id="login-box-name" style="margin-top:20px;"></div><div id="login-box-field" style="margin-top:20px;"><input name="email" type="text" class="form-login"  size="30" maxlength="2048" placeholder="ایمیل"/></div>*/
/*         <div id="login-box-name"></div><div id="login-box-field"><input name="password" type="password" class="form-login"  size="30" maxlength="2048"  placeholder="رمز ورود"/></div>*/
/*         <br />*/
/*         <span class="login-box-options"><input type="checkbox" name="rememberMe" value="1"> مرا به خاطر بسپار </span>*/
/*         <br />*/
/*         <br />*/
/*         <input type="submit"  value="ورود"  class="btn-form-create"  size="10"  /> */
/* */
/*     </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
