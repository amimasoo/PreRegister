
/*https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js
https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js
https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js*/
   /* src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js";
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js";
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js";
    link("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");*/
var result1 = str.link("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
var result2 = str.link("https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js");
var result3 = str.link("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js");
document.getElementById("demo").innerHTML = result1;
document.getElementById("demo").innerHTML = result2;
document.getElementById("demo").innerHTML = result3;