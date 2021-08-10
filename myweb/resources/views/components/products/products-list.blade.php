<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    @isset($prdata)
        <ul>
            @foreach ($prdata as $product )
                <li>
                    {{ $product }}
                </li>
            @endforeach
        </ul>
    @endisset


</div>
