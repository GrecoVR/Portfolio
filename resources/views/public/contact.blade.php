@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1>Contact</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <x-form-input
            name="name"
            label="Name"
            type="text"
            required
        />

        <x-form-input
            name="email"
            label="Email"
            type="email"
            required
        />

        <x-form-input
            name="subject"
            label="Subject"
            type="text"
            required
        />

        <x-form-textarea
            name="message"
            label="Message:"
            required
        />
        <button type="submit">Send</button>
    </form>
    @if (session('success'))
        <div class="success-message" role="status">
            {{ session('success') }}
        </div>
    @endif
@endsection