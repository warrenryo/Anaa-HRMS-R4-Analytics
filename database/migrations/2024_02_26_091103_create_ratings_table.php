<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hrms_r4_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('rating');
            $table->TEXT('comment');
            $table->TEXT('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hrms_r4_ratings');
    }
};
