
function selectQuote() {
  var quoteNum = Math.floor((Math.random() * quote.length) + 1);
 
  var output = "<i>" + quote[quoteNum].text + "</i> ~ <strong>" + quote[quoteNum].who + "</strong> <br/><br/> Learn more about <a href='" + quote[quoteNum].wiki + "' target='_blank'>" + quote[quoteNum].who + "</a> on Wikipedia";
  $("#quotebox").html(output);
}

$(document).ready(function() {
  selectQuote();
});
$("#newquote").click(function() {
  selectQuote();
});

var quote = []
quote[0] = {
  who: "Amelia Earhart ",
  wiki: "https://en.wikipedia.org/wiki/Amelia_Earhart",
  text: "Adventure is worthwhile in itself."
}
quote[1] = {
  who: "Amelia Earhart ",
  wiki: "https://en.wikipedia.org/wiki/Amelia_Earhart",
  text: "The most effective way to do it, is to do it."
}
quote[2] = {
  who: "Amelia Earhart ",
  wiki: "https://en.wikipedia.org/wiki/Amelia_Earhart",
  text: "Never interrupt someone doing what you said couldn't be done."
}
quote[3] = {
  who: "Amelia Earhart ",
  wiki: "https://en.wikipedia.org/wiki/Amelia_Earhart",
  text: "The woman who can create her own job is the woman who will win fame and fortune."
}
quote[4] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "If everyone demanded peace instead of another television set, then there'd be peace."
}
quote[5] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "Time you enjoy wasting, was not wasted."
}
quote[6] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "Imagine all the people living life in peace. You may say I'm a dreamer, but I'm not the only one. I hope someday you'll join us, and the world will be as one."
}
quote[7] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "A dream you dream alone is only a dream. A dream you dream together is reality."
}
quote[8] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "You don't need anybody to tell you who you are or what you are. You are what you are!"
}
quote[9] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "Life is what happens to you while you're busy making other plans."
}
quote[10] = {
  who: "John Lennon",
  wiki: "https://en.wikipedia.org/wiki/John_Lennon",
  text: "Everything is clearer when you're in love."
}
quote[11] = {
  who: "John F. Kennedy",
  wiki: "https://en.wikipedia.org/wiki/John_F._Kennedy",
  text: "Change is the law of life. And those who look only to the past or present are certain to miss the future."
}
quote[12] = {
  who: "John F. Kennedy",
  wiki: "https://en.wikipedia.org/wiki/John_F._Kennedy",
  text: "Let us never negotiate out of fear. But let us never fear to negotiate."
}
quote[13] = {
  who: "John F. Kennedy",
  wiki: "https://en.wikipedia.org/wiki/John_F._Kennedy",
  text: "A man may die, nations may rise and fall, but an idea lives on."
}
quote[14] = {
  who: "John F. Kennedy",
  wiki: "https://en.wikipedia.org/wiki/John_F._Kennedy",
  text: "As we express our gratitude, we must never forget that the highest appreciation is not to utter words, but to live by them."
}
quote[15] = {
  who: "Helen Keller ",
  wiki: "https://en.wikipedia.org/wiki/Helen_Keller",
  text: "The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart."
}
quote[16] = {
  who: "Vince Lombardi",
  wiki: "https://en.wikipedia.org/wiki/Vince_Lombardi",
  text: "Perfection is not attainable, but if we chase perfection we can catch excellence."
}
quote[17] = {
  who: "Steve Jobs",
  wiki: "https://en.wikipedia.org/wiki/Steve_Jobs",
  text: "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it."
}
quote[18] = {
  who: "Milton Berle",
  wiki: "https://en.wikipedia.org/wiki/Milton_Berle",
  text: "I'd rather be a could-be if I cannot be an are; because a could-be is a maybe who is reaching for a star. I'd rather be a has-been than a might-have-been, by far; for a might have-been has never been, but a has was once an are."
}
quote[19] = {
  who: "Milton Berle",
  wiki: "https://en.wikipedia.org/wiki/Milton_Berle",
  text: "If opportunity doesn't knock, build a door."
}
quote[20] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "We know what we are, but know not what we may be."
}
quote[21] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Love all, trust a few, do wrong to none."
}
quote[22] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Good night, good night! Parting is such sweet sorrow, that I shall say good night till it be morrow."
}
quote[23] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Better three hours too soon than a minute too late."
}
quote[24] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "All the world's a stage, and all the men and women merely players: they have their exits and their entrances; and one man in his time plays many parts, his acts being seven ages."
}
quote[25] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "If music be the food of love, play on."
}
quote[26] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "No legacy is so rich as honesty."
}
quote[27] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Love looks not with the eyes, but with the mind, And therefore is winged Cupid painted blind."
}
quote[28] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Better a witty fool than a foolish wit."
}
quote[29] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Like as the waves make towards the pebbl'd shore, so do our minutes, hasten to their end."
}
quote[30] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Brevity is the soul of wit."
}
quote[31] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "To thine own self be true, and it must follow, as the night the day, thou canst not then be false to any man."
}
quote[32] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "The robbed that smiles, steals something from the thief."
}
quote[33] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "How far that little candle throws its beams! So shines a good deed in a naughty world."
}
quote[34] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "There is no darkness but ignorance."
}
quote[35] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "Listen to many, speak to a few."
}
quote[36] = {
  who: "William Shakespeare",
  wiki: "https://en.wikipedia.org/wiki/William_Shakespeare",
  text: "The man that hath no music in himself, Nor is not moved with concord of sweet sounds, is fit for treasons, stratagems and spoils."
}
quote[37] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Believe you can and you're halfway there."
}
quote[38] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Keep your eyes on the stars, and your feet on the ground."
}
quote[39] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Far better is it to dare mighty things, to win glorious triumphs, even though checkered by failure... than to rank with those poor spirits who neither enjoy nor suffer much, because they live in a gray twilight that knows not victory nor defeat."
}
quote[40] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "With self-discipline most anything is possible."
}
quote[41] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Far and away the best prize that life has to offer is the chance to work hard at work worth doing."
}
quote[42] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Great thoughts speak only to the thoughtful mind, but great actions speak to all mankind."
}
quote[43] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Speak softly and carry a big stick; you will go far."
}
quote[44] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "The only man who never makes a mistake is the man who never does anything."
}
quote[45] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Do what you can, with what you have, where you are."
}
quote[46] = {
  who: "Theodore Roosevelt",
  wiki: "https://en.wikipedia.org/wiki/Theodore_Roosevelt",
  text: "Courtesy is as much a mark of a gentleman as courage."
}
quote[47] = {
  who: "Anne Frank",
  wiki: "https://en.wikipedia.org/wiki/Anne_Frank",
  text: "How wonderful it is that nobody need wait a single moment before starting to improve the world."
}
quote[48] = {
  who: "Audrey Hepburn",
  wiki: "https://en.wikipedia.org/wiki/Audrey_Hepburn",
  text: "I believe in pink. I believe that laughing is the best calorie burner. I believe in kissing, kissing a lot. I believe in being strong when everything seems to be going wrong. I believe that happy girls are the prettiest girls. I believe that tomorrow is another day and I believe in miracles."
}
quote[49] = {
  who: "Muhammad Ali ",
  wiki: "https://en.wikipedia.org/wiki/Muhammad_Ali",
  text: "I hated every minute of training, but I said, 'Don't quit. Suffer now and live the rest of your life as a champion."
}
quote[50] = {
  who: "Carl Sagan",
  wiki: "https://en.wikipedia.org/wiki/Carl_Sagan",
  text: "Somewhere, something incredible is waiting to be known."
}
quote[51] = {
  who: "Robin Williams ",
  wiki: "https://en.wikipedia.org/wiki/Robin_Williams",
  text: "No matter what people tell you, words and ideas can change the world."
}
quote[52] = {
  who: "Warren Buffett ",
  wiki: "https://en.wikipedia.org/wiki/Warren_Buffett",
  text: "Someone is sitting in the shade today because someone planted a tree a long time ago."
}
quote[53] = {
  who: "Robert Frost",
  wiki: "https://en.wikipedia.org/wiki/Robert_Frost",
  text: "Two roads diverged in a wood and I - I took the one less traveled by, and that has made all the difference."
}
quote[54] = {
  who: "Thomas A. Edison",
  wiki: "https://en.wikipedia.org/wiki/Thomas_Edison",
  text: "If we did all the things we are capable of, we would literally astound ourselves."
}
quote[55] = {
  who: "George Eliot (Mary Ann Evans)",
  wiki: "https://en.wikipedia.org/wiki/George_Eliot",
  text: "It is never too late to be what you might have been."
}
quote[56] = {
  who: "Mary Kay Ash",
  wiki: "https://en.wikipedia.org/wiki/Mary_Kay_Ash",
  text: "Don't limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you."
}


quote[57] = {
  who: "Maya Angelou",
  wiki: "https://en.wikipedia.org/wiki/Maya_Angelou",
  text: "My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style."
}
quote[58] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "I think that's the single best piece of advice: constantly think about how you could be doing things better and questioning yourself."
}
quote[59] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "Some people don't like change, but you need to embrace change if the alternative is disaster."
}
quote[60] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "When something is important enough, you do it even if the odds are not in your favor."
}
quote[61] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "Brand is just a perception, and perception will match reality over time. Sometimes it will be ahead, other times it will be behind. But brand is simply a collective impression some have about a product."
}
quote[62] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "If you want to grow a giant redwood, you need to make sure the seeds are ok, nurture the sapling, and work out what might potentially stop it from growing all the way along. Anything that breaks it at any point stops that growth."
}
quote[63] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "I don't create companies for the sake of creating companies, but to get things done."
}
quote[64] = {
  who: "Elon Musk",
  wiki: "https://en.wikipedia.org/wiki/Elon_Musk",
  text: "I think it's possible for ordinary people to choose to be extraordinary."
}