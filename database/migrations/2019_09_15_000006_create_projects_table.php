<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('nom_organisation')->nullable();
            $table->string('statut_organisation')->nullable();
            $table->string('type')->nullable();
            $table->string('region')->nullable();
            $table->string('departement')->nullable();
            $table->string('nombre_emplois')->nullable();
            $table->string('nombre_homme')->nullable();
            $table->string('nombre_femme')->nullable();
            $table->string('nombre_jeune')->nullable();
            $table->string('nombre_personne_handicapees')->nullable();
            $table->string('nombre_national')->nullable();
            $table->string('nombre_expatrier')->nullable();
            $table->string('nombre_temporaire')->nullable();
            $table->string('nombre_permanent')->nullable();
            $table->string('nombre_volontaire')->nullable();
            $table->string('nombre_stagiaire')->nullable();
            $table->longText('secteur_intervation');
            $table->longText('nombre_projet_gdh')->nullable();
            $table->longText('nombre_projet_idu')->nullable();
            $table->longText('nombre_projet_sc')->nullable();
            $table->longText('nombre_projet_cas')->nullable();
            $table->longText('nombre_projet_asap')->nullable();
            $table->longText('nombre_projet_ecb')->nullable();
            $table->longText('nombre_projet_mpg')->nullable();
            $table->longText('nombre_projet_eha')->nullable();
            $table->longText('nombre_projet_epf')->nullable();
            $table->longText('nombre_projet_ip')->nullable();
            $table->longText('montant_secteur_invers_direct_gdh')->nullable();
            $table->longText('montant_secteur_invers_direct_idu')->nullable();
            $table->longText('montant_secteur_invers_direct_sc')->nullable();
            $table->longText('montant_secteur_invers_direct_asap')->nullable();
            $table->longText('montant_secteur_invers_direct_ecb')->nullable();
            $table->longText('montant_secteur_invers_direct_mpg')->nullable();
            $table->longText('montant_secteur_invers_direct_eha')->nullable();
            $table->longText('montant_secteur_invers_direct_epf')->nullable();
            $table->longText('montant_secteur_invers_direct_ip')->nullable();
            $table->longText('montant_secteur_invers_direct_autre')->nullable();
            $table->string('montant_national')->nullable();
            $table->string('montant_inter')->nullable();
            $table->string('montant_fonds_propre')->nullable();
            $table->string('montant_partenaire_ue_pay_membre')->nullable();
            $table->string('montant_partenaire_usaid')->nullable();
            $table->string('montant_partenaire_acdi_canada')->nullable();
            $table->string('montant_partenaire_pay_arabe')->nullable();
            $table->string('montant_partenaire_autre')->nullable();
            $table->longText('realisation_secteur_invers_direct')->nullable();
            $table->string('nombre_homme_benef')->nullable();
            $table->string('nombre_femme_benef')->nullable();
            $table->string('nombre_jeune_benef')->nullable();
            $table->string('nombre_handicape_benef')->nullable();

            $table->longText('description')->nullable();

            $table->date('start_date')->nullable();

            $table->float('budget', 15, 2)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
