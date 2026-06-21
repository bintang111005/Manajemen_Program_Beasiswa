<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::table(

            'scholarship_applications',

            function (Blueprint $table) {

                $table->string('program')
                    ->after('user_id');

                $table->string('jenjang')
                    ->after('major');

                $table->string('phone')
                    ->nullable();

                $table->text('address')
                    ->nullable();

                $table->string('photo')
                    ->nullable();

                $table->string('ktp')
                    ->nullable();

                $table->string('ktm')
                    ->nullable();

                $table->string('document_1')
                    ->nullable();

                $table->string('document_2')
                    ->nullable();

                $table->string('document_3')
                    ->nullable();

            }

        );

    }


    public function down(): void
    {

        Schema::table(

            'scholarship_applications',

            function (Blueprint $table) {

                $table->dropColumn([

                    'program',

                    'jenjang',

                    'phone',

                    'address',

                    'photo',

                    'ktp',

                    'ktm',

                    'document_1',

                    'document_2',

                    'document_3'

                ]);

            }

        );

    }

};
