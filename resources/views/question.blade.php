<x-layout>
<body>
     <div class="progress-bar js-progress-bar"></div>
    <main>  
        @auth
        <h1>{{ Auth::user()->first_name}}</h1>
        @endauth
    <div id="question-data" data-questions='@json($questions)'></div>
        <form class="question-form js-question-form" action="/questions" method="POST">
            @csrf
            <input type="text" name="answers" class="hidden-input">
            <div class="question-container js-question-container">
            </div>
            <button class="back-btn js-back-btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 arrow-left">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg> back
            </button>
        </form>

    </main>

    @vite([
        'resources/styles/question.css',

        'resources/scripts/question.js'
        ])


</x-layout>