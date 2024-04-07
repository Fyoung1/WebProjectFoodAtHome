
    <main class="my-8">
            <h3>Корзина</h3>
                @if(session()->has('cart'))
                    @foreach(session('cart') as $id => $details)
                        <p>sdsd {{$id}}}</p>
                        <p>sdsd {{$details['name']}}</p>
    @endforeach
    @endif
