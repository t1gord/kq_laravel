<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('active')->default(true);
        });


        DB::table('agencies')->insert([
            [
                'city' => 'МИНСК',
                'name' => 'Афанасьев Павел',
                'phone' => '8(495)183-88-83 доб. 122',
                'email' => 'p.afanasiev@kaiquan.com.cn',
                'latitude' => '53.902735',
                'longitude' => '27.555696',
            ],
            [
                'city' => 'Санкт-Петербург',
                'name' => 'Паламарчук Андрей',
                'phone' => '8(495)183-88-83 доб. 113',
                'email' => 'a.palamarchuk@kaiquan.com.cn',
                'latitude' => '59.938784',
                'longitude' => '30.314997',
            ],
            [
                'city' => 'Воронеж',
                'name' => 'Ханина Ольга',
                'phone' => '8(495)183-88-83 доб. 116',
                'email' => 'o.hanina@kaiquan.com.cn',
                'latitude' => '51.660781',
                'longitude' => '39.200296',
            ],
            [
                'city' => 'Ярославль',
                'name' => 'Багранов Михаил',
                'phone' => '8(495)183-88-83 доб. 109',
                'email' => 'm.bagranovo@kaiquan.com.cn',
                'latitude' => '57.626559',
                'longitude' => '39.893813',
            ],
            [
                'city' => 'Краснодар',
                'name' => 'Крюков Денис',
                'phone' => '8(495)183-88-83 доб. 111',
                'email' => 'd.krukov@kaiquan.com.cn',
                'latitude' => '45.035470',
                'longitude' => '38.975313',
            ],
            [
                'city' => 'Курск',
                'name' => 'Попков Вадим',
                'phone' => '8(495)183-88-83 доб. 115',
                'email' => 'v.popkov@kaiquan.com.cn',
                'latitude' => '51.730846',
                'longitude' => '36.193015',
            ],
            [
                'city' => 'Пермь',
                'name' => 'Пепеляев Александр',
                'phone' => '8(495)183-88-83 доб. 105',
                'email' => 'a.pepelyaev@kaiquan.com.cn',
                'latitude' => '58.010455',
                'longitude' => '56.229443',
            ],
            [
                'city' => 'Екатеринбург',
                'name' => 'Катаева Елена',
                'phone' => '8(495)183-88-83 доб. 110',
                'email' => 'e.kataeva@kaiquan.com.cn',
                'latitude' => '56.838011',
                'longitude' => '60.597474',
            ],
            [
                'city' => 'Новосибирск',
                'name' => 'Серяк Иван',
                'phone' => '8(495)183-88-83 доб. 120',
                'email' => 'i.seryak@kaiquan.com.cn',
                'latitude' => '55.030204',
                'longitude' => '82.920430',
            ],
            [
                'city' => 'Казань',
                'name' => 'Стрелков Михаил',
                'phone' => '8(495)183-88-83 доб. 121',
                'email' => 'm.strelkov@kaiquan.com.cn',
                'latitude' => '55.796127',
                'longitude' => '49.106414',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
