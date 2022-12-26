@extends('analyst.main_investee')
@section('main-content')
    <div class="qs_title d-flex align-items-center">
      <img src="{{asset('img/sl.png')}}" alt="sl">
      <h2>GOOD LOOP</h2>
    </div>
    <div class="qs_sec">
      <div class="qs_box">
        <p>
          <span>Question 1: </span>How much feedback you have recieved so far?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 2: </span>What changes have you made based on that feedback?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 3: </span>How many actual users do you have?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 4: </span>How long do users stay on average?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 5: </span>How many actual sales you have made?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 6: </span>What is the annual growth rate?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 7: </span>Total rate of growth?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 8: </span>Has growth been linear and consistent?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 9: </span>What has held back your growth?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
    </div>
    <div class="qs_box">
        <p>
          <span>Question 10: </span>can you provide a demonstration of the product or service now?
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