<?php

/* layout.html.twig */
class __TwigTemplate_96c8fba5790088a1daac5b903df2d736dfd9dda9af68ff67896862842b5ddbcd extends Twig_Template
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
        echo "/templates/user/login-box.css\" rel=\"stylesheet\" type=\"text/css\" />
        <title>Login Box HTML Code - www.onescript.ir</title>

    </head>

    <body>
        <div id=\"main\">
            <div id=\"top-menu\">
            </div>
            <div id=\"navigation\">

                <ul>
                    <li><a href=\"#\"> کالای دیجیتال </a></li>
                    <li><a href=\"#\"> لولزم خانگی </a></li>
                    <li><a href=\"#\"> زیبایی و سلامت </a></li>
                    <li><a href=\"#\">فرهنگ و هنر </a></li>
                    <li><a href=\"#\"> ورزش و سرگرمی </a></li>
                    <li><a href=\"#\"> مادر و کودک </a></li>

                </ul>
            </div>

        </div>


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
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  82 => 37,  63 => 40,  61 => 37,  28 => 7,  20 => 1,);
    }
}
/* */
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* */
/*         <link href="{{path}}/templates/user/login-box.css" rel="stylesheet" type="text/css" />*/
/*         <title>Login Box HTML Code - www.onescript.ir</title>*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         <div id="main">*/
/*             <div id="top-menu">*/
/*             </div>*/
/*             <div id="navigation">*/
/* */
/*                 <ul>*/
/*                     <li><a href="#"> کالای دیجیتال </a></li>*/
/*                     <li><a href="#"> لولزم خانگی </a></li>*/
/*                     <li><a href="#"> زیبایی و سلامت </a></li>*/
/*                     <li><a href="#">فرهنگ و هنر </a></li>*/
/*                     <li><a href="#"> ورزش و سرگرمی </a></li>*/
/*                     <li><a href="#"> مادر و کودک </a></li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/* */
/*         </div>*/
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
