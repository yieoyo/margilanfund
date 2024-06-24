@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-md-0">
			<div class="welcome-text">
				<h4>Blog</h4>
			</div>
		</div>
		<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="javascript:void(0);">CMS</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0);">Blog</a></li>
			</ol>
		</div>
	</div>

	<!-- row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="filter cm-content-box box-primary">
				<div class="content-title SlideToolHeader">
					<div class="cpa">
						<i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
					</div>
					<div class="tools">
						<a href="javascript:void(0);" class="handle expand"><i class="fal fa-angle-down"></i></a>
					</div>
				</div>
				<div class="cm-content-body form excerpt">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<label class="form-label" for="Title">Title</label>
								<input type="text" name="Title" class="form-control mb-xl-0 mb-3" id="Title" placeholder="Title">
							</div>
							<div class="col-xl-3  col-sm-6 mb-3 mb-xl-0">
								<label class="form-label">Status</label>
								<select class="form-control default-select h-auto wide" aria-label="Default select example">
									<option selected>Select Status</option>
									<option value="1">Published</option>
									<option value="2">Draft</option>
									<option value="3">Trash</option>
									<option value="4">Private</option>
									<option value="5">Pending</option>
								</select> 
							</div>
							<div class="col-xl-3 col-sm-6">
								<label class="form-label" for="Date">Date</label>
								<div class="input-hasicon mb-xl-0 mb-3">
									<input  name="Date" id="Date" class="form-control bt-datepicker ">
									<div class="icon"><i class="far fa-calendar"></i></div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 align-self-end mb-sm-3 mb-xl-0">
								<div>
									<button class="btn btn-primary light me-1" title="Click here to Search" type="button"><i class="fa fa-filter me-1"></i>Filter</button>
									<button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-5">
				<ul class="d-flex align-items-center flex-wrap">
					<li><a href="{{ url('add-blog') }}" class="btn btn-primary ">Add Blog</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary mx-1">Blog Category</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary mt-sm-0 mt-1">Add Blog Category</a></li>
				</ul>
			</div>
			<div class="filter cm-content-box box-primary">
				<div class="content-title SlideToolHeader">
					<div class="cpa">
						<i class="fa-solid fa-file-lines me-1"></i>Blogs List
					</div>
					<div class="tools">
						<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
					</div>
				</div>
				<div class="cm-content-body form excerpt">
					<div class="card-body py-3">
						<div class="table-responsive">
							<table class="table text-nowrap">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Title</th>
										<th>Status</th>
										<th>Modified</th>
										<th class="text-end">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Title of first blog post entry</td>
										<td>Published</td>
										<td>09 Jan, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										 
									</tr>
									<tr>
										<td>2</td>
										<td>Why Go For A VFX Course?</td>
										<td>Published</td>
										<td>13 May, 20224</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>3</td>
										<td>Reasons To Choose Animation Courses</td>
										<td>Published</td>
										<td>13 Apr, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>4</td>
										<td>Blue Screen Vs. Green Screen For VFX</td>
										<td>Published</td>
										<td>13 June, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>5</td>
										<td>All About Animation</td>
										<td>Published</td>
										<td>13 Apr, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									
								</tbody>
							</table>
							<div class="d-flex align-items-center justify-content-between flex-column flex-lg-row py-3">
								<small class="mb-xl-0 mb-2">Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</small>
								<nav aria-label="Page navigation example">
								  <ul class="pagination my-2 my-md-0">
									<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
								  </ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").on('change', function() {

        readURL(this);
    });
    $('.remove-img').on('click', function() {
        var imageUrl = "images/no-img-avatar.png";
        $('.avatar-preview, #imagePreview').removeAttr('style');
        $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
    });
        if (jQuery('input[name=tagify]').length > 0) {

            // The DOM element you wish to replace with Tagify
            var input = document.querySelector('input[name=tagify]');

            // initialize Tagify on the above input node reference
            new Tagify(input);
        }
</script>
@endpush