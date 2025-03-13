<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('marketing', function (Blueprint $table) {
            $table->id(); // This creates an auto-increment primary key
            $table->string('slug')->unique();
            $table->string('img_one')->nullable();
            $table->string('heading_one')->nullable();
            $table->text('desc_one')->nullable();
            $table->string('heading_two')->nullable();
            $table->text('desc_two')->nullable();
            $table->string('img_two')->nullable();
            $table->string('heading_three')->nullable();
            $table->text('desc_three')->nullable();
            $table->string('img_three')->nullable();
            $table->string('category')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marketing');
    }
};
