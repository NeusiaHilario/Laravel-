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
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="ID">Codigo</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->id}}" placeholder="Codigo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                                    <label for="sexo">Sexo</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->sex}}"  placeholder="Sexo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="birthday">Data de Nascimento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_patients->dateofbirth}}"  placeholder="Data de Nascimento">
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
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <label for="clinic">Farmacia</label>
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
                                    <label for="tratamento">Data de inicio de tratamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->datainiciotarv}}" placeholder="Tratamento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <label for="pescritpion">Data de envio a farmacia</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->prescriptiondate}}" placeholder="Data">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="Regime">Tipo de tratamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_patients->regimenome}}"  placeholder="Home Address">
                                    </div>
                                    
                                </div>
                            </div>
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
                            <div> <a href="{{route('dados.medicacao', ['id' => $sync_temp_dispense->id])}}"class="btn btn-warning" >Verificar os dados referentes a medicacao deste paciente</a></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



@include('admin.Footer')
