<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_foodcoupon', function (Blueprint $table) {
            $table->primary(['employee_id', 'foodcoupon_id']);
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('foodcoupon_id')->unsigned();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('foodcoupon_id')->references('id')->on('foodcoupons')->onDelete('cascade')->onUpdate('cascade');
            
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_foodcoupon');
    }
};
