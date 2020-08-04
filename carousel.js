
//////////////// search all div and keep it in var
let currentEl=Array();
let leftBut = document.getElementById('left');
let rightBut = document.getElementById('right');
let classCenter, classLeft, classRight, firstEl, lastEl;
classCenter = document.getElementsByClassName('cCenter')[0];
classLeft = document.getElementsByClassName('cLeft')[0];
classRight = document.getElementsByClassName('cRight')[0];


for(let i=0; i<6; i++){ ////////////////////////////////////////// currentEl = all div'class order by id
  currentEl.push(document.getElementById('c'+i).classList.value);
  
}


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
