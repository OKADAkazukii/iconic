<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry', function (Blueprint $table) {
            $table->increments('id');
            $table->char('create_time');
            $table->integer('user_id');
            $table->integer('contractor_id');
            $table->char('tel')->unique();
            $table->char('income');
            $table->char('relation');
            $table->char('overview');
            $table->char('sales');
            $table->char('agency');
            $table->text('contents');
            $table->text('response');
            $table->text('work');
            $table->char('contact');
            $table->char('contact_n');
            $table->char('call_time');
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
        Schema::dropIfExists('inquiry');
    }
}
