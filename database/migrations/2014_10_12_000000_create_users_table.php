<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ! funzione che crea la tabella nel database
     */
    public function up(): void
    {
        // ! il metodo create si occupa di creare la tabella prendendo in ingresso:
        // ! il nome della tabella e una funzione
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ! crea una colonna con chiave primaria: id int AUTO_INCREMENT primary key (id)
            $table->string('name'); // ! crea una colonna con il nome che gli passiamo come parametro e sarà una stringa
            $table->string('email')->unique(); // ! crea una colonna di tipo stringa email con caratteristica 
                                                // ! unique (due righe non possono avere la stessa email)
            $table->timestamp('email_verified_at')->nullable(); // ! crea una colonna di ditpo data che può essere null
            $table->string('password');
            $table->rememberToken(); 
            $table->timestamps(); // ! crea 2 colonne: created_at e updated_at
                                 // ! sono colonne che usa Laravel per momorizzare il momento in cui il record viene creato
                                 // ! updated_at memorizza il momento in cui il record viene modificato
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
