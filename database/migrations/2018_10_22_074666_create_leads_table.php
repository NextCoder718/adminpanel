<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_name');
            $table->integer('agent_id')->unsigned()->nullable();
            $table->integer('producer_id')->unsigned()->nullable();
            $table->date('move_in_date');
            $table->string('building_name');
            $table->text('property_address');
            $table->string('apartment');
            $table->string('city');
            $table->integer('state_id')->unsigned();
            $table->string('zip');
            $table->text('prior_address');
            $table->string('best_person_to_call_name');
            $table->string('best_person_to_call_phone');
            $table->string('email_for_policy_info');
            $table->integer('payment_option')->nullable();
            $table->text('notes_to_allstate')->nullable();
            $table->string('lessee_1_first_name');
            $table->string('lessee_1_last_name');
            $table->date('lessee_1_dob');
            $table->string('lessee_1_phone');
            $table->string('lessee_1_occupation');
            $table->integer('lessee_1_marital_status');
            $table->integer('lessee_have_dog')->default(0);
            $table->string('lessee_dog_breed')->nullable();
            $table->string('lessee_2_first_name')->nullable();
            $table->string('lessee_2_last_name')->nullable();
            $table->date('lessee_2_dob')->nullable();
            $table->string('lessee_2_phone')->nullable();
            $table->string('lessee_2_occupation')->nullable();
            $table->integer('lessee_2_marital_status')->nullable();
            $table->integer('gift_card_status')->default(0);
            $table->date('gift_card_sent_date')->nullable();
            $table->integer('status')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('restrict');
            $table->foreign('producer_id')->references('id')->on('producers')->onDelete('restrict');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
