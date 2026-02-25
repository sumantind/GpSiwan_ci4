<?= view('partials/header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Anti Ragging</h3>
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
                        <td>Anti Ragging Affidavit Format </td>
                        <td> <a href="<?= base_url('assets/document/Anti_Ragging_Affidavit_Format-1.pdf') ?>" download="Anti_Ragging_Affidavit_Format-1">
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