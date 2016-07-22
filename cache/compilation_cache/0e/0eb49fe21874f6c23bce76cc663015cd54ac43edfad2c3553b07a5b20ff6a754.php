<?php

/* admin/products/category-list.html.twig */
class __TwigTemplate_caf700ca70ce586c47fffcb3e9e44340b5e52b306b3371585c19438333e17129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/category-list.html.twig", 1);
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
    <hr>
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["parentName"]) ? $context["parentName"] : null), "html", null, true);
        echo "</h2>
    <hr>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td><a href=\"?parent_id=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</a></td>
            </tr>


        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            <tr>
                <td colspan=\"2\">هیچ زیر دسته ای وجود ندارد</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
   
";
    }

    public function getTemplateName()
    {
        return "admin/products/category-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  90 => 21,  70 => 16,  66 => 15,  63 => 14,  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*    */
/*     <hr>*/
/*     <h2>{{parentName}}</h2>*/
/*     <hr>*/
/*     <table>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Name</th>*/
/*         </tr>*/
/*         {% for c in categories %}*/
/*             <tr>*/
/*                 <td>{{loop.index}}</td>*/
/*                 <td><a href="?parent_id={{c.id}}">{{c.name}}</a></td>*/
/*             </tr>*/
/* */
/* */
/*         {%  else %}*/
/*             <tr>*/
/*                 <td colspan="2">هیچ زیر دسته ای وجود ندارد</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*    */
/* {% endblock %}*/
