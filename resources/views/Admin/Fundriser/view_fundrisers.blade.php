@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Fundrisers</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Fundrisers</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No</th>
                  <th>Whatsapp No</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
            @if(!empty($fundrisers))
              		@foreach($fundrisers as $fundriser)

              		<tr>
              				<td>{{$fundriser->id}}</td>
              				<td>{{$fundriser->name}}</td>
              				<td>{{$fundriser->email}}</td>
              				<td>{{$fundriser->mobile_no}}</td>
              				<td>{{$fundriser->whatsapp_no}}</td>
              				<td>{{$fundriser->address}}</td>
              				@if($fundriser->status == "1")
											<td><span class="badge bg-success">Active</span></td>
											@else
											<td><span class="badge bg-danger">In-active</span></td>
											@endif


              				<td>
              					<a class="btn btn-danger" href="destroy-fundriser/{{$fundriser->id}}">Delete<i 
              						class="halflings-icon white trash">
              					</i></a>
              					<a class="btn btn-success" href="edit-fundriser/{{$fundriser->id}}">Edit<i 
              						class="halflings-icon white trash">
              					</i></a>
              						</td>	
              				</tr>
              		@endforeach
              @endif
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->


@endsection