///// on click -> diplay none or display flex
///// onscroll -> diplay none or display flex




let viewVideo = true;
let article =document.querySelector('article');
let divBtn =document.getElementById('btn')





divBtn.addEventListener('click',(e)=>{
console.log(e)
    if(viewVideo==true){
        article.style.display="none";
        divBtn.classList.replace('btn','clicked');
        divBtn.childNodes[0].innerHTML="Retourner en haut";
        viewVideo=false;
    } else{
        article.style.display="flex";
        divBtn.classList.replace('clicked','btn');
        divBtn.childNodes[0].innerHTML="RESERVER UN ESSAI";
        viewVideo=true;
    }
})


