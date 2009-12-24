<?php
/* CONFIG START. DO NOT CHANGE ANYTHING IN OR AFTER THIS LINE. */
// $Horde: whups/config/conf.xml,v 1.38 2008/06/24 22:49:56 jan Exp $
$conf['tickets']['params']['driverconfig'] = 'horde';
$conf['tickets']['driver'] = 'sql';
$conf['guests']['captcha'] = false;
$conf['mail']['reply'] = false;
$conf['mail']['include_headers'] = false;
$conf['mail']['commenthistory'] = 'new';
$conf['mail']['incl_resp'] = true;
$conf['mail']['server_name'] = '127.0.0.1';
$conf['mail']['server_port'] = 80;
$conf['prefs']['autolink_terms'] = 'bug|ticket|issue';
$conf['prefs']['assign_all_groups'] = false;
$conf['menu']['apps'] = array();
$conf['states']['1']['name'] = 'Unconfirmed';
$conf['states']['1']['desc'] = 'A ticket has been reported but not yet analyzed';
$conf['states']['1']['category'] = 'unconfirmed';
$conf['states']['1']['active'] = 'active';
$conf['states']['2']['name'] = 'Accepted';
$conf['states']['2']['desc'] = 'The ticket has been analyzed and accepted as valid.';
$conf['states']['2']['category'] = 'new';
$conf['states']['2']['active'] = 'active';
$conf['states']['3']['name'] = 'Assigned';
$conf['states']['3']['desc'] = 'Someone has accepted responsibility for the ticket.';
$conf['states']['3']['category'] = 'assigned';
$conf['states']['3']['active'] = 'active';
$conf['states']['4']['name'] = 'Resolved';
$conf['states']['4']['desc'] = 'The ticket has been resolved.';
$conf['states']['4']['category'] = 'resolved';
$conf['states']['4']['active'] = 'active';
$conf['states']['5']['name'] = 'Canceled';
$conf['states']['5']['desc'] = 'The ticket is no longer valid for one reason or another.';
$conf['states']['5']['category'] = 'resolved';
$conf['states']['5']['active'] = 'active';
$conf['states']['6']['active'] = 'inactive';
$conf['states']['7']['active'] = 'inactive';
$conf['states']['8']['active'] = 'inactive';
$conf['priorities']['1']['name'] = '1. Low';
$conf['priorities']['1']['desc'] = 'This is a very low priority ticket';
$conf['priorities']['1']['active'] = 'active';
$conf['priorities']['2']['name'] = '2. Medium';
$conf['priorities']['2']['desc'] = 'This is an important task, but not urgent.';
$conf['priorities']['2']['active'] = 'active';
$conf['priorities']['3']['name'] = '3. High';
$conf['priorities']['3']['desc'] = 'This ticket is very urgent';
$conf['priorities']['3']['active'] = 'active';
$conf['priorities']['4']['active'] = 'inactive';
$conf['priorities']['5']['active'] = 'inactive';
$conf['priorities']['6']['active'] = 'inactive';
$conf['hooks']['update'] = false;
$conf['hooks']['group_fields'] = false;
/* CONFIG END. DO NOT CHANGE ANYTHING IN OR BEFORE THIS LINE. */
