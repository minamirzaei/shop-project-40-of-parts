<?php

/* admin/layout.html.twig */
class __TwigTemplate_acc50e78c1f7092e41bd087f813f4540dbcc69b38576d5c911910ee9e21ca89a extends Twig_Template
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
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/index.php\"> محصولات </a></li>
                <li><a href=\"#\"> ورود به سیستم</a></li>
                <li><a href=\"#\"> ثبت نام </a></li>
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
            <div id=\"box-product\">
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/index.php\">محصولات</a>
                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/category-create.php?parent_id=";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\">افزودن دسته</a>
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/category-list.php\">لیست دسته ها</a>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/create.php\">افزودن محصول</a>



                ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "


            </div>





        </div>



    </body>
</html>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  103 => 41,  84 => 44,  82 => 41,  75 => 37,  71 => 36,  65 => 35,  61 => 34,  55 => 30,  49 => 25,  42 => 19,  37 => 16,  28 => 7,  20 => 1,);
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
/*                 <li><a href="{{path}}/admin/index.php"> محصولات </a></li>*/
/*                 <li><a href="#"> ورود به سیستم</a></li>*/
/*                 <li><a href="#"> ثبت نام </a></li>*/
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
/*             <div id="box-product">*/
/*                 <a href="{{path}}/admin/products/index.php">محصولات</a>*/
/*                 <a href="{{path}}/admin/products/category-create.php?parent_id={{parent_id}}">افزودن دسته</a>*/
/*                 <a href="{{path}}/admin/products/category-list.php">لیست دسته ها</a>*/
/*                 <a href="{{path}}/admin/products/create.php">افزودن محصول</a>*/
/* */
/* */
/* */
/*                 {% block content %}*/
/* */
/*                 {% endblock  %}*/
/* */
/* */
/* */
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
