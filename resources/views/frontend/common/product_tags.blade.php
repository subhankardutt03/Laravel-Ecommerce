        
        @php
            $product_tags_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')
            ->get();
            $product_tags_ben = App\Models\Product::groupBy('product_tags_ben')->select('product_tags_ben')
            ->get();
            $product_tags_hin = App\Models\Product::groupBy('product_tags_hin')->select('product_tags_hin')
            ->get();

        @endphp
        
        <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">


                    @if (session()->get('language') == 'hindi')

                                @foreach ($product_tags_en as $tags_en)
                                        <a class="item active" title="tags" href="{{ route('product.tags',$tags_en->product_tags_en) }}">
                                            {{ str_replace(',',' ',$tags_en->product_tags_en) }}
                                        </a>
                                @endforeach
                            
                                    @else
                                        @if (session()->get('language') == 'bengali')

                                @foreach ($product_tags_ben as $tags_ben)
                                        <a class="item active" title="tags" href="{{ route('product.tags',$tags_ben->product_tags_ben) }}">
                                            {{ str_replace(',',' ',$tags_ben->product_tags_ben) }}
                                        </a>
                                @endforeach

                                        @else

                                        @foreach ($product_tags_hin as $tags_hin)
                                        <a class="item active" title="tags" href="{{ route('product.tags',$tags_hin->product_tags_hin) }}">
                                            {{str_replace(',',' ',$tags_hin->product_tags_hin) }}
                                        </a>
                                        @endforeach

                                        @endif
                                    @endif
            
                </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 