<section class="testimonials section bg-light">
    <div class="container">

        <div class="sec-title text-center mb-5">
            <p class="sec-sub-title mb-3">Apa Kata Mereka</p>
            <h2 class="h2-title">
                Apa Yang Dikatakan <span>Customer Tentang Kami</span>
            </h2>
            <div class="sec-title-shape mb-4">
                <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
            </div>
        </div>

        <div class="row">
            @forelse ($testimonials as $item)
                <div class="col-md-4 mb-4">
                    <div class="testimonials-box">

                        <div class="testimonial-box-top">
                            <div class="testimonials-box-img back-img"
                                 style="background-image: url({{
                                    $item->foto
                                    ? asset('storage/' . $item->foto)
                                    : asset('assets/images/default-user.png')
                                 }});">
                            </div>

                            <div class="star-rating-wp">
                                <div class="star-rating">
                                    <span class="star-rating__fill"
                                          style="width:{{ $item->rating * 20 }}%"></span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonials-box-text">
                            <h3 class="h3-title">{{ $item->nama }}</h3>
                            <p>{{ $item->pesan }}</p>
                        </div>

                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada testimoni</p>
            @endforelse
        </div>

    </div>
</section>
