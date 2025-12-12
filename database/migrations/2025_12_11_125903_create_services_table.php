<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название услуги');
            $table->string('short_title')->comment('Краткое название услуги');
            $table->string('slug')->comment('Слаг');
            $table->string('img', 500)->nullable()->comment('Изображение');
            $table->integer('order')->default(0)->comment('Порядок');
            $table->string('template')->nullable()->comment('Шаблон лендинга');
            $table->string('price')->comment('Цена');
            $table->string('time')->comment('Время выполнени');

            $table->json('sections')->nullable()->comment('Секции страницы');

            $table->mediumText('description')->nullable()->comment('Описание раздела');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
