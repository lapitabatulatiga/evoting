

<?php $__env->startSection('content'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              <p>
                <a href="/master-pasien/create" class="btn btn-primary">Tambah</a>
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ama
                    </th>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Lahir</th>
                    <th>Nomor Telpon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->tanggal_lahir); ?></td>
                    <td><?php echo e($item->nomor_telpon); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td>
                      <a>Edit</a>
                      <a>Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ikbal\belajarLaravel\siantriKlinik\resources\views/master-pasien/index.blade.php ENDPATH**/ ?>