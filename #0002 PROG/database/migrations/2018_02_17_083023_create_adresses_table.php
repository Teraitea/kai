<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('shipping')->default(0); 
            $table->integer('billing')->default(0); 
            $table->string('firstname');
            $table->string('lastname');
            $table->string('company_name');
            $table->text('Adress_line_1');
            $table->text('Adress_line_2');
            $table->integer('island_id');
            $table->integer('city_id');
            $table->string('telephone');
            $table->string('email');
            
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
        Schema::dropIfExists('adresses');
    }
}
