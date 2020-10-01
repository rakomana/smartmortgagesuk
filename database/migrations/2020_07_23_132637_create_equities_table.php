<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('description');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->longText('article_heading_1')->nullable();
            $table->longText('article_paragraph_1_1')->nullable();
            $table->longText('article_paragraph_1_2')->nullable();
            $table->longText('article_paragraph_1_3')->nullable();
            $table->longText('article_paragraph_1_4')->nullable();
            $table->longText('article_heading_2')->nullable();
            $table->longText('article_paragraph_2_1')->nullable();
            $table->longText('article_paragraph_2_2')->nullable();
            $table->longText('article_paragraph_2_3')->nullable();
            $table->longText('article_paragraph_2_4')->nullable();
            $table->longText('article_heading_3')->nullable();
            $table->longText('article_paragraph_3_1')->nullable();
            $table->longText('article_paragraph_3_2')->nullable();
            $table->longText('article_paragraph_3_3')->nullable();
            $table->longText('article_paragraph_3_4')->nullable();
            $table->longText('article_heading_4')->nullable();
            $table->longText('article_paragraph_4_1')->nullable();
            $table->longText('article_paragraph_4_2')->nullable();
            $table->longText('article_paragraph_4_3')->nullable();
            $table->longText('article_paragraph_4_4')->nullable();
            $table->longText('article_heading_5')->nullable();
            $table->longText('article_paragraph_5_1')->nullable();
            $table->longText('article_paragraph_5_2')->nullable();
            $table->longText('article_paragraph_5_3')->nullable();
            $table->longText('article_paragraph_5_4')->nullable();
            $table->longText('conclusion_heading')->nullable();
            $table->longText('conclusion_explanation')->nullable();
            $table->longText('conclusion_title')->nullable();
            $table->longText('conclusion_paragraph_1')->nullable();
            $table->longText('conclusion_paragraph_2')->nullable();
            $table->longText('conclusion_paragraph_3')->nullable();
            $table->longText('conclusion_paragraph_4')->nullable();
            $table->longText('conclusion_paragraph_5')->nullable();
            $table->longText('conclusion_footer_1')->nullable();
            $table->longText('conclusion_footer_2')->nullable();
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
        Schema::dropIfExists('equities');
    }
}
