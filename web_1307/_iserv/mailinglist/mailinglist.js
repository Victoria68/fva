function MailinglistAction(){var x=document.getElementById("mlemail");if(!x)return false;var re=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;var semail=x.value;if(semail.length==0||!re.test(semail)){alert('la dirección de e-mail es incorrecta');x.focus;return false;}return true;}