<?php

/* RangaCatalogBundle:Category:new.html.twig */
class __TwigTemplate_e6994c4b6463c3b2d27cbff279147e2a extends Twig_Template
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
    <h1>Category creation</h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
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
</ul>
    </div>
              </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "RangaCatalogBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  39 => 11,  31 => 5,  28 => 3,);
    }
}
