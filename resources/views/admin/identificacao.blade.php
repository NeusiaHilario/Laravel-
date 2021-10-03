
@include('admin.Navbar') 
<img src="{{asset('img/download.png')}}" style="width:100px; margin-left:100px;" alt="">
<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Identificação </h2>
                        </div>
                        <div class="cmp-tb-hd bcs-hd">
                            <!--<h2>Basic Example</h2>-->
                            <p>Dados referentes a identificação do paciente. </p>
                        </div>
                        <div class="row">
                        <!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="ID">ID</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->id}}" placeholder="ID">
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="ID">NID</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" ID="lab" value="{{$sync_temp_patients->patientid}}" name="NID" placeholder="NID">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm- col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <label for="Nome:"></label>
                                    <div class="nk-int-st">
                                        <label for="Name">Nome</label>
                                        <input type="text" class="form-control"  value="{{$sync_temp_patients->firstnames}}" placeholder="Nome">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <label for="apelido">Apelido</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_patients->lastname}}" placeholder="Apelido">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="sexo">Género</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->sex}}"  placeholder="Sexo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house" ></i>
                                    </div>
                                    <label for="mainclinic">Unidade sanitária                             
                                    </label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->mainclinicname}}"   placeholder="Unidade sanitária">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <label for="contacto">Contacto</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->cellphone}}"  placeholder="Contacto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <label for="clinic">Farmácia privada</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->clinicname}}"  placeholder="Farmacia">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <label for="tratamento">Data de início de tratamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->datainiciotarv}}" placeholder="Tratamento">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <label for="pescritpion">Data de referência à farmácia privada</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->prescriptiondate}}" placeholder="Data">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
                            <!--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="Regime">Tipo de tratamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_patients->regimenome}}"  placeholder="Home Address">
                                    </div>
                                    
                                </div>
                            </div>-->
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <label for=""></label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Layer">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-chat"></i>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

   
         
    <div class="data-table-area">
        <div class="container">
            <div class="row">

            @php
           
            $patient_id =  $sync_temp_patients->patientid;
         
            $dispense_lista=DB::table('sync_temp_dispense')->select(
            
            'sync_temp_dispense.patientid AS patientid', 
            'sync_temp_dispense.dispensedate AS dispensedate',
            'sync_temp_dispense.pickupdate AS pickupdate',
            'sync_temp_dispense.dateexpectedstring AS dateexpectedstring',
            'sync_temp_dispense.drugname AS drugname',
            'sync_temp_dispense.dispensatrimestral AS dispensatrimestral',
            'sync_temp_dispense.regimenome AS regimenome')
            
            ->where('patientid', '=', $patient_id  )
            ->orderBy('pickupdate', 'desc')
            ->distinct()
            ->get();
            @endphp
            @if($dispense_lista)
           
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Dados referentes a medicacao deste paciente</h2>
                            <p></p>
                        </div>

                           <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>NID</th>
                                        
                                        <th>Medicamento</th>
                                        <th>Data de levantamento</th>
                                        <th>proxima data de levantamento</th>                                        
                                        
                                        <th>Dispensa trimestral</th>
                                        <th>Tipo de tratamento</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($dispense_lista as $lista)
                                
                                 @if($lista)
                                    <tr>
                                   
                                    <td>
                                    {{$lista->patientid}}
                                    </td>

                                 @if($lista)
                                     <td>
                                    {{$lista->drugname}} 
                                    </td>
                                    <td>
                                    {{ Carbon\Carbon::parse($lista->pickupdate)->format('d-m-Y')}}  
                                    </td>
                                    <td>
                                    {{ Carbon\Carbon::parse($lista->dateexpectedstring)->format('d-m-Y')}}  
                                    </td>
                                            
                                    @if($lista->dispensatrimestral == 1)        
                                    <td>
                                        {{'Sim'}}
                                    </td> 
                                    @else
                                    <td>{{'Nao'}}</td>
                                    @endif 
                                    <td>
                                    {{$lista->regimenome}}  
                                    </td>                          
                                   </tr>
                                 @endif
                                 @endif
                                @endforeach                        
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <!--<th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>-->
                                    </tr>
                                </tfoot>
                            </table>
                           </div>

            @endif               
</div>
</div>
</div>
</div>
</div>
                           
@include('admin.Footer')
