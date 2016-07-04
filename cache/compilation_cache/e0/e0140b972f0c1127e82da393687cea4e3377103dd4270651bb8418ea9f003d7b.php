<?php

/* index.html.twig */
class __TwigTemplate_585dc37e09f6a8118618de82c48599820783ac7b602978b3efddd3f8e04654d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1> Hello</h1>
";
        // line 2
        if (((isset($context["eradat"]) ? $context["eradat"] : null) == 1)) {
            // line 3
            echo "Hello ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1> Hello</h1>*/
/* {% if  eradat == 1 %}*/
/* Hello {{name}}*/
/* {% endif %}*/
/* */
