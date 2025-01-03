@extends('admin_layout')
@section('admin_content')
<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Khách</h4>
					<h3>5000</h3>
					<p></p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Người dùng</h4>
						<h3>1000</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Bán Hàng</h4>
						<h3>300</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Đơn hàng</h4>
						<h3>100</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		<!-- //market-->

		<!-- calendar -->
		<div class="col-md-6 agile-calendar">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Lịch</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">

							<div class="w3l-calendar-left">
								<div class="calendar-heading">

								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>

							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!-- //calendar -->
        <div class="col-md-4 stats-info widget">
            <div class="stats-info-agileits">
                <div class="stats-title">
                    <h4 class="title">Lượt truy cập bằng trình duyệt</h4>
                </div>
                <div class="stats-body">
                    <ul class="list-unstyled">
                        <li>GoogleChrome <span class="pull-right">90%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar green" style="width:85%;"></div>
                            </div>
                        </li>
                        <li>Microsoft Edge <span class="pull-right">7%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar red" style="width:78%;"></div>
                            </div>
                        </li>
                        <li>Safari <span class="pull-right">50%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar blue" style="width:50%;"></div>
                            </div>
                        </li>
                        <li>Cốc cốc<span class="pull-right">80%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar light-blue" style="width:80%;"></div>
                            </div>
                        </li>
                        <li class="last">khác <span class="pull-right">10%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar orange" style="width:60%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



@endsection
