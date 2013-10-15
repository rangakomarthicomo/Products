<?php

/* RangaCatalogBundle:Product:show.html.twig */
class __TwigTemplate_e7abcceb3c6e0dac74b3bc3191c109fc extends Twig_Template
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
    <h1>Product</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "summary"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 31
        if (($this->getAttribute($this->getContext($context, "entity"), "isActive") == 1)) {
            echo "Yes";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "slug"), "html", null, true);
        echo "</td>
            </tr>
           
        
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 53
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
        return "RangaCatalogBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 53,  100 => 49,  92 => 44,  80 => 35,  71 => 31,  64 => 27,  57 => 23,  50 => 19,  43 => 15,  31 => 5,  28 => 3,);
    }
}
