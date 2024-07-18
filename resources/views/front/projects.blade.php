<div class="container-fluid project py-5 mb-5" id="projects">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">مشاريعنا</h5>
            <h1>مشاريعنا المكتملة حديثًا</h1>
        </div>
        <div class="row g-5">
            @foreach ($portfolios as $p )
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset($p->image)}}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="{{$p->project_url}}" class="text-center" target="_blank">
                                <h4 class="text-secondary">
                                    {{$p->category->name}}</h4>
                                <p class="m-0 text-white">{{$p->description}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
