<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_c20b51f1e8d89ad6173913bedbf925494a02902d6b84135fb62d773355fdb06c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "feeds"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "feed"), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "feed"), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "feed"), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($this->getContext($context, "feed"), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  53 => 23,  137 => 60,  97 => 39,  34 => 4,  126 => 51,  118 => 36,  114 => 34,  70 => 17,  90 => 21,  110 => 34,  84 => 23,  65 => 16,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  195 => 77,  188 => 73,  184 => 72,  152 => 64,  100 => 40,  81 => 26,  172 => 66,  153 => 49,  146 => 45,  113 => 35,  148 => 63,  104 => 37,  77 => 28,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 79,  197 => 5,  186 => 99,  181 => 97,  160 => 66,  129 => 39,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 44,  128 => 49,  107 => 30,  61 => 18,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 41,  71 => 19,  67 => 25,  63 => 17,  59 => 13,  87 => 23,  94 => 38,  89 => 25,  85 => 25,  75 => 20,  68 => 22,  56 => 10,  28 => 3,  38 => 6,  24 => 4,  26 => 13,  21 => 2,  31 => 3,  25 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 82,  156 => 65,  151 => 63,  142 => 44,  138 => 76,  136 => 51,  121 => 46,  117 => 47,  105 => 40,  91 => 31,  62 => 14,  49 => 8,  19 => 1,  93 => 26,  88 => 20,  78 => 20,  46 => 9,  44 => 19,  27 => 13,  79 => 16,  72 => 23,  69 => 17,  47 => 10,  40 => 19,  37 => 18,  22 => 2,  246 => 90,  157 => 51,  145 => 78,  139 => 48,  131 => 49,  123 => 50,  120 => 44,  115 => 42,  111 => 45,  108 => 38,  101 => 32,  98 => 28,  96 => 29,  83 => 22,  74 => 19,  66 => 18,  55 => 14,  52 => 20,  50 => 22,  43 => 8,  41 => 18,  35 => 7,  32 => 12,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 70,  168 => 65,  164 => 67,  162 => 53,  154 => 80,  149 => 51,  147 => 56,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 38,  122 => 29,  116 => 41,  112 => 42,  109 => 44,  106 => 26,  103 => 53,  99 => 35,  95 => 27,  92 => 28,  86 => 33,  82 => 24,  80 => 29,  73 => 19,  64 => 15,  60 => 23,  57 => 18,  54 => 14,  51 => 11,  48 => 9,  45 => 20,  42 => 7,  39 => 9,  36 => 17,  33 => 4,  30 => 5,);
    }
}
