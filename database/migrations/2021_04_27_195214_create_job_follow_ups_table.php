<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateJobFollowUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_follow_ups', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->bigInteger('job_id');
            $table->string('type');
            $table->string('body');
            $table->text('details')->nullable();
            $table->date('next_follow_up')->nullable();
            $table->boolean('reject')->nullable();
            $table->string('reject_reason')->nullable();
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
        Schema::dropIfExists('job_follow_ups');
    }
}
