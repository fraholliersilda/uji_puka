@extends('layouts.app')

@section('title', 'Rreth Nesh')

@section('content')
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Rreth Nesh</h1>
            <p class="lead">Njihuni me historinë dhe misionin tonë</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('images/about-company.jpg') }}" class="img-fluid about-image" alt="Uji Puka">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Historia Jonë</h2>
                    <p>Ndërmarrja e Ujësjellësit "Uji Puka" është themeluar në vitin 1970 me qëllimin për të siguruar furnizim të qëndrueshëm me ujë të pastër për qytetin e Pukës dhe fshatrat përreth.</p>
                    <p>Ndër vite, kemi punuar vazhdimisht për përmirësimin e infrastrukturës sonë, duke zgjeruar rrjetin e ujësjellësit dhe duke modernizuar teknologjinë për trajtimin e ujit.</p>
                    <p>Sot, "Uji Puka" operon me një ekip profesionistësh të përkushtuar për të siguruar që çdo shtëpi, biznes dhe institucion në zonën tonë të ketë akses në ujë të pastër dhe cilësor.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <h3>Misioni Ynë</h3>
                    <p>Misioni i "Uji Puka" është të sigurojë furnizim të qëndrueshëm me ujë të pijshëm të cilësisë së lartë për të gjithë qytetarët dhe bizneset në zonën e Pukës, duke zbatuar standarde të larta të menaxhimit të ujit dhe duke ruajtur burimet ujore për brezat e ardhshëm.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h3>Vizioni Ynë</h3>
                    <p>Vizioni ynë është të bëhemi shembull i ekselencës në sektorin e ujësjellësit në Shqipëri, duke aplikuar teknologji moderne për trajtimin e ujit, duke ofruar shërbime cilësore dhe duke kontribuar në mirëqenien e komunitetit dhe mbrojtjen e mjedisit.</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <h3>Vlerat Tona</h3>
                    <div class="row mt-4">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-shield-alt service-icon"></i>
                                    <h5>Cilësi dhe Siguri</h5>
                                    <p>Garantojmë cilësi të lartë dhe siguri të ujit të pijshëm përmes monitorimit dhe kontrolleve të vazhdueshme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-users service-icon"></i>
                                    <h5>Përgjegjësi Sociale</h5>
                                    <p>Jemi të përkushtuar ndaj komunitetit dhe mjedisit, duke promovuar përdorimin e qëndrueshëm të ujit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-sync-alt service-icon"></i>
                                    <h5>Inovacion</h5>
                                    <p>Kërkojmë vazhdimisht të përmirësojmë shërbimet tona përmes teknologjive të reja dhe praktikave më të mira.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
