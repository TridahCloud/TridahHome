<x-mail::message>
# Thank You for Contacting Us!

Hello {{ $name }},

We've received your message and appreciate you reaching out to us. Our team will review your inquiry and respond within 24-48 hours.

If you have any urgent questions, you can always reach us at team@tridah.cloud.

<x-mail::button url="{{ config('app.url') }}">
Visit Our Website
</x-mail::button>

Best regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>
