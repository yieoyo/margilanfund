@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Staff Profile</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Staff Profile</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-xxl-4 col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box" style="background-image: url(images/big/img1.jpg);">
                            <div class="profile-photo">
                                <img src="{{ asset('images/profile/profile.png') }}" width="100" class="img-fluid rounded-circle"
                                    alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
                            <p class="text-white mb-0">Clerk</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span
                                    class="mb-0">Followers</span> <strong class="text-muted">1204 </strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span
                                    class="mb-0">Following</span> <strong class="text-muted">2540 </strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span
                                    class="mb-0">Friends</span> <strong class="text-muted">2540</strong></li>
                        </ul>
                        <div class="card-footer text-center border-0 mt-0">
                            <a href="javascript:void(0);" class="btn btn-primary  px-4">Follow</a>
                            <a href="javascript:void(0);" class="btn btn-warning  px-4">Message</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h2 class="card-title">about me</h2>
                        </div>
                        <div class="card-body pb-0">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Gender</strong>
                                    <span class="mb-0">Male</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Education</strong>
                                    <span class="mb-0">PHD</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Designation</strong>
                                    <span class="mb-0">Se. Professor</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Operation Done</strong>
                                    <span class="mb-0">120</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer pt-0 pb-0 text-center">
                            <div class="row">
                                <div class="col-4 pt-3 pb-3 border-end">
                                    <h3 class="mb-1 text-primary">150</h3>
                                    <span>Projects</span>
                                </div>
                                <div class="col-4 pt-3 pb-3 border-end">
                                    <h3 class="mb-1 text-primary">140</h3>
                                    <span>Uploads</span>
                                </div>
                                <div class="col-4 pt-3 pb-3">
                                    <h3 class="mb-1 text-primary">45</h3>
                                    <span>Tasks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-block">
                            <h4 class="card-title">Address </h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">Demo Address #8901 Marmora Road Chi Minh City, Vietnam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-block">
                            <h4 class="card-title">Work Expertise </h4>
                        </div>
                        <div class="card-body">
                            <h6>Photoshop
                                <span class="pull-right">85%</span>
                            </h6>
                            <div class="progress ">
                                <div class="progress-bar bg-danger progress-animated" style="width: 85%; height:6px;"
                                    role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <h6 class="mt-4">Code editor
                                <span class="pull-right">90%</span>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar bg-info progress-animated" style="width: 90%; height:6px;"
                                    role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <h6 class="mt-4">Illustrator
                                <span class="pull-right">65%</span>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar bg-success progress-animated" style="width: 65%; height:6px;"
                                    role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-xxl-8 col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab"
                                                class="nav-link  active show">Posts</a></li>
                                        <li class="nav-item"><a href="#about-me" data-bs-toggle="tab"
                                                class="nav-link">About Me</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="about-me" class="tab-pane fade">
                                            <div class="profile-about-me">
                                                <div class="pt-4 border-bottom-1 pb-4">
                                                    <p>A wonderful serenity has taken possession of my entire soul, like
                                                        these sweet mornings of spring which I enjoy with my whole
                                                        heart. I am alone, and feel the charm of existence was created
                                                        for the bliss of souls like mine.I am so happy, my dear friend,
                                                        so absorbed in the exquisite sense of mere tranquil existence,
                                                        that I neglect my talents.</p>
                                                    <p>A collection of textile samples lay spread out on the table -
                                                        Samsa was a travelling salesman - and above it there hung a
                                                        picture that he had recently cut out of an illustrated magazine
                                                        and housed in a nice, gilded frame.</p>
                                                </div>
                                            </div>
                                            <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                                <h4 class="text-primary mb-4">Skills</h4>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Admin</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Dashboard</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Photoshop</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Bootstrap</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Responsive</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-dark btn-rounded px-4 me-2 mb-2">Crypto</a>
                                            </div>
                                            <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                <h4 class="text-primary mb-4">Language</h4>
                                                <span class="badge badge-primary light">English</span>
                                                <span class="badge badge-primary light">French</span>
                                                <span class="badge badge-primary light">Bangla</span>
                                            </div>
                                            <div class="profile-personal-info">
                                                <h4 class="text-primary mb-4">Personal Information</h4>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>Mitchell
                                                            C.Shay</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6">
                                                        <span>info@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Availability <span
                                                                class="pull-right">:</span></h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>Full Time (Free
                                                            Lancer)</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>27</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Location <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>Rosemont Avenue
                                                            Melbourne,
                                                            Florida</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Year Experience <span
                                                                class="pull-right">:</span></h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>07 Year
                                                            Experiences</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="my-post-content pt-3">
                                                <div class="post-input">
                                                    <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent"
                                                        placeholder="Please type what you want...."></textarea>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary light me-1 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#linkModal"><i class="fa fa-link m-0"></i>
                                                    </a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="linkModal">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Social Links</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <a class="btn-social facebook"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-facebook-f"></i></a>
                                                                    <a class="btn-social google-plus"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-google-plus-g"></i></a>
                                                                    <a class="btn-social linkedin"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-linkedin"></i></a>
                                                                    <a class="btn-social instagram"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-instagram"></i></a>
                                                                    <a class="btn-social twitter"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-twitter"></i></a>
                                                                    <a class="btn-social youtube"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-youtube"></i></a>
                                                                    <a class="btn-social whatsapp"
                                                                        href="javascript:void(0)"><i
                                                                            class="fab fa-whatsapp"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary light me-1 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i>
                                                    </a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="cameraModal">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Upload images</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">Upload</span>
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                class="form-file-input form-control  border-s-1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#postModal">Post</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="postModal">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Post</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <textarea name="textarea" id="textarea2" cols="30" rows="5" class="form-control bg-transparent"
                                                                        placeholder="Please type what you want...."></textarea>
                                                                    <a class="btn btn-primary"
                                                                        href="javascript:void(0)">Post</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                    <img src="{{ asset('images/profile/8.jpg') }}" alt=""
                                                        class="img-fluid w-100 rounded">
                                                    <a class="post-title" href="{{ url('post-details') }}">
                                                        <h3>"Embark on a Journey of Unparalleled Excellence, Where
                                                            Innovation and Elegance Converge to Shape Tomorrow's World."
                                                        </h3>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like
                                                        these sweet morning of spare which enjoy whole heart.A wonderful
                                                        serenity has take possession of my entire soul like these sweet
                                                        morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary me-2"><span class="me-2"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#replyModal"><span class="me-2"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                                <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                    <img src="{{ asset('images/profile/9.jpg') }}" alt=""
                                                        class="img-fluid w-100 rounded">
                                                    <a class="post-title" href="{{ url('post-details') }}">
                                                        <h3>Collection of textile samples lay spread</h3>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like
                                                        these sweet morning of spare which enjoy whole heart.A wonderful
                                                        serenity has take possession of my entire soul like these sweet
                                                        morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary me-2"><span class="me-2"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#replyModal"><span class="me-2"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                                <div class="profile-uoloaded-post pb-3">
                                                    <img src="{{ asset('images/profile/10.jpg') }}" alt=""
                                                        class="img-fluid w-100 rounded">
                                                    <a class="post-title" href="{{ url('post-details') }}">
                                                        <h3>"Breakthrough Study Reveals Promising New Treatment Strategy
                                                            for Alzheimer's Disease</h3>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like
                                                        these sweet morning of spare which enjoy whole heart.A wonderful
                                                        serenity has take possession of my entire soul like these sweet
                                                        morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary me-2"><span class="me-2"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#replyModal"><span class="me-2"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="replyModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Post Reply</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <textarea class="form-control" rows="4">Message</textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Reply</button>
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