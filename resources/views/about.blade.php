@extends('layouts.app')

@section('title', 'Rreth Nesh')

@section('content')
    <section class="hero text-center position-relative overflow-hidden" style="height: 40vh;">

        <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
            <img src="{{ asset('images/background.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="Uji Puka Background">
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-50 z-0"></div>

        <div class="container position-relative z-1 text-white d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="display-4 fw-bold">Rreth Nesh</h1>
            <p class="lead">Njihuni me historinë dhe misionin tonë</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container py-3">
            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="rounded overflow-hidden shadow-sm border">
                        <img src="{{ asset('images/about-company.jpg') }}" class="img-fluid " alt="Uji Puka">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h2 class="fw-bold mb-4 border-bottom border-primary pb-2">Historia Jonë</h2>
                        <p class="lead mb-3">Ndërmarrja e Ujësjellësit "Uji Puka" është themeluar në vitin 1970 me qëllimin për të siguruar furnizim të qëndrueshëm me ujë të pastër për qytetin e Pukës dhe fshatrat përreth.</p>
                        <p>Ndër vite, kemi punuar vazhdimisht për përmirësimin e infrastrukturës sonë, duke zgjeruar rrjetin e ujësjellësit dhe duke modernizuar teknologjinë për trajtimin e ujit.</p>
                        <p>Sot, "Uji Puka" operon me një ekip profesionistësh të përkushtuar për të siguruar që çdo shtëpi, biznes dhe institucion në zonën tonë të ketë akses në ujë të pastër dhe cilësor.</p>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="row mt-5 g-4">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-bullseye text-primary fs-3 me-3"></i>
                                <h3 class="mb-0 fw-bold">Misioni Ynë</h3>
                            </div>
                            <p>Misioni i "Uji Puka" është të sigurojë furnizim të qëndrueshëm me ujë të pijshëm të cilësisë së lartë për të gjithë qytetarët dhe bizneset në zonën e Pukës, duke zbatuar standarde të larta të menaxhimit të ujit dhe duke ruajtur burimet ujore për brezat e ardhshëm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-eye text-primary fs-3 me-3"></i>
                                <h3 class="mb-0 fw-bold">Vizioni Ynë</h3>
                            </div>
                            <p>Vizioni ynë është të bëhemi shembull i ekselencës në sektorin e ujësjellësit në Shqipëri, duke aplikuar teknologji moderne për trajtimin e ujit, duke ofruar shërbime cilësore dhe duke kontribuar në mirëqenien e komunitetit dhe mbrojtjen e mjedisit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="row mt-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold">Vlerat Tona</h2>
                    <div class="d-inline-block border-top border-primary pt-2 mt-2" style="width: 80px;"></div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm hover-card">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-light p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-shield-alt text-primary m-auto fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Cilësi dhe Siguri</h5>
                            <p class="mb-0">Garantojmë cilësi të lartë dhe siguri të ujit të pijshëm përmes monitorimit dhe kontrolleve të vazhdueshme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm hover-card">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-light p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-users text-primary m-auto fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Përgjegjësi Sociale</h5>
                            <p class="mb-0">Jemi të përkushtuar ndaj komunitetit dhe mjedisit, duke promovuar përdorimin e qëndrueshëm të ujit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm hover-card">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-light p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-sync-alt text-primary m-auto fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Inovacion</h5>
                            <p class="mb-0">Kërkojmë vazhdimisht të përmirësojmë shërbimet tona përmes teknologjive të reja dhe praktikave më të mira.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    </style>
@endsection
