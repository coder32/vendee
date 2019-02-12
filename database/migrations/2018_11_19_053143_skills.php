<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cat_id')->unsigned()->index();
            $table->string('status');
            $table->timestamps();

            /*$table->foreign('cat_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
