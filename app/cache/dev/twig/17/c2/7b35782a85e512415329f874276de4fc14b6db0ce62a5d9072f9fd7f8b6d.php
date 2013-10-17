<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_17c27b35782a85e512415329f874276de4fc14b6db0ce62a5d9072f9fd7f8b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "token"), "method")) {
            // line 15
            echo "        ";
            $this->env->loadTemplate("EnsJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => $this->getContext($context, "entity"))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    
    <div id=\"job\">
      <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
        echo "</h1>
      <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
        echo "
        <small> - ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 26
        if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
            // line 27
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
            echo "\">
            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/jobs/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "logo"), "html", null, true);
            echo "\"
              alt=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo " logo\" />
          </a>
        </div>
      ";
        }
        // line 34
        echo " 
      <div class=\"description\">
        ";
        // line 36
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 
      <div style=\"padding: 20px 0; visibility: hidden;\">
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($this->getContext($context, "entity"), "token"))), "html", null, true);
        echo "\">
          Edit
        </a>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  132 => 44,  126 => 41,  118 => 36,  114 => 34,  107 => 30,  102 => 29,  98 => 28,  95 => 27,  93 => 26,  87 => 23,  83 => 22,  78 => 20,  74 => 19,  70 => 17,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  56 => 12,  50 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
