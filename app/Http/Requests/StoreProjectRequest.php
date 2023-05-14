<?php

namespace App\Http\Requests;

use App\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
          return [
            'name'       => [
                '',
            ], 
            
            'client_id'  => [
                'required',
                'integer',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],

            'nom_organisation' => '',
            'statut_organisation'  =>'required',
            'type' =>'',
             'region' =>'required',
            'departement' =>'required',
            'nombre_emplois' =>'',
            'nombre_homme'  =>'',
            'nombre_femme'  =>'',
            'nombre_jeune'  =>'',
            'nombre_personne_handicapees' =>'',
            'nombre_national' =>'',
            'nombre_expatrier'  =>'',
            'nombre_temporaire'  =>'',
            'nombre_permanent'  =>'',
            'nombre_volontaire'  =>'',
            'nombre_stagiaire'  =>'',
            'secteur_intervation'  =>'',
            'nombre_projet_implementes'  =>'',
            'montant_secteur_invers_direct'  =>'',
            'origine_ressource_financier'  =>'',
            'montant_inter'  =>'',
            'montant_national'  =>'',
            'montant_fonds_propre'  =>'',
            'montant_partenaire'  =>'',
            'realisation_secteur_invers_direct'  =>'',
            'nombre_homme_benef'   =>'',
            'nombre_femme_benef'   =>'',
            'nombre_jeune_benef'   =>'',
            'nombre_handicape_benef'   =>'',

            'nombre_projet_gdh'   =>'',
            'nombre_projet_idu'   =>'',
            'nombre_projet_sc'   =>'',
            'nombre_projet_cas'   =>'',
            'nombre_projet_asap'   =>'',
            'nombre_projet_ecb'   =>'',
            'nombre_projet_mpg'   =>'',
            'nombre_projet_eha'   =>'',
            'nombre_projet_epf'   =>'',
            'nombre_projet_ip'   =>'',
            'montant_secteur_invers_direct_gdh'   =>'',
            'montant_secteur_invers_direct_idu'   =>'',
            'montant_secteur_invers_direct_sc'   =>'',
            'montant_secteur_invers_direct_asap'   =>'',
            'montant_secteur_invers_direct_ecb'   =>'',
            'montant_secteur_invers_direct_mpg'   =>'',
            'montant_secteur_invers_direct_eha'   =>'',
            'montant_secteur_invers_direct_epf'   =>'',
            'montant_secteur_invers_direct_ip'   =>'',
            'montant_secteur_invers_direct_autre'   =>'',
            'montant_national'   =>'',
            'montant_inter'   =>'',
            'montant_fonds_propre'   =>'',
            'montant_partenaire_ue_pay_membre'   =>'',
            'montant_partenaire_usaid'   =>'',
            'montant_partenaire_acdi_canada'   =>'',
            'montant_partenaire_pay_arabe'   =>'',
            'montant_partenaire_autre'   =>'',
            'name'   =>'',
            'budget',
            'client_id'   =>'',
            'status_id'   =>'',
            'start_date'   =>'',
            'created_at'   =>'',
            'updated_at'   =>'',
            'deleted_at'   =>'',
            'description'   =>'',
        ];
    }
}
