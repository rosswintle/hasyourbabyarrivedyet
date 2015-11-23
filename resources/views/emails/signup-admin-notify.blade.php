<!-- resources/views/emails/password.blade.php -->

<h2>New user!</h2>

<p>A new user has signed up to hasyourbabyarrivedyet.com:</p>

<p>
    <strong>Name</strong>: {{ $data['name'] }}<br>
    <strong>EMail</strong>: {{ $data['email'] }}<br>
    <strong>Display Name</strong>: {{ $data['display_name'] }}<br>
    <strong>Domain</strong>: {{ $data['domain'] }}<br>
</p>