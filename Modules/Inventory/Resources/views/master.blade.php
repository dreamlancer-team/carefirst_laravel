<x-app-layout>

    <x-header.header>
        <x-header.link name="Item Categories" url="/medicine/brand"></x-header.link>
        <x-header.link name="Items" url="/medicine/type"></x-header.link>
        <x-header.link name="Item Stocks" url="/medicine/type"></x-header.link>
        <x-header.link name="Issued Items" url="/medicine/type"></x-header.link>
    </x-header.header>

   @stack('main')

</x-app-layout>
