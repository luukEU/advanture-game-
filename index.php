<?php
/*********************************************************************
* Auteur: ChatGPT (voor Renate)
* Datum: 2025-04-09
* Omschrijving: Fantasie-avonturenspel - Quest for the Crystal Key
* Versie: 1.0.0
**********************************************************************/

// Deze variabele bevat ASCII-art die wordt weergegeven als je wint.
// De "\n" zorgt voor een nieuwe regel. De punt (.) voegt strings samen.
$win =  "     .-'''''-.\n" .
        "   .'         `.\n" .
        "  :             :\n" .
        "  |  You found  |\n" .
        "  : the CRYSTAL :\n" .
        "   `.   KEY!  .'\n" .
        "     `-...-'\n" .
        "      /     \\\n" .
        "     |       |\n" .
        "     \\_____/ \n";

// Introductie van het spel via printf (gebruikt om tekst naar het scherm te printen)
printf("Welkom bij 'Quest for the Crystal Key'!\n\n");

// ASCII-kunst van een fantasiewezen voor sfeer
printf("        /\\      /\\ \n");
printf("       {  `---'  }\n");
printf("       {  O   O  }\n");
printf("       ~~>  V  <~~\n");
printf("        \\  \\|/  /\n");
printf("         `-----'____\n");
printf("         /     \\    \\_\n");
printf("        {       }\\  )_\\_   _\n");
printf("        |  \\_/  |/ /  \\_\\_/ )\n");
printf("         \\__/  /(_/     \\__/\n");
printf("           (__/\n\n");

// Eerste scène van het spel
printf("Je wordt wakker in een oud bos met een gloeiende kaart in je hand.\n");
printf("Twee paden liggen voor je:\n");
printf("1. Een donkere tunnel onder de berg.\n");
printf("2. Een brug over mistige wateren.\n");
printf("Kies 1 of 2:\n");

// Haal de invoer van de gebruiker op via readline (alleen via CLI)
$userChoice = readline("");

// Controleer wat de gebruiker heeft gekozen
if ($userChoice == 1) {
    // Speler koos voor de tunnel
    printf("Je betreedt de tunnel en vindt een gang met fakkels en vreemde tekens.\n");
    printf("1. Volg de gang dieper de berg in.\n");
    printf("2. Klim door een scheur in de muur.\n");
    printf("Kies 1 of 2:\n");

    // Haal opnieuw de keuze van de speler op
    $userChoice = readline("");

    // Als je dieper de gang in gaat: gewonnen!
    if ($userChoice == 1) {
        printf("Je vindt een gloeiend voetstuk met de Crystal Key erop!\n\n");
        printf("%s", $win);  // Toon de win-ascii-art
    }
    // Als je via de muur probeert te klimmen: game over
    elseif ($userChoice == 2) {
        printf("Je komt vast te zitten in de nauwe doorgang. Uren verstrijken... EINDE\n");
    }

} elseif ($userChoice == 2) {
    // Speler koos voor de brug
    printf("Terwijl je de brug oversteekt verschijnt er een trol!\n");
    printf("1. Bied hem een glanzende munt aan.\n");
    printf("2. Probeer hem aan te vallen.\n");
    printf("Kies 1 of 2:\n");

    // Haal opnieuw de keuze op
    $userChoice = readline("");

    // Munt aanbieden = winnen!
    if ($userChoice == 1) {
        printf("De trol glimlacht en laat je door. Aan de overkant vind je de Crystal Key!\n\n");
        printf("%s", $win);  // Toon de win-ascii-art
    }
    // Trol aanvallen = verliezen
    elseif ($userChoice == 2) {
        printf("De trol slaat je van de brug af... EINDE\n");
    }
}
?>
