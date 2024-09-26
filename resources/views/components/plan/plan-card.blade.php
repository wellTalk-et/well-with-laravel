@props([
    'consultation_id',
    'amount' => 0, 
    'consultation_type' => '',
    'num_sessions'
    ])

@php
    $result = $num_sessions / 4;
    $session_week = $result;
    if($num_sessions % 4 != 0){
        $session_week = floor($result) ." to ".  floor($result) + 1;
    }

@endphp
<a href="/plan/{{$consultation_id}}/review" class="part-four-div consultation-card">
    <!-- <input type="radio" name='consultation_type' class="hidden-radio hidden-radio-js" value='{{ $consultation_id }}' > -->
    <div class="part-four-price-div">
        <div class="part-four-price-txt-div"><p>{{ $amount }} Birr<span> <sup>/week</sup> </span></p></div> 
        <div class="svg-video"><svg width="25" height="25" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.157227" width="32" height="32" rx="16" fill="#1076A1"/>
            <path d="M18.5457 15.0445L21.5518 12.0385C21.8527 11.7375 22.3673 11.9507 22.3673 12.3762V19.6236C22.3673 20.0492 21.8527 20.2623 21.5518 19.9614L18.5457 16.9553M11.3803 20.2991H17.1126C17.9041 20.2991 18.5457 19.6575 18.5457 18.8661V13.1338C18.5457 12.3423 17.9041 11.7007 17.1126 11.7007H11.3803C10.5889 11.7007 9.94727 12.3423 9.94727 13.1338V18.8661C9.94727 19.6575 10.5889 20.2991 11.3803 20.2991Z" stroke="#F6F9F8" stroke-width="0.96" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        
    </div>
<p class="part-four-first-paragraph">{{ $consultation_type }}</p>
<p class="part-four-second-paragraph">Text, video & audio messaging Guaranteed Daily Responses {{ $session_week }} days/week</p>
</a>