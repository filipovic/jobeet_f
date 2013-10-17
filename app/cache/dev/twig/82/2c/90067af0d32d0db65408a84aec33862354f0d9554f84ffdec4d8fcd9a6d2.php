<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_822c90067af0d32d0db65408a84aec33862354f0d9554f84ffdec4d8fcd9a6d2 extends Twig_Template
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

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "
    <table class=\"table table-condensed sonata-ba-list\">

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 20
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!$this->getContext($context, "display"))) {
                    // line 21
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                    // line 22
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            if ($this->getContext($context, "display")) {
                // line 25
                echo "                <tr>
                    <td colspan=\"3\" style=\"background: none repeat scroll 0 0 #F7F7F7;\"><strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo "</strong></td>
                </tr>

                ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                    ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">
                                ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                        // line 37
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                        ";
                            if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                                // line 39
                                echo "                                            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                            </a>
                                        ";
                            } else {
                                // line 44
                                echo "                                            <a class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                    <li>
                                                        <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "subclass"), "html", null, true);
                                    echo "</a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                            </ul>
                                        ";
                            }
                            // line 57
                            echo "                                    ";
                        }
                        // line 58
                        echo "                                    ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                        <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                    ";
                        }
                        // line 64
                        echo "                                </div>
                            </td>
                        </tr>
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 121,  299 => 112,  293 => 109,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  210 => 75,  174 => 64,  399 => 158,  394 => 156,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  245 => 88,  239 => 86,  237 => 86,  234 => 84,  202 => 73,  167 => 60,  155 => 55,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 247,  396 => 157,  383 => 150,  366 => 142,  346 => 196,  331 => 187,  304 => 174,  267 => 98,  257 => 149,  253 => 95,  213 => 126,  58 => 23,  150 => 55,  134 => 58,  194 => 86,  127 => 45,  344 => 97,  340 => 95,  338 => 94,  335 => 129,  315 => 90,  295 => 88,  288 => 107,  259 => 70,  249 => 89,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 340,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  513 => 165,  504 => 302,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 147,  371 => 144,  361 => 208,  358 => 106,  349 => 103,  347 => 102,  342 => 133,  339 => 100,  336 => 99,  332 => 97,  329 => 126,  326 => 185,  324 => 92,  321 => 123,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 169,  289 => 109,  282 => 83,  277 => 81,  272 => 158,  250 => 93,  233 => 62,  228 => 83,  223 => 58,  191 => 69,  178 => 46,  175 => 76,  76 => 20,  318 => 122,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  256 => 96,  242 => 140,  192 => 87,  185 => 68,  170 => 61,  165 => 59,  20 => 11,  53 => 80,  137 => 58,  97 => 63,  34 => 18,  126 => 51,  118 => 21,  114 => 23,  70 => 33,  90 => 34,  110 => 46,  84 => 33,  65 => 26,  265 => 99,  260 => 98,  248 => 115,  236 => 63,  232 => 84,  216 => 99,  211 => 84,  195 => 77,  188 => 68,  184 => 48,  152 => 92,  100 => 41,  81 => 15,  172 => 66,  153 => 62,  146 => 34,  113 => 41,  148 => 53,  104 => 67,  77 => 27,  225 => 83,  222 => 81,  218 => 77,  215 => 78,  205 => 10,  200 => 55,  197 => 70,  186 => 111,  181 => 79,  160 => 58,  129 => 56,  124 => 52,  23 => 18,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 106,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 63,  169 => 69,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 74,  204 => 73,  179 => 72,  159 => 69,  143 => 29,  135 => 55,  119 => 43,  102 => 42,  71 => 29,  67 => 28,  63 => 50,  59 => 18,  87 => 17,  94 => 39,  89 => 37,  85 => 34,  75 => 30,  68 => 30,  56 => 24,  28 => 14,  38 => 19,  24 => 13,  26 => 14,  21 => 12,  31 => 15,  25 => 12,  201 => 72,  196 => 71,  183 => 82,  171 => 63,  166 => 100,  163 => 68,  158 => 37,  156 => 57,  151 => 61,  142 => 58,  138 => 50,  136 => 48,  121 => 51,  117 => 50,  105 => 46,  91 => 38,  62 => 25,  49 => 20,  19 => 11,  93 => 68,  88 => 60,  78 => 31,  46 => 35,  44 => 19,  27 => 3,  79 => 14,  72 => 25,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 45,  108 => 39,  101 => 73,  98 => 43,  96 => 29,  83 => 22,  74 => 52,  66 => 25,  55 => 21,  52 => 20,  50 => 22,  43 => 20,  41 => 20,  35 => 16,  32 => 16,  29 => 15,  209 => 95,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 65,  173 => 71,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 90,  144 => 61,  141 => 66,  133 => 55,  130 => 46,  125 => 45,  122 => 44,  116 => 41,  112 => 47,  109 => 69,  106 => 44,  103 => 45,  99 => 38,  95 => 37,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 19,  64 => 26,  60 => 24,  57 => 23,  54 => 153,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 14,);
    }
}
