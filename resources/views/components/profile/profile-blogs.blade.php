    @props(['user_profile'])
    <div class="tab-pane fade" id="tasks" role="tabpanel">
        <div class="pd-20">
            <div class="pd-20 profile-task-wrap">
                <a href="{{ route('create-blog') }}" class="btn btn-primary add-donation">New Blog</a>

                <div class="container pd-0">
                    {{-- <div class="task-title profile-row align-items-center"> --}}
                    <div class="timeline-month">
                        @if ($user_profile->donation->count() > 0)

                            <h5> Last Blogs</h5>
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
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
