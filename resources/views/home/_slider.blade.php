<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{asset('assets')}}/images/slider-01.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to N & LW Lawn Care</h3>
                    <p>A Great Theme For Garden Lawn Care</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('assets')}}/images/slider-02.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Beautiful Garden</h3>
                    <p>A Great Theme For Garden Lawn Care</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('assets')}}/images/slider-03.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to N & LW Lawn Care</h3>
                    <p>A Great Theme For Garden Lawn Care</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="{{asset('assets')}}/#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="{{asset('assets')}}/#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
