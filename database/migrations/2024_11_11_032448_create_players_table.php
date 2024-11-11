<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();  // Automatically creates an 'id' column as the primary key
            $table->string('name');  // Player name
            $table->string('position');  // Player position (e.g., forward, midfielder)
            $table->integer('goals');  // Goals scored by the player
            $table->foreignId('team_id')->constrained()->onDelete('cascade');  // Foreign key to the 'teams' table
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');  // Rollback: drop the 'players' table
    }
}
?>