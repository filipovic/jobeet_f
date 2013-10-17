<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_d169c7cfff4ba3df66534b32b81160c19887f2d96d11a3cdb42941b56cd917fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("ens_job", array("_format" => "atom"));
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
                
            <h1><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("EnsJobeetBundle_homepage");
        echo "\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Post a Job</a>
              </div>
            </div>
                  
            <div class=\"search\">
            <h2>Ask for a job</h2>
            <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ens_job_search");
        echo "\" method=\"get\">
                <input type=\"text\" name=\"query\" value=\"";
        // line 38
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                    Enter some keywords (city, country, position, ...)
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      
      <div id=\"job_history\">
        Recent viewed jobs:
        <ul>
            ";
        // line 52
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 53
            echo "                <li>
                  <a href=\"";
            // line 54
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($_job_, "id"), "company" => $this->getAttribute($_job_, "companyslug"), "location" => $this->getAttribute($_job_, "locationslug"), "position" => $this->getAttribute($_job_, "positionslug"))), "html", null, true);
            echo "\">";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_job_, "position"), "html", null, true);
            echo " - ";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_job_, "company"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </ul>
      </div>
      <div id=\"content\">
        ";
        // line 73
        echo "         ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "            ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
        ";
        // line 77
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 78
            echo "            ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        
        <div class=\"content\">
            ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("ens_job", array("_format" => "atom"));
        echo "\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("ens_affiliate_new");
        echo "\">Become an affiliate</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Jobeet - Your best job board
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        // line 83
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 92,  177 => 90,  169 => 84,  167 => 82,  153 => 78,  148 => 77,  145 => 76,  135 => 74,  82 => 38,  23 => 1,  54 => 14,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 54,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 31,  51 => 13,  48 => 7,  35 => 10,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  28 => 3,  55 => 23,  43 => 7,  26 => 6,  24 => 4,  39 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  227 => 14,  224 => 13,  221 => 90,  207 => 70,  197 => 74,  195 => 99,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 53,  100 => 52,  75 => 24,  60 => 12,  53 => 19,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 37,  46 => 12,  44 => 9,  40 => 15,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 73,  124 => 57,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 24,  56 => 12,  52 => 10,  49 => 9,  45 => 16,  41 => 9,  37 => 13,  33 => 4,  30 => 3,);
    }
}
