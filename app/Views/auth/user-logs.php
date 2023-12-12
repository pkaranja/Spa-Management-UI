<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h5 class="fs-4 fw-semibold mb-4">System Logs</h5>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover" id="dataTables-table" data-order='[[ 0, "desc" ]]'>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>IP Address</th>
                        <!-- <th>Location</th> -->
                        <th>Browser</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $log):?>
                        <tr>
                            <td><?= $log['date'] ?></td>
                            <td><?= $log['time'] ?></td>
                            <td><?= $log['name'] ?></td>
                            <td><?= $log['ip'] ?></td>
                            <!-- <td>Philippines</td> -->
                            <td><?= $log['browser'] ?></td>
                            <td><?= $log['status'] ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

<?= $this->endSection() ?>