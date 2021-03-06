

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="student?opt=mgst" style="color:white; text-decoration:none;">
					Total Student : <span class="badge"><?php echo $countTotalStudent; ?></span>	
				</a>				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary text-center">
			<div class="panel-heading">
				<a href="teacher" style="color:white; text-decoration:none;">
					Total Teacher : <span class="badge"><?php echo $countTotalTeacher; ?></span>	 	
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="classes" style="color:white; text-decoration:none;">
					Total Class : <span class="badge"><?php echo $countTotalClasses; ?></span>		
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<a href="marksheet?opt=mngms" style="color:white; text-decoration:none;">
					Total Marksheet : <span class="badge"><?php echo $countTotalMarksheet; ?></span>	
				</a>
			</div>			
		</div>
	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="fa fa-dollar-sign"></i> Lifetime Income </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo '$'.$totalIncome; ?> </b></h3>	
				</center>				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-money-check-alt"></i> Lifetime Expenses </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo '$'.$totalExpenses; ?></b></h3>	
				</center>
				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading "><i class="fa fa-dollar-sign"></i> Current Budget </div>
			<div class="panel-body">
				<center>
					<h3><b><?php echo '$'.$totalBudget; ?></b></h3>
				</center>
			</div>	
		</div>
	</div>

	
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#topNavDashboard").addClass('active');
    $("#calendar").fullCalendar();
  });
</script>

