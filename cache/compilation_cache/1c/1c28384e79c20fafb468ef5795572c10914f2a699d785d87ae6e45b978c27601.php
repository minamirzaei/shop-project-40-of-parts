<?php

/* admin/products/create.html.twig */
class __TwigTemplate_f3870f87bafc1a53a6193a66bf2e354181e7bf0398a3793778ae5580bee40182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</div>

    <h1> افزودن محصول</h1>
    <form action=\"\" method=\"post\">

        ";
        // line 11
        echo "        <input type=\"text\" name=\"sku\"  class=\"form-create\"  size=\"30\" maxlength=\"2048\" placeholder=\"کد محصول\"/>
        <br />
        <br />
        <input type=\"text\" name=\"name\"  class=\"form-create\"  size=\"30\" maxlength=\"2048\" placeholder=\" نام محصول\" />
        <br />
        <br />
        <input name=\"price\" type=\"text\"  class=\"form-create\"  size=\"30\" maxlength=\"2048\" placeholder=\"قیمت\" />
        <br />
        <br />
        <input name=\"quantity\" type=\"text\"  class=\"form-create\"  size=\"30\" maxlength=\"2048\" placeholder=\"تعداد \" />
        <br />
        <br />
        <input type=\"text\" name=\"description\"  class=\"form-create\" size=\"30\" maxlength=\"2048\" placeholder=\"توضیحات\" />
        ";
        // line 25
        echo "        <br />
        <br />


        دسته<br />
        <select name=\"categories[]\" multiple=\"\"  class=\"form-create\"  /> 

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 33
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</option>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </select>
    <br />
    <br />


    ";
        // line 52
        echo "    <input type=\"submit\"  value=\"ثبت\"  class=\"btn-form-create\"  size=\"10\"  />


</form>


";
    }

    public function getTemplateName()
    {
        return "admin/products/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 52,  82 => 36,  70 => 33,  66 => 32,  57 => 25,  42 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div>{{product.name}}</div>*/
/* */
/*     <h1> افزودن محصول</h1>*/
/*     <form action="" method="post">*/
/* */
/*         {#کد محصول <br />#}*/
/*         <input type="text" name="sku"  class="form-create"  size="30" maxlength="2048" placeholder="کد محصول"/>*/
/*         <br />*/
/*         <br />*/
/*         <input type="text" name="name"  class="form-create"  size="30" maxlength="2048" placeholder=" نام محصول" />*/
/*         <br />*/
/*         <br />*/
/*         <input name="price" type="text"  class="form-create"  size="30" maxlength="2048" placeholder="قیمت" />*/
/*         <br />*/
/*         <br />*/
/*         <input name="quantity" type="text"  class="form-create"  size="30" maxlength="2048" placeholder="تعداد " />*/
/*         <br />*/
/*         <br />*/
/*         <input type="text" name="description"  class="form-create" size="30" maxlength="2048" placeholder="توضیحات" />*/
/*         {# <div id="product-box-name">وضعیت</div><div id="login-box-field"><input type="text" name="status" class="form-login"  size="30" maxlength="2048" /></div>#}*/
/*         <br />*/
/*         <br />*/
/* */
/* */
/*         دسته<br />*/
/*         <select name="categories[]" multiple=""  class="form-create"  /> */
/* */
/*         {% for c in categories %}*/
/*             <option value="{{c.id}}">{{c.name}}</option>*/
/* */
/*         {% endfor%}*/
/* */
/*     </select>*/
/*     <br />*/
/*     <br />*/
/* */
/* */
/*     {# <table border="3" id="table-product" >*/
/*     */
/*     */
/*     */
/*          <form action="" method="post" enctype="multipart/form-data">*/
/*              <tr> <td> نام عکس: <input type="text" name="name"><br><br></td> </tr>*/
/*     */
/*              <tr><td> <input type="file" name="image"></td></tr>*/
/*          </form>*/
/*      </table>#}*/
/*     <input type="submit"  value="ثبت"  class="btn-form-create"  size="10"  />*/
/* */
/* */
/* </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
