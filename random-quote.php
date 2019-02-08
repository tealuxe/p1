<?php
$quotations = ["You'll pay to know what you really think.", 
			   "They may be pink but their money's still green!",
			   "Eternal Salvation -- Or TRIPLE your money back!", 
			   "You know how dumb the average person is? Well, by definition, half of 'em are even dumber than THAT.", 
			   "The stupider it looks, the more important it probably is.",
			   "If humor is based on the misfortune of others, then I suppose you might call me the greatest comedian of all time.", 
			   "I am the global village idiot!",
			   "Pull the wool over your own eyes!"];

/* establish length of array so not hard-coded for random generation */			   
$length = count($quotations);
$quotation = $quotations[rand(0,$length-1)];
?>
