<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    public $tab;

    protected $dates = [
        'start_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [


        'nom_organisation',
        'statut_organisation',
        'type',
         'region',
        'departement',
        'nombre_emplois',
        'nombre_homme',
        'nombre_femme',
        'nombre_jeune',
        'nombre_personne_handicapees',
        'nombre_national',
        'nombre_expatrier',
        'nombre_temporaire',
        'nombre_permanent',
        'nombre_volontaire',
        'nombre_stagiaire',
        'secteur_intervation',
        'nombre_projet_implementes',
        'montant_secteur_invers_direct',
        'origine_ressource_financier',
        'montant_inter',
        'montant_national',
        'montant_fonds_propre',
        'montant_partenaire',
        'realisation_secteur_invers_direct',
        'nombre_homme_benef',
        'nombre_femme_benef',
        'nombre_jeune_benef',
        'nombre_handicape_benef',

        'nombre_projet_gdh',
        'nombre_projet_idu',
        'nombre_projet_sc',
        'nombre_projet_cas',
        'nombre_projet_asap',
        'nombre_projet_ecb',
        'nombre_projet_mpg',
        'nombre_projet_eha',
        'nombre_projet_epf',
        'nombre_projet_ip',
        'montant_secteur_invers_direct_gdh',
        'montant_secteur_invers_direct_idu',
        'montant_secteur_invers_direct_sc',
        'montant_secteur_invers_direct_asap',
        'montant_secteur_invers_direct_ecb',
        'montant_secteur_invers_direct_mpg',
        'montant_secteur_invers_direct_eha',
        'montant_secteur_invers_direct_epf',
        'montant_secteur_invers_direct_ip',
        'montant_secteur_invers_direct_autre',
        'montant_national',
        'montant_inter',
        'montant_fonds_propre',
        'montant_partenaire_ue_pay_membre',
        'montant_partenaire_usaid',
        'montant_partenaire_acdi_canada',
        'montant_partenaire_pay_arabe',
        'montant_partenaire_autre',
        'name',
        'budget',
        'client_id',
        'status_id',
        'start_date',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function notes()
    {
        return $this->hasMany(Note::class, 'project_id', 'id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'project_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'project_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class, 'status_id');
    }
}
