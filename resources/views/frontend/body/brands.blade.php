    @php
        $brand = App\Models\Brand::orderBy('id','DESC')->limit(6)->get();
    @endphp
    
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">

          @foreach ($brand as $item)
              
          <div class="item">
            <a href="#" class="image"> 
              <img data-echo="{{ asset($item->brand_image) }}" src="{{ asset($item->brand_image) }}" alt="" style="width:166px;height:110px;"> 
            </a> 
          </div>
          <!--/.item-->

          @endforeach
          
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>