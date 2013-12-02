<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_4acecabe0aec9954b399127f32902442e256dfe7a385c788726f9c1ad9c839f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "</td>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") . (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission"))), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  688 => 230,  683 => 227,  677 => 224,  672 => 222,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  548 => 165,  523 => 156,  517 => 155,  506 => 151,  495 => 148,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 124,  390 => 125,  376 => 119,  369 => 115,  363 => 114,  328 => 74,  317 => 70,  271 => 55,  261 => 50,  231 => 33,  180 => 120,  225 => 89,  207 => 83,  126 => 48,  344 => 97,  340 => 95,  338 => 76,  315 => 90,  295 => 88,  259 => 70,  190 => 175,  53 => 24,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  608 => 202,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 148,  465 => 139,  462 => 138,  451 => 141,  446 => 139,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  388 => 124,  358 => 113,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 75,  324 => 92,  319 => 71,  311 => 89,  307 => 66,  297 => 84,  282 => 83,  277 => 81,  233 => 62,  223 => 58,  200 => 55,  184 => 48,  178 => 119,  146 => 63,  118 => 46,  306 => 140,  303 => 65,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 104,  248 => 115,  236 => 35,  216 => 28,  192 => 87,  70 => 29,  690 => 231,  681 => 203,  676 => 401,  674 => 223,  664 => 218,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 204,  605 => 201,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 169,  550 => 326,  542 => 163,  538 => 319,  531 => 312,  526 => 157,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 127,  415 => 247,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 174,  291 => 82,  272 => 76,  257 => 49,  242 => 112,  213 => 86,  152 => 63,  114 => 46,  104 => 42,  97 => 31,  318 => 144,  316 => 121,  299 => 64,  293 => 61,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 57,  265 => 125,  256 => 102,  253 => 47,  250 => 67,  228 => 59,  222 => 30,  215 => 54,  210 => 22,  197 => 79,  174 => 64,  153 => 48,  113 => 46,  76 => 13,  181 => 47,  175 => 118,  161 => 38,  137 => 60,  110 => 41,  194 => 177,  186 => 111,  165 => 76,  160 => 59,  150 => 58,  134 => 58,  129 => 49,  65 => 26,  124 => 49,  399 => 158,  396 => 159,  394 => 118,  383 => 224,  377 => 115,  371 => 113,  366 => 210,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 97,  342 => 101,  335 => 93,  329 => 95,  325 => 73,  321 => 92,  308 => 118,  289 => 59,  276 => 102,  270 => 100,  267 => 156,  260 => 123,  249 => 98,  245 => 97,  239 => 94,  237 => 86,  234 => 84,  232 => 136,  218 => 77,  202 => 73,  191 => 76,  188 => 174,  185 => 173,  170 => 78,  167 => 60,  155 => 66,  148 => 97,  127 => 32,  90 => 36,  84 => 36,  77 => 30,  34 => 16,  100 => 42,  81 => 34,  58 => 25,  20 => 11,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 152,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 112,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 68,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 58,  278 => 86,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 69,  140 => 53,  132 => 43,  128 => 47,  107 => 44,  61 => 27,  273 => 101,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 36,  235 => 74,  230 => 105,  227 => 32,  224 => 102,  221 => 88,  219 => 29,  217 => 87,  208 => 57,  204 => 73,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 44,  102 => 42,  71 => 30,  67 => 28,  63 => 27,  59 => 26,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 102,  166 => 110,  163 => 60,  158 => 67,  156 => 36,  151 => 61,  142 => 58,  138 => 93,  136 => 58,  121 => 91,  117 => 49,  105 => 45,  91 => 39,  62 => 27,  49 => 23,  38 => 18,  94 => 40,  89 => 38,  85 => 37,  75 => 31,  68 => 27,  56 => 25,  87 => 38,  31 => 15,  25 => 13,  21 => 11,  24 => 13,  26 => 14,  93 => 68,  88 => 37,  78 => 32,  46 => 19,  44 => 19,  27 => 14,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 22,  40 => 17,  37 => 18,  22 => 12,  246 => 90,  157 => 58,  145 => 56,  139 => 51,  131 => 48,  123 => 52,  120 => 48,  115 => 45,  111 => 43,  108 => 42,  101 => 37,  98 => 36,  96 => 37,  83 => 32,  74 => 29,  66 => 28,  55 => 24,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 16,  29 => 13,  209 => 95,  203 => 278,  199 => 80,  193 => 51,  189 => 71,  187 => 75,  182 => 84,  176 => 45,  173 => 112,  168 => 60,  164 => 109,  162 => 70,  154 => 66,  149 => 62,  147 => 46,  144 => 45,  141 => 94,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 38,  95 => 40,  92 => 39,  86 => 33,  82 => 36,  80 => 31,  73 => 7,  64 => 27,  60 => 19,  57 => 23,  54 => 22,  51 => 16,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 15,  30 => 14,);
    }
}
