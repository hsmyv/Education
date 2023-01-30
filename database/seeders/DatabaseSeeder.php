<?php

namespace Database\Seeders;

use App\Models\AboutInformations;
use App\Models\Key;
use Illuminate\Database\Seeder;
use App\Models\PostCategory;
use App\Models\Template;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AboutInformations::create([
           'slot1_title'                => 'Learn Online Courses',
           'slot1_description'          => 'Usage of the Internet is becoming more common due to rapid advancement of technology.',
           'slot2_title'                => 'No.1 of universities',
           'slot2_description'          => 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first.',
           'slot3_title'                => 'Huge Library',
           'slot3_description'          => 'If you are a serious astronomy fanatic like a lot of us are, you can probably remember that one event.',
           'picture_title'              => 'Who we are to Serave the nation',
           'picture_body'               => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.',
           'video_title'                => 'Goals to Achieve for the leadership',
           'video_description'          => 'Who are in extremely love with eco friendly system.',
           'video_slot1_title'          => 'Success',
           'video_slot1_description'    => 'Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.',
           'video_slot2_title'          => 'Info',
           'video_slot2_description'    => 'Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.',
           'video_slot3_title'          => 'Danger',
           'video_slot3_description'    => 'Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.',
           'video_slot4_title'          => 'Warning',
           'video_slot4_description'    => 'Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.'
        ]);

        // \App\Models\Contact::factory(1)->create();

        /*$forgotpassword = Template::create([
            'name' => 'Forgot Password',
            'body' => 'Your password is:',
            'subject' => 'Forgot Password'
        ]);

        $key1 = Key::create([
            'template_id' => $forgotpassword->id,
            'words'       => '{name}'
        ]);
        $key2 = Key::create([
            'template_id' => $forgotpassword->id,
            'words'       => '{email}'
        ]);
        $key3 = Key::create([
            'template_id' => $forgotpassword->id,
            'words'       => '{password}'
        ]);*/

        // $welcome = Template::create([
        //     'name' => 'Welcome',
        //     'body' => 'Welcome to our website',
        //     'subject' => 'Welcome'
        // ]);
        // $key1 = Key::create([
        //         'template_id' => $welcome->id,
        //         'words'       => '{name}'
        //     ]);

        /*
        $technology = PostCategory::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        $fashion = PostCategory::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);
        $architecture = PostCategory::create([
            'name' => 'Architecture',
            'slug' => 'architecture'
        ]);
        $food = PostCategory::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        $lifestyle = PostCategory::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
        $adventure = PostCategory::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);
        $art = PostCategory::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);
        $politics = PostCategory::create([
            'name' => 'Politics',
            'slug' => 'politics'
        ]);*/



    }
}
