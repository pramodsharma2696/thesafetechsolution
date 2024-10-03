<x-mail::message>
# Service Request

Hello,

You have received a new service request from your website. Here are the details:

- **Name:** {{ $data['name'] }}
- **Email:** {{ $data['email'] }}
- **Phone:** {{ $data['phone'] }}
- **Requested Service:** {{ $data['service'] }}

Please get in touch with the client to follow up.


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
