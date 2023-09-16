<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* css/style.css */
class __TwigTemplate_19f8cc6c6edc451fa7cc24485d750104 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/style.css"));

        // line 1
        echo "@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#eea005d5;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid #999;
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.container{
   max-width: 1200px;
   margin:0 auto;
   /* padding-bottom: 5rem; */
}

section{
   padding:2rem;
}

.heading{
   text-align: center;
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--red);
   margin-bottom: 2rem;
}

.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: var(--orange);
   color:var(--white);
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: var(--black);
}

.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: var(--orange);
}

.delete-btn{
   margin-top: 0;
   background-color: var(--red);
}

.message{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
}

.message i:hover{
   color:var(--red);
}

.header{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   padding:1.5rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color:var(--white);
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .navbar a:hover{
   color:yellow;
}

.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .cart:hover{
   color:yellow;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: var(--white);
   color:var(--blue);
   font-size: 2rem;
}

#menu-btn{
   margin-left: 2rem;
   font-size: 3rem;
   cursor: pointer;
   color:var(--white);
   display: none;
}

.add-product-form{
   max-width: 50rem;
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:2rem;
   margin:0 auto;
   margin-top: 2rem;
}

.add-product-form h3{
   font-size: 2.5rem;
   margin-bottom: 1rem;
   color:var(--black);
   text-transform: uppercase;
   text-align: center;
}

.add-product-form .box{
   text-transform: none;
   padding:1.2rem 1.4rem;
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   background-color: var(--white);
   margin:1rem 0;
   width: 100%;
}

.display-product-table table{
   width: 100%;
   text-align: center;
}

.display-product-table table thead th{
   padding:1.5rem;
   font-size: 2rem;
   background-color: var(--black);
   color:var(--white);
}

.display-product-table table td{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.display-product-table table td:first-child{
   padding:0;
}

.display-product-table table tr:nth-child(even){
   background-color: var(--bg-color);
}

.display-product-table .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: var(--bg-color);
   color:var(--black);
   font-size: 2rem;
   padding:1.5rem;
}

.edit-form-container{
   position: fixed;
   top:0; left:0;
   z-index: 1100;
   background-color: var(--dark-bg);
   padding:2rem;
   display: none;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   width: 100%;
}

.edit-form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color: var(--white);
   text-align: center;
   padding:2rem;
}

.edit-form-container form .box{
   width: 100%;
   background-color: var(--bg-color);
   border-radius: .5rem;
   margin:1rem 0;
   font-size: 1.7rem;
   color:var(--black);
   padding:1.2rem 1.4rem;
   text-transform: none;
}

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: center;
}

.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}

.products .box-container .box img{
   height: 25rem;
}

.products .box-container .box h3{
   margin:1rem 0;
   font-size: 1.9rem;
   color:var(--red);
}

.products .box-container .box .price{
   font-size: 2.5rem;
   color:var(--black);
}

.shopping-cart table{
   text-align: center;
   width: 100%;
}

.shopping-cart table thead th{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--white);
   background-color: var(--black);
}

.shopping-cart table tr td{
   border-bottom: var(--border);
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.shopping-cart table input[type=\"number\"]{
   border: var(--border);
   padding:1rem 2rem;
   font-size: 2rem;
   color:var(--black);
   width: 10rem;
}

.shopping-cart table input[type=\"submit\"]{
   padding:.5rem 1.5rem;
   cursor: pointer;
   font-size: 2rem;
   background-color: var(--orange);
   color:var(--white);
}

.shopping-cart table input[type=\"submit\"]:hover{
   background-color: var(--black);
}

.shopping-cart table .table-bottom{
   background-color: var(--bg-color);
}

.shopping-cart .checkout-btn{
   text-align: center;
   margin-top: 1rem;
}

.shopping-cart .checkout-btn a{
   display: inline-block;
   width: auto;
}

.shopping-cart .checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: var(--red);
}

.checkout-form form{
   padding:2rem;
   border-radius: .5rem;
   background-color: var(--bg-color);
}

.checkout-form form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 2rem;
   color:var(--black);
}

.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: var(--white);
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1.4rem;
   text-transform: none;
   border:var(--border);
}

.display-order{
   max-width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:var(--black);
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: var(--red);
   color:var(--white);
   padding:1rem;
   margin-top: 1rem;
}

.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: scroll;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1100;
   background-color: var(--dark-bg);
   width: 100%;
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:1rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: var(--white);
   border-radius: .5rem;
   color:var(--black);
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: var(--red);
   color:var(--white);
}

.order-message-container .message-container .customer-details{
   margin:1.5rem 0;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:var(--black);
}

.order-message-container .message-container .customer-details p span{
   color:var(--blue);
   padding:0 .5rem;
   text-transform: none;
}


















/* media queries  */

@media (max-width:1200px){

   .shopping-cart{
      overflow-x: scroll;
   }

   .shopping-cart table{
      width: 120rem;
   }

   .shopping-cart .heading{
      text-align: left;
   }

   .shopping-cart .checkout-btn{
      text-align: left;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(--blue);
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      margin:2rem;
      display: block;
      text-align: center;
      font-size: 2.5rem;
   }

   .display-product-table{
      overflow-x: scroll;
   }

   .display-product-table table{
      width: 90rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .products .box-container{
      grid-template-columns: 1fr;
   }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#eea005d5;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid #999;
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.container{
   max-width: 1200px;
   margin:0 auto;
   /* padding-bottom: 5rem; */
}

section{
   padding:2rem;
}

.heading{
   text-align: center;
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--red);
   margin-bottom: 2rem;
}

.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: var(--orange);
   color:var(--white);
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: var(--black);
}

.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: var(--orange);
}

.delete-btn{
   margin-top: 0;
   background-color: var(--red);
}

.message{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
}

.message i:hover{
   color:var(--red);
}

.header{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   padding:1.5rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color:var(--white);
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .navbar a:hover{
   color:yellow;
}

.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .cart:hover{
   color:yellow;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: var(--white);
   color:var(--blue);
   font-size: 2rem;
}

#menu-btn{
   margin-left: 2rem;
   font-size: 3rem;
   cursor: pointer;
   color:var(--white);
   display: none;
}

.add-product-form{
   max-width: 50rem;
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:2rem;
   margin:0 auto;
   margin-top: 2rem;
}

.add-product-form h3{
   font-size: 2.5rem;
   margin-bottom: 1rem;
   color:var(--black);
   text-transform: uppercase;
   text-align: center;
}

.add-product-form .box{
   text-transform: none;
   padding:1.2rem 1.4rem;
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   background-color: var(--white);
   margin:1rem 0;
   width: 100%;
}

.display-product-table table{
   width: 100%;
   text-align: center;
}

.display-product-table table thead th{
   padding:1.5rem;
   font-size: 2rem;
   background-color: var(--black);
   color:var(--white);
}

.display-product-table table td{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.display-product-table table td:first-child{
   padding:0;
}

.display-product-table table tr:nth-child(even){
   background-color: var(--bg-color);
}

.display-product-table .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: var(--bg-color);
   color:var(--black);
   font-size: 2rem;
   padding:1.5rem;
}

.edit-form-container{
   position: fixed;
   top:0; left:0;
   z-index: 1100;
   background-color: var(--dark-bg);
   padding:2rem;
   display: none;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   width: 100%;
}

.edit-form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color: var(--white);
   text-align: center;
   padding:2rem;
}

.edit-form-container form .box{
   width: 100%;
   background-color: var(--bg-color);
   border-radius: .5rem;
   margin:1rem 0;
   font-size: 1.7rem;
   color:var(--black);
   padding:1.2rem 1.4rem;
   text-transform: none;
}

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: center;
}

.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}

.products .box-container .box img{
   height: 25rem;
}

.products .box-container .box h3{
   margin:1rem 0;
   font-size: 1.9rem;
   color:var(--red);
}

.products .box-container .box .price{
   font-size: 2.5rem;
   color:var(--black);
}

.shopping-cart table{
   text-align: center;
   width: 100%;
}

.shopping-cart table thead th{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--white);
   background-color: var(--black);
}

.shopping-cart table tr td{
   border-bottom: var(--border);
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.shopping-cart table input[type=\"number\"]{
   border: var(--border);
   padding:1rem 2rem;
   font-size: 2rem;
   color:var(--black);
   width: 10rem;
}

.shopping-cart table input[type=\"submit\"]{
   padding:.5rem 1.5rem;
   cursor: pointer;
   font-size: 2rem;
   background-color: var(--orange);
   color:var(--white);
}

.shopping-cart table input[type=\"submit\"]:hover{
   background-color: var(--black);
}

.shopping-cart table .table-bottom{
   background-color: var(--bg-color);
}

.shopping-cart .checkout-btn{
   text-align: center;
   margin-top: 1rem;
}

.shopping-cart .checkout-btn a{
   display: inline-block;
   width: auto;
}

.shopping-cart .checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: var(--red);
}

.checkout-form form{
   padding:2rem;
   border-radius: .5rem;
   background-color: var(--bg-color);
}

.checkout-form form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 2rem;
   color:var(--black);
}

.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: var(--white);
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1.4rem;
   text-transform: none;
   border:var(--border);
}

.display-order{
   max-width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:var(--black);
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: var(--red);
   color:var(--white);
   padding:1rem;
   margin-top: 1rem;
}

.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: scroll;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1100;
   background-color: var(--dark-bg);
   width: 100%;
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:1rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: var(--white);
   border-radius: .5rem;
   color:var(--black);
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: var(--red);
   color:var(--white);
}

.order-message-container .message-container .customer-details{
   margin:1.5rem 0;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:var(--black);
}

.order-message-container .message-container .customer-details p span{
   color:var(--blue);
   padding:0 .5rem;
   text-transform: none;
}


















/* media queries  */

@media (max-width:1200px){

   .shopping-cart{
      overflow-x: scroll;
   }

   .shopping-cart table{
      width: 120rem;
   }

   .shopping-cart .heading{
      text-align: left;
   }

   .shopping-cart .checkout-btn{
      text-align: left;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(--blue);
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      margin:2rem;
      display: block;
      text-align: center;
      font-size: 2.5rem;
   }

   .display-product-table{
      overflow-x: scroll;
   }

   .display-product-table table{
      width: 90rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .products .box-container{
      grid-template-columns: 1fr;
   }

}
", "css/style.css", "C:\\Users\\huynh\\Semi\\templates\\css\\style.css");
    }
}
