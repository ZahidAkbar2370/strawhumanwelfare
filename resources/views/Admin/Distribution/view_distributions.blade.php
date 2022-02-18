@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Distribution</li>
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
                  <th>Acceptor Name</th>
                  <th>Amount</th>
                  <th>Description</th>
                  <th>Bill</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
            @if(!empty($distributions))
              		@foreach($distributions as $distribution)

              		<tr>
              				<td>{{$distribution->id}}</td>
              				<td>{{$distribution->acceptors->name}}</td>
              				<td>{{$distribution->amount}}</td>
              				<td>{{$distribution->description}}</td>
              				<td>{{$distribution->bill}}</td>
              				<td>
              					<a class="btn btn-danger" href="destroy-distribution/{{$distribution->id}}">Delete<i 
              						class="halflings-icon white trash">
              					</i></a>
              					<a class="btn btn-success" href="edit-distribution/{{$distribution->id}}">Edit<i 
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