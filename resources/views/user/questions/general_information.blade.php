@extends('user.main')
@section('main-content')
<div class="container">
    <div class="text_content text-center my-lg-5 my-3">
      <h2 class="section_title">Information about your company</h2>
      <p class="section_para">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
        maecenas aliquam aliquam non.
      </p>
    </div>

    <div class="form_box">
      <h2 class="form_box_title">General Information</h2>
      <form enctype="multipart/form-data" method="POST" action="{{route('plan.add')}}" >
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="company_name" class="form-label form_box_label">Company Name</label>
              <input type="text" name="company_name" class="form-control form_box_input" id="company_name">
              @error('company_name')
              <span class="text-danger h6">
                  {{$message}}
              </span>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="size" class="form-label form_box_label">Size</label>
              <input type="text" name="size" class="form-control form_box_input" id="size">
              @error('size')
              <span class="text-danger h6">
                  {{$message}}
              </span>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="country" class="form-label form_box_label">Country</label>
              <input type="text" name="country" class="form-control form_box_input" id="country">
              @error('country')
              <span class="text-danger h6">
                  {{$message}}
              </span>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="city" class="form-label form_box_label">City</label>
              <input type="text" name="city" class="form-control form_box_input" id="city">
              @error('city')
              <span class="text-danger h6">
                  {{$message}}
              </span>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="address" class="form-label form_box_label">Address</label>
              <input type="text" name="address" class="form-control form_box_input" id="address">
              @error('address')
              <span class="text-danger h6">
                  {{$message}}
              </span>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="postal_code" class="form-label form_box_label">Postal Code</label>
              <input type="text" name="postal_code" class="form-control form_box_input" id="postal_code">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="logo" class="form-label form_box_label">Upload Logo</label>
              <input type="file" name="logo" class="form-control form_box_input" id="logo">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="category" class="form-label form_box_label">Category</label>
              <input type="text" name="category" class="form-control form_box_input" id="category">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="video" class="form-label form_box_label">Upload Video</label>
              <input type="url" name="video" class="form-control form_box_input" id="exampleFormControlInput1">
            </div>
          </div>
        </div>
        <div class="form_bottom_links d-flex justify-content-between">
          <button type="submit" class="btn btn-blue" >Next Step</button>
          {{-- <a href="javascript:void(0)" class="save_link">Save</a> --}}
          {{-- <a href="{{route('user.investee_question_form')}}" class="btn btn-blue ">Next Step</a> --}}
        </div>
      </form>
    </div>

    <!-- buttons -->

    
  </div>
@endsection