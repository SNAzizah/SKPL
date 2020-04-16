<!-- Search -->
<div class="container text-center">
    <div class="container">
        <div class="row pt-4">
            <div class="col md-6 mx-auto" style="max-width: 75%;">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Drugs Here" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col">
            <h3 class="text-center">List Of Drugs</h3>
        </div>
    </div>
    <!-- Name and card -->
    <div class="container py-4">
        <div class="auto shadow bg-white rounded">
            <div class="row mx-auto">
                <?php foreach ($drugs as $dr) : ?>
                    <div class="col-lg-3 col-sm-6 py-3">
                        <div class="card shadow bg-white rounded" style="width: 15rem; max-height: 300px">
                            <div class="card-body">
                                <img class="img-thumbnail" src="<?= base_url('assets/imgs/').'jahe.jpg' ?>" >
                                <h4 class="card-title text-capitalize"><?= $dr['name'] ?></h4>
                                <p class="card-text">
                                    <?= $dr['usability'] ?>
                                </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#description">
                                    See More
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="description" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Detail Drugs</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <di class="modal-body">
                                                <p id="value"><?= $dr['description'] ?></p>
                                                <p><?php 
                                                $test = $dr['making'];
                                                $array = explode(',', $test);
                                                ?>
                                                <ol>
                                                <?php
                                                foreach ($array as $a) { ?>
                                                   
                                                    <li><?php echo $a ?></li>
                                                <?php } ?>
                                                </ol>
                                                </p>
                                            </di>
                                            <div class="modal-footer mx-auto">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function yow(a,b) {
        $('#value').text(a+b);

    }
</script>