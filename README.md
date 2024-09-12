# PHP Example

This is an example for how to run PHP locally on a machine using only VS Code

## PHP
A download of php is needed for this to work.
https://windows.php.net/download/

## Extensions
These are the extensions that need to be downloaded for this project to work.

### PHP Server
- Id: brapifra.phpserver
- Description: Serve your Project with PHP
- Version: 3.0.2
- Publisher: brapifra
- VS Marketplace Link: https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver


### PHP Debug (Optional)
- Id: xdebug.php-debug
- Description: Debug support for PHP with Xdebug
- Version: 1.35.0
- Publisher: Xdebug
- VS Marketplace Link: https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug

### Settings
Set the `settings.json` for VS Code to have the proper file paths. 
```json
{
    "php.validate.executablePath": "C:\\Users\\PCHAPMAN82070\\Downloads\\php-8.3.11-nts-Win32-vs16-x64\\php.exe",
    "phpserver.phpPath": "C:\\Users\\PCHAPMAN82070\\Downloads\\php-8.3.11-nts-Win32-vs16-x64\\php.exe",
    "php.debug.executablePath": "C:\\Users\\PCHAPMAN82070\\Downloads\\php-8.3.11-nts-Win32-vs16-x64\\php.exe"
}
```