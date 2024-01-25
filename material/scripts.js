
function nomedomedicamnto(event){
    const idMedicamento= event.target.id;
    
    const inputPrenc = document.getElementById('nomedomedicamento');
  
    const puxard = document.getElementById(`${idMedicamento}`).innerText;
   
    if (inputPrenc.value !== "") {
        inputPrenc.value= "";
        const des = document.querySelector('.listarMedicamentos');
        des.innerHTML="";
        inputPrenc.value=puxard;
    }else{
        inputPrenc.value=puxard;
        const des = document.querySelector('.listarMedicamentos');
        des.innerHTML="";
    }

}

document.getElementsByTagName('tr')
