@props([
    'path' => 'none',
    'username'=> 'Dr. John Doe', 
    'rating'=> 5.0, 
    'profession'=>'psychatrist',
    'keywords'=> ['Relationship', 'Relationship', 'Relationship','Relationship', 'Relationship']
    ])

<div class="highlighted provider">
    <div class="provider-img">
        <img src="{{ Vite::asset($path)}}" alt="">
    </div>
    <div class="provider-full-info">
        <div class="user-info">
            <p class="username">{{ $username }}<span class="rating"><img src="{{ Vite::asset('resources/assets/other-image-assets/star.svg') }}" alt="" >{{ $rating }}</span></p>
            <p class="profession">{{ $profession }}</p>
        </div>
        <div class="suggested-keywords">
            @foreach($keywords as $keyword)
            <x-keyword class="single-keyword">{{ $keyword }}</x-keyword>
            @endforeach
        </div>
    </div>
</div>