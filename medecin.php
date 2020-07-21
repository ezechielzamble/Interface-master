<div class="row">

<?php
for ($i=1; $i < 4; $i++) { 
    # code...
?>
    <div class="col-lg-4">
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
    <?php 
        }?>
</div>