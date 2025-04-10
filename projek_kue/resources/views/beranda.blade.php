@extends('master')
@section('judul_halaman', 'BERANDA KUEKU MANAGER | Aplikasi Pengelolaan Data Kue Kering')

@section('konten')
    <h1 class="mt-4">Beranda</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Beranda</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img src="template-admin/dist/assets/img/At the office-pana.svg">
            </div>
            <div class="col-7">
                <h1 class="fw-bold">Aplikasi Pengelolaan Data Kue Kering</h1>
                <p class="text-secondary">
                    Aplikasi ini memungkinkan Anda untuk mencatat data Macam macam kue kering, termasuk kode
                    produk, nama, deskripsi produk, jumlah stok, tanggal kedaluwarsa, serta harga.
                </p>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Section-->
        <section class="py-5 mt-4">
            <h2 class="fw-bold text-center"> Macam Data Kue Kering </h2>
            <div class="container px-lg-5 mt-4">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmxTxj5V2uYIDEnIdLdNiRO1zyojYUUKuHig&s" alt="Nastar">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nastar</h5>
                                    <p class="text-secondary">Kue lembut berisi selai nanas yang manis dan sedikit asam, dengan tekstur lumer di mulut.</p>
                                    <!-- Product price-->
                                    <small class="text-secondary"> Rp 75.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm4g8Ht-fqiFtdAicpi6gioQkubQT2X8DjGw&s" alt="Kastengel">
                            <!-- Product details-->
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kastengel</h5>

                                    <p class="text-secondary">Kue keju gurih dengan aroma keju edam dan cheddar yang khas, renyah dan nikmat.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 80.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkMS9WZ7VQwRce7IDslNN8Q5JgPR5zwhpOqA&s" alt="Putri Salju">
                            <!-- Product details-->
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> Putri Salju</h5>

                                    <p class="text-secondary pb-4">Kue kering berbentuk bulan sabit, berbalut gula halus yang memberi sensasi dingin dimakan.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 60.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow" >
                            <!-- Product image-->
                            <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0Igi4DdzE9y4CzLPSmlBj_SburrPvzoWklw&s"" alt="Lidah Kucing">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Lidah Kucing</h5>

                                    <p class="text-secondary">Kue tipis dan renyah dengan rasa manis yang pas, cocok untuk teman minum teh atau kopi.</p>
                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 62.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7Srk5UKNZCNi9wroT2PCYdsc1c9sZ-BgdaA&s" alt="Kue Semprit">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kue Semprit</h5>
                                    <p class="text-secondary"> Kue berbentuk bunga dengan tekstur renyah dan rasa manis yang khas.</p>
                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 60.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ755xdUlOQxbWhbzciFaVcqIFf0SaJaiYukw&s" alt="Sagu Keju">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sagu Keju</h5>

                                    <p class="text-secondary">Kue berbahan dasar sagu dan keju yang beri tekstur renyah di luar dan lumer di dalam.</p>

                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 75.000 </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1EY83EYdjfyI5W9G88G65wM3tW7kci-Hi4Q&s" alt="Kue Kacang">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kue Kacang</h5>
                                    <p class="text-secondary">Kue kering berbahan dasar kacang tanah yang gurih dan manis, cocok untuk camilan santai.</p>
                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 55.000</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-70 shadow">
                            <!-- Product image-->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtG5DpEn1e6U_XMoDMQ13Mlx0yb-vWB06cWw&s" alt="Choco Chips Cookies">
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Choco Chips Cookies </h5>
                                    <p class="text-secondary"> wafer yang memiliki yang renyah diolah gandum dan susu</p>
                                    <!-- Product price-->
                                    <small class="text-secondary">Rp 55.000</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>


@endsection
