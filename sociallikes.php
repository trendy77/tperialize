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
 #    <!--login with FB button-->
	  echo '<div class="fb-login-button" data-max-rows="2" data-size="large" data-button-type="login_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="false"></div>';

#     <!--twitter Button-->
  echo '<a href="https://twitter.com/' . getSiteDeets('$hash'); . '" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow ' . bloginfo( 'title' ) . '</a>';
   
 #  <!--FB follow Button-->
   echo '<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Forganisemybiz&width=450&height=80&layout=standard&size=small&show_faces=true&appId=1209167032497461" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><div class="fb-follow" data-href="https://www.facebook.com/organisemybiz" data-layout="standard" data-size="small" data-show-faces="true"></div>';
	
#	<!-- FB like Button-->
   echo '<div  class="fb-like"  data-share="true"  data-width="450"  data-show-faces="true"></div>';	