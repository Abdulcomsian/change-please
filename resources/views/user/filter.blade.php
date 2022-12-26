@extends('user.main');
@section('main-content')
<div class="section_2 investes position-relative">
    <!-- <img src="img/Shape.png" class="position-absolute shape" alt="shape" /> -->
    <div class="custom_container">
      <div class="row mx-0">
        <div class="col-lg-3">
          <div class="side_menu">
            <div class="filter_header d-flex justify-content-between">
              <h3 class="m-0">Filter by</h3>
              <a href="#">Reset Filter</a>
            </div>
            <div class="filter_body">
              <div class="filter_box">
                <h4 class="filter_title">COUNTRY</h4>
                <select name="select" class="form-select">
                  <option value="1">Select Country</option>
                  <option value="2">option 1</option>
                  <option value="2">option 2</option>
                </select>
              </div>
              <div class="filter_box">
                <h4 class="filter_title">CITY</h4>
                <select name="select" class="form-select">
                  <option value="1">Select City</option>
                  <option value="2">option 1</option>
                  <option value="2">option 2</option>
                </select>
              </div>
              <div class="filter_box">
                <h4 class="filter_title">RANGE</h4>
                <select name="select" class="form-select">
                  <option value="1">Select investment range</option>
                  <option value="2">option 1</option>
                  <option value="2">option 2</option>
                </select>
              </div>
              <div class="filter_box">
                <h4 class="filter_title">SECTORS</h4>
                <!-- checkboxs -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Energy
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Materials
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Industrials
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Utilities
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Healthcare
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Saham
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Real Estate
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Information Technology
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Communication Services
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Others
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="search_field d-flex justify-content-end">
            <div class="input position-relative">
              <span class="icon position-absolute"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_162_6637)">
                    <path d="M7.05729 3.03385C7.95985 3.03303 8.84237 3.29992 9.59322 3.80075C10.3441 4.30158 10.9295 5.01386 11.2755 5.84747C11.6214 6.68109 11.7124 7.59858 11.5368 8.4839C11.3612 9.36921 10.927 10.1826 10.2891 10.8211C9.6512 11.4595 8.83825 11.8945 7.95309 12.0709C7.06794 12.2473 6.15036 12.1572 5.31643 11.812C4.4825 11.4668 3.76969 10.882 3.26817 10.1316C2.76665 9.38119 2.49896 8.49891 2.49896 7.59635C2.50443 6.38871 2.98631 5.23203 3.83986 4.37769C4.69341 3.52336 5.84966 3.04043 7.05729 3.03385ZM7.05729 2.17969C5.98598 2.17969 4.93872 2.49737 4.04796 3.09256C3.15719 3.68775 2.46292 4.53372 2.05295 5.52349C1.64297 6.51325 1.5357 7.60236 1.74471 8.65309C1.95371 9.70382 2.4696 10.669 3.22713 11.4265C3.98467 12.1841 4.94982 12.6999 6.00056 12.9089C7.05129 13.1179 8.1404 13.0107 9.13016 12.6007C10.1199 12.1907 10.9659 11.4965 11.5611 10.6057C12.1563 9.71493 12.474 8.66767 12.474 7.59635C12.474 6.15977 11.9033 4.78201 10.8875 3.76619C9.87163 2.75037 8.49388 2.17969 7.05729 2.17969Z" fill="#7D8289"></path>
                    <path d="M14.8363 14.8007L11.7655 11.709L11.1738 12.2965L14.2447 15.3882C14.2832 15.427 14.3291 15.4579 14.3796 15.479C14.4301 15.5001 14.4843 15.5111 14.539 15.5113C14.5938 15.5115 14.648 15.5009 14.6987 15.4801C14.7493 15.4594 14.7954 15.4288 14.8342 15.3902C14.8731 15.3517 14.904 15.3058 14.9251 15.2553C14.9462 15.2048 14.9572 15.1506 14.9574 15.0959C14.9576 15.0411 14.947 14.9869 14.9262 14.9362C14.9055 14.8856 14.8749 14.8395 14.8363 14.8007Z" fill="#7D8289"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_162_6637">
                      <rect width="15" height="15" fill="white" transform="translate(0.253906 0.929688)"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <input type="text" placeholder="Search">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg2.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg1.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg2.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box mt-5">
                <div class="card">
                  <img src="{{asset('img/cardImg3.png')}}" class="card-img-top" alt="card image">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-lg-8">
                        <div class="card_title">
                          <h2>Good Loop</h2>
                          <p class="mb-0">Brooklyn, NY</p>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex justify-content-end">
                        <img src="{{asset('img/rating.png')}}" alt="rating">
                      </div>
                    </div>
                    <p class="card_des">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      ut aliquam, purus sit
                    </p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="progressNote">
                      <span class="blueText">$574,920</span> raised of
                      $1,000,000
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- pagination -->
          <nav aria-label="Page navigation example" class="mt-5 pt-5 d-flex justify-content-center">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">»</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- pagination -->
        </div>
      </div>
    </div>
  </div>
@endsection