<?php
// Include the Google API client library
require_once 'vendor/autoload.php';

// Include the configuration file
require_once 'config.php';

// Function to append data to Google Spreadsheet
function appendToSpreadsheet($data) {
    // Initialize the Google Sheets API client
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Get access token from refresh token
    $accessToken = json_decode(file_get_contents('token.json'), true);
    $client->setAccessToken($accessToken);

    // If there is no access token or it's expired, refresh token
    if ($client->isAccessTokenExpired()) {
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            die("No refresh token provided.");
        }
    }

    // Create Google Sheets service
    $service = new Google_Service_Sheets($client);

    // Spreadsheet ID and range
    $spreadsheetId = 'your_spreadsheet_id';
    $range = 'Sheet1!A1';

    // Prepare data to be appended
    $values = [
        $data // Data to be appended, e.g., ['John', 'Doe', 'john@example.com']
    ];

    // Prepare request to append data
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    // Send request to append data
    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, [
        'valueInputOption' => 'USER_ENTERED'
    ]);

    // Return result of append operation
    return $result;
}
?>
