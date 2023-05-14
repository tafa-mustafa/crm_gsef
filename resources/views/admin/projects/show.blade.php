@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.project.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.id') }}
                        </th>
                        <td>
                            {{ $project->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans("Nom de l'organisation") }}
                        </th>
                        <td>
                            {{ $project->nom_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.client') }}
                        </th>
                        <td>
                            {{ $project->client->first_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Satatut Oragnisatioen') }}
                        </th>
                        <td>
                            {!! $project->statut_organisation !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Type Organition') }}
                        </th>
                        <td>
                            {{ $project->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Region') }}
                        </th>
                        <td>
                            {{ $project->region }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Departement') }}
                        </th>
                        <td>
                            {{ $project->departement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre Emplois') }}
                        </th>
                        <td>
                            {{ $project->nombre_emplois ?? '' }}

                        </td>
                    </tr>
                     <tr>
                        <th>
                            {{ trans('Nombre hommes') }}
                        </th>
                        <td>
                            {{ $project->nombre_homme ?? '' }}

                        </td>
                    </tr> 
                    <tr>
                        <th>
                            {{ trans('Nombre femmes') }}
                        </th>
                        <td>
                            {{ $project->nombre_femme ?? '' }}

                        </td>
                    </tr> 
                     <tr>
                        <th>
                            {{ trans('Nombre jeune(-35ans)') }}
                        </th>
                        <td>
                            {{ $project->nombre_jeune ?? '' }}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre de personnes handicapées') }}
                        </th>
                        <td>
                            {{ $project->nombre_personne_handicapees ?? '' }}

                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('Nombre national') }}
                        </th>
                        <td>
                            {{ $project->nombre_national ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Nombre expatrier') }}
                        </th>
                        <td>
                            {{ $project->nombre_expatrier ?? '' }}

                        </td>
                    </tr> 
                     <tr>
                        <th>
                            {{ trans('Nombre temporaire') }}
                        </th>
                        <td>
                            {{ $project->nombre_temporaire ?? '' }}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre Volontaire') }}
                        </th>
                        <td>
                            {{ $project->nombre_volontaire ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Nombre stagiaire') }}
                        </th>
                        <td>
                            {{ $project->nombre_stagiaire ?? '' }}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Secteur intervation') }}
                        </th>
                        <td>
                            {{ $project->secteur_intervation ?? '' }}


                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés GDH') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_gdh ?? '' }}

                        </td>
                    </tr> 
                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés IDU') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_idu ?? '' }}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés SC') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_sc ?? '' }}

                        </td>
                    </tr>  
                        <tr>
                        <th>
                            {{ trans('Nombre projet implementés CAS') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_cas ?? '' }}

                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés ASAP') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_asp ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés ECB') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_ecb ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés MPG') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_mpg ?? '' }}

                        </td>
                    </tr>
                    <tr>
                                            <th>
                                                {{ trans('Nombre projet implementés EHA') }}

                                            </th>
                                            <td>
                                                {{ $project->nombre_projet_eha ?? '' }}

                                            </td>
                                        </tr>

                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés EPF') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_epf ?? '' }}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Nombre projet implementés IP') }}

                        </th>
                        <td>
                            {{ $project->nombre_projet_ip ?? '' }}

                        </td>
                    </tr>



                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe GDH') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_gdh ?? '' }}



                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe IDU') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_idu ?? '' }}



                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe SC') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_sc ?? '' }}

                        </td>
                    </tr>

                     <tr>
                         <th>
                             {{ trans('Montant en FCFA par secteur investissement directe ASAP') }}

                         </th>
                         <td>
                             {{ $project->montant_secteur_invers_direct_asap ?? '' }}

                         </td>
                     </tr>

                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe ECB') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_ecb ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe MPG') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_mpg ?? '' }}

                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant en FCFA par secteur investissement directe EHA') }}

                        </th>
                        <td>
                            {{ $project->montant_secteur_invers_direct_eha ?? '' }}

                        </td>
                    </tr>

                     <tr>
                         <th>
                             {{ trans('Montant en FCFA par secteur investissement directe EPF') }}

                         </th>
                         <td>
                             {{ $project->montant_secteur_invers_direct_epf ?? '' }}

                         </td>
                     </tr>

                     <tr>
                         <th>
                             {{ trans('Montant en FCFA par secteur investissement directe IP') }}

                         </th>
                         <td>
                             {{ $project->montant_secteur_invers_direct_ip ?? '' }}

                         </td>
                     </tr>









                    <tr>
                        <th>
                            {{ trans('Montant mobilisé au niveau International') }}


                        </th>
                        <td>
                            {{ $project->montant_inter ?? '' }}



                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Montant mobilisé au niveau National') }}


                        </th>
                        <td>
                            {{ $project->montant_national ?? '' }}



                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Montant mobilisé sur fonds propres') }}



                        </th>
                        <td>
                            {{ $project->montant_fonds_propre ?? '' }}




                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Montant contribution des Partenaires financiers (UE et pays membres)') }}


                        </th>
                        <td>
                            {{ $project->montant_partenaire_ue_pay_membre ?? '' }}


                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant contribution des Partenaires financiers (USAID)') }}


                        </th>
                        <td>
                            {{ $project->montant_partenaire_usaid ?? '' }}


                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('Montant contribution des Partenaires financiers (ACDI/Canada)') }}



                        </th>
                        <td>
                            {{ $project->montant_partenaire_acdi_canada ?? '' }}



                        </td>
                    </tr>
                     <tr>
                         <th>
                             {{ trans('Montant contribution des Partenaires financiers (Pays arabes)') }}




                         </th>
                         <td>
                             {{ $project->montant_partenaire_pay_arabe ?? '' }}



                         </td>
                     </tr>
                     <tr>
                         <th>
                             {{ trans('Montant contribution des Partenaires financiers (Autres précisé)') }}





                         </th>
                         <td>
                             {{ $project->montant_partenaire_autre ?? '' }}



                         </td>
                     </tr>



                    <tr>
                        <th>
                            {{ trans('REALISATIONS PAR SECTEUR INVESTISSEMENT DIRECTE') }}

                        </th>
                        <td>
                            {{ $project->realisation_secteur_invers_direct ?? '' }}




                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <th>
                            {{ trans("Nombre d'hommes bénificiaires") }}
                        </th>
                        <td>
                            {{ $project->nombre_homme_benef ?? '' }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans("Nombre de femmes bénificiaires") }}
                        </th>
                        <td>
                            {{ $project->nombre_femme_benef ?? '' }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans("Nombre de jeunes bénificiaires") }}
                        </th>
                        <td>
                            {{ $project->nombre_jeune_benef ?? '' }}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            {{ trans("Nombres de personnes handicapéess") }}

                        </th>
                        <td>
                            {{ $project->nombre_handicape_benef ?? '' }}

                        </td>
                    </tr>




                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection