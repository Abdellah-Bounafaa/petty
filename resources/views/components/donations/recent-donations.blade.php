 @props(['recent_donations'])
 @foreach ($recent_donations as $donation)
     <li class="col-lg-3 col-md-6 col-sm-12">
         <div class="product-box">
             <div class="producct-img" style="height:200px"><img
                     src="{{ url('uploads/donations/' . $donation['donation_picture']) }}" alt=""></div>
             <div class="product-caption">
                 <h4><a href="#">{{ $donation['donation_title'] }}</a></h4>

                 <a href="/donations/single-donation/{{ $donation['id'] }}" class="btn btn-outline-primary">Read
                     More</a>
             </div>
         </div>
     </li>
 @endforeach

 {{-- {{ $recent_donations->links('pagination.paginate') }} --}}
 </div>
