const nxtBtn = document.querySelector('#submitBtn');
const form1 = document.querySelector('#form1');
const form2 = document.querySelector('#form2');
const form3 = document.querySelector('#form3');
const form4 = document.querySelector('#form4');
const form5 = document.querySelector('#form5');
const form6 = document.querySelector('#form6');
const form7 = document.querySelector('#form7');
const form8 = document.querySelector('#form8');
const form9 = document.querySelector('#form9')
const form10 = document.querySelector('#form10');

const icon1 = document.querySelector('#icon1');
const icon2 = document.querySelector('#icon2');
const icon3 = document.querySelector('#icon3');
const icon4 = document.querySelector('#icon4');
const icon5 = document.querySelector('#icon5');
const icon6 = document.querySelector('#icon6');
const icon7 = document.querySelector('#icon7');
const icon8 = document.querySelector('#icon8');
const icon9 = document.querySelector('#icon9');
const icon10 = document.querySelector('#icon10');


var viewId = 1;1
function nextForm(){
    console.log("hellonext");
    viewId=viewId+1;
    progressBar();
    displayForms();
    
    console.log(viewId);

}

function prevForm(){
    console.log("helloprev");
    viewId=viewId-1;
    console.log(viewId);
    progressBar1();
    displayForms();
}
function progressBar1(){
    if(viewId===1){
        icon2.classList.add('active');
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===2){
        icon2.classList.add('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===3){
        icon3.classList.add('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===4){
        icon4.classList.add('active');
        icon5.classList.remove('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===5){
        icon5.classList.add('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===6){
        icon6.classList.add('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===7){
        icon7.classList.add('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===8){
        icon8.classList.add('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    if(viewId===9){
        icon9.classList.add('active');
        icon10.classList.remove('active');
    }
    if(viewId===10){
        icon10.classList.add('active');
       
    }
    
}

function progressBar(){
    if(viewId===2){
        icon2.classList.add('active');
    }
    if(viewId===3){
        icon3.classList.add('active');
    }
    if(viewId===4){
        icon4.classList.add('active');
    }
    if(viewId===5){
        icon5.classList.add('active');
    }
    if(viewId===6){
        icon6.classList.add('active');
    }
    
    if(viewId===7){
        icon7.classList.add('active');
    }
    if(viewId===8){
        icon8.classList.add('active');
      
    }
    if(viewId===9){
        icon9.classList.add('active');
      
    }
    if(viewId===10){
        icon10.classList.add('active');
      
    }
    if(viewId>10){
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        icon6.classList.remove('active');
        icon7.classList.remove('active');
        icon8.classList.remove('active');
        icon9.classList.remove('active');
        icon10.classList.remove('active');
    }
    
}

function displayForms(){
    
    if(viewId>10){
        viewId=1;
    }

    if(viewId ===1){
        form1.style.display = 'block';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';


    }else if(viewId === 2){
        form1.style.display = 'none';
        form2.style.display = 'block';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display ='none';

    }else if(viewId === 3){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'block';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }else if(viewId === 4){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'block';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }else if(viewId === 5){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'block';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }
    else if(viewId === 6){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'block';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }
    else if(viewId === 7){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'block';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }
    else if(viewId === 8){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'block';
        form9.style.display = 'none';
        form10.style.display = 'none';

    }
    else if(viewId === 9){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'block';
        form10.style.display = 'none';

    }
    else if(viewId === 10){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';
        form6.style.display = 'none';
        form7.style.display = 'none';
        form8.style.display = 'none';
        form9.style.display = 'none';
        form10.style.display = 'block';

    }
}

// for slider
var slider = document.querySelector(".slider");
var output = document.querySelector(".output__value");
output.innerHTML = slider.value ;

slider.oninput = function() {
    output.innerHTML = this.value ;
    
    
}
