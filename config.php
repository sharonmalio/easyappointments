<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'http://easyappointments.localhost';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------
    const MPESA_CONSUMER_KEY= 'mxHfXZgmIrq6aGkm0D4UOUV3ECp4g1OI';
    const MPESA_CONSUMER_SECRET='4KmjMiOe0sIIcnZS';
    const MPESA_ENV='sandbox'; 


    const DB_HOST       = 'localhost';
    const DB_NAME       = 'stoneweb_developer';
    const DB_USERNAME   = 'root';
    const DB_PASSWORD   = 'malio1234';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = TRUE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'stoneHMIS';
    const GOOGLE_CLIENT_ID      = '439285481397-hi4ph3i43shv1t1j86qso1813ltl5nhj.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = 'HCFxPHVsUSpTNJh5dljAynwa';
    const GOOGLE_API_KEY        = 'AIzaSyBlZ2pezMLfZ2AFVyhly0DzRHgH2wGMVT8';
    const REDIRECT_URI          = '"urn:ietf:wg:oauth:2.0:oob","http://easyappointments.localhost"';
    const AUTH_PROVIDER_X509_CERT_URL='https://www.googleapis.com/oauth2/v1/certs';
    const TOKEN_URI             = 'https://www.googleapis.com/oauth2/v3/token';
    const AUTH_URI              = 'https://accounts.google.com/o/oauth2/auth';
}

/* End of file config.php */
/* Location: ./config.php */
