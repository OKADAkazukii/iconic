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
            $table->date('create_time');
            $table->integer('user_id');
            $table->integer('contractor_id');
            $table->char('contractor_tel(13)')->unique();
            $table->char('income(255)');
            $table->char('relation(255)');
            $table->char('overview');
            $table->char('sales(255)');
            $table->char('agent(255)');
            $table->text('contents');
            $table->text('response');
            $table->text('work');
            $table->char('contact(255)');
            $table->char('contact_n(13)');
            $table->char('call_time(255)');
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
