<?php
/**
 * @file
 * Theme implementation to display the Google Analytics summary.
 */
?>
<div style="width:100%;">
  <div class="google-analytics-visits">
    <h3><?php print $date ; ?></h3>
  </div>

  <div style="width:100%">
    <h3><?php print t('Site Usage'); ?></h3>
	<h3>Your site had <?php print $summary['pageviews']; ?> pages viewed by <?php print $summary['entrances']; ?> people. <?php print $summary['newUsers'] ?> people were new to the site during this period.</h3>
	<div>
	</div>
    <table style="width:100%">
      <tr style="background: #e4e4e4;">
		<th style ="width:20%;padding:2px 0;"><?php print t('Visits'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['entrances']; ?></td>
        <th style ="width:20%;padding:2px 0;"><?php print t('Bounce Rate'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['bounces']; ?></td>
      </tr>
      <tr style="background: #efefef;">
		<th style ="width:20%;padding:2px 0;"><?php print t('Page views'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['pageviews']; ?></td>
        <th style ="width:20%;padding:2px 0;"><?php print t('Avg. Time on Site'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['time_on_site']; ?></td>
      </tr>
      <tr style="background: #e4e4e4;">
	    <th style ="width:20%;padding:2px 0;"><?php print t('Pages/Visit'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['pages_per_visit']; ?></td>
		<th style ="width:20%;padding:2px 0;"><?php print t('Unique Visitors'); ?></th>
        <td style ="width:20%;padding:2px 0;"><?php print $summary['newUsers']; ?></td>   
      </tr>
    </table>
  </div>
  <div>
	<p><strong>Smart Phones:</strong></p>
		<table>
			<tr>
				<th style ="width:12%;padding:2px 0; background:#E4E4E4;">Visits</th>      
				<td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][1]['visits'];?></td>
		      <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Bounce Rate</th>
		      <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round(($summary['mobile'][1]['bounces'] / $summary['mobile'][1]['entrances'])*100, 2), 2) .'%'?></td>
		      <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Page views</th>
		      <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][1]['pageviews'];?></td>
		      <th style ="width:12%;padding:2px 0;background:#E4E4E4;">% Smart Phones</th>
			  <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round($summary['mobile'][1]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td> 
		    </tr>
		</table>
	<p><strong>Tablet:</strong></p>
		<table>
			<tr>
			    <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Visits</th>
				<td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][0]['visits'];?></td>
			     <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Bounce Rate</th>
			     <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round(($summary['mobile'][0]['bounces'] / $summary['mobile'][0]['entrances'])*100, 2), 2) .'%'?></td>
			     <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Page views</th>
			     <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][0]['pageviews'];?></td>
			     <th style ="width:12%;padding:2px 0;background:#E4E4E4;">% Tablet</th>
				 <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round($summary['mobile'][0]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td>
			   </tr>
		</table>
	<p><strong>Desktop or Laptop:</strong></p>
		<table>
			<tr>
				  <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Visits</th>  
				  <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][2]['visits'];?></td>
				  <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Bounce Rate</th>
				  <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round(($summary['mobile'][2]['bounces'] / $summary['mobile'][2]['entrances'])*100, 2), 2) .'%'?></td>
				  <th style ="width:12%;padding:2px 0;background:#E4E4E4;">Page views</th>
				  <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print $summary['mobile'][2]['pageviews'];?></td>
				  <th style ="width:12%;padding:2px 0;background:#E4E4E4;">% Desktop</th>
				  <td style ="width:12%;padding:2px 0; background:#F2F2F2;"><?php print number_format(round($summary['mobile'][2]['sessions']/ ($summary['mobile'][0]['sessions'] + $summary['mobile'][1]['sessions'] + $summary['mobile'][2]['sessions'])*100, 2),2).'%';?></td>	  
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
	<div class="helpful_tips">
		<p><strong>Visits</strong> - We count visits as the number of people who come to the website during the given timeframe.  These are not unique, so a person that comes 5 times is counted 5 times.</p>
		<p><strong>Page views</strong> - Each page that somebody reads is a pageview.  If you click on the homepage, then contact page, then an article, thats counted as 3 page views. This is a good indicator of if your site has content people are interested in.</p>
		<p><strong>Bounce Rate</strong> - This is a percentage of people who come to one page and then leave quickly without browsing more pages.  We want a low percentage here.</p>
		<p><strong>Average time on site</strong> - This records the time somebody spends on the website.  It tosses out people that bounce quickly and also people who leave the site open for hours.  This is a good indicator of if your content is well read online.</p>
		<p><strong>New Visits</strong> - This is a simple percentage of people who have come for the first time during this reporting time period.</p>
		<p><strong>Unique Visitor</strong> - This is unique person who has come to the site one or more times during this reporting time period but only counted once for this report.  If they come 100 times, they are only recorded once in this report.</p>
		<p><strong>% Smart Phone, % Tablet, % Desktop</strong> - This is the percentage of visitors that came to your site using these devices.  Its the ratio of people who came using a smart phone/tablet/desktop to the overall number of people to the site during that time period.</p>
		<p><strong>Top Pages</strong> - This report lists the most read/viewed pages on the website for this reporting period.  When it lists the site name, thats the homepage, which is often the most read page. You may also click on the page title to view this page on your site.</p>
		<p><strong>Top Referrals</strong> - This report lists the top websites that people clicked links on and came to your site.</p>
		<p><strong>Top Keywords</strong> - This report lists the top keywords people used in search engines to find a link to your site. If the report lists (not provided) that often refers to google or bing not being able to get the information from the users tracking cookie.  In other words, they did a search to find your site, but google didn't know what they searched to do it.</p>
	</div>


  </div>
</div>