@foreach($plans as $plan)
    <div class="col-lg-4 plan">
      <div class="box mt-5">
        <div class="card">
          <img src="{{asset('uploads')}}/{{$plan->company_logo}}" class="card-img-top" alt="card image">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <div class="card_title">
                  <h2>{{$plan->company_name}}</h2>
                  <p class="mb-0">{{$plan->city}}, {{$plan->country}}</p>
                </div>
              </div>
              <div class="col-lg-4 d-flex justify-content-end">
                <img src="{{asset('img/rating.png')}}" alt="rating">
              </div>
            </div>
            <p class="card_des">
              ${{$plan->description}}
            </p>
            @php
            $totalWidth = ceil( ($plan->amount/$plan->investment) * 100)
            @endphp
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: {{$totalWidth}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">${{number_format($plan->amount)}}</span> raised of ${{number_format($plan->investment)}}
            </p>
          </div>
        </div>
      </div>
    </div>
@endforeach




{{-- <div class="row">
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit
            </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progressNote">
              <span class="blueText">$574,920</span> raised of $1,000,000
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}