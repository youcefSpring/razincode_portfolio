<div class="container-fluid py-5 mb-5 team">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">فريقنا</h5>
            <h1>تعرف على فريقنا الخبير</h1>
        </div>
        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s" >
            @foreach ($teams as $t )
            <div class="rounded team-item" >
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="{{ asset($t->photo ? $t->photo : 'front/img/team-1.jpg') }}" class="img-fluid w-100 rounded-circle" alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4>{{ $t->name }}</h4>
                            <b class="m-0"> {{ $t->role }} </b>
                            <p class="m-0"> {{ $t->description }} </p>
                        </div>
                        {{-- <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
