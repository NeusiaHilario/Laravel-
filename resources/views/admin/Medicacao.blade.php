@include('admin.Navbar') 
@include('admin.BreadCrumbs')
<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Dados referentes a medicação do paciente</h2>
                            
                        </div>
                        <div class="cmp-tb-hd bcs-hd">
                            <!--<h2>Basic Example</h2>-->
                            <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="ID">Codigo:</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_dispense->id}}" placeholder="Codigo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <label for="dispensedate:"></label>
                                    <div class="nk-int-st">
                                        <label for="Name">Data proposta de levantamento:</label>
                                        <input type="text" class="form-control"  value="{{$sync_temp_dispense->dispensedate}}" placeholder="Data proposta de levantamento">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <label for="pickupdate">Data do levantamento efectuado</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_dispense->pickupdate}}" placeholder="Data do levantamento efectuado">
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
                                    <label for="dateexpectedstring">proxima data proposta de levantamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_dispense->dateexpectedstring}}"  placeholder="proxima data proposta de levantamento">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <label for="drugname">Nome do Medicamento</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"  value="{{$sync_temp_dispense->drugname}}"  placeholder="Nome do Medicamento">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <label for="dispensatrimestral">Dispensa trimestral</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_dispense->dispensatrimestral}}"  placeholder="Dispensa trimestral">
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
                                    <label for="regimenome">Tipo de tratamento                             
                                    </label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_dispense->regimenome}}"   placeholder="Tipo de tratamento   ">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                            </div>-->
                        </div>
                        <!--<div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <label for="pescritpion">Data de envio a farmacia</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$sync_temp_patients->prescriptiondate}}" placeholder="Data">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika"></i>
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
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                            </div> 
                           
                        </div>-->
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@include('admin.Footer')