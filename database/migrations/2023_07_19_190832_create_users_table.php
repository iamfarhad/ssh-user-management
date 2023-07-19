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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Admin::class);
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('tg_id');
            $table->char('phone', 11);
            $table->string('status');
            $table->unsignedTinyInteger('traffic_limit')->default(0);
            $table->unsignedTinyInteger('user_limit')->default(0);
            $table->boolean('start_at_first_connect')->default(0);
            $table->unsignedTinyInteger('limit_day')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
