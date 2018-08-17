<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-13 11:14:12 --> Query error: Table 'stoneweb_developer.ea_roles' doesn't exist - Invalid query: SELECT *
FROM `ea_roles`
WHERE `slug` = 'admin'
ERROR - 2018-08-13 14:41:00 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2018-08-13 14:41:00 --> #0 /home/smalio/Sites/easyappointments/application/controllers/Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 /home/smalio/Sites/easyappointments/system/core/CodeIgniter.php(532): call_user_func_array(Array, Array)
#3 /home/smalio/Sites/easyappointments/index.php(353): require_once('/home/smalio/Si...')
#4 {main}
