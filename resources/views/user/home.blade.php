@extends('user.main')
@section('main-content')
<div class="hero_section">
    <div class="content">
      <div class="text_content">
        <h1>Meaningful investments in Main Street businesses</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut</p>
        <a href="#" class="btn btn-blue">Get Started</a>
      </div>
    </div>
  </div>
  <div class="section_2 position-relative">
    <img src="{{asset('img/Shape.png')}}" class="position-absolute shape" alt="shape">
    <div class="container">
      <div class="text_content text-center">
        <h2 class="section_title">Offerings open for investment</h2>
        <p class="section_para">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
          purus sit amet luctus
        </p>
      </div>

      <div class="row project-row">
        @include('components.planList')
      </div>


      <div class="btns d-flex justify-content-center">
        <a href="javascript:void(0)" class="btn btn-blue-outline load-more-plan-btn">View All Projects</a>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
window.onload = function(){

 let loadMoreBtn = document.querySelector(".load-more-plan-btn");
 loadMoreBtn.addEventListener("click" , function(e){
    let totalPlan = document.querySelectorAll(".plan").length;
    $.ajax({
      type : "POST",
      url : "{{route('load.more.plan')}}",
      data : {
        _token : "{{csrf_token()}}",
        totalPlan : totalPlan
      },
      success:function(res){
        if(res.success == true){
          let testProject = ["" , undefined , null];
          let project = res.projects;
          if(testProject.includes(project))
          {
            toastr.error("No More Project Available");
            document.querySelector(".load-more-plan-btn").remove();
          }else{
            document.querySelector(".project-row").insertAdjacentHTML('beforeend' , project);
          }
          window.scrollTo(0, document.body.scrollHeight);
        }else{
          alert(res.error);
        }
      }
    })
 })

}
</script>
@endsection