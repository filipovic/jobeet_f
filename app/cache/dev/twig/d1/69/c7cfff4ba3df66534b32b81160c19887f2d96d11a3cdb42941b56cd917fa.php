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
        // line 17
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("ens_job", array("_format" => "atom"));
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
                
            <h1><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("EnsJobeetBundle_homepage");
        echo "\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Post a Job</a>
              </div>
            </div>
                  
            <div class=\"search\">
            <h2>Ask for a job</h2>
            <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ens_job_search");
        echo "\" method=\"get\">
                <input type=\"text\" name=\"query\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <img id=\"loader\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/loader.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
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
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 56
            echo "                <li>
                  <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "job"), "id"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "company"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </ul>
      </div>
      <div id=\"content\">
        ";
        // line 76
        echo "         ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 77
            echo "            ";
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 81
            echo "            ";
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        
        <div class=\"content\">
            ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("ens_job", array("_format" => "atom"));
        echo "\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"";
        // line 102
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
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/js/search.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        // line 86
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
        return array (  236 => 86,  233 => 85,  227 => 15,  222 => 14,  219 => 13,  212 => 11,  209 => 10,  204 => 6,  201 => 5,  190 => 102,  185 => 100,  177 => 95,  172 => 93,  164 => 87,  162 => 85,  158 => 83,  149 => 81,  145 => 80,  142 => 79,  133 => 77,  128 => 76,  123 => 60,  110 => 57,  107 => 56,  103 => 55,  87 => 42,  82 => 40,  78 => 39,  69 => 33,  59 => 26,  55 => 25,  45 => 18,  40 => 17,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,);
    }
}
