phph <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            //id
            $table->increments('id');
            //nom
            $table->string('name');
            //Adresse
            $table->string('adresse');
            //Email
            $table->string('email');
            //Téléphone
            $table->string('tel');
            //description identité
            $table->longText('description');
            //type de projet
            $table->longText('type');
            //CONTEXTE
            $table->longText('context');
            //Objectif
            $table->longText('objectif');
            //CONTRAINTES
            $table->longText('contrainte');
            //date ajout
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projets');
    }
}
