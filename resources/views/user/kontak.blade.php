@extends('layout.main')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="section section-2">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
					<div class="image-stack mb-5 mb-lg-0">
						<div class="image-stack__item image-stack__item--bottom" data-aos="fade-up">
							<img src="assets/img/img_v_1.jpg" alt="Image" class="img-fluid rellax ">
						</div>
						<div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"
							data-rellax-percentage="0.5">
							<img src="assets/img/img_v_2.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="col-lg-4 order-lg-1">

					<div>
						<h2 class="display-5 mb-5" data-aos="fade-up" data-aos-delay="100">Jelajahi Semua Sudut&nbsp;Pekalongan Bersama Kami</h2>

						<p data-aos="fade-up" data-aos-delay="200">
                            Kami berkomitmen untuk menyajikan informasi yang akurat, terkini, dan berguna bagi para pengunjung kami. 
                            Tim kami bekerja keras untuk menghadirkan konten yang menarik, foto-foto menakjubkan, 
                            dan saran-saran yang berguna untuk membantu Anda merencanakan perjalanan yang sempurna.
                        </p>

						<p data-aos="fade-up" data-aos-delay="300">
                            Pekalongan adalah sebuah kota yang terletak di Provinsi Jawa Tengah, Indonesia. Kota ini memiliki potensi 
                            wisata yang menarik dengan berbagai destinasi dan atraksi yang dapat dinikmati oleh para pengunjung.
                        </p>
{{-- 
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read
								more</a></p> --}}
					</div>
				</div>

			</div>

		</div>
	</div>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Kontak Kami</p>
                    <h1 class="display-5 mb-5">Jika Anda memiliki pertanyaan, silakan hubungi kami</h1>
                    <p class="mb-4">Silakan hubungi kami jika Anda memiliki pertanyaan, saran, atau permintaan lainnya.
                        Kami senang mendengar dari Anda. Jangan ragu untuk menghubungi kami.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63375.28613869004!2d109.63330335902855!3d-6.895940234313747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70242ca490fe13%3A0xc0c68a126b258cb6!2sPekalongan%2C%20Kota%20Pekalongan%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1685345332253!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection