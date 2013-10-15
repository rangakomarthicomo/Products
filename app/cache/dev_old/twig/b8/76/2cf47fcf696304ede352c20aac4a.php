<?php

/* RangaCatalogBundle:Brand:edit.html.twig */
class __TwigTemplate_b8762cf47fcf696304ede352c20aac4a extends Twig_Template
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
        // line 4
        echo "<div class=\"container\">
    <div class=\"content\">
      <div class=\"row\">
        <div class=\"login-form\">
    <h1>Brand edit</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("brand");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 18
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
        return "RangaCatalogBundle:Brand:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
