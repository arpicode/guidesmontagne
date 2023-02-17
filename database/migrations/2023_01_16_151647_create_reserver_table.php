<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserver', function (Blueprint $table) {
            $table->primary(['code_Abris', 'code_Randonnees']);
            $table->foreignId('code_Abris');
            $table->foreignId('code_Randonnees');
            $table->date('date_Reserver');
            $table->string('statut_Reserver');

            $table->index(['code_Abris', 'code_Randonnees']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserver');
    }
};