<x-layout>
    @vite([
        'resources/styles/payment.css'
        ])
    <section id="part-four">
        <div class="container-4" ><!--main div-->
            <x-plan.progress-bar class="card-progress-bar" ><!--progress bar-->
            </x-plan.progress-bar>
            
            <div class="plan-title-txt"><!--title txt-->
                <p>Best plan for you</p>
            </div>

            <div class="plan-description-txt"><!--description-->
                <p>You will not be charged until you've been matched with a provider. Switch plans or cancel anytime after subscribing.</p>
            </div>

                @foreach($plans as $plan)
                    <x-plan.plan-card consultation_id='{{$plan->id}}' num_sessions='{{ $plan->num_sessions }}' consultation_type='{{ $plan->name }}' amount='{{ $plan->price }}' />
                @endforeach

    </section>
    @vite(['resources/scripts/payment.js'])
</x-layout>
