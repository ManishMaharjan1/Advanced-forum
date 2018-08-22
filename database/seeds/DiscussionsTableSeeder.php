<?php

use Illuminate\Database\Seeder;

use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAUTH2 with laravel passport';

        $t2 = 'Pagination in vuejs not working correctly';

        $t3 = 'Vuejs event listeners for child components ';

        $t4 = 'PHP homestead error - undetected database';


        $d1 = [

            'title' => $t1,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum lobortis urna eu aliquam. Duis porttitor nisi nisi, vel sagittis nisl efficitur non. Suspendisse varius facilisis ex vitae consectetur. Nam venenatis vulputate faucibus. Sed neque mauris, convallis eget ligula vitae, vehicula varius urna. Donec velit neque, tempor eget dolor eget.',

            'channel_id' => 1,

            'user_id' => 2,

            'slug' => str_slug($t1)

        ];

        $d2 = [

            'title' => $t2,

            'content' => 'Vuejs pagination Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum lobortis urna eu aliquam. Duis porttitor nisi nisi, vel sagittis nisl efficitur non. Suspendisse varius facilisis ex vitae consectetur. Nam venenatis vulputate faucibus. Sed neque mauris, convallis eget ligula vitae, vehicula varius urna. Donec velit neque, tempor eget dolor eget.',

            'channel_id' => 2,

            'user_id' => 1,

            'slug' => str_slug($t2)

        ];

        $d3 = [

            'title' => $t3,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum lobortis urna eu aliquam. Duis porttitor nisi nisi, vel sagittis nisl efficitur non. Suspendisse varius facilisis ex vitae consectetur. Nam venenatis vulputate faucibus. Sed neque mauris, convallis eget ligula vitae, vehicula varius urna. Donec velit neque, tempor eget dolor eget.',

            'channel_id' => 2,

            'user_id' => 1,

            'slug' => str_slug($t3)

        ];

        $d4 = [

            'title' => $t4,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum lobortis urna eu aliquam. Duis porttitor nisi nisi, vel sagittis nisl efficitur non. Suspendisse varius facilisis ex vitae consectetur. Nam venenatis vulputate faucibus. Sed neque mauris, convallis eget ligula vitae, vehicula varius urna. Donec velit neque, tempor eget dolor eget.',

            'channel_id' => 5,

            'user_id' => 1,

            'slug' => str_slug($t4)

        ];

        Discussion::create($d1);

        Discussion::create($d2);

        Discussion::create($d3);

        Discussion::create($d4);


    }
}
