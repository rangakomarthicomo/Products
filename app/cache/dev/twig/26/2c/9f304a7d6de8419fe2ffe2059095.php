<?php

/* RangaCatalogBundle:Category:edit.html.twig */
class __TwigTemplate_262c9f304a7d6de8419fe2ffe2059095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">
    <div class=\"content\">
      <div class=\"row\">
        <div class=\"login-form\">
    <h1>Category edit</h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
    </div>
        </div>
            </div>
             </div>
";
    }

    public function getTemplateName()
    {
        return "RangaCatalogBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  90 => 36,  70 => 28,  104 => 47,  23 => 1,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 30,  63 => 15,  59 => 6,  28 => 3,  87 => 25,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 53,  91 => 38,  62 => 24,  49 => 21,  38 => 6,  25 => 5,  93 => 28,  88 => 6,  78 => 35,  46 => 15,  44 => 48,  31 => 5,  26 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 35,  68 => 14,  56 => 23,  27 => 4,  21 => 2,  24 => 2,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 49,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 50,  111 => 37,  108 => 45,  101 => 32,  98 => 43,  96 => 39,  83 => 25,  74 => 29,  66 => 25,  55 => 15,  52 => 21,  50 => 19,  43 => 15,  41 => 5,  35 => 44,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 57,  109 => 48,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 40,  82 => 31,  80 => 19,  73 => 29,  64 => 27,  60 => 26,  57 => 23,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 47,  39 => 11,  36 => 5,  33 => 6,  30 => 7,);
    }
}
