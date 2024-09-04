<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('property_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('refrence_no');
            $table->string('update_dates');
            $table->string('rate');
            $table->string('property_owner');
            $table->string('phone_no');
            $table->string('whats_app');
            $table->string('email');
            $table->longText('description');
            $table->string('slug');
            $table->string('location');
            $table->string('position');
            $table->string('is_rent');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('property_lists');
    }
};
