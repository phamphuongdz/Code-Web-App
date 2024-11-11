<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('Captain');
            $table->string('foundation-year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');  // Rollback: drop the 'teams' table
    }
}
?>