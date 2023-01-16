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

@extends('master.back')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->

    @if(session()->has('multipledomain'))
        <div class="alert alert-danger" style="background-color: #FFE4E4;" id="license_alert">
            <strong>One Purchase Code Use in multiple domain :</strong>
            @foreach (session()->get('multipledomain') as $item)
                <p style="margin-bottom: 0px;color: #155724;">{{ $item }}</p>
            @endforeach
            <hr>
            <strong>
                {{ __('Envato not allow to install script multiple domin using one purchase code. ') }}
                <br>
                {{ __('One purched codes for one Domin.
                Author can take action any time for that.') }}
                <br>
                <hr>
                {{ __('Author Contact : geniusdevs24@gmail.com') }}
            </strong>
        </div>
    @endif

    <div class="mb-4">
        <h3 class="mb-0 py-2 dash-title"><b>{{ __('Dashboard') }}</b></h3>
    </div>


    @include('alerts.alerts')
  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-4 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0 card-text"><b>{{ __('Total Orders') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalOrders }}</h4>
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
                                <p class="mb-0 card-text"><b>{{ __('Total Products') }}</b></p>
                                <h4 class="card-title" style="font-size: 40px;">{{ $totalItems }}</h4>
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
                             <p class="mb-0 card-text"><b>{{ __('Total Customers') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalUsers }}</h4>
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
                             <p class="mb-0 card-text"><b>{{ __('Total Reviews') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalReview }}</h4>
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
                            <p class="mb-0 card-text"><b>{{ __('Total Transactions') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalTransaction }}</h4>
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
                            <p class="mb-0 card-text"><b>{{ __('Total Tickets') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalTicket }}</h4>
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
                            <p class="mb-0 card-text"><b>{{ __('Pending Tickets') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalPendingTicket }}</h4>
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
                            <p class="mb-0 card-text"><b>{{ __('Open Tickets') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalTicket }}</h4>
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
                            <p class="mb-0 card-text"><b>{{ __('Total Blogs') }}</b></p>
                            <h4 class="card-title" style="font-size: 40px;">{{ $totalBlog }}</h4>
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
                <div class="card-title">{{__('Monthly Product Sales Report')}} </div>
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
                <div class="card-title">{{__('Monthly Earnings Report')}} </div>
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
                <div class="card-title">{{__('Recent Orders')}}</div>
            </div>
            <div class="card-body pb-0">
                <div class="card-body">
                    @if ($recentOrders->count() > 0)
                      <div class="gd-responsive-table">
                          <table class="table table-bordered table-striped" id="recent-orders" width="100%" cellspacing="0">
                          <thead>
                              <th>{{ __('Customer') }}</th>
                              <th>{{ __('Order ID') }}</th>
                              <th>{{ __('Payment Method') }}</th>
                              <th>{{ __('Total') }}</th>
                          </thead>
                          <tbody>
                              @foreach($recentOrders as $data)
                              <tr>
                                  <td>
                                      <a href="{{route('back.user.show',$data->user_id)}}">{{ $data->user->displayName()}}</a>
                                  </td>
                                  <td>
                                      <a href="{{route('back.order.invoice',$data->id)}}">{{ $data->transaction_number}}</a>
                                  </td>
                                  <td>
                                      {{ $data->payment_method}}
                                  </td>
                                  <td>
                                      {{$data->currency_sign}}{{PriceHelper::OrderTotal($data)}}
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                          </table>
                      </div>

                      @else
                      <p class="d-block text-center">
                          {{ __('No Order Found') }}
                      </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

  </div>


</div>


@endsection

@section('scripts')
<script>

    multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
    multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')


        var myMultipleLineChart = new Chart(multipleLineChart, {
			type: 'line',
			data: {
				labels: [{!! $order_days !!}],
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
					data: [{!! $order_sales !!}]
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
				labels: [{!! $earning_days !!}],
				datasets: [ {
					label: "Earning"+' {{PriceHelper::adminCurrency()}}',
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
					data: [{!!$total_incomess!!}]
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
@endsection






