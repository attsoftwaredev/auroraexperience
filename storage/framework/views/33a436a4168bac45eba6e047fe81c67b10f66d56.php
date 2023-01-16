<style>
.card-stats .card-body
{
    box-shadow: 0 4px 25px 0 rgb(168 180 208 / 10%);
}
.card-stats p.card-text b {
    font-size: 12px;
    font-weight: 400;
    white-space: nowrap;
    font-family: 'IBM Plex Sans', sans-serif;
}
.card-stats .icon-success {
    color: #35cd3a;
}
.card-stats .icon-info
{
    color:#36a3f7;
}
.card-stats h4.card-title {
    font-weight: 600;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
.card.graph-card .card-title {
    font-weight: 600;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
.card-stats .icon-big i {
    font-size: 5rem;
    margin-right: 50px
}
.card-stats .card-body
{
       padding: 35px !important;
}
i.fa.fa-archive {
    color: #6c5ffc;
}
i.fa.fa-users {
    color: #dc3545;
}
i.fa.fa-thumbs-up {
    color: #FBB034;
}
i.fa.fa-tasks {
    color: #4b0082;
}
i.fa.fa-id-badge {
    color: #17a2b8;
}
i.fa.fa-file {
    color: #05c3fb;
}
</style>



<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->

    <?php if(session()->has('multipledomain')): ?>
        <div class="alert alert-danger" style="background-color: #FFE4E4;" id="license_alert">
            <strong>One Purchase Code Use in multiple domain :</strong>
            <?php $__currentLoopData = session()->get('multipledomain'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p style="margin-bottom: 0px;color: #155724;"><?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <hr>
            <strong>
                <?php echo e(__('Envato not allow to install script multiple domin using one purchase code. ')); ?>

                <br>
                <?php echo e(__('One purched codes for one Domin.
                Author can take action any time for that.')); ?>

                <br>
                <hr>
                <?php echo e(__('Author Contact : geniusdevs24@gmail.com')); ?>

            </strong>
        </div>
    <?php endif; ?>

    <div class="mb-4">
        <h3 class="mb-0 py-2 dash-title"><b><?php echo e(__('Dashboard')); ?></b></h3>
    </div>


    <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Total Orders')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalOrders); ?></h4>
                        </div>
                    </div>
                    <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fas fa-shopping-cart icon-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      
      <div class="col-xl-4 col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="mb-0 card-text"><b><?php echo e(__('Total Products')); ?></b></p>
                                <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalItems); ?></h4>
                            </div>
                        </div>
                        <div class="col-icon mr-2">
                            <div class="icon-big text-center bubble-shadow-small">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                             <p class="mb-0 card-text"><b><?php echo e(__('Total Customers')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalUsers); ?></h4>
                        </div>
                    </div>
                    <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                             <p class="mb-0 card-text"><b><?php echo e(__('Total Reviews')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalReview); ?></h4>
                        </div>
                    </div>
                     <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Total Transactions')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalTransaction); ?></h4>
                        </div>
                    </div>
                     <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Total Tickets')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalTicket); ?></h4>
                        </div>
                    </div>
                     <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fa fa-id-badge" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Pending Tickets')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalPendingTicket); ?></h4>
                        </div>
                    </div>
                     <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                           <i class="fa fa-id-badge" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Open Tickets')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalTicket); ?></h4>
                        </div>
                    </div>
                    <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                            <i class="fa fa-id-badge" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b><?php echo e(__('Total Blogs')); ?></b></p>
                            <h4 class="card-title" style="font-size: 40px;"><?php echo e($totalBlog); ?></h4>
                        </div>
                    </div>
                      <div class="col-icon mr-2">
                        <div class="icon-big text-center bubble-shadow-small">
                         <i class="fa fa-file" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-md-6">
        <div class="card graph-card">
            <div class="card-header">
                <div class="card-title"><?php echo e(__('Monthly Product Sales Report')); ?> </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="multipleLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card graph-card">
            <div class="card-header">
                <div class="card-title"><?php echo e(__('Monthly Earnings Report')); ?> </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="multipleLineChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card graph-card">
            <div class="card-header">
                <div class="card-title"><?php echo e(__('Recent Orders')); ?></div>
            </div>
            <div class="card-body pb-0">
                <div class="card-body">
                    <?php if($recentOrders->count() > 0): ?>
                      <div class="gd-responsive-table">
                          <table class="table table-bordered table-striped" id="recent-orders" width="100%" cellspacing="0">
                          <thead>
                              <th><?php echo e(__('Customer')); ?></th>
                              <th><?php echo e(__('Order ID')); ?></th>
                              <th><?php echo e(__('Payment Method')); ?></th>
                              <th><?php echo e(__('Total')); ?></th>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td>
                                      <a href="<?php echo e(route('back.user.show',$data->user_id)); ?>"><?php echo e($data->user->displayName()); ?></a>
                                  </td>
                                  <td>
                                      <a href="<?php echo e(route('back.order.invoice',$data->id)); ?>"><?php echo e($data->transaction_number); ?></a>
                                  </td>
                                  <td>
                                      <?php echo e($data->payment_method); ?>

                                  </td>
                                  <td>
                                      <?php echo e($data->currency_sign); ?><?php echo e(PriceHelper::OrderTotal($data)); ?>

                                  </td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                          </table>
                      </div>

                      <?php else: ?>
                      <p class="d-block text-center">
                          <?php echo e(__('No Order Found')); ?>

                      </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

  </div>


</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

    multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
    multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')


        var myMultipleLineChart = new Chart(multipleLineChart, {
			type: 'line',
			data: {
				labels: [<?php echo $order_days; ?>],
				datasets: [{
					label: "Product Sales",
					borderColor: "#1d7af3",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [<?php echo $order_sales; ?>]
				}]
			},
			options : {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});

        var myMultipleLineChart2 = new Chart(multipleLineChart2, {
			type: 'line',
			data: {
				labels: [<?php echo $earning_days; ?>],
				datasets: [ {
					label: "Earning"+' <?php echo e(PriceHelper::adminCurrency()); ?>',
					borderColor: "#f3545d",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#f3545d",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [<?php echo $total_incomess; ?>]
				}]
			},
			options : {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});


</script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webdesigntexas/public_html/auroraexperience/resources/views/back/dashboard/index.blade.php ENDPATH**/ ?>