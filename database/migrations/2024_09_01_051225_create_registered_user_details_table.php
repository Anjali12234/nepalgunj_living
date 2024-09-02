<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('registered_user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('citizenship_image_front')->nullable();
            $table->string('citizenship_image_back')->nullable();
            $table->string('ward_no')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('registered_user_details');
    }
};
