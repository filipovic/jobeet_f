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
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <updated>";
        // line 6
        if (isset($context["lastUpdated"])) { $_lastUpdated_ = $context["lastUpdated"]; } else { $_lastUpdated_ = null; }
        echo twig_escape_filter($this->env, $_lastUpdated_, "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 8
        if (isset($context["feedId"])) { $_feedId_ = $context["feedId"]; } else { $_feedId_ = null; }
        echo twig_escape_filter($this->env, $_feedId_, "html", null, true);
        echo "</id>

    ";
        // line 10
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "        <entry>
            <title>";
            // line 12
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
            echo " (";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "location"), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 13
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($_entity_, "id"), "company" => $this->getAttribute($_entity_, "companyslug"), "location" => $this->getAttribute($_entity_, "locationslug"), "position" => $this->getAttribute($_entity_, "positionslug"))), "html", null, true);
            echo "\" />
            <id>";
            // line 14
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</id>
            <updated>";
            // line 15
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 18
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "logo")) {
                // line 19
                echo "                        <div>
                            <a href=\"";
                // line 20
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 21
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
            // line 25
            echo "                    <div>
                        ";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_entity_, "description"), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 29
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "howtoapply"), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 32
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
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
        return array (  79 => 18,  161 => 57,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 19,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 92,  177 => 90,  169 => 84,  167 => 82,  153 => 78,  148 => 77,  145 => 76,  135 => 74,  82 => 19,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 35,  122 => 42,  117 => 36,  108 => 54,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 18,  51 => 11,  48 => 7,  35 => 6,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 6,  114 => 29,  109 => 37,  106 => 20,  101 => 19,  85 => 20,  77 => 12,  67 => 14,  28 => 4,  55 => 23,  43 => 7,  26 => 6,  24 => 4,  39 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  227 => 14,  224 => 13,  221 => 90,  207 => 70,  197 => 74,  195 => 99,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 52,  136 => 44,  133 => 45,  130 => 42,  120 => 40,  105 => 53,  100 => 52,  75 => 24,  60 => 12,  53 => 19,  19 => 1,  98 => 40,  88 => 17,  80 => 22,  78 => 37,  46 => 10,  44 => 9,  40 => 8,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 73,  124 => 57,  121 => 32,  118 => 36,  115 => 39,  111 => 32,  107 => 26,  104 => 25,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 17,  62 => 13,  59 => 12,  56 => 12,  52 => 10,  49 => 10,  45 => 16,  41 => 8,  37 => 7,  33 => 4,  30 => 3,);
    }
}
