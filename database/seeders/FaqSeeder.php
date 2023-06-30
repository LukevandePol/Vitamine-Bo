<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Welkom in het klanten portaal van Vitamine Bo!',
            'answer' => 'Als u de eerste keer inlogt kan dat overwelmend zijn. In het klanten portaal vind u al uw gegevens, bestellingen en kunt u alle gewenste aanpassingen doen.',
            'page' => 'klant-dashboard',
        ]);

        Faq::create([
            'question' => 'Wat kan ik doen met mijn nieuwe bestelling?',
            'answer' => 'Hier kunt u alle bestelling inzien die u geplaatst heeft. Vanaf hier kunt u ook een nieuwe bestelling plaatsen.',
            'page' => 'klant-dashboard',
        ]);

        Faq::create([
            'question' => 'Wat betekent het kopje "Goedkeuring aanpassing"?',
            'answer' => 'Hier vind u de actuele status van je bestelling, nadat u een wijziging heeft aangebracht aan uw bestelling. Zodra Vitamine Bo de aanpassing heeft beoordeeld, wordt de nieuwe status van uw bestelling hier weergegeven.',
            'page' => 'klant-dashboard',
        ]);

        Faq::create([
            'question' => 'Ik wil mijn facturen inzien.',
            'answer' => 'Op het klanten dashboard vind u een kopje "Facturen" hier vind u uw facturen per maand. Wilt u alle facturen bekijken, dan kunt u op de link onder het blok doorgaan naar een overzicht van al uw facturen.',
            'page' => 'klant-dashboard',
        ]);

        Faq::create([
            'question' => 'Waar vind ik mijn recente bestellingen?',
            'answer' => 'Uw recente bestellingen kunnen onderin de pagina gevonden worden. Hier kunt u de bezorgdatum, bezorgadres en de prijs vinden. Ook kunt u hier de status van uw bestelling zien.',
            'page' => 'klant-dashboard',
        ]);

        Faq::create([
            'question' => 'Mag ik ten alle tijden mijn accountgegevens aanpassen?',
            'answer' => 'U bent geheel vrij in het aanpassen van uw accountgegevens, wel moet u erom denken dat het bezorg- en factuuradres klopt. Hier worden namelijk de bestelling en belangrijke documenten naartoe gestuurd.',
            'page' => 'account',
        ]);

        Faq::create([
            'question' => 'Hoef ik niks anders in te vullen dan mijn postcode en huisnummer?',
            'answer' => 'Nee, wij hebben alleen uw postcode en huisnummer nodig. Wij hebben een koppeling met het Nationaal Georegister, hier wordt de rest van de data opgehaald, inclusief uw straat en plaats.',
            'page' => 'account',
        ]);
    }
}
