<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_640d4a9e812bc0897c3532c22009a2a6907e977b0baef5966670a75c07eb354e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_batch_confirmation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  688 => 230,  683 => 227,  677 => 224,  672 => 222,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  548 => 165,  523 => 156,  517 => 155,  506 => 151,  495 => 148,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 124,  390 => 125,  376 => 119,  369 => 115,  363 => 114,  328 => 74,  317 => 70,  271 => 55,  261 => 50,  231 => 33,  180 => 120,  225 => 89,  207 => 83,  126 => 48,  344 => 97,  340 => 95,  338 => 76,  315 => 90,  295 => 88,  259 => 70,  190 => 175,  53 => 24,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  608 => 202,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 148,  465 => 139,  462 => 138,  451 => 141,  446 => 139,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  388 => 124,  358 => 113,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 75,  324 => 92,  319 => 71,  311 => 89,  307 => 66,  297 => 84,  282 => 83,  277 => 81,  233 => 62,  223 => 58,  200 => 55,  184 => 48,  178 => 119,  146 => 63,  118 => 46,  306 => 140,  303 => 65,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 104,  248 => 115,  236 => 35,  216 => 28,  192 => 87,  70 => 25,  690 => 231,  681 => 203,  676 => 401,  674 => 223,  664 => 218,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 204,  605 => 201,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 169,  550 => 326,  542 => 163,  538 => 319,  531 => 312,  526 => 157,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 127,  415 => 247,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 174,  291 => 82,  272 => 76,  257 => 49,  242 => 112,  213 => 86,  152 => 99,  114 => 44,  104 => 40,  97 => 31,  318 => 144,  316 => 121,  299 => 64,  293 => 61,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 57,  265 => 125,  256 => 102,  253 => 47,  250 => 67,  228 => 59,  222 => 30,  215 => 54,  210 => 22,  197 => 79,  174 => 64,  153 => 48,  113 => 48,  76 => 13,  181 => 47,  175 => 118,  161 => 38,  137 => 60,  110 => 36,  194 => 177,  186 => 111,  165 => 76,  160 => 68,  150 => 55,  134 => 58,  129 => 49,  65 => 26,  124 => 52,  399 => 158,  396 => 159,  394 => 118,  383 => 224,  377 => 115,  371 => 113,  366 => 210,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 97,  342 => 101,  335 => 93,  329 => 95,  325 => 73,  321 => 92,  308 => 118,  289 => 59,  276 => 102,  270 => 100,  267 => 156,  260 => 123,  249 => 98,  245 => 97,  239 => 94,  237 => 86,  234 => 84,  232 => 136,  218 => 77,  202 => 73,  191 => 76,  188 => 174,  185 => 173,  170 => 78,  167 => 60,  155 => 66,  148 => 97,  127 => 32,  90 => 36,  84 => 36,  77 => 28,  34 => 16,  100 => 43,  81 => 33,  58 => 25,  20 => 11,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 152,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 112,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 68,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 58,  278 => 86,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 69,  140 => 44,  132 => 43,  128 => 58,  107 => 46,  61 => 27,  273 => 101,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 36,  235 => 74,  230 => 105,  227 => 32,  224 => 102,  221 => 88,  219 => 29,  217 => 87,  208 => 57,  204 => 73,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 24,  63 => 28,  59 => 165,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 102,  166 => 110,  163 => 68,  158 => 67,  156 => 36,  151 => 61,  142 => 58,  138 => 93,  136 => 58,  121 => 91,  117 => 49,  105 => 45,  91 => 38,  62 => 25,  49 => 20,  38 => 18,  94 => 40,  89 => 37,  85 => 28,  75 => 32,  68 => 24,  56 => 25,  87 => 35,  31 => 15,  25 => 12,  21 => 11,  24 => 13,  26 => 14,  93 => 68,  88 => 37,  78 => 32,  46 => 19,  44 => 21,  27 => 14,  19 => 11,  79 => 34,  72 => 31,  69 => 30,  47 => 25,  40 => 17,  37 => 21,  22 => 12,  246 => 90,  157 => 64,  145 => 60,  139 => 59,  131 => 25,  123 => 52,  120 => 46,  115 => 45,  111 => 43,  108 => 42,  101 => 39,  98 => 39,  96 => 37,  83 => 82,  74 => 78,  66 => 28,  55 => 24,  52 => 20,  50 => 23,  43 => 18,  41 => 23,  35 => 20,  32 => 16,  29 => 13,  209 => 95,  203 => 278,  199 => 80,  193 => 51,  189 => 71,  187 => 75,  182 => 84,  176 => 45,  173 => 112,  168 => 60,  164 => 109,  162 => 70,  154 => 66,  149 => 62,  147 => 46,  144 => 45,  141 => 94,  133 => 55,  130 => 57,  125 => 40,  122 => 44,  116 => 43,  112 => 47,  109 => 44,  106 => 35,  103 => 41,  99 => 38,  95 => 20,  92 => 19,  86 => 33,  82 => 36,  80 => 29,  73 => 7,  64 => 27,  60 => 24,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 20,  39 => 18,  36 => 17,  33 => 16,  30 => 14,);
    }
}
