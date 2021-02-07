<div class="container">
    <div class="row">
        <div class="col-md-12" style="height: 490px"> <? css changed in style.css file 114 line ?>
            <header class="slider-main">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    @php
                        $i=0;
                    @endphp
                    <div class="carousel-inner" role="listbox">
                    @foreach($slider as $rs)
                        @php
                            $i+=1;
                        @endphp
                        <!-- Slide One - Set the background image for this slide in the line below -->
                            <div class="carousel-item @if($i==1) active" @endif  style="background-image: url('{{\Illuminate\Support\Facades\Storage::url($rs->image)}}')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>{{$rs->title}}</h3>
                                    <p>{{$rs->country}}</p>
                                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn-primary">See Hotel</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </header>
        </div>



    </div>
</div>


