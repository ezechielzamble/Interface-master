<div class="row">

    <?php
    for ($i=1; $i < 7; $i++) { 
    # code...
        ?>

        <div class="col-lg-4" data-toggle="modal" data-target=".bs-example-modal-lg">
            <div class="card m-b-20">
                <div class="card-block">

                    <div class="media">
                        <img class="d-flex mr-3 rounded-circle thumb-lg" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="m-t-10 font-18 mb-1">Mathias N. Klausen</h5>
                            <p class="text-muted m-b-5">pauline@admiria.com</p>
                            <p class="text-muted font-14 font-500 font-secondary">Creative Director</p>
                        </div>
                    </div>

                    <div class="row text-center m-t-20">
                        <div class="col-6">
                            <h5 class="mb-0">9652</h5>
                            <p class="text-muted font-14">Activated</p>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">7451</h5>
                            <p class="text-muted font-14">Activated</p>
                        </div>
                    </div>

                    <div id="<?php echo "sparkline".$i;?>" class="text-center"></div>

                </div>
            </div>
        </div>

        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                       <div class="col-sm-12">
                        <div class="card m-b-20">
                            <div class="card-block">
                                <div class="row">
                                    <div class='col-md-9'>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-thumbnail" alt="200x200" style="width: 150px; height: 150px;" src="assets/images/small/img-3.jpg" data-holder-rendered="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-20">
                        <div class="card-block">

                            <form class="" action="#">


                                <h4 class="mt-0 header-title">Prestation</h4>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Prise de Constances</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Actes</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="home" role="tabpanel">
                                        <div class="row">
                                            <div class="col-sm-5">


                                                <h4>Tension arterielle</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">

                                                            <div class="col-lg-12">
                                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group row">

                                                            <div class="col-lg-12">
                                                                <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">


                                                <h4>Temperature</h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">

                                                            <div class="col-lg-12">
                                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">


                                                <h4>Poids</h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">

                                                            <div class="col-lg-12">
                                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="tab-pane p-3" id="profile" role="tabpanel">
                                     <div class="row">
                                        <div class="col-sm-5">


                                            <h4>Soins</h4>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label >Type praticien</label>
                                                        <div >
                                                            <select class="custom-select">
                                                                <option selected>Selection du type</option>
                                                                <option value="Pha">Pharmacien</option>
                                                                <option value="Inf">Infirmier</option>
                                                                <option value="Med">Medecin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">

                                                        <div class="col-lg-12">
                                                           <textarea required class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">


                                            <h4>Temperature</h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <table class="table">
                                                <thead class="thead-default">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Acte</th>
                                                    <th>Commentaire</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-pink waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php 
}?>
</div>