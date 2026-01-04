# Portfolio Website

A clean and modern portfolio website with WhatsApp integration and email contact form.

## Features

- ✨ Modern and clean design
- 📱 Fully responsive layout
- 💬 WhatsApp contact button
- 📧 Email contact form
- 🎨 Smooth animations and transitions
- 🚀 Fast and lightweight

## Setup Instructions

### 1. Update Your Information

**In `index.html`:**
- Replace "Your Name" with your actual name
- Update the hero subtitle and description
- Add your real email, phone, and location in the contact section
- Update social media links in the footer
- Customize project cards with your actual projects

**In `index.html` (WhatsApp button):**
- Update the WhatsApp number in the WhatsApp button link:
  ```html
  href="https://wa.me/YOUR_PHONE_NUMBER?text=Hello!%20I%20would%20like%20to%20get%20in%20touch."
  ```
  Replace `YOUR_PHONE_NUMBER` with your WhatsApp number (include country code, no + or spaces).
  Example: `1234567890` for US number +1 234 567 8900

### 2. Configure Email (Brevo/Sendinblue)

This project uses **Brevo** (formerly Sendinblue) Mailin API for reliable email delivery. Follow these steps:

#### Step 1: Create a Brevo Account
1. Sign up at https://www.brevo.com/ (free tier available - 300 emails/day)
2. Verify your email address

#### Step 2: Get Your API Credentials
1. Go to Brevo Dashboard > Settings > SMTP & API
2. Click on "API keys" tab
3. Copy your **API Email/Login** (e.g., `your-email@smtp-brevo.com`)
4. Generate and copy your **API Key** (password)

#### Step 3: Download Mailin.php Library
1. Download the `Mailin.php` file from Brevo documentation or dashboard
2. Place the `Mailin.php` file in the `mailin-api/` directory
3. See `mailin-api/README.md` for more details

#### Step 4: Configure Brevo
Edit `brevo_config.php` and update the following:

```php
define('BREVO_API_EMAIL', 'your-email@smtp-brevo.com'); // Your Brevo API email/login
define('BREVO_API_KEY', 'your-api-key-here'); // Your Brevo API key
define('BREVO_FROM_EMAIL', 'contact@yourdomain.com'); // Sender email
define('BREVO_FROM_NAME', 'Ym Hub'); // Sender name
define('BREVO_TO_EMAIL', 'youremail@gmail.com'); // Where to receive messages
define('BREVO_TO_NAME', 'Your Name'); // Recipient name
```

**Important Notes:**
- The `BREVO_FROM_EMAIL` can be any email address (no domain verification required for basic sending)
- Free tier includes 300 emails per day
- Make sure `Mailin.php` is placed in the `mailin-api/` directory

### 4. Test the Website

1. Start WAMP server
2. Open your browser and navigate to: `http://localhost/ymHub/`
3. Test the contact form and WhatsApp button

## Customization

### Colors
Edit the CSS variables in `styles.css`:
```css
:root {
    --primary-color: #6366f1;
    --secondary-color: #8b5cf6;
    /* ... */
}
```

### Sections
All sections are easily customizable in `index.html`. You can:
- Add/remove skill cards
- Update project cards
- Modify the about section
- Add more sections as needed

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

Free to use and modify for personal or commercial projects.

