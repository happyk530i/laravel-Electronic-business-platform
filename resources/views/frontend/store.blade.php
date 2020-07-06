

@extends('frontend.layouts.master')
@section('title', 'Store')


@section('nav_store', 'active');


@section('content')
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">計價算法</span>
                <span class="section-heading-lower">配送到府</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  每逢週日
                  <span class="ml-auto">不收費不配送</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  150公尺範圍
                  <span class="ml-auto">免費配送</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  300公尺範圍
                  <span class="ml-auto">百元免費配送</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  500公尺範圍
                  <span class="ml-auto">30日累積500元免運</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  800公尺範圍
                  <span class="ml-auto">30日累積799元免運</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  1公里
                  <span class="ml-auto">30日累積1000元免運</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  其他or未達以上
                  <span class="ml-auto">一百公尺10元計算</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>鮮貨源地:公益區</strong>
                  <br>
                  有德路35號
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>歡迎詢問</em>
                </small>
                <br>
                0988-672-833
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">當季當地購入水果</span>
                  <span class="section-heading-lower">About Our shop</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in
                  <em>lust</em>
                  with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    @endsection