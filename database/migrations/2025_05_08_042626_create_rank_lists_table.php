<?php

use App\Models\Tracker;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rank_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tracker::class)->constrained('trackers');
            $table->string('keyword');
            $table->text('description')->nullable();
            $table->float('weight_of_upsolve');
            $table->integer('order')->default(0);
            $table->boolean('is_active')
                ->default(true);
            $table->timestamps();

            $table->unique(['keyword', 'tracker_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rank_lists');
    }
};
