<?php

/* user/layout.html.twig */
class __TwigTemplate_6087f3a8b1fa4c606ad8985e06d9e0c655470092dc640e622a15272a7398f3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"rtl\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/templates/user/box33.css\" rel=\"stylesheet\" type=\"text/css\" />
        <title>Login Box HTML Code - www.onescript.ir</title>

    </head>

    <body>
        ";
        // line 16
        echo "        <div id=\"navigation\">

            <ul>
                ";
        // line 20
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/user/login.php\"> ورود به سیستم</a></li>
                <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/user/register.php\"> ثبت نام </a></li>
                <li><a href=\"#\">تماس با ما</a></li>
                    ";
        // line 25
        echo "
            </ul>
        </div>

        ";
        // line 30
        echo "

        <div style=\"padding: 100px 0 0 250px;\">


            <div id=\"login-box\">

                ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "






            </div>

        </div>



    </body>
</html>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "user/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  88 => 37,  69 => 40,  67 => 37,  58 => 30,  52 => 25,  47 => 21,  42 => 20,  37 => 16,  28 => 7,  20 => 1,);
    }
}
/* */
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* */
/*         <link href="{{path}}/templates/user/box33.css" rel="stylesheet" type="text/css" />*/
/*         <title>Login Box HTML Code - www.onescript.ir</title>*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         {# <div id="main">*/
/*              <div id="top-menu">*/
/*              </div>#}*/
/*         <div id="navigation">*/
/* */
/*             <ul>*/
/*                 {#<li><a href="#"> محصولات </a></li>#}*/
/*                 <li><a href="{{path}}/user/login.php"> ورود به سیستم</a></li>*/
/*                 <li><a href="{{path}}/user/register.php"> ثبت نام </a></li>*/
/*                 <li><a href="#">تماس با ما</a></li>*/
/*                     {# <li><a href="#"> ورزش و سرگرمی </a></li>*/
/*                      <li><a href="#"> مادر و کودک </a></li>#}*/
/* */
/*             </ul>*/
/*         </div>*/
/* */
/*         {#</div>#}*/
/* */
/* */
/*         <div style="padding: 100px 0 0 250px;">*/
/* */
/* */
/*             <div id="login-box">*/
/* */
/*                 {% block content %}*/
/* */
/*                 {% endblock  %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
