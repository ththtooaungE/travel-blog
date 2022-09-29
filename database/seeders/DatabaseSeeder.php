<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Distination;
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
        $herstoic = Category::factory()->create(['name'=>'historic sites','slug'=>'historic-sites']);
        Category::factory()->create(['name'=>'pagodas','slug'=>'pagodas']);

        $mandalay = Distination::create(['name'=>'mandalay','slug'=>'mandalay']);

        Blog::factory()->create(['title'=>'U Pain Bridge',
            'slug'=>'u-pain-bridge',
            'user_id'=>User::factory()->create(),
            'distination_id'=>$mandalay->id,
            'body'=>'U Bein Bridge is a crossing that spans the Taungthaman Lake near Amarapura in Myanmar. The 1.2-kilometre bridge was built around 1850 and is believed to be the oldest and longest teakwood bridge in the world. Construction began when the capital of Ava Kingdom moved to Amarapura, and the bridge is named after Maung Bein who had it built. It is used as an important passageway for the local people and has also become a tourist attraction and therefore a significant source of income for souvenir sellers. It is particularly busy during July and August when the lake is at its highest. The bridge was built from wood reclaimed from the former royal palace in Inwa. It features 1,086 pillars that stretch out of the water, some of which have been replaced with concrete. Though the bridge largely remains intact, there are fears that an increasing number of the pillars are becoming dangerously decayed. Some have become entirely detached from their bases and only remain in place because of the lateral bars holding them together. Damage to these supports have been caused by flooding as well as a fish breeding program introduced into the lake which has caused the water to become stagnant.',
        ]);
    }
}
