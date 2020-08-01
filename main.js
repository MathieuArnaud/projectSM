

!function (c, h, i, m, p) {
     m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) 
    }
    (document, "script", 
    "https://chimpstatic.com/mcjs-connected/js/users/c17679294585398743a38dd77/b1e966787925656bc4597d914.js");

    /////////////////////////////



    
// 
let timeToSend;

window.setTimeout(sendMailChimp, 2000);

   function sendMailChimp() {
     console.log("C'était long…" + document.getElementById("mce-EMAIL").value);
     document.getElementById("mc-embedded-subscribe").click();
   }
   