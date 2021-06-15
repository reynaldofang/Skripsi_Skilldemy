<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'      =>  'Art',
            'about'     =>  'Hi Art People! Pernah kagum melihat hasil karya seseorang? Kamu bisa loh jadi orang-orang dibalik karya tersebut ! ',
            'slug'      =>  'art',
        ]);
        Category::create([
            'name'      =>  'Business',
            'about'     =>  'Hi Entrepreneurs! Dunia bisnis terus berkembang dari tahun ke tahun, dan terkadang tidak sedikit mereka yang gagal dikarenakan tidak belajar dari yang sudah berpengalaman, dan cenderung mengulangi kesalahan yang sama.',
            'slug'      =>  'business',
        ]);
        Category::create([
            'name'      =>  'Culinery',
            'about'     =>  'Hi Learners! Kamu ingin makan makanan restaurant setiap hari? Atau kamu punya hobby untuk memasak di rumah ala-ala restaurant? Kamu juga bisa loh membuat masakan untuk orang-orang yang kamu kasihi.',
            'slug'      =>  'culinery',
        ]);
        Category::create([
            'name'      =>  'Personal Development',
            'about'     =>  'Hi Learners! Secara tidak disadari kemampuan dan kemauan seseorang memiliki Personal Development sangat mempengaruhi kesuksesan.',
            'slug'      =>  'personaldevelopment',
        ]);
        Category::create([
            'name'      =>  'Photography',
            'about'     =>  'Hi Learners! Dunia digital atau teknologi membuat kita berkarya dengan lebih mudah.',
            'slug'      =>  'photography',
        ]);
        Category::create([
            'name'      =>  'Technology',
            'about'     =>  'Hi Learners! Dunia digital atau teknologi sudah mempengaruhi seluruh aspek hidup manusia.',
            'slug'      =>  'techonology',
        ]);
        Category::create([
            'name'      =>  'Design',
            'about'     =>  'Hi Art People! Pernah kagum melihat hasil karya seseorang? Kamu bisa loh jadi orang-orang dibalik karya tersebut !',
            'slug'      =>  'design',
        ]);
    }
}
