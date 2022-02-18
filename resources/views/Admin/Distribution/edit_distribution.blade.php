@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Update Distribution</li>
			</ol>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Distribution</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('update-distribution')}}">
				@csrf
				<div class="control-group hidden-phone">
							  
				<input type="hidden" name="id" value="{{$editdistribution['id']}}">

				</div>

				<div class="mb-3">
                                <label class="form-label">Acceptor Name</label>
                                <select id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" style="width: 400px; height: 46px;" required  autocomplete="name" autofocus>

                                            <option value="">Select Acceptor</option>
                                            @if(!empty($acceptors))
                                            @foreach($acceptors as $acceptor)
                                            <option value="{{$acceptor->id}}">{{$acceptor->name}}</option>
                                            @endforeach
                                            @endif
                                            </select>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

				<div class="form-group">
					<label>Amount</label>
					<input class="form-control" type="number" value="{{$editdistribution['amount']}}" required="true" name="amount"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Description</label>
					<input class="form-control" type="text" value="{{$editdistribution['description']}}" required="true" name="description"  style="width: 400px;">
				</div>
				<div class="form-group">
					<label>Bill</label>
					<input class="form-control" type="file" value="{{$editdistribution['bill']}}" required="true" name="bill"  style="width: 400px;">
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