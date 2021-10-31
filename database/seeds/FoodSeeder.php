<?php


//namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('food')->insert([

            ['ResturantName'=>'JunkFood Lovers',
            'ReviewId'=>'1',

            'FoodName'=>'Beef Burger',
            'FoodType'=>'Snacks',
            'FoodDetails'=>'Juicy double beef patty with honey mustered sauce',
            'FoodImage'=>'https://images.all-free-download.com/images/graphiclarge/homemade_burger_560254.jpg',
            'Price'=>'350',
            'FoodStatus'=>'Availabe'],

            ['ResturantName'=>'JunkFood Lovers',
            'ReviewId'=>'2',

            'FoodName'=>'Chicken Burger',
            'FoodType'=>'Snacks',
            'FoodDetails'=>'Juicy grilled chicken patty with honey mustered sauce',
            'FoodImage'=>'https://assets.bonappetit.com/photos/5d1cb1880813410008e914fc/4:3/w_2000,h_1500,c_limit/Print-Summer-Smash-Burger.jpg',
            'Price'=>'220',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'JunkFood Lovers',

            'ReviewId'=>'1',

            'FoodName'=>'Chicken Fry',
            'FoodType'=>'Snacks',
            'FoodDetails'=>'Spicy and crispy chicken fry',
            'FoodImage'=>'https://s3-ap-southeast-1.amazonaws.com/media.evaly.com.bd/media/images/0a362593eb95-11.jpg',
            'Price'=>'100',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'Desert Heaven',

            'ReviewId'=>'2',

            'FoodName'=>'Vanilla Cake',
            'FoodType'=>'Desert',
            'FoodDetails'=>'Soft and moist vanilla cake with perfectly balanced sweetness',
            'FoodImage'=>'https://www.bakefromscratch.com/wp-content/uploads/2020/02/Heilala-Cake-Web-696x557.jpg',
            'Price'=>'650',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'Desert Heaven',

            'ReviewId'=>'4',

            'FoodName'=>'Black Forest Cake',
            'FoodType'=>'Desert',
            'FoodDetails'=>'Yummy black forest cake with whipped cream,choco chips and cherry topping,',
            'FoodImage'=>'https://5.imimg.com/data5/AF/SS/MY-10681797/black-forest-cake-half-kg-500x500.png',
            'Price'=>'750',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'Thai Kingdom',

            'ReviewId'=>'3',

            'FoodName'=>'Tom Yum Soup',
            'FoodType'=>'Thai',
            'FoodDetails'=>'Yummy tom yum soup with shrimp, chicken and mushroom',
            'FoodImage'=>'https://static7.depositphotos.com/1170412/731/i/600/depositphotos_7316574-stock-photo-thai-food-tom-yum-goong.jpg',
            'Price'=>'450',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'Thai Kingdom',

            'ReviewId'=>'3',

            'FoodName'=>'Fried Rice',
            'FoodType'=>'Thai',
            'FoodDetails'=>'Fried rice with vegetable, egg, shrimp, chicken and mushroom',
            'FoodImage'=>'https://www.evolvingtable.com/wp-content/uploads/2016/04/Chicken-Fried-Rice-4.jpg',
            'Price'=>'300',
            'FoodStatus'=>'Availabe'],
            ['ResturantName'=>'Thai Kingdom',

            'ReviewId'=>'4',

            'FoodName'=>'Chicken Noodle Soup',
            'FoodType'=>'Thai',
            'FoodDetails'=>'Traditional Thai hot and spicy chicken noodle soup',
            'FoodImage'=>'https://www.gimmesomeoven.com/wp-content/uploads/2013/10/Creamy-Chicken-Noodle-Soup-11.jpg',
            'Price'=>'350',
            'FoodStatus'=>'Availabe']

        ]);
    }

}

