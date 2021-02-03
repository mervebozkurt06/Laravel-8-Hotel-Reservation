<div class="faq-main">
    <div class="" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card accordion-single">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Phasellus ultrices tellus nec pellentesque ornare.</a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                    <div class="blog-right-side">
                        <!-- Comments Form -->
                        <div class="card my-4">
                            <h5 class="card-header">Leave a Comment:</h5>
                            <div class="card-body">

                                @livewire('review',['id'=>$data->id])

                            </div>
                        </div>
                    </div>

                    @php
                    $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                    $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                    @endphp

                    <h5 class="mt-0"><strong>{{$countreview}} Review(s)</strong></h5>

                    @foreach($reviews as $rs)
                    <hr>

                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="{{$rs->user->image}}" alt="">
                        <div class="media-body">

                            <h5 class="mt-0">{{$rs->user->name}}</h5>
                            <p>{{$rs->subject}}</p>
                            <p>{{$rs->review}}</p>
                            <p><i class="fas fa-star">{{$rs->rate}}</i> | {{$rs->created_at}}</p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card accordion-single">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Morbi malesuada enim non luctus tincidunt.</a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card accordion-single">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Fusce eu dui condimentum, placerat nisl id, egestas est.</a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>
