const formElem = document.querySelector('.js-question-form');
formElem.addEventListener('submit', (event)=>{
    event.preventDefault();
});

function sendRequest(){
    let answersInput = document.querySelector('input[name="answers"]');
    answersInput.value = sessionStorage.getItem('answers');
    
    formElem.submit();

}



function constructQuestions(question){
    let newQuestion, optionHtml;
    if(question.type == 'select'){
        optionHtml = question.options.map(option =>{
            return `<option value="${option.text}" data-id="${option.id}">${option.text}</option>`
        }).join('');

       newQuestion = {
            id : question.id,
            type : question.type,
            question:`
                <p class="question" data-question-text="${question.text} data-question-id="${question.id}>
                    ${question.text}
                </p>
            
                <select type="dropdown" name="question-${question.id}" class="input dropdown" id="js-${question.id}">
                        ${ optionHtml }
                </select>
                <button class="btn primary btn-md">Continue</button>
            `,
            answer: null
        }

    }else if(question.type == 'yes_no'){
       optionHtml = question.options.map(option => {
            return `<button class="btn btn-outlined ${option.text}" role="radio" value="${option.text}" data-id="${option.id}">${option.text}</button>`
        }).join('');
        newQuestion = {
            id : question.id,
            type : question.type,
            question: `
                <p class="question" data-question-text="${question.text} data-question-id="${question.id}>
                    ${question.text}
                </p>
                
                <div class="choice" name="question-${question.id}" class="input dropdown" id="js-${question.id}">
                ${optionHtml}
                </div>
    
            `,
            answer: null
        }

    }

    return newQuestion;
}

const questions = []
const questionDataDiv = document.getElementById('question-data');
const questionsObj = JSON.parse(questionDataDiv.dataset.questions);
questionsObj.forEach(question =>{
        questions.push(constructQuestions(question));

});


let questionIndex = 0, currentQuestion;
const questionContainer = document.querySelector('.js-question-container');
const backBtn = document.querySelector('.back-btn');
const progressBar = document.querySelector('.js-progress-bar');

function addToSessionStorage(currQuestion){
    const answers = JSON.parse(sessionStorage.getItem('answers')) || {};
    answers[currQuestion.id] = currQuestion.answer;
    sessionStorage.setItem('answers', JSON.stringify(answers));
}

function renderQuestion(index){
    console.log(index);
    currentQuestion = questions[index]
    if(questionIndex === 0){
        backBtn.classList.add('disabled');
        backBtn.setAttribute('disabled', '')
    }else{
        backBtn.classList.remove('disabled');
        backBtn.removeAttribute('disabled', '')
    }
    questionContainer.innerHTML = currentQuestion.question;
    document.querySelectorAll('.js-question-container .btn').forEach(btn =>{
        btn.addEventListener('click', ()=>{
            const selectElem = document.querySelector('select');
            if(selectElem) // if the quesion is select based get the input value
                currentQuestion.answer = selectElem.value
            else // if the value is yes_no
                currentQuestion.answer = btn.textContent
            
            // save to session storage
            addToSessionStorage(currentQuestion);

            if (index < questions.length - 1) {
                changeQuestion();
            } else {
                progressBar.style.width = `100%`;
                setTimeout(() => {
                }, 600)
                sendRequest();
            }
        })
    })
}


function changeQuestion(){
    renderQuestion(++questionIndex);
    updateProgressBar();    
    questionContainer.classList.add('slide-in');
    setTimeout(() => {
    questionContainer.classList.remove('slide-in')
    questionContainer.classList.remove('slide-out')
        
    }, 600);
}

function previousQuestion(){
    if(questionIndex > 0){
        backBtn.classList.remove('disabled')
        renderQuestion(--questionIndex);
        questionContainer.classList.add('slide-out')
        questionContainer.classList.remove('slide-in')
        updateProgressBar();

        
        setTimeout(() => {
        questionContainer.classList.remove('slide-in')
        questionContainer.classList.remove('slide-out')
            
        }, 600);
    }
}

function updateProgressBar() {
    progressBar.style.width = `${(questionIndex / questions.length) * 100}%`;
}


backBtn.addEventListener('click', () => {
    questionContainer.classList.remove('slide-in')
    questionContainer.classList.add('slide-out')
    previousQuestion();
});

renderQuestion(questionIndex);