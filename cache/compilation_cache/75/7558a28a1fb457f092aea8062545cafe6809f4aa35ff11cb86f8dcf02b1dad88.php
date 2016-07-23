<?php

/* admin/products/view.html.twig */
class __TwigTemplate_a428ae9b8b79033f159f1fff318a5f93ed426795b03503a3a61dda1d7749d53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/view.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</div>

    <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array())) > 0)) {
            // line 10
            echo "        <div>
            <table border=\"1\">
                

                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 15
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
            </table>
        </div>
    ";
        } else {
            // line 21
            echo "        دسته ای انتخاب نشده
    ";
        }
        // line 23
        echo "    <div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status", array()), "html", null, true);
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "admin/products/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  83 => 25,  79 => 24,  74 => 23,  70 => 21,  64 => 17,  55 => 15,  51 => 14,  45 => 10,  43 => 9,  39 => 8,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div>{{product.name}}</div>*/
/* */
/*     <div>{{product.name}}</div>*/
/*     {% if product.categories|length >0 %}*/
/*         <div>*/
/*             <table border="1">*/
/*                 */
/* */
/*                 {% for c in product.categories %}*/
/*                     <li>{{c.name}}</li>*/
/*                     {% endfor %}*/
/* */
/*             </table>*/
/*         </div>*/
/*     {% else %}*/
/*         دسته ای انتخاب نشده*/
/*     {% endif %}*/
/*     <div>{{product.description}}</div>*/
/*     <div>{{product.price}}</div>*/
/*     <div>{{product.quantity}}</div>*/
/*     <div>{{product.status}}</div>*/
/* */
/* {% endblock %}*/
