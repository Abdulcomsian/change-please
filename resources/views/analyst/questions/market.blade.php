@extends('analyst.main_investee')
@section('main-content')
    <div class="qs_title d-flex align-items-center">
      <img src="{{asset('img/sl.png')}}" alt="sl">
      <h2>GOOD LOOP</h2>
    </div>
    <div class="qs_sec">
      <div class="qs_box">
        <p>
          <span>Question 1: </span>How big is the market opportunity?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 2: </span>What Percentage of the market share do you hope to get?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 3: </span>Who exactly is your best customer?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 4: </span>How long will this take?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 5: </span>How do you come up with these figures?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 6: </span>What is your PR strategy?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 7: </span>Who do you most aspire to be like?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 8: </span>Who do you least want to be like?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 9: </span>Why is this the right time for this product or service?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
    </div>
    <div class="qs_box">
        <p>
          <span>Question 10: </span>What is your marketing strategy?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <!-- btns -->
      <div class="qs_btns d-flex justify-content-between align-content-center">
        {{-- <a href="#" class="link">save</a> --}}
        <div class="btns d-flex">
          <a href="#" class="btn btn-blue-outline" data-bs-toggle="modal" data-bs-target="#model1">Rate</a>
          {{-- <a href="#" class="btn btn_blue">Done</a> --}}
        </div>
      </div>
    </div>

@endsection