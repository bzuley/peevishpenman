<?php
// Subscriber preview: linked only from the newsletter sign-up confirmation.
// Kept out of search engines, the sitemap and site search.
header('X-Robots-Tag: noindex, nofollow');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 1: Guards – The Bright Dark Preview</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="A subscriber preview of the first chapter of The Bright Dark, a post-apocalyptic science fiction novel by OA Allen.">
  <meta name="author" content="OA Allen">

  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Serif:ital,wght@0,400;0,600;1,400&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">

  <style>
    .bdc-page {
      --bd-glow: #8CFFEA;
      --bd-glow-soft: #C8FFF3;
      --bd-glow-shadow: #2E9D8B;
      --bd-ember: #D9A25C;
      background: var(--ppm-obsidian);
      color: var(--ppm-text-main);
      overflow-x: hidden;
    }

    .bdc-page * { box-sizing: border-box; }

    .bdc-head {
      padding: clamp(3rem, 10vw, 6rem) 5% clamp(2rem, 6vw, 3.5rem);
      text-align: center;
      background:
        radial-gradient(ellipse at 50% 0%, rgba(140, 255, 234, 0.14), transparent 62%),
        var(--ppm-obsidian);
    }

    .bdc-kicker {
      margin: 0 0 1.25rem;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 500;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--bd-ember);
    }

    .bdc-kicker a {
      color: inherit;
      text-decoration: none;
    }

    .bdc-head h1 {
      margin: 0 0 0.4rem;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      font-size: clamp(2.2rem, 7vw, 3.6rem);
      line-height: 1.05;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: #ffffff;
      text-shadow: 0 0 40px rgba(140, 255, 234, 0.32);
    }

    .bdc-chapter-title {
      margin: 0 0 1.75rem;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 500;
      font-size: clamp(1.2rem, 3vw, 1.6rem);
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--bd-glow-soft);
    }

    .bdc-dateline {
      margin: 0;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.82rem;
      line-height: 1.7;
      letter-spacing: 0.06em;
      color: var(--ppm-text-muted);
    }

    .bdc-text {
      max-width: 38rem;
      margin: 0 auto;
      padding: clamp(1.5rem, 5vw, 3rem) 1.25rem clamp(2.5rem, 7vw, 4rem);
      font-family: "IBM Plex Serif", Georgia, serif;
      font-size: 1.12rem;
      line-height: 1.75;
      color: var(--ppm-text-main);
    }

    .bdc-text p {
      margin: 0;
      text-indent: 1.5em;
    }

    .bdc-text p:first-child { text-indent: 0; }

    .bdc-text p:first-child::first-letter {
      float: left;
      margin: 0.08em 0.1em 0 0;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      font-size: 3.4em;
      line-height: 0.85;
      color: var(--bd-glow);
    }

    .bdc-end {
      margin: 2.5rem 0 0;
      text-align: center;
      font-family: "IBM Plex Mono", monospace;
      letter-spacing: 0.4em;
      text-indent: 0;
      color: var(--bd-glow-shadow);
    }

    .bdc-after {
      padding: clamp(2.5rem, 7vw, 4rem) 5%;
      text-align: center;
      border-top: 1px solid rgba(140, 255, 234, 0.12);
    }

    .bdc-after p {
      max-width: 34rem;
      margin: 0 auto 1.75rem;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.05rem;
      line-height: 1.7;
      color: var(--ppm-text-muted);
    }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="bdc-page">

  <header class="bdc-head">
    <p class="bdc-kicker"><a href="/pages/bright-dark">The Bright Dark</a> &middot; Subscriber Preview</p>
    <h1>Chapter 1</h1>
    <p class="bdc-chapter-title">Guards</p>
    <p class="bdc-dateline">Merchant’s Corridor, Auck City, Auckland<br>20 March 498 PL</p>
  </header>

  <article class="bdc-text">
      <p>Ren was awake, crouched behind the textile factory, running his fingers across a modern word.</p>
      <p>“Power cord,” he mouthed.</p>
      <p>“Power cord—a source of energy,” he repeated earnestly.</p>
      <p>Ren closed his eyes while the sun ascended over the rooftops. Auck City’s rammed earth buildings looked like solid sandstone, but sunlight cut through the timber supports beneath garden terraces on nearly every roof. Long shadows stretched across the cobblestones as the bitter chill of night faded.</p>
      <p>“I need a power cord,” Ren thought.</p>
      <p>He was trying to imagine lightning being tamed by a metal wire when a tiny black spider descended on a silken thread. It hovered next to his shoulder.</p>
      <p>“It’s Recruitment Day,” he told the arachnid. “I’m supposed to be ready for my exam.”</p>
      <p>Ren was twenty and his mom had paid tutors to prepare him for over half his life. He tilted his head.</p>
      <p>“What do you think? Would the moderns be disappointed in us?” he asked.</p>
      <p>No answer.</p>
      <p>Since Ren wasn’t going to learn more about the island’s mythic settlers in the time remaining, he let his scroll close into a tight roll on his lap.</p>
      <p>But the forgotten men and women with their families and dreams blown into the ether often felt more real to him than the living people he passed on the street.</p>
      <p>Ren started to yawn, but the air reeked of vegetable dyes. He slammed his mouth shut.</p>
      <p>“I’m supposed to be the first scribe in my family, but the more I learn, the more I know how much I don’t know,” he said.</p>
      <p>The spider landed on a broken pallet.</p>
      <p>Ren set the scroll on a stone in front of him, narrowed his eyes, and concentrated.</p>
      <p>“Plug it in,” he whispered.</p>
      <p>Nothing.</p>
      <p>“Worth a try,” he told the spider.</p>
      <p>But then a crash—wood on stone—ripped Ren from his sleep-deprived trance. Muffled footsteps reverberated and shouts echoed from within the factory, raising Ren’s hackles.</p>
      <p>Ren sprinted towards the loading door, but Pixel’s outstretched arm blocked him. The short, broad man wore the rough-spun overalls of the standard weaver’s uniform, but never the shirt. A forest of hair sprang from his shoulders.</p>
      <p>“You don’t work today,” said Pixel.</p>
      <p>“Did someone knock down some of the reams again?” asked Ren as he tried to nudge the man aside. “My mom—needs—”</p>
      <p>Pixel raised an eyebrow.</p>
      <p>“I mean Thadine needs that order.”</p>
      <p>“Get to your recruitment, Ren,” said Pixel. “We’ll handle the looms.”</p>
      <p>Ren flexed a pitiful bicep.</p>
      <p>“Tell me you don’t need this raw power in there.”</p>
      <p>Pixel pedaled his fists in the air. Ren ducked, but the hairy man easily overpowered him into a headlock.</p>
      <p>“Boss!” yelped Ren.</p>
      <p>Air flowed back into his lungs as Pixel’s arms loosened.</p>
      <p>“You’re going to tell me what’s in the archive someday,” Pixel warned him. “Don’t be late.” He clapped Ren on the shoulder. “Do you think they’ll let you study your plasmoids?”</p>
      <p>“I’ll probably be handling artifacts in the mines before the sun comes up tomorrow,” said Ren. But if one thing was certain, after his exam, he would not be fixing looms again. “Pixel, the men in my family are warriors. Mom and Ginyan never say anything about it, but—look at me!”</p>
      <p>Ren splayed his fingers across his chest where the muscle should have been.</p>
      <p>“Birds don’t try to fight the panthera, Ren,” said Pixel. “They just fly. Now, get out of here.”</p>
      <p>Marching swiftly across the factory floor, Ren entered the arcade, an arched storefront that opened into the Merchant’s Corridor, one of his city’s main orbital roads. His mom and her workers were straightening stacks of fabrics, preparing to open.</p>
      <p>“Remember, don’t grind your teeth when you concentrate,” said Ren’s mother, rushing to his side in her flowing orange gown that deliberately matched her hair.</p>
      <p>She kissed his forehead.</p>
      <p>“Pukeko,” she said, tousling his hair. “Your father would be proud.”</p>
      <p>Thadine grabbed his new yellow robe from a peg near the main archway. Ren thrust his arms through the wide sleeves. Though he wasn’t going to be a great warrior like his father, he might help reverse engineer lost technologies as a scribe.</p>
      <p>Ren still hesitated at the threshold before entering the street. There was no guarantee he would return as a scribe. If he performed poorly on the exam, he might feed the guard’s labor pool as a mere grunt.</p>
      <p>Ren recited a modern luck prayer.</p>
      <p>“Lights, camera, action,” he murmured, stepping into the city’s main commerce district and joining the bustling crowd.</p>
      <p>“Anything but the mines,” he added.</p>
      <p>Young Auckians in yellow robes, red tunics, and green overalls knocked elbows in the street. Ren shuffled in sync with the crowd navigating the chaos between the stone foundations and the many pillared buildings coated in event posters. A festival for the Annual Recruitment Day filled the market commons. Amid the myriad vendors, the Auckian Guard had erected three canvas yurts to process its newest recruits.</p>
      <p>High above them all, the Auckian Ziggurat, a massive step pyramid, watched their activities, crowned by a bright, listless overcast. Clouds were moving in.</p>
      <p>Ren took a deep breath and straightened his robe. A simple dirt path bore his steps to the three vibrant yurts. His heart thrummed.</p>
      <p>A red guard in leather armour stood beside the red yurt where Ren’s brother was probably testing recruits with the other Captains.</p>
      <p>“Come tame the Wastelands!” the man screamed.</p>
      <p>Ren dodged the oafish assembly. As warriors, they would always be ready to spill blood for the city, but as recruits holding their pikes cock-eyed, they looked like a pincushion.</p>
      <p>In front of the green yurt, recruits in green and grey overalls gathered. With no standards for recruitment, greens were processed rapidly. Most young Auckians would join the guard as common laborers—not Ren.</p>
      <p>He joined the recruits assembled in front of the yellow yurt, which was nestled behind the other two like a forgotten middle child. A woman in a yellow robe was pressing her ear against the yurt’s wooden door, which was carved with the seal of the Yellow Guard—a three-tongued flame. Eyes wide with excitement, she stepped back.</p>
      <p>“He’s finished.”</p>
      <p>The yellow-robed recruits huddled in a semicircle as a tall, gangly man emerged to a cacophony of questions. It was Mingan, Ren’s friend.</p>
      <p>“Postal Apprentice,” he said as he wadded up his orders, avoiding Ren’s gaze.</p>
      <p>“You can’t abandon your post,” shrieked one of the yellow recruits. “Deserters don’t even go to the greens—you won’t get citizenship at all!”</p>
      <p>Mingan tossed the crumpled paper into a brown puddle, but Ren rushed to intercept him.</p>
      <p>“Hey, wait—we can handle anything for two years,” he told his friend as he twisted under the weight of his robe.</p>
      <p>Mingan pulled away and muttered something about the City Administrator before hopping over the fieldstone wall to the market. Ren’s feet stuck to the ground as his friend disappeared. He watched the fragments of the wax seal float apart on the murky surface of the puddle.</p>
      <p>“I don’t blame him,” said a recruit wearing a buttercup veil.</p>
      <p>“Psh—he’s overreacting,” said another young woman. She snickered. “The Postmaster has to wear pants—the Administrator insisted.”</p>
      <p>The young women’s luminous laughter lightened the air, but Ren’s face lengthened. Mingan and he had often joked about working the Taupo Garbage Mines, but Ren never thought he might be posted there alone.</p>
      <p>Ren opened his mouth wide as an epiphany struck.</p>
      <p>“The elders can still think Mingan’s post is filled,” he told the other recruits.</p>
      <p>He looked around, then pressed the broken seal into the mud with his foot. With conspiratorial grins, the yellow recruits tittered—with luck, no one would get that post.</p>
      <p>As Ren withdrew his dripping foot, an elder guard wearing marigold stuck his wiry white beard out the yurt’s door. A hush descended.</p>
      <p>“Is no one going to volunteer?” he asked.</p>
      <p>Silence.</p>
      <p>Disappointment creased his brow. He plucked the veiled woman by the arm and they vanished. Exams resumed.</p>
      <p>A few recruits continued listening at the door as Ren sought a place to rest, leaning against the fieldstone wall. Yellow banners were fluttering briskly over their heads. The veiled woman finished.</p>
      <p>She shook her clenched fists joyfully as she left the yurt. “I’m going to the archive!”</p>
      <p>“That was fast,” someone grumbled.</p>
      <p>Ren smoothed his dark hair back against his scalp. He tried calculating the remaining probability of an archival appointment when Achazya, his tutor, exited the yellow yurt in his beggarly canary robes. The short-nosed scribe had a soft belly and warm heart. His haphazardly trimmed beard covered his round cheeks like stonecrop, but it didn’t hide his youth.</p>
      <p>“I smell barbecue.” Achazya grinned.</p>
      <p>The other elders, all significantly older than Achazya, exited behind him.</p>
      <p>“Is tutoring just a means for you to acquire barbecue beefalo?” asked Ren. He picked at a fleck of mud on his robe. “I haven’t slept for two days and—”</p>
      <p>Achazya was frowning. “You’re a fearless researcher, Ren—and Mingan—”</p>
      <p>Achazya gazed at the puddle. Pieces of the broken seal had surfaced.</p>
      <p>“He never really wanted to be a Yellow Guard.”</p>
      <p>“Okay, but what if this is a dream and I’m actually asleep at the factory—missing my exam?” Ren asked.</p>
      <p>Achazya tried to look serious, but his mouth was fighting a losing battle against a wry grin.</p>
      <p>“Right—when did the Final Global War start?”</p>
      <p>“March of 2075 in the Modern Era,” Ren droned.</p>
      <p>The other recruits were chatting with the elders. Achazya moved to block Ren’s view as if erecting a privacy screen. Ren drew a heavy breath.</p>
      <p>“Three years after the last asteroid,” he continued. “Two years before the Bird Flu. A year before the Cyborg Revolt and the War of the Great Schism—everyone knows all that.”</p>
      <p>“Good—that’s good. But I want you to call our island New Zealand.”</p>
      <p>“There’s scant evidence there was another Zealand,” Ren scoffed.</p>
      <p>“It’s for favor, not accuracy,” said Achazya with a defeated scowl. “The guard marking the scores today is a conspiracist and every point counts.”</p>
      <p>Ren nodded as he looked out over the harbor. In all fairness, he knew any theory about the moderns could be true. The sea kept many secrets.</p>
      <p>Achazya’s round face darkened.</p>
      <p>“Don’t expect questions about plasmoids—except from me,” he said.</p>
      <p>Ren pulled back. “They know my focus was on plasmoids!”</p>
      <p>He glanced around the assembly of aging scribes.</p>
      <p>Achazya sighed. “Ren, your mom owns a factory. Your dad was a hero. People are jealous creatures.”</p>
      <p>Ren calmly pressed the brocaded placket of his yellow robe. “And my brother is Captain Ginyan, our city’s golden child—the Solarian.”</p>
      <p>So much was true. His famous brother was such a well-known warrior he even had a nickname. Ren wasn’t trying to eclipse his family, but the elders still expected competition—or at least entitlement.</p>
      <p>The wooden yurt door slammed against its frame as the first yellow elder went back inside. Others followed.</p>
      <p>A mischievous twinkle suddenly brightened Achazya’s dark eyes. He leaned closer to Ren. Expecting words of encouragement, Ren waited.</p>
      <p>“Does Thadine ask about me?” Achazya dropped his voice to a deep, unnerving rumble and he drew a long steady breath for effect. “I could take good care of your mom, you know.”</p>
      <p>Ren thrust his heel down on his tutor’s toes. Achazya squawked, but they both laughed. His tutor then queued up behind the other scribes and disappeared into the yurt.</p>
      <p>Then a herd of three-horned sheep invaded the space between the three yurts. Their bells clanged conversationally as the beasts bleated. Their oblivious shepherd, with a spine as curved as his crook, drove them straight into the crowd of recruits.</p>
      <p>“Dribbling spoon-fed fieldmouse,” laughed a red.</p>
      <p>“You should be tolerant of elders,” said one of the yellow recruits.</p>
      <p>Ren folded his arms and glared.</p>
      <p>“That’s not my elder,” said the red, lowering his pike.</p>
      <p>It grazed the shepherd’s ear.</p>
      <p>When the elderly man lost his balance, he flailed and landed in one of the larger puddles, tossing his long white hair over his face. To Ren’s chagrin, the raucous crowd of recruits snickered. With a waver in his voice, the shepherd started to call his sheep. No one rushed to help him.</p>
      <p>Reluctantly, Ren wedged his bony shoulders between the old man and the row of red recruits. He tried to hoist up the poor man, but someone planted a foot on Ren’s back and shoved. He landed face-first in the dirty water, which splashed everywhere, coating his face. Ren gathered up the hem of his new yellow robe to protect the brocade from more damage.</p>
      <p>“Put your skirt down!” bellowed a voice cutting across the crowd. “No one wants to see those scrawny little reeds.”</p>
      <p>It was Ginyan. Ren spun on his heels. His temples pounded.</p>
      <p>Captain Ginyan stood among the crowd of reds who circled him like the planets orbiting the sun. Ren’s older brother wore brown leather armour drenched in red paint to resemble dripping blood. With a mane of red hair and arms as thick as his neck, the Solarian bore no resemblance to the easily more forgettable Ren. As a slender young man with a sharp nose and hooded amber eyes, Ren often joked about having all the charisma of the moon at noon.</p>
      <p>The shepherd was crawling away as Ginyan swung his arms in the air to de-escalate the situation.</p>
      <p>Ren’s brother often taunted him as a distraction to manage a crowd. And normally, Ren agreed to it, but this was supposed to be his day—his day.</p>
      <p>“I am not here to be used for crowd control,” said Ren.</p>
      <p>“There is no way that is Captain Ronen’s son.”</p>
      <p>Ren’s head snapped around, but there were too many people speaking to identify one voice among them.</p>
      <p>“It’s his daughter,” another chortled.</p>
      <p>This one Ren recognized—Lumah, their neighbor. Her long brown hair peeked out from her helmet and cascaded over her armour. She was never far from Ginyan.</p>
      <p>Ren stood, rigid and upright. Ginyan and Lumah had always blazed every trail he followed as a child, but not today.</p>
      <p>Ren had no memories of his father, Ronen, but the insults blistered. Growing up in the factory, he cobbled together an image of the man, who felt real—real to Ren. Random vendors and guards all contributed. Generous. Brave. Strong. All the memories together became a man he didn’t know.</p>
      <p>“I am every bit Ronen’s son,” Ren told his older brother. “And when you mock the son of a man like our father—you’re mocking Ronen himself!” he yelled at Lumah.</p>
      <p>He furiously started squeezing dirty water from his new robes.</p>
      <p>Ginyan stepped forward magnanimously and extended a muscular arm around Ren.</p>
      <p>“Let’s go to your yurt and find a different robe to borrow,” he said.</p>
      <p>Ren stood his ground though Ginyan tried to move him.</p>
      <p>And then, Ren jerked his arm away. He left Ginyan, Lumah, and the others behind. The crowd of reds parted as he stomped past, fueled by an infernal wind, his eyes locked on the red yurt.</p>
      <p>“They’re not going to take you, Ren!” Lumah yelled.</p>
      <p>Ren rode a wave of adrenaline to the red yurt’s door. He didn’t knock.</p>
      <p>Ginyan was howling his name as the red door slammed shut with Ren on the other side.</p>
      <p>It was dark.</p>
      <p>The air in the red yurt smelled of the grease warriors used to keep their armour pliable and the faint aroma of a week-old battlefield. With shallow breaths and rapid strides, Ren pounded his warpath into a shaft of light in the center of the enclosure.</p>
      <p>“My father is Captain Ronen,” Ren stammered.</p>
      <p>Pressure tightened around his throat while the red elders eyed him with indifference.</p>
      <p>Hunched in a circle on hard buckwheat cushions, the elder reds were passing around a bowl made from a human skull. Steam wafted under their grey beards.</p>
      <p>Behind the scarred old men, metal shackles hung on the wall.</p>
      <p>“My father deserves the respect of your unit—your whole unit,” said Ren, searching for his courage. “I am his son—Ronen’s son. My brother represents our father. He’s a great warrior, but—”</p>
      <p>One gnarled elder red broke Ren’s concentration with a loud sniff. “Are you here to declare as a warrior?” he asked.</p>
      <p>“No, I just—I don’t—I want my father’s memory honored properly,” said Ren as his heartbeat hit an unholy rhythm. “I was outside. There was this shepherd and the reds—”</p>
      <p>It was too late to leave.</p>
      <p>The yurt’s door opened and closed multiple times. Elder guards from different units entered. Achazya solemnly assumed a position next to a stack of beefalo hide shields. Lumah followed him.</p>
      <p>“We can’t accept him,” said an elder with wispy mutton chops.</p>
      <p>Ren’s neck whipped around to face the man.</p>
      <p>“I’m not applying to your unit. I don’t want to join the reds. I’m here for—” Ren tapped his sternum with his fist to encourage his voice. “—for my father.”</p>
      <p>A very aged red captain with one eye leaned over his knee to steady himself.</p>
      <p>“Captain Ginyan, is this your plasmoid-obsessed brother?” he asked with a voice like wet sandpaper.</p>
      <p>“He’s my brother—Ren.”</p>
      <p>“—small one,” someone grumbled.</p>
      <p>“No, I don’t have a use for him,” said one of the elders.</p>
      <p>“Do you think that’s true?” said someone.</p>
      <p>The elders were speaking over each other.</p>
      <p>“My wife doesn’t want me eating beefalo today.”</p>
      <p>The one-eyed red stood and raised his arms, silencing the people in the yurt.</p>
      <p>“Give him to me,” he said.</p>
      <p>“You can have him, Osric,” said the man with mutton chops.</p>
      <p>The elder reds murmured in agreement. Some laughed.</p>
      <p>Osric, the shriveled fruit of a man with heavy scar tissue stitching his empty socket entirely closed, signaled Ginyan to approach. The Solarian looked petrified, but he stepped forward.</p>
      <p>“Kindly escort your brother outside, Captain,” said Captain Osric.</p>
      <p>“I am not requesting admission,” Ren shouted at the white heads of the red elders.</p>
      <p>Sensing he’d already dug himself into a hole, he considered dropping the shovel. But Ren could not allow them to disrespect his father. He narrowed his eyes, challenging Ginyan to support him—to apologize—something.</p>
      <p>“But if I did request admission, you would have to grant it, because I am Ronen’s son every bit as much as my brother,” Ren said. “I am entitled to a legacy admission. I’m—”</p>
      <p>Achazya drew a line across his neck. He was frantically gesturing at Ren from the back of the yurt as Lumah pulled off her helmet, dark hair sticking to her cheeks. Her wide-eyed disbelief startled Ren.</p>
      <p>Ginyan stepped closer and attempted to seize Ren by the arm.</p>
      <p>“Your balls are bigger than your brains,” Ginyan hissed as Ren stepped back.</p>
      <p>“I have rights.”</p>
      <p>With some effort, Ginyan steered Ren out of the yurt back into the cold morning air. Blood throbbed in the tips of his fingers. Yurts, recruits, and the sky spun. At that moment, he considered running up the ziggurat’s stairs and appealing directly to the Administrator of the city.</p>
      <p>“Let me go back to the yellows,” Ren pleaded.</p>
      <p>“That is not an option,” said Osric, who had followed them out of the red yurt.</p>
      <p>Lumah and Achazya flanked the elder guard as they left the recruitment yurts behind. Gossiping recruits trailed them. Osric led them into the market swinging his atrophied limbs beside his barreled chest like a scarecrow.</p>
      <p>“Okay—keep me in the reds,” said Ren.</p>
      <p>Ginyan pushed him forward.</p>
      <p>“You need people to take inventory and manage logistics,” Ren continued.</p>
      <p>Then, Lumah winced as if bracing for a blunt impact.</p>
      <p>“It’s my birthright. You can’t send me to the greens,” said Ren.</p>
      <p>“Ginyan, tell him,” Osric commanded. “It has to be now.”</p>
      <p>Ren searched the wrinkles on the old man’s face.</p>
      <p>Always more theatrical than necessary, Ginyan circled an enclosure created by a gathering crowd.</p>
      <p>“My brother can’t be a legacy admission,” Ginyan told them all, but he grimaced as he spoke. He locked eyes with his brother. “Ren, you are not Ronen’s son. Your parents aren’t my parents. My mom—our mom found you behind the factory—in a potato sack.”</p>
      <p>Ginyan’s ruddy face strained and his jaw tightened.</p>
      <p>“Say that again,” said Ren.</p>
      <p>Ginyan raised his arms, reaching to embrace Ren. But without thinking, Ren laid his hands on Ginyan’s armour and gave him a powerful thrust—as if he hoped to erase the red-headed warrior from existence.</p>
      <p>“How can you lie like that? Don’t tell me, Ginyan—” he cried. “This—this ends everything. Nothing matters now.”</p>
      <p>Ren spun around and faced Osric.</p>
      <p>“You’re making him say this,” said Ren.</p>
      <p>Lumah was leaning on her pike.  “Ren—he didn’t.”</p>
      <p>Achazya stared at the ground as Ginyan took another step forward.</p>
      <p>“No!” Ren projected his weight forward as his voice cracked. “Who gave you the right?”</p>
      <p>Ren charged at his brother with both arms out. But the Solarian felled him instantly with the strategic placement of his elbow on the side of Ren’s head.</p>
      <p>Amid a blur of shocked faces and heavy grey clouds, Ren regained consciousness and opened his eyes. Pain radiated from his tailbone up his spine as he attempted to lift himself off the dusty cobblestones.</p>
      <p>A single desperate thought intruded—he should go to their mother as he did in so many of his earliest memories. He could run. He would find her and she would stop her work. Ginyan would have to apologize.</p>
      <p>Achazya, Lumah, and Ginyan hung back as Ren dusted off his wet robe.</p>
      <p>They were all adults now, even Ren.</p>
      <p>“Warden, help him,” Osric told Lumah, before turning towards the harbor.</p>
      <p>Lumah yanked Ren’s collar and he scrambled for a foothold.</p>
      <p>“Ginyan, you can go now,” said Osric.</p>
      <p>Ginyan paused. His brown eyes searched Ren for forgiveness like pickpockets on a drunk. “I was asked not to tell you.”</p>
      <p>Ren sneered, still desperately seeking signs it was all a joke.</p>
      <p>Ginyan blocked the sun. His red hair refracted the light. He resembled their mother in so many ways, but Ren did not.</p>
      <p>Lifting his fist to his forehead, he squeezed his eyes shut.</p>
      <p>“I thought I looked like—Ronen,” he said.</p>
      <p>Tears breached his waterlines, but the wind whisked them away. If there had been evidence of his true origin, Ren had ignored it by burying his face in scrolls.</p>
      <p>Although Ginyan appeared ready to say more, he left dutifully at Osric’s urging, returning to the red yurt alone.</p>
      <p>“I should have known,” said Ren.</p>
      <p>“You can sort your family problems when you’re at your new post,” said Osric.</p>
      <p>He hobbled at a grueling pace across the Auck City Commons with the three younger guards in tow.</p>
      <p>Lumah marched directly behind him with her pike tilted and her chin out. They headed to the harbor. By the time they cleared the crowd, Achazya was having trouble breathing.</p>
      <p>“What new post?” Ren asked.</p>
      <p>“Ren, I have the perfect post for a young man like you,” Osric replied.</p>
      <p>Something about the way the old man sized Ren up made him feel like a missing gear for a stalled scheme.</p>
      <p>“With the reds or the yellows?” asked Achazya.</p>
      <p>In front of them, the grey sea roared and Ren willed himself to be transported to its edge or to another time—another dimension.</p>
      <p>Seagulls cawed.</p>
      <p>“I don’t look anything like them,” said Ren.</p>
      <p>It was raining truths and Ren was drenched.</p>
      <p>Ren couldn’t explain what suddenly changed, but he no longer cared about what happened tomorrow or the next day. He had to run—run until he forgot the looks on the faces that watched his legacy vanish. Though even if he could climb out of his skin, it didn’t feel enough.</p>
      <p>“Captain Osric,” he said, shuffling forward so he could walk beside the lopsided old red. “I will take whatever post you have to offer me.”</p>
      <p>“He will not.” Achazya shook his jowls.</p>
      <p>Ren clenched his fists, his jaw—his whole body tensed. “I don’t think there can possibly be a single person in this city worse at planning my future than me.”</p>
      <p>Ren glanced over his shoulder at the ziggurat, ever-present as the ground beneath them. If he had to leave a decade of tutelage on the rubbish pile, he was going to take one lesson from it.</p>
      <p>“I’m serious,” said Ren.</p>
      <p>“He’s really not,” said Lumah.</p>
      <p>Osric might have winked at Ren, but it was hard to tell.</p>
      <p>With his gut churning, Ren followed the elder red, though his legs wobbled like fish aspic.</p>
      <p>“What have I done?” he asked the gawds.</p>
    <p class="bdc-end" aria-hidden="true">* * *</p>
  </article>

  <section class="bdc-after">
    <p>Thanks for reading. <em>The Bright Dark</em> is still a work in progress, and subscribers will be the first to hear when it&rsquo;s published.</p>
    <a class="ppm-button" href="/pages/bright-dark">More About the Book</a>
  </section>

</main>

<?php $ppm_book_page = true; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>
</body>
</html>
