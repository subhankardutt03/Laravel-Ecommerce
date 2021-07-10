       @php
                $users = App\Models\User::orderBy('id','DESC')->limit(3)->get();
        @endphp
    
    <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
            <div id="advertisement" class="advertisement">

                @foreach ($users as $item)
                <div class="item">
                <div class="avatar"><img src="{{ asset('upload/user_images/'.$item->profile_photo_path) }}" alt="Image"></div>
                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">{{ $item->name }} <span>Abc Company</span> </div>
                <!-- /.container-fluid --> 
                </div>
                <!-- /.item -->
                @endforeach
                
                {{-- <div class="item">
                <div class="avatar"><img src="{{ asset('frontend/assets/images/testimonials/member3.png') }}" alt="Image"></div>
                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                </div>
                <!-- /.item --> --}}
                
                {{-- <div class="item">
                <div class="avatar"><img src="{{ asset('frontend/assets/images/testimonials/member2.png') }}" alt="Image"></div>
                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                <!-- /.container-fluid --> 
                </div>
                <!-- /.item -->  --}}
                
            </div>
            <!-- /.owl-carousel --> 
            </div>