<div class="dropup-container">
    <button class="dropup-btn">
        <img src="{{ asset('images/aardbei.png') }}" class="aardbei" width="100" alt="Aardbei Hulp">
    </button>
    <div class="dropup-content">
        <div class="accordion accordion-flush" id="faq">
            @forelse($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-link collapsed p-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#{{ $faq->id }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                    <div id="{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @empty
                <p class="m-0">Er zijn nog geen vragen voor deze pagina, heb je een vraag? Neem gerust contact met ons
                    op.</p>
            @endforelse
        </div>
    </div>
</div>
