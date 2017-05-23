<div class="slider-area">
    <div class="slider">
        <div id="bg-slider" class="owl-carousel owl-theme">
         
          <div class="item"><img src="{{ asset('public/img/slider-image-3.jpg') }}" alt="Mirror Edge"></div>
          <div class="item"><img src="{{ asset('public/img/slider-image-2.jpg') }}" alt="The Last of us"></div>
          <div class="item"><img src="{{ asset('public/img/slider-image-1.jpg') }}" alt="GTA V"></div>
         
        </div>
    </div>
    <div class="container slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2>Job Searching Just Got So Easy</h2>
                
                <div class="search-form wow pulse" data-wow-delay="0.8s">
                    <form action="{{url('search') }}" method="get" class=" form-inline">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input name="keyword" type="text" class="form-control" placeholder="Job Key Word">
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_division', $division,null, ['placeholder'=>'Select Division','class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_category', $category,null, ['placeholder'=>'Select Categorys','class' => 'form-control'])!!}
                        </div>
                        <input type="submit" class="btn" value="Search">




                    </form>
                </div>
            </div>
        </div>
        <div class="clear-fix" id="slider-category">
            <style>
                #slider-category{
                    margin-top: 2px;
                }
                .clear-fix{
                  content: "";
                  clear: both;
                  margin-top:5px !important; 
                }
            </style>
        </div>
        <div class="row">
            <div class="col-sm-12">
            @if($catagorys !=false)
                  <div class="row row-flex row-flex-wrap">
                
                    <div class="col-sm-4">
                      <ul style="width:100%; background-color: black;text-align:justify;opacity: 0.5";"> 
                      @foreach($catagorys[0] as $cat1)
                          <li><a style="color:#fff;" href="category/{{$cat1->id}}">{{$cat1->catagoryname}}</a><span class="badge"> {{ $catagorysWiseJobcount[$cat1->id] }}</span></li>
                      @endforeach
                       </ul> 
                    </div>
                    <div class="col-sm-4">
                      <ul style="width:100%; background-color: black; opacity: 0.5 ;text-align:justify;">  
                          @foreach($catagorys[1] as $cat2)
                          <li><a style="color:#fff;" href="category/{{$cat2->id}}">{{$cat2->catagoryname}}</a><span class="badge"> {{ $catagorysWiseJobcount[$cat2->id] }}</span></li>
                      @endforeach
                     </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul style="width:100%; background-color: black; opacity: 0.5; text-align:justify;">
                            @foreach($catagorys[2] as $cat3)
                          <li><a style="color:#fff;" href="category/{{$cat3->id}}">{{$cat3->catagoryname}}</a><span class="badge"> {{ $catagorysWiseJobcount[$cat3->id] }}</span></li>
                      @endforeach
                       </ul>
                    </div>
                    
                     
                
               
            </div>
                 @endif

            </div>

        </div>
    </div>
</div>
<style>
  .row-flex, .row-flex > div[class*='col-'] {  
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex:1 1 auto;
}

.row-flex-wrap {
  -webkit-flex-flow: row wrap;
    align-content: flex-start;
    flex:0;
}


.container-flex > div[class*='col-'] div,.row-flex > div[class*='col-'] div {
  width:100%;
}
</style>