<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectBidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_bid', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('bid_status');
            $table->integer('project_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('bid_amount');
            $table->integer('description');
            $table->integer('documents');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('project_id')
                ->references('id')
                ->on('user_projects')
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
