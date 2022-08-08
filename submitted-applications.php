<?php
  require 'inc/header.php';
?>
<div class="row mb-4" style="margin-right:20px; margin-left:10px;">
  <div class="card>">
    <div class="row">
      <form>
        <h6>Sort Applications by Status</h6>
        <button type="button" class="btn btn-info">Pending</button>
        <button type="button" class="btn btn-warning">Under Review</button>
        <button type="button" class="btn btn-success">Accepted</button>
        <button type="button" class="btn btn-danger">Rejected</button>
        <button type="button" class="btn btn-secondary">On Hold</button>

      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Submitted Applications</h6>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Application Type</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subitted By</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Submit Date</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View Application</th>
            </tr>
          </thead>
          <tbody>
            <?php require 'inc/adminapps.inc.php'; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
  require 'inc/footer.php';
?>
