<!-- David, John Paul S.   WD-201 -->
<?php
//Variables
$Stitle = "Proi Proi";
$Sartist = "HOYO-MIX & NIDA ";
$Smood = "Hopeful";

//Numeric values, Operators, and Type juggling
$SverseCount = 0.002 * "10e+2" ;
$SrepeatChorus = 2 + true; 

//Nouns Array
$nouns = ["legends", "deeds", "bloodlines", "trees", "seed", "achievements", "ash",
  "sky", "reeds"];
//Verbs Array
$verbs = ["shatter", "denotes", "grow", "rise", "endure", "suffer", "lose", "bleed",
  "clash"];
//Adjectives Array
$adjectives = ["weak", "brand new", "untied"];
//Chorus Array
$chorus = [
"You and I are $adjectives[0] like the $nouns[8]",
"But chasing flames is carved into creed, oh",
"Cleave the darkness, and seize the light",
"Daybreak's meant to be free",
"We are gonna $verbs[0] the ties",

"Let's defy the judgment of flaws",
"Would rather die than kneel down or crawl, oh",
"Cleave the darkness, and seize the light",
"Daybreak's meant to be free",
"We are gonna $verbs[0] the ties",

"You and I are $adjectives[0] like the $nouns[8] (Ah)",
"But chasing flames is carved into creed, oh",
"Cleave the darkness, and seize the light",
"A $adjectives[1] dawn's within reach",
"We are gonna make it $adjectives[2]",
];

$intro = [
"(Woah-woah-oh)",
"(Woah-woah-oh-oh-oh)"
];

$verse = [
"$nouns[0] aren't born that way",
"But by $nouns[1]",
"$nouns[2] $verbs[1] nothing",
"How do towering $nouns[3] $verbs[2] from a $nouns[4]?",
"And $nouns[5] $verbs[3] from the $nouns[6]?",
"We $verbs[4] and $verbs[5], $verbs[6] and $verbs[7]",
"Still we $verbs[8] against the $nouns[7]",

"Time's worn away the lives",
"And bygones",
"Leaving faith to resound",
"Behold all the pioneering souls",
"In the gloom, they strive to flash",
"Though the journey's filled with wounds and tolls",
"Still we $verbs[8] against the $nouns[7]"
];

$bridge = [
"(Ooh, ooh, ooh)",
"(You and I still $verbs[8] against the $nouns[7])",
"(You and I, we are gonna free to $verbs[3])",
"(You and I still $verbs[8] against the $nouns[7])",
"(You and I, we are gonna free to $verbs[3])",
"(You and I still $verbs[8] against the $nouns[7])",
"(You and I, we are gonna free to $verbs[3])",
"(You and I still $verbs[8]against the $nouns[7])",
"(Oh, oh, oh, ohh)"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proi Proi Lyrics</title>

    <!-- CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg,rgb(82, 48, 70), #1f2937);
            font-family: Arial, Helvetica, sans-serif;
            color: #f3f4f6;
        }

        .encase {
            background: rgba(255, 255, 255, 0.08);
            max-width: 700px;
            margin: 40px auto;
            padding: 25px 35px;
            border-radius: 12px;
            backdrop-filter: blur(3px);
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }

        h1, h3, h4 {
            text-align: center;
            margin: 5px 0;
        }

        p {
            line-height: 1.6;
            margin: 6px 0;
        }

        p:first-of-type {
            margin-top: 15px;
        }

        .titleLabel {
            margin-top: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #93c5fd;
        }
    </style>
</head>
<body>
<div class="encase">
    <h1><?= $Stitle ?></h1>
    <h3>By: <?= $Sartist ?></h3>
    <h4>Mood: <?= $Smood ?></h4>
    <h4>Song info: Verse Count - <?= $SverseCount ?> & Chorus - <?= $SrepeatChorus ?></h4>
    <br>
    <p class="titleLabel">[Intro]</p>
    <p><?= $intro[0] ?></p>
    <p><?= $intro[1] ?></p>
    <p><?= $intro[0] ?></p>
    <p><?= $intro[1] ?></p>
    <p><?= $intro[0] ?></p>
    <p><?= $intro[1] ?></p>
    <p><?= $intro[0] ?></p>
    <br>
    <p class="titleLabel">[Verse 1]</p>
    <p><?= $verse[0] ?></p>
    <p><?= $verse[1] ?></p>
    <p><?= $verse[2] ?></p>
    <p><?= $verse[3] ?></p>
    <p><?= $verse[4] ?></p>
    <p><?= $verse[5] ?></p>
    <p><?= $verse[6] ?></p>
    <br>
    <p class="titleLabel">[Chorus]</p>
    <p><?= $chorus[0] ?></p>
    <p><?= $chorus[1] ?></p>
    <p><?= $chorus[2] ?></p>
    <p><?= $chorus[3] ?></p>
    <p><?= $chorus[4] ?></p>
    <br>
    <p class="titleLabel">[Verse 2]</p>
    <p><?= $verse[7] ?></p>
    <p><?= $verse[8] ?></p>
    <p><?= $verse[9] ?></p>
    <p><?= $verse[10] ?></p>
    <p><?= $verse[11] ?></p>
    <p><?= $verse[12] ?></p>
    <p><?= $verse[13] ?></p>
    <br>
    <p class="titleLabel">[Chorus]</p>
    <p><?= $chorus[5] ?></p>
    <p><?= $chorus[6] ?></p>
    <p><?= $chorus[7] ?></p>
    <p><?= $chorus[8] ?></p>
    <p><?= $chorus[9] ?></p>
    <br>
    <p class="titleLabel">[Bridge]</p>
    <p><?= $bridge[0] ?></p>
    <p><?= $bridge[1] ?></p>
    <p><?= $bridge[2] ?></p>
    <p><?= $bridge[3] ?></p>
    <p><?= $bridge[4] ?></p>
    <p><?= $bridge[5] ?></p>
    <p><?= $bridge[6] ?></p>
    <p><?= $bridge[7] ?></p>
    <p><?= $bridge[8] ?></p>
    <br>
    <p class="titleLabel">[Chorus]</p>
    <p><?= $chorus[10] ?></p>
    <p><?= $chorus[11] ?></p>
    <p><?= $chorus[12] ?></p>
    <p><?= $chorus[13] ?></p>
    <p><?= $chorus[14] ?></p>
    <br>
    <p class="titleLabel">[Outro]</p>
    <p><?= $intro[0] ?></p>
    <p><?= $intro[1] ?></p>
    <p><?= $intro[0] ?></p>
    <p><?= $intro[1] ?></p>
</div>
</body>
</html>
