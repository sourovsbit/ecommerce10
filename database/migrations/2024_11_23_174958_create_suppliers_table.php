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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('area_id')->nullable()->unsigned();
            $table->foreign('area_id')->references('id')->on('supplier_areas');
            $table->string('supplier_name')->nullable();
            $table->string('supplier_name_bn')->nullable();
            $table->string('phone')->nullable();
            $table->text('adress')->nullable();
            $table->integer('status')->comment(' 1 - Active ; 0 - Inactive');
            $table->bigInteger('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores');
            $table->date('deleted_at')->nullable();
            $table->bigInteger('create_by')->unsigned();
            $table->foreign('create_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
