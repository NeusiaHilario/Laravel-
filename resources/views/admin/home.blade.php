@include('admin.Navbar') 
<title>pacientes_registados</title>  
<p></p>
<p></p>

<!-- Breadcomb area Start-->
<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
                                  
        
                                    <div class="breadcomb-ctn" >
										<h2>Pacientes_registados</h2>
										<p></p>
                                       

                                  
                                    
                                </div>
                                </div>
                                <div>

                                </div>
                                <p></p>
                                <form action="/pacientes_registados" method="GET" >
                                    <input type="text" id="search" name="search" class="form-control" placeholder="pesquise pelo nome do paciente e pressione Enter para obter resultados...">
                                    </form>
                                    </div>

								</div>
                               </div>
							</div>
                            </div>
                            </div>
                            </div>
							<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>-->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <p></p>

    
	<!-- Breadcomb area End--> 
 <!-- Data Table area Start-->
 
 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Visualisar Pacientes</h2>
                            <p></p>
                        </div>
                        <div class="table-responsive">
                            
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NID</th>
                                        <th>Nome</th>
                                        <th>Apelido</th>
                                        <th>Género</th>                                        
                                        <th>Unidade sanitária</th>
                                        <th>Farmácia privada</th>
                                        <th>Opções</th>
                                        
                                    </tr>
                                </thead>



                                <tbody>
                                @foreach($pacientelista as $receber)
                                <tr>
                                    <td>
                                        {{$receber->patientid}}
                                    </td>
                                    <td>
                                        {{$receber->firstnames}}
                                    </td>
                                    <td>
                                        {{$receber->lastname}}
                                    </td>
                                    <td>
                                        {{$receber->sex}}
                                    </td>
                                    <td>
                                        {{$receber->mainclinicname}}
                                    </td>         
                                    <td>
                                        {{$receber->clinicname}}
                                    </td>                           
                                    <td>
                                    <a href="{{route('dados.identificacao', ['id' => $receber->id])}}" class="btn btn-warning">Ver mais</a>                                  
                                    </td>   
                                                                
                                </tr>
                                @endforeach   
                                @if(count($pacientelista) == 0 && $search)
                               <p>Não foi possível encontrar nenhum paciente com o nome {{ $search }}!</p>
                                @elseif(count($pacientelista) == 0)
                                <p>Não há pacientes disponíveis</p>

                                @endif                 
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>NID</th>
                                        <th>Nome</th>
                                        <th>Apelido</th>
                                        <th>Género</th>                                        
                                        <th>Unidade sanitária</th>
                                        <th>Farmácia privada</th>
                                        <th>Opções</th>
                                    </tr>
                                </tfoot>
                            </table>
                            


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    @include('admin.Footer')