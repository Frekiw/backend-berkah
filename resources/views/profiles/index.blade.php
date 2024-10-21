<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dapatkan solusi tepat guna untuk mencapai kesuksesan yang lebih tinggi">
    <meta name="keywords" content="Solusi Bisnis Konsultasi Profesional Strategi Bisnis Optimalisasi Kinerja Pertumbuhan Usaha Pengembangan Bisnis Manajemen Efektif Ahli Konsultasi">
    <meta property="og:image" content="https://berkahsuryagroup.id/images/logo.png">
    <title>Berkah Surya</title>
    <link rel="icon" href="{{ asset('home/images/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Link ke stylesheet Slick Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- Link ke stylesheet Slick Slider theme (opsional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">


    <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">
</head>
<body>
    <section class="home-section position-relative">
        <div class="">
            <div class="d-flex justify-content-between align-items-center pb-5">
                <div class="col-md-2 py-3">
                    <a href="/" class="rounded-circle d-flex justify-content-center align-items-center logo">
                        <div class="d-flex justify-content-center align-items-center" style="width: 101px; height: 76px; margin-bottom: 15px;">
                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('home/images/logo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-8 menu">
                    <div class="row ms-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="/" class="text-white fs-1">
                                <i class="fas fa-home"></i>
                            </a>
                            <div class="ms-4 d-flex align-items-center justify-content-center rounded-4 p-3 bg-danger w-100">
                                <div class="d-flex align-items-center justify-content-between col">
                                    <a class="mx-auto fw-bold" href="{{route('theprofiles.index')}}" style="text-decoration: none; color: white;">Profile</a>
                                    <div class="dropdown mx-auto">
                                        <a class="dropdown-toggle" href="#" role="button" id="ourServiceDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color: white;">
                                            Our Service
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="ourServiceDropdown">
                                            <li><a class="dropdown-item" href="{{ route('residentials.index') }}">Residential Home Construction</a></li>
                                            <li><a class="dropdown-item" href="{{ route('mechanicals.index') }}">Mechanical Installation</a></li>
                                            <li><a class="dropdown-item" href="{{ route('spaceplannings.index') }}">Space Planning 3</a></li>
                                            <li><a class="dropdown-item" href="{{ route('maintenancerepairs.index') }}">Maintenance and Repair</a></li>
                                            <li><a class="dropdown-item" href="{{ route('electricals.index') }}">Electrical Installations for Residential Homes and Buildings</a></li>
                                        </ul>
                                    </div>
                
                                    <a class="mx-auto" href="{{ route('theportofolios.index') }}" style="text-decoration: none; color: white;">The Portofolio</a>
                                    <a class="mx-auto" href="{{ route('css.index') }}" style="text-decoration: none; color: white;">Contact Us</a>
                                    <div>
                                        @foreach ($contact as $contacts)
                                            <a href="https://wa.me/{{ $contacts->whatsapp }}" class="btn btn-light py-0 px-4 mx-auto">Customer Service</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-md-2"></div>
            </div>
            <div class="col-md-12 py-5">
                <div class="d-flex justify-content-center align-items-center ">
                    <h1 class="text-center th1"> “The house has to please everyone,<br> 
                        contrary to the work of art which<br>
                        does not. The work is a private<br>
                        matter for the artist. The house is not.”</h1>
                    <div class="position-absolute" style="left: 44vh; top: 28vh;">
                        <div class="ohoh" style="width: 200px; height: 100px;">
                            <img src="{{ asset('home/images/ohoh.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5 py-5">
                <div class="position-absolute bottom-0">
                    <div class="row">
                        <div class="d-flex justify-content-center align-items-center mx-auto ">
                            @foreach ($contact as $contacts)
                                <a href="https://www.facebook.com/{{ $contacts->facebook }}" class="btn btn-danger rounded-circle  d-flex justify-content-center align-items-center mx-auto  p-0">
                                    <i class="fab fa-facebook fs-3"></i>
                                </a>
                                <a href="https://x.com/{{ $contacts->twitter }}" class="btn btn-danger rounded-circle  d-flex justify-content-center align-items-center mx-4 p-0">
                                    <i class="fab fa-twitter fs-3"></i>
                                </>
                                <a href="https://www.instagram.com/{{ $contacts->instagram }}" class="btn btn-danger rounded-circle  d-flex justify-content-center align-items-center mx-auto p-0">
                                    <i class="fab fa-instagram fs-3"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="py-3"></div>
                </div>
            </div>
        </div>
        <div class="butt">
            <a class="d-flex justify-content-center align-items-center z-3 btn-primary position-absolute top-0 end-0 fs-1 m-4 rounded-circle text-white btn-danger text-decoration-none" style="cursor: pointer; width: 30px; height: 30px;" id="btn-menu">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
        <div id="menuhape" class="position-fixed top-0 w-65 h-100" style="z-index: 10; right: -75%; ">
            <div class="col-12 h-100 bg-danger d-flex flex-column" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                <div class="d-flex justify-content-end align-items-center">
                    <a class="d-flex justify-content-center align-items-center z-3 btn-primary position-absolute top-0 end-0 fs-1 m-4 rounded-circle text-white btn-danger text-decoration-none" style="cursor: pointer; width: 30px; height: 30px;" id="btn-close">
                        <i class="fas fa-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="/" class="logoside p-5">
                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('home/images/logoputih.png') }}" alt="">
                    </a>
                </div>
                <a href="{{route('theprofiles.index')}}" class="text-light my-2 text-decoration-none fw-bold ps-4"><h4>Profil</h4></a>
                <div class="ms-4">
                    <div class="dropdown mx-auto ">
                        <a class="dropdown-toggle" href="#" role="button" id="ourServiceDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color: white; font-weight: bold;">
                            <h4>Our Service</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ourServiceDropdown">
                            <li><a class="dropdown-item" href="{{ route('residentials.index') }}">Residential Home Construction</a></li>
                            <li><a class="dropdown-item" href="{{ route('mechanicals.index') }}">Mechanical Installation</a></li>
                            <li><a class="dropdown-item" href="{{ route('spaceplannings.index') }}">Space Planning 3</a></li>
                            <li><a class="dropdown-item" href="{{ route('maintenancerepairs.index') }}">Maintenance and Repair</a></li>
                            <li><a class="dropdown-item" href="{{ route('electricals.index') }}">Electrical Installations for Residential Homes and Buildings</a></li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('theportofolios.index') }}" class="text-light my-2 text-decoration-none fw-bold ps-4"><h4>The Portofolio</h4></a>
                <a href="#contact" class="text-light my-2 text-decoration-none fw-bold ps-4"><h4>Contact Us</h4></a>
                @foreach ($contact as $contacts)
                    <a href="https://wa.me/{{ $contacts->whatsapp }}" class="text-light my-2 text-decoration-none fw-bold ps-4"><h4>Customer Service</h4></a>
                @endforeach
            </div>
        </div>
    </section>
    @foreach ($profile as $profiles)
        <section class="electric-page">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center p-3">
                    <div class="d-flex justify-content-center align-items-center p-3">
                        <h1 class="fw-bold text-center" style="color: #9E0000; font-size:4rem;">The Profile</h1>
                    </div>
                </div>
                <div class="pb-3 d-flex justify-content-center align-items-center">
                    <div class="text-start px-5">
                        <p>
                            {{ $profiles->text1 }}
                        </p>
                    </div>
                </div>
                <div class="pb-5 d-flex justify-content-center align-items-center">
                    <div class="text-start px-5">
                        <p>
                            {{ $profiles->text2 }}
                        </p>
                    </div>
                </div> 
                <div class="container pb-5">
                    <div class="responsive pb-3">
                        @foreach ($modal_portofolio as $modal_portofolios)
                            <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $modal_portofolios->id_modalelectric }}">
                                <div class="card" style="width: 18rem; border-radius: 20px;">
                                    <div class="card-img-top" style="height: 170px;">
                                        <img src="{{ asset('storage/'.$modal_portofolios->picture) }}" class="h-100 w-100 object-fit-cover"  alt="Slide 1">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-start">{{ $modal_portofolios->judul }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>  
                </div>  
            </div>
        </section>
    @endforeach

    <section class="footer-page">
        <div class="overlay-footer">
            <div class="container">
                <div class="d-flex">
                    <div class="col-md-6">
                        <div class="pb-4 pt-5">
                            <h1 class="text-white">Contact Details</h1>
                        </div>
                        <small class="text-white ">Untuk Informasi Lebih Lanjut Atau Konsultasi<br>
                               Silahkan Hubungi Kami <br>
                               For further information or concultation, Please reach out to us.<br></small>
                        <div class="py-4">
                            <small class="text-white lh-1">Jln Batas Dukuh Sari no.17 Denpasar Selatan, Sesetan <br>
                                Denpasar Bali, Indonesia</small>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-phone-alt text-white fs-4"></i>
                            <small class="ms-3 text-white">0878 8888 7777, 031 8321 2312</small>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-envelope text-white fs-4"></i>
                            <small class="ms-3 text-white">Admin@BerkahSurya.com</small>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-globe text-white fs-4"></i>
                            <small class="ms-3 text-white">www.berkahsuraygroup.id</small>
                        </div>
                        <div class="py-5">
                            <a href="#" style="text-decoration: none; color: white; font-weight: 700; font-size: 2rem;">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end align-items-center p-3 pt-4 me-3">
                            <div class="rounded-circle d-flex justify-content-center align-items-center logofoot">
                                <div class="d-flex justify-content-center align-items-center" style="width: 101px; height: 76px; margin-bottom: 15px;">
                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('home/images/logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <small class="text-white text-end">Lorem Ipsum is simply dummy text of<br> the printing and typesetting industry.<br> Lorem Ipsum has been the industry's<br> standard dummy text ever since the<br> 1500s, when an unknown printer took a<br> galley of type and scrambled it to make<br> a type specimen book. </small>
                        </div>
                        <div class="d-flex justify-content-end align-items-center pb-1 pt-3 pe-5">
                            <div class="" style="width: 100px; height: 100px;">
                                @foreach ($contact as $contacts)
                                    <img src="{{ asset('storage/'.$contacts->qr_code) }}" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                @endforeach
                            </div>
                        </div>
                       <div class="d-flex justify-content-end align-items-center  pe-5">
                            <small class="text-white text-center">Download Our<br> Company Profile</small>
                       </div>
                       <div class="d-flex justify-content-end align-items-center  pt-3">
                            <small class="text-white text-center fw-bold fs-6">© Copyright BSG. All Rights Reserved</small>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS (already includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Script inisialisasi Slick Slider -->
    <script>
        document.getElementById('btn-menu').addEventListener('click', function() {
        var menu = document.getElementById('menuhape');
        menu.style.right = (menu.style.right === '-75%') ? '0' : '-75%';
    });

    document.getElementById('btn-close').addEventListener('click', function() {
        var menu = document.getElementById('menuhape');
        menu.style.right = '-75%'; // Always set to -75% when closing
    });

    </script>
    <script>
        $(document).ready(function () {
            $('.responsive').slick({
                dots: true,
                infinite: true,
                speed: 600,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="custom-prev"></button>',
                nextArrow: '<button type="button" class="custom-next"></button>',
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
</body>

</html>