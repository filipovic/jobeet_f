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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this));
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
            echo "    <ul class=\"error_list\">
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
        echo "  <h1>Job creation</h1>
  <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ens_job_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "company"), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "company"), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "company"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "location"), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "location"), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "location"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "how_to_apply"), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "how_to_apply"), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "how_to_apply"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_public"), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_public"), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "is_public"), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  278 => 115,  269 => 109,  265 => 108,  260 => 106,  252 => 101,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  220 => 87,  216 => 86,  211 => 84,  204 => 80,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  179 => 70,  172 => 66,  168 => 65,  163 => 63,  156 => 59,  152 => 58,  147 => 56,  140 => 52,  136 => 51,  131 => 49,  124 => 45,  120 => 44,  115 => 42,  108 => 38,  104 => 37,  99 => 35,  83 => 24,  80 => 23,  77 => 22,  71 => 19,  66 => 18,  63 => 17,  56 => 12,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
