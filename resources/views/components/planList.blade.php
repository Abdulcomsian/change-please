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
      <div class="statistic-box card px-3 py-5">
        <h3><strong>Good Loop</strong></h3>
        <h5>Brooklyn Ny</h5>
        <hr>
        <div>
          <div class="d-flex justify-content-between px-4">
            <p>Market</p>
            <p>{{$plan->Market ? $plan->Market->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Traction</p>
            <p>{{$plan->Traction ? $plan->Traction->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Team</p>
            <p>{{$plan->Team ? $plan->Team->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Business Model</p>
            <p>{{$plan->BusinessModel ? $plan->BusinessModel->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Competition</p>
            <p>{{$plan->Competition ? $plan->Competition->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Corporate Structure</p>
            <p>{{$plan->CorporateStructure ? $plan->CorporateStructure->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Existing Financial</p>
            <p>{{$plan->ExistingFinancial ? $plan->ExistingFinancial->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Financial</p>
            <p>{{$plan->Financial ? $plan->Financial->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Fund</p>
            <p>{{$plan->Fund ? $plan->Fund->rating ?? 0 : 0 }}/10</p>
          </div>
          <div class="d-flex justify-content-between px-4">
            <p>Intellectual Property</p>
            <p>{{$plan->IntellectualProperty ? $plan->IntellectualProperty->rating ?? 0 : 0}}/10</p>
          </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-block">View</button>
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