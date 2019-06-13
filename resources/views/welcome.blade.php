@extends('layouts.app')
@section('header')
 <!-- Header -->
    <header class="header fadeout header-inverse pb-0 h-fullscreen" style="background-image: linear-gradient(to bottom, #243949 0%, #517fa4 100%);">
      <canvas class="constellation"></canvas>

      <div class="container">
        <div class="row h-full">
          <div class="col-12 text-center align-self-center">
            <h1 class="fs-50 fw-600 lh-15 hidden-sm-down">Built for <span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
            <h1 class="fs-35 fw-600 lh-15 hidden-md-up">Built for<br><span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
            <br>
            <p class="fs-20 hidden-sm-down"><strong>TheSaaS</strong> is an elegant, modern and fully customizable SaaS and WebApp template</p>
            <p class="fs-16 hidden-md-up"><strong>TheSaaS</strong> is an elegant, modern and fully customizable SaaS and WebApp template</p>
            <br>
            <hr class="w-60 hidden-sm-down">
            <br>
            <a class="btn btn-xl btn-round btn-primary fs-20 fw-500 w-350 shadow-3 hidden-sm-down" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Purchase Now - $19</a>
            <a class="btn btn-lg btn-round btn-primary w-250 shadow-3 hidden-md-up" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Purchase Now - $19</a>
            <br>
            <p class="mt-2 mt-md-4"><a href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=extended&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio"><small>or purchase an Extended License</small></a></p>
          </div>

          <div class="col-12 align-self-end text-center pb-70">
            <a class="scroll-down-2 scroll-down-inverse" href="#" data-scrollto="section-demo"><span></span></a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->
@stop
@section('content')
<section class="section section-inverse py-120" style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">
        <div class="container">
          <header class="section-header">
            <small><strong>Own it</strong></small>
            <h2 class="fs-45">Get It <span class="mark-border">Now</span></h2>
            <hr>
            <p class="lead">If you have visited the other pages and you have made your decision to purchase this template, go on and press the following button and get a license in less than a minute.</p>
          </header>

          <p class="text-center">
            <a class="btn btn-xl btn-primary w-250" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Purchase for <span class="pl-4">$19</span></a><br>
            <small><a class="text-white" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=extended&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">or purchase an Extended License</a></small>
          </p>
        </div>
</section>
@stop