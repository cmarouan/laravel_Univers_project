<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnForeignSte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
              $table->foreign('categorie_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade');
              $table->foreign('produit_id')
                    ->references('id')->on('produits')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('societes', function (Blueprint $table) {
            //
        });
    }
}
