
@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Accordion</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <!-- Row starts -->
    <div class="row">
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Default Accordion</h4>
                    <p class="m-0 subtitle">Default accordion. Add <code>accordion</code> class in root</p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-primary" id="accordion-one">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#default-collapseOne" aria-expanded="true"
                                    aria-controls="default-collapseOne">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="default-collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-one">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#default-collapseTwo" aria-expanded="false"
                                    aria-controls="default-collapseTwo">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="default-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-one">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#default-collapseThree" aria-expanded="false">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="default-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-one">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion bordered</h4>
                    <p class="m-0 subtitle">Accordion with border. Add class <code>accordion-bordered</code> with the
                        class <code> accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-danger-solid" id="accordion-two">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bordered_collapseOne">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="bordered_collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-two">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bordered_collapseTwo">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="bordered_collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-two">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bordered_collapseThree">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="bordered_collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-two">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion without space</h4>
                    <p class="m-0 subtitle">Add <code>accordion-no-gutter</code> class with <code>accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-no-gutter accordion-header-bg" id="accordion-three">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#no-gutter-collapseOne">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="no-gutter-collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-three">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#no-gutter-collapseTwo">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="no-gutter-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-three">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#no-gutter-collapseThree">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="no-gutter-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-three">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion without space with border</h4>
                    <p class="m-0 subtitle">Add <code>accordion-no-gutter accordion-bordered</code> class with
                        <code>accordion</code></p>
                </div>
                <div class="card-body">

                    <div class="accordion accordion-no-gutter accordion-bordered" id="accordion-four">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne8">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne8">

                                    <span class="accordion-header-text">Accordion Header One</span>
                                </button>
                            </h2>
                            <div id="collapseOne8" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne8" data-bs-parent="#accordion-four">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo8">

                                    <span class="accordion-header-text">Accordion Header Two</span>
                                </button>
                            </h2>
                            <div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo8"
                                data-bs-parent="#accordion-four">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree8">

                                    <span class="accordion-header-text">Accordion Header Three</span>
                                </button>
                            </h2>
                            <div id="collapseThree8" class="accordion-collapse collapse"
                                aria-labelledby="headingThree7" data-bs-parent="#accordion-four">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion indicator in left position</h4>
                    <p class="m-0 subtitle">Add <code>accordion-left-indicator</code> class with <code>accordion</code>
                    </p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-left-indicator" id="accordion-five">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne7">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne7">

                                    <span class="accordion-header-text">Accordion Header One</span>
                                </button>
                            </h2>
                            <div id="collapseOne7" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne7" data-bs-parent="#accordion-five">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo7">

                                    <span class="accordion-header-text">Accordion Header Two</span>
                                </button>
                            </h2>
                            <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7"
                                data-bs-parent="#accordion-five">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree7">

                                    <span class="accordion-header-text">Accordion Header Three</span>
                                </button>
                            </h2>
                            <div id="collapseThree7" class="accordion-collapse collapse"
                                aria-labelledby="headingThree7" data-bs-parent="#accordion-five">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion with icon</h4>
                    <p class="m-0 subtitle">Add <code>accordion-with-icon</code> class with <code>accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-with-icon" id="accordion-six">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne6">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne6">
                                    <span class="accordion-header-icon"></span>
                                    <span class="accordion-header-text">Accordion Header One</span>
                                </button>
                            </h2>
                            <div id="collapseOne6" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne6" data-bs-parent="#accordion-six">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo6">
                                    <span class="accordion-header-icon"></span>
                                    <span class="accordion-header-text">Accordion Header Two</span>
                                </button>
                            </h2>
                            <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6"
                                data-bs-parent="#accordion-six">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree6">
                                    <span class="accordion-header-icon"></span>
                                    <span class="accordion-header-text">Accordion Header Three</span>
                                </button>
                            </h2>
                            <div id="collapseThree6" class="accordion-collapse collapse"
                                aria-labelledby="headingThree6" data-bs-parent="#accordion-six">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion header background</h4>
                    <p class="m-0 subtitle">Add <code>accordion-header-bg</code> class with <code>accrodion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-header-bg accordion-bordered" id="accordion-seven">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1" aria-expanded="true">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne1" data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo1" aria-expanded="false">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                                data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree1">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree1" class="accordion-collapse collapse"
                                aria-labelledby="headingThree1" data-bs-parent="#accordion-seven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion solid background</h4>
                    <p class="m-0 subtitle">Add class <code>accordion-solid-bg</code> with <code>accordion</code></p>
                </div>
                <div class="card-body">

                    <div class="accordion accordion-solid-bg" id="accordion-eight">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordion-eight">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion-eight">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordion-eight">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion active background</h4>
                    <p class="m-0 subtitle">Add class <code>accordion-active-header</code> with <code>accordion</code>
                    </p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-active-header" id="accordion-nine">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne2">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne2" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne2" data-bs-parent="#accordion-nine">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo2">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                                data-bs-parent="#accordion-nine">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree2">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree2" class="accordion-collapse collapse"
                                aria-labelledby="headingThree2" data-bs-parent="#accordion-nine">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card transparent-card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion header shadow</h4>
                    <p class="m-0 subtitle">Add <code>accordion-header-shadow</code> and <code>accordion-rounded</code>
                        class with <code>accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-header-shadow accordion-rounded" id="accordion-ten">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne3">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne3" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne3" data-bs-parent="#accordion-ten">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo3">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3"
                                data-bs-parent="#accordion-ten">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree3">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree3" class="accordion-collapse collapse"
                                aria-labelledby="headingThree3" data-bs-parent="#accordion-ten">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion rounded stylish</h4>
                    <p class="m-0 subtitle">Add <code>accordion-rounded-stylish</code> class with
                        <code>accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-rounded-stylish accordion-bordered" id="accordion-eleven">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne4">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne4">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne4" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne4" data-bs-parent="#accordion-eleven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo4">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4"
                                data-bs-parent="#accordion-eleven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse"
                                aria-labelledby="headingThree4" data-bs-parent="#accordion-eleven">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Accordion gradient</h4>
                    <p class="m-0 subtitle">Add <code>accordion-gradient</code> class with <code>accordion</code></p>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-rounded-stylish accordion-gradient" id="accordion-twelve">
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingOne5">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne5">
                                    Accordion Header One
                                </button>
                            </h2>
                            <div id="collapseOne5" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne5" data-bs-parent="#accordion-twelve">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-info" id="headingTwo5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo5">
                                    Accordion Header Two
                                </button>
                            </h2>
                            <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5"
                                data-bs-parent="#accordion-twelve">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header accordion-header-primary" id="headingThree5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree5">
                                    Accordion Header Three
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse"
                                aria-labelledby="headingThree5" data-bs-parent="#accordion-twelve">
                                <div class="accordion-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
    </div>
    <!-- Row ends -->
</div>
@endsection