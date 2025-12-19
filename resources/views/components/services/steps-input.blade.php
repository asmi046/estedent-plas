<section id="services-steps" class="services-steps">
    <div class="container">


        <div class="steps-layout">
            <div class="steps-layout__left">
                <h2>{{ $title }}</h2>
                <div class="steps-timeline">

                    @isset($information)
                        @foreach($information as $step)
                            <div class="steps-timeline__item">
                                <div class="steps-timeline__marker">{{ $loop->iteration }}</div>
                                <p class="steps-timeline__text">{{ $step['title'] }}</p>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
            <div class="steps-layout__right">
                <img src="/img/steps_1.webp" alt="Steps">
            </div>
        </div>
    </div>
</section>
