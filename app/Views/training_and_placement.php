<?= view('partials/header') ?>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 text-justify">
      <h3>Training And Placement Cell</h3>
      <p>The Training & Placement Cell of Government Polytechnic Siwan is established to have institution- industry interaction and develop student skills to achieve success in professional carrier. The goal of Training & Placement Cell is to provide students a platform for using their potential to gain valuable experience by working in industry. The cell is associated with all the departments (i.e. Civil Engineering, Mechanical Engineering, Electrical Engineering, Electronics Engineering and Computer Science & Engineering). In the journey towards placement, many efforts (Like pre-placement talks, written tests, group discussion and mock interviews as per requirement of organization) are being set by departments of Training & placement cell. Apart from this the cell also helps the students who have fewer opportunities in private sector and are interested to join government sectors. We hope the Training & placement cell of Government Polytechnic Siwan will achieve best position amongst government polytechnic colleges in Bihar and be the first choice for the HRs to select the Diploma Engineers for their companies.</p>
      <strong>Objectives</strong>
      <ul style="padding-left:30px;clear:both;font-size:16px;">
        <li>The aim is to ensure that students have the information & skills necessary for an effective job search.</li>
        <li>Developing the students to meet the industries requirement and adjust themselves in technological changes.</li>
        <li>To motivate the students to develop technical and soft skills in terms of carrier planning, goal setting.</li>
        <li>To motivate students, aspire for higher studies and guiding them to appear in competitive exam like and Public Sector Examinations for best utilization of their technical knowledge.</li>
        <li>To organize campus placement drives for final year students by contacting HR department of reputed industries.</li>
        <li>To conduct professional training programmes such as Group discussion, written tests, mock interviews, and personality development sessions.</li>
        <li>To arrange industrial visit for students.</li>
        <li>To arrange summer training and internships in industries/institution.</li>
        <li>To provide link between students, alumni and work place.</li>
      </ul>

      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th colspan="3">Download Report Card of Session 2025-26</th>
              <td>
                <a href="<?= base_url('assets/document/report-25-26.pdf') ?>" download="report-25-26">
                  <button type="button" class="btn btn-info btn-sm">
                    <span class="glyphicon glyphicon-download-alt"></span>
                    Download File
                  </button>
              </td>
            </tr>
            <tr>
              <th>Sr.No</th>
              <th>Company Name</th>
              <th>Date</th>
              <th>No of Students Selected</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>LUMAX</td>
              <td><?php echo date("d-M-Y", strtotime("22 jan 2026")); ?></td>
              <td>66</td>
            </tr>
            <tr>
              <td>2.</td>
              <td>HAIER</td>
              <td><?php echo date("d-M-Y", strtotime("22 jan 2026")); ?></td>
              <td>16</td>
            </tr>
            <tr>
              <td>3.</td>
              <td>TALBROS</td>
              <td><?php echo date("d-M-Y", strtotime("22 jan 2026")); ?></td>
              <td>25</td>
            </tr>
            <tr>
              <td>4.</td>
              <td>ESCORTS KUBOTA LTD </td>
              <td><?php echo date("M-Y", strtotime("january 2026")); ?></td>
              <td>41</td>
            </tr>
            
            <tr>
              <td>5.</td>
              <td>WABTEC</td>
              <td><?php echo date("M-Y", strtotime("September 2025")); ?></td>
              <td>3</td>
            </tr>
            <tr>
              <td>6.</td>
              <td>MATE, BENGALURU</td>
              <td><?php echo date("M-Y", strtotime("September 2025")); ?></td>
              <td>111</td>
            </tr>
            <tr>
              <td>7.</td>
              <td>YOKOHAMA </td>
              <td><?php echo date("M-Y", strtotime("September 2025")); ?></td>
              <td>21</td>
            </tr>
            <tr>
              <td>8.</td>
              <td>REISE MITAS </td>
              <td><?php echo date("M-Y", strtotime("September 2025")); ?></td>
              <td>25</td>
            </tr>
            <tr>
              <td>9.</td>
              <td>TATA MOTORS </td>
              <td><?php echo date("M-Y", strtotime("September 2025")); ?></td>
              <td>5</td>
            </tr>
            <tr>
              <td>10.</td>
              <td>TATA PASSENGER ELECTRICAL MOBILITY </td>
              <td><?php echo date("d-M-Y", strtotime("17 Dec 2025")); ?></td>
              <td>26</td>
            </tr>
            <tr>
              <td>11.</td>
              <td>SOBHA LIMITED </td>
              <td><?php echo date("d-M-Y", strtotime("22 Dec 2025")); ?></td>
              <td>1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= view('partials/footer') ?>