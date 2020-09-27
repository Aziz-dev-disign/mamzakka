<?php
/* 
 * Migrations generated by: Skipper (http://www.skipper18.com)
 * Migration id: a540423c-52c4-4e3a-a73d-6e4d907ddd74
 * Migration datetime: 2020-09-03 10:55:09.686719
 */ 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkipperMigrations2020090310550968 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom');
            $table->string('email')->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('statu', 255)->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('titre', 255)->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->primary(['role_id','user_id']);
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->bigInteger('permission_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->primary(['permission_id','role_id']);
        });
        Schema::create('employers', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->bigInteger('domaine_id')->nullable(true)->unsigned();
            $table->bigInteger('profession_id')->nullable(true)->unsigned();
            $table->string('matricule', 255)->nullable(true)->unique();
            $table->string('nom', 255)->nullable(true);
            $table->string('prenom', 255)->nullable(true);
            $table->string('email')->nullable(true);
            $table->date('date')->nullable(true);
            $table->string('genre')->nullable(true);
            $table->string('contact')->nullable(true);
            $table->string('situation_m', 255)->nullable(true);
            $table->string('adresse', 255)->nullable(true);
            $table->string('fichier', 255)->nullable(true);
            $table->string('photo', 255)->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('domaines', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->date('debut')->nullable(true);
            $table->date('fin')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('professions', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('profession')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('articles', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->bigInteger('categorie_id')->nullable(true)->unsigned();
            $table->bigInteger('type_id')->nullable(true)->unsigned();
            $table->bigInteger('statu_id')->nullable(true)->unsigned();
            $table->bigInteger('partenaire_id')->nullable(true)->unsigned();
            $table->string('numero_article')->nullable(true)->unique();
            $table->string('nom')->nullable(true);
            $table->string('slug')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('localisation')->nullable(true);
            $table->string('superficie')->nullable(true);
            $table->string('image')->nullable(true);
            $table->date('date')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('categorie')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('types', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('status', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('statu')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('partenaires', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->string('prenom')->nullable(true);
            $table->string('contact')->nullable(true);
            $table->string('numero_cnib')->nullable(true)->unique();
            $table->date('delivre_le')->nullable(true);
            $table->string('numero')->nullable(true);
            $table->string('adresse')->nullable(true);
            $table->string('prestation')->nullable(true);
            $table->string('fichier_cnib')->nullable(true);
            $table->string('fichier_article')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->string('prenom')->nullable(true);
            $table->date('date_naissance')->nullable(true);
            $table->string('telephone')->nullable(true);
            $table->string('numero_cnib')->nullable(true)->unique();
            $table->date('delivre_le')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('produits', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->bigInteger('client_id')->nullable(true)->unsigned();
            $table->bigInteger('type_id')->nullable(true)->unsigned();
            $table->string('prix')->nullable(true);
            $table->integer('numero_article')->nullable(true);
            $table->string('superficie')->nullable(true);
            $table->string('date')->nullable(true);
            $table->integer('numero_recu')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('cartes', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->string('longitude')->nullable(true);
            $table->string('latidue')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('temoignages', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->string('description')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('profils', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->bigInteger('user_id')->nullable(true)->unsigned();
            $table->string('prenom')->nullable(true);
            $table->string('function')->nullable(true);
            $table->string('telephone')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::table('employers', function (Blueprint $table) {
            $table->foreign('domaine_id')->references('id')->on('domaines');
        });
        Schema::table('profils', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('employers', function (Blueprint $table) {
            $table->foreign('profession_id')->references('id')->on('professions');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('categorie_id')->references('id')->on('categories');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('statu_id')->references('id')->on('status');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('partenaire_id')->references('id')->on('partenaires');
        });
        Schema::table('produits', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('type_id')->references('id')->on('types');
        });
        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('permission_role', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('permission_role', function (Blueprint $table) {
            $table->dropForeign(['permission_id']);
            $table->dropForeign(['role_id']);
        });
        if (Schema::hasTable('produits')) {
            Schema::table('produits', function (Blueprint $table) {
                $table->dropForeign(['client_id']);
            });
        }
        if (Schema::hasTable('produits')) {
            Schema::table('produits', function (Blueprint $table) {
                $table->dropForeign(['type_id']);
            });
        }
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropForeign(['partenaire_id']);
            });
        }
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropForeign(['statu_id']);
            });
        }
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropForeign(['type_id']);
            });
        }
        if (Schema::hasTable('articles')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropForeign(['categorie_id']);
            });
        }
        if (Schema::hasTable('employers')) {
            Schema::table('employers', function (Blueprint $table) {
                $table->dropForeign(['profession_id']);
            });
        }
        if (Schema::hasTable('employers')) {
            Schema::table('employers', function (Blueprint $table) {
                $table->dropForeign(['domaine_id']);
            });
        }
        if (Schema::hasTable('profils')) {
            Schema::table('profils', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
        }
        Schema::dropIfExists('temoignages');
        Schema::dropIfExists('cartes');
        Schema::dropIfExists('produits');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('partenaires');
        Schema::dropIfExists('status');
        Schema::dropIfExists('types');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('professions');
        Schema::dropIfExists('domaines');
        Schema::dropIfExists('employers');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('profils');
    }
}
