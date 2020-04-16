<!-- Search -->
<div class="container text-center">
    <div class="container">
        <div class="row pt-4">
            <div class="col md-6 mx-auto" style="max-width: 75%;">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Disease Here ... " name="search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Name and card -->
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-capitalize">Hello <?= $name; ?></h3>
                <hr style="width: 250px; border-top: 3px solid #999; margin-bottom: 20px">
            </div>
        </div>
        <div class="auto shadow bg-white rounded">
            <div class="row mx-auto">
                <?php foreach ($disease as $d) : ?>
                    <div class="col-lg-3 col-sm-6 py-3">
                        <div class="card shadow bg-white rounded" style="width: 15rem; max-height: 300px">
                            <div class="card-body">
                                <h4 class="card-title text-capitalize"><?= $d['name'] ?></h4>
                                <p class="card-text">
                                    <?= $d['description'] ?>
                                </p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#description" onclick="yow('<?= $d['prevention'] ?>')">
                                    Tips
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="description" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Prevention And Drugs</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <di class="modal-body">
                                                <p id="value"></p>
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

<footer class="bg-light py-2">
    <h6>&copy All right reserved 2020</h6>
</footer>

<script type="text/javascript">
    function yow(a) {
        $('#value').text(a);
    }
</script>