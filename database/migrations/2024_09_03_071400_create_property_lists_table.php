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
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('refrence_no')->nullable();
            $table->string('update_dates')->nullable();
            $table->string('rate');
            $table->longText('description');
            $table->string('slug');
            $table->string('location');
            $table->string('position');
            $table->string('is_rent');
            $table->string('bed_room');
            $table->string('bathroom');
            $table->string('internet');
            $table->string('parking');
            $table->string('area');
            $table->string('kitchen_type');
            $table->string('deposit');
            $table->string('features');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('property_lists');
    }
};
