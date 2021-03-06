@extends('layout.template')

@section('content')
    <!-- Content Area 1  -->
    <div class="hero-area hero--area-curve text-center bg-position  position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                    <div class="hero-area-content">
                        <div class="hero-area__title">
                            <h2 class="text-black">Tidak Perlu Lagi Mencatat
                                Inventori Secara Manual
                            </h2>
                        </div>
                        <div class="hero-area__btn">
                            <button class="btn btn--lg focus-reset text-white" style="background-color: #443DF6">Mulai
                                dengan Bounce</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Area 2  -->
    <div class="content-area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                    <div class="dashboard-image">
                        <img class="w-100" src="{{ asset('template') }}/image/landing-5/Dasboard.png"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Area 3 -->
    <div class="feature-area-l8-1" style="margin-bottom: 70px;">
        <div class="container">
            <div class="row feature-area-l8-1__total-item">
                <div class="col-lg-12 col-sm-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist" style="border-radius: 25px; background: #FBFBFB; padding: 5px">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-management-tab" data-bs-toggle="pill" data-bs-target="#pills-management" type="button" role="tab" aria-controls="pills-management" aria-selected="false">Management Karyawan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-table-tab" data-bs-toggle="pill" data-bs-target="#pills-table" type="button" role="tab" aria-controls="pills-table" aria-selected="false">Table Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-split-tab" data-bs-toggle="pill" data-bs-target="#pills-split" type="button" role="tab" aria-controls="pills-split" aria-selected="false">Split Bill</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-inventory-tab" data-bs-toggle="pill" data-bs-target="#pills-inventory" type="button" role="tab" aria-controls="pills-inventory" aria-selected="false">Inventory</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-diskon-tab" data-bs-toggle="pill" data-bs-target="#pills-diskon" type="button" role="tab" aria-controls="pills-diskon" aria-selected="false">Diskon & Pajak</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Selesaikan Transaksi Hanya
                                                        Dengan 3x Tap
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Terima Berbagai Jenis
                                                        Pesanan Dine-In, Delivery,
                                                        dan Take Away
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                        <div class="tab-pane fade" id="pills-management" role="tabpanel" aria-labelledby="pills-management-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Data Sensitif Aman Dengan
                                                        PIN Khusus
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Sistem Absensi yang
                                                        Terintegrasi
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                        <div class="tab-pane fade" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Data Akurat Status Meja
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Penyajian Pesanan Akurat
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                        <div class="tab-pane fade" id="pills-split" role="tabpanel" aria-labelledby="pills-split-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Tingkatkan Kepuasan
                                                        Pelanggan dengan Transaksi
                                                        yang Mudah
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Gunakan Berbagai Metode
                                                        Pembayaran
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                        <div class="tab-pane fade" id="pills-inventory" role="tabpanel" aria-labelledby="pills-inventory-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Input Resep Makanan
                                                        dan Minuman
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Tracking Bahan Baku
                                                        Otomatis
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                        <div class="tab-pane fade" id="pills-diskon" role="tabpanel" aria-labelledby="pills-diskon-tab">
                            <!-- Content Area Nav Tab -->
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Hitung Biaya Pajak dan
                                                        Service Tanpa Ribet
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area-2">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800"
                                            data-aos-once="true">
                                            <div class="content-image-group-1">
                                                <div class="image__1">
                                                    <img class="w-100" src="{{ asset('template') }}/image/landing-1/chart-img-1.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content">
                                                <div class="section__heading">
                                                    <h3>Berikan Diskon Otomatis
                                                    </h3>
                                                    <p>Aplikasi POS yang telah dikembangkan untuk memberikan kemudahan pada proses setup serta tampilan yang 
                                                        mudah dipelajari oleh semua pengguna
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Content Area Nav Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
