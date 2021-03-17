---
title: Contact
description: Get in touch.
---
@extends('_layouts.page')

@section('page')
<div class="container mx-auto max-w-2xl px-4">
     <form class="grid grid-cols-2 gap-4" name="contact" method="POST" data-netlify="true">
        <x-form.input-group label="Name" id="contact-name"> 
            <x-form.text id="contact-name" placeholder="Name" required />
        </x-form.input-group>
        <x-form.input-group label="Email" id="contact-email"> 
            <x-form.text id="contact-email" placeholder="Email" required />
        </x-form.input-group>
        <x-form.input-group class="col-span-full" label="Message" id="contact-message"> 
            <x-form.textarea id="contact-message" placeholder="What's on your mind?" required />
        </x-form.input-group>

        <div class="col-span-full">
            <x-form.button light="black" dark="white" />
        </div>
    </form>
</div>
@stop
