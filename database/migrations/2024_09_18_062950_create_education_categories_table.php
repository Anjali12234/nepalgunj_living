<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('education_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->integer('position')->nullable();
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('education_categories');
    }
};
