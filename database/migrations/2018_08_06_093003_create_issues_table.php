<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('customer_id');
            $table->string('title');
            $table->string('description');
            $table->date('start_at')->nullable();
            $table->date('due_at')->nullable();
            $table->char('type');
            $table->char('status');
            $table->char('priority');
            $table->integer('progress');
            $table->integer('estimate')->nullable();

            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on('issues')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('issues');
    }
}
