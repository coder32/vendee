<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BidComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('bid_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('comment');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('bid_id')
                ->references('id')
                ->on('project_bid')
                ->onDelete('cascade');
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
