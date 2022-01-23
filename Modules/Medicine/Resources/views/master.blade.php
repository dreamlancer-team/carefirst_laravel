<x-app-layout>

    <x-header.header>
        <x-header.link name="Medicine" url="/medicine"></x-header.link>
        <x-header.link name="Brand" url="/medicine/brand"></x-header.link>
        <x-header.link name="Type" url="/medicine/type"></x-header.link>
        <x-header.link name="Category" url="/medicine/category"></x-header.link>
        <x-header.link name="Template" url="/medicine/template"></x-header.link>
    </x-header.header>

   @stack('main')

</x-app-layout>
