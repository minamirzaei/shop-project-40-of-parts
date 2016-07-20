<?php

/* user/register.html.twig */
class __TwigTemplate_ff30835597bd786164ab9d396b2fea8d9cc1ea3c2dee5e8d6d6663658f84c97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 13
        echo "    ";
        // line 16
        echo "

    <H2>ثبت نام</H2>
    <form action=\"\" method=\"post\">
        <br />
        <br />
        <div id=\"login-box-name\" style=\"margin-top:20px;\">نام</div><div id=\"login-box-field\" style=\"margin-top:20px;\"><input  name=\"firstname\" type=\"text\" class=\"form-login\"  size=\"30\" maxlength=\"2048\" /></div>
        <div id=\"login-box-name\">نام خانوادگی</div><div id=\"login-box-field\"><input name=\"lastname\" type=\"text\" class=\"form-login\"  size=\"30\" maxlength=\"2048\" /></div>
        <div id=\"login-box-name\">ایمیل</div><div id=\"login-box-field\"><input name=\"email\" type=\"text\" class=\"form-login\"  size=\"30\" maxlength=\"2048\" /></div>
        <div id=\"login-box-name\">رمز </div><div id=\"login-box-field\"><input name=\"password\" type=\"password\" class=\"form-login\"  size=\"30\" maxlength=\"2048\" /></div>

        <br />
        <input type=\"submit\"  value=\"ورود\">  

    </form>
";
    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 16,  33 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {#  <H2>ثبت نام</H2>*/
/*       <form action="" method="post">*/
/*           <br />*/
/*           <br />*/
/*           <div id="login-box-name" style="margin-top:20px;"></div> نام<input type="text"  name="firstname"><br/>*/
/*           <div id="login-box-name"></div> نام خانوادگی<input type="text"   name="lastname"><br/>*/
/*           <div id="login-box-name"></div>ایمیل<input type="email"  name="email"><br/>*/
/*           <div id="login-box-name"></div> رمز <input type="password"  name="password"><br/>*/
/*           {# <input type="password" placeholder="Confrim Password" name="cpassword">#}*/
/*     {# <br />*/
/*      <input type="submit" value="ذخیره" > */
/*  </form>#}*/
/* */
/* */
/*     <H2>ثبت نام</H2>*/
/*     <form action="" method="post">*/
/*         <br />*/
/*         <br />*/
/*         <div id="login-box-name" style="margin-top:20px;">نام</div><div id="login-box-field" style="margin-top:20px;"><input  name="firstname" type="text" class="form-login"  size="30" maxlength="2048" /></div>*/
/*         <div id="login-box-name">نام خانوادگی</div><div id="login-box-field"><input name="lastname" type="text" class="form-login"  size="30" maxlength="2048" /></div>*/
/*         <div id="login-box-name">ایمیل</div><div id="login-box-field"><input name="email" type="text" class="form-login"  size="30" maxlength="2048" /></div>*/
/*         <div id="login-box-name">رمز </div><div id="login-box-field"><input name="password" type="password" class="form-login"  size="30" maxlength="2048" /></div>*/
/* */
/*         <br />*/
/*         <input type="submit"  value="ورود">  */
/* */
/*     </form>*/
/* {% endblock %}*/
/* */
