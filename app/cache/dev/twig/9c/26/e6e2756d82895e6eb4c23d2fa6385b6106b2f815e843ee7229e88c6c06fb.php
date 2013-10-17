<?php

/* EnsJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_9c26e6e2756d82895e6eb4c23d2fa6385b6106b2f815e843ee7229e88c6c06fb extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <updated>";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "lastUpdated"), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "feedId"), "html", null, true);
        echo "</id>

    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "category"), "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
            echo "\" />
            <id>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
                // line 19
                echo "                        <div>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host"), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "logo"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
                echo " logo\" />
                            </a>
                        </div>
                    ";
            }
            // line 25
            echo "                    <div>
                        ";
            // line 26
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo "</name></author>
        </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  148 => 57,  104 => 32,  77 => 22,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 6,  197 => 5,  186 => 99,  181 => 97,  160 => 84,  129 => 74,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  87 => 25,  94 => 28,  89 => 25,  85 => 25,  75 => 17,  68 => 14,  56 => 12,  28 => 5,  38 => 6,  24 => 3,  26 => 6,  21 => 2,  31 => 5,  25 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 82,  156 => 66,  151 => 63,  142 => 59,  138 => 76,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 12,  27 => 3,  79 => 18,  72 => 16,  69 => 18,  47 => 10,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 78,  139 => 45,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 29,  96 => 31,  83 => 24,  74 => 20,  66 => 18,  55 => 13,  52 => 21,  50 => 10,  43 => 9,  41 => 9,  35 => 6,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 90,  164 => 59,  162 => 57,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 77,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 54,  103 => 53,  99 => 35,  95 => 28,  92 => 26,  86 => 28,  82 => 38,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
