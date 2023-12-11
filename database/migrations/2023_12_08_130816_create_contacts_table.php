<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('address')->nullable();
            $table->json('phones')->nullable();
            $table->json('emails')->nullable();
            $table->text('working_hours')->nullable();
            $table->string('photo')->nullable();
            $table->string('requisite_name')->nullable();
            $table->string('requisite_address')->nullable();
            $table->string('requisite_inn')->nullable();
            $table->string('requisite_kpp')->nullable();
            $table->string('requisite_ogrn')->nullable();
            $table->string('requisite_okpo')->nullable();
            $table->string('requisite_bank')->nullable();
            $table->string('requisite_rs')->nullable();
            $table->string('requisite_ks')->nullable();
            $table->string('requisite_bik')->nullable();
        });

        DB::table('contacts')->insert([
            'address' => 'ООО “КЕЙ КЬЮ” 123592<br>
Москва, Кулакова, 20, корпус 1<br>
Технопарк “Орбита”, корпус “Альфа”',
            'phones' => '{"1":"8 800 333-66-66","2":"8 495 183-88-83"}',
            'emails' => '{"1":"russia@kaiquan.com.cn"}',
            'working_hours' => 'ПН - ПТ: с 09:00 до 18:00',
            'requisite_name' => 'ООО "КЕЙ КЬЮ"',
            'requisite_address' => '123592, г.Москва, ул.Кулакова, д.20, стр. 1',
            'requisite_inn' => '7734464841',
            'requisite_kpp' => '773401001',
            'requisite_ogrn' => '1227700771715',
            'requisite_okpo' => '78988225',
            'requisite_bank' => 'ПАО "Сбербанк" г.Москва',
            'requisite_rs' => '40702810238000217808',
            'requisite_ks' => '30101810400000000225',
            'requisite_bik' => '044525225',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
