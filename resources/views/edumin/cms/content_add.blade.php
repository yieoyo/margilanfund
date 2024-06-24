@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Content</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">CMS</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Content</a></li>
            </ol>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div>
                <a href="{{ url('content') }}" class="btn btn-primary mb-4">Content List</a>
                <button type="button" class="btn btn-primary mb-4 open">Screen Option</button>
            </div>
            <div class="main-check" style="display:none;">
                <div class="row">
                    <h6 class="mb-3">Show on screen</h6>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check mb-sm-3 mb-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                            <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-1">
                                Page Attributes
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                            <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-2">
                                Featured Image

                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
                            <label class="form-check-label mb-0" for="flexCheckDefault-3">
                                Excerpt
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
                            <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-4">
                                Custom Fields
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
                            <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-5">
                                Discussion
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
                            <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-6">
                                Slug
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
                            <label class="form-check-label mb-0" for="flexCheckDefault-7">
                                Author
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-8">
                            <label class="form-check-label mb-0" for="flexCheckDefault-8">
                                Page Type
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-9">
                            <label class="form-check-label mb-0" for="flexCheckDefault-9">
                                Seo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="card h-auto">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="Title">Title</label>
                                    <input id="Title" name="Title" type="text" class="form-control solid"
                                        placeholder="Title">
                                </div>
                            </form>
                            <label class="form-label">Description</label>
                            <div id="ckeditor"></div>
                        </div>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa">
                                Custom Fields
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body">
                                <h6>Add New Custom Field:</h6>
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label" for="Title2">Title</label>
                                                <input type="text" class="form-control" id="Title2"
                                                    name="Title2" placeholder="Title">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <label class="form-label" for="Value">Value</label>
                                        <textarea class="form-control" id="Value" name="Value" rows="2"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm mt-3 mt-sm-0">Add Custom
                                    Field</button>
                                <small class="mt-3 d-block">Custom fields can be used to extra metadata to a post that
                                    you can use in your theme.</small>
                            </div>
                        </div>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa">
                                Discussion
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Allow comments.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa"> Slug
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body">
                                <label class="form-label" for="Slug">Slug</label>
                                <input type="text" class="form-control" id="Slug" name="Slug">
                            </div>
                        </div>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa">Author

                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt">
                            <div class="card-body">
                                <label class="form-label">User</label>
                                <select class="form-control default-select h-auto wide">
                                    <option value="AL">admin@gmail.com</option>
                                    <option value="WY">India</option>
                                    <option value="WY">Information</option>
                                    <option value="WY">New Menu</option>
                                    <option value="WY">Page Menu</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa">Seo</div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand handle"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body">
                                <label class="form-label" for="Page Title">Page Title</label>
                                <input id="Page Title" name="Page Title" type="text" class="form-control mb-3"
                                    placeholder="Page title">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <label class="form-label" for="Keywords">Keywords</label>
                                        <input id="Keywords" name="Keywords" type="text"
                                            class="form-control mb-3 mb-sm-0" placeholder="Enter meta Keywords">
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <label class="form-label" for="Descriptions">Descriptions</label>
                                        <textarea id="Descriptions" name="Descriptions" class="form-control" rows="3"
                                            placeholder="Enter meta Keywords"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="right-sidebar-sticky">
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    Published
                                </div>
                                <div class="tools">
                                    <a href="javascript:void(0);" class="expand handle"><i
                                            class="fal fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div class="cm-content-body publish-content form excerpt">
                                <div class="card-body py-3">
                                    <ul class="list-style-1 block">
                                        <li>
                                            <div>
                                                <label class="form-label mb-0 me-2">
                                                    <i class="fa-solid fa-key"></i>
                                                    Status:
                                                </label>
                                                <span class="font-w500">Published</span>
                                                <a href="javascript:void(0);" class="badge badge-primary light ms-3"
                                                    id="headingOne" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-controls="collapseOne"
                                                    aria-expanded="true" role="button">Edit</a>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-bs-parent="#accordion-one">
                                                <div class=" border rounded p-3 mt-3">
                                                    <div class="mb-2">
                                                        <label class="form-label w-100">Content Type</label>
                                                        <select class="form-control default-select">
                                                            <option selected>Select Status</option>
                                                            <option value="1">Published</option>
                                                            <option value="2">Draft</option>
                                                            <option value="3">Trash</option>
                                                            <option value="4">Private</option>
                                                            <option value="5">Pending</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <label class="form-label mb-0 me-2">
                                                    <i class="fa-solid fa-eye"></i>
                                                    Visible:
                                                </label>
                                                <span class="font-w500">Public</span>
                                                <a href="javascript:void(0);" class="badge badge-primary light ms-3"
                                                    id="headingtwo" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsetwo" aria-controls="collapsetwo"
                                                    aria-expanded="true" role="button">Edit</a>
                                            </div>
                                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                                data-bs-parent="#accordion-one">
                                                <div class="p-3 mt-3 border rounded">
                                                    <div class="basic-form">
                                                        <form>
                                                            <div class="mb-3 mb-0">
                                                                <div class="radio">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Public
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault2">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault2">
                                                                            Password Protected
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="radio disabled">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault3">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault3">
                                                                            Private
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                                            aria-expanded="false" aria-controls="collapsetwo">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                                            aria-expanded="false" aria-controls="collapsetwo">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-bottom-0">
                                            <div>
                                                <label class="form-label mb-0 me-2">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    Published
                                                </label>
                                                <span class="font-w500">on :24-09-2023 16:22:52</span>
                                                <a href="javascript:void(0);" class="badge badge-primary light ms-3"
                                                    id="headingthree" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsethree" aria-controls="collapsethree"
                                                    aria-expanded="true" role="button">Edit</a>
                                            </div>
                                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                                data-bs-parent="#accordion-one">
                                                <div class="p-3 mt-3 border rounded">
                                                    <div class="input-hasicon">
                                                        <input name="datepicker" class="form-control bt-datepicker">
                                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button class="btn btn-primary btn-sm me-2" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                                            aria-expanded="false" aria-controls="collapsethree">
                                                            Ok
                                                        </button>
                                                        <button class="btn btn-danger light btn-sm" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                                            aria-expanded="false" aria-controls="collapsethree">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-top text-end py-3 ">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">Publish</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    Page Attributes
                                </div>
                                <div class="tools">
                                    <a href="javascript:void(0);" class="expand handle"><i
                                            class="fal fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div class="cm-content-body publish-content form excerpt">
                                <div class="card-body">
                                    <label class="form-label d-block">Title</label>
                                    <select class="publish-drop default-select w-100"
                                        aria-label="Default select example">
                                        <option selected>(No Parent)</option>
                                        <option value="1">Privacy Policy</option>
                                        <option value="2">Contact Us</option>
                                        <option value="3">Important Information</option>
                                        <option value="4">Free shipping</option>
                                        <option value="5">Daily Gifts</option>
                                        <option value="6">Blog</option>
                                        <option value="6">About Us</option>
                                        <option value="6">Dummy Co</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    Page Type
                                </div>
                                <div class="tools">
                                    <a href="javascript:void(0);" class="expand handle"><i
                                            class="fal fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div class="cm-content-body  publish-content form excerpt">
                                <div class="card-body">
                                    <label class="form-label d-block">Content Type</label>
                                    <select class="publish-drop default-select w-100"
                                        aria-label="Default select example">
                                        <option selected>Page</option>
                                        <option value="1">Widget</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    Featured Image
                                </div>
                                <div class="tools">
                                    <a href="javascript:void(0);" class="expand handle"><i
                                            class="fal fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div class="cm-content-body  publish-content form excerpt">
                                <div class="card-body">
                                    <div class="avatar-upload d-flex align-items-center">
                                        <div class=" position-relative ">
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url(images/no-img-avatar.png);">
                                                </div>
                                            </div>
                                            <div class="change-btn d-flex align-items-center flex-wrap">
                                                <input type='file' class="form-control d-none" id="imageUpload"
                                                    accept=".png, .jpg, .jpeg">
                                                <label for="imageUpload" class="btn btn-primary ms-0">Select
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</script>
@endpush