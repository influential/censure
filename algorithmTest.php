<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
    require 'algorithm.php';

    $censorWords = new CensorWords; 
    $assTest = "hello world";
    //$assTest = "Ass ass class pass crass a$$";
    $words = explode(" ", $assTest);
    foreach ($words as $word){
        $result = $censorWords->censorString($word);
        echo $result['count']."   ".$result['orig'];
    }
    
 /*   $givenPost['post'] = "Float like a butterly, sting like a bee
Rumble young nigga rumble!
Lil' mamma want a nigga like me in the sheets
Ice cube knock it out like Deebo
Now who's that talking that gangsta shit
Somebody gonna kick your ass
When I walk up in the club I better make a thunderstorm
Let them know that this a whole lot of cash
Rich niggas on the right all night (rich nigga)
Broke niggas to the left by yourself (brokanese)
Now who the hell just said that the roof on fire?
Call 911 like Wyclef";
    $givenPost['dateTime'] = "10-25-1994";
    $givenPost['likes'] = "15";
    $algorithm = new algorithm($givenPost);
    $algorithm->checkSwears();
    echo ("Score: ".$algorithm->getScore()."\r\n");
    echo("<BR>");
    echo ("Un-Censured Post: ".$algorithm->getPost()."\r\n");
    echo("<BR>");
    echo ("Censured Post: ".$algorithm->getCensoredPost()."\r\n");
    echo("<BR>");
    $givenPost['post'] = "Dope bomb, dro bomb, and a pill bomb See nigga, I'm ballin' you in will call";
    $givenPost['dateTime'] = "10-25-1994";
    $givenPost['likes'] = "15";
    $algorithm = new algorithm($givenPost);
    $algorithm->checkSwears();
    echo ("Score: ".$algorithm->getScore()."\r\n");
    echo("<BR>");
    echo ("Un-Censured Post: ".$algorithm->getPost()."\r\n");
    echo("<BR>");
    echo ("Censured Post: ".$algorithm->getCensoredPost()."\r\n");
    echo("<BR>");
    $givenPost['post'] = "I got the gas and the coke
I don't sell molly no more
I keep the white and the green
And it gotta be a pint if you looking for the lean";
    $givenPost['dateTime'] = "10-25-1994";
    $givenPost['likes'] = "15";
    $algorithm = new algorithm($givenPost);
    $algorithm->checkSwears();
    echo ("Score: ".$algorithm->getScore()."\r\n");
    echo("<BR>");
    echo ("Un-Censured Post: ".$algorithm->getPost()."\r\n");
    echo("<BR>");
    echo ("Censured Post: ".$algorithm->getCensoredPost()."\r\n");
    echo("<BR>");
    $givenPost['post'] = "I rob you blind and burn the money like the fuckin' Joker
And if you don't believe me, ask them hoes at Strokers
";
    $givenPost['dateTime'] = "10-25-1994";
    $givenPost['likes'] = "15";
    $algorithm = new algorithm($givenPost);
    $algorithm->checkSwears();
    echo ("Score: ".$algorithm->getScore()."\r\n");
    echo("<BR>");
    echo ("Un-Censured Post: ".$algorithm->getPost()."\r\n");
    echo("<BR>");
    echo ("Censured Post: ".$algorithm->getCensoredPost()."\r\n");
    echo("<BR>");
    
        $givenPost['post'] = "Young rich nigga, riding round the city with the mac
Take a chopper, and a chicken, now watch the leakin'
Whipping and breaking it, making it, taking it
Nigga they mistake me, think I'm selling that midget, nah for real
What the fuck a nigga really wanna talk about?
You a bitch, we ain't got nothing to talk about
Shaking like a stripper, put that mac chicken in up in his mouth
Skippa Da Flippa, he told me weigh it up, and bust it down
Migo Jerz, whipping that lambo, now watch it swerve
J-1 got PT's, and sold that reserved
I'm a hot boy, so you know I gotta stay low
Quavo told me, trap on the block and bang 'em like OJ Mayo
You niggas are rookie but young Takeoff, I'm a vet
'Set told me trapping and dabbing gon' get that pussy wet
No Crocodile Dundee, Stingray vet
Whatever I wanna do, I do it, Nike check
I'm a young nigga, with the rich nigga ambitions
At the Migo show, a nigga autographing titties
There's levels to this shit like Meek said
And you embarrassed to admit it, I don't want to kick it
After my show, the gangster-ist nigga, he looking suspicious
Walk right up on him, I'm pressing my nigga
And all he wanted was a picture
I used to smoke swishers, like a regular nigga
Now I'm a backwoods type of nigga
A nigga, he run up, tried to rob, I shot him
White people, they still treat me like I'm a victim
Now people they screaming out \"Free Activis\"
They talking bout that Activis be discontinued
Check my cup of muddy trouble, got packs in the attic
Catch me riding with packs in my rental
Trap, trap dab when I'm on the revenue
Cooking a brick, and remix it with the dog food
Diamond brick come with a note on it, nigga you Blues Clues
24 karat my chain, Mr. T pity the fool
Master P, No Limit money, bando jumping like a bungee
Kevin Hart, your money is too short, you too funny
Call me Takeoff Hugh Hefner, I got playboy bunnies
Fuck it, I beat it, she sucking me till a nigga be cumming

Cross the country, cross the country
You may never been there catch me
Cross the country, cross the country, cross the country
Coca leaves, and palm trees, we cross the country
Cross the country, cross the country
She don't understand English, but she want me
Cross the country, cross the country
I had to get a visa, cause I'm in and out the country

When you in the streets, you know you gotta make a name
I stole a mustang, drop top, no brain
Police had a nigga, cause they know I'm in a gang
Taking pictures of a nigga, like a groupie, like a fan
On my first lick, only got a little bit of change
Thinking like Obama, something gotta change
Did a lot of dirt, I had to sit up in the chains
When I got outta jail, did the same thing
I spent that money, money, coming back like boomerang
Cocaine in her nose like a septum ring
My nigga be trapping the gas, propane
Hit the nigga with a chopper, nigga bang bang
I was getting money, way before the rap game
As a young nigga, used to wear the fake chain
They say that I'm ignorant, \$50,000 on a chain
You know it ain't come from Johnny Dang
Fake watch busta can't bust me, no lie
Won't catch me with the fake jewelry, I got too much pride
They killed my nigga Pistol Pete, for a three-five
I pay the ticket, when are you gon' die
When I'm in the kitchen, I be cooking crack pies
I got chickens in the trunk, you think I work at popeyes
The streets is a jungle, my nigga, you better survive
Getting married to the money nigga, that my bride
My diamonds gon' shine, might poke you in the eye
You selling by the ounce, my nigga, you just getting by
Put the birds in my hands, knows when's it gon' fly
Glah! Glah! Glah! In the bushes like a spy
Nigga talking stupid, we don't let that shit fly
Talking crazy to the migos, boy you know we keep the fire
Got that chopper, flip a nigga like a domino
Young rich nigga, never made the honor roll
Hit his ass with the 4 4, make him fold
Chattahoochee river, where that nigga body float
On the nation, my nigga we throwing up the Folks
She on a mission, trying to fuck me, better get your ho
Big bank, take little bank
Yellow diamonds on my rella, like a moon cake
Two Glocks on my hip, like Tomb Raider
Arnold Schwarzenegger, turn into the Terminator
Cross the country, my plug he in Wyoming
And the only time I pull up on you, if a nigga owe me
And the whole word know that a young nigga rap
But a pussy nigga better not provoke me
Came in the game with the formula, sold it
Now I gotta switch it up on you phonies
Pocket full of macaroni, Mac-11, run up on you
All you can eat in my trap, like it's Shoney's
Rich Nigga Timeline: That's my motherfucking testimony
Out in the desert, got bricks in the donkey
Rich nigga, with a pot of gold, like a leprechaun
And I'm thinking 'bout moving to Babylon
My niggas collecting extortion funds
We built an empire, like Megatron
QC the label, Migo the gang
Already told you, I want the M&Ms, fuck the fame
No shame in the game, I'm a bull with the nine
Like Luol Deng, finna bang with the thing
Walking through the crowd, ain't gotta tuck the chain
Get juuged, get capped, that's a part of the game, squad shit
Oh no, I done rolled around the block and I don't see him
I paid a J \$200, just to hit me when he see him
If I was you right now, I wouldn't wanna be him
Caught him two weeks later in the club, with his mamacita
He had some jewelry on him, worth \$100, so I took it from him
Took the first PJ across the country, got too hot for a moment
They say he got work, now I own it
Now my squad, they going up, no Makonnen
In the players pad, at the Caesar's Palace
Out in Las Vegas, like I'm Roman
All types of Euros and Yen
I got money in Berlin
I told the Lord forgive me for my sins
Cause I don't wanna do it again
";
    $givenPost['dateTime'] = "10-25-1994";
    $givenPost['likes'] = "15";
    $algorithm = new algorithm($givenPost);
    $algorithm->checkSwears();
    echo ("Score: ".$algorithm->getScore()."\r\n");
    echo("<BR>");
    echo ("Un-Censured Post: ".$algorithm->getPost()."\r\n");
    echo("<BR>");
    echo ("Censured Post: ".$algorithm->getCensoredPost()."\r\n");
    echo("<BR>");
    */
   ?>