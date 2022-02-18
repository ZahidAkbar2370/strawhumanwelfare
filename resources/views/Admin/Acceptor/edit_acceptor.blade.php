@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Update Acceptor</li>
			</ol>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Acceptor</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('update-acceptor')}}">
				@csrf
				<div class="control-group hidden-phone">
							  
				<input type="hidden" name="id" value="{{$editacceptor['id']}}">

				</div>

				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" value="{{$editacceptor['name']}}" required="true" name="name"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Mobile No</label>
					<input class="form-control" type="number" value="{{$editacceptor['mobile_no']}}" required="true" name="mobile_no"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" value="{{$editacceptor['address']}}" required="true" name="address"  style="width: 400px;">
				</div>

				<div class="form-group">												
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>			
			</form>		
		</div>
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection