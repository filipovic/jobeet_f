<?php

/* EnsJobeetBundle:Job:index.atom.twig */
class __TwigTemplate_91bb91af9eed5f165f5b4f9432ff037351e6749bbef729cd96fce9546cb0f01f extends Twig_Template
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
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("ens_job", array("_format" => "atom"));
        echo "\" rel=\"self\"/>
    <link href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ens_jobeet_homepage");
        echo "\"/>
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "lastUpdated"), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "feedId"), "html", null, true);
        echo "</id>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "category"), "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "        <entry>
            <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
                echo ")</title>
            <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
                echo "\" />
            <id>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "</id>
            <updated>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
                // line 20
                if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
                    // line 21
                    echo "                        <div>
                            <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
                    echo "\">
                                <img src=\"http://";
                    // line 23
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
                // line 27
                echo "                    <div>
                        ";
                // line 28
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
                echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
                echo "</p>
                </div>
            </summary>
            <author><name>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
                echo "</name></author>
        </entry>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  84 => 23,  65 => 16,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  100 => 35,  81 => 26,  172 => 66,  153 => 49,  146 => 45,  113 => 35,  148 => 57,  104 => 31,  77 => 21,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 79,  197 => 5,  186 => 99,  181 => 97,  160 => 84,  129 => 39,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 19,  87 => 29,  94 => 32,  89 => 25,  85 => 25,  75 => 20,  68 => 21,  56 => 12,  28 => 5,  38 => 9,  24 => 4,  26 => 5,  21 => 2,  31 => 5,  25 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 82,  156 => 59,  151 => 63,  142 => 44,  138 => 76,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 12,  19 => 1,  93 => 28,  88 => 6,  78 => 25,  46 => 11,  44 => 13,  27 => 3,  79 => 23,  72 => 23,  69 => 17,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 51,  145 => 78,  139 => 45,  131 => 49,  123 => 38,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 28,  96 => 29,  83 => 24,  74 => 21,  66 => 18,  55 => 14,  52 => 13,  50 => 10,  43 => 11,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 65,  164 => 54,  162 => 53,  154 => 80,  149 => 51,  147 => 56,  144 => 49,  141 => 77,  133 => 55,  130 => 41,  125 => 38,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 53,  99 => 35,  95 => 27,  92 => 28,  86 => 25,  82 => 24,  80 => 22,  73 => 19,  64 => 17,  60 => 6,  57 => 18,  54 => 12,  51 => 15,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 3,);
    }
}
