<?php

function generateQuote() {
	$quotes = ["It's OK to have your eggs in one basket as long as you control what happens to that basket. -Elon Musk", 
				"There have to be reasons that you get up in the morning and you want to live. Why do you want to live? What's the point? What inspires you? What do you love about the future? If the future does not include being out there among the stars and being a multi-planet species, I find that incredibly depressing. -Elon Musk", 
				"I say something, and then it usually happens. Maybe not on schedule, but it usually happens. -Elon Musk",
				"I've actually not read any books on time management. -Elon Musk",
				"If you get up in the morning and think the future is going to be better, it is a bright day. Otherwise, it's not. -Elon Musk",
				"Being an entrepreneur is like eating glass and staring into the abyss of death. -Elon Musk"];
	return $quotes[array_rand($quotes, 1)];
}

$quote = generateQuote();
