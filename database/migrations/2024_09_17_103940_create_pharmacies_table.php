<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('pharmacy_name');
            $table->string('reference_no')->nullable();
            $table->string('slug');
            $table->string('position');
            $table->string('opening_hours');
            $table->longText('details');
            $table->string('youtube_link');
            $table->string('pharmacy_address');
            $table->text('map_url');
            $table->string('twitter_url');
            $table->string('facebook_url');
            $table->string('contact_number');
            $table->string('type');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
