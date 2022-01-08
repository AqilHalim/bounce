@extends('layout.template')
<style>
    .site-header {
        display: none;
    }
    .footer-area {
        display: none;
    }
    .content-area-l4 {
        padding: 60px 0px !important;
    }
    a {
        text-decoration: none !important;
    }
</style>
@section('content')
<div class="content-area-l4">
    <div class="container" style="margin-left: 50px;">
        <div class="row">
            <div class="col-6">
                <div style="margin-bottom: 70px;">
                    <a href="/" class="link-primary"><i class="fas fa-arrow-left" style="padding-right: 10px;"></i>Kembali ke Halaman Utama</a>
                </div>
                <div>
                    <div class="section__heading">
                        <h2>Hubungi Kami</h2>
                    </div>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nomor Whatsapp" aria-label="Nomor Whatsapp">
                        </div>
                        <div class="col-md-6">
                            <select id="status" class="form-select">
                                <option selected>Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>FWB</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nama Bisnis" aria-label="Nama Bisnis">
                        </div>
                        <div class="col-md-6">
                            <select id="jenisBisnis" class="form-select">
                                <option selected>Jenis Bisnis</option>
                                <option>Food and Beverages</option>
                                <option>Laundry</option>
                                <option>Judi Online</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="pesan" rows="3" placeholder="Pesan"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6">
                
            </div>
        </div>
    </div>
</div>
@endsection

