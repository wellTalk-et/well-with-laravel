@php
    $num_sessions = $plan->num_sessions;
    $result = $num_sessions / 4;
    $session_week = $result;
    if($num_sessions % 4 != 0){
        $session_week = floor($result) ." to ".  floor($result) + 1;
    }

    $paymentCentsPerWeek = ($plan->price * 100) / 4;
    $paymentWeekBirr = round($paymentCentsPerWeek / 100, 2);


@endphp


<div class="part-five-div-2">
        <div>
            <div class="part-five-summary-div"><p class="part-five-summary-txt">Summary</p></div> 
        </div>
        <div class="part-five-summary-title-txt">
            <p>Couples Therapy  (4x{{$plan->price}} Birr)</p>
             <span>{{ 4 * $paymentWeekBirr }} Birr</span>
        </div>
        <hr>
        <div class="part-five-summary-total-txt">
            <p> Total due</p>
             <span>{{$plan->price}} Birr</span>
        </div>
        <p class="part-five-summary-desc-txt">you will not be charged untill you've been matched with a provider.</p>

        <button class="proceed-payment-btn">Proceed to Payment</button>
</div>