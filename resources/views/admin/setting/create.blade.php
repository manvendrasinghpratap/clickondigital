@extends('admin.layouts.index')
@section('content')
	<link type="text/css" rel="stylesheet" href="{!! asset('public/css/select2.css')!!}" />
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
  <div class="row">
	 <div class="col-lg-12">
					<div class="panel panel-blue">
					   <div class="panel-heading">{{trans('message.updatesettings')}}</div>
					   <div class="panel-body pan">
						  {{ Form::open(['method'=>'post','url'=>'updateSettings','files'=>'true','class'=>'form-horizontal','role'=>'form'])}}
							<div class="form-body pal">								
								@foreach($settingDetails as $value)
								@if($value->field_name!='companylogo')
								 <div class="form-group {{ $errors->has('empid') ? 'has-error' : '' }}">
								   <label for="firstname" class="col-md-3 control-label">{{  @$value->label }}</label>
								   <div class="col-md-9">
									  <div class="input-icon">
									  {{ Form::text($value->field_name, $value->value, array('class' => 'form-control','placeholder'=>@$value->label)) }}
									  {{ Form::hidden('fieldname[]', $value->field_name, array('class' => 'form-control','placeholder'=>@$value->label)) }}
										  <span class="text-danger">{{ $errors->first('firstname') }}</span>
									  </div>
								   </div>
								</div>
								@else
								<div class="form-group {{ $errors->has('empid') ? 'has-error' : '' }}">
								   <label for="firstname" class="col-md-3 control-label">{{  @$value->label }}</label>
								   <div class="col-md-3">
									  <div class="input-icon">
									  <input type="file" class="form-control" name="imagename"/>
									  </div>
								   </div>

									<?php
									if($value->value==''){
									$imagename= 'logo.png';
									}elseif(file_exists('public/storage/'.$value->value)){
									$imagename= $value->value;
									}else{
									$imagename= 'logo.png';
									}
									//$imagename= 'logo.png';
									?>
								<div class="col-md-6">
									  <div class="input-icon">
									  <img name="existingimagename" class="shield-img" src="{{url('public/storage/'.$imagename)}}" alt="" style="width: 150px;height: 80px;">
									  </div>
								   </div>	
								</div>
								@endif
								@endforeach
							</div>
							 <div class="form-actions">
								 <div class="col-md-offset-3 col-md-9">
									 <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>&nbsp;
									 <button type="reset" class="btn btn-green">{{ trans('message.reset') }}</button>
									  {!! link_to(URL::previous(), trans('message.cancel'), ['class' => 'btn btn-default']) !!}
								 </div>
							 </div>
						  {{ Form::close() }}
					   </div>
					</div>
				 </div>
				 </div>
	 </div>
  </div>
</div>
               <!--END CONTENT-->
  @endsection
	@push('scripts')
		<script src="{!! asset('public/js/jquery.dataTables.min.js')!!}" charset="utf-8"></script>
		<script src="{!! asset('public/js/dataTables.buttons.min.js')!!}" charset="utf-8"></script>
		<script src="{!! asset('public/js/dataTables.bootstrap.min.js')!!}" charset="utf-8"></script>
		<script src="{!! asset('public/js/jszip.min.js')!!}" charset="utf-8"></script>
		<script src="{!! asset('public/js/buttons.html5.min.js')!!}" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function() {
		var table = $('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
			{
				extend: 'excel',
				text: 'Export excel',
				className: 'exportExcel',
				filename: 'Export excel',
				exportOptions: {
					modifier: {
						page: 'all'
					}
				}
			},
]
		});

	});
	$('#subskill').on('change', function() {
				var subskill =  $(this).find(":selected").val();
				if (window.location.search.indexOf('subskill') > -1)
						window.location.href = window.location.href.split('?')[0] + "?subskill="+ subskill;
				 else
						window.location.href = window.location.href.split('?')[0] + "?subskill="+ subskill;
				});
  $(function () {
		$("#startdate").datepicker({ format: "yyyy-mm-dd" }).val();
		$("#enddate").datepicker({ format: "yyyy-mm-dd" }).val();
  });
 </script>
	@endpush
