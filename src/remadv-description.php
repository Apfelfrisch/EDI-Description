<?php
return [
    'name' => 'Remadv Segment Beschreibung',

    'bgm_type' => [
        '239' => 'Abgelehnte Forderung (Nicht-Zahlungsavis)',
        '481' => 'Zahlungsavis',
    ],

    'invoice_code' => [
        '380' => 'Handelsrechnung',
        '389' => 'Selbst ausgestellte Rechnung',
        '457' => 'Storno einer Belastung',
        'Z25' => 'Storno für selbst ausgestellte Rechnung (Gutschrift im Gutschriftsverfahren)',
    ],

    'answer' => [
        '5' => 'Preis/Rechenregel falsch',
        '9' => 'Falscher Abrechnungszeitraum (innerhalb gültiger Vertragsgrenzen)',
        '28' => 'Sonstiges',
        '14' => 'Unbekannte Marktlokation, Messlokation',
        '53' => 'doppelte Rechnung',
        'Z01' => 'Abrechnungsbeginn ungleich Vertragsbeginn',
        'Z02' => 'Abrechnungsende ungleich Vertragsende',
        'Z03' => 'Betrag der Abschlagsrechnung falsch',
        'Z04' => 'Vorausbezahlter Betrag falsch',
        'Z06' => 'Artikel nicht vereinbart',
        'Z07' => 'Netznutzungsmesswerte / - energiemengen fehlen',
        'Z08' => 'Rechnungsnummer bereits erhalten',
        'Z10' => 'Netznutzungsmesswerte / -energiemengen falsch',
        'Z33' => 'zeitliche Mengenangabe fehlerhaft',
        'Z35' => 'falscher Bilanzierungsbeginn',
        'Z36' => 'falsches Netznutzungsende',
        'Z37' => 'bilanzierte Menge fehlt',
        'Z38' => 'bilanzierte Menge falsch',
        'Z39' => 'Netznutzungsabrechnung fehlt',
        'Z40' => 'Reverse Charge Anwendung fehlt oder unzulässig',
        'Z41' => 'Allokationsliste fehlt',
        'Z42' => 'Mehr-/Mindermenge falsch',
        'Z43' => 'Ungültiges Rechnungsdatum',
        'Z44' => 'Zeitintervall der bilanzierten Menge inkonsistent',
        'Z45' => 'Rechnungsempfänger widerspricht der steuerrechtlichen Einschätzung des Rechnungsstellers',
        'Z52' => 'Angegebene QUOTES an Marktlokation nicht vorhanden',
        'Z53' => 'Rechnungsabwicklung nicht vereinbart',
    ]
];
