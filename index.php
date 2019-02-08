<?php require('random-quote.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>J.R. "Bob" Dobbs Profile</title>
      <meta name="description" content="Bob Dobbs Profile">
      <meta name="author" content="Bob Dobbs">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/skeleton.css">
	  <link rel="stylesheet" href="css/main.css">
      <link rel="icon" type="image/png" href="images/favicon.png">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="seven columns" >
               <h1>J.R. "Bob" Dobbs</h1>
               <p><img src="/images/Mx3y.gif" alt="Profile Image"></p>
               <h2>About Me</h2>
               <p>Friendly greetings! I am J.R. "Bob" Dobbs, the world's greatest salesman and the avatar of slack. I have been selling slack since the dawn of time. If you're seeking some of that good 'ole slack, head on over to my Evil Dudes Fun Club or tune in to the Hour of Slack at the Church of the Subgenius <a href="http://www.subgenius.com/">homepage</a>. I was killed in Dallas in 1963, and the world is now at a loss. Good night and good luck!</p>
               <h2>Random Quotation</h2>
               <p><?php echo $quotation; ?>
            </div>
         </div>
      </div>
   </body>
</html>

