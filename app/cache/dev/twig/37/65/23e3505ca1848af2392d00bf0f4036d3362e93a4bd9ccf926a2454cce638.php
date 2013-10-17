<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_376523e3505ca1848af2392d00bf0f4036d3362e93a4bd9ccf926a2454cce638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute($this->getContext($context, "field_description"), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "id", array(0 => $this->getContext($context, "value")), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "value"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 87,  127 => 55,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  315 => 90,  295 => 88,  288 => 85,  259 => 70,  249 => 67,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 176,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  513 => 165,  504 => 160,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  321 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 83,  277 => 81,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  191 => 50,  178 => 46,  175 => 76,  76 => 13,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  256 => 120,  242 => 112,  192 => 87,  185 => 85,  170 => 78,  165 => 76,  20 => 11,  53 => 80,  137 => 58,  97 => 39,  34 => 16,  126 => 51,  118 => 21,  114 => 34,  70 => 33,  90 => 18,  110 => 47,  84 => 38,  65 => 29,  265 => 125,  260 => 123,  248 => 115,  236 => 63,  232 => 93,  216 => 99,  211 => 84,  195 => 77,  188 => 73,  184 => 48,  152 => 38,  100 => 40,  81 => 15,  172 => 66,  153 => 35,  146 => 34,  113 => 35,  148 => 63,  104 => 23,  77 => 27,  225 => 83,  222 => 82,  218 => 14,  215 => 54,  205 => 10,  200 => 55,  197 => 54,  186 => 82,  181 => 79,  160 => 75,  129 => 24,  124 => 23,  23 => 3,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 131,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 65,  169 => 73,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 18,  273 => 96,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 69,  143 => 29,  135 => 53,  119 => 37,  102 => 17,  71 => 19,  67 => 184,  63 => 4,  59 => 23,  87 => 17,  94 => 38,  89 => 39,  85 => 30,  75 => 39,  68 => 30,  56 => 81,  28 => 14,  38 => 17,  24 => 13,  26 => 13,  21 => 2,  31 => 15,  25 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 37,  156 => 36,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 47,  105 => 46,  91 => 31,  62 => 28,  49 => 112,  19 => 11,  93 => 26,  88 => 12,  78 => 35,  46 => 21,  44 => 74,  27 => 3,  79 => 14,  72 => 198,  69 => 197,  47 => 75,  40 => 44,  37 => 43,  22 => 12,  246 => 90,  157 => 41,  145 => 78,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 49,  111 => 45,  108 => 38,  101 => 22,  98 => 43,  96 => 29,  83 => 22,  74 => 33,  66 => 18,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 35,  29 => 34,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 84,  176 => 45,  173 => 44,  168 => 65,  164 => 71,  162 => 53,  154 => 66,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 56,  125 => 38,  122 => 29,  116 => 41,  112 => 19,  109 => 44,  106 => 26,  103 => 45,  99 => 35,  95 => 42,  92 => 19,  86 => 43,  82 => 10,  80 => 9,  73 => 7,  64 => 183,  60 => 3,  57 => 22,  54 => 153,  51 => 24,  48 => 67,  45 => 19,  42 => 18,  39 => 61,  36 => 17,  33 => 4,  30 => 15,);
    }
}
