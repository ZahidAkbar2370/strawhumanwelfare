@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Funds</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Fund</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('add-fund')}}">
				@csrf
				<div class="mb-3">
                                <label class="form-label">Fundriser Name</label>
                                <select id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" style="width: 400px; height: 46px;" required  autocomplete="name" autofocus>
                                            <option value="">Select Fundriser</option>
                                            @if(!empty($fundrisers))
                                            @foreach($fundrisers as $fundriser)
                                            <option value="{{$fundriser->id}}">{{$fundriser->name}}</option>
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
					<input class="form-control" type="number" value="" required="true" name="amount"  style="width: 400px;">
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