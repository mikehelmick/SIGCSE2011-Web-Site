
		</div>
	</div>
  </div>


<div id="footer" class="clear">
  <div id="footerContent">	
	<div id="footerText">

		<table width="99%" id="footerTable"><tr>
        
	      <td align="center" width="33%" valign="top" class="footerCell">
	         <div class="SectionHeader"><div class="Full">
             <h2>Latest from Twitter</h2>
             </div></div>
             <br/>
             
             <script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript">
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'all'
  }
}).render().setUser('sigcse2011').start();
</script>
            
	      </td>
          <td align="left" width="33%" valign="top" class="footerCell" nowrap="nowrap">
             <div class="SectionHeader"><div class="Full">
             <h2>Follow Us</h2>
             </div></div>
             <br/>
             
             <ul>
              <li><a href="http://www.google.com/calendar/ical/abs97af8r10qelmu18ugihhiuk%40group.calendar.google.com/public/basic.ics"><img src="/sigcse2011/images/calendar.png" alt="Calendar" align="middle"/> Subscrbie to Calendar</a></li>
              <li><a href="http://twitter.com/sigcse2011"><img src="http://twitter-badges.s3.amazonaws.com/t_mini-a.png" alt="Twitter Logo" align="middle" /> Follow us on Twitter</a></li>
              <li><a href="http://www.facebook.com/group.php?gid=373261951323"><img src="/sigcse2011/images/facebook.png" alt="facebook" align="middle" /> Join us on Facebook</a></li>
             </ul>
             <br/>
             
             <?php include("flickr.php"); ?>
             
          </td>
          
	      <td align="left" width="33%" valign="top" class="footerCell">
            <div class="SectionHeader"><div class="Full">
             <h2>ACM | SIGCSE | 2011</h2>
             </div></div>
             <br/>
            
            <a href="http://www.sigcse.org/"><img src="/sigcse2010/images/logos/sigcse.gif" alt="SIGCSE Logo"/></a> <br />
	       <a href="http://www.acm.org/"><img src="/sigcse2010/images/logos/acm_logo.gif" alt="ACM Logo"/></a>
             <br/>
             
             <div class="SectionHeader"><div class="Full">
             <h2>The Details</h2>
             </div></div>
             <br/>
             
             Web site Copyright &copy; 2010, ACM SIGCSE <br/>        
    This page was last updated: <?php date_default_timezone_set('America/Los_Angeles');
	                                    print(date("F jS, Y @ h:i T", $updated)); ?><br/>    &nbsp;<br/>
    The SIGCSE 2011 Web site is open source:<br />
 <a href="http://github.com/mikehelmick/SIGCSE2011-Web-Site/tree/master">View the SIGCSE 2011 Source on GitHub</a><br/>
    &nbsp;<br/> 
    <?php if ( $mainPage == true ) { ?>
	       Site best viewed with <a href="getfirefox.com/"><img border="0" alt="Spreadfirefox Affiliate Button" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox3/110x32_best-yet.png" /></a>
	  <?php } ?>
	      </td>          
	  </tr></table>    
    
    
		</div>
	  </div>
	</div>

</div>

</body>
</html>