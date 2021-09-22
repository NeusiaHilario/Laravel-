@include('admin.Navbar') 
@include('admin.BreadCrumbs')
<div class="data-table-area">
        <div class="container">
            <div class="row">
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
                                        <th>ID</th>
                                        <th>NID</th>
                                        <th>Data proposta de levantamento</th>
                                        <th>Data do levantamento efectuado</th>
                                        <th>proxima data proposta de levantamento</th>                                        
                                        <th>Nome do Medicamento</th>
                                        <th>Dispensa trimestral</th>
                                        <th>Tipo de tratamento</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($lista as $dispense)
                                <tr>
                                <td>
                                        {{$dispense->id}}
                                    </td>
                                    <td>
                                        {{$dispense->patientid}}
                                    </td>
                                    <td>
                                        {{$dispense->dispensedate}}
                                    </td>
                                    <td>
                                        {{$dispense->pickupdate}}
                                    </td>
                                    <td>
                                        {{$dispense->dateexpectedstring}}
                                    </td>
                                    <td>
                                        {{$dispense->drugname}}
                                    </td>         
                                    <td>
                                        {{$dispense->dispensatrimestral}}
                                    </td>  
                                    <td>
                                        {{$dispense->regimenome}}
                                    </td>                          

                                </tr>
                                @endforeach                        
                                </tbody>

                               
                            </table>
                           </div>
</div>
</div>
</div>
</div>
</div>

@include('admin.Footer')