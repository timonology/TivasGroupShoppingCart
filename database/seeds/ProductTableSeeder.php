<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'image' => 'https://onepromocode.com/wp-content/uploads/2016/11/nokia-e1.jpg',
            'title' => 'Nokia P',
            'description' => 'This is just a New Nice looking Nokia product which you will love to have because it has lots of nice features',
            'price' => '90,000'
        ]);
        $product->save();


        $product = new \App\Product([
            'image' => 'http://img.talkandroid.com/uploads/2010/10/sony-ericsson-xperia-x10-Android.jpg',
            'title' => 'Sony Xperia X10',
            'description' => 'This is just a New Nice looking Sony Xperia product which you will love to have because it has lots of nice features',
            'price' => '80,000'
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'http://cdn.thedroidguy.com/wp-content/uploads/2015/02/Samsung-Galaxy-S5-Lollipop-Problems.jpg',
            'title' => 'Samsung Gallaxy S5',
            'description' => 'This is just a New Nice looking Samsung Gallaxy product which you will love to have because it has lots of nice features',
            'price' => '85,000'
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'http://www.mobilemonitor.com/images/phones/htc-desire-300.jpg',
            'title' => 'HTC Desire 300',
            'description' => 'This is just a New Nice looking Htc Desire product which you will love to have because it has lots of nice features',
            'price' => '85,000'
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'http://wasconet.com/wp-content/uploads/2014/10/Tecno-D31.jpg',
            'title' => 'Techno D32',
            'description' => 'This is just a New Nice looking Techno product which you will love to have because it has lots of nice features',
            'price' => '25,000'
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'http://cdn2.gsmarena.com/vv/bigpic/apple-iphone-7r4.jpg',
            'title' => 'Iphone 7',
            'description' => 'This is just a New Nice looking Iphone product which you will love to have because it has lots of nice features',
            'price' => '800,000'
        ]);
        $product->save();

    }
}
