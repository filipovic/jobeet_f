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
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
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
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "_format" => "atom")), "html", null, true);
        echo "\">Feed</a>
    </div>
    <h1>";
        // line 17
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        echo "</h1>
  </div>
 
  ";
        // line 20
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        $this->env->loadTemplate("EnsJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute($_category_, "activejobs"))));
        // line 21
        echo " 
  ";
        // line 22
        if (isset($context["last_page"])) { $_last_page_ = $context["last_page"]; } else { $_last_page_ = null; }
        if (($_last_page_ > 1)) {
            // line 23
            echo "    <div class=\"pagination\">
      <a href=\"";
            // line 24
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "page" => 1)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
      </a>
 
      <a href=\"";
            // line 28
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["previous_page"])) { $_previous_page_ = $context["previous_page"]; } else { $_previous_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "page" => $_previous_page_)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
      </a>
 
      ";
            // line 32
            if (isset($context["last_page"])) { $_last_page_ = $context["last_page"]; } else { $_last_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $_last_page_));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "        ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["current_page"])) { $_current_page_ = $context["current_page"]; } else { $_current_page_ = null; }
                if (($_page_ == $_current_page_)) {
                    // line 34
                    echo "          ";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "
        ";
                } else {
                    // line 36
                    echo "          <a href=\"";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "page" => $_page_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
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
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["next_page"])) { $_next_page_ = $context["next_page"]; } else { $_next_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "page" => $_next_page_)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
      </a>
 
      <a href=\"";
            // line 44
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["last_page"])) { $_last_page_ = $context["last_page"]; } else { $_last_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "page" => $_last_page_)), "html", null, true);
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
        if (isset($context["total_jobs"])) { $_total_jobs_ = $context["total_jobs"]; } else { $_total_jobs_ = null; }
        echo twig_escape_filter($this->env, $_total_jobs_, "html", null, true);
        echo "</strong> jobs in this category
 
    ";
        // line 53
        if (isset($context["last_page"])) { $_last_page_ = $context["last_page"]; } else { $_last_page_ = null; }
        if (($_last_page_ > 1)) {
            // line 54
            echo "      - page <strong>";
            if (isset($context["current_page"])) { $_current_page_ = $context["current_page"]; } else { $_current_page_ = null; }
            echo twig_escape_filter($this->env, $_current_page_, "html", null, true);
            echo "/";
            if (isset($context["last_page"])) { $_last_page_ = $context["last_page"]; } else { $_last_page_ = null; }
            echo twig_escape_filter($this->env, $_last_page_, "html", null, true);
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
        return array (  185 => 54,  176 => 51,  172 => 49,  165 => 45,  159 => 44,  144 => 39,  87 => 24,  68 => 17,  79 => 18,  161 => 57,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 19,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 53,  177 => 90,  169 => 84,  167 => 82,  153 => 41,  148 => 77,  145 => 76,  135 => 74,  82 => 19,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 38,  134 => 43,  131 => 35,  122 => 42,  117 => 36,  108 => 54,  102 => 28,  92 => 25,  84 => 23,  72 => 15,  69 => 18,  51 => 11,  48 => 7,  35 => 6,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 40,  127 => 36,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  110 => 32,  89 => 16,  65 => 14,  63 => 13,  58 => 13,  34 => 6,  114 => 29,  109 => 37,  106 => 20,  101 => 19,  85 => 20,  77 => 12,  67 => 14,  28 => 4,  55 => 12,  43 => 7,  26 => 6,  24 => 4,  39 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  227 => 14,  224 => 13,  221 => 90,  207 => 70,  197 => 74,  195 => 56,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 52,  136 => 44,  133 => 45,  130 => 42,  120 => 34,  105 => 53,  100 => 52,  75 => 20,  60 => 12,  53 => 19,  19 => 1,  98 => 28,  88 => 17,  80 => 22,  78 => 21,  46 => 10,  44 => 8,  40 => 8,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 73,  124 => 57,  121 => 32,  118 => 36,  115 => 33,  111 => 32,  107 => 26,  104 => 29,  97 => 24,  93 => 18,  90 => 21,  81 => 22,  70 => 23,  66 => 17,  62 => 15,  59 => 12,  56 => 12,  52 => 10,  49 => 9,  45 => 16,  41 => 7,  37 => 7,  33 => 4,  30 => 3,);
    }
}
