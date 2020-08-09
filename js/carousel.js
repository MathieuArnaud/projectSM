
//////////////// search all div and keep it in var
let currentEl=Array();
let leftBut = document.getElementById('left');
let rightBut = document.getElementById('right');
let classCenter, classLeft, classRight, firstEl, lastEl;


for(let i=0; i<6; i++){ ////////////////////////////////////////// currentEl = all div'class order by id
  currentEl.push(document.getElementById('c'+i).classList.value);
  
}
    window.addEventListener('keyup',(e)=>{
        switch(e.keyCode){
            case 37:
                leftBut.click();
                break;
            case 39:
                rightBut.click();
                break;
                default:
                console.log('keycode : '+e.keyCode + ' key : '+ e.key);
        }
    })
    
    leftBut.addEventListener('click', ()=>{//////////////// left
        firstEl = currentEl[0];
        currentEl.push(firstEl);
        currentEl.shift();
        for(let i=0;i<currentEl.length;i++){
                document.getElementById('c'+i).classList.replace(document.getElementById('c'+i).classList.value,currentEl[i]);

        }
        console.log(currentEl);

                });
       

    rightBut.addEventListener('click',()=>{//////////////////right
        lastEl= currentEl[5];
        currentEl.unshift(lastEl);
        currentEl.pop();
        for(let i=0;i<currentEl.length;i++){
            document.getElementById('c'+i).classList.replace(document.getElementById('c'+i).classList.value,currentEl[i]);

    }

        console.log(currentEl);
        
  
        });
