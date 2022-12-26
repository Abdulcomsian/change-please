@extends('analyst.main_investee')
@section('main-content')
    <div class="qs_title d-flex align-items-center">
      <img src="{{asset('img/sl.png')}}" alt="sl">
      <h2>GOOD LOOP</h2>
    </div>
    <div class="qs_sec">
      <div class="qs_box">
        <p>
          <span>Question 1: </span>How will these funds be allocated?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 2: </span>How much will be spent on founders salaries?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 3: </span>How much will be spent on overhead versus expansion?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 4: </span>What if you don't get all the money you are asking for?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 5: </span>What assets will be invested in with this capital?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 6: </span>What are your milestones?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 7: </span>What are the biggest risks to my investment?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 8: </span>Why are you choosing this method of raising capital?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 9: </span>How much this money will be used for future fundraising efforts?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
    </div>
    <div class="qs_box">
        <p>
          <span>Question 10: </span>How much are you personal expenses each month?
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