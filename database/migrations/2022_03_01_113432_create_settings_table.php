<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('title');
            $table->string('tags');
            $table->string('icon');
            $table->string('logo');
            $table->string('address');
            $table->boolean('newsletter')->default(0);
            $table->string('meta_desc');
            $table->string('footer_about');
            $table->boolean('user_about');
            $table->boolean('last_comments')->default(0);
            $table->boolean('instagram')->default(0);
            $table->boolean('most_popular')->default(0);
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
