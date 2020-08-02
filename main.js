

!function (c, h, i, m, p) {
     m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) 
    }
    (document, "script", 
    "https://chimpstatic.com/mcjs-connected/js/users/c17679294585398743a38dd77/b1e966787925656bc4597d914.js");

    /////////////////////////////



    
// 

window.setTimeout(sendMailChimp, 2000);
window.setTimeout(returnIndex, 2500);

   function sendMailChimp() {
     console.log("Wait Nerd… email send to mailchimp : " + document.getElementById("mce-EMAIL").value);
     document.getElementById("mc-embedded-subscribe").click();
   }
   function returnIndex(){
    window.location="index.php";
   }