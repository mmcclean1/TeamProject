<!--Random quote generator - just add to sidebar or where ever, css it up, and BAM! Random quotes. Can easily add more if needed -->
<div id='quotes'>
<?php
	$quotes = array(
		array("The Way Get Started Is To Quit Talking And Begin Doing.","Walt Disney"),
		array("The Pessimist Sees Difficulty In Every Opportunity. The Optimist Sees Opportunity In Every Difficulty.","Winston Churchill"),
		array("Don’t Let Yesterday Take Up Too Much Of Today.","Will Rogers"),
		array("You Learn More From Failure Than From Success. Don’t Let It Stop You. Failure Builds Character.","Unknown"),
		array("If You Are Working On Something That You Really Care About, You Don’t Have To Be Pushed. The Vision Pulls You.","Steve Jobs"),
		array("People Who Are Crazy Enough To Think They Can Change The World, Are The Ones Who Do.","Rob Siltanen"),
		array("Imagine Your Life Is Perfect In Every Respect; What Would It Look Like?","Brian Tracy"),
		array("Whether You Think You Can Or Think You Can’t, You’re Right.","Henry Ford"),
		array("Security Is Mostly A Superstition. Life Is Either A Daring Adventure Or Nothing.","Helen Keller"),
		array("The Man Who Has Confidence In Himself Gains The Confidence Of Others.","Hasidic Proverb"),
		array("The Only Limit To Our Realization Of Tomorrow Will Be Our Doubts Of Today.","Franklin D. Roosevelt"),
		array("Creativity Is Intelligence Having Fun.","Albert Einstein")
	);
	$random = rand(0,11);
	echo $quotes[$random][0]."<br> - ".$quotes[$random][1];
?>
</div>