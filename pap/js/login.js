const form = document.getElementById('form1');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+$/i;

form.addEventListener('#enter', (event) => {
  event.preventDefault();

  emailValidate();
  mainPasswordValidate();
  
});

function setError(index){

  campos[index].style.border = '4px solid red'; 
  spans[index].style.display ='inline-grid';

}

function removeError(index){

  campos[index].style.border = ''; 
  spans[index].style.display ='none';

}

function emailValidate(){
  if(campos[0].value.length >=0){

    setError(0);
  
  }
  else{

    removeError(0);

  }
}

function mainPasswordValidate(){

  if(campos[1].value.length >=0){

    setError(1);

  }else{
    removeError(1);
  }
}