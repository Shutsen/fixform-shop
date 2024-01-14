<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Achel blond',
            'description' => 'De neus van deze hergiste tripel getuigt van een zeer fijne hoppigheid, gecombineerd met zoet-moutige en florale toetsen. In de mond maakt de smaak alle beloften van de geur waar na een zoete aanzet komen de bloemetjes en de hop. Na de volle smaak volgt een lange afdronk, waarin de bitterheid door fluweelzachte mouttoetsen wordt getemperd.',
            'price' => 2.00,
            'image' => 'https://res.cloudinary.com/dzecfxbka/image/upload/v1/lekker-limburgs/achel-blond-33cl.png'
        ]);

        Product::create([
            'name' => 'Ter Dolen donker',
            'description' => 'Ter Dolen Tripel is een echt volwaardig volmout tripel van koperblonde kleur, met twee soorten mout en twee soorten hop. Door bij het brouwen uitsluitend graan te gebruiken wordt de malsheid nog versterkt en heeft dit bier een rijke volmondigheid. Deze unieke tripel wordt hergist op de fles.',
            'price' => 1.90,
            'image' => 'https://res.cloudinary.com/dzecfxbka/image/upload/v1/lekker-limburgs/ter-dolen-donker-33cl.png'
        ]);
    }
}
