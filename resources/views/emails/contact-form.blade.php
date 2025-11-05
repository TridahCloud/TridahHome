<x-mail::message>
# New Contact Form Submission

**From:** {{ $name }}  
**Email:** {{ $email }}  
**Subject:** {{ $subject }}

**Message:**

{{ $message }}

---

This message was sent through the contact form on {{ config('app.name') }}.
</x-mail::message>
