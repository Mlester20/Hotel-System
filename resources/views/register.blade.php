@extends('frontlayout')
@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="card-header">
	<h3 class="mb-3 text-center" style="color: #164863;">Register</h3>
	@if(Session::has('success'))
	<p class="text-success">{{session('success')}}</p>
	@endif
	<form method="post" action="{{url('admin/customer')}}">
		@csrf
		<table class="table table-bordered">
			<tr>
				<th>Full Name<span class="text-danger">*</span></th>
				<td><input required type="text" class="form-control" name="full_name"></td>
			</tr>
			<tr>
				<th>Email<span class="text-danger">*</span></th>
				<td><input required type="email" class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>Password<span class="text-danger">*</span></th>
				<td><input required type="password" class="form-control" name="password"></td>
			</tr>
			<tr>
				<th>Mobile<span class="text-danger">*</span></th>
				<td><input required type="number" class="form-control" name="mobile"></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" class="form-control" name="address"></td>
			</tr>
			<tr>
				<input type="hidden" name="ref" value="front" />
				<td colspan="2"><input type="submit" class="btn btn-primary" /></td>
			</tr>
		</table>
		
	</form>
</div>
</div>
</div>
</div>



@endsection