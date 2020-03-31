<?php return [
    'common' => [
        'hello' => 'Szia :firstname',
        'view_order_status_online' => 'Ellenőrizd online a rendelésed státuszát',
        'view_order_in_backend' => 'Megrendelés megtekintése az admin felületen',
        'order_details' => 'Rendelés részletei',
    ],
    'payment' => [
        'refunded' => [
            'subject' => 'A befizetésed visszatérítésre került',
            'message' => 'Éppen most térítettük vissza rendelésedre befizetett összeget **#:number**.',
            'duration' => 'Kérlek vedd figyelembe, hogy több napig eltarthat míg megérkezik a visszatérítés.',
        ],
        'paid' => [
            'subject' => 'Befizetésed megérkezett',
            'message' => 'Most érkezett meg a rendelésed ellenértéke **#:number**.',
            'process_order' => 'Most megkezdjük a megrendelés további feldolgozását.',
        ],
        'failed' => [
            'subject' => 'A megrendelés kifizetése nem sikerült',
            'message' => 'Jelezni szeretnénk, hogy a megrendelésed kifizetése sikertelen volt **#:number**.',
            'payment_advice' => 'Kérlek, jelentkezz be fiókodba, és próbáld meg újra kifizetni a megrendelésed.',
            'support' => 'Ha továbbra is problémát tapasztalsz a fizetéssel kapcsolatban, lépjen kapcsolatba velünk.',
        ],
    ],
    'order' => [
        'partials' => [
            'billing_address' => 'Számlázási cím',
            'billing_and_shipping' => 'Számlázási és szállítási cím',
            'shipping_address' => 'Szállítási cím',
            'has_been_paid_on' => 'A megrendelés kifizetésre került',
            'currently_pending' => 'A rendelés kifizetése jelenleg függőben van.',
            'track_shipping_status' => 'A következő információkkal nyomon tudod követni a rendelésed szállítási állapotát:',
        ],
        'state_changed' => [
            'subject' => 'A megrendelés állapota megváltozott',
            'message' => 'A megrendelésednek **#:number** új állapota van: **:state**',
        ],
        'shipped' => [
            'subject' => 'Rendelésed átadtuk a futárnak',
            'message' => 'A rendelésed **#:number** átadtuk a futárnak.',
        ],
    ],
    'customer' => [
        'created' => [
            'subject' => 'Üdv az online áruházunkban, :firstname',
            'confirm_mail' => 'Üdv az online áruházunkban! Kattints az alábbi gombra az e-mail címed megerősítéséhez.',
            'message' => 'Üdv az online áruházunkban! **:email** e-mail cím használatával tudsz belépni, és azonnal neki is foghatsz a vásárlásnak.',
            'possibilities' => 'A felhasználói fiókod lehetővé teszi a nyitott és a múltbeli megrendeléseid nyomon követését.',
            'button' => [
                'confirm' => 'Erősítse meg az e-mail címedet',
                'visit_store' => 'Látogasd meg az online áruházunkat',
            ],
        ],
    ],
    'checkout' => [
        'succeeded' => [
            'subject' => 'Megkaptuk a rendelésed #:number',
            'thanks_for_order' => 'Köszönjük a megrendelést, a következőket rendelted:',
            'check_order_status' => 'A megrendelés állpotát a fiókodban tudod követni.',
        ],
        'failed' => [
            'subject' => 'Hiba történt a rendelési folyamatban #:number',
            'problem_message' => 'Nagyon sajnáljuk, hogy probléma volt a fizetési folyamat során. Megvizsgáljuk a problémát, és felvesszük veled a kapcsolatot.',
            'check_order_status' => 'A rendelésed állapotát bármikor ellenőrizheted, ha belépsz a online shop-ba.',
            'payment_id' => 'Fizetési azonosító',
            'error' => 'Hiba üzenet',
        ],
    ],
    'admin' => [
        'checkout_succeeded' => [
            'subject' => 'Új rendelés #:number',
            'order_placed' => 'A következő rendelés érkezett az online áruházba:',
        ],
        'checkout_failed' => [
            'subject' => 'A fizetés nem sikerült #:number',
            'not_processed' => 'A következő rendelést nem sikerült megfelelően feldolgozni. Lehetséges, hogy kapcsolatba kell lépnünk az ügyféllel.',
            'error_details' => 'Hiba részletei',
            'payment_id' => 'Fizetési azonosító',
            'error' => 'Hibaüzenet',
        ],
    ],
];
