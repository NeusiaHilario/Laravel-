@include('admin.Navbar') 
<div class="data-table-area">
        <div class="container">
            <div class="row">

            @php
            $dispense_lista=DB::table('sync_temp_dispense')->select('sync_temp_dispense.id AS id', 
            'sync_temp_dispense.patientid AS patientid',
            'sync_temp_dispense.patientfirstname AS patientfirstname',
            'sync_temp_dispense.dispensedate AS dispensedate',
             'sync_temp_dispense.pickupdate AS pickupdate',
              'sync_temp_dispense.dateexpectedstring AS dateexpectedstring',
               'sync_temp_dispense.drugname AS drugname',
               'sync_temp_dispense.dispensatrimestral AS dispensatrimestral',
               'sync_temp_dispense.regimenome AS regimenome')
               
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
                                        <th>Nome</th>
                                        <th>Data proposta de levantamento</th>
                                        <th>Data do levantamento efectuado</th>
                                        <th>proxima data proposta de levantamento</th>                                        
                                        <th>Nome do Medicamento</th>
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
                                    <td>
                                    {{$lista->patientfirstname}}
                                    </td>
                                 @if($lista)
                                    <td>
                                    {{ Carbon\Carbon::parse($lista->dispensedate)->format('d-m-Y')}} 
                                    
                                    </td>
                                    <td>
                                    {{ Carbon\Carbon::parse($lista->pickupdate)->format('d-m-Y')}}  
                                    
                                    </td>
                                    <td>
                                    {{ Carbon\Carbon::parse($lista->dateexpectedstring)->format('d-m-Y')}}  
                                    
                                    </td>
                                    <td>
                                    {{$lista->drugname}} 
                                    </td> 
                                    @if($lista->dispensatrimestral == 1)        
                                    <td>
                                        {{'Sim'}}
                                    </td> 
                                    @else
                                    <td>{{'Não'}}</td>
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