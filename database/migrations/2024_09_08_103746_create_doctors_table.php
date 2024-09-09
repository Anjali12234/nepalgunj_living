<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('doctor_name');
            $table->string('reference_no')->nullable();
            $table->string('department');
            $table->string('n_m_c_no');
            $table->string('slug');
            $table->text('qualification');
            $table->string('position');
            $table->text('o_p_d_schedule');
            $table->longText('details');
            $table->string('youtube_link');
            $table->string('clinic_address');
            $table->text('map_url');
            $table->string('twitter_url');
            $table->string('facebook_url');
            $table->string('whats_app_no');
            $table->string('phone_number');
            $table->string('image');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
