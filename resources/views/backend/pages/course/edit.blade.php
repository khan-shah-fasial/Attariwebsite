@extends('backend.layouts.app')

@section('page.name', 'Course')

@section('page.content')

	@php 
		$section = request('section');
	@endphp

	<div class="row">

		<ul class="nav nav-tabs">

			<li class="nav-item">
			  <a class="nav-link @if( $section == 'course') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=course">Course</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'batch') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=batch">Batch Schedule</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'text') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=text">Text Reviews</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'images') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=images">Images Reviews</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'video') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=video">Video Reviews</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'faq') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=faq">FAQ</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'syllabus') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=syllabus">Syllabus</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'project') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=project">Project Covered</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'certificate') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id])) }}?section=certificate">Certificate</a>
			</li>

		
		</ul>

	</div>




	@if($section && $section == 'course')
		@include('backend.pages.course.section.edit_course')
	@elseif($section && $section == 'batch')
		@include('backend.pages.course.section.batch_schedule_add')
	@else
		no page
	@endif



@endsection

@section('page.scripts')
    <script>
		$(document).ready(function() {
			initValidate('#edit_course_form');
			initValidate('#add_batch_form');
			initSelect2('.select2');
			initTrumbowyg('.trumbowyg');
			initTrumbowyg('#trumbowyg_0');
		});

		$("#edit_course_form").submit(function(e) {
			var form = $(this);
			ajaxSubmit(e, form, responseHandler);
		});

		$("#add_batch_form").submit(function(e) {
			var form = $(this);
			ajaxSubmit(e, form, responseHandler);
		});

		var responseHandler = function(response) {
			location.reload();
		}

		function remove_pointer_list(_this) {
			_this.closest(".pointer_list").remove();
		}

		function remove_oc_pointer_list(_this) {
			_this.closest(".oc_pointer_list").remove();
		}

		function remove_batch_detail(_this) {
			_this.closest(".batch_detail").remove();
		}

		function remove_corp_pointer_list(_this) {
			_this.closest(".corp_pointer_list").remove();
		}

		$("#add_pointer_list").on("click", function() {

		var new_pointer_list = `
			<div class="pointer_list form-group">
				<div class="row">
					<div class="col-md-11">
						<div class="row">
							<input type="text" style="margin-bottom: 3px;" class="form-control" name="paced_pointer_list[]" placeholder="Enter pointer List here...">
						</div>
					</div>
					<div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_pointer_list($(this));"></i></div>
				</div>
				</br>
			</div>
		`;

		$("#pointer_list_add_more").append(new_pointer_list);
		});


		$("#add_oc_pointer_list").on("click", function() {

		var new_oc_pointer_list = `
			<div class="oc_pointer_list form-group">
				<div class="row">
					<div class="col-md-11">
						<div class="row">
							<input type="text" style="margin-bottom: 3px;" class="form-control" name="oc_pointer_list[]" placeholder="Enter pointer List here...">
						</div>
					</div>
					<div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_oc_pointer_list($(this));"></i></div>
				</div>
				</br>
			</div>
		`;

		$("#oc_pointer_list_add_more").append(new_oc_pointer_list);
		});

		$("#add_batch_detail").on("click", function() {

		var new_batch_detail = `
			<div class="batch_detail form-group">
				<div class="row">
					<div class="col-md-11">
						<div class="row">

							<div class="col col-md-3">
								<input type="text" style="margin-bottom: 5px;" class="form-control" name="batch_detail_date[]" placeholder="Enter Date here...">
							</div>

							<div class="col col-md-3">
								<input class="form-control" name="batch_detail_sch[]" placeholder="Enter Schedule here...">
							</div>

							<div class="col col-md-3">
								<input class="form-control" name="batch_detail_remark[]" placeholder="Enter Remark here...">
							</div>

							<div class="col col-md-3">
								<input class="form-control" name="batch_detail_time[]" placeholder="Enter Schedule here...">
							</div>

						</div>
					</div>
					<div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_batch_detail($(this));"></i></div>
				</div>
				</br>
			</div>
		`;

		$("#batch_detail_add_more").append(new_batch_detail);
		});

		$("#add_corp_pointer_list").on("click", function() {

		var new_corp_pointer_list = `
			<div class="corp_pointer_list form-group">
				<div class="row">
					<div class="col-md-11">
						<div class="row">
							<input type="text" style="margin-bottom: 3px;" class="form-control" name="corp_pointer_list[]" placeholder="Enter pointer List here...">
						</div>
					</div>
					<div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_corp_pointer_list($(this));"></i></div>
				</div>
				</br>
			</div>
		`;

		$("#corp_pointer_list_add_more").append(new_corp_pointer_list);
		});


    </script>
@endsection
