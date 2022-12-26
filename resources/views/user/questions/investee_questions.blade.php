@extends('user.main')
@section('main-content')
<div class="container">
  <input type="hidden" name="planId" id="planId" value="{{$planId}}">
  <input type="hidden" name="csrf_token" id="token" value="{{csrf_token()}}">
    <div class="text_content text-center my-lg-5 my-3">
      <h2 class="section_title">Answer following questions</h2>
      <p class="section_para">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
        maecenas aliquam aliquam non.
      </p>
    </div>

    {{-- steps starts here --}}
    <div class="stepper-wrapper">
      <div class="stepper-item">
        <div class="step-counter num">1</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-name">Market</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">2</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">Traction</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">3</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">Team</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">4</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">Competition</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">5</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">Financials</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">6</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">
          Intellectual <br>
          Property
        </div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">7</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">
          Use of <br>
          Fund
        </div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">8</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">
          Business <br>
          Model
        </div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">9</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">
          Corporate <br>
          Structure
        </div>
      </div>
      <div class="stepper-item">
        <div class="step-counter num">10</div>
        <div class="step-counter check">
          <img src="{{asset('img/check.png')}}" alt="check">
        </div>
        <div class="step-counter bi_check">
          <img src="{{asset('img/bi_check.png')}}" alt="check">
        </div>
        <div class="step-name">
          Existing Financial <br>
          Round
        </div>
      </div>
    </div>
    {{-- step ends here --}}

    {{-- market question code starts here --}}


    <div class="form_box">
      <!-- progress steps start -->

      

      <!-- progress steps end -->

      <h2 class="form_box_title">Market</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="market_opportunity" class="form-label form_box_label">1. How big is the market opportunity?</label>
              <input type="text" class="form-control form_box_input" id="market_opportunity">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="market_share" class="form-label form_box_label">2. What percentage of the market share do you hope to
                get?</label>
              <input type="text" class="form-control form_box_input" id="market_share">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="best_customer" class="form-label form_box_label">3. Who exactly is your best customer?</label>
              <input type="text" class="form-control form_box_input" id="best_customer">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="time_taken" class="form-label form_box_label">4. How long will this take?</label>
              <input type="text" class="form-control form_box_input" id="time_taken">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="figures" class="form-label form_box_label">5. How do you come up with these figures?</label>
              <input type="text" class="form-control form_box_input" id="figures">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="pr_strategy" class="form-label form_box_label">6. What is your PR strategy?</label>
              <input type="text" class="form-control form_box_input" id="pr_strategy">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="aspire" class="form-label form_box_label">7. Who do you most aspire to be like?</label>
              <input type="text" class="form-control form_box_input" id="aspire">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="least_like" class="form-label form_box_label">8. Who do you least want to be like?</label>
              <input type="text" class="form-control form_box_input" id="least_like">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="right_time" class="form-label form_box_label">9. Why is this the right time for this product or
                service?</label>
              <input type="text" class="form-control form_box_input" id="right_time">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="market_strategy" class="form-label form_box_label">10. What is your marketing strategy?</label>
              <input type="text" class="form-control form_box_input" id="market_strategy">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="javascript:void(0)" id="market-save" class="save_link">Save</a>
        <div class="d-flex">
          {{-- <a href="#" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a> --}}
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>

    {{-- market code ends here --}}


    {{-- traction code ends here --}}
    <div class="form_box d-none">
      <h2 class="form_box_title">Traction</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. How much feedback you have recieved so far?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. What changes have you made based on that feedback?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. How many actual users do you have?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. How long do users stay on average?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. How many actual sales you have made?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. What is the annual growth rate?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. Total rate of growth?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. Has growth been linear and consistent?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. What has held back your growth?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. Can you provide a demonstration of the product or service now?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>

    {{-- traction code ends here --}}

    {{-- Team code starts here --}}
    <div class="form_box d-none">
     <h2 class="form_box_title">Team</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. Where are your headquarters?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. Who are the founders?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. Who are key team members?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. Any existing board members?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. What key roles may need to be hired for soon?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. What experience do you have in the industry?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. Why are you the right person to bet on to achieve this?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. What motivates you?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. Are any of the founder willing to be bought out now?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. Are there any other people who may claim they are owed or responsible for your ideas?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>
    

    {{-- Team code ends here --}}

    
    {{-- Competition code starts here --}}

    <div class="form_box d-none">
     <h2 class="form_box_title">Competition</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. Who are you competitors?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. What are your strength and advantages over your competitors?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. What are your weakness or disadvantages?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. What barriers to entry or scale are there for you?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. Where is the competition letting down customers?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. Why haven't your competitors done this yet?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. How do your features differ?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. How do you compare on price?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. How do you compare on service?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. How do you compare on customer satisfaction?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>

    {{-- Competition code ends here --}}


    {{-- Financial code starts here --}}

    <div class="form_box d-none">
     <h2 class="form_box_title">Financials</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. How are you marketing your product or service?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. How much is your marketing budget?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. What are your per customer acquisition costs?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. How much is your customer lifetime value?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. How much equity and debt has been raised in the past?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. Who participated in earlier round of fundraising?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. What is your burn rate?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. How long will it take to become profitable?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. What are the key metrics your team is focused on?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. What stock options have been given already? What is the distribution of equity between founders?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>

    {{-- Financial code ends here --}}


    {{-- Intellectual Property code starts here --}}

    <div class="form_box d-none">
     <h2 class="form_box_title">Intellectual Property</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. What is unique about the company?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. What Big problem does it solve?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. What legal risks do you see?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. Are you aware of any product liability risks?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. What regulatory risks could impact this business?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. What intellectual property do you own?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. Who developed any intellectual property owned?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. Have any employees or partners have left who may challenge these rights?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. Are there any additional patents pending or planned?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. How are any current intellectual assets owned?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>

    {{-- Intellectual Property code ends here --}}


    
{{-- Business Model code starts here --}}
    <div class="form_box d-none">
     <h2 class="form_box_title">Business Model</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. Which specific marketing channels are you using?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. Why are you using these marketing channels?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. What is your plan B, if these sales channels are interrupted?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. What profit margins are you operating on?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. How will scalling impact profit margins?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. What pivots have you already made up until now?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. Can you tell me a story about how a customer has decided to choose you and their experience with your product?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. Who in the organization is most replaceable?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. What unique features are you working on?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. What other streams of revenue can be added to this?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>
{{-- Business Model code ends here --}}
    

    {{-- Use of funds code starts here --}}
    <div class="form_box d-none">
     <h2 class="form_box_title">Use of Funds</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. How will these funds be allocated?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. How much will be spent on founders salaries?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. How much will be spent on overhead versus expansion?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. What if you don't get all the money you are asking for?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. What assets will be invested in with this capital?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. What are your milestones?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. What are the biggest risks to my investment?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. Why are you choosing this method of raising capital?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. How much this money will be used for future fundraising efforts?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. How much are you personal expenses each month?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>
    
    {{-- Use of funds code ends here --}}

    
    {{-- Corporate structure starts here --}}
    <div class="form_box d-none">
      <h2 class="form_box_title">Corporate Structure</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. How is the company organized?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. Who hold which titles?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. How are shares split?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. Is there any existing board or advisors?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. Where is the company registered?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. Who handles accounting?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. What unique skills and talents does each owner contribute?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. Name someone you chose not to include as a founder and why?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. Who filed the company?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. Who is the registered agent on record?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue next-step">Next Step</a>
        </div>
      </div>
    </div>
    
    {{-- Corporate structure ends here --}}
    
    
    {{-- Existing Financial Round Starts here --}}

    <div class="form_box d-none">
      <h2 class="form_box_title">Existing Financial Round</h2>
      <form>
        <div class="row align-items-center">
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">1. What is your exit goal?(i.e IPO, M&A)</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">2. What is your expected time frame for this?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">3. Who do you imagine will help you exit?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">4. When do you expect you will be conducting a follow up round of fundraising?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">5. How much money is your pre-money valuation?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">6. how are you determining current valuation?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">7. How much are you trying to raise now?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">8. How many previous investors will participate in this round?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">9. What is the next milestone this money will take you to?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">10. How else do you hope an investor will help beyond money?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>




          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Numbers of customer</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">What countries do you operate in?</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Date Founded</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Stage of maturity</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Number of full-time employees</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Annual revenue 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Projected revenue 2023, 2024, 2025, 2026, 2027</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Net Profit 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Cach Balance (31 Dec 2021)</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>
          <div class="col-lg-7 colL">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label form_box_label">Funding request</label>
              <input type="email" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-5 colL">
            <div class="loom_link d-flex justify-content-end">
              <a href="#">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_54_3575)">
                    <path d="M16.7979 12.0957V4.56934C16.7979 4.24966 16.4078 4.01318 16.0921 4.22769C16.092 4.22777 16.0919 4.22786 16.0918 4.22794L13.0756 6.29202V10.3758L16.0926 12.4384L16.7979 12.0957ZM16.7979 12.0957C16.7979 12.4179 16.4063 12.6524 16.0928 12.4385L16.7979 12.0957ZM11.1312 4.11523V12.5527C11.1312 13.0498 10.7243 13.459 10.2145 13.459H1.71452C1.20476 13.459 0.797852 13.0498 0.797852 12.5527V4.11523C0.797852 3.61819 1.20476 3.20898 1.71452 3.20898H10.2145C10.724 3.20898 11.1312 3.61826 11.1312 4.11523Z" stroke="#3B7CEE"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_54_3575">
                      <rect width="17" height="15" fill="white" transform="translate(0.297852 0.833984)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Record with LOOM</a>
            </div>
          </div>




        </div>
      </form>
      <div class="form_bottom_links d-flex justify-content-between">
        <a href="#" class="save_link">Save</a>
        <div class="d-flex">
          <a href="javascript:void(0)" class="btn btn-blue-outline d-flex align-items-center me-4 justify-content-center previous-step">Previous Step</a>
          <a href="javascript:void(0)" class="btn btn-blue done">Done</a>
        </div>
      </div>
    </div>

    {{-- Existing Financial Round ends here --}}



  </div>


<script>
  let previousBtn = document.querySelectorAll(".previous-step");
  let nextBtn = document.querySelectorAll(".next-step");
  let form    = document.querySelectorAll(".form_box");
  let stepper = document.querySelectorAll(".stepper-item");
  for(let i=0; i<previousBtn.length; i++)
  {
    previousBtn[i].addEventListener('click' , function(e){
      setPreviousStep(i);
      form[i+1].classList.add("d-none");
      form[i].classList.remove("d-none");
      window.scroll(0,0);
      $(form[i]).fadeOut();
      $(form[i]).fadeIn();
    });
  }

  for(let i=0; i<nextBtn.length; i++)
  {
    nextBtn[i].addEventListener('click' , function(e){
      setNextStep(i);
      form[i].classList.add("d-none");
      form[i+1].classList.remove("d-none");
      window.scroll(0,0);
      $(form[i+1]).fadeOut();
      $(form[i+1]).fadeIn();
    });
  }

  function setPreviousStep(i)
  {
     stepper[i].classList.remove("completed");
     stepper[i].classList.add("next");
     stepper[i+1].classList.remove("next");
  }

  function setNextStep(i)
  {
     stepper[i].classList.add("completed");
     stepper[i].classList.remove("next");
     stepper[i+1].classList.add("next");
  }



// Question form starts here

function addInformation(info , url)
{
  console.log("inside add information function");
  let token = document.getElementById("token").value;
  let planId = document.getElementById("planId").value;
  $.ajax({
    type : "POST",
    url : url,
    data : {
      _token : token , ...info , planId : planId
    },
    success:function(res){
      alert("executed successfully")
    },
    error: function(){
      alert("not working")
    }

  })
  console.log("inside add information function ends here");
}


window.onload = function(){


  let marketSave = document.getElementById("market-save");
  marketSave.addEventListener("click" , function(e){
  
    let marketOpportunity = document.getElementById("market_opportunity").value;
    let marketShare = document.getElementById("market_share").value;
    let bestCustomer = document.getElementById("best_customer").value;
    let timeTaken = document.getElementById("time_taken").value;
    let figures = document.getElementById("figures").value;
    let prStrategy = document.getElementById("pr_strategy").value;
    let aspire = document.getElementById("aspire").value;
    let leastLike = document.getElementById("least_like").value;
    let rightTime = document.getElementById("right_time").value;
    let marketStrategy = document.getElementById("market_strategy").value;
  
  
    let data = {
      marketOpportunity  : marketOpportunity ,
       marketShare  : marketShare, 
       bestCustomer  :bestCustomer, 
       timeTaken  : timeTaken , 
       figures  : figures, 
       prStrategy  : prStrategy, 
       aspire  : aspire, 
       leastLike  : leastLike, 
       rightTime : rightTime, 
       marketStrategy : marketStrategy
    };
  
    let url = "{{route('market.add_market')}}";
    addInformation(data , url);
  })

}









// Question form end here





</script>



@endsection