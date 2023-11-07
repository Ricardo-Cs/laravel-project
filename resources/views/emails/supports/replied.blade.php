<x-mail::message>
# Dúvida Respondida

Assunto da dúvida <b>{{ $reply->support['subject'] }}</b> foi respondida com <b>{{ $reply->content }}</b>.

<x-mail::button :url="route('replies.index', $reply->support_id)">
Ver resposta
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>