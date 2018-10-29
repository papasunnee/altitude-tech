<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job_title');
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->string('project_type');
            $table->string('spec_upload')->nullable();
            $table->string('description');
            $table->string('comment');
            $table->softDeletes();
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
        Schema::dropIfExists('request_quotes');
    }
}

