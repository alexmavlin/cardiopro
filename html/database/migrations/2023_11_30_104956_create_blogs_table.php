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
            $table->string('url');
            $table->string('title');
            $table->text('meta_description');
            $table->text('canonical');
            $table->text('meta_keywords');
            $table->string('date');
            $table->string('author');
            $table->string('breadcrumb');
            $table->text('h1');
            $table->text('h2');
            $table->string('img_src');
            $table->string('img_alt');
            $table->string('video_src');
            
            for ($i = 1; $i <= 10; $i++)
            {
                $table->text('h3_' . $i);
                $table->text('p_' . $i);
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
