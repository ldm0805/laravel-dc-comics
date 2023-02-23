{{-- Pagina 1 --}}
{{-- Sezione con icone e sfondo blu --}}
<div class="footer_cont">
    <ul>
        @foreach($productsicon as $product)
            <li>
                <a href="#">
                    <img src="{{ asset(Vite::asset($product['img'])) }}" alt="">
                </a>
                <span class="description">{{$product['description']}}</span>
            </li>
        @endforeach
    </ul>
</div>