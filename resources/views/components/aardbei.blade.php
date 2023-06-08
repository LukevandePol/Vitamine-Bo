<div class="dropup-container">
    <button class="dropup-btn">
        <img src="{{ asset('images/strawberry.svg') }}" class="aardbei" width="125" alt="Aardbei Hulp">
    </button>
    <div class="dropup-content">
        <div class="accordion accordion-flush" id="faq">
            @foreach($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-link collapsed" type="button" data-bs-toggle="collapse"
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
            @endforeach
        </div>
    </div>
</div>


