<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->string('provider');

            $table->decimal(
                'amount_monthly',
                12,
                2
            )->nullable();

            $table->text('requirements')
                  ->nullable();

            $table->date('start_period')
                  ->nullable();

            $table->date('end_period')
                  ->nullable();

            $table->date('deadline');

            $table->integer('quota')
                  ->default(1);

            $table->text('description')
                  ->nullable();

            $table->enum('status', [
                'open',
                'closed',
                'completed'
            ])->default('open');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};