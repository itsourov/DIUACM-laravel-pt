<?php

use App\Enums\ContestType;
use App\Models\Gallery;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignIdFor(Gallery::class)->nullable();
            $table->enum('contest_type', ContestType::toArray());
            $table->string('location')->nullable();
            $table->dateTime('date')->nullable();
            $table->text('description')->nullable();
            $table->string('standings_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contests');
    }
};
