<?php

return [
    'name' => 'Utilmd Segment Beschreibung',

    'bgm_type' => [
        'E01' => 'Anmeldung (Netznutzung)',
        'E02' => 'Abmeldung (Netznutzung)',
        'E03' => 'Änderungsmeldung',
        'E27' => 'Anfrage',
        'E35' => 'Kündigung Liefervertrag',
        'E44' => 'Informationsmeldung (Zur Auflösung der Lieferkonkurenz)',
        'E48' => 'Anmeldung Beistellung',
        'E50' => 'Abmeldung Beistellung',
        'Z08' => 'Neuzuordnung vom Zählpunkt',
        'Z26' => 'Vorläufige Meldung zur Marktraumumstellung',
        'Z38' => 'Synchronisationsmeldung',
    ],

    'reason' => [
        'E01' => 'Ein-/Auszug (Umzug)',
        'E02' => 'Ein-Auszug/Neuanlage',
        'E03' => 'Lieferantenwechsel',
        'E05' => 'Stornierung',
        'E06' => 'Ersatzbelieferung',
        'Z02' => 'Kündigung Lieferantenrahmenvertrag',
        'Z03' => 'Ersat-z oder Grundversorgung (Alte Version)',
        'Z26' => 'Information über existierende Zuordnung.',
        'Z33' => 'Auszug/Stillegung',
        'Z36' => 'EoG aus Ein-/Auszug (Umzug)',
        'Z37' => 'EoG wegen Einzug in Neuanlage',
        'Z39' => 'EoG aus vorübergehendem Anschluss',
        'Z41' => 'Ende der ESV ohne Folgelieferung',
        'Z42' => 'Keinen Code',
        'Z46' => 'Änderungsmitteilung nicht bilanzierungsrel. Daten',
        'Z47' => 'Änderungsmitteilung von bilanzierungsrel. Daten',
        'ZAM' => 'Stammdaten BK-Treue',
        'ZAN' => 'Korrektur Abrechnungsdaten BK-Abrechnung verbrauchender MaLo',
        'ZAO' => 'Korrektur Abrechnungsdaten BK-Abrechnung erzeugender MaLo',
        'ZC6' => 'EoG aus Bilanzkreisschließung',
        'ZC7' => 'EoG aufgrund Erlöschen der Zuordnungsermächtigung',
        'ZC8' => 'Beendigung der Zuordnung',
        'ZC9' => 'Aufhebung einer zukünftigen Zuordnung',
        'ZD2' => 'Ersatzversorgung',
        'ZD9' => 'Beendigung wegen Rückzuordnungsmeldung',
        'ZE3' => 'Stammdatenänderung',
        'ZE6' => 'Nicht bila.rel. Änderung vom LF',
        'ZE6' => 'Nicht bilanzierungsrelevante Änderung vom LF',
        'ZE7' => 'Nicht bila.rel. Änderung vom NB',
        'ZE7' => 'Nicht bilanzierungsrelevante Änderung vom NB',
        'ZE8' => 'Änderung vom MSB mit Abhängigkeiten',
        'ZE9' => 'Bila.rel. Änderung vom LF',
        'ZF0' => 'Bila.rel. Änderung vom NB',
        'ZF1' => 'Änderung der Bilanzierungsgrundlage',
        'ZF2' => 'Korrek[$value]tur der ID der Markt- bzw. Messlokation bzw. Tranche vom NB',
        'ZF3' => 'Nicht bila.rel. Anfrage an LF',
        'ZF4' => 'Nicht bila.rel. Anfrage an NB',
        'ZF5' => 'Anfrage an MSB mit Abhängigkeiten',
        'ZF6' => 'Bila.rel. Anfrage an LF ',
        'ZF7' => 'Bila.rel. Anfrage an NB ohne Abhängigkeiten',
        'ZF8' => 'Nicht bila.rel. Anfrage an NB',
        'ZF8' => 'Nicht bila.rel. Anfrage an NB',
        'ZF9' => 'Bila.rel. Anfrage an NB mit Abhängigkeiten',
        'ZG5' => 'Aufhebung einer zukünftigen Zuordnung aufgrund §38 EEG 2014 bzw. § 21b Abs. 1 Nr. 2 EEG 2017',
        'ZG6' => 'Beendigung der Zuordnung aufgrund EEG 2014 §38',
        'ZG9' => 'Aufhebung einer zukünftigen Zuordnung wegen Auszug des Kunden',
        'ZH0' => 'Aufhebung einer zukünftigen Zuordnung wegen Anmeldung eines anderen Lieferanten zu einem früheren Termin',
        'ZH1' => 'Aufhebung einer zukünftigen Zuordnung wegen Stilllegung',
        'ZH2' => 'Aufhebung einer zukünftigen Zuordnung wegen aufgehobenem Vertragsverhältnis',
        'ZP0' => 'Stammdatensynchronisation Beginn der Aggregationsverantowrtung',
        'ZP1' => 'Stammdatensynchronisation',
        'ZP2' => 'Stammdatensynchronisation Korrektur des Beginns der Aggregationsverantowrtung',
        'ZP3' => 'Stammdaten',
        'ZP4' => 'Werte',
        'ZQ7' => 'Abmeldung wg. fehl. Zuordnungsermächtigung',
        'ZQ7' => 'Abmeldung wg. fehl. Zuordnungsermächtigung',
        'ZR9' => 'Kündigung aufgrund Vertrag mit Anschlussnehmer',
        'ZS3' => 'Nicht bila.rel. Änderung NNA vom NB an Marktlokation',
        'ZS5' => 'Nicht bila.rel. Änderung Abrechnung Blindarbeit vom NB',
        'ZS6' => 'Nicht bila.rel. Anfrage Abrechnung Blindarbeit an NB',
        'ZS8' => 'Nicht bila.rel. Anfrage Abrechnung Blindarbeit an LF',
        'ZT0' => 'Abmeldung wegen fehl. Zuordnungsermächtigun g aufgrund Änderung ZRT',
        'ZT4' => 'Ende wegen Kündigung durch LF',
        'ZT5' => 'Ende wegen Kündigung durch Kunde/LFN',
        'ZT6' => 'EoG wegen Kündigung durch LF',
        'ZT7' => 'EoG wegen Kündigung durch Kunde/LFN',
        'ZU1' => 'Änderung von MSB <Abrechnungsdaten',
        'ZX2' => 'Abrechnungsdaten BK-Abrechnung erzeugender Malo',
        'ZX3' => 'Abrechnungsdaten BK-Abrechnung verbrauchender MaLo',
        'ZX4' => 'Abrechnungsdaten NNA',
        'ZX5' => 'Änderung Blindabrechnungsdaten der NeLo',
        'ZX6' => 'Änderung Daten der MaLo',
        'ZX7' => 'Änderung Daten der MeLo',
        'ZX8' => 'Änderung Daten der NeLo',
        'ZX9' => 'Änderung Daten der SR',
        'ZY0' => 'Änderung Daten der TR',
        'ZY1' => 'Änderung Daten der Tranche',
        'ZY2' => 'Änderung der Lokationsbündelstruktur',
        'ZY4' => 'Antwort auf GDA an MSB',
        'ZY5' => 'Antwort auf GDA (Strom an Gas)',
        'ZY6' => 'Antwort auf GDA erzeugende MaLo',
        'ZY7' => 'Antwort auf GDA verbrauchende MaLo',
        'ZY9' => 'Daten auf individuelle Bestellung',
        'ZZA' => 'Änderung Paket-ID der MaLo',
        'ZJ4' => 'Übernahme aufgrund nicht erfolgtem iMS-Einbau',
    ],

    'reason_addition' => [
        'ZW3' => 'Erzeugende Marktlokation',
        'ZW4' => 'Verbrauchende Marktlokation',
        'ZW5' => 'Tranche',
        'ZW6' => 'Pauschale Marktlokation',
        'ZW7' => 'Gemessene Marktlokation',
        'ZAP' => 'ruhende Marktlokation',
    ],

    'accepted_answer' => include(__DIR__ . '/utilmd-accepted-answers.php'),

    'denied_answer' => include(__DIR__ . '/utilmd-denied-answers.php'),

    'answer' => array_merge(
        include(__DIR__ . '/utilmd-accepted-answers.php'),
        include(__DIR__ . '/utilmd-denied-answers.php'),
    ),

    'supply_direction' => [
        'Z07' => 'Verbrauch',
        'Z06' => 'Erzeugung',
    ],
    //Wird nicht mehr benutzt
    'profile_type' => [
        'Z02' => 'Standardlastprofil',
        'Z03' => 'Tagesparameterabhängiges Lastprofil',
    ],

    'profile_method' => [
        'E01' => 'Synthetisch',
        'Z10' => 'Analytisch',
    ],
    //Wird nicht mehr benutzt
    'accounting_base' => [
        'E01' => 'RLM',
        'E02' => 'SLP/SEP',
        'E14' => 'TLP/TEP',
        'E24' => 'TLP mit gemeinsamer Messung',
        'Z29' => 'Pauschale Marktlokation',
    ],
    //Wahrscheinlich nur Strom
    'time_series_type' => [
        'LGS' => 'RLM', //Lastgangsumme
        'SLS' => 'SLP', //Standardlastprofilsumme
        'TLS' => 'TLP', //Tagesparameterabhängige Lastprofilsumme
    ],
    //Strom + Gas
    'forecast_type' => [
        'ZA6' => 'Prognose auf Basis von Profilen',
        'ZC0' => 'Prognose auf Basis von Werten',
    ],

    'customer_group' => [
        'Z15' => 'Haushaltskunde',
        'Z18' => 'Kein Haushaltskunde',
    ],

    'voltage_level' => [
        'E03' => 'Höchstspannung',
        'E04' => 'Hochspannung',
        'E05' => 'Mittelspannung',
        'E06' => 'Niederspannung',
        'E07' => 'Hös/HS Umspannung',
        'E08' => 'HS/MS Umspannung',
        'E09' => 'MS/NS Umspannung',
    ],

    'reading_transfer_case' => [
        'AMR' => 'fernauslesbare Zähler',
        'MMR' => 'manuell ausgelesene Zähler',
    ],

    'aggregation_responsible' => [
        'ZA9' => 'ÜNB',
        'ZA8' => 'NB',
    ],
];
