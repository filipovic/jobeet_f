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
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if ((!$this->getAttribute($_job_, "isActivated"))) {
            // line 5
            echo "        <li><a href=\"";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($_job_, "token"))), "html", null, true);
            echo "\">Edit</a></li>
        <li>
            <form action=\"";
            // line 7
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute($_job_, "token"))), "html", null, true);
            echo "\" method=\"post\">
                ";
            // line 8
            if (isset($context["publish_form"])) { $_publish_form_ = $context["publish_form"]; } else { $_publish_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_publish_form_, 'widget');
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
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute($_job_, "token"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_delete_form_, 'widget');
        echo "
      </form>
    </li>
    ";
        // line 18
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if ($this->getAttribute($_job_, "isActivated")) {
            // line 19
            echo "      <li ";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            if ($this->getAttribute($_job_, "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 20
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            if ($this->getAttribute($_job_, "isExpired")) {
                // line 21
                echo "          Expired
        ";
            } else {
                // line 23
                echo "          Expires in <strong>";
                if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_job_, "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 25
            echo " 
        ";
            // line 26
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            if ($this->getAttribute($_job_, "expiresSoon")) {
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
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute($_job_, "token"), "company" => $this->getAttribute($_job_, "companyslug"), "location" => $this->getAttribute($_job_, "locationslug"), "position" => $this->getAttribute($_job_, "positionslug"))), "html", null, true);
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
        return array (  94 => 27,  91 => 26,  185 => 54,  176 => 51,  172 => 49,  165 => 45,  159 => 44,  144 => 39,  87 => 24,  68 => 17,  79 => 18,  161 => 57,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 20,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 53,  177 => 90,  169 => 84,  167 => 82,  153 => 41,  148 => 77,  145 => 76,  135 => 74,  82 => 19,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 38,  134 => 43,  131 => 35,  122 => 42,  117 => 36,  108 => 54,  102 => 31,  92 => 25,  84 => 23,  72 => 15,  69 => 18,  51 => 14,  48 => 13,  35 => 6,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 40,  127 => 36,  112 => 35,  96 => 25,  76 => 19,  71 => 17,  110 => 32,  89 => 16,  65 => 14,  63 => 18,  58 => 13,  34 => 7,  114 => 29,  109 => 37,  106 => 20,  101 => 19,  85 => 20,  77 => 21,  67 => 14,  28 => 4,  55 => 12,  43 => 7,  26 => 6,  24 => 4,  39 => 8,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  227 => 14,  224 => 13,  221 => 90,  207 => 70,  197 => 74,  195 => 56,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 52,  136 => 44,  133 => 45,  130 => 42,  120 => 34,  105 => 32,  100 => 52,  75 => 20,  60 => 12,  53 => 19,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 21,  46 => 10,  44 => 8,  40 => 8,  36 => 6,  32 => 5,  27 => 5,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 73,  124 => 57,  121 => 32,  118 => 36,  115 => 33,  111 => 32,  107 => 26,  104 => 29,  97 => 24,  93 => 18,  90 => 21,  81 => 23,  70 => 23,  66 => 19,  62 => 15,  59 => 12,  56 => 15,  52 => 10,  49 => 9,  45 => 16,  41 => 7,  37 => 7,  33 => 4,  30 => 3,);
    }
}
