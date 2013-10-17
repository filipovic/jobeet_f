<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_d8715fc28b8168282324ddf2bfe9f12494698e00d0e8a70f9749da82fb00610b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "  ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 8
            echo "    <ul class=\"error_list\">
      ";
            // line 9
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "  <h1>Job creation</h1>
  <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ens_job_create");
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo ">
    <table id=\"job_form\">
      <tfoot>
        <tr>
          <td colspan=\"2\">
            <input type=\"submit\" value=\"Preview your job\" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "category"), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "category"), 'errors');
        echo "
            ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "category"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'errors');
        echo "
            ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "company"), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "company"), 'errors');
        echo "
            ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "company"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "file"), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "file"), 'errors');
        echo "
            ";
        // line 59
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "file"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'errors');
        echo "
            ";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "position"), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "position"), 'errors');
        echo "
            ";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "position"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "location"), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "location"), 'errors');
        echo "
            ";
        // line 80
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "location"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description"), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description"), 'errors');
        echo "
            ";
        // line 87
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "how_to_apply"), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "how_to_apply"), 'errors');
        echo "
            ";
        // line 94
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "how_to_apply"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "is_public"), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "is_public"), 'errors');
        echo "
            ";
        // line 101
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "is_public"), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'errors');
        echo "
            ";
        // line 109
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
  </form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 115,  306 => 109,  301 => 108,  286 => 101,  275 => 98,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 73,  205 => 72,  199 => 70,  191 => 66,  123 => 42,  42 => 8,  94 => 27,  91 => 26,  185 => 54,  176 => 51,  172 => 59,  165 => 45,  159 => 44,  144 => 39,  87 => 24,  68 => 17,  79 => 18,  161 => 56,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 20,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 53,  177 => 90,  169 => 84,  167 => 58,  153 => 52,  148 => 51,  145 => 76,  135 => 74,  82 => 19,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 106,  287 => 80,  279 => 78,  256 => 91,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 38,  134 => 45,  131 => 35,  122 => 42,  117 => 36,  108 => 54,  102 => 31,  92 => 25,  84 => 23,  72 => 15,  69 => 18,  51 => 14,  48 => 13,  35 => 6,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 100,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 84,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 40,  127 => 36,  112 => 35,  96 => 25,  76 => 19,  71 => 17,  110 => 37,  89 => 16,  65 => 14,  63 => 18,  58 => 13,  34 => 7,  114 => 29,  109 => 37,  106 => 20,  101 => 19,  85 => 20,  77 => 21,  67 => 17,  28 => 4,  55 => 12,  43 => 7,  26 => 6,  24 => 4,  39 => 8,  57 => 11,  50 => 10,  47 => 7,  38 => 7,  25 => 3,  227 => 14,  224 => 79,  221 => 90,  207 => 70,  197 => 74,  195 => 56,  192 => 72,  189 => 61,  186 => 65,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 49,  136 => 44,  133 => 45,  130 => 42,  120 => 34,  105 => 32,  100 => 52,  75 => 19,  60 => 12,  53 => 19,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 21,  46 => 10,  44 => 8,  40 => 8,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 44,  124 => 57,  121 => 32,  118 => 36,  115 => 38,  111 => 32,  107 => 26,  104 => 35,  97 => 24,  93 => 18,  90 => 21,  81 => 22,  70 => 18,  66 => 19,  62 => 15,  59 => 12,  56 => 15,  52 => 10,  49 => 9,  45 => 9,  41 => 7,  37 => 7,  33 => 5,  30 => 3,);
    }
}
