@extends('analyst.main_investee')
@section('main-content')
    <div class="qs_title d-flex align-items-center">
      <img src="{{asset('img/sl.png')}}" alt="sl">
      <h2>GOOD LOOP</h2>
    </div>
    <div class="qs_sec">
      <div class="qs_box">
        <p>
          <span>Question 1: </span>How is the company organized?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 2: </span>Who hold which titles?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 3: </span>How are shares split?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 4: </span>Is there any existing board or advisors?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 5: </span>Where is the company registered?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 6: </span>Who handles accounting?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 7: </span>What unique skills and talents does each owner contribute?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 8: </span>Name someone you chose not to include as a founder and why?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
      <div class="qs_box">
        <p>
          <span>Question 9: </span>Who filed the company?
        </p>
        <p>
          <span>Answer: </span>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Vitae dictum congue viverra bibendum.
        </p>
      </div>
    </div>
    <div class="qs_box">
        <p>
          <span>Question 10: </span>Who is the registered agent on record?
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