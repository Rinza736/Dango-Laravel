@include('partials.nav')
    <div class="container mt-5">
        <h1 class="mb-4">Наше меню</h1>
        
        @if($menus->count() > 0)
            <div class="row">
                @foreach($menus as $menu)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text">
                                    <strong>Цена:</strong> {{ $menu->price }} руб.<br>
                                    <strong>Вес:</strong> {{ $menu->weight }} г<br>
                                    <strong>Состав:</strong> {{ $menu->composition }}
                                </p>
                                
                                @if($menu->nutritional_value)
                                    <div class="nutritional-info">
                                        <strong>Пищевая ценность:</strong>
                                        <ul class="list-unstyled">
                                            {{-- Временное решение --}}
                                            @php
                                                // Пытаемся декодировать JSON
                                                $nutrition = json_decode($menu->nutritional_value, true);
                                                
                                                // Если декодирование не удалось, показываем как простой текст
                                                if (json_last_error() !== JSON_ERROR_NONE) {
                                                    echo "<li>{$menu->nutritional_value}</li>";
                                                } else {
                                                    // Если это массив, выводим элементы
                                                    foreach ($nutrition as $key => $value) {
                                                        echo "<li>{$key}: {$value}</li>";
                                                    }
                                                }
                                            @endphp
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                Меню пока пустое.
            </div>
        @endif
    </div>

