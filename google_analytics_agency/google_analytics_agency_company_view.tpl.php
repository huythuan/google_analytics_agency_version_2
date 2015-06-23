<?php
$fromDate = isset($_GET['fromDate']) ? $_GET['fromDate'] : date('Y-m-d',strtotime('first day of last month'));
$toDate = isset($_GET['toDate']) ? $_GET['toDate'] : date('Y-m-d',strtotime('last day of last month'));
if(isset($_GET['email']) && $_GET['email']=='Email'){
	google_analytics_agency_request_send_mail($fromDate, $toDate );
	$send ="<div></div>";
}
?>
<form action="<?php $filterPage ?>" method="GET">

</form>
<form action="<?php $fromDate&$toDate?>" method="GET">
<p>From: <input type="text" class="datepicker" name="fromDate" size="12" value=<?php echo $fromDate; ?>>
To: <input type="text" class="datepicker" size="12" name="toDate" value=<?php echo $toDate; ?>>
<input type="submit" value="Apply"/> <input type="submit" value="Email" name="email"/></p>

</form>