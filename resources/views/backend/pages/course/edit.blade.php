@extends('backend.layouts.app')

@section('page.name', 'Course')

@section('page.content')

	@php 
		$section = request('section');
	@endphp

	<div class="row">

		<ul class="nav nav-tabs admin_nav">

			<li class="nav-item">
			  <a class="nav-link @if( $section == 'course') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'course'])) }}">Key Feature & Overview</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'syllabus') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'syllabus'])) }}">Course Content</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'project') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'project'])) }}">Project Covered</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'certificate') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'certificate'])) }}">Certificate</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'text') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'text'])) }}">Text Reviews</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'video') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'video'])) }}">Video Reviews</a>
			</li>

			<li class="nav-item">
				<a class="nav-link @if( $section == 'batch') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'batch'])) }}">Batch Schedule</a>
			</li>



			{{--
			<li class="nav-item">
				<a class="nav-link @if( $section == 'images') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'images'])) }}">Images Reviews</a>
			</li> --}}


			<li class="nav-item">
				<a class="nav-link @if( $section == 'faq') active @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'faq'])) }}">FAQ</a>
			</li>

			<li class="nav-item">
				<a class="nav-link spl_active @if( $section == 'practice_test') active2  @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'practice_test'])) }}">Practice Test</a>
			</li>

			<li class="nav-item">
				<a class="nav-link spl_active @if( $section == 'book_guides') active2 @endif" aria-current="page" href="{{ url(route('course.edit',['id' => $course->id, 'section' => 'book_guides'])) }}">Book & Guides</a>
			</li>

		
		</ul>

	</div>




	@if($section && $section == 'course')
		@include('backend.pages.course.section.course.edit')
	@elseif($section && $section == 'batch')
		@include('backend.pages.course.section.batch.batch_schedule_index')
	@elseif($section && $section == 'text')
		@include('backend.pages.course.section.textreview.index')
	@elseif($section && $section == 'images')
		@include('backend.pages.course.section.imagereview.index')
	@elseif($section && $section == 'video')
		@include('backend.pages.course.section.videoreview.index')
	@elseif($section && $section == 'faq')
		@include('backend.pages.course.section.faq.index')
	@elseif($section && $section == 'syllabus')
		@include('backend.pages.course.section.syllabus.index')
	@elseif($section && $section == 'practice_test')
		@include('backend.pages.course.section.practice_test.practice_test_index')
	@elseif($section && $section == 'book_guides')
		@include('backend.pages.course.section.book_guides.book_guides_index')
	@else
		no page
	@endif



@endsection

@section('page.scripts')
    <script>
		$(document).ready(function() {
			initValidate('#edit_course_form');
			initSelect2('.select2');
			
		});

		$("#edit_course_form").submit(function(e) {
			var form = $(this);
			ajaxSubmit(e, form, responseHandler);
		});

		var responseHandler = function(response) {
			location.reload();
		}

    </script>
@endsection
