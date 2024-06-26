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
        // Users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->text('description');
            $table->string('stripe_token');
            $table->timestamps();
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('default')->default(true);
            $table->timestamps();
        });

        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('cemeteries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('row')->nullable();
            $table->timestamp('birth_date');
            $table->timestamp('death_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('avatar');
            $table->foreignId('cemetery_id')->constrained('cemeteries')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->boolean('payment')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('candles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('people_id')->constrained('peoples')->onDelete('cascade');
            $table->text('message');
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candle_id')->constrained('candles')->onDelete('cascade');
            $table->string('transactionid');
            $table->decimal('amount', 8, 2);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('sectors');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('cemeteries');
        Schema::dropIfExists('peoples');
        Schema::dropIfExists('candles');
        Schema::dropIfExists('payments');
    }
};
