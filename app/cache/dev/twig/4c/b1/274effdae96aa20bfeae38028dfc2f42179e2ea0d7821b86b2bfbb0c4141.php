<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_4cb1274effdae96aa20bfeae38028dfc2f42179e2ea0d7821b86b2bfbb0c4141 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "edit_form"), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "  ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 8
            echo "    <ul>
      ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
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
        echo "  <h1>Job edit</h1>
  <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_update", array("token" => $this->getAttribute($this->getContext($context, "entity"), "token"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'rest');
        echo "
  </form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  84 => 23,  65 => 16,  265 => 108,  260 => 106,  248 => 100,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  195 => 77,  188 => 73,  184 => 72,  152 => 58,  100 => 35,  81 => 26,  172 => 66,  153 => 49,  146 => 45,  113 => 35,  148 => 57,  104 => 37,  77 => 22,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 79,  197 => 5,  186 => 99,  181 => 97,  160 => 84,  129 => 39,  124 => 45,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 19,  87 => 29,  94 => 32,  89 => 25,  85 => 25,  75 => 20,  68 => 21,  56 => 12,  28 => 5,  38 => 9,  24 => 4,  26 => 5,  21 => 2,  31 => 5,  25 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 82,  156 => 59,  151 => 63,  142 => 44,  138 => 76,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 12,  19 => 1,  93 => 28,  88 => 6,  78 => 25,  46 => 11,  44 => 13,  27 => 3,  79 => 23,  72 => 23,  69 => 17,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 51,  145 => 78,  139 => 45,  131 => 49,  123 => 38,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 28,  96 => 29,  83 => 24,  74 => 21,  66 => 18,  55 => 14,  52 => 13,  50 => 10,  43 => 9,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 65,  164 => 54,  162 => 53,  154 => 80,  149 => 51,  147 => 56,  144 => 49,  141 => 77,  133 => 55,  130 => 41,  125 => 38,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 53,  99 => 35,  95 => 27,  92 => 28,  86 => 25,  82 => 24,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 18,  54 => 12,  51 => 15,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 3,);
    }
}
