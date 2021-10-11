
@include('admin.Navbar') 
<title>pacientes_registados</title>  

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
                                  
        
                                    <div class="breadcomb-ctn">
										<h2>Pacientes_registados</h2>
										<p>Bem vindo ao sistema </p>
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
                            <table id="data-table-basic" placeholder="pesquisar..." class="table table-striped">
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
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    @include('admin.Footer')