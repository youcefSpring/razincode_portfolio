@include('front.head')
@include('front.navbar')
@include('front.carousel')
{{-- @include('front.fact') --}}
@include('front.about')
@include('front.services')
@if(isset($portfolios) && count($portfolios) > 0)
@include('front.projects',['portfolios'=>$portfolios])
@endif
{{-- @include('front.blog') --}}
@if(isset($teams) && count($teams) > 0)

@include('front.team',['teams'=>$teams])
@endif
{{-- @include('front.testimonial') --}}
@include('front.contact')
@include('front.footer')
