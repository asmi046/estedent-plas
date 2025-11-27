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
        Schema::create('control_organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->comment('Наименование организации');
            $table->string('address')->comment('Адрес');
            $table->string('phones')->comment('Телефоны');
            $table->string('email')->nullable()->comment('Электронная почта');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_organizations');
    }
};
