@props(['src', 'alt'])

<div {{$attributes->merge(['class'=>'vc-container'])}}>
    <img {{$attributes->merge(['class'=>'provider-img', 'src'=>$src, 'alt' => $alt]) }}>
</div>