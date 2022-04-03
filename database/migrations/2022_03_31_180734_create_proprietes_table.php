<?php

use App\Models\Quartier;
use App\Models\Proprietaire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('libelle');
            $table->string('superficie');
            $table->string('photo');
            $table->string('description');
            $table->boolean('disponibilite')->default(true);
            $table->timestamps();
            $table->foreignIdFor(Proprietaire::class);
            $table->foreignIdFor(Quartier::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');
    }
};
