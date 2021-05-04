//CF7
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.resonancebusiness.fr';
  }, false );

// Section FAQ
const allQuestions = document.querySelectorAll('.visible-panel img');

allQuestions.forEach(element => {
    element.addEventListener('click', function(){
        const height = this.parentNode.parentNode.childNodes[3].scrollHeight;
        const currentChoice = this.parentNode.parentNode.childNodes[3];
        if(this.src.includes('down')){
            this.src = 'http://localhost:8888/resonance-wp/wp-content/uploads/2021/04/chevron-up.svg';
            gsap.to(currentChoice, {duration: 0.2, height: height + 40, opacity: 1, padding: '10px 15px 40px 15px'})
        } else if (this.src.includes('up')) {
            this.src = 'http://localhost:8888/resonance-wp/wp-content/uploads/2021/04/chevron-down.svg';
            gsap.to(currentChoice, {duration: 0.2, height: 0, opacity: 0, padding: '0px 15px'})
        }
    })
})

// Fomulaire Maison Tristan 
// Récupération des slides
const Slide1 = document.getElementById("slide1");
const Slide2 = document.getElementById("slide2");
const Slide3 = document.getElementById("slide3");
const Slide4 = document.getElementById("slide4");

// Récupération des boutons
const NextForm1 = document.getElementById("nextform1");
const NextForm2 = document.getElementById("nextform2");
const NextForm3 = document.getElementById("nextform3");
const BackForm1 = document.getElementById("prevform1");
const BackForm2 = document.getElementById("prevform2");
const BackForm3 = document.getElementById("prevform3");

// étapes 
const FormStep1 = document.getElementById("formstep1");
const FormStep2 = document.getElementById("formstep2");
const FormStep3 = document.getElementById("formstep3");
const FormStep4 = document.getElementById("formstep4");

// fonctions 
NextForm1.onclick = function(){
    Slide1.style.left = "-1250px";
    Slide2.style.left = "0px";
    FormStep1.classList.remove("active");
    FormStep2.classList.add("active");
};
NextForm2.onclick = function(){
    Slide2.style.left = "-1250px";
    Slide3.style.left = "0px";
    FormStep2.classList.remove("active");
    FormStep3.classList.add("active");
};
NextForm3.onclick = function(){
    Slide3.style.left = "-1250px";
    Slide4.style.left = "0px";
    FormStep3.classList.remove("active");
    FormStep4.classList.add("active");
};
BackForm1.onclick = function(){
    Slide1.style.left = "0px";
    Slide2.style.left = "1250px";
    FormStep2.classList.remove("active");
    FormStep1.classList.add("active");
};
BackForm2.onclick = function(){
    Slide2.style.left = "0px";
    Slide3.style.left = "1250px";
    FormStep3.classList.remove("active");
    FormStep2.classList.add("active");
};
BackForm3.onclick = function(){
    Slide3.style.left = "0px";
    Slide4.style.left = "1250px";
    FormStep4.classList.remove("active");
    FormStep3.classList.add("active");
};


// je récupère les étapes du formulaire
const Form1 = document.getElementById("step1");
const Form2 = document.getElementById("step2");
const Form3 = document.getElementById("step5");
const FormWrapper = document.getElementById("formwrapper");
const Span1 = document.getElementById("rowstep1");
const Span2 = document.getElementById("rowstep2");
const Span3 = document.getElementById("rowstep3");
const RowStepSpan1 = document.getElementById("spanrowstep1");
const RowStepSpan2 = document.getElementById("spanrowstep2");
const RowStepSpan3 = document.getElementById("spanrowstep3");
const RowStepP1 = document.getElementById("prowstep1");
const RowStepP2 = document.getElementById("prowstep2");
const RowStepP3 = document.getElementById("prowstep3");

// je récupère les boutons que j'ai ajouté à full-stripe
const Next1 = document.getElementById("next1");
const Next2 = document.getElementById("next2");
const Back1 = document.getElementById("back1");
const Back2 = document.getElementById("back2");

// Ajout des fonctions de navigation 

Next1.onclick = function(){
    Form1.style.left = "-850px";
    Form2.style.left = "0px";
    Span2.classList.add("active");
    RowStepSpan2.classList.add("active");
    Span1.classList.remove("active");
    RowStepSpan1.classList.remove("active");
    RowStepP2.classList.add("active");
    RowStepP1.classList.remove("active");
}
Back1.onclick = function(){
    Form1.style.left = "0px";
    Form2.style.left = "850px";
    Span1.classList.add("active");
    RowStepSpan1.classList.add("active");
    Span2.classList.remove("active");
    RowStepSpan2.classList.remove("active");
    RowStepP1.classList.add("active");
    RowStepP2.classList.remove("active");
}
Next2.onclick = function(){
    Form2.style.left = "-850px";
    Form3.style.left = "0px";
    Span3.classList.add("active");
    RowStepSpan3.classList.add("active");
    Span1.classList.remove("active");
    RowStepSpan2.classList.remove("active");
    RowStepP3.classList.add("active");
    RowStepP2.classList.remove("active");
}
Back2.onclick = function(){
    Form2.style.left = "0px";
    Form3.style.left = "850px";
    Span2.classList.add("active");
    RowStepSpan2.classList.add("active");
    Span3.classList.remove("active");
    RowStepSpan3.classList.remove("active");
    RowStepP2.classList.add("active");
    RowStepP3.classList.remove("active");
}

