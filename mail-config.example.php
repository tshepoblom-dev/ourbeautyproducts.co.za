<?php
// ============================================================
// SMTP SETTINGS: fill these in. Never commit real passwords to Git.
// Common ports: 587 with 'tls' (STARTTLS), or 465 with 'ssl'.
// ============================================================
return [
  'smtp_host'     => 'mail.ourbeautyproducts.co.za',          // e.g. mail.YOURDOMAIN.co.za or smtp.office365.com
  'smtp_port'     => 587,
  'smtp_secure'   => 'tls',                // 'tls' or 'ssl'
  'smtp_username' => 'SMTP_USERNAME',      // usually the full mailbox address
  'smtp_password' => 'SMTP_PASSWORD',

  'from_email'    => 'FROM_EMAIL',         // must be a mailbox your SMTP account may send as
  'from_name'     => 'Our Beauty Products Website',

  'to_email'      => 'RECIPIENT_EMAIL',    // where enquiries should arrive
  'to_name'       => 'Our Beauty Products',

  'subject_prefix'=> 'Website enquiry',
];
