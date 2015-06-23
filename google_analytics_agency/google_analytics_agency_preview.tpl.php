<?php
/**
 * @file
 * Theme implementation to display the Google Analytics summary.
 */
?>
<?php
$fromDate = isset($_GET['fromDate']) ? $_GET['fromDate'] :  date('Y-m-d',strtotime('first day of last month'));
$toDate = isset($_GET['toDate']) ? $_GET['toDate'] : date('Y-m-d',strtotime('last day of last month'));
$filterPage = isset($_GET['filterPage']) ? $_GET['filterPage'] : null;


?>
<div>
	<p>Group: <a href="<?php print $GLOBALS['base_url'].'/google-analytics-agency-report-group/'.$grouping['tid'];?>" target="_blank"><?php print $grouping['name'];?></a></p>
	<p>Summary: <a href="<?php print $GLOBALS['base_url'].'/google-analytics-agency-report/';?>" target="_blank">Companies</a></p>
</div>
<form action="<?php $filterPage ?>" method="GET">

</form>
<form action="<?php $fromDate&$toDate&$filterPage ?>" method="GET">
<p>From: <input type="text" class="datepicker" name="fromDate" size="12" value=<?php echo $fromDate; ?>>
To: <input type="text" class="datepicker" size="12" name="toDate" value=<?php echo $toDate; ?>>
Pages: <input type="text"  size="12" name="filterPage" value=<?php echo $filterPage; ?>>
<input type="submit" value="Apply"/></p>

</form>

<div class="google-analytics-summary google-analytics-reports">
  <div class="google-analytics-visits">
    <?php print $summary['visit_chart']; ?>
  </div>

  <div class="google-analytics-totals">
    <h3><?php print t('Site Usage: '); ?></h3>
	<div>
		<p><?php print $summary['newUsers']; ?><strong> Unique Visitors</strong></p>
	</div>
    <table>
      <tr class="odd">
        <td><?php print $summary['entrances']; ?></td>
        <th><?php print t('Visits'); ?></th>
        <td><?php print $summary['bounces']; ?></td>
        <th><?php print t('Bounce Rate'); ?></th>
      </tr>
      <tr class="even">
        <td><?php print $summary['pageviews']; ?></td>
        <th><?php print t('Pageviews'); ?></th>
        <td><?php print $summary['time_on_site']; ?></td>
        <th><?php print t('Avg. Time on Site'); ?></th>
      </tr>
      <tr class="odd">
        <td><?php print $summary['pages_per_visit']; ?></td>
        <th><?php print t('Pages/Visit'); ?></th>
        <td><?php print $summary['new_visits'] ?></td>
        <th><?php print t('% New Visits'); ?></th>
      </tr>
    </table>
  </div>
  <div>
	<p><strong>Smart Phones:</strong></p>
		<table>
			<tr>
		      <td><?php print number_format($summary['mobile'][1]['sessions']);?></td>
		      <th>Visits</th>
		      <td><?php print number_format(round(($summary['mobile'][1]['bounces'] / $summary['mobile'][1]['entrances'])*100, 2), 2) .'%'?></td>
		      <th>Bounce Rate</th>
		      <td><?php print number_format($summary['mobile'][1]['pageviews']);?></td>
		      <th>Pageviews</th>
			  <td><?php print number_format(round($summary['mobile'][1]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td>
			  <th>Percentage</th>
		    </tr>
		</table>
	<p><strong>Tablet:</strong></p>
		<table>
			<tr>
			    <td><?php print number_format($summary['mobile'][0]['sessions']);?></td>
			     <th>Visits</th>
			     <td><?php print number_format(round(($summary['mobile'][0]['bounces'] / $summary['mobile'][0]['entrances'])*100, 2), 2) .'%'?></td>
			     <th>Bounce Rate</th>
			     <td><?php print number_format($summary['mobile'][0]['pageviews']);?></td>
			     <th>Pageviews</th>
				 <td><?php print number_format(round($summary['mobile'][0]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td>
				 <th>Percentage</th>
			   </tr>
		</table>
	<p><strong>Desktop:</strong></p>
		<table>
			<tr>
				  <td><?php print number_format($summary['mobile'][2]['sessions']);?></td>
				  <th>Visits</th>
				  <td><?php print number_format(round(($summary['mobile'][2]['bounces'] / $summary['mobile'][2]['entrances'])*100, 2), 2) .'%'?></td>
				  <th>Bounce Rate</th>
				  <td><?php print number_format($summary['mobile'][2]['pageviews']);?></td>
				  <th>Pageviews</th>
				  <td><?php print number_format(round($summary['mobile'][2]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td>
				  <th>Percentage</th>
			</tr>
		</table>
  </div>
  <div class="google-analytics-pages">
    <h3><?php print t('Top Pages'); ?></h3>
    <?php print $summary['pages']; ?>
  </div>

  <div class="clearfix">
    <div class="google-analytics-referrals">
      <h3><?php print t('Top Referrals'); ?></h3>
      <?php print $summary['referrals']; ?>
    </div>

    <div class="google-analytics-keywords">
      <h3><?php print t('Top Keywords'); ?></h3>
      <?php print $summary['keywords']; ?>
    </div>
  </div>
</div>
