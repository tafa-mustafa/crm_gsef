    @extends('layouts.admin')
    @section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.project.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.projects.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nom_organisation') ? 'has-error' : '' }}">
                            <label for="nom_organisation">{{ trans("Nom d'organisation") }}</label>
                            <input type="text" id="nom_organisation" name="nom_organisation" class="form-control" value="{{ old('nom_organisation', isset($project) ? $project->nom_organisation : '') }}" required>
                            @if($errors->has('nom_organisation'))
                                <p class="help-block">
                                    {{ $errors->first('nom_organisation') }}
                                </p>
                            @endif
                            
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('statut_organisation') ? 'has-error' : '' }}">
                            <label for="statut_organisation">{{ trans('Statut Organisation') }}*</label>
                            <select name="statut_organisation" id="statut_organisation" class="form-control" required>
                                <option value="">{{ "Select"}}</option>
                                <option value={{ old('statut_organisation', isset($project) ? $project->statut_organisation : "ONG") }}>{{ "ONG"}}</option>
                                <option value={{ old('statut_organisation', isset($project) ? $project->statut_organisation : "Association") }}>{{ "Association"}}</option>
                            </select>

                            @if($errors->has('statut_organisation'))
                                <p class="help-block">
                                    {{ $errors->first('statut_organisation') }}
                                </p>
                            @endif
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                            <label for="type">{{ trans('type') }}*</label>
                            <!-- <input type="text" id="type" name="type" class="form-control" value="{{ old('type', isset($project) ? $project->type : '') }}" required> -->
                            <select name="type" id="client" class="form-control " required>
                                <option value="">{{ "Select"}}</option>
                                <option value={{ old('type', isset($project) ? $project->type : 'National') }}>{{ 'National' }}</option>
                                <option value={{ old('type', isset($project) ? $project->type : 'International') }}>{{ 'International' }}</option>
                            </select>
                            @if($errors->has('type'))
                                <p class="help-block">
                                    {{ $errors->first('type') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('region') ? 'has-error' : '' }}">
                            <label for="region">{{ trans('Region') }}*</label>
                            <input type="text" id="region" name="region" class="form-control" value="{{ old('region', isset($project) ? $project->region : '') }}">
                            @if($errors->has('region'))
                            <p class="help-block">
                                {{ $errors->first('region') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('departement') ? 'has-error' : '' }}">
                            <label for="departement">{{ trans("Departement") }}*</label>
                            <input type="text" id="departement" name="departement" class="form-control" value="{{ old('departement', isset($project) ? $project->departement : '') }}" required>
                            @if($errors->has('departement'))
                            <p class="help-block">
                                {{ $errors->first('departement') }}
                            </p>
                            @endif
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_emplois') ? 'has-error' : '' }}">
                            <label for="nombre_emplois">{{ trans("Nombre d'emploi (s)") }}*</label>
                            <input type="number" id="nombre_emplois" name="nombre_emplois" class="form-control" value="{{ old('nombre_emplois', isset($project) ? $project->nombre_emplois : '') }}" required>
                            @if($errors->has('nombre_emplois'))
                            <p class="help-block">
                                {{ $errors->first('nombre_emplois') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_homme') ? 'has-error' : '' }}">
                            <label for="nombre_homme">{{ trans("Nombre d'hommes") }}</label>
                            <input type="number" id="nombre_homme" name="nombre_homme" class="form-control" value="{{ old('nombre_homme', isset($project) ? $project->nombre_homme : '') }}" >
                            @if($errors->has('nombre_homme'))
                            <p class="help-block">
                                {{ $errors->first('nombre_homme') }}
                            </p>
                            @endif      
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_femme') ? 'has-error' : '' }}">
                            <label for="nombre_femme">{{ trans("Nombre de femmes") }}</label>
                            <input type="number" id="nombre_femme" name="nombre_femme" class="form-control" value="{{ old('nombre_femme', isset($project) ? $project->nombre_femme : '') }}" >
                            @if($errors->has('nombre_femme'))
                            <p class="help-block">
                                {{ $errors->first('nombre_femmes') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                </div>
                 
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_jeune') ? 'has-error' : '' }}">
                            <label for="nombre_jeune">{{ trans("Nombre de jeunes(-35ans) ") }}</label>
                            <input type="number" id="nombre_jeune" name="nombre_jeune" class="form-control" value="{{ old('nombre_jeune', isset($project) ? $project->nombre_jeune : '') }}">
                            @if($errors->has('nombre_jeune'))
                            <p class="help-block">
                                {{ $errors->first('nombre_jeune') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_personne_handicapees') ? 'has-error' : '' }}">
                            <label for="">{{ trans("Nombre de personne handicape(s)") }}</label>
                            <input type="number" id="nombre_personne_handicapees" name="nombre_personne_handicapees" class="form-control" value="{{ old('nombre_personne_handicapees', isset($project) ? $project->nombre_personne_handicapees : '') }}" >

                            @if($errors->has('nombre_personne_handicapees'))

                            <p class="help-block">
                                {{ $errors->first('nombre_personne_handicapees') }}

                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_national') ? 'has-error' : '' }}">
                            <label for="nombre_national">{{ trans("Nombre de membre national") }}</label>
                            <input type="number" id="nombre_national" name="nombre_national" class="form-control" value="{{ old('nombre_national', isset($project) ? $project->nombre_national : '') }}">
                            @if($errors->has('nombre_national'))
                            <p class="help-block">
                                {{ $errors->first('nombre_national') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_expatrier') ? 'has-error' : '' }}">
                            <label for="nombre_expatrier">{{ trans("Nombre de membre expatrier") }}*</label>
                            <input type="number" id="nombre_expatrier" name="nombre_expatrier" class="form-control" value="{{ old('nombre_expatrier', isset($project) ? $project->nombre_expatrier : '') }}" required>
                            @if($errors->has('nombre_expatrier'))
                            <p class="help-block">
                                {{ $errors->first('nombre_expatrier') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                </div>
             <div class="row">
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_temporaire') ? 'has-error' : '' }}">
                            <label for="nombre_temporaire">{{ trans("Nombre temporaire") }}*</label>
                            <input type="number" id="nombre_temporaire" name="nombre_temporaire" class="form-control" value="{{ old('nombre_temporaire', isset($project) ? $project->nombre_temporaire : '') }}" >
                            @if($errors->has('nombre_temporaire'))
                            <p class="help-block">
                                {{ $errors->first('nombre_temporaire') }}
                            </p>
                            @endif  
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_permanent') ? 'has-error' : '' }}">
                            <label for="nombre_permanent">{{ trans("Nombre Permenent") }}</label>
                            <input type="number" id="nombre_permanent" name="nombre_permanent" class="form-control" value="{{ old('nombre_permanent', isset($project) ? $project->nombre_permanent : '') }}" >
                            @if($errors->has('nombre_permanent'))
                            <p class="help-block">
                                {{ $errors->first('nombre_permanent') }}
                            </p>
                            @endif   
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_stagiaire') ? 'has-error' : '' }}">
                            <label for="nombre_stagiaire">{{ trans("Nombre de stagiaire") }}*</label>
                            <input type="number" id="nombre_stagiaire" name="nombre_stagiaire" class="form-control" value="{{ old('nombre_stagiaire', isset($project) ? $project->nombre_stagiaire : '') }}" >
                            @if($errors->has('nombre_stagiaire'))
                            <p class="help-block">
                                {{ $errors->first('nombre_stagiaire') }}
                            </p>
                            @endif     
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('nombre_volontaire') ? 'has-error' : '' }}">
                            <label for="nombre_volontaire">{{ trans("Nombre de Volontaires") }}*</label>
                            <input type="number" id="nombre_volontaire" name="nombre_volontaire" class="form-control" value="{{ old('nombre_volontaire', isset($project) ? $project->nombre_volontaire : '') }}">
                            @if($errors->has('nombre_volontaire'))
                            <p class="help-block">
                                {{ $errors->first('nombre_volontaire') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
             <div class="row">
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('secteur_intervation') ? 'has-error' : '' }}">
                            <label for="secteur_intervation">{{ trans("Realisations par secteur investissement directe") }}*</label>
                            <select name="secteur_intervation" id="secteur_intervation" class="form-control select2" multiple="multiple">

                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "GDH Gouvernance/Droits de l'Homme") }}>{{ "GD Gouvernance/Droits de l'Homme "}}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "IDU Infrastructures, Développement Urbain") }}>{{ "IDU: Infrastructures, Développement Urbain" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "SC Santé Communautaire") }}>{{ "SC Santé Communautaire" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "CAS Culture  Artisanat et Loisir") }}>{{ "CA: Culture  Artisanat et Loisir" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "ASAP Agriculture, Sécurité Alimentaire et Pêche") }}>{{ "ASAP Agriculture, Sécurité Alimentaire et Pêche" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "ECB Environnement, Climat et Biodiversité") }}>{{ "ECB Environnement, Climat et Biodiversité" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation: "MPG Mines, Pétroles et Gaz") }}>{{ "MPG: Mines, Pétroles et Gaz" }}</option>
                                <option value={{old('secteur_intervation', isset($project) ? $project->secteur_intervation : "EHA Eau, Hygiène et Assainissement") }}>{{ "EHA: Eau, Hygiène et Assainissement" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "EPF Education et Formation Professionnelle") }}>{{ "EPF Education et Formation Professionnelle" }}</option>
                                <option value={{ old('secteur_intervation', isset($project) ? $project->secteur_intervation : "PI Plaidoyer et Influence") }}>{{ "PI Plaidoyer et Influence" }}</option>
                            </select>
                            @if($errors->has('secteur_intervation'))
                            <p class="help-block">
                                {{ $errors->first('secteur_intervation') }}
                            </p>
                            @endif
                        </div>
                    </div>
               </div>
             
                
            
                
          
                    
                
                
             

                

        {{-- Nombre de projets --}}
            <div> <label for="secteur_intervation">{{ trans("Nombre de projets implémentés") }}*</label></div>
                    
            <div class="form-group {{ $errors->has('nombre_projet_gdh') ? 'has-error' : '' }} input-group mb-3">

                <span class="input-group-text">{{ "GDH : Gouvernance/Droits de l'Homme" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_gdh" name="nombre_projet_gdh" class="form-control" value="{{ old('nombre_projet_gdh', isset($project) ? $project->nombre_projet_gdh : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_gdh'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_gdh') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_idu') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "IDU : Infrastructures, Développement Urbain" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_idu" name="nombre_projet_idu" class="form-control" value="{{ old('nombre_projet_idu', isset($project) ? $project->nombre_projet_idu : '') }}" type="text" class="form-control" placeholder="Nombre Projet IDU" aria-label="Server">

                @if($errors->has('nombre_projet_idu'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_idu') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_sc') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "SC : Santé Communautaire" }}</span>
                <span class="input-group-text">@</span>

                <input type="number" id="nombre_projet_sc" name="nombre_projet_sc" class="form-control" value="{{ old('nombre_projet_sc', isset($project) ? $project->nombre_projet_sc : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_sc'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_sc') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_cas') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "CAS : Culture Artisanat et Loisir" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_cas" name="nombre_projet_cas" class="form-control" value="{{ old('nombre_projet_cas', isset($project) ? $project->nombre_projet_cas : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_cas'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_cas') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_asap') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "ASAP : Agriculture, Sécurité Alimentaire et Pêche" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_asap" name="nombre_projet_asap" class="form-control" value="{{ old('nombre_projet_asap', isset($project) ? $project->nombre_projet_asap : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
            @if($errors->has('nombre_projet_asap'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_asap') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_ecb') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "ECB : Environnement, Climat et Biodiversité" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_ecb" name="nombre_projet_ecb" class="form-control" value="{{ old('nombre_projet_ecb', isset($project) ? $project->nombre_projet_ecb : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_ecb'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_ecb') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_mpg') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "MPG : Mines, Pétroles et Gaz" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_mpg" name="nombre_projet_mpg" class="form-control" value="{{ old('nombre_projet_mpg', isset($project) ? $project->nombre_projet_mpg : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_mpg'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_mpg') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_eha') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "EHA : Eau, Hygiène et Assainissement" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_eha" name="nombre_projet_eha" class="form-control" value="{{ old('nombre_projet_eha', isset($project) ? $project->nombre_projet_eha : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_eha'))

                <p class="help-block">
                    {{ $errors->first('nombre_projet_eha') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('nombre_projet_epf') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "EPF : Education et Formation Professionnelle" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_epf" name="nombre_projet_epf" class="form-control" value="{{ old('nombre_projet_epf', isset($project) ? $project->nombre_projet_epf : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_epf'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_epf') }}


                </p>
                @endif

            </div>
                    
            <div class="form-group {{ $errors->has('nombre_projet_ip') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "PI : Plaidoyer et Influence" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="nombre_projet_ip" name="nombre_projet_ip" class="form-control" value="{{ old('nombre_projet_ip', isset($project) ? $project->nombre_projet_ip : '') }}" type="text" class="form-control" placeholder="Nombre Projet" aria-label="Server">
                @if($errors->has('nombre_projet_ip'))
                <p class="help-block">
                    {{ $errors->first('nombre_projet_ip') }}

                </p>
                @endif

            </div>

            {{-- montant secteur --}}
            <div> <label for="secteur_intervation">{{ trans("Montant en FCFA par secteur investissement directe") }}</label></div>


            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_gdh') ? 'has-error' : '' }} input-group mb-3">

                <span class="input-group-text">{{ "GDH : Gouvernance/Droits de l'Homme" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_gdh" name="montant_secteur_invers_direct_gdh" class="form-control" value="{{ old('montant_secteur_invers_direct_gdh', isset($project) ? $project->montant_secteur_invers_direct_gdh : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_gdh'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_gdh') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_idu') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "IDU : Infrastructures, Développement Urbain" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_idu" name="montant_secteur_invers_direct_idu" class="form-control" value="{{ old('montant_secteur_invers_direct_idu', isset($project) ? $project->montant_secteur_invers_direct_idu : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">

                @if($errors->has('montant_secteur_invers_direct_idu'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_idu') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_sc') ? 'has-error' : '' }} input-group mb-3">

                <span class="input-group-text">{{ "SC : Santé Communautaire" }}</span>
                <span class="input-group-text">@</span>

                <input type="number" id="montant_secteur_invers_direct_sc" name="montant_secteur_invers_direct_sc" class="form-control" value="{{ old('montant_secteur_invers_direct_sc', isset($project) ? $project->montant_secteur_invers_direct_sc : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_sc'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_sc') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_cas') ? 'has-error' : '' }} input-group mb-3">

                <span class="input-group-text">{{ "CAS : Culture Artisanat et Loisir" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_cas" name="montant_secteur_invers_direct_cas" class="form-control" value="{{ old('montant_secteur_invers_direct_cas', isset($project) ? $project->montant_secteur_invers_direct_cas : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">

                @if($errors->has('montant_secteur_invers_direct_cas'))

                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_cas') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_asap') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "ASAP : Agriculture, Sécurité Alimentaire et Pêche" }}</span>
                <span class="input-group-text">@</span>
                <input type="numbemontant_secteur_invers_direct_projet_asap" name="montant_secteur_invers_direct_asap" class="form-control" value="{{ old('montant_secteur_invers_direct_asap', isset($project) ? $project->montant_secteur_invers_direct_asap : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_asap'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_asap') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_ecb') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "ECB : Environnement, Climat et Biodiversité" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_ecb" name="montant_secteur_invers_direct_ecb" class="form-control" value="{{ old('montant_secteur_invers_direct_ecb', isset($project) ? $project->montant_secteur_invers_direct_ecb : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_ecb'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_ecb') }}
                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_mpg') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "MPG : Mines, Pétroles et Gaz" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_mpg" name="montant_secteur_montant_secteur_invers_direct_mpg" class="form-control" value="{{ old('montant_secteur_invers_direct_mpg', isset($project) ? $project->montant_secteur_invers_direct_mpg : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_mpg'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_mpg') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_eha') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "EHA : Eau, Hygiène et Assainissement" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_eha" name="montant_secteur_invers_direct_eha" class="form-control" value="{{ old('montant_secteur_invers_direct_eha', isset($project) ? $project->montant_secteur_invers_direct_eha : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_eha'))

                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_eha') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_epf') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "EPF : Education et Formation Professionnelle" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_epf" name="montant_secteur_invers_direct_epf" class="form-control" value="{{ old('montant_secteur_montant_secteur_invers_direct_epf', isset($project) ? $project->montant_secteur_montant_secteur_invers_direct_epf : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_epf'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_epf') }}


                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_ip') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "PI : Plaidoyer et Influence" }}</span>
                <span class="input-group-text">@</span>
                <input type="number" id="montant_secteur_invers_direct_ip" name="montant_secteur_invers_direct_ip" class="form-control" value="{{ old('montant_secteur_invers_direct_ip', isset($project) ? $project->montant_secteur_invers_direct_ip : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_ip'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_ip') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_secteur_invers_direct_autre') ? 'has-error' : '' }} input-group mb-3">
                <span class="input-group-text">{{ "Autre aprecise" }}</span>
                <span class="input-group-text">@</span>
                <input type="text" id="montant_secteur_invers_direct_autre" name="montant_secteur_invers_direct_autre" class="form-control" value="{{ old('montant_secteur_invers_direct_autre', isset($project) ? $project->montant_secteur_invers_direct_autre : '') }}" type="text" class="form-control" placeholder="Secteur et montant" aria-label="Server">
                @if($errors->has('montant_secteur_invers_direct_autre'))
                <p class="help-block">
                    {{ $errors->first('montant_secteur_invers_direct_autre') }}

                </p>
                @endif

            </div>

            <div class="form-group {{ $errors->has('montant_national') ? 'has-error' : '' }}">
                <label for="montant_national">{{ trans("Montant mobilisé au niveau national") }}</label>


                <input type='number' id="montant_national" name="montant_national" class="form-control " value="{{ old('montant_national', isset($project) ? $project->montant_national : '') }}">




                @if($errors->has('montant_national'))
                <p class="help-block">
                    {{ $errors->first('montant_national') }}
                </p>
                @endif

            </div>

                        <div class="form-group {{ $errors->has('montant_inter') ? 'has-error' : '' }}">
                            <label for="montant_inter">{{ trans("Montant mobilisé au niveau international") }}</label>

                            <input type='number' id="montant_inter" name="montant_inter" class="form-control " value="{{ old('montant_inter', isset($project) ? $project->montant_inter : '') }}">
                            @if($errors->has('montant_inter'))
                            <p class="help-block">
                                {{ $errors->first('montant_inter') }}
                            </p>
                            @endif

                        </div>

                        <div class="form-group {{ $errors->has('montant_fonds_propre') ? 'has-error' : '' }}">
                            <label for="montant_fonds_propre">{{ trans("Montant mobilisé sur fonds propres") }}</label>
                            <input type='number' id="montant_fonds_propre" name="montant_fonds_propre" class="form-control " value="{{ old('montant_fonds_propre', isset($project) ? $project->montant_fonds_propre : '') }}">
                            @if($errors->has('montant_fonds_propre'))
                            <p class="help-block">
                                {{ $errors->first('montant_fonds_propre') }}
                            </p>
                            @endif

                        </div>



                        {{-- Partenaire --}}
                        <div> <label for="montant_partenaire_ue_pay_membre">{{ trans("Montant contribution des Partenaires financiers") }}</label></div>
                        <div class="form-group {{ $errors->has('montant_partenaire_ue_pay_membre') ? 'has-error' : '' }} input-group mb-3">

                            <span class="input-group-text">{{ "UE et pays membres" }}</span>
                            <span class="input-group-text">@</span>
                            <input type="number" id="montant_partenaire_ue_pay_membre" name="montant_partenaire_ue_pay_membre" class="form-control" value="{{ old('montant_partenaire_ue_pay_membre', isset($project) ? $project->montant_partenaire_ue_pay_membre : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                            @if($errors->has('montant_partenaire_ue_pay_membre'))
                            <p class="help-block">
                                {{ $errors->first('montant_partenaire_ue_pay_membre') }}
                            </p>
                            @endif

                        </div>

                        <div class="form-group {{ $errors->has('montant_partenaire_usaid') ? 'has-error' : '' }} input-group mb-3">
                            <span class="input-group-text">{{ "USAID" }}</span>

                            <span class="input-group-text">@</span>
                            <input type="number" id="montant_partenaire_usaid" name="montant_partenaire_usaid" class="form-control" value="{{ old('montant_partenaire_usaid', isset($project) ? $project->montant_partenaire_usaid : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">

                            @if($errors->has('montant_partenaire_usaid'))
                            <p class="help-block">
                                {{ $errors->first('montant_partenaire_usaid') }}
                            </p>
                            @endif

                        </div>

                        <div class="form-group {{ $errors->has('partenaire_acdi_canada') ? 'has-error' : '' }} input-group mb-3">
                            <span class="input-group-text">{{ "ACDI / Canada" }}</span>

                            <span class="input-group-text">@</span>

                            <input type="number" id="partenaire_acdi_canada" name="partenaire_acdi_canada" class="form-control" value="{{ old('montant_partenaire_acdi_canada', isset($project) ? $project->montant_partenaire_acdi_canada : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                            @if($errors->has('montant_partenaire_acdi_canada'))
                            <p class="help-block">
                                {{ $errors->first('montant_partenaire_acdi_canada') }}
                            </p>
                            @endif

                        </div>

                        <div class="form-group {{ $errors->has('montant_partenaire_pay_arabe') ? 'has-error' : '' }} input-group mb-3">
                            <span class="input-group-text">{{ "Pays arabes" }}</span>
                            <span class="input-group-text">@</span>
                            <input type="number" id="montant_partenaire_pay_arabe" name="montant_partenaire_pay_arabe" class="form-control" value="{{ old('montant_partenaire_pay_arabe', isset($project) ? $project->montant_partenaire_pay_arabe : '') }}" type="text" class="form-control" placeholder="Montant" aria-label="Server">
                            @if($errors->has('montant_partenaire_pay_arabe'))
                            <p class="help-block">
                                {{ $errors->first('montant_partenaire_pay_arabe') }}
                            </p>
                            @endif

                        </div>

                        <div class="form-group {{ $errors->has('montant_partenaire_autre') ? 'has-error' : '' }} input-group mb-3">

                            <span class="input-group-text">{{ "Autres à préciser" }}</span>

                            <span class="input-group-text">@</span>
                            <input type="number" id="montant_partenaire_autre" name="montant_partenaire_autre" class="form-control" value="{{ old('montant_partenaire_autre', isset($project) ? $project->montant_partenaire_autre : '') }}" type="text" class="form-control" placeholder="Partenaire et montant" aria-label="Server">
                            @if($errors->has('montant_partenaire_autre'))
                            <p class="help-block">
                                {{ $errors->first('montant_partenaire_autre') }}
                            </p>
                            @endif

                        </div>
                        
                        <div class="form-group {{ $errors->has('realisation_secteur_invers_direct') ? 'has-error' : '' }}">
                            <label for="realisation_secteur_invers_direct">{{ trans("Realisations par secteur investissement directe") }}*</label>
                            <select name="realisation_secteur_invers_direct" id="realisation_secteur_invers_direct" class="form-control select2" >
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "GDH: Gouvernance/Droits de l'Homme") }}>{{ "GD: Gouvernance/Droits de l’Homme "}}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "IDU: Infrastructures, Développement Urbain") }}>{{ "IDU: Infrastructures, Développement Urbain" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "SC: Santé Communautaire") }}>{{ "SC: Santé Communautaire" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "CAS: Culture  Artisanat et Loisir") }}>{{ "CAS: Culture  Artisanat et Loisir" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "ASAP: Agriculture, Sécurité Alimentaire et Pêche") }}>{{ "ASAP : Agriculture, Sécurité Alimentaire et Pêche" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "ECB: Environnement, Climat et Biodiversité") }}>{{ "ECB: Environnement, Climat et Biodiversité" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct: "MPG: Mines, Pétroles et Gaz") }}>{{ "MPG: Mines, Pétroles et Gaz" }}</option>
                                <option value={{old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "EHA: Eau, Hygiène et Assainissement") }}>{{ "EHA: Eau, Hygiène et Assainissement" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "EPF: Education et Formation Professionnelle") }}>{{ "EPF: Education et Formation Professionnelle" }}</option>
                                <option value={{ old('realisation_secteur_invers_direct', isset($project) ? $project->realisation_secteur_invers_direct : "PI: Plaidoyer et Influence") }}>{{ "PI: Plaidoyer et Influence" }}</option>
                            </select>
                            @if($errors->has('realisation_secteur_invers_direct'))
                            <p class="help-block">
                                {{ $errors->first('realisation_secteur_invers_direct') }}
                            </p>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('nombre_homme_benef') ? 'has-error' : '' }}">
                            <label for="nombre_homme_benef">{{ trans("Nombre d’hommes ") }}</label>

                            <input type="number" id="nombre_homme_benef" name="nombre_homme_benef" class="form-control" value="{{ old('nombre_homme_benef', isset($project) ? $project->nombre_homme_benef : '') }}">

                            @if($errors->has('nombre_homme_benef'))
                            <p class="help-block">
                                {{ $errors->first('nombre_homme_benef') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div> 

                        <div class="form-group {{ $errors->has('nombre_femme_benef') ? 'has-error' : '' }}">
                            <label for="nombre_femme_benef">{{ trans("Nombre de femmes BENEFICIAIRES") }}</label>


                            <input type="number" id="nombre_femme_benef" name="nombre_femme_benef" class="form-control" value="{{ old('nombre_femme_benef', isset($project) ? $project->nombre_femme_benef : '') }}">

                            @if($errors->has('nombre_femme_benef'))
                            <p class="help-block">
                                {{ $errors->first('nombre_femme_benef') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>
                        
                        <div class="form-group {{ $errors->has('nombre_jeune_benef') ? 'has-error' : '' }}">
                            <label for="nombre_jeune_benef">{{ trans("Nombre de jeunes BENEFICIAIRES") }}</label>



                            <input type="number" id="nombre_jeune_benef" name="nombre_jeune_benef" class="form-control" value="{{ old('nombre_jeune_benef', isset($project) ? $project->nombre_jeune_benef : '') }}">

                            @if($errors->has('nombre_jeune_benef'))
                            <p class="help-block">
                                {{ $errors->first('nombre_jeune_benef') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div> 
                        

                        <div class="form-group {{ $errors->has('nombre_handicape_benef') ? 'has-error' : '' }}">
                            <label for="nombre_handicape_benef">{{ trans("Nombre de handicapes BENEFICIAIRES") }}</label>

                            <input type="number" id="nombre_handicape_benef" name="nombre_handicape_benef" class="form-control" value="{{ old('nombre_handicape_benef', isset($project) ? $project->nombre_handicape_benef : '') }}">

                            @if($errors->has('nombre_handicape_benef'))
                            <p class="help-block">
                                {{ $errors->first('nombre_handicape_benef') }}
                            </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.name_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
                            <label for="client">{{ trans('cruds.project.fields.client') }}*</label>
                            <select name="client_id" id="client" class="form-control select2" required>
                                @foreach($clients as $id => $client)
                                    <option value="{{ $id }}" {{ (isset($project) && $project->client ? $project->client->id : old('client_id')) == $id ? 'selected' : '' }}>{{ $client }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client_id'))
                                <p class="help-block">
                                    {{ $errors->first('client_id') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.project.fields.description') }}</label>
                            <textarea id="description" name="description" class="form-control ">{{ old('description', isset($project) ? $project->description : '') }}</textarea>
                            @if($errors->has('description'))
                                <p class="help-block">
                                    {{ $errors->first('description') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.description_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                            <label for="start_date">{{ trans('cruds.project.fields.start_date') }}</label>
                            <input type="text" id="start_date" name="start_date" class="form-control date" value="{{ old('start_date', isset($project) ? $project->start_date : '') }}">
                            @if($errors->has('start_date'))
                                <p class="help-block">
                                    {{ $errors->first('start_date') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.start_date_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('budget') ? 'has-error' : '' }}">
                            <label for="budget">{{ trans('cruds.project.fields.budget') }}</label>
                            <input type="number" id="budget" name="budget" class="form-control" value="{{ old('budget', isset($project) ? $project->budget : '') }}" step="0.01">
                            @if($errors->has('budget'))
                                <p class="help-block">
                                    {{ $errors->first('budget') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.project.fields.budget_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('status_id') ? 'has-error' : '' }}">
                            <label for="status">{{ trans('cruds.project.fields.status') }}</label>
                            <select name="status_id" id="status" class="form-control select2">
                                @foreach($statuses as $id => $status)
                                    <option value="{{ $id }}" {{ (isset($project) && $project->status ? $project->status->id : old('status_id')) == $id ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status_id'))
                                <p class="help-block">
                                    {{ $errors->first('status_id') }}
                                </p>
                            @endif
                        </div>
                        
                        <div>
                            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                        </div>
                </form>
            </div>
        </div>
    @endsection