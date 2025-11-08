<div class="header-container">
    <div class="en" id="en-fix">
        <header class="header-wrapper top-header-light">
        <nav class="navbar navbar-expand-lg">
            <div class="en container p-xl-0 p-2 "><a class="navbar-brand" href="index.html"><img
                src="{{ asset('assets/images/logo.png') }}" class="logo-icon p-lg-0 p-2" alt="Dubai Lawyers Logo" /></a> <button
                class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContentPublic" aria-controls="navbarSupportedContentPublic"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContentPublic">
                <ul class="navbar-nav me-auto mb-lg-0 mb-2 social-icon homecss">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                <li class="d-none d-xl-block position-relative dropdown">
                    <a class="nav-link dropdown-toggle" href="find-a-lawyer.html" id="findLawyerDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Find a Lawyer
                    </a>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                    class="icon-lawyer-set" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                    </svg>

                    <!-- Mega Menu -->
                    <div class="dropdown-menu mega-menu" aria-labelledby="findLawyerDropdown">
                    <div class="container-fluid">
                        <div class="row">
                        <!-- Locations Column -->
                        <div class="col-md-3">
                            <div class="mega-menu-section">
                            <ul class="list-unstyled" style="padding-top: 10px;">
                                <li><a href="#" class="mega-menu-link active"
                                    onclick="changeLocation('Dubai', this); return false;">Dubai</a></li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Abu Dhabi', this); return false;">Abu Dhabi</a></li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Sharjah', this); return false;">Sharjah</a></li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Ajman', this); return false;">Ajman</a></li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Umm Al Quwain', this); return false;">Umm Al Quwain</a></li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Ras Al Khaimah', this); return false;">Ras Al Khaimah</a>
                                </li>
                                <li><a href="#" class="mega-menu-link"
                                    onclick="changeLocation('Fujairah', this); return false;">Fujairah</a></li>
                            </ul>
                            <div class="mt-3">
                                <a href="find-a-lawyer.html" class="mega-menu-view-all">
                                <i class="fas fa-arrow-right me-2"></i>View All Lawyers
                                </a>
                            </div>
                            </div>
                        </div>

                        <!-- Practice Areas Column -->
                        <div class="col-md-9 position-relative">
                            <div class="mega-menu-section practice-areas-scrollable" style="padding-bottom: 50px;">
                            <div class="row">
                                <!-- Column 1: Banking, Business, Commercial, Inheritance -->
                                <div class="col-md-3 mb-4">
                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Banking.png" alt="Banking"
                                        class="practice-icon">
                                    <h6 class="practice-title">Banking Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Banking Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Crypto Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bankruptcy Lawyer</a>
                                    </li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Business.png" alt="Business"
                                        class="practice-icon">
                                    <h6 class="practice-title">Business Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Business Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Corporate Lawyer</a>
                                    </li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Commercial.png"
                                        alt="Commercial" class="practice-icon">
                                    <h6 class="practice-title">Commercial Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Commercial Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Construction Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Construction Accident
                                        Lawyer</a></li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Inheritance.png"
                                        alt="Inheritance" class="practice-icon">
                                    <h6 class="practice-title">Inheritance Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Business Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Corporate Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Inheritance Lawyer</a>
                                    </li>
                                    </ul>
                                </div>
                                </div>

                                <!-- Column 2: Civil Law -->
                                <div class="col-md-3 mb-4">
                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Civil.png" alt="Civil"
                                        class="practice-icon">
                                    <h6 class="practice-title">Civil Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Civil Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Car / Auto Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Motorcycle Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Truck Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bicycle Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Uber Accidents
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Personal Injury
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Injury Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Premises Liability
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Product Liability
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Medical Malpractice
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Hospital Negligence
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Brain Injury Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Disability Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Immigration Lawyer</a>
                                    </li>
                                    </ul>
                                </div>
                                </div>

                                <!-- Column 3: Family, Dispute Resolution, Islamic Finance, Maritime -->
                                <div class="col-md-3 mb-4">
                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Family.png" alt="Family"
                                        class="practice-icon">
                                    <h6 class="practice-title">Family Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Family Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Divorce Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Child Custody Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Child Support Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Marriage Lawyer</a></li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Dispute Resolution.png"
                                        alt="Dispute Resolution" class="practice-icon">
                                    <h6 class="practice-title">Dispute Resolution Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Rental Dispute
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Dispute Resolution
                                        Lawyer</a></li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Islamic Finance.png"
                                        alt="Islamic Finance" class="practice-icon">
                                    <h6 class="practice-title">Islamic Finance Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Rental Dispute
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Finance Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bankruptcy Lawyer</a>
                                    </li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Maritime.png" alt="Maritime"
                                        class="practice-icon">
                                    <h6 class="practice-title">Maritime Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Maritime Lawyer</a></li>
                                    </ul>
                                </div>
                                </div>

                                <!-- Column 4: Employment, Real Estate, Criminal, Intellectual Property -->
                                <div class="col-md-3 mb-4">
                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Employment.png"
                                        alt="Employment" class="practice-icon">
                                    <h6 class="practice-title">Employment Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Employment Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Labour Lawyer</a></li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Real Estate.png"
                                        alt="Real Estate" class="practice-icon">
                                    <h6 class="practice-title">Real Estate Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Real Estate Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Property Lawyer</a></li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Criminal.png" alt="Criminal"
                                        class="practice-icon">
                                    <h6 class="practice-title">Criminal Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Criminal Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Corporate Lawyer</a>
                                    </li>
                                    </ul>
                                </div>

                                <div class="practice-area">
                                    <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Intellectual Property.png"
                                        alt="Intellectual Property" class="practice-icon">
                                    <h6 class="practice-title">Intellectual Property Law</h6>
                                    </div>
                                    <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Intellectual Property
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Patent Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Entertainment Lawyer</a>
                                    </li>
                                    </ul>
                                </div>
                                </div>

                            </div>
                            </div>

                            <!-- View All Button - Fixed at Bottom -->
                            <div class="position-absolute bottom-0 end-0 p-3"
                            style="background-color: white; z-index: 10; bottom: 100px; right: 24px;">
                            <a href="find-a-lawyer.html" class="view-all-dubai-lawyers"
                                style="color: var(--light-teal); text-decoration: none; font-weight: 500;">
                                <span id="viewAllLawyersTextBottom">View All Lawyers in Dubai</span>
                                <span
                                style="display: inline-block; width: 24px; height: 24px; background-color: var(--light-teal); border-radius: 50%; margin-left: 8px; text-align: center; line-height: 24px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                    fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="vertical-align: middle;">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                                </span>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>
                </ul>

                <!-- Mobile Accordion for Find a Lawyer -->
                <div class="accordion-mobile-section d-xl-none mt-2">
                <div class="accordion" id="accordionFindLawyer">
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <a href="find-a-lawyer.html" class="text-decoration-none text-dark">
                            Find a Lawyer
                        </a>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFindLawyer">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header d-flex justify-content-between  align-items-center ">
                            <button id="moveIconeMenu" class="accordion-button megamenu set-pad-left-menu  "
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                aria-expanded="true" aria-controls="collapseOne1"
                                style="color: var(--text-gray)"><span>Dubai</span></button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu">
                                <div>
                                    <div class="d-flex g-5 align-items-center ">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Banking.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Banking Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Banking
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Crypto
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bankruptcy
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Business.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class="p-0 ">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Business Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Business
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Commercial.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Commercial Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Commercial
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Construction
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Construction
                                        Accident Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Inheritance.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Inheritance Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Business
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Inheritance
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Civil.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Civil Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Civil
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Car
                                        / Auto Accident Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Motorcycle
                                        Accident Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Truck
                                        Accident Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bicycle
                                        Accident Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Uber
                                        Accidents Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Personal
                                        Injury Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Injury
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Premises
                                        Liability Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Product
                                        Liability Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Medical
                                        Malpractice Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Hospital
                                        Negligence Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Brain
                                        Injury Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Disability
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Immigration
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Family.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Family Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Family
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Divorce
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Child
                                        Custody Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Child
                                        Support Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Marriage
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Dispute Resolution.png"
                                        alt="Banking" style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Dispute Resolution Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Rental
                                        Dispute Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Dispute
                                        Resolution Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Islamic Finance.png"
                                        alt="Banking" style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Islamic Finance Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Rental
                                        Dispute Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Finance
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bankruptcy
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Maritime.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0"><a href="maritime.html">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                            Maritime Law</h6>
                                        </a></div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Maritime
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Employment.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Employment Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Employment
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Labour
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Real Estate.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Real Estate Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Real
                                        Estate Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Property
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Criminal.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Criminal Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Criminal
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Intellectual Property.png"
                                        alt="Banking" style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Intellectual Property Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Intellectual
                                        Property Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Patent
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Entertainment
                                        Lawyer</a></li>
                                </div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseAbuDhabi" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionFindLawyer">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseAbuDhabi1" aria-expanded="true"
                                aria-controls="collapseAbuDhabi1" style="color: var(--text-gray)"><span>Abu
                                Dhabi</span></button></h2>
                            <div id="collapseAbuDhabi1" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu abudhabi">
                                <div>
                                    <div class="d-flex g-5 align-items-center ">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Criminal.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Criminal Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Criminal
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Civil.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Civil Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Immigration
                                        Lawyer</a></li>
                                </div>
                                <div>
                                    <div class="d-flex g-4 align-items-center">
                                    <div class=" p-0 text-center"><img
                                        src="https://connectlegal.ae/images/legal-service/Family.png" alt="Banking"
                                        style="width:25px;vertical-align:baseline" />
                                    </div>
                                    <div class=" p-0">
                                        <h6 style="color: var(--text-dark);font-weight:700">
                                        Family Law</h6>
                                    </div>
                                    </div>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Family
                                        Lawyer</a></li>
                                    <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Divorce
                                        Lawyer</a></li>
                                </div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true"
                                aria-controls="collapseOne3" style="color: var(--text-gray)"><span>Sharjah</span></button>
                            </h2>
                            <div id="collapseOne3" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu sharjah">
                                <div></div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true"
                                aria-controls="collapseOne4" style="color: var(--text-gray)"><span>Ajman</span></button>
                            </h2>
                            <div id="collapseOne4" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu sharjah">
                                <div></div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="true"
                                aria-controls="collapseOne5" style="color: var(--text-gray)"><span>Umm Al
                                Quwain</span></button></h2>
                            <div id="collapseOne5" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu sharjah">
                                <div></div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true"
                                aria-controls="collapseOne6" style="color: var(--text-gray)"><span>Ras Al
                                Khaimah</span></button></h2>
                            <div id="collapseOne6" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu sharjah">
                                <div></div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header "><button id="moveIconeMenu"
                                class="accordion-button megamenu set-pad-left-menu  " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne7" aria-expanded="true"
                                aria-controls="collapseOne7"
                                style="color: var(--text-gray)"><span>Fujairah</span></button>
                            </h2>
                            <div id="collapseOne7" class="accordion-collapse collapse megaMenuactiveCollapse "
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <ul class="list-mega set-scrol-menu sharjah">
                                <div></div>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseTwoViewAll" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFindLawyer">
                        <div class="accordion-body">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><a
                                class="pop-head-set d-flex justify-content-between align-items-center set-pad-left-menu"
                                href="find-a-lawyer.html"><span style="color: var(--accent-purple);font-weight:600">View
                                All Lawyers</span><span class="dropdown-arrow1" style="padding-right:50px"></span></a>
                            </h2>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                <li class="d-none d-xl-block position-relative dropdown">
                    <a class="nav-link dropdown-toggle" href="legal-services/banking.html" id="practiceAreasDropdown"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Practice Areas
                    </a>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                    class="icon-lawyer-set" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                    </svg>

                    <!-- Practice Areas Mega Menu -->
                    <div class="dropdown-menu mega-menu practice-areas-mega-menu" aria-labelledby="practiceAreasDropdown">
                    <div class="container-fluid">
                        <div class="row">
                        <!-- Full Width - Detailed Law Types (Scrollable) -->
                        <div class="col-12">
                            <div class="practice-areas-details scrollable-content">
                            <!-- Column 1: Banking, Business, Commercial, Inheritance -->
                            <div class="practice-details-column">
                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Banking.png" alt="Banking"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/banking.html">Banking Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Banking Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Crypto Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bankruptcy Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Business.png" alt="Business"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/business.html">Business Law</a>
                                    </h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Business Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Corporate Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Commercial.png"
                                    alt="Commercial" class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/commercial.html">Commercial Law</a>
                                    </h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Commercial Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Construction Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Construction Accident
                                        Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Inheritance.png"
                                    alt="Inheritance" class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/inheritance.html">Inheritance
                                        Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Inheritance Lawyer</a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                            <!-- Column 2: Civil Law -->
                            <div class="practice-details-column">
                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Civil.png" alt="Civil"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/civil.html">Civil Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Civil Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Car / Auto Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Motorcycle Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Truck Accident Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bicycle Accident
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Uber Accidents Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Personal Injury Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Injury Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Premises Liability
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Product Liability
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Medical Malpractice
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Hospital Negligence
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Brain Injury Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Disability Lawyer</a></li>
                                </ul>
                                </div>
                            </div>

                            <!-- Column 3: Family Law, Dispute Resolution, Islamic Finance, Maritime -->
                            <div class="practice-details-column">
                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Family.png" alt="Family"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/family.html">Family Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Family Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Divorce Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Child Custody Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Child Support Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Marriage Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Dispute Resolution.png"
                                    alt="Dispute Resolution" class="practice-icon">
                                    <h6 class="practice-title"><a
                                        href="legal-services/business,real-estate,dispute-resolution.html">Dispute
                                        Resolution Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Rental Dispute Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Dispute Resolution
                                        Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Islamic Finance.png"
                                    alt="Islamic Finance" class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/islamic-finance.html">Islamic
                                        Finance Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Finance Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Bankruptcy Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Maritime.png" alt="Maritime"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="maritime.html">Maritime Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Maritime Lawyer</a></li>
                                </ul>
                                </div>
                            </div>

                            <!-- Column 4: Employment, Real Estate, Criminal, Intellectual Property -->
                            <div class="practice-details-column">
                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Employment.png"
                                    alt="Employment" class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/employment.html">Employment Law</a>
                                    </h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Employment Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Labour Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Real Estate.png"
                                    alt="Real Estate" class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/real-estate.html">Real Estate
                                        Law</a></h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Real Estate Lawyer</a>
                                    </li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Property Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Criminal.png" alt="Criminal"
                                    class="practice-icon">
                                    <h6 class="practice-title"><a href="legal-services/criminal.html">Criminal Law</a>
                                    </h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Criminal Lawyer</a></li>
                                </ul>
                                </div>

                                <div class="practice-area">
                                <div class="practice-area-header">
                                    <img src="https://connectlegal.ae/images/legal-service/Intellectual Property.png"
                                    alt="Intellectual Property" class="practice-icon">
                                    <h6 class="practice-title"><a
                                        href="legal-services/intellectual-property.html">Intellectual Property Law</a>
                                    </h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Intellectual Property
                                        Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Patent Lawyer</a></li>
                                    <li><a href="banking-lawyer-uae.html" class="practice-link">Entertainment Lawyer</a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                </ul>

                <!-- Mobile Accordion for Practice Areas -->
                <div class="accordion-mobile-section d-xl-none mt-2">
                <div class="accordion" id="accordionPracticeAreas">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingtwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        <a href="legal-services/banking.html" class="text-decoration-none text-dark">
                            Practice Areas
                        </a>
                        </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse"
                        data-bs-parent="#accordionPracticeAreas">
                        <div class="accordion-body">
                        <ul class="list-mega set-scrol-menu">
                            <div>
                            <div class="d-flex g-5 align-items-center ">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Banking.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/banking.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Banking Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Banking
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Crypto
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bankruptcy
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Business.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class="p-0 "><a href="legal-services/business.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Business Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Business
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Commercial.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/commercial.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Commercial Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Commercial
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Construction
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Construction
                                Accident Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Inheritance.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/inheritance.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Inheritance Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Business
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Inheritance
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Civil.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/civil.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Civil Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Civil Lawyer</a>
                            </li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Car / Auto
                                Accident Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Motorcycle
                                Accident Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Truck
                                Accident Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bicycle
                                Accident Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Uber
                                Accidents Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Personal
                                Injury Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Injury
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Premises
                                Liability Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Product
                                Liability Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Medical
                                Malpractice Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Hospital
                                Negligence Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Brain
                                Injury Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Disability
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Immigration
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Family.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/family.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Family Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Family
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Divorce
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Child
                                Custody Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Child Support
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Marriage
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Dispute Resolution.png"
                                    alt="Banking" style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="banking-lawyer-uae.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Dispute Resolution Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Rental
                                Dispute Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Dispute
                                Resolution Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Islamic Finance.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/islamic-finance.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Islamic Finance Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Rental
                                Dispute Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Finance
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Bankruptcy
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Maritime.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="#">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Maritime Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Maritime
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Employment.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/employment.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Employment Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Employment
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Labour
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Real Estate.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/real-estate.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Real Estate Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Real Estate
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Property
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Criminal.png" alt="Banking"
                                    style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/criminal.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Criminal Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Criminal
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Corporate
                                Lawyer</a></li>
                            </div>
                            <div>
                            <div class="d-flex g-4 align-items-center">
                                <div class=" p-0 text-center"><img
                                    src="https://connectlegal.ae/images/legal-service/Intellectual Property.png"
                                    alt="Banking" style="width:25px;vertical-align:baseline" />
                                </div>
                                <div class=" p-0"><a href="legal-services/intellectual-property.html">
                                    <h6 style="color:rgba(9, 63, 56, 1);font-weight:700">
                                    Intellectual Property Law</h6>
                                </a></div>
                            </div>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Intellectual
                                Property Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Patent
                                Lawyer</a></li>
                            <li><a class="set-color-sub-menus" href="banking-lawyer-uae.html">Entertainment
                                Lawyer</a></li>
                            </div>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                <li class="nav-item"><a class="nav-link null" href="legal-forum.html">Legal
                    Forum</a></li>
                <li class="nav-item"><a class="nav-link null" href="firms.html">Law Firms</a></li>
                <li class="nav-item"><a class="nav-link null" href="blogs.html">Insights</a></li>
                <li class="nav-item"><a class="nav-link null" href="about-us.html">About</a></li>
                <li class="nav-item"><a class="nav-link null" href="contact-us.html">Contact</a>
                </li>
                <li class=" nav-item d-block d-xl-none position-relative mobile-drop-lag"><span class="set-mob">
                    <div class="withoutlogin en locale-class">
                        <div class="en current-lang" style="cursor:pointer"><img
                            src="../cdn2.iconfinder.com/data/icons/world-flag-icons/128/212055.png" class="lang-flag" />
                        <p class="lang-text d-block d-xl-none lnguaue-style">English</p>
                        </div>
                        <div class="lang-dropdown">
                        <a href="#" class="lang-option" data-lang="en"><img class="lang-icon"
                            src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/gb.svg"
                            alt="English">English</a>
                        <a href="#" class="lang-option" data-lang="ar"><img class="lang-icon"
                            src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/ae.svg" alt="Arabic">Arabic</a>
                        </div>
                    </div>
                    </span></li>
                </ul>
                <div class="">
                <form class="d-xl-flex btn-header p-2 position-relative align-items-center" role="search"><a
                    class="en btn btn-outline-success btn-lawyer hide-btn w-100 text-center set-bt" type="submit"
                    href="for-lawyers.html">For Lawyers</a><a class="btn btn-outline-success btn-login mt-xl-0 mt-2"
                    href="auth/login.html">Login</a>
                    <div class="d-none d-xl-block "><span class="">
                        <div class="withoutlogin en locale-class">
                        <div class="en current-lang" style="cursor:pointer"><img
                            src="../cdn2.iconfinder.com/data/icons/world-flag-icons/128/212055.png" class="lang-flag" />
                            <p class="lang-text d-block d-xl-none lnguaue-style">English</p>
                        </div>
                        <div class="lang-dropdown">
                            <a href="#" class="lang-option" data-lang="en"><img class="lang-icon"
                                src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/gb.svg"
                                alt="English">English</a>
                            <a href="#" class="lang-option" data-lang="ar"><img class="lang-icon"
                                src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/ae.svg"
                                alt="Arabic">Arabic</a>
                        </div>
                        </div>
                    </span></div>
                </form>
                </div>
            </div>
            </div>
        </nav>
        <div class="desktop-view d-none d-xl-block"></div>
        <div class="desktop-view d-none d-xl-block"></div>
        </header>
    </div>
</div>