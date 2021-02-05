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
                            <div class="carousel-item @if($i==1) active" @endif style="background-image:  {{\Illuminate\Support\Facades\Storage::url($rs->image)}} ">
                                <div class="carousel-caption d-none d-md-block">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
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



        <? HOTEL SEARCH PART
        check availability
        ?>


        <div class="container ie-h-align-center-fix">
            <div class="row">
                <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                    <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                        <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-element tm-form-element-100">
                                <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                            </div>
                            <div class="form-group tm-form-element tm-form-element-50">
                                <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                                <div class="qs-datepicker qs-hidden" style="top:45.20000076293945px;left:5px;">
                                    <div class="qs-controls">
                                        <div class="qs-arrow qs-left"></div>
                                        <div class="qs-month-year">
                                            <span class="qs-month">December</span>
                                            <span class="qs-year">2020</span>
                                        </div>
                                        <div class="qs-arrow qs-right"></div>
                                    </div>
                                    <div class="qs-squares"><div class="qs-square qs-day">Sun</div><div class="qs-square qs-day">Mon</div><div class="qs-square qs-day">Tue</div><div class="qs-square qs-day">Wed</div><div class="qs-square qs-day">Thu</div><div class="qs-square qs-day">Fri</div><div class="qs-square qs-day">Sat</div><div class="qs-square qs-num Sun qs-empty"></div><div class="qs-square qs-num Mon qs-empty"></div><div class="qs-square qs-num Tue "><span class="qs-num">1</span></div><div class="qs-square qs-num Wed "><span class="qs-num">2</span></div><div class="qs-square qs-num Thu "><span class="qs-num">3</span></div><div class="qs-square qs-num Fri "><span class="qs-num">4</span></div><div class="qs-square qs-num Sat "><span class="qs-num">5</span></div><div class="qs-square qs-num Sun "><span class="qs-num">6</span></div><div class="qs-square qs-num Mon "><span class="qs-num">7</span></div><div class="qs-square qs-num Tue "><span class="qs-num">8</span></div><div class="qs-square qs-num Wed "><span class="qs-num">9</span></div><div class="qs-square qs-num Thu "><span class="qs-num">10</span></div><div class="qs-square qs-num Fri "><span class="qs-num">11</span></div><div class="qs-square qs-num Sat "><span class="qs-num">12</span></div><div class="qs-square qs-num Sun "><span class="qs-num">13</span></div><div class="qs-square qs-num Mon "><span class="qs-num">14</span></div><div class="qs-square qs-num Tue "><span class="qs-num">15</span></div><div class="qs-square qs-num Wed "><span class="qs-num">16</span></div><div class="qs-square qs-num Thu "><span class="qs-num">17</span></div><div class="qs-square qs-num Fri "><span class="qs-num">18</span></div><div class="qs-square qs-num Sat "><span class="qs-num">19</span></div><div class="qs-square qs-num Sun "><span class="qs-num">20</span></div><div class="qs-square qs-num Mon "><span class="qs-num">21</span></div><div class="qs-square qs-num Tue "><span class="qs-num">22</span></div><div class="qs-square qs-num Wed "><span class="qs-num">23</span></div><div class="qs-square qs-num Thu "><span class="qs-num">24</span></div><div class="qs-square qs-num Fri "><span class="qs-num">25</span></div><div class="qs-square qs-num Sat qs-current"><span class="qs-num">26</span></div><div class="qs-square qs-num Sun "><span class="qs-num">27</span></div><div class="qs-square qs-num Mon "><span class="qs-num">28</span></div><div class="qs-square qs-num Tue "><span class="qs-num">29</span></div><div class="qs-square qs-num Wed "><span class="qs-num">30</span></div><div class="qs-square qs-num Thu "><span class="qs-num">31</span></div><div class="qs-square qs-num Fri qs-empty"></div><div class="qs-square qs-num Sat qs-empty"></div></div>
                                    <div class="qs-overlay qs-hidden">
                                        <div class="qs-close">✕</div>
                                        <input type="number" class="qs-overlay-year" placeholder="4-digit year">
                                        <div class="qs-submit qs-disabled">Submit</div>
                                    </div>
                                </div></div>
                            <div class="form-group tm-form-element tm-form-element-50">
                                <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                <div class="qs-datepicker qs-hidden" style="top:45.20000076293945px;left:5px;">
                                    <div class="qs-controls">
                                        <div class="qs-arrow qs-left"></div>
                                        <div class="qs-month-year">
                                            <span class="qs-month">December</span>
                                            <span class="qs-year">2020</span>
                                        </div>
                                        <div class="qs-arrow qs-right"></div>
                                    </div>
                                    <div class="qs-squares"><div class="qs-square qs-day">Sun</div><div class="qs-square qs-day">Mon</div><div class="qs-square qs-day">Tue</div><div class="qs-square qs-day">Wed</div><div class="qs-square qs-day">Thu</div><div class="qs-square qs-day">Fri</div><div class="qs-square qs-day">Sat</div><div class="qs-square qs-num Sun qs-empty"></div><div class="qs-square qs-num Mon qs-empty"></div><div class="qs-square qs-num Tue "><span class="qs-num">1</span></div><div class="qs-square qs-num Wed "><span class="qs-num">2</span></div><div class="qs-square qs-num Thu qs-active"><span class="qs-num">3</span></div><div class="qs-square qs-num Fri "><span class="qs-num">4</span></div><div class="qs-square qs-num Sat "><span class="qs-num">5</span></div><div class="qs-square qs-num Sun "><span class="qs-num">6</span></div><div class="qs-square qs-num Mon "><span class="qs-num">7</span></div><div class="qs-square qs-num Tue "><span class="qs-num">8</span></div><div class="qs-square qs-num Wed "><span class="qs-num">9</span></div><div class="qs-square qs-num Thu "><span class="qs-num">10</span></div><div class="qs-square qs-num Fri "><span class="qs-num">11</span></div><div class="qs-square qs-num Sat "><span class="qs-num">12</span></div><div class="qs-square qs-num Sun "><span class="qs-num">13</span></div><div class="qs-square qs-num Mon "><span class="qs-num">14</span></div><div class="qs-square qs-num Tue "><span class="qs-num">15</span></div><div class="qs-square qs-num Wed "><span class="qs-num">16</span></div><div class="qs-square qs-num Thu "><span class="qs-num">17</span></div><div class="qs-square qs-num Fri "><span class="qs-num">18</span></div><div class="qs-square qs-num Sat "><span class="qs-num">19</span></div><div class="qs-square qs-num Sun "><span class="qs-num">20</span></div><div class="qs-square qs-num Mon "><span class="qs-num">21</span></div><div class="qs-square qs-num Tue "><span class="qs-num">22</span></div><div class="qs-square qs-num Wed "><span class="qs-num">23</span></div><div class="qs-square qs-num Thu "><span class="qs-num">24</span></div><div class="qs-square qs-num Fri "><span class="qs-num">25</span></div><div class="qs-square qs-num Sat qs-current"><span class="qs-num">26</span></div><div class="qs-square qs-num Sun "><span class="qs-num">27</span></div><div class="qs-square qs-num Mon "><span class="qs-num">28</span></div><div class="qs-square qs-num Tue "><span class="qs-num">29</span></div><div class="qs-square qs-num Wed "><span class="qs-num">30</span></div><div class="qs-square qs-num Thu "><span class="qs-num">31</span></div><div class="qs-square qs-num Fri qs-empty"></div><div class="qs-square qs-num Sat qs-empty"></div></div>
                                    <div class="qs-overlay qs-hidden">
                                        <div class="qs-close">✕</div>
                                        <input type="number" class="qs-overlay-year" placeholder="4-digit year">
                                        <div class="qs-submit qs-disabled">Submit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-element tm-form-element-2">
                                <select name="adult" class="form-control tm-select" id="adult">
                                    <option value="">Adult</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">
                                <select name="children" class="form-control tm-select" id="children">
                                    <option value="">Children</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">
                                <select name="room" class="form-control tm-select" id="room">
                                    <option value="">Room</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">
                                <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                            </div>
                        </div>
                        <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                            <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <? HOTEL SEARCH PART
        check availability
        ?>


    </div>
</div>


