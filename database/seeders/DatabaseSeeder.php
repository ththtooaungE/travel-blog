<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory()->create(['name'=>'beach','slug'=>'beach']);
        Category::factory()->create(['name'=>'historic sites','slug'=>'historic-sites']);
        Category::factory()->create(['name'=>'pagodas','slug'=>'pagodas']);

        Blog::factory()->create(['title'=>'Mandalay',
            'slug'=>'mandalay',
            'user_id'=>User::factory(),
            'body'=>"Mandalay is the second-largest city in Myanmar, after Yangon. Located on the east bank of the Irrawaddy River, 716 km (445 mi) north of Yangon, the city has a population of 1,225,553 (2014 census).Mandalay was founded in 1857 by King Mindon, replacing Amarapura as the new royal capital of the Konbaung dynasty. It was Burma's final royal capital before the kingdom's annexation by the British Empire in 1885. Under British rule, Mandalay remained commercially and culturally important despite the rise of Yangon, the new capital of British Burma. The city suffered extensive destruction during the Japanese conquest of Burma in the Second World War. In 1948, Mandalay became part of the newly independent Union of Burma. Today, Mandalay is the economic centre of Upper Myanmar and considered the centre of Burmese culture. A continuing influx of illegal Chinese immigrants, mostly from Yunnan, since the late 20th century, has reshaped the city's ethnic makeup and increased commerce with China. Despite Naypyidaw's recent rise, Mandalay remains Upper Burma's main commercial, educational and health center."
        ]);

        Blog::factory()->create(['title'=>'Shwedagon Pagoda in Yangon',
            'slug'=>'shwedagon-pagoda-in-yangon',
            'user_id'=>User::factory(),
            'body'=>"The Shwedagon Pagoda officially named Shwedagon Zedi Daw and also known as the Great Dagon Pagoda and the Golden Pagoda is a gilded stupa located in Yangon, Myanmar. The Shwedagon is the most sacred Buddhist pagoda in Myanmar, as it is believed to contain relics of the four previous Buddhas of the present kalpa. These relics include the staff of Kakusandha, the water filter of Kongamana, a piece of the robe of Kassapa, and eight strands of hair from the head of Gautama. Built on the 51-metre (167 ft) high Singuttara Hill, the 112 m (367 ft) tall pagoda stands 170 m (560 ft) above sea level,and dominates the Yangon skyline. Yangon's zoning regulations, which cap the maximum height of buildings to 127 metres (417 feet) above sea level (75% of the pagoda's sea level height), ensure the Shwedagon's prominence in the city's skyline."
        ]);

        Blog::factory()->create(['title'=>'Mahamuni Buddha Temple',
            'slug'=>'mahamuni-buddha-temple',
            'user_id'=>User::factory(),
            'body'=>"The Mahamuni Buddha Temple is a Buddhist temple and major pilgrimage site, located southwest of Mandalay, Myanmar (Burma). The Mahamuni Image (lit. 'The Great Sage') is enshrined in this temple, and originally came from Arakan. It is highly venerated in Burma and central to many people's lives, as it is seen as an expression of representing the Buddha's life. Ancient tradition refers to only five likenesses of the Buddha made during his lifetime; two were in India, two in paradise, and the fifth is the Mahamuni Image in Myanmar. Legend holds that the Buddha himself visited the Dhanyawadi city of Arakan in 554 BC.[1] King Sanda Thuriya requested that an image be cast of him. Once complete, the Buddha breathed upon it, and thereafter the image took on his exact likeness."
        ]);

        Blog::factory()->create(['title'=>'U Pain Bridge',
            'slug'=>'u-pain-bridge',
            'user_id'=>User::factory(),
            'body'=>"U Bein Bridge is a crossing that spans the Taungthaman Lake near Amarapura in Myanmar. The 1.2-kilometre bridge was built around 1850 and is believed to be the oldest and longest teakwood bridge in the world. Construction began when the capital of Ava Kingdom moved to Amarapura, and the bridge is named after Maung Bein who had it built. It is used as an important passageway for the local people and has also become a tourist attraction and therefore a significant source of income for souvenir sellers. It is particularly busy during July and August when the lake is at its highest. The bridge was built from wood reclaimed from the former royal palace in Inwa. It features 1,086 pillars that stretch out of the water, some of which have been replaced with concrete. Though the bridge largely remains intact, there are fears that an increasing number of the pillars are becoming dangerously decayed. Some have become entirely detached from their bases and only remain in place because of the lateral bars holding them together. Damage to these supports have been caused by flooding as well as a fish breeding program introduced into the lake which has caused the water to become stagnant."
        ]);

    }
}
