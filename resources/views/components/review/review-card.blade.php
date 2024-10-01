@php
    $num_sessions = $plan->num_sessions;
    $result = $num_sessions / 4;
    $session_week = $result;
    if($num_sessions % 4 != 0){
        $session_week = floor($result) ." to ".  floor($result) + 1;
    }

@endphp


<div class="part-five-div">
    <div>
        <div class="part-five-subscription-div"><p class="part-five-subscription-txt">Subscription plan <span> <a href="/plan">Change</a></span></p>
        </div> 
    </div>
    <p class="part-five-title-paragraph">{{ $plan->name }}</p>
    <p class="part-five-desc-paragraph">Text, video & audio messaging Guaranteed Daily Responses {{ $session_week }} /week</p>
</div>