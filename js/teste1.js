/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Enviar(){
   // document se refere a pagina qe esta sendo trabalhada
    var nome = document.getElementById("nomeid");
    
    if(nome.value !=""){
    alert('Obrigado Sr(a). '+nome.value+' os seus dados foram encaminhados com sucesso!');    
    }
}


