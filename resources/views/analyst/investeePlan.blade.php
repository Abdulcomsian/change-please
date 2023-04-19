@extends('analyst.main')
@section('title')
    <title>Investee</title>
@endsection
@section('main-content')
<div class="dash_table_text">
    <h3>Investees Plan</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae
      dictum congue viverra bibendum.
    </p>
  </div>
  <div class="sortBy d-flex justify-content-end">
    <label for="sort">Sort By:</label>
    <select name="sort" id="sort">
      <option value="1">Newest</option>
      <option value="2">Oldest</option>
    </select>
  </div>
  <!-- =========== table tabs ========== -->
 
  <div class="tab-content" id="myTabContent">
    <input type="hidden" name="investeeId" id="investeeId" value="{{$investeeId}}">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="table-responsive dash_table my-2">
        <table class="table caption-top" id="investee-plan">
          <thead>
            <tr>
              <th scope="col" style="width: 50px!important;">Sno</th>
              <th scope="col">Company Name</th>
              <th scope="col">Investment</th>
              <th scope="col">Amount</th>
              <th scope="col">Country</th>
              <th scope="col">City</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
   window.onload = function(){
    (function(){

    //   $("#investee-list").DataTable({
    //             processing: true,
    //             serverSide: true,
    //             pagingType: 'full_numbers',
    //             ajax: '{{ route("analyst.investee.plan") }}',
    //             columns: [
    //                 { data: 'DT_RowIndex', 'orderable': false, 'searchable': false },
    //                 { data: 'cname', name: 'cname' },
    //                 { data: 'investment', name: 'investment' },
    //                 { data: 'amount', name: 'amount' },
    //                 { data: 'country', name: 'country' },
    //                 { data: 'city', name: 'city' },
    //                 { data: 'status', name: 'status' },
    //                 { data: 'action', name: 'action' },
    //             ]
    //         });
    let investeeId = document.getElementById("investeeId").value;
    $('#investee-plan').DataTable({
					processing: true,
					serverSide: true,
					searching: false,
					"aaSorting": [],
					bDestroy: true,
						ajax: {
						url: "{{ route("analyst.investee.plan") }}",
						method: 'POST',
						data: {
                            investeeId : investeeId,
                            _token : "{{csrf_token()}}"
                        },
					},
					columns: [
                                { data: 'DT_RowIndex', 'orderable': false, 'searchable': false },
                                { data: 'cname', name: 'cname' },
                                { data: 'investment', name: 'investment' },
                                { data: 'amount', name: 'amount' },
                                { data: 'country', name: 'country' },
                                { data: 'city', name: 'city' },
                                { data: 'status', name: 'status' },
                                { data: 'action', name: 'action' },
                            ]
				})
      })();

  }
</script>
@endsection