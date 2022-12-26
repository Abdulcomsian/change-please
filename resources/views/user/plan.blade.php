@extends('user.main')
@section('main-content')
<style>
    .progress {
      width: 150px;
      height: 150px;
      line-height: 150px;
      background: none;
      margin: 0 auto;
      box-shadow: none;
      position: relative;
    }
    .progress.sub-progress{
        width:90px;
        height: 90px;
        line-height: 90px;
    }
    .progress:after {
      content: "";
      width: 100%;
      height: 100%;
      border-radius: 50%;
      border: 12px solid #fff;
      position: absolute;
      top: 0;
      left: 0;
    }
    .progress > span {
      width: 50%;
      height: 100%;
      overflow: hidden;
      position: absolute;
      top: 0;
      z-index: 1;
    }
    .progress .progress-left {
      left: 0;
    }
    .progress .progress-bar {
      width: 100%;
      height: 100%;
      background: none;
      border-width: 12px;
      border-style: solid;
      position: absolute;
      top: 0;
    }
    .progress .progress-left .progress-bar {
      left: 100%;
      border-top-right-radius: 80px;
      border-bottom-right-radius: 80px;
      border-left: 0;
      -webkit-transform-origin: center left;
      transform-origin: center left;
    }
    .progress .progress-right {
      right: 0;
    }
    .progress .progress-right .progress-bar {
      left: -100%;
      border-top-left-radius: 80px;
      border-bottom-left-radius: 80px;
      border-right: 0;
      -webkit-transform-origin: center right;
      transform-origin: center right;
      animation: loading-1 1.8s linear forwards;
    }
    .progress .progress-value {
      width: 90%;
      height: 90%;
      border-radius: 50%;
      background: #44484b;
      font-size: 24px;
      color: #fff;
      text-align: center;
      position: absolute;
      top: 5%;
      left: 5%;
    }
    .progress.blue .progress-bar {
      border-color: #049dff;
    }
    .progress.blue .progress-left .progress-bar {
      animation: loading-2 1.5s linear forwards 1.8s;
    }
    .progress.yellow .progress-bar {
      border-color: #fdba04;
    }
    .progress.yellow .progress-left .progress-bar {
      animation: loading-3 1s linear forwards 1.8s;
    }
    .progress.pink .progress-bar {
      border-color: #ed687c;
    }
    .progress.pink .progress-left .progress-bar {
      animation: loading-4 0.4s linear forwards 1.8s;
    }
    .progress.green .progress-bar {
      border-color: #1abc9c;
    }
    .progress.green .progress-left .progress-bar {
      animation: loading-5 1.2s linear forwards 1.8s;
    }
    @keyframes loading-1 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
      }
    }
    @keyframes loading-2 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
      }
    }
    @keyframes loading-3 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
    }
    @keyframes loading-4 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
      }
    }
    @keyframes loading-5 {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
      }
    }
    @media only screen and (max-width: 990px) {
      .progress {
        margin-bottom: 20px;
      }
    }
  </style>

<div class="analyst_dashboard">
    <div class="custom_container">
      <div class="row my-5">
        <div class="col-lg-3">
          <div class="profile_left_content shadow d-flex flex-column align-items-center pt-4 pb-4">
            <img src="img/sl.png" alt="sl">
            <h3>GOOD LOOP</h3>
            <p class="p-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Pellentesque maecenas aliquam aliquam non.
            </p>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="profile_right_content">
            <div class="container card shadow pt-4 pb-4">
                <div class="row">
                    <h2>Company Info</h2>
                    <div class="d-flex justify-content-between"><h4 class="text-secondary">Location:</h4><h4 style="padding-right: 20%">New York, USA</h4></div>
                    <div class="d-flex justify-content-between"><h4 class="text-secondary">Email:</h4><h4 style="padding-right: 20%">info@codeexceptional.com</h4></div>
                    <div class="d-flex justify-content-between"><h4 class="text-secondary">No of employee:</h4><h4 style="padding-right: 20%">100+</h4></div>
                    <div class="d-flex">
                        <a href="javascript:void(0)" class="btn btn-blue">Contact</a>
                    </div>
                </div>
            </div>
            <div class="container mt-5 card shadow pt-4 pb-4">
                <div class="row">
                    <h2>Rating</h2>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="col-md-12 d-flex flex-wrap">
                                <div class="col-md-2 col-sm-6">
                                    <div class="progress sub-progress blue">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">7/10</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Market</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="progress sub-progress yellow">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Traction</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="progress sub-progress blue">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">100%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Team</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="progress sub-progress blue">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">100%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Competition</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="progress sub-progress blue">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">100%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Financials</b></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-wrap">
                                <div class="col-md-2 col-sm-6 mt-4">
                                    <div class="progress sub-progress yellow">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Intellectual Property</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6 mt-4">
                                    <div class="progress sub-progress blue">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">100%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Use of Funds</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6 mt-4">
                                    <div class="progress sub-progress yellow">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Business Model</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6 mt-4">
                                    <div class="progress sub-progress yellow">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Corporate Structure</b></div>
                                </div>
                                <div class="col-md-2 col-sm-6 mt-4">
                                    <div class="progress sub-progress yellow">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                    <div class="text-secondary text-center mt-2"><b>Existing Financing Round</b></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-4 col-sm-6 mt-4">
                                <div class="progress yellow">
                                    <span class="progress-left">
                                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">75%</div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <div class="container mt-5 card shadow pt-4 pb-4">
                <div class="row">
                    <h2>Funds</h2>
                        <div class="d-flex">
                            <h1 class="text-primary">$400,000&nbsp;&nbsp;</h1><h3 class="text-secondary pt-2"> / $200,000</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="bg-primary p-2" style="width: 50%"></div>
                        </div>
                </div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection