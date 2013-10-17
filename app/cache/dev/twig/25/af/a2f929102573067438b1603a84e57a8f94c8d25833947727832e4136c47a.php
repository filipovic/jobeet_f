<?php

/* EnsJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_25afa2f929102573067438b1603a84e57a8f94c8d25833947727832e4136c47a extends Twig_Template
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
        echo "<div id=\"job_actions\">
  <h3>Admin</h3>
  <ul>
      ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "job"), "isActivated"))) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\">Edit</a></li>
        <li>
            <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\" method=\"post\">
                ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "publish_form"), 'widget');
            echo "
                <button type=\"submit\">Publish</button>
            </form>
        </li>
      ";
        }
        // line 13
        echo "    <li>
      <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
      </form>
    </li>
    ";
        // line 18
        if ($this->getAttribute($this->getContext($context, "job"), "isActivated")) {
            // line 19
            echo "      <li ";
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 20
            if ($this->getAttribute($this->getContext($context, "job"), "isExpired")) {
                // line 21
                echo "          Expired
        ";
            } else {
                // line 23
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 25
            echo " 
        ";
            // line 26
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                // line 27
                echo "          - <a href=\"\">Extend</a> for another 30 days
        ";
            }
            // line 29
            echo "      </li>
    ";
        } else {
            // line 31
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 35
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  81 => 26,  172 => 56,  153 => 49,  146 => 45,  113 => 35,  148 => 57,  104 => 32,  77 => 22,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 6,  197 => 5,  186 => 99,  181 => 97,  160 => 84,  129 => 39,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 19,  87 => 29,  94 => 32,  89 => 25,  85 => 25,  75 => 17,  68 => 21,  56 => 12,  28 => 5,  38 => 6,  24 => 4,  26 => 5,  21 => 2,  31 => 5,  25 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 82,  156 => 66,  151 => 63,  142 => 44,  138 => 76,  136 => 41,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 12,  19 => 1,  93 => 28,  88 => 6,  78 => 25,  46 => 11,  44 => 13,  27 => 3,  79 => 23,  72 => 23,  69 => 18,  47 => 14,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 51,  145 => 78,  139 => 45,  131 => 49,  123 => 38,  120 => 44,  115 => 36,  111 => 37,  108 => 38,  101 => 32,  98 => 29,  96 => 29,  83 => 27,  74 => 21,  66 => 20,  55 => 13,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 7,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 90,  164 => 54,  162 => 53,  154 => 80,  149 => 51,  147 => 58,  144 => 49,  141 => 77,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 53,  99 => 35,  95 => 28,  92 => 28,  86 => 25,  82 => 24,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 18,  54 => 12,  51 => 15,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
