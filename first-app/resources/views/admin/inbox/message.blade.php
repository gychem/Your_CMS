<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <a class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="/admin/inbox/delete/{{ $message->id }}">Delete Message</a>
 
    <div class="mt-4">
        <b>Date</b> {{ $message->created_at }}<hr>
        <b>From:</b> {{ $message->name }}<hr>
        <b>E-mail:</b> {{ $message->email }}<hr>
        <b>Message:</b> {{ $message->message }}<hr>
    </div>

    </div>
</div>

</x-layout>