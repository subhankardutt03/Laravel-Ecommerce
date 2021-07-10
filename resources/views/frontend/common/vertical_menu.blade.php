
@php
    
    $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();

@endphp



<div class="side-menu animate-dropdown outer-bottom-xs">
            <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
            <nav class="yamm megamenu-horizontal">
                <ul class="nav">


                    <!-- Category List -->
                    @foreach ($categories as $category)

                <li class="dropdown menu-item"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i  style="font-size:20px;" class=" {{ $category->category_icon }}" aria-hidden="true"></i>

                    @if (session()->get('language') == 'hindi')
                        {{ $category->category_name_hin }}
                    @else
                        @if (session()->get('language') == 'bengali')
                        {{ $category->category_name_ben }}
                        @else
                        {{ $category->category_name_en }}
                        @endif
                    @endif

                </a>

                    <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">

                        @php
                            
                            $subcategories = App\Models\Subcategory::where('category_id',$category->id)
                            ->orderBy('subcategory_name_en','ASC')->get();
                        @endphp

                        <!-- Subcategory List-->
                        @foreach ($subcategories as $subcategory)
                            
                            <div class="col-sm-12 col-md-3">

                                <a href="{{ route('subcategory.data',[$subcategory->id,$subcategory->subcategory_slug_en]) }}">
                                <h2 class="title">
                                    @if (session()->get('language') == 'hindi')
                                        {{ $subcategory->subcategory_name_hin }}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                                            {{ $subcategory->subcategory_name_ben }}
                                        @else
                                            {{ $subcategory->subcategory_name_en }}
                                        @endif
                                    @endif
                                </h2>
                                </a>

                                @php
                                    $subsubcategories = App\Models\Subsubcategory::where('subcategory_id',$subcategory->id)
                                    ->orderBy('subsubcategory_name_en','ASC')->get();
                                @endphp


                            <!-- Subsubcategory List -->
                            @foreach ($subsubcategories as $subsubcategory)

                            <ul class="links list-unstyled">

                                    <li><a href="{{ route('subsubcategory.data',[$subsubcategory->id,$subsubcategory->subsubcategory_slug_en]) }}">
                                    @if (session()->get('language') == 'hindi')
                                        {{ $subsubcategory->subsubcategory_name_hin }}
                                    @else
                                        @if (session()->get('language') == 'bengali')
                                            {{ $subsubcategory->subsubcategory_name_ben }}
                                        @else
                                            {{ $subsubcategory->subsubcategory_name_en }}
                                        @endif
                                    @endif
                                </a></li>

                            </ul>

                            @endforeach
                            <!-- Subsubcategory List  End -->

                        </div>
                        <!-- /.col -->

                        @endforeach
                    
                        <!-- Subcategory List End -->

                        
                        </div>
                        <!-- /.row --> 
                    </li>
                    <!-- /.yamm-content -->
                    </ul>
                    <!-- /.dropdown-menu --> 
                </li>
                <!-- /.menu-item -->

                @endforeach <!-- Category List End -->
                
                
                
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a> 
                    <!-- /.dropdown-menu --> </li>
                <!-- /.menu-item -->
                
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a> 
                    <!-- ================================== MEGAMENU VERTICAL ================================== --> 
                    <!-- /.dropdown-menu --> 
                    <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
                <!-- /.menu-item -->
                
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a> 
                    <!-- /.dropdown-menu --> </li>
                <!-- /.menu-item -->

                
                </ul>
                <!-- /.nav --> 
            </nav>
            <!-- /.megamenu-horizontal --> 
            </div>
            <!-- /.side-menu -->