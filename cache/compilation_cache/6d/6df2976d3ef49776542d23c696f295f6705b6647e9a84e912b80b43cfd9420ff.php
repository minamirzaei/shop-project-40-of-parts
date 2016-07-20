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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"rtl\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />


        <title>Login</title>

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/templates/user/login-box.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body>


        <div style=\"padding: 100px 0 0 250px;\">


            <div id=\"login-box\">

                ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "






            </div>

        </div>

    </body>
</html>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
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
        return array (  66 => 21,  63 => 20,  46 => 23,  44 => 20,  30 => 9,  20 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* */
/* */
/*         <title>Login</title>*/
/* */
/*         <link href="{{path}}/templates/user/login-box.css" rel="stylesheet" type="text/css" />*/
/*     </head>*/
/* */
/*     <body>*/
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
/*     </body>*/
/* </html>*/
/* */
