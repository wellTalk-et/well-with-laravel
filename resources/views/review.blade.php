<x-layout>
    @vite([
            'resources/styles/payment.css'
            ])
    <section id="part-five"> 
        <div class="container-4" ><!--main div-->
            <x-plan.progress-bar class="card-progress-bar" /><!--progress bar-->

            <div class="plan-title-txt"><!--title txt-->
                <p>Review your session</p>
            </div>

            <div class="plan-description-txt"><!--description-->
                <p>you will not be charged untill you've been matched with a provider. Switch plans or cancel anytime after subscribing.</p>
            </div>
            <form action="/plan/{{$plan->id}}/payment">
                <x-review.review-card :plan='$plan' />
                <x-review.summary :plan='$plan' />
            </form>

        
    </section>

</x-layout>
