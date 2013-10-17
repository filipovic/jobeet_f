<?php

/* EnsJobeetBundle:Category:show.html.twig */
class __TwigTemplate_64b4653e4c61fc8fcab286dbc28732e7ef8809cc9dea9abfe6f2bb4fc57307e6 extends Twig_Template
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
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"category\">
    <div class=\"feed\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "_format" => "atom")), "html", null, true);
        echo "\">Feed</a>
    </div>
    <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo "</h1>
  </div>
 
  ";
        // line 20
        $this->env->loadTemplate("EnsJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute($this->getContext($context, "category"), "activejobs"))));
        // line 21
        echo " 
  ";
        // line 22
        if (($this->getContext($context, "last_page") > 1)) {
            // line 23
            echo "    <div class=\"pagination\">
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => 1)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
      </a>
 
      <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
      </a>
 
      ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "        ";
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 34
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 36
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 38
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " 
      <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
      </a>
 
      <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
      </a>
    </div>
  ";
        }
        // line 49
        echo " 
  <div class=\"pagination_desc\">
    <strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "total_jobs"), "html", null, true);
        echo "</strong> jobs in this category
 
    ";
        // line 53
        if (($this->getContext($context, "last_page") > 1)) {
            // line 54
            echo "      - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong>
    ";
        }
        // line 56
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 56,  153 => 49,  146 => 45,  113 => 35,  148 => 57,  104 => 32,  77 => 22,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 6,  197 => 5,  186 => 99,  181 => 97,  160 => 84,  129 => 39,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  87 => 25,  94 => 28,  89 => 25,  85 => 25,  75 => 17,  68 => 14,  56 => 12,  28 => 5,  38 => 6,  24 => 3,  26 => 6,  21 => 2,  31 => 5,  25 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 82,  156 => 66,  151 => 63,  142 => 44,  138 => 76,  136 => 41,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 12,  27 => 3,  79 => 23,  72 => 20,  69 => 18,  47 => 10,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 51,  145 => 78,  139 => 45,  131 => 49,  123 => 38,  120 => 44,  115 => 36,  111 => 37,  108 => 38,  101 => 32,  98 => 29,  96 => 29,  83 => 24,  74 => 21,  66 => 17,  55 => 13,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 90,  164 => 54,  162 => 53,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 77,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 53,  99 => 35,  95 => 28,  92 => 28,  86 => 25,  82 => 24,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
