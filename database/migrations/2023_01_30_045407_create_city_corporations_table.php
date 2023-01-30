<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_corporations', function (Blueprint $table) {
            $table->id();
            $table->date('issueDate');
            $table->time('issueTime');
            $table->string('license_No');
            $table->string('institution_Name');
            $table->string('owner_Name');
            $table->string('father_Name');
            $table->string('mother_Name');
            $table->string('business_Nature');
            $table->string('business_Type');
            $table->string('address');
            $table->string('area');
            $table->string('ward');
            $table->string('nid');
            $table->string('BNI_No');
            $table->string('email');
            $table->string('fiscal_year');
            //Present address
            $table->string('holding_No');
            $table->string('road_No');
            $table->string('village');
            $table->string('postCard');
            $table->string('thana');
            $table->string('division');
            $table->string('district');
            //Permanent address
            $table->string('holding_No_p');
            $table->string('road_No_p');
            $table->string('village_p');
            $table->string('postCard_p');
            $table->string('thana_p');
            $table->string('division_p');
            $table->string('district_p');

            $table->string('renewal_Fees');
            $table->string('signBoard_Tax');
            $table->string('fertilizer_Charges');
            $table->string('Vat');
            $table->string('tax');
            $table->string('book_Fee');
            $table->string('due');
            $table->string('form_Fee');
            $table->string('solution_Fee');
            $table->string('others_Fee');
            $table->string('total');
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
        Schema::dropIfExists('city_corporations');
    }
};
