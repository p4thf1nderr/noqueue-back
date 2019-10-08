<?php

use Illuminate\Database\Seeder;
use App\Models\Good;
use App\Models\FoodCourt;
use App\Models\Category;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Good::create([
            'title' => 'Гамбургер',
            'cooking_time' => '00:07:00',
            'description' => 'Рубленый бифштекс из натуральной цельной говядины на карамелизованной булочке, заправленной горчицей, кетчупом, луком и кусочком маринованного огурчика.',
            'price' => 140,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Чизбургер',
            'cooking_time' => '00:07:00',
            'description' => 'Рубленый бифштекс из натуральной цельной говядины с кусочками сыра «Чеддер» на карамелизованной булочке, заправленной горчицей, кетчупом, луком и кусочком маринованного огурчика.',
            'price' => 130,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Роял бекон',
            'cooking_time' => '00:10:00',
            'description' => 'Бифштекс из сочной рубленой говядины, приготовленный на гриле, с двумя кусочками сыра «Чеддер» и аппетитными ломтиками бекона на карамелизированной булочке с кунжутом, заправленной горчицей, кетчупом, свежим луком и маринованными огурчиками',
            'price' => 150,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Твистер оригинальный',
            'cooking_time' => '00:05:00',
            'description' => 'Закручен со вкусом! Кусочки нежнейшего куриного филе в хрустящей острой или оригинальной панировке с сочными листьями салата, кусочками помидора и нежным соусом мы завернули в пшеничную лепешку и поджарили в тостере. Тут все и закрутилось!',
            'price' => 170,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::TWISTER,
        ]);

        Good::create([
            'title' => 'Твистер острый',
            'cooking_time' => '00:06:00',
            'description' => 'Закручен со вкусом! Кусочки нежнейшего куриного филе в хрустящей острой или оригинальной панировке с сочными листьями салата, кусочками помидора и нежным соусом мы завернули в пшеничную лепешку и поджарили в тостере. Тут все и закрутилось',
            'price' => 150,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::TWISTER,
        ]);

        Good::create([
            'title' => 'Темный твистер',
            'cooking_time' => '00:06:00',
            'description' => 'Сочное темное филе из куриного бедра в оригинальной панировке в пшеничной лепешке с соусом BBQ, майонезом, свежим салатом, маринованными огурцами, луком и сыром эмменталер.',
            'price' => 240,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::TWISTER,
        ]);

        Good::create([
            'title' => 'Картофель по деревенски',
            'cooking_time' => '00:06:00',
            'description' => 'Рассыпчатый и хрустящий картофель по-деревенски – любимый вкус.',
            'price' => 210,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::SNACK,
        ]);

        Good::create([
            'title' => 'Сырные подушечки',
            'cooking_time' => '00:06:00',
            'description' => 'Нежнейший сыр, обжаренный в хрустящей панировке! Идеальный перекус или дополнение к любимым блюдам! Еще вкуснее с клюквенным соусом!',
            'price' => 290,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::SNACK,
        ]);


        Good::create([
            'title' => 'Салат коул-слоу',
            'cooking_time' => '00:06:00',
            'description' => 'Салат из свежей капусты и моркови с пикантным сливочным соусом',
            'price' => 100,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::SNACK,
        ]);

        Good::create([
            'title' => 'Соба с грибами',
            'cooking_time' => '00:08:00',
            'description' => 'Соба с грибами в соусе терияки',
            'price' => 520,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::WOK,
        ]);

        Good::create([
            'title' => 'Фунчоза',
            'cooking_time' => '00:04:00',
            'description' => 'Фунчоза с курицей в сливочном соусе',
            'price' => 510,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::WOK,
        ]);

        Good::create([
            'title' => 'Удон с курицей',
            'cooking_time' => '00:04:00',
            'description' => 'Удон с курицей в ореховом соусе',
            'price' => 440,
            'court_id' => FoodCourt::inRandomOrder()->first()->id,
            'category_id' => Category::WOK,
        ]);
    }
}
