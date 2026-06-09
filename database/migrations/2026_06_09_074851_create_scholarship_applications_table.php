<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scholarship_applications', function (Blueprint $table) {

            $table->id();

            $table->foreignId('scholarship_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('nim');

            $table->string('major');

            $table->integer('semester');

            $table->decimal(
                'gpa',
                3,
                2
            );

            $table->decimal(
                'family_income',
                12,
                2
            )->nullable();

            $table->text('motivation_letter');

            $table->string('documents')
                  ->nullable();

            $table->enum('status', [

                'submitted',
                'reviewing',
                'passed',
                'rejected',
                'awarded'

            ])->default('submitted');

            $table->timestamp('reviewed_at')
                  ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'scholarship_applications'
        );
    }
};