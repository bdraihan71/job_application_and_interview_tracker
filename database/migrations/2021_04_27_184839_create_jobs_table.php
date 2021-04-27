<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->bigInteger('user_id');
            $table->string('company_name');
            $table->string('salary');
            $table->string('email_address');
            $table->text('details');
            $table->date('appication_last_date');
            $table->text('appication_body');
            $table->boolean('is_applied');
            $table->string('source');
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
        Schema::dropIfExists('jobs');
    }
}
