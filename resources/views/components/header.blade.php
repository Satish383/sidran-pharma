<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidran Pharma</title>

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/sidran_logo_2.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    {{-- -----------------------------Animation------------------------------------ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row ">
                        <div id="contact_elements" class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>Info@sidranpharma.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i>+91 70416 - 26655</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="socail_media" class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img class="w-50" src="{{ asset('assets/img/sidran_logo_2.png') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">home</a></li>
                                        {{-- <li><a href="Department.html">services</a></li> --}}
                                        <li><a href="/services">services</a>
                                            <ul class="submenu" id="submenu_list_item">
                                                <li><a href="/CQV_support">CQV support</a></li>
                                                <li><a href="/CSV_validation">CSV Validation</a></li>
                                                <li><a href="/regulatory">Regulatory Affairs</a></li>
                                                <li><a href="/MES_support">MES Support</a></li>
                                                <li><a href="/auotmation_service">Automation Services</a></li>
                                                <li><a href="/process&lab">Process & Lab Equipment</a></li>
                                                <li><a href="/pharma_compliance">Pharma Compliance</a></li>
                                                <li><a href="/training_section_sop">Training Section For Pharma
                                                        Compliance & SOP Training</a></li>
                                                <li><a href="/equipment_qualification">Equipment Qualification</a></li>
                                                <li><a href="/SAP_validation">SAP Validation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/training">Training</a>
                                            <ul class="submenu" id="submenu_list_item_1">
                                                <li><a href="/QA&Regulatory">QA & Regulatory Affairs</a></li>
                                                <li><a href="/computer_system">Computer System Validation</a></li>
                                                <li><a href="/manufacturing_production">Manufacturing & Production
                                                        Operation</a></li>
                                                <li><a href="/QMS_training">Training On QMS</a>
                                                    <ul class="submenu" id="submenu_list_item_3">
                                                        <li><a href="/OOS_training">Out Of Specification(OOS)</a></li>
                                                        <li><a href="/OOT_training">Out Of Trend(OOT)</a></li>
                                                        <li><a href="/investigation_training">Investigation</a></li>
                                                        <li><a href="/complaints_training">Complaints</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/audit_complaince">Audit & Complaince</a></li>
                                                <li><a href="/CSV_training">CSV</a></li>
                                                <li><a href="/clean_validation">Cleaning Validation</a></li>
                                                <li><a href="/qualification_part">Qualification Part</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/why_us">Why Us ?</a></li>
                                        <li><a href="/consulting">Consulting</a>
                                            <ul class="submenu" id="submenu_list_item_2">
                                                <li><a href="/compliance_pharma">Compliance Pharma</a></li>
                                                <li><a href="/CSV_validation_compliance">CSV Validation &
                                                        Compliance</a></li>
                                                <li><a href="/remediation_plan">Remediation Plan</a></li>
                                                <li><a href="/gap_assisment">Gap Assessment</a></li>
                                                <li><a href="/risk_assessment">Plan Risk Assessment</a></li>
                                                <li><a href="QMS_software">QMS Software</a></li>
                                                <li><a href="/enterprises">Enterprises</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/about">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="" href="/contact">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
