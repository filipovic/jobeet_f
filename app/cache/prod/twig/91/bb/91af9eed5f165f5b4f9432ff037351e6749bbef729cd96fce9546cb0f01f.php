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
        if (isset($context["lastUpdated"])) { $_lastUpdated_ = $context["lastUpdated"]; } else { $_lastUpdated_ = null; }
        echo twig_escape_filter($this->env, $_lastUpdated_, "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        if (isset($context["feedId"])) { $_feedId_ = $context["feedId"]; } else { $_feedId_ = null; }
        echo twig_escape_filter($this->env, $_feedId_, "html", null, true);
        echo "</id>

    ";
        // line 11
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "    ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "        <entry>
            <title>";
                // line 14
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
                echo " (";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "location"), "html", null, true);
                echo ")</title>
            <link href=\"";
                // line 15
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute($_entity_, "id"), "company" => $this->getAttribute($_entity_, "companyslug"), "location" => $this->getAttribute($_entity_, "locationslug"), "position" => $this->getAttribute($_entity_, "positionslug"))), "html", null, true);
                echo "\" />
            <id>";
                // line 16
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
                echo "</id>
            <updated>";
                // line 17
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
                // line 20
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ($this->getAttribute($_entity_, "logo")) {
                    // line 21
                    echo "                        <div>
                            <a href=\"";
                    // line 22
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
                    echo "\">
                                <img src=\"http://";
                    // line 23
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "host"), "html", null, true);
                    echo "/uploads/jobs/";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "logo"), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
                    echo " logo\" />
                            </a>
                        </div>
                    ";
                }
                // line 27
                echo "                    <div>
                        ";
                // line 28
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_entity_, "description"), "html", null, true));
                echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
                // line 31
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "howtoapply"), "html", null, true);
                echo "</p>
                </div>
            </summary>
            <author><name>";
                // line 34
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
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
        return array (  126 => 34,  119 => 31,  95 => 23,  316 => 115,  306 => 109,  301 => 108,  286 => 101,  275 => 98,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 73,  205 => 72,  199 => 70,  191 => 66,  123 => 42,  42 => 8,  94 => 27,  91 => 26,  185 => 54,  176 => 51,  172 => 59,  165 => 45,  159 => 44,  144 => 39,  87 => 21,  68 => 17,  79 => 18,  161 => 56,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 20,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 53,  177 => 90,  169 => 84,  167 => 58,  153 => 52,  148 => 51,  145 => 76,  135 => 74,  82 => 19,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 106,  287 => 80,  279 => 78,  256 => 91,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 38,  134 => 45,  131 => 35,  122 => 42,  117 => 36,  108 => 54,  102 => 31,  92 => 25,  84 => 20,  72 => 16,  69 => 18,  51 => 14,  48 => 13,  35 => 6,  29 => 6,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 100,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 84,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 40,  127 => 36,  112 => 28,  96 => 25,  76 => 19,  71 => 17,  110 => 37,  89 => 16,  65 => 14,  63 => 18,  58 => 13,  34 => 7,  114 => 29,  109 => 27,  106 => 20,  101 => 19,  85 => 20,  77 => 17,  67 => 15,  28 => 4,  55 => 12,  43 => 7,  26 => 6,  24 => 4,  39 => 9,  57 => 11,  50 => 12,  47 => 7,  38 => 7,  25 => 5,  227 => 14,  224 => 79,  221 => 90,  207 => 70,  197 => 74,  195 => 56,  192 => 72,  189 => 61,  186 => 65,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 38,  136 => 37,  133 => 45,  130 => 42,  120 => 34,  105 => 32,  100 => 52,  75 => 19,  60 => 12,  53 => 19,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 21,  46 => 10,  44 => 8,  40 => 8,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 44,  124 => 57,  121 => 32,  118 => 36,  115 => 38,  111 => 32,  107 => 26,  104 => 35,  97 => 24,  93 => 18,  90 => 22,  81 => 22,  70 => 18,  66 => 19,  62 => 15,  59 => 14,  56 => 13,  52 => 10,  49 => 9,  45 => 11,  41 => 7,  37 => 7,  33 => 7,  30 => 3,);
    }
}
