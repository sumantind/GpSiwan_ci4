<?= view('partials/header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Rule Book</h3>
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
                        <td>ACTS-01-16-02-2017 </td>
                        <td> <a href="<?= base_url('assets/document/ACTS-01-16-02-2017.pdf') ?>" download="ACTS-01-16-02-2017">
                                <button type="button" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-download-alt"></span>
                                    Download File
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>disciplinary rules Bihar Govt Colleges </td>
                        <td> <a href="<?= base_url('assets/document/disciplinary-rules-Bihar-Govt-Colleges.pdf') ?>" download="disciplinary-rules-Bihar-Govt-Colleges">
                                <button type="button" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-download-alt"></span>
                                    Download File
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Faculty and Student Rule Book </td>
                        <td> <a href="<?= base_url('assets/document/Faculty-and-Student-Rule-Book.pdf') ?>" download="Faculty-and-Student-Rule-Book">
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