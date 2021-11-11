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
                     

                     <form action="/pacientes_registados" method="GET" style="margin-top:1rem;" name="frm">
                  
            
                  <input type="text" id="search" name="search" class="form-control" placeholder="Insira o primeiro nome ou o NID do paciente...">
                  <div class="break">
                  <button class="btn btn-warning" onclick="return IsEmpty();" type="submit">Pesquisar <i class="fa fa-search"></i></button>
                  </div>

                  <script language="Javascript">
                     function IsEmpty() {
                     if (document.forms['frm'].search.value === "") {
                       alert(" Porfavor preencha o campo de pesquisa !");
                          return false;
                          }
                        return true;
                                     }
                            
                  </script>
                  </form>
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

<style>

@media only screen and (max-width: 817px) and (min-width: 770px ) {
  .break {
    margin-left:-1rem;
    margin-top:10px;
  }
}
@media only screen and (min-width:481px) and (max-width: 768px ) {
  .break {
    margin-left:-28px;

  }
}
@media only screen and (min-width:1024px) and (max-width: 1366px ) {
  .break {
    margin-left:33.7rem;
    margin-top:-2.1rem;
    
  }
}
@media only screen and (min-width:768px) and (max-width: 1024px ) {
  .break {
    margin-left:20.9rem;
    margin-top:-2.1rem;
    
  }
}
@media only screen and (min-width:375px) and (max-width:479px ) {
  .break {
    margin-left:14.5rem;
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:668px) and (max-width:767px ) {
  .break {
    margin-left:24rem;
   
    margin-top:-2.1rem;

    
  }
}
    
@media only screen and (min-width:1025px) and (max-width:1199px ) {
  .break {
    margin-left:27.3rem;
   
    margin-top:-2.1rem;

    
  }
}
   
@media only screen and (min-width:480px) and (max-width:667px ) {
  .break {
    margin-left:24rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:1367px) and (max-width:1384px ) {
  .break {
    margin-left:33.7rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:992px) and (max-width:1024px ) {
  .break {
    margin-left:27.3rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:147px) and (max-width:374px ) {
  .break {
    margin-left:14.7rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:50px) and (max-width:146px ) {
  .break {
    margin-left:14.7rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:1385px) and (max-width:1800px ) {
  .break {
    margin-left:33.7rem;
   
    margin-top:-2.1rem;

    
  }
}

@media only screen and (min-width:1801px) and (max-width:2091px ) {
  .break {
    margin-left:33.7rem;
   
    margin-top:-2.1rem;

    
  }
}
    </style>
@include('admin.Footer')