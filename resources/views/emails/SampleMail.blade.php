@component('mail::message')
# Welcome To User , <br> Subject Mail 

Hi UserName,
<br>
This is mail text here your problem and mail of content 
<br>
please write here as laravel mail project and content here. 
<br>


@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent


@component('mail::button', ['url' => 'http://127.0.0.1:8000/mail', 'color' => 'success'])
Send Mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
