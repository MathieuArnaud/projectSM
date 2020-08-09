

!function (c, h, i, m, p) {
     m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) 
    }
    (document, "script", 
    "https://chimpstatic.com/mcjs-connected/js/users/c17679294585398743a38dd77/b1e966787925656bc4597d914.js");

    /////////////////////////////



    
// 
document.getElementById('mc_embed_signup').style.display="none";
window.setTimeout(sendMailChimp, 1000);


   function sendMailChimp() {
     alert("Wait Nerd… your email : " + document.getElementById("mce-EMAIL").value + ' will be sent to Mailchimp');
     document.getElementById("mc-embedded-subscribe").click();
     window.setTimeout(returnIndex, 500);
   }
   function returnIndex(){
    window.location="index.php";
   }