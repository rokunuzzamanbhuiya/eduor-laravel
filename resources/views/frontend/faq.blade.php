@extends('frontend.layout.frontend-master')

@section('title')
    <title>FAQs || Online Education Learning Laravel Template</title>
@endsection

@section('body')


    <!--=================================
                    BREADCRUMB START
                ==================================-->
    <section class="tf__breadcrumb" style="background: url({{ asset('frontend/images/breadcrumb_bg_1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>FAQs</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                    BREADCRUMB END
                ==================================-->


    <!--=========================
                    FAQ PAGE START
                ==========================-->
    <section class="tf__faq tf__faq_page pt_190 xs_pt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_10">
                        <h5>OUR EDUCATION Faq</h5>
                        <h2>District is Made of about Students Childhood.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 col-lg-9 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__faq_text">
                        <div class="tf__faq_accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item orange">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Maecenas facilisis erat id odio
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item green">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Phasellus et vehicula nulla
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item red">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Maecenas malesuada
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item blue">
                                    <h2 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree1" aria-expanded="false"
                                            aria-controls="collapseThree1">
                                            Why you join our team
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item orange">
                                    <h2 class="accordion-header" id="headingThree11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree11" aria-expanded="false"
                                            aria-controls="collapseThree11">
                                            Maecenas facilisis erat id odio
                                        </button>
                                    </h2>
                                    <div id="collapseThree11" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree11" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item green">
                                    <h2 class="accordion-header" id="headingThree12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree12" aria-expanded="false"
                                            aria-controls="collapseThree12">
                                            Phasellus et vehicula nulla
                                        </button>
                                    </h2>
                                    <div id="collapseThree12" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree12" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item blue">
                                    <h2 class="accordion-header" id="headingThree13">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree13" aria-expanded="false"
                                            aria-controls="collapseThree13">
                                            Why you join our team
                                        </button>
                                    </h2>
                                    <div id="collapseThree13" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree13" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item orange">
                                    <h2 class="accordion-header" id="headingThree14">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree14" aria-expanded="false"
                                            aria-controls="collapseThree14">
                                            Maecenas facilisis erat id odio
                                        </button>
                                    </h2>
                                    <div id="collapseThree14" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree14" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of is psum available, but the
                                                majority have suffered alteration in some we form, by injected
                                                humour.
                                                but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                    FAQ PAGE END
                ==========================-->


@endsection