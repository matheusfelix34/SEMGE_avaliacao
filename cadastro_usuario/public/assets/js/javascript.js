(function(win,doc){
    'use stict';

function comfirmDel(event){

    event.preventDefault();
    //console.log(event.target.parentNode.href);
    let token=doc.getElementsByName("_token")[0].value;
    if(confirm("Deseja mesmo deletar?")){
        let ajax=new XMLHttpRequest();
        ajax.open("DELETE", event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN' ,token);
        ajax.onreadystatechange=function(){
            if(ajax.readyState === 4 && ajax.status === 200){
               win.location.href="crud";
            }
        };
        ajax.send();

    }else{
        return false;
    }
    
} 
    if(doc.querySelector('.js-del')){
        let btn=doc.querySelectorAll('.js-del');
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click' ,comfirmDel,false);
            
        }
    }
    //se existir o elemento na pag, vai ser executa a ação
    //fazemos isso pois pode haver outros links  no js que podem causar erro na funcao deletar

})(window,document);