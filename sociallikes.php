<?php
 

function getSiteDeets($whichDeets) {
 			switch ($whichDeets){
				case '$path':		return '/home/organ151/public_html/tp';		break;
				case '$user':		return 'theCreator';						break;
				case '$pass':		return 'Joker999!';							break;
				case '$addy':		return 'trendypublishing.com';				break;
					case '$ua':		return 'UA-84079763-11';					break;
					case '$gtm':	return '';									break;
			case '$fbpageid':return '1209167032497461';					break;
			case '$fbappid':return '867691370038214';		break;
				case '$hash':return '@TrendyPublishin';					break;
				case '$twitcnkey' : return ''; break;
				case '$twitcnsrt' : return ""; break;
				case '$twitkey': return ""; break;
				case '$twitscrt':return ""; break;
			}	
	}
	}
	$sites = ("trendypublishin", "organisebiz","globetravelsear");
	foreach($sites as $site){){
	echo '	<div class="section black">
				<div class="row center">
					<div class="col m4 s12"><a href="https://twitter.com/' . $site . '" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow ' . $site . '</a>
					</div>
				</div>
			</div>';
			}
				
					
#    <!--login with FB button-->
	  echo '<div class="fb-login-button" data-max-rows="2" data-size="large" data-button-type="login_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="false"></div>';
 
#	<!-- FB like Button-->
   echo '<div  class="fb-like"  data-share="true"  data-width="450"  data-show-faces="true"></div>';	