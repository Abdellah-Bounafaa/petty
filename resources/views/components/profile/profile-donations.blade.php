           @props(['user_profile'])
           <div class="tab-pane fade show active" id="timeline" role="tabpanel">
               <div class="pd-20">
                   <div class="profile-timeline pd-20">
                       <a href="{{ route('add-donation') }}" class="btn btn-primary add-donation">New Donation</a>

                       <div class="container pd-0">
                           <div class="timeline-month">
                               @if ($user_profile->donation->count() > 0)

                                   <h5> Last donations</h5>
                                   <div class="profile-timeline-list">
                                       <ul>
                                           @foreach ($user_profile->donation as $donation)
                                               <li>
                                                   <div class="date">
                                                       {{ date('d', strtotime($donation->updated_at)) . ' ' . date('M', strtotime($donation->updated_at)) }}
                                                   </div>
                                                   <div class="donation-title">
                                                       <a href="/donations/single-donation/{{ $donation->id }}">
                                                           {{ $donation->donation_title }}</a>

                                                   </div>
                                                   <p>{{ Str::limit($donation->description, 100) }}</p>
                                                   <div class="task-time">
                                                       {{ date('H:i:s', strtotime($donation->updated_at)) }}
                                                   </div>
                                               </li>
                                           @endforeach


                                       </ul>
                                   </div>
                               @else
                                   <h1 style="text-align: center">No donations yet</h1>
                               @endif


                               </ul>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
