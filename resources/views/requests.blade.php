@include('partials._header')
<div class="wrap">
    <x-hero />
    <x-banner page="Requests" />
    <section class="ftco-section bg-light">
        <div class="orders-container container">
            {{-- @if ($orders !== null && $orders->count() > 0)
                <table class="container">
                    <thead style="background-color: #f0f0f0;">
                        <th style="border-radius:30px 0 0 30px ;padding:10px 20px">Item</th>
                        <th>Tags</th>
                        <th style="border-radius:0 30px  30px 0">Remove</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="p-4">
                                    <img style="width: 150px;aspet-ratio:3/2;object-fit:contain"
                                        src="{{ asset('uploads/donations/' . $order->donation->donation_picture) }}"
                                        alt="" class="m-4">
                                    <span class="font-weight-bold">{{ $order->donation->donation_title }}</span>
                                </td>
                                <td>
                                    {{ $order->donation->tags }}
                                </td>
                                <td>
                                    <form action="{{ route('delete-order', $order->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-primary" value="X">
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center mt-4 p-4">
                    <span>Total : <b>{{ $orders->count() }}</b></span>
                    <form action="{{ route('delete-orders') }}" method="Post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Clear">
                    </form>
                </div>
            @else
                <h1 class="text-center">No Orders Yet</h1>
            @endif

        </div> --}}
    </section>
</div>
@include('partials._footer')
