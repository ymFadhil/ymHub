# Brevo Mailin API Library

## Installation

Download the `Mailin.php` file from Brevo (Sendinblue) and place it in this directory.

### Option 1: Download from Brevo Dashboard
1. Log in to your Brevo account: https://app.brevo.com/
2. Go to **Settings** > **SMTP & API** > **API keys**
3. Look for the Mailin API library download link
4. Download `Mailin.php` and place it in this `mailin-api/` directory

### Option 2: Download from GitHub
The Mailin.php library can be found in Brevo's documentation or GitHub repositories.

## File Structure
```
mailin-api/
  └── Mailin.php  (Download this file)
```

## Usage
The `send_email.php` file will automatically include this library:
```php
require_once __DIR__ . '/mailin-api/Mailin.php';
```

## Note
If you cannot find the Mailin.php file, you can also use the newer Brevo PHP SDK via Composer:
```bash
composer require getbrevo/brevo-php
```

