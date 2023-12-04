<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('canonical')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('date')->nullable();
            $table->string('author')->nullable();
            $table->string('breadcrumb')->nullable();
            $table->text('h1')->nullable();
            $table->text('h2')->nullable();
            $table->text('p_content')->nullable();
            $table->string('img_src')->nullable();
            $table->string('img_alt')->nullable();
            $table->string('video_src')->nullable();
            
            for ($i = 1; $i <= 10; $i++)
            {
                $table->text('h3_' . $i)->nullable();
                $table->text('p_' . $i)->nullable();
            }

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
        Schema::dropIfExists('blogs');
    }
}
