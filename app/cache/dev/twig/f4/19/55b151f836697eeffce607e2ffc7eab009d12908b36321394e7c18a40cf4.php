<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_f41955b151f836697eeffce607e2ffc7eab009d12908b36321394e7c18a40cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "revision"), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 97,  340 => 95,  338 => 94,  335 => 93,  315 => 90,  295 => 88,  288 => 85,  259 => 70,  249 => 67,  190 => 50,  161 => 38,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 176,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  513 => 165,  504 => 160,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  321 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 83,  277 => 81,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  191 => 50,  178 => 46,  175 => 43,  76 => 13,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  256 => 120,  242 => 112,  192 => 87,  185 => 85,  170 => 78,  165 => 76,  20 => 11,  53 => 80,  137 => 27,  97 => 39,  34 => 41,  126 => 51,  118 => 21,  114 => 34,  70 => 33,  90 => 18,  110 => 18,  84 => 16,  65 => 5,  265 => 125,  260 => 123,  248 => 115,  236 => 63,  232 => 93,  216 => 99,  211 => 84,  195 => 77,  188 => 73,  184 => 48,  152 => 38,  100 => 40,  81 => 15,  172 => 66,  153 => 35,  146 => 34,  113 => 35,  148 => 63,  104 => 23,  77 => 27,  225 => 83,  222 => 82,  218 => 14,  215 => 54,  205 => 10,  200 => 55,  197 => 54,  186 => 99,  181 => 47,  160 => 75,  129 => 24,  124 => 23,  23 => 3,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 131,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 65,  169 => 60,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 18,  273 => 96,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 61,  143 => 29,  135 => 53,  119 => 37,  102 => 17,  71 => 19,  67 => 184,  63 => 4,  59 => 23,  87 => 17,  94 => 38,  89 => 25,  85 => 30,  75 => 39,  68 => 6,  56 => 81,  28 => 13,  38 => 17,  24 => 2,  26 => 13,  21 => 2,  31 => 14,  25 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 37,  156 => 36,  151 => 63,  142 => 44,  138 => 61,  136 => 60,  121 => 22,  117 => 47,  105 => 40,  91 => 31,  62 => 24,  49 => 112,  19 => 1,  93 => 26,  88 => 12,  78 => 40,  46 => 21,  44 => 74,  27 => 3,  79 => 14,  72 => 198,  69 => 197,  47 => 75,  40 => 44,  37 => 43,  22 => 2,  246 => 90,  157 => 41,  145 => 78,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 45,  108 => 38,  101 => 22,  98 => 15,  96 => 29,  83 => 22,  74 => 19,  66 => 18,  55 => 22,  52 => 113,  50 => 78,  43 => 20,  41 => 18,  35 => 16,  32 => 35,  29 => 34,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 84,  176 => 45,  173 => 44,  168 => 65,  164 => 67,  162 => 53,  154 => 80,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 41,  125 => 38,  122 => 29,  116 => 41,  112 => 19,  109 => 44,  106 => 26,  103 => 53,  99 => 35,  95 => 20,  92 => 19,  86 => 43,  82 => 10,  80 => 9,  73 => 7,  64 => 183,  60 => 3,  57 => 154,  54 => 153,  51 => 24,  48 => 67,  45 => 19,  42 => 18,  39 => 61,  36 => 17,  33 => 4,  30 => 5,);
    }
}
