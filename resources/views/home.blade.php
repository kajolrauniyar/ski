@extends('layouts.frontend')
@section('content')
<div class="carousel carousel-slider center" data-indicators="true">

    <div class="carousel-item">
        <img src="https://source.unsplash.com/1024x512/?food" alt="">
    </div>
    <div class="carousel-item">
        <img src="https://source.unsplash.com/1024x512/?cat" alt="">
    </div>
    <div class="carousel-item">
        <img src="https://source.unsplash.com/1024x512/?corgi" alt="">
    </div>
    <div class="carousel-item">
        <img src="https://source.unsplash.com/1024x512/?retriver" alt="">
    </div>
</div>
<!-- heading start -->
<div class="container-fluid">
    <h2 class="center-align">SPLASH RESPONSIBLE TRAVEL ALL OVER</h2>
    <h5 class="center-align uk-margin-medium-bottom"><i>Striving to be the Nepal's only most Eco-Friendly Ski Touring Experience !</i></h5>
</div>
<!--heading end  -->
<!-- content start -->
<div class="container-fluid">
    <div class="row symbol">
      <div class="col s12 m4 l4 center-align feature-wrapper">
        <div class="featured-sustain"></div>
        <h5 class="center-align">Sustainable Tourism</h5>
        <p class="center-align">We believe a small effort towards the betterment of community can contribute a lot to environment. As a responsible operator we strongly emphasis on cultural and economic sustainability.</p>

    </div>
    <div class="col s12 m4 l4 center-align feature-wrapper">
      <div class="featured-adventure"></div>
      <h5 class="center-align">Sustainable Tourism</h5>
      <p class="center-align">We believe a small effort towards the betterment of community can contribute a lot to environment. As a responsible operator we strongly emphasis on cultural and economic sustainability.</p>
  </div>
  <div class="col s12 m4 l4 center-align feature-wrapper">
      <div class="featured-ski"></div>
      <h5 class="center-align">Sustainable Tourism</h5>
      <p class="center-align">We believe a small effort towards the betterment of community can contribute a lot to environment. As a responsible operator we strongly emphasis on cultural and economic sustainability.</p>
  </div>

</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m6 l6">  
            <div class="row cat-wrapper">
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?food" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?space" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?flower" alt="" class="responsive-img">
                </div>
            </div>
            <div class="row cat-wrapper">
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?phone" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?camera" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?shoes" alt="" class="responsive-img">
                </div>
            </div>
            <div class="row cat-wrapper">
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?food" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?space" alt="" class="responsive-img">
                </div>
                <div class="col s4 m4 l4" id="cat">
                    <img src="https://source.unsplash.com/400x300/?flower" alt="" class="responsive-img">
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <h3 class="center-align uk-margin-remove-vertical">Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis hic dolor repudiandae dicta doloremque autem esse eos, iste commodi eius totam, velit, sint illo adipisci quia non officia recusandae. Dolore laboriosam doloribus, nemo praesentium corporis, et sint omnis recusandae? At suscipit placeat, consequatur cumque odio vel. Molestias neque quod temporibus.</p>
            <div class="center-align">
                <a class="waves-effect waves-light btn-large ">Read more..</a>            
            </div>
        </div>
    </div>
</div>
<!-- content end -->
<!-- Special block start -->
<div class="parallax-container offer">
    <div class="parallax"><img src="https://source.unsplash.com/1200x450/?nature"></div>
</div>

<!-- Special block start -->
<div class="container-fluid">
    <h2 class="center-align">TOP ADVENTURES</h2>
    <h5 class="center-align">Our collection of the most popular adventures in 2018</h5>
    <hr>
</div>
<!-- package start -->
<div class="container-fluid">
    <div class="row">     
        @for($i=1; $i<=3; $i++)   
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image">
                    <img src="https://source.unsplash.com/400x300/?shoes">
                    <div class="featured-price white-text">
                      <span><sup>USD</sup> 1500</span>
                  </div>
              </div>
              <div class="card-content package-meta">
                <span class="card-title uk-margin-remove-vertical" id="package-title">Item Title</span>
                <div class="unit">                            
                    <span class="left"><i class="far fa-calendar-alt"></i> 14 Days</span>                      
                    <span class="rating-wrapper right">
                        <i class="material-icons review-star">star</i>
                        <i class="material-icons review-star">star</i>
                        <i class="material-icons review-star">star</i>
                        <i class="material-icons review-star">star</i>
                        <i class="material-icons review-star">star</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endfor
    @for($j=1; $j<=3; $j++)   
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
                <img src="https://source.unsplash.com/400x300/?shoes">
                <div class="featured-price white-text">
                  <span><sup>USD</sup> 1500</span>
              </div>
          </div>
          <div class="card-content package-meta">
            <span class="card-title uk-margin-remove-vertical" id="package-title">Item Title</span>
            <div class="unit">                            
                <span class="left"><i class="far fa-calendar-alt"></i> 14 Days</span>                      
                <span class="rating-wrapper right">
                    <i class="material-icons review-star">star</i>
                    <i class="material-icons review-star">star</i>
                    <i class="material-icons review-star">star</i>
                    <i class="material-icons review-star">star</i>
                    <i class="material-icons review-star">star</i>
                </span>
            </div>


        </div>
    </div>
</div>
@endfor  
</div>  
</div>
{{-- trip of the month start --}}
<section class="tofm-wrapper">
    <div class="row center-align">
        <h2 class="uk-margin-remove-vertical">Trip of the month</h2>
    </div>
    <div class="row">
        <div class="col s12 m6 l6 uk-padding-remove-horizontal" id="tofm-img-wrapper">
            <img class="responsive-img" src="https://source.unsplash.com/800x600/?tesla" alt="">
        </div>
        <div class="col s12 m6 l6">
          <p class="flow-text uk-padding-large">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolores recusandae, vitae sapiente culpa aperiam veritatis impedit esse magni dolor.
          </p>
          <div class="tofm-meta-wrapper uk-padding-large uk-margin-remove-vertical">
            <div class="col s4 m4 l4">
                <div class="col s4 m4 l4">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col s8 m8 l8">
                    <p class="uk-margin-remove-vertical dodger-blue-text darken-1">Duration</p>
                    <span>
                        16 Days
                    </span>
                </div>
            </div>
            <div class="col s4 m4 l4">
                <div class="col s4 m4 l4">
                    <i class="fas fa-signal"></i>
                </div>
                <div class="col s8 m8 l8">
                    <p class="uk-margin-remove-vertical dodger-blue-text darken-1">Trip Level</p>
                    <span>
                        Moderate
                    </span>
                </div>                
            </div>
            <div class="col s4 m4 l4">
                <div class="col s4 m4 l4">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="col s8 m8 l8">
                    <p class="uk-margin-remove-vertical dodger-blue-text darken-1">Trip Price</p>
                    <span>
                        USD 1500
                    </span>
                </div>                 
            </div>
        </div>
    </div>
</div>
</section>
{{-- trip of the month end --}}

{{-- youtube,instagram start--}}
<section class="social">
    <div class="row">
        <div class="col s12 m6 l6 uk-padding-remove-horizontal" id="insta-wrapper">
            <h3 class="center-align">#nepalskiguide</h3>
            @for($l=1; $l<=3; $l++)
            <div class="row insta-row">
                <div class="col sm12 m4 l4">
                    <img class="responsive-img" src="https://source.unsplash.com/400x300/?youtube" alt="">  
                </div>
                <div class="col sm12 m4 l4">
                   <img class="responsive-img" src="https://source.unsplash.com/400x300/?youtube" alt=""> 
               </div>
               <div class="col sm12 m4 l4">
                   <img class="responsive-img" src="https://source.unsplash.com/400x300/?youtube" alt=""> 
               </div>
           </div>
           @endfor

       </div>
       <div class="col s12 m6 l6 uk-padding-remove-horizontal" id="youtube-wrapper">
        <h3 class="center-align">Nepal Ski Guide Stories</h3>
        <img class="responsive-img" src="https://source.unsplash.com/800x600/?youtube" alt="">
    </div>

</section>
{{-- youtube,instagram end--}}
@include('frontend.partials._media')


@stop
