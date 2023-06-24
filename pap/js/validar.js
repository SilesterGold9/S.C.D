const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+$/i;


function setError(index){

  campos[index].style.border = '4px solid red'; 
  spans[index].style.display ='inline-grid';

}

function removeError(index){

  campos[index].style.border = ''; 
  spans[index].style.display ='none';

}

function nameValidate(){
  if(campos[0].value.length < 3){

    setError(0);
  
  }
  else{

    removeError(0);

  }
}

function emailValidate(){
  if(!emailRegex.test(campos[1].value)){
    setError(1);
  }
  else{
    removeError(1);

  }
}

function phoneValidate(){
  if(campos[2].value.length < 9){
    setError(2);
  }else{
    removeError(2);
  }
}

function mainPasswordValidate(){

  if(campos[3].value.length < 6){

    setError(3);

  }else{
    removeError(3);
  }
}
