<x-tests.app>
    <x-slot name="header">header1</x-slot>
    component test
    <x-tests.card title="title1" content="sentence" :message="$message" />
    <x-tests.card title="title2" />
    <x-tests.card title="I wanna change css" class="bg-red-300" />
</x-tests.app>