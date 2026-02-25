<?= view('partials/header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>AICTE</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Document Name</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>AICTE Anti Ragging </td>
                        <td> <a href="<?= base_url('assets/document/AICTE_Anti_Ragging.pdf') ?>" download="AICTE_Anti_Ragging">
                                <button type="button" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-download-alt"></span>
                                    Download File
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>AICTE Anti Ragging Rules </td>
                        <td> <a href="<?= base_url('assets/document/AICTE_Anti_Ragging_Rules.pdf') ?>" download="AICTE_Anti_Ragging_Rules">
                                <button type="button" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-download-alt"></span>
                                    Download File
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= view('partials/footer') ?>