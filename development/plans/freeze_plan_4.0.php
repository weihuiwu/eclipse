<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2010-03-15
	#
	# Description: Eclipse project Helios release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 4.0 endgame plan";
	$pageKeywords	= "eclipse, 4.0, milestone, schedule, endgame, Helios";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		
<style type="text/css">
	table.schedule tr.current td {
		background-color: #F4EEFF;
	}
</style>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>July 26, 2010 - post-RC3 builds will only occur if necessary</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Detailed Timeline</h3>
	        <table class="schedule" border="0" cellspacing="0" cellpadding="0" align="center">
	          <tr>
	            <td align="right" height="20"><b>May 2010</b>&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">24</td>
	            <td align="right" height="20"> Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Transition to fix and polish mode</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#Transition"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr>
	            <td align="right" height="20"><b>June 2010</b>&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">17</td>
	            <td align="right" height="20"> Thu 19:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 0 build</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterM6"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	           <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">21</td>
	            <td align="right" height="20"> Mon 08:00 EDT</td>
	            <td height="20">&nbsp;<b>Start 1-day test pass against RC0</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassBeforeRC1"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>           
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">22</td>
	            <td align="right" height="20"> Tue 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC0"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">30</td>
	            <td align="right" height="20"> Wed 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 1 build</b></td>
	            <td height="20">&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#RC1"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td align="right" height="20"><b>July 2010</b>&nbsp;</td>
	          </tr>                 
	          <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">1</td>
	            <td align="right" height="20">Thu 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Start 1-day test pass against RC1 (U.S)</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassUsingRC1"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>          
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">5</td>
	            <td align="right" height="20">Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Start 1-day test pass against RC1 (Canada/Europe)</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassUsingRC1"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>          
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">6</td>
	            <td align="right" height="20">Tue 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC1"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">15</td>
	            <td align="right" height="20">Thu 19:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 2 build</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#RC2"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">19</td>
	            <td align="right" height="20">&nbsp;&nbsp;&nbsp;Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>All-day test pass against RC2</b></td>
	            <td height="20">&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#TestPassUsingRC2"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">20</td>
	            <td align="right" height="20">Tue 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Start fix pass</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#FixPassAfterRC2"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">rules</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">22</td>
	            <td align="right" height="20">Thu 19:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 3 build</b></td>
	            <td height="20">&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#RC3"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">goals</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
			  <tr>
	           <td height="20"></td>
	          </tr>
			   <tr>
	            <td height="20"></td>
	          </tr>
			   <tr class="current">
	            <td height="20"></td>
				<td align="right" height="20"></td>
	            <td align="right" height="20"></td>
	            <td height="20">&nbsp;&nbsp;<b>Post RC3 builds will be run as required to meet Eclipse SDK 4.0 goals.</b></td>
	            <td height="20">&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
			   <tr>
	            <td height="20"></td>
	          </tr>
			  <tr>
	            <td height="20"></td>
	          </tr>
			  <tr>
	            <td height="20"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>            
	            <td align="right" height="20">28</td>
	            <td align="right" height="20"></td>
	            <td height="20">&nbsp;&nbsp;<b>Eclipse SDK 4.0 and e4 July 2010 available</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b><a href="#R4.0"><img src="../images/jump_in_black.gif" border="0" hspace="3" width="12" height="10">details</a></b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>
	        </table>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html ">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/Eclipse/Release_checklist">Eclipse Release Checklist</a> -
				 lists various things that need to be checked before each release.</li>
			<li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_0.xml">Eclipse SDK 4.0 Plan</a></li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>What is the game plan?</h3>
	        <p>The Eclipse SDK 4.0 release endgame involves a sequence of test/fix
	        passes leading to the official 4.0 release. Even more than at other
	        times, we welcome all the help we can get with testing and fixing the
	        various Eclipse release candidates. To participate effectively everyone
	        needs to track this schedule closely so that we end up testing the
	        latest release candidate and entering <a href="http://bugs.eclipse.org/bugs/">bugzilla
	        bug reports</a> in time to be considered for the fix pass that
	        immediately follows, giving rise to the next release candidate.
	        Throughout the process, we are most concerned with &quot;stop ship&quot;
	        (P1) bugs that must be fixed before we can declare that we have a
	        release. If we discover a &quot;stop ship&quot; bug late in the process,
	        we may have to slip the schedule to allow it to be fixed and retested.
	        This is why it is so important to ferret out &quot;stop ship&quot; bugs
	        as early as possible, while there is still time left in the schedule to
	        address them. Most of the bugs that will be uncovered will be less
	        serious. 
	        </p>
	        <p>
	        During the fix passes, we prioritize the less serious bugs and
	        try to fix as many of the important ones as possible without
	        jeopardizing the schedule or the overall stability of the release. We're
	        always on the look out for &quot;regression&quot; type bugs where we
	        somehow manage to break something that had been working fine before.
	        Regressions are an important warning sign that our optimism and
	        enthusiasm is outpacing our understanding and abilities. Calling special
	        attention to regressions helps us to collectively bring our head back in
	        line with our feet, so to speak. With each cycle, we gradually raise the
	        bar on the kinds and numbers of changes that we will consider making,
	        until we reach a point where we would only fix &quot;stop ship&quot;
	        bugs and regressions. (The lesser bugs that we don't end up fixing will
	        be reconsidered for the next release.) Because of this progressive
	        tightening, the windows of opportunity for fixing problems within the
	        schedule are relatively narrow. Things works best if everyone pushes in
	        the right direction on the right things at the right times.
	        </p>
	        <p>As it is virtually impossible to work out all the details in advance, we will be
	        updating this page regularly to reflect current status and current
	        testing emphasis. If you are participating we suggest you bookmark this
	        page in your browser and check back frequently for updates. General
	        announcements during the endgame are posted to the <a href="mailto:platform-releng-dev@eclipse.org">platform-releng-dev@eclipse.org</a>
	        developer mailing list. Anyone participating in the endgame should be
	        subscribed to this list, and should direct any general questions and
	        comments about the process there as well.</p>
      	
	      	<p><b><a name="ReleaseCandidate"></a>Release Candidate</b> 
	          - Release candidate builds are like milestone builds. The main difference 
	          is that release candidate builds are usually immediately followed by 
	          a rigorous test pass. We test each release 
	          candidate to find serious bugs and to increase our confidence in what 
	          we have. We then fix the serious bugs in each release candidate to get 
	          the next release candidate, which ought to be even better. Each release 
	          candidate build is kicked off at the indicated time, with the goal being 
	          to have a release candidate available within 24 hours. As the build 
	          is ready, all of the teams validate it and declare it either &quot;go&quot; 
	          of &quot;no go&quot; for testing. Getting a build that is testable may 
	          require a few attempts. These happen in rapid succession, and we continue 
	          rebuilding and revalidating until we have our next release candidate. 
	          It is critical that we have enough time to do test passes. We will slide 
	          the schedule and use weekends as necessary if there are delays of more 
	          than 24 hours in getting a viable release candidate. Note that we will 
	          also do warm-up builds in the days leading up to each release candidate 
	          build to do early integration of fixes.</p>

	        <p><b><a name="TestPass"></a>Test Pass</b> - Once we have a release
	        candidate build in hand, we enter an intensive test pass for a limited
	        period of time. Each component team is responsible for preparing a
	        comprehensive test plan for their component. These component test plans
	        cover all the functionality that requires manual testing, and identifies
	        the operating environments in which the testing needs to be done. Each
	        component team is responsible for staffing and carrying out their test
	        plan each cycle. Each component team is expected to have most of the
	        team testing throughout each test pass (a small subset of the team may
	        be focused on concurrently preparing candidate fixes for &quot;stop
	        ship&quot; bugs or other high priority tasks). Everyone in the Eclipse
	        community is encouraged to participate in test passes and report bugs to
	        <a href="https://bugs.eclipse.org/bugs/">bugzilla</a>. Ideally, the bug
	        report should explicitly call attention to regressions and potential
	        &quot;stop ship&quot; problems.</p>

	        <p><b><a name="FixPass"></a>Fix Pass</b> - After each test pass, we analyze 
	          and prioritize the set of outstanding bugs and enter an intensive fix 
	          pass for a limited period of time where we try to fix the most pressing 
	          problems. The bugs that we intend to fix for the next release candidate 
	          are tagged accordingly (e.g., a bug tagged as Target 4.0 RC1 should 
	          be fixed as of the release candidate 1 build). &quot;stop ship&quot; 
	          bugs and regressions are always given first priority; less severe problems 
	          are addressed by decreasing priority and as many as possible are fixed 
	          in the time available. With each successive release candidate, we also 
	          tighten the rules for the kinds of changes will be allowed to the code 
	          base and increase the number of people that check the changes before 
	          they are released. The rules apply to any and all changes to the code. 
	          Any committer for any Eclipse component can perform the checking duties. 
	          All committers for a component have the right to veto a change (with 
	          an explanation) even after it has been released into the code base. 
	          If such a veto occurs, the change automatically comes out until the 
	          vetoing committer's concerns are addressed. The committer who releases 
	          a given change, the person that checks the change, and the component 
	          leads that approved making the change in the first place, are jointly 
	          responsible for seeing it through. In other words, we expect a strong 
	          commitment to <em>personally</em> help fix any problems caused by changes 
	          made in fix passes.</p>
      	</div>
		<div class="homeitem3col">
			<h3>Details</h3>
			<h4><a name="Transition"></a>Transition to fix and polish</h4>
      		<ul>
                <li>All components transition on May 24 to polishing and fixing 
                  bugs for remainder of release cycle.</li>
                <li>Ensure there is broad awareness for any major feature work still going on. 
                Please bring it up during an e4 bi-weekly call.</li>
                 <li>No changes are to be released without appropriate approval and associated bug report. See the fix pass 
                 <a href="#FixPassRules">rules of engagement</a> for specific approval requirements for each release candidate.
                 </li>
      		</ul>              
      		<h4><a name="RC0"></a>RC0/M7 Goals</h4>
      		<ul>
                <li>All components feature complete. 
                <li>Accurate prioritization of all outstanding defects.</li>
                <li>String externalization complete (including mnemonics).
                <li>4.0 test plans posted.</li>
      		</ul>
      		<h4><a name="RC1"></a>RC1 Goals</h4>
      		<ul>
                <li>Accurate prioritization of all outstanding defects.</li>
                <li>All work on polish items complete.</li>
                <li>Final API.</li>
                <li>No outstanding P1 defects. </li>
                <li>As few P2 defects as possible.</li>
      		</ul>
			<h4><a name="TestPassBeforeRC1"></a>Test pass prior to RC1</h4>
			<p>Two day test pass involving entire community, using 
            the most recent integration build to help stabilize HEAD for the upcoming RC1 build.
            Committers with high priority fixes to make for RC1 can opt out of testing
            to focus on getting in fixes.  However, all committers should be working
            with the test candidate build.
      		<h4><a name="RC2"></a>RC2 Goals</h4>
      		<ul>
                <li>Final artwork in place.
                <li>Accurate prioritization of all outstanding defects.
                <li>No outstanding P1 defects.
                <li>As few P2 defects as possible.</li>
      		</ul>
      		<h4><a name="TestPassUsingRC1"></a>Test pass using RC1</h4>
            <p>Concerted full day testing effort on RC1 involving
              entire community including all component teams.</p>
             <h4><a name="RC3"></a>RC3 Goals</h4>
              <ul>
                <li>Accurate prioritization of all outstanding defects.
                <li>No outstanding P1 defects.
                <li>As few P2 defects as possible.</li>
              </ul>
             <h4><a name="TestPassUsingRC2"></a>Test pass using RC2</h4>
            <p>Concerted 1-day testing effort on RC3 involving
              entire community including all component teams, searching for
              regressions and on the lookout for undiscovered &quot;stop
              ship&quot; defects.</p>
              <h4><a name="R4.0"></a>Release 4.0</h4>
              <p>Ship Eclipse SDK 4.0 during the last week of July.</p>
              <p>There is no formal test pass after RC3 and beyond other 
              than to check for last minute regressions. We will perform sanity 
              checking focused on documentation. Release 4.0 should be complete 
              and available for download as soon as we are satisfied with it.</p>
      	</div>
		<div class="homeitem3col">
			<a name="FixPassRules"><h3>Fix pass rules of engagement</h3></a>
			<a name="FixPassAfterM6"></a><h4>May 24 - June 18 - contributions to RC0</h4>
			<p><b>Focus:</b>(1) P1 defects, (2) performance defects, (3) special 
              &quot;polish&quot; items, (4) provisional API cleanup. Fixing other defects has lower priority.</p>
             <p><b>Fix approval:</b> None.</p>
             <p><b>API change approval:</b> None.</p>
             <p><b>Notification requirements:</b> None.</p>
             <p><b>Extra checking requirements:</b> None.</p>

			<a name="FixPassAfterRC0"></a><h4>June 22 - 30 - contributions to RC1</h4>
			<p><b>Focus:</b>(1) P1 defects, (2) performance defects, (3) special 
              &quot;polish&quot; items. Fixing other defects has lower priority.</p>
             <p><b>Fix approval:</b> None.</p>
             <p><b>API change approval:</b> PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.6, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</p>
             <p><b>Notification requirements:</b> None.</p>
             <p><b>Extra checking requirements:</b> None.</p>

			<a name="FixPassAfterRC1"></a><h4>July 6-16 - contributions to RC2</h4>
			<p><b>Focus:</b>(1) P1 defects, (2) performance defects, (3) special 
              &quot;polish&quot; items. Fixing other defects has lower priority.</p>
            <p><b>Fix approval:</b> Another committer must +1 your bug report. All changes 
              must have their associated bug reports tagged 4.0RC2. (Ongoing changes 
              to component documentation do not require special approval.)</p>
             <p><b>API change approval:</b> PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.5, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</p>
             <p><b>Notification requirements:</b> None.</p>
             <p><b>Extra checking requirements:</b>An additional committer must check all code changes 
              prior to release. Person who reported bug should mark the bug as 
              verified once they have retested.</p>

			<a name="FixPassAfterRC2"></a><h4>July 20-23 - contributions to RC3</h4>
			<p><b>Focus:</b>Serious defects only; documentation.</p>
            <p><b>Fix approval:</b> Two additional committers must +1 your bug report.
              In addition, any active committer can veto a change with cause. No changes are to be released without 
              associated bug report tagged 4.0RC3 including risk assessment and prior approvals. 
              (Ongoing changes to component documentation do not require special approval.)</p>
             <p><b>API change approval:</b> PMC must approve all API changes. No changes are to
              be released without prior approval and associated bug report.  
              Send the request for approval to the <a href="http://dev.eclipse.org/mhonarc/lists/eclipse-pmc/maillist.html">eclipse pmc</a> mailing list. 
              If a change is made to API to make it binary compatible with 3.6, technically this is still an API change, 
              and thus it should be treated in the same way as any other API change requests.</p>
             <p><b>Notification requirements:</b>Announce bug numbers of intended non-doc changes to <a href="mailto:platform-releng-dev@eclipse.org">platform-releng-dev@eclipse.org</a>
              mailing list.</p>
             <p><b>Extra checking requirements:</b>Two additional committers must check all code
              changes prior to release. Person who reported bug should mark the
              bug as verified once they have retested.</p>
        
    </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

