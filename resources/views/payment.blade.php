<x-layout>
    @vite(['resources/styles/payment.css'])
    <section id="part-six">
        <div class="container-6" ><!--main div-->
        <x-plan.progress-bar class="card-progress-bar" /><!--progress bar-->


            <div class="plan-title-partSix-txt"><!--title txt-->
                <p>You are just one step away</p>
            </div>

            <div class="plan-description-partSix-txt"><!--description-->
                <p>You will not be charged until you've been matched with a provider. Switch plans or cancel anytime after subscribing.</p>
            </div>

            <form class="form-step" method="POST">
                <label for="email"><p class="label-title">Email</p></label>
                <input type="email" id="email" class="email-input">

                <label for="card"><p class="label-title">Card information</p></label>
                <input type="text" id="card-input" class="card-input" placeholder="0000 0000 0000 0000">
                <div class="card-other-div">
                    <input type="text" id="date-card" class="date-card-input" placeholder="MM/YY"> 
                    <input type="text" id="cvv-input" class="cvv-card-input" placeholder="CVV"> 
                </div>

                <label for="name-on-card"><p class="name-on-card-title">Name on Card</p></label>
                <input type="text" id="name-on-card-input" class="name-on-card-input">


                <label for="country"><p class="label-title">Country</p></label>
                <select name="country" id="country">
                    <option value="Ethiopia">Ethiopia</option>
                </select>

                <button class="pay-pal-btn">Pay with payPal</button>
                <p class="secure-ssl-txt">This is secure SSL. All payments are secured by SSL</p>

            </form>


    </section>
</x-layout>
